<?php
/**
 * Created by PhpStorm.
 * User: splat
 * Date: 17.4.2018
 * Time: 8:20
 */
class spolocnosti_model extends CI_Model{

    public function __construct(){
    }

    //ziskanie zaznamov
    function getRows($id=""){
        if(!empty($id)){
            $query = $this->db->get_where('spolocnosti', array('id' => $id));
            return $query->row_array();
        }else{
            $query = $this->db->get('spolocnosti');
            return $query->result_array();
        }
    }

    //pridanie zaznamu
    public function insert($data = array()){
        $insert = $this->db->insert('spolocnosti', $data);
        if($insert){
            return $this->db->insert_id();
        }else{
            return false;
        }
    }

    //odstranenie zaznamu
    public function delete($id){
        $delete = $this->db->delete('spolocnosti', array('id'=>$id));
        return $delete?true:false;
    }


}

