<?php
/**
 * Created by PhpStorm.
 * User: splat
 * Date: 9.5.2018
 * Time: 12:03
 */

class auth_model extends CI_Model
{
    function register(){
        $data = array(
            'Meno' => $_POST['meno'],
            'Priezvisko' => $_POST['priezvisko'],
            'TelKontakt' => $_POST['telkontakt'],
            'Email' => $_POST['email'],
            'login' => $_POST['login'],
            'password' => sha1($_POST['password']),
        );

        return $this->db->insert('osoby', $data);
    }

    function check(){
        $lectoris = $this->db->where('login', $_POST['login'])
                        ->where('password', sha1($_POST['password']))
                        ->get('lektori');
        $osobys = $this->db->where('login', $_POST['login'])
                            ->where('password', sha1($_POST['password']))
                            ->get('osoby');
        if($lectoris->num_rows()>0){
            return false;
        }elseif ($osobys->num_rows()>0){
            return false;
        }
        else return true;
    }

    function checklektor(){
        $lectoris = $this->db->where('login', $_POST['login'])
            ->where('password', sha1($_POST['password']))
            ->get('lektori');
        if($lectoris->num_rows()) return true;
        else return false;
    }
    function checkosoba(){
        $osobys = $this->db->where('login', $_POST['login'])
            ->where('password', sha1($_POST['password']))
            ->get('osoby');
        if($osobys->num_rows()) return true;
        else return false;
    }

    function getUserData($login, $datab){
        if($datab == 'lektori') $id = 'idLektori as idecko, ';
        elseif($datab == 'osoby') $id = 'idOsoby as idecko, ';
        $select = $this->db->select($id.'Meno, Priezvisko, login')->where('login', $login)->limit(1)->get($datab);
        if($select->num_rows()>0) return $select->row_array();
        else return false;
    }

}