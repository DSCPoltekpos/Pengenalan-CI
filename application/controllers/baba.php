<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class baba extends CI_Controller {

    public function index()
    {
       echo "hello dsc"; 
    }

    
    // public function hai()
    // {
    //     $this->load->view('hai');
    // }

    public function hai()
    {
        $this->load->view('hai');
    }
}
?>