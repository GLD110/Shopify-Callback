<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Callrequest extends MY_Controller {

  public function __construct() {
    parent::__construct();
    $this->load->model('Callrequest_model');
  }

  public function index(){
    $this->is_logged_in();

    $this->manage();
  }

  public function manage(){
    // Check the login
    $this->is_logged_in();

    $data['query'] =  $this->Callrequest_model->getList();

    $this->load->view('view_callrequest', $data );

  }

  public function addCallrequest(){
    $this->load->model('Callrequest_model');

    $requeset = $this->input->post();
    $this->Callrequest_model->addCallrequest($requeset);
    echo 'Success';
  }

  public function updateStatus()
  {
    // Check the login
    $this->is_logged_in();
    $callRequestId = $this->input->post('request_id');
    $status = $this->input->post('status');

    $this->Callrequest_model->updateCallrequest($callRequestId, $status);
    echo 'Success';
  }
}
