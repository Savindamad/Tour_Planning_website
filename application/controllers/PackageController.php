<?php

class PackageController extends CI_Controller {

    public function index($param) {
        $this->load->model('PackageModel');
        $this->load->view('packagePage');
    }
}
