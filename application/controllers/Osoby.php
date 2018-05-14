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
        $this->load->model('Osoby_model');
        $this->load->model('Kurz_model');
        $this->load->helper('url_helper');
    }

    public function index(){
        $data['osobyvkurze'] = $this->Osoby_model->get_zucastneni();

        $this->load->view('template/header');
        $this->load->view('osoby/index', $data);
        $this->load->view('template/footer');
    }

    public function osobyvkurze($id){
        $id = $this->uri->segment(3);
        if(empty($id)){
            show_404();
        }

        $data['osobyvkurze'] = $this->Osoby_model->get_zucastneni($id);
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
        $data['osoba'] = $this->Osoby_model->get_osoby($id);

        $this->load->view('template/header');
        $this->load->view('template/navbar');
        $this->load->view('osoby/mojprofil', $data);
        $this->load->view('template/footer');
    }

    public function detailstudenta(){
        $ido = $this->uri->segment(3);
        if(empty($ido)){
            show_404();
        }
        $data['kurzystudenta'] = $this->Kurz_model->get_stud_kurzy($ido);
        $data['osoba'] = $this->Osoby_model->get_osoby($ido);

        $this->load->view('template/header');
        $this->load->view('template/navbar');
        $this->load->view('osoby/detailstudenta', $data);
        $this->load->view('template/footer');

    }

    public function updateprofil(){
        $id = $this->session->userdata('idecko');
        if(empty($id)){
            show_404();
        }
        $data = array(
            'Meno' => $_REQUEST['meno'],
            'Priezvisko' => $_REQUEST['priezvisko'],
            'Email' => $_REQUEST['email'],
            'TelKontakt' => $_REQUEST['telkontakt']
        );
        $this->Osoby_model->update_osoba($data, $id);
        redirect('osoby/zobrazprofil');
    }

}