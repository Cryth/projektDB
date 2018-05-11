<?php
/**
 * Created by PhpStorm.
 * User: splat
 * Date: 17.4.2018
 * Time: 8:40
 */

class Spolocnosti extends CI_Controller{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('spolocnosti_model');
        $this->load->helper('url_helper');
    }

    public function index(){
        $data = array();

        //ziskanie dat zo session
        if($this->session->userdata('success_msg')){
            $data['success_msg'] = $this->session->userdata('success_msg');
            $this->session->unset_userdata('success_msg');
        }
        if($this->session->userdata('error_msg')){
            $data['error_msg'] = $this->session->userdata('error_msg');
            $this->session->unset_userdata('error_msg');
        }
        $data['spolocnosti'] = $this->spolocnosti_model->getRows();
        $data['title'] = 'Temperature List';
        //nahratie zoznamu teplot
        //vytvorit template
    }
}