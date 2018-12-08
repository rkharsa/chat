<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of connexionC
 *
 * @author rani9
 */
class connexionC extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('connexionM');
        $this->load->helper('url', 'form');
        $this->load->library('form_validation');
    }

    public function index() {
        $data = array();
        $data['title'] = "connexion";
        $this->load->view('include/head',$data);
        $this->load->view('connexion', $data);
    }

    public function connexion() {
        $connecter = $this->connexionM->verification();
        if ($connecter == true) {
            redirect("TodoC/index");
        } else {
            $alertErreur = '<div class="alert alert-danger" role="alert">
  Le mot de passe est incorrect
</div>';
            $data["erreur"] = $alertErreur;
            $this->load->view('connexion', $data);
        }
    }

}
