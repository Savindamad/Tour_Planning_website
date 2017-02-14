<?php

class PlacesModel extends CI_Model {

    public function getAllMainPlaces() {
        $this->db->select('*');
        $this->db->from('place');
        $this->db->where('type', 'MAIN');
        $result = $this->db->get();
        return $result;
    }

    public function getRandMainPlaces() {
        $result = $this->db->query("SELECT * FROM place WHERE type = 'MAIN' ORDER BY RAND() LIMIT 0,4;");
        return $result;
    }

    public function getAllOtherPlaces() {
        $this->db->select('*');
        $this->db->from('place');
        $this->db->where('type', 'OTHER');
        $result = $this->db->get();
        return $result;
    }

    public function getRandOtherPlaces() {
        $result = $this->db->query("SELECT * FROM place WHERE type = 'OTHER' ORDER BY RAND() LIMIT 0,8;");
        return $result;
    }

    public function getRandPlaces() {
        $result = $this->db->query("SELECT * FROM place ORDER BY RAND() LIMIT 0,8;");
        return $result;
    }

    public function searchPlaces($name) {
        $this->db->select('*');
        $this->db->from('place');
        $this->db->like('name', $name);
        $result = $this->db->get();
        return $result;
    }
}
