<?php

class PlacesController extends CI_Controller {

    public function index() {
        $this->load->model('PlacesModel');
        $data["main_places"] = $this->PlacesModel->getAllMainPlaces();
        $data["other_places"] = $this->PlacesModel->getRandOtherPlaces();
        $this->load->view('placesPage',$data);
    }

}
