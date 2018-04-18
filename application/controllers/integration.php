<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Integration extends MY_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('Integration_model');
        $this->load->model('Callrequest_model');

        // Define the search values
        $this->_searchConf  = array(
            'date' => date( 'Y-m-01 - Y-m-d' ),
            'type' => 'M',
        );
        $this->_searchSession = 'statis';
    }

    public function index(){
        $this->is_logged_in();

        $this->manage();
    }

    function manage(){
        // Check the login
        $this->is_logged_in();

        $emails = $this->Integration_model->getEmails();

        $data['emails'] = $emails->result();
        $data['todayList'] =  $this->Callrequest_model->todayList();

        //$this->load->view('view_header');
        $this->load->view('view_integration', $data);
        //$this->load->view('view_footer');
    }

    public function saveEmail(){
        $this->is_logged_in();
        $return = $this->Integration_model->saveEmails($this->input->post());
        if($return)
          echo 'Success';
    }
}
