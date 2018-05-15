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

    public function spravaoblasti(){
        $data['oblasti'] = $this->Oblasti_model->get_oblasti();

        $this->load->view('template/header');
        $this->load->view('template/navbar');
        $this->load->view('oblast/spravaoblasti', $data);
        $this->load->view('template/footer');
    }


    public function pridanie(){
        $this->load->view('template/header');
        $this->load->view('template/navbar');
        $this->load->view('oblast/pridajoblast');
        $this->load->view('template/footer');
    }

    public function zmaz_oblast(){
        $id = $this->uri->segment(3);
        $this->Oblasti_model->delete_oblasti($id);
        $this->spravaoblasti();
    }

    public function pridajoblast(){
        $data = array(
            'Nazov' => $_POST['nazov'],
            'Popis' => $_POST['popis']
        );
        $this->Oblasti_model->insert_oblast($data);
        $this->spravaoblasti();
    }

    public function show_oblast(){
        $id = $this->uri->segment(3);

        if(empty($id)){
            show_404();
        }
        $data['oblast'] = $this->Oblasti_model->get_oblasti($id);
        $this->load->view('template/header');
        $this->load->view('template/navbar');
        $this->load->view('oblast/editoblast', $data);
        $this->load->view('template/footer');
    }

    public function updateoblast(){
        $id = $_POST['idecko'];
        if(empty($id)){
            show_404();
        }
        $data = array(
            'Nazov' => $_POST['nazov'],
            'Popis' => $_POST['popis']
        );
        $this->Oblasti_model->update_oblast($id, $data);
        $this->spravaoblasti();
    }
}