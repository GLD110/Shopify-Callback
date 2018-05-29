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
    $this->load->model('Settings_model');

    $request = $this->input->post();

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

    $my_timezone =  $this->Settings_model->getList()->result()[0]->value_wgt_timezone;
    $delta_hours = str_replace('GMT', '', $my_timezone) - str_replace('GMT', '', $request['time_gmt']);
    $time_hour = str_replace(':', '', $request['time_hour']);
    $my_hour = $time_hour + $delta_hours;
    if($my_hour < 0) $my_hour = $my_hour + 2400;
    if($my_hour > 2400) $my_hour = $my_hour - 2400;
    if($my_hour % 100 == 60) $my_hour = $my_hour - 60 + 100;
    if($my_hour < 1000) $my_hour = '0' . $my_hour;
    $my_time = substr($my_hour, 0, 2) . ':' . substr($my_hour, 2);

    var_dump(str_replace('GMT', '', $my_timezone));
    var_dump(str_replace('GMT', '', $request['time_gmt']));
    var_dump($request['time_day']);
    var_dump($request['time_month']);
    var_dump($my_time);

    $msg = 'Name: ' . $request['name'] . '<br>';
    $msg = $msg . 'Email: ' . $request['email'] . '<br>';
    $msg = $msg . 'Phone: ' . $request['phone'] . '<br>';
    $msg = $msg . 'Time: ' . date("Y") . '-' . $request['time_month'] . '-' . $request['time_day'] . ' ' . $request['time_hour'] . ' ' . $request['time_gmt'] . '<br>';
    $msg = $msg . 'Note: ' . $request['message'] . '<br>';
    $msg = $msg . 'Location: ' . $request['location'] . '<br>';
    $msg = $msg . 'Shop: ' . $request['shop'] . '<br>';

    $request['time_gmt'] = $my_timezone;
    $request['time_hour'] = $my_time;

    $msg_m = 'Name: ' . $request['name'] . '<br>';
    $msg_m = $msg_m . 'Email: ' . $request['email'] . '<br>';
    $msg_m = $msg_m . 'Phone: ' . $request['phone'] . '<br>';
    $msg_m = $msg_m . 'Time: ' . date("Y") . '-' . $request['time_month'] . '-' . $request['time_day'] . ' ' . $request['time_hour'] . ' ' . $request['time_gmt'] . '<br>';
    $msg_m = $msg_m . 'Note: ' . $request['message'] . '<br>';
    $msg_m = $msg_m . 'Location: ' . $request['location'] . '<br>';
    $msg_m = $msg_m . 'Shop: ' . $request['shop'] . '<br>';

    $this->Callrequest_model->addCallrequest($request);

    // Always set content-type when sending HTML email
    $headers = "MIME-Version: 1.0" . "\r\n";
    $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

    // More headers
    $headers .= 'From: noreply@call-back.io' . "\r\n";
    $headers .= 'Cc: noreply@call-back.io' . "\r\n";

    // use wordwrap() if lines are longer than 70 characters
    $msg = wordwrap($msg,70);
    $msg_m = wordwrap($msg_m,70);

    // send email
    @mail($service_email, $call_type, $msg_m, $headers);
    @mail($request['email'], $call_type, $msg, $headers);

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
