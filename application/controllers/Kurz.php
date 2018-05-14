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
        $this->load->model('Osoby_model');
        $this->load->model('Kurz_model');
        $this->load->helper('url_helper');
    }

    public function index(){
        $data['kurzy'] = $this->Kurz_model->get_kurz();
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

        $data['kurzy'] = $this->Kurz_model->get_kurzy($id);

        $this->load->view('template/header');
        $this->load->view('template/navbar');
        $this->load->view('kurz/index', $data);
        $this->load->view('template/footer');
    }

    public function moje_kurzy(){

        $data['kurzy'] = $this->Kurz_model->mojekurzy();
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
        $data['kurzysprava'] = $this->Kurz_model->spravakurzov($id);
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
        $this->Kurz_model->delete_kurz($id);
        $this->spravakurzov();
    }

    public function zobraz_kurz(){
        $id = $this->uri->segment(3);
        if(empty($id)){
            show_404();
        }

        if(!$this->session->userdata('lektor')){
            // ak ma kurz prihlaseny , nacitaj data o kurze
            if ($this->Kurz_model->ma_kurz($id)){
                $data['kurz'] = $this->Kurz_model->get_kurz($id);
                $data['osobyvkurze'] = $this->Osoby_model->get_zucastneni($id);
                $data['lektor'] = $this->Osoby_model->get_lektor($id);
                $data['makurz'] = true;
                $this->load->view('template/header');
                $this->load->view('template/navbar');
                $this->load->view('kurz/vypis_kurz', $data);
                $this->load->view('osoby/index', $data);
                $this->load->view('template/footer');
            }else{
                //ak nema kurz nacitaj stranku prihlasovania na kurz
                $data['kurz'] = $this->Kurz_model->get_kurz($id);
                $data['osobyvkurze'] = $this->Osoby_model->get_zucastneni($id);
                $data['lektor'] = $this->Osoby_model->get_lektor($id);
                $data['makurz'] = false;
                $this->load->view('template/header');
                $this->load->view('template/navbar');
                $this->load->view('kurz/vypis_kurz', $data);
                $this->load->view('osoby/index', $data);
                $this->load->view('template/footer');
            }
        }elseif($this->session->userdata('lektor')){
            $data['kurz'] = $this->Kurz_model->get_kurz($id);
            $data['osobyvkurze'] = $this->Osoby_model->get_zucastneni($id);
            $data['lektor'] = $this->Osoby_model->get_lektor($id);

            $this->load->view('template/header');
            $this->load->view('template/navbar');
            $this->load->view('kurz/vypis_kurz', $data);
            $this->load->view('osoby/index', $data);
            $this->load->view('template/footer');
        }
    }

    public function show_kurz(){
        $id = $this->uri->segment(3);

        if(empty($id)){
            show_404();
        }
        $data['kurz'] = $this->Kurz_model->get_kurz($id);
        $this->load->view('template/header');
        $this->load->view('template/navbar');
        $this->load->view('kurz/editkurz', $data);
        $this->load->view('template/footer');
    }

    public function pridanie(){
        $this->load->view('template/header');
        $this->load->view('template/navbar');
        $this->load->view('kurz/pridajkurz');
        $this->load->view('template/footer');
    }

    public function prihlasenie(){
        $ido = $this->session->userdata('idecko');
        $idk = $this->uri->segment(3);
        $this->Kurz_model->prihlaskurz($ido, $idk);
        $this->moje_kurzy();
    }
    public function odhlasenie(){
        $ido = $this->session->userdata('idecko');
        $idk = $this->uri->segment(3);
        $this->Kurz_model->odhlaskurz($ido, $idk);
        $this->moje_kurzy();
    }

    public function pridajkurz(){
        $data = array(
            'Nazov' => $_POST['nazov'],
            'Popis' => $_POST['popis'],
            'DatumOd' => $_POST['datumod'],
            'DatumDo' => $_POST['datumdo'],
            'idOblast' => $this->session->userdata('oblast'),
            'idLektori' => $this->session->userdata('idecko')
        );
        $this->Kurz_model->insert_kurz($data);
        $this->spravakurzov();
    }

    public function updatekurz(){
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
        $this->Kurz_model->update_kurz($id, $data);
        redirect(base_url().'kurz/show_kurz/'.$id);
    }
}