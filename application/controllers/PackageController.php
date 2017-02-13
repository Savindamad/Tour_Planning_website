<?php

class PackageController extends CI_Controller {

    public function index($param) {
        $this->load->model('PackageModel');
        $data["packageInfo"] = $this->PackageModel->getPackage($param);
        $places = $this->PackageModel->getPlaces($param);
        $placeInfo = array();
        foreach ($places->result() as $row){
            $placeInfoTemp = array();
            $hotels = $this->PackageModel->getHotels($row->place_id);
            $activities = $this->PackageModel->getActivities($row->place_id);
            $placeInfoTemp["place"] = $row;
            $placeInfoTemp["hotels"] = $hotels;
            $placeInfoTemp["activities"] = $activities;
            $placeInfo[] = $placeInfoTemp;
        }
        $data["places"] = $placeInfo;
        $this->load->view('packagePage',$data);
    }
}
