<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class PackagesController extends CI_Controller {

    public function index() {
        $this->load->model('PackagesModel');
        $data["packages"] = $this->PackagesModel->getPackages();
        $this->load->view('packagesPage',$data);
    }
}
