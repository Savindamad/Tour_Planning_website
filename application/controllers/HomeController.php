<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class HomeController extends CI_Controller {

    public function index() {
        $this->load->model('HomeModel');
        $data["packages"] = $this->HomeModel->getRandPackages();
        $data["places"] = $this->HomeModel->getRandPlaces();
        $data["activities"] = $this->HomeModel->getRandActivities();
        $data["images"] = $this->HomeModel->getRandImages();
        //$data["companyInfo"] = $this->HomeModel->getCompanyInfo();
        $data["companyInfo"] = Array('name' => 'Walk Lanka Travels', 'description' => 'We at Walk Lanka Travels, wishes to offer you the best holiday experience in Sri Lanka. With the experience in the Sri Lankan tourism industry for decades, we have catered a wide variety of tourists from all over the world, and have realized all their holiday dreams. We offer a range of tour packeges at the best rate in the market. Our transpotation service provides you the most comfortable vehicles with the service of experienced tour guides. If you are looking for a tailor made holiday in Sri Lanka, please do tell us your preferences and don\'t hesitate to contact us. We are there to make your dream holiday in the paradise, a reality!', 'email' => 'savinadamaddd@gmail.com', 'address' => 'No 29/24,<br>Wawanawatta Road,<br>Mampe, Piliyanda<br>Sri Lanka<br><br>', 'phone' => '+94710408207', 'latitude' => '6.8018', 'longitude' => '79.9227');
        $this->load->view('homePage', $data);
    }

}
