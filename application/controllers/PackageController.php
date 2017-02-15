<?php

class PackageController extends CI_Controller {

    public function index($param) {
        $this->load->model('PackageModel');
        $data["package"] = $this->PackageModel->getPackage($param);
        $places = $this->PackageModel->getPlaces($param);
        $placeInfo = array();
        foreach ($places->result() as $row) {
            $placeInfoTemp = array();
            $hotels = $this->PackageModel->getHotelStar($row->place_id, "TWO");
            $activities = $this->PackageModel->getActivities($row->place_id);
            //$placeInfoTemp["place"] = array('id'=>$row->id, 'name'=>$row->place_name);
            $placeInfoTemp["place"] = $row;
            $placeInfoTemp["hotels"] = $hotels;
            $placeInfoTemp["activities"] = $activities;
            $placeInfo[] = $placeInfoTemp;
        }
        $data["places"] = $placeInfo;
        $this->load->view('packagePage', $data);
    }

    public function getHotelInfo() {
        $id = $this->input->post('packageId');
        $star = $this->input->post('star');

        $this->load->model('PackageModel');
        $places = $this->PackageModel->getPlaces($id);
        $hotelInfo = array();
        foreach ($places->result() as $row) {
            $temp = array();
            $hotels = $this->PackageModel->getHotelStar($row->place_id, $star);
            $hotelHtml = "";
            $roomHtml = "";
            foreach ($hotels->result() as $row) {
                $hotelHtml = $hotelHtml . "<option value='$row->hotel_id'>$row->hotel_name</option>";
            }
            if ($star == 'FIVE') {
                $roomHtml = "<option value='STANDARD'>Standard</option>"
                        . "<option value='DELUX'>Delux</option>"
                        . "<option value='SWEET'>Sweet</option>";
            } else {
                $roomHtml = "<option value='STANDARD'>Standard</option>"
                        . "<option value='DELUX'>Delux</option>";
            }
            $temp["h_id"] = 'h_' . $row->place_id;
            $temp["r_id"] = 'r_' . $row->place_id;
            $temp["s_id"] = 's_' . $row->place_id;
            $temp["hotels"] = $hotelHtml;
            $temp["rooms"] = $roomHtml;
            $hotelInfo[] = $temp;
        }
        echo json_encode($hotelInfo);
    }

    public function getHotelPlaceInfo() {
        $id = $this->input->post('placeId');
        $star = $this->input->post('star');

        $this->load->model('PackageModel');
        $hotels = $this->PackageModel->getHotelStar($id, $star);

        $hotelInfo = array();
        $temp = array();
        $hotelHtml = "";
        $roomHtml = "";
        foreach ($hotels->result() as $row) {
            $hotelHtml = $hotelHtml . "<option value='$row->hotel_id'>$row->hotel_name</option>";
        }

        if ($star == 'FIVE') {
            $roomHtml = "<option value='STANDARD'>Standard</option>"
                    . "<option value='DELUX'>Delux</option>"
                    . "<option value='SWEET'>Sweet</option>";
        } else {
            $roomHtml = "<option value='STANDARD'>Standard</option>"
                    . "<option value='DELUX'>Delux</option>";
        }
        $temp["hotels"] = $hotelHtml;
        $temp["rooms"] = $roomHtml;

        $hotelInfo = array();
        $hotelInfo[] = $temp;
        echo json_encode($hotelInfo);
    }
    
    public function getMapPlaces(){
        $id = $this->input->post('packageId');
        
        $this->load->model('PackageModel');
        $places = $this->PackageModel->getMapPlaces($id);
        $mapPlaces = array();
        foreach ($places->result() as $row){
            $temp = array();
            /*
            $temp["name"]=$row->name;
            $temp["latitude"]=$row->latitude;
            $temp["longitude"]=$row->longitude;
            $temp["id"]=$row->place_id;
             */
            $temp[] = $row->name;
            $temp[] = $row->latitude;
            $temp[] = $row->longitude;
            $temp[] = $row->place_id;
            $mapPlaces[]=$temp;
        }
        echo json_encode($mapPlaces);
    }

}
