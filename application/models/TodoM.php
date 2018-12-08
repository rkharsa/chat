<?php

class TodoM  extends CI_Model {
    //put your code here
        function __construct() {
        parent::__construct();
    }
    
    function get_By_Id($id) {
        return $this->db->get_where('Todo',array('id'=>$id,'idClient'=>$_SESSION["id"]))->row_array();
    }
    
    function get_all() {
        $this->db->order_by("ordre");
        return $this->db->get_where('Todo',array('idClient'=>$_SESSION["id"]))->result_array();
         
    }
    
    function add($params) {
        $this->db->insert('Todo',$params);
        return $this->db->insert_id();
    }
    
    function update ($id,$params) {
        $this->db->where('id',$id);
        $this->db->update('Todo',$params);
    }
    
    function delete ($id) {
        $this->db->delete('Todo',array('id'=>$id));
    }

    function count_all(){
        return $this->db->where(array('idClient'=>$_SESSION["id"]))->from("Todo")->count_all_results();
    }
    function count_Tache_Non_Faite(){
        return $this->db->where(array('idClient'=>$_SESSION["id"],'completed'=>0))->from("Todo")->count_all_results();
    }
    function count_Tache_Faite(){
        return $this->db->where(array('idClient'=>$_SESSION["id"],'completed'=>1))->from("Todo")->count_all_results();
    }
    

}
