<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Progressbar extends MY_Controller {
    
    public function __construct() {
        parent::__construct();
        $this->load->model('Settings_model');
    }
    
    public function index(){
        $this->is_logged_in();
        
        $this->styles();
    }

    function settings(){
        // Check the login
        $this->is_logged_in();

        $data['query'] =  $this->Settings_model->getList();
        //$this->load->view('view_header1');
        $this->load->view('view_progressbar_settings', $data);
        //$this->load->view('view_footer1');
    }
    
    function styles(){
        // Check the login
        $this->is_logged_in();

        $data['query'] =  $this->Settings_model->getList();
        //$this->load->view('view_header');
        $this->load->view('view_progressbar_styles', $data);
        //$this->load->view('view_footer');
    }
    
    function advanced(){
        // Check the login
        $this->is_logged_in();

        $data['query'] =  $this->Settings_model->getList();
        //$this->load->view('view_header');
        $this->load->view('view_progressbar_advanced', $data);
        //$this->load->view('view_footer');
    }    
   
    function updateValue( $pk ){
        $this->Settings_model->update( 
            $pk,
            array( 'value' => $this->input->post('value') )
        );
    }
}            

