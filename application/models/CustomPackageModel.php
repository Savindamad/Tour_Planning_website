<?php

class CustomPackageModel extends CI_Model {

    public function getAllPlaces() {
        $this->db->select('*');
        $this->db->from('place');
        $result = $this->db->get();
        return $result;
    }

    public function getHotels($placeId, $star) {
        $this->db->select('*');
        $this->db->from('place_hotel_info');
        $this->db->where('place_id', $placeId);
        $this->db->where('hotel_star', $star);
        $result = $this->db->get();
        return $result;
    }

}
