<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Settings extends MY_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('Settings_model');
    }

    public function index(){
        $this->is_logged_in();

        $this->settings();
    }

    function settings(){
        // Check the login
        $this->is_logged_in();

        $data['query'] =  $this->Settings_model->getList();
        //var_dump($data['query']->result()[0]);exit;
        //$this->load->view('view_header1');
        $this->load->view('view_widget_settings', $data);
        //$this->load->view('view_footer1');
    }

    function updateValue(){
        $this->Settings_model->updateValue();
    }
}
