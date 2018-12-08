<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of updateTodoC
 *
 * @author rani9
 */
class updateTodoC extends CI_Controller{
       public function __construct() {
        parent::__construct();
        $this->load->model('TodoM');
        $this->load->helper('url','form');
        $this->load->library('form_validation');
        
    }
    
    public function chargement() {
        $data = array();
        $data['title'] = "Todo- Mettre a Jour";
        $this->load->view('include/head',$data);
        $this->load->view('updateTodo',$data);
    }
    public function mettreAjour($idTache){
        $this->TodoM->update($idTache,array("tache"=>$_POST["nom"] ,"ordre"=>$_POST["ordre"]));
    }
}
