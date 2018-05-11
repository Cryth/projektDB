<?php
/**
 * Created by PhpStorm.
 * User: splat
 * Date: 8.5.2018
 * Time: 13:48
 */

class oblasti_model extends CI_Model
{
    public function get_oblasti($id = FALSE){
        if($id === FALSE){
            $query = $this->db->get('oblast');
            return $query->result_array();
        }

        $query = $this->db->get_where('oblast', array('idOblast' => $id));
        return $query->row_array();
    }

    public function set_oblast($id = 0){
        $this->load->helper('url');

        foreach ($_POST as $key => $value){
            if ($key != 'submit'){
                $data[$key] = $value;
            }
        }

        if ($id == 0){
            return $this->db->insert('oblast', $data);
        }
        else{
            $this->db->where('idOblast', $id);
            return $this->db->update('oblast', $data);
        }
    }


    public function delete_oblasti($id){
        $this->db->where('idOblast', $id);
        return $this->db->delete('oblast');
    }
}