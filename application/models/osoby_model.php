<?php
/**
 * Created by PhpStorm.
 * User: splat
 * Date: 8.5.2018
 * Time: 13:04
 */

class osoby_model extends CI_Model
{
    public function get_osoby($id = FALSE){
        if($id === FALSE){
            $query = $this->db->get('osoby');
            return $query->result_array();
        }

        $query = $this->db->get_where('osoby', array('idOsoby' => $id));
        return $query->row_array();
    }

    public function set_osoby($id = 0){
        $this->load->helper('url');

        foreach ($_POST as $key => $value){
            if ($key != 'submit'){
                $data[$key] = $value;
            }
        }

        if ($id == 0){
            return $this->db->insert('osoby', $data);
        }
        else{
            $this->db->where('idOsoby', $id);
            return $this->db->update('osoby', $data);
        }
    }

    public function get_zucastneni($id){
        if(!empty($id)){
             $this->db->select('Meno, Priezvisko, TelKontakt, Email');
             $this->db->from('osoby');
             $this->db->join('absolkurzy', 'osoby.idOsoby = absolkurzy.idOsoby');
             $this->db->where('absolkurzy.idKurz', $id);
             $query = $this->db->get();
             return $query->result_array();
        }
    }

    public function delete_customers($id){
        $this->db->where('idOsoby', $id);
        return $this->db->delete('osoby');
    }

}