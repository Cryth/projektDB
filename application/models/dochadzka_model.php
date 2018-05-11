<?php
/**
 * Created by PhpStorm.
 * User: splat
 * Date: 8.5.2018
 * Time: 14:10
 */

class dochadzka_model extends CI_Model
{
    public function get_dochadzka($id = FALSE){
        if($id === FALSE){
            $query = $this->db->get('dochadzka');
            return $query->result_array();
        }

        $query = $this->db->get_where('dochadzka', array('idDochadzka' => $id));
        return $query->row_array();
    }

    public function set_dochadzka($id = 0){
        $this->load->helper('url');

        foreach ($_POST as $key => $value){
            if ($key != 'submit'){
                $data[$key] = $value;
            }
        }

        if ($id == 0){
            return $this->db->insert('dochadzka', $data);
        }
        else{
            $this->db->where('idDochadzka', $id);
            return $this->db->update('dochadzka', $data);
        }
    }

    public function get_dates($id){
        $this->db->select('SELECT Datum FROM Dochadzka WHERE idAbsolKurz='.$id.' ORDER BY Datum DESC', FALSE);
        return $this->db->get('dochadzka');
    }

    public function delete_dochadzka($id){
        $this->db->where('idDochadzka', $id);
        return $this->db->delete('dochadzka');
    }
}