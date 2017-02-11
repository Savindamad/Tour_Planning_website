<?php

class HotelsModel extends CI_Model {

    public function getAllHotels() {
        $this->db->select('*');
        $this->db->from('hotel');
        $result = $this->db->get();
        return $result;
    }

    public function getRandHotels() {
        $result = $this->db->query("SELECT * FROM hotel ORDER BY RAND() LIMIT 0,8;");
        return $result;
    }

    public function searchHotel($name) {
        
    }
}
