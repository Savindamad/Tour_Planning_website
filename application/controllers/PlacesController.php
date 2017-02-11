<?php

class PlacesController extends CI_Controller {

    public function index() {
        $this->load->model('PlacesModel');
        $data["main_places"] = $this->PlacesModel->getAllPlaces();
        $data["other_places"] = $this->PlacesModel->getAllPlaces();
        $this->load->view('placesPage',$data);
    }

}
