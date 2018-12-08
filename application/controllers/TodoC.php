<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of indexTodo
 *
 * @author rani9
 */
class TodoC extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('TodoM');
        $this->load->helper('url', 'form');
        $this->load->library('form_validation');
    }

    public function index() {
        if (isset($_SESSION["id"])) {
            $lesTodos = $this->TodoM->get_all();
            $data = array();
            $data['title'] = "Todo - Liste";
            $data['todos'] = $lesTodos;
            $data['nombreTotal'] = $this->TodoM->count_all();
            $data['nbrTacheNonFaite'] = $this->TodoM->count_Tache_Non_Faite();
            $data["nbrTacheFaite"] = $this->TodoM->count_Tache_Faite();
            $this->load->view("include/head",$data);
            $this->load->view('indexTodo', $data);
        } else {
            echo " Vous n'etes pas connecter";
        }
    }

    public function fait($id) {

        $params = array('completed' => 1);
        $this->TodoM->update($id, $params);
        redirect('TodoC/index');
    }

    public function pasFait($id) {

        $params = array('completed' => 0);
        $this->TodoM->update($id, $params);
        redirect('TodoC/index');
    }


    public function supprimer() {
        $checkbox = $_POST["supprimer"];
       
        foreach ($checkbox as $value) {
            echo $value;
           $this->TodoM->delete($value);
        }

        redirect('TodoC/index');
    }

    public function deconnexion() {
        session_destroy();
        redirect("connexionC/index");
    }

}
