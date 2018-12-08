<?php

class connexionM extends CI_Model {

    function __construct() {
        parent::__construct();
    }

    public function verification() {
        $params = array("email" => $_POST['email'], "password" => $_POST["password"]);
        $result = $this->db->get_where("connexion",$params)->row_array();
        if (!$result){
        return false;
        }
        else{
           $_SESSION["password"]=$result["password"];
           $_SESSION["id"]=$result["id"];
           $_SESSION["email"]=$result["email"];
        return true;
        }
        
    }

}
