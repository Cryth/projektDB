<?php
/**
 * Created by PhpStorm.
 * User: splat
 * Date: 8.5.2018
 * Time: 12:38
 */
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller
{
    function __construct(){
        parent::__construct();
        if (!$this->session->userdata('logged_in')){
            redirect('login');
        }
    }

    public function index(){
        $this->load->view('template/header');
        $this->load->view('template/navbar');
        $this->load->view('template/vypln');
        $this->load->view('template/footer');
    }

}