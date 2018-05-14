<?php
/**
 * Created by PhpStorm.
 * User: splat
 * Date: 8.5.2018
 * Time: 13:53
 */

class Kurz_model extends CI_Model
{
    public function get_kurz($id = FALSE){
        if($id === FALSE){
            $query = $this->db->get('kurz');
            return $query->result_array();
        }

        $query = $this->db->get_where('kurz', array('idKurz' => $id));
        return $query->row_array();
    }

    public function get_kurzy($id){
        if(!empty($id)){
            $query = $this->db->get_where('kurz', array('idOblast' => $id));
            return $query->result_array();
        }
    }

    public function set_kurz($id = 0){
        $this->load->helper('url');

        foreach ($_POST as $key => $value){
            if ($key != 'submit'){
                $data[$key] = $value;
            }
        }

        if ($id == 0){
            return $this->db->insert('kurz', $data);
        }
        else{
            $this->db->where('idKurz', $id);
            return $this->db->update('kurz', $data);
        }
    }

    public function spravakurzov($id){
        if (empty($id)) return null;
        $this->db->where('idLektori', $id);
        return $this->db->get('kurz')->result_array();
    }

    public function mojekurzy(){
        $data = array();
        $id = $this->session->userdata('idecko');
        if (!$this->session->userdata('lektor')){
            $idkurzov = $this->db->select('idKurz')->where('idOsoby', $id)->get('absolkurzy')->result_array();
            foreach ($idkurzov as $kurz){
                $prvok = $this->db->select('*')->where('idKurz', $kurz['idKurz'])->get('kurz')->row_array();
                array_push($data, $prvok);
            };
            return $data;
        }elseif ($this->session->userdata('lektor')){
            $idkurzov = $this->db->select('idKurz')->where('idLektori', $id)->get('kurz')->result_array();
            foreach ($idkurzov as $kurz){
                $prvok = $this->db->select('*')->where('idKurz', $kurz['idKurz'])->get('kurz')->row_array();
                array_push($data, $prvok);
            };
            return $data;
        }
        return null;

    }


    public function insert_kurz($data){
        if(!empty($data)){
            return $this->db->insert('kurz', $data);
        }
        return null;
    }

    public function prihlaskurz($ido, $idk){
        if(!empty($ido) && !empty($idk)){
            $data = array(
                'idOsoby' => $ido,
                'idKurz' => $idk
            );
            return $this->db->insert('absolkurzy', $data);
        }
        return null;
    }

    public function odhlaskurz($ido, $idk){
        if(!empty($ido) && !empty($idk)){
            $this->db->where('idKurz', $idk)->where('idOsoby', $ido)->delete('absolkurzy');
            return ;
        }
        return null;
    }


    public function ma_kurz($idk){
        $ido = $this->session->userdata('idecko');
        $query = $this->db->select('idAbsolKurz')->where('idKurz', $idk)->where('idOsoby', $ido)->get('absolkurzy');
        if ($query->num_rows() > 0){
            return true;
        }else{
            return false;
        }
    }

    public function update_kurz($id, $data){
        if(!empty($id)){
            $this->db->where('idKurz', $id);
            $this->db->update('kurz', $data);
        }
    }

    public function delete_kurz($id){
        $this->db->where('idKurz', $id);
        $this->db->delete('absolkurzy');

        $this->db->where('idKurz', $id);
        return $this->db->delete('kurz');
    }
}