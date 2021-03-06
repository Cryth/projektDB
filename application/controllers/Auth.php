<?php
/**
 * Created by PhpStorm.
 * User: splat
 * Date: 9.5.2018
 * Time: 11:54
 */

class Auth extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Auth_model');
        $this->load->model('Oblasti_model');
    }

    function register(){
        $this->form_validation->set_rules('meno', 'Meno', 'trim|required');
        $this->form_validation->set_rules('priezvisko', 'Priezvisko', 'trim|required');
        $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
        $this->form_validation->set_rules('login', 'Login', 'trim|required');
        $this->form_validation->set_rules('password', 'Heslo', 'trim|required|min_length[6]');

        if ($this->form_validation->run() && $this->Auth_model->check()){
            if($this->Auth_model->register()){
                redirect('login');
            }else{
                echo validation_errors();
            }
        }else{
            echo validation_errors();
        }
        $this->load->view('register_view');
    }

    function registerlektor(){
        $this->form_validation->set_rules('meno', 'Meno', 'trim|required');
        $this->form_validation->set_rules('priezvisko', 'Priezvisko', 'trim|required');
        $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
        $this->form_validation->set_rules('login', 'Login', 'trim|required');
        $this->form_validation->set_rules('password', 'Heslo', 'trim|required|min_length[6]');

        if ($this->form_validation->run() && $this->Auth_model->check()){
            if($this->Auth_model->registerlektor()){
                redirect('registerlektor');
            }else{
                echo validation_errors();
            }
        }else{
            echo validation_errors();
        }
        $data['oblasti'] = $this->Oblasti_model->get_oblasti();
        $this->load->view('template/header');
        $this->load->view('template/navbar');
        $this->load->view('lektorregister_view', $data);
        $this->load->view('template/footer');
    }


    function login(){
        $this->form_validation->set_rules('login', 'Login', 'trim|required');
        $this->form_validation->set_rules('password', 'Heslo', 'trim|required');

        if ($this->form_validation->run()){
            if (!$this->Auth_model->check()){
                //vytvorime session
                if($this->Auth_model->checklektor()){

                    $data = $this->Auth_model->getUserData($_POST['login'], 'lektori');
                    $data['lektor'] = true;
                    $data['logged_in'] = true;

                    $this->session->set_userdata($data);
                    redirect('Home');

                }elseif ($this->Auth_model->checkosoba()){

                    $data = $this->Auth_model->getUserData($_POST['login'], 'osoby');
                    $data['lektor'] = false;
                    $data['logged_in'] = true;

                    $this->session->set_userdata($data);
                    redirect('Home');
                }

            }else{
                echo 'niesi zaregistrovany';
            }
        }else{
            echo validation_errors();
        }
        $this->load->view('login_view');
    }

    function logout(){
        $this->session->sess_destroy();
        $this->login();
    }


}