<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Callrequest extends MY_Controller {

  public function __construct() {
    parent::__construct();
    //$this->load->model( 'Callrequest_model' );

    // Define the search values
    /*$this->_searchConf  = array(
        'name' => '',
        'sku' => '',
        'page_size' => $this->config->item('PAGE_SIZE'),
        'sort_field' => 'product_id',
        'sort_direction' => 'DESC',
    );
    $this->_searchSession = 'product_app_page';*/
  }

  public function index(){
    $this->is_logged_in();

    $this->manage();
  }

  public function manage( $page =  0 ){
    // Check the login
    $this->is_logged_in();

    // Init the search value
    //$this->initSearchValue();

    // Get data
    /*$arrCondition =  array(
         'name' => $this->_searchVal['name'],
         'sort' => $this->_searchVal['sort_field'] . ' ' . $this->_searchVal['sort_direction'],
         'page_number' => $page,
         'page_size' => $this->_searchVal['page_size'],
    );*/
    //$data['query'] =  $this->Callrequest_model->getList( $arrCondition );
    // $data['total_count'] = $this->Product_model->getTotalCount();
    // $data['page'] = $page;
    //$data['shop'] = $this->session->userdata('shop');

    // Define the rendering data
    //$data = $data + $this->setRenderData();

    // Load Pagenation
    // $this->load->library('pagination');
    // $this->load->library( 'LiquidLib' );

    //$this->load->view('view_header');
    $this->load->view('view_callrequest');//, $data );
    //$this->load->view('view_footer');
  }
}
