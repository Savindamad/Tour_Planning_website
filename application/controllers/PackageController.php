<?php

class PackageController extends CI_Controller {

    public function index($param) {
        $this->load->model('PackageModel');
        $data["packageInfo"] = $this->PackageModel->getPackage($param);
        $places = $this->PackageModel->getPlaces($param);
        $allHotels = array();
        $allActivities = array();
        foreach ($places->result() as $row){
            $hotels = $this->PackageModel->getHotels($row->place_id);
            $activities = $this->PackageModel->getActivities($row->place_id);
            $allHotels[] = $hotels;
            $allActivities[] = $activities;
        }
        $data["places"] = $places;
        $data["hotels"] = $allHotels;
        $data["activities"] = $allActivities;
        $this->load->view('packagePage',$data);
    }
}
