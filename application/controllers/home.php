<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends MY_Controller {

   public function __construct() {
       parent::__construct();
       $this->load->model('User_model');
       $this->load->model('Callrequest_model');
       $this->load->model('Settings_model');
   }

   public function index(){

      // APP Redirect
      if( $this->config->item('PUBLIC_MODE')  )
      {
        // Set the shop domain from session or get
        $shop_domain = $this->session->userdata( 'shop' ) != '' ? $this->session->userdata( 'shop' ) : '';
        if( $this->input->get('shop') != '' ) $shop_domain = $this->input->get('shop');

        // Get the access token from database
        $access_token = '';
        if( $shop_domain != '' ){
          $this->load->model( 'Shopify_model' );
          $access_token = $this->Shopify_model->getAccessToken( $shop_domain );
        }

        // Check the cookie / Check the token is valid!!!
        if( $access_token == '' )
        {
          // If the acess_token is missing from database, then install the app
          if( $shop_domain == '' )
          {
            $data['shop'] = '';
            $this->load->view('view_newstore', $data );
          }
          else
          {
            redirect( 'newstore/register?shop=' . $shop_domain );
          }
        }
        else
        {
          // Save the access token and shop domain
          $this->session->set_userdata( array(
            'shop' => $shop_domain,
            'access_token' => $access_token
          ));
        }
      }
      else
      {
        $this->session->set_userdata( array(
            'shop' => $this->config->item('PRIVATE_SHOP'),
        ));
      }

      if( $this->session->userdata( 'shop' ) != '' )
      {
        if( isset($this->input->post('month'))) $month = $this->input->post('month');
        else $month = date( 'Y-m' );
        $this->Callrequest_model->rewriteParam($this->session->userdata( 'shop' ));
        $this->Settings_model->rewriteParam($this->session->userdata( 'shop' ));

        $data['total'] =  $this->Callrequest_model->getList();
        $data['todayList'] =  $this->Callrequest_model->todayList();
        $data['lastdayList'] =  $this->Callrequest_model->lastdayList();
        $data['todayPending'] =  $this->Callrequest_model->todayList('pending');
        $data['lastdayPending'] =  $this->Callrequest_model->lastdayList('pending');
        $data['weekList'] =  $this->Callrequest_model->weekList();
        $data['weekPending'] =  $this->Callrequest_model->weekList('pending');
        $data['monthList'] =  $this->Callrequest_model->monthList();
        $data['monthPending'] =  $this->Callrequest_model->monthList('pending');
        $data['month'] = $month;

        $settings = $this->Settings_model->getList();
        $temp = $settings->result()[0]->value_btn_status;
        if($temp == 'on'){
          $data['wgtStatus'] =  'Active';
        }
        else {
          $data['wgtStatus'] =  'Inactive';
        }

        $data['settings'] = $this->Settings_model->getList();

        $data['visitList'] = $this->Callrequest_model->visitList();

        //var_dump(count($data['todayList']->result()));exit;

        $this->load->view('view_home', $data);
      }
   }

   public function thedaylist(){
     if($this->input->post()){
       $date = $this->input->post()['date'];
       $this->Callrequest_model->rewriteParam($this->session->userdata( 'shop' ));
       $thedayPending = $this->Callrequest_model->thedayList($date)->result();
       echo json_encode($thedayPending);
     }
   }

   public function login(){
        $this->load->helper('cookie');

        $this->form_validation->set_rules('username','Username','required');
        $this->form_validation->set_rules('password','Password','required');

        if ($this->form_validation->run() == FALSE){
            echo validation_errors ('<div class="alert alert-dismissable alert-danger"><small>', '</small></div>' );
        }
        else
        {
            $name = $this->input->post('username');
            $password = $this->input->post('password');

            $loginCheck = $this->User_model->auth($name, $password);
            if( $loginCheck !== false ){

                // Set the cookie
                $this->input->set_cookie( $this->config->item('loginCookie'), $loginCheck );
            }
            else{
                echo'<div class="alert alert-dismissable alert-danger"><small>Please Check User Email or Password</small></div>' . $name;
            }
        }
    }

    public function logout()
    {
        $this->session->sess_destroy();
        delete_cookie();

        redirect('home' ,'refresh');
        exit;
    }

    public function sign_in()
    {
        $this->load->view('view_login');
    }

    public function sign_up()
    {
      $this->load->view('view_register');
    }

    public function sync()
    {
        $this->load->model( 'Shopify_model' );
        $this->load->model( 'Coupon_model' );
        $this->load->model( 'Order_model' );

        $cntNewOrder = 0;

        // Get the lastest day
        $last_day = $this->Order_model->getLastOrderDate();

        $param = 'status=any';
        if( $last_day != '' ) $param .= '&processed_at_min=' . urlencode( substr($last_day, 0, 10 ) );
        $action = 'orders.json?' . $param;

        // Retrive Data from Shop
        $orderInfo = $this->Shopify_model->accessAPI( $action );

        foreach( $orderInfo->orders as $order )
        {
            if( $this->Order_model->add( $order ) )
            {
                $this->Coupon_model->addUsage( $order );

                $cntNewOrder ++;
            }
        }

//        echo '<div class="alert alert-success">' . $cntNewOrder . ' order(s) are downloaded successfully</div>';
        return;
    }
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
