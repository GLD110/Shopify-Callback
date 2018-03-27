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

        //$data['query'] =  $this->Settings_model->getList();
        //$this->load->view('view_header1');
        $this->load->view('view_widget_settings');//, $data);
        //$this->load->view('view_footer1');
    }

    function updateValue( $pk ){
        $this->Settings_model->update(
            $pk,
            array( 'value' => $this->input->post('value') )
        );
    }
}
