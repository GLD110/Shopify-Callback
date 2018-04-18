<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Settings extends MY_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('Settings_model');
        $this->load->model('Integration_model');
        $this->load->model('Callrequest_model');
    }

    public function index(){
        $this->is_logged_in();

        $this->settings();
    }

    function settings(){
        // Check the login
        $this->is_logged_in();

        $data['query'] =  $this->Settings_model->getList();

        $emails = $this->Integration_model->getEmails();
        $data['emails'] = $emails->result();
        $data['todayList'] =  $this->Callrequest_model->todayList();

        //var_dump($data['query']->result()[0]);exit;
        //$this->load->view('view_header1');
        $this->load->view('view_widget_settings', $data);
        //$this->load->view('view_footer1');
    }

    function widget(){
        // Check the login
        $this->is_logged_in();

        $data['query'] =  $this->Settings_model->getList();

        $emails = $this->Integration_model->getEmails();
        $data['emails'] = $emails->result();

        $this->load->view('view_store_widget', $data);
    }

    function getWidget(){
        // Check the login
        header("Access-Control-Allow-Origin: *");
        header("Access-Control-Allow-Methods: GET, POST");

        if(isset( $_GET[ "shop" ] ))
          $shop = $_GET[ "shop" ];

        $this->Settings_model->rewriteParam( $shop );
        $data['query'] =  $this->Settings_model->getList();

        $this->Integration_model->rewriteParam( $shop );
        $emails = $this->Integration_model->getEmails();
        $data['emails'] = $emails->result();

        $this->load->view('view_store_widget', $data);
    }

    function getSettings(){
        header("Access-Control-Allow-Origin: *");
        header("Access-Control-Allow-Methods: GET, POST");
        header('Content-Type: application/json');

        if(isset( $_POST[ "shop" ] ))
          $shop = $_POST[ "shop" ];

        $this->Settings_model->rewriteParam( $shop );
        $query =  $this->Settings_model->getList();
        $data = $query->result();
        echo json_encode($data);
    }

    function updateValue(){
        $this->Settings_model->updateValue();
    }
}
