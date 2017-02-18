<?php

class TourGuideModel extends CI_Model {

    public function getAllPlaces() {
        $this->db->select('*');
        $this->db->from('place');
        $result = $this->db->get();
        return $result;
    }

    public function getPlace($id) {
        $this->db->select('*');
        $this->db->from('place');
        $this->db->from('id', $id);
        $result = $this->db->get();
        return $result;
    }

}
