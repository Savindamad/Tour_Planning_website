<?php

class PlaceController extends CI_Controller {

    public function index($id) {
        $this->load->model('PlaceModel');
        $data["place_info"] = $this->PlaceModel->getPlace($id);
        $data["activities"] = $this->PlaceModel->getActivities($id);
        $data["two_star_hotels"] = $this->PlaceModel->getTwoStarHotels($id);
        $this->load->view('placePage', $data);
    }

}
