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
    $data['todayList'] =  $this->Callrequest_model->todayList();

    $this->load->view('view_callrequest', $data );

  }

  public function addCallrequest(){
    $this->load->model('Callrequest_model');
    $this->load->model('Integration_model');

    $request = $this->input->post();
    $this->Callrequest_model->addCallrequest($request);

    $emails = $this->Integration_model->getEmails();
    $call_type = $request['call_type'];

    if($call_type == 'general')
      $service_email = $emails->result()[0]->generalEmail;
    if($call_type == 'sales')
      $service_email = $emails->result()[0]->salesEmail;
    if($call_type == 'order')
      $service_email = $emails->result()[0]->orderEmail;
    if($call_type == 'corporate')
      $service_email = $emails->result()[0]->coporateEmail;
    if($call_type == 'complaint')
      $service_email = $emails->result()[0]->complaintEmail;
    if($call_type == 'other')
      $service_email = $emails->result()[0]->otherEmail;

    $msg = 'Name: ' . $request['name'] . '<br>';
    $msg = $msg . 'Email: ' . $request['email'] . '<br>';
    $msg = $msg . 'Phone: ' . $request['phone'] . '<br>';
    $msg = $msg . 'Time: ' . date("Y") . '-' . $request['time_month'] . '-' . $request['time_day'] . ' ' . $request['time_hour'] . ' ' . $request['time_gmt'] . '<br>';
    $msg = $msg . 'Note: ' . $request['message'] . '<br>';
    $msg = $msg . 'Location: ' . $request['location'] . '<br>';
    $msg = $msg . 'Shop: ' . $request['shop'] . '<br>';

    // Always set content-type when sending HTML email
    $headers = "MIME-Version: 1.0" . "\r\n";
    $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

    // More headers
    $headers .= 'From: noreplay@call-back.io' . "\r\n";
    $headers .= 'Cc: noreplay@call-back.io' . "\r\n";

    // use wordwrap() if lines are longer than 70 characters
    $msg = wordwrap($msg,70);

    // send email
    @mail($service_email, $call_type, $msg, $headers);

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
