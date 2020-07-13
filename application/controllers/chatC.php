<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of indexChat
 *
 * @author rani9
 */
class  chatC extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('chatM');
        $this->load->helper('url', 'form');
        $this->load->library('form_validation');
    }

    public function index() {
            $chats = $this->chatM->get_all();
			$data = array();
	
            $data['chats'] = $chats;

            $this->load->view("include/head",$data);
            $this->load->view('indexChat', $data);

    }

}
