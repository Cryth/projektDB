<?php
/**
 * Created by PhpStorm.
 * User: splat
 * Date: 8.5.2018
 * Time: 13:59
 */

class Kurz extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        if (!$this->session->userdata('logged_in')){
            redirect('login');
        }
        $this->load->model('osoby_model');
        $this->load->model('kurz_model');
        $this->load->helper('url_helper');
    }

    public function index(){
        $data['kurzy'] = $this->kurz_model->get_kurz();
        $data['title'] = 'Zoznam kurzov';

        $this->load->view('template/header', $data);
        $this->load->view('template/navbar');
        $this->load->view('kurz/index', $data);
        $this->load->view('template/footer');
    }

    public function oblast_kurz(){
        $id = $this->uri->segment(3);
        if(empty($id)){
            show_404();
        }

        $data['kurzy'] = $this->kurz_model->get_kurzy($id);

        $this->load->view('template/header');
        $this->load->view('template/navbar');
        $this->load->view('kurz/index', $data);
        $this->load->view('template/footer');
    }

    public function moje_kurzy(){

        $data['kurzy'] = $this->kurz_model->mojekurzy();
        if (empty($data['kurzy'])){
            redirect('Home');
        }
        $this->load->view('template/header');
        $this->load->view('template/navbar');
        $this->load->view('kurz/index', $data);
        $this->load->view('template/footer');
    }

    public function spravakurzov(){
        $id = $this->session->userdata('idecko');
        $data['kurzysprava'] = $this->kurz_model->spravakurzov($id);
        if (empty($data['kurzysprava'])){
            redirect('Home');
        }
        $this->load->view('template/header');
        $this->load->view('template/navbar');
        $this->load->view('kurz/spravakurzov', $data);
        $this->load->view('template/footer');

    }

    public function zmaz_kurz(){
        $id = $this->uri->segment(3);
        $this->kurz_model->delete_kurz($id);
        $this->spravakurzov();
    }

    public function zobraz_kurz(){
        $id = $this->uri->segment(3);
        if(empty($id)){
            show_404();
        }
        // ak ma kurz prihlaseny , nacitaj data o kurze
        if ($this->kurz_model->ma_kurz($id)){
            $data['kurz'] = $this->kurz_model->get_kurz($id);
            $data['osobyvkurze'] = $this->osoby_model->get_zucastneni($id);
            $data['lektor'] = $this->osoby_model->get_lektor($id);

            $this->load->view('template/header');
            $this->load->view('template/navbar');
            $this->load->view('kurz/vypis_kurz', $data);
            $this->load->view('osoby/index', $data);
            $this->load->view('template/footer');
        }else{
            //ak nema kurz nacitaj stranku prihlasovania na kurz
            $this->load->view('template/header');
            $this->load->view('template/navbar');
            //stranka na prihlasenie tu
            $this->load->view('template/footer');
        }
    }

    public function show_kurz(){
        $id = $this->uri->segment(3);
        if(empty($id)){
            show_404();
        }
        $data['kurz'] = $this->kurz_model->get_kurz($id);
        $this->load->view('template/header');
        $this->load->view('template/navbar');
        $this->load->view('kurz/editkurz', $data);
        $this->load->view('template/footer');
    }

    public function update_kurz(){
        $id = $_POST['idecko'];
        if(empty($id)){
            show_404();
        }
        $data = array(
            'Nazov' => $_POST['nazov'],
            'Popis' => $_POST['popis'],
            'DatumOd' => $_POST['datumod'],
            'DatumDo' => $_POST['datumdo']
        );
        $this->kurz_model->update_kurz($id, $data);
        redirect('kurz/show_kurz/'.$id);
    }
}