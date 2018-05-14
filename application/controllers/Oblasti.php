<?php
/**
 * Created by PhpStorm.
 * User: splat
 * Date: 8.5.2018
 * Time: 13:50
 */

class Oblasti extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        if (!$this->session->userdata('logged_in')){
            redirect('login');
        }
        $this->load->model('Oblasti_model');
        $this->load->helper('url_helper');
    }

    public function index(){
        $data['oblasti'] = $this->Oblasti_model->get_oblasti();
        $data['title'] = 'Oblasť kurzov';

        $this->load->view('template/header', $data);
        $this->load->view('template/navbar');
        $this->load->view('oblast/index', $data);
        $this->load->view('template/footer');
    }
}