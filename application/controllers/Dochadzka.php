<?php
/**
 * Created by PhpStorm.
 * User: splat
 * Date: 8.5.2018
 * Time: 14:20
 */

class Dochadzka extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('dochadzka_model');
        $this->load->helper('url_helper');
    }

    public function index(){
        $data['dochadzka'] = $this->dochadzka_model->get_dates();
        $data['title'] = 'Zoznam kurzov';

        $this->load->view('template/header', $data);
        $this->load->view('dochadzka/index', $data);
        $this->load->view('template/footer');
    }
}