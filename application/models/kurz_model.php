<?php
/**
 * Created by PhpStorm.
 * User: splat
 * Date: 8.5.2018
 * Time: 13:53
 */

class kurz_model extends CI_Model
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

    public function mojekurzy(){
        $data = array();
        $id = $this->session->userdata('idecko');
        $idkurzov = $this->db->select('idKurz')->where('idOsoby', $id)->get('absolkurzy')->result_array();
        foreach ($idkurzov as $kurz){
            $prvok = $this->db->select('*')->where('idKurz', $kurz['idKurz'])->get('kurz')->row_array();
            array_push($data, $prvok);
        };
        return $data;

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

    public function delete_kurz($id){
        $this->db->where('idKurz', $id);
        return $this->db->delete('kurz');
    }
}