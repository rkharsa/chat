<?php

class addTodoC extends CI_Controller {
     public function __construct() {
        parent::__construct();
        $this->load->model('TodoM');
        $this->load->helper('url','form');
        $this->load->library('form_validation');
        
    }
    
    public function chargement() {
        $data = array();
        $data['title'] = "Todo-Ajouter";
        $this->load->view('include/head',$data); 
        $this->load->view('addTodo',$data);
    }
    public function ajout(){
        $params = array('idClient'=>$_SESSION['id'],'ordre'=>$_POST['ordre'],'tache'=>$_POST['nom'],'completed'=>0);
        $this->TodoM->add($params);
        redirect('TodoC/index');
    }

}
