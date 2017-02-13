<?php

class PackageModel extends CI_Model {

    public function getPackage($packageId) {
        $this->db->select('*');
        $this->db->from('package_info');
        $this->db->where('id', $packageId);
        $result = $this->db->get();
        return $result->row();
    }
    public function getPlaces($packageId){
        $this->db->select('*');
        $this->db->from('package_place_info');
        $this->db->where('package_id', $packageId);
        $result = $this->db->get();
        return $result;
    }
    public function getHotels($placeId){
        $this->db->select('*');
        $this->db->from('place_hotel_info');
        $this->db->where('place_id', $placeId);
        $result = $this->db->get();
        return $result;
    }
    public function getActivities($placeId){
        $this->db->select('*');
        $this->db->from('place_activity_info');
        $this->db->where('place_id', $placeId);
        $result = $this->db->get();
        return $result;
    }

}
