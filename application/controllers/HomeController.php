<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class HomeController extends CI_Controller {

    public function index() {
        $this->load->model('HomeModel');
        $data["packages"] = $this->HomeModel->getRandPackages();
        $data["places"] = $this->HomeModel->getRandPlaces();
        $data["activities"] = $this->HomeModel->getRandActivities();
        $data["images"] = $this->HomeModel->getRandImages();
        $data["companyInfo"] = $this->HomeModel->getCompanyInfo();
        $this->load->view('homePage',$data);
    }
}
