<?php
/**
 * Created by PhpStorm.
 * User: splat
 * Date: 8.5.2018
 * Time: 13:02
 */

class Osoby extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        if (!$this->session->userdata('logged_in')){
            redirect('login');
        }
        $this->load->model('osoby_model');
        $this->load->helper('url_helper');
    }

    public function index(){
        $data['osobyvkurze'] = $this->osoby_model->get_zucastneni();

        $this->load->view('template/header');
        $this->load->view('osoby/index', $data);
        $this->load->view('template/footer');
    }

    public function osobyvkurze($id){
        $id = $this->uri->segment(3);
        if(empty($id)){
            show_404();
        }

        $data['osobyvkurze'] = $this->osoby_model->get_zucastneni($id);
        $data['idkurz'] = $id;

        $this->load->view('template/header');
        $this->load->view('template/navbar');
        $this->load->view('osoby/index', $data);
        $this->load->view('template/footer');
    }

    public function zobrazprofil(){
        $id = $this->session->userdata('idecko');
        if(empty($id)){
            show_404();
        }
        $data['osoba'] = $this->osoby_model->get_osoby($id);

        $this->load->view('template/header');
        $this->load->view('template/navbar');
        $this->load->view('osoby/mojprofil', $data);
        $this->load->view('template/footer');
    }

    public function updateprofil(){
        $id = $this->session->userdata('idecko');
        if(empty($id)){
            show_404();
        }
        $data = array(
            'Email' => $_REQUEST['email'],
            'TelKontakt' => $_REQUEST['telkontakt']
        );
        $this->osoby_model->update_osoba($data, $id);
        redirect('osoby/zobrazprofil');
    }

}