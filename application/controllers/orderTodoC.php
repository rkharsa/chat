<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of orderTodoC
 *
 * @author rani9
 */
class orderTodoC extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('TodoM');
        $this->load->helper('url', 'form');
        $this->load->library('form_validation');
    }

    public function chargement() {
        if (isset($_SESSION["id"])) {
            $lesTodos = $this->TodoM->get_all();
            $data = array();
            $data['title'] = "Todo-Reordonner";
            $data['todos'] = $lesTodos;
            $data['nombreTotal'] = $this->TodoM->count_all();
            $data['nbrTacheNonFaite'] = $this->TodoM->count_Tache_Non_Faite();
            $data["nbrTacheFaite"] = $this->TodoM->count_Tache_Faite();
            $this->load->view("include/head",$data);
            $this->load->view('todoOrder', $data);
        } else {
            echo " Vous n'etes pas connecter";
        }
    }

    public function reordonner(){
             
        $allTodo=$this->TodoM->get_all();
        foreach ($allTodo as $attribut){
            $name="ordre".$attribut["id"];
            $this->TodoM->update($attribut["id"],array("ordre"=>$_POST[$name]));
        }
        $this->chargement();
    }
 

}


