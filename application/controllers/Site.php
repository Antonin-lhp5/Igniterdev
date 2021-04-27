<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Site extends CI_Controller {
    public function index() {

        $data["title"] = "Page d'accueil";
        $data["sub"] = "Toute l'actu d'Antonin";

        $this->load->view('common/header', $data);
        $this->load->view('site/index', $data);
        $this->load->view('common/footer');

    }

    public function contact() {
        $data["title"] = "Page de contact";
        $this->load->helper("form");

        $data["title"] = "Contact";
  
        $this->load->view('common/header', $data);
        $this->load->view('site/contact', $data);
        $this->load->view('common/footer', $data);
      }
    
}