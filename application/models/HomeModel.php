<?php

class HomeModel extends CI_Model {

    public function getRandPackages() {
        //$result = $this->db->query("SELECT * FROM package_info ORDER BY RAND() LIMIT 0,3;");
        $this->db->select('*');
        $this->db->from('package_info');
        $this->db->order_by("id", "random");
        $this->db->limit(3, 0);
        $result = $this->db->get();
        return $result;
    }

    public function getRandPlaces() {
        //$result = $this->db->query("SELECT * FROM place ORDER BY RAND() LIMIT 0,8;");
        $this->db->select('*');
        $this->db->from('place');
        $this->db->order_by("id", "random");
        $this->db->limit(8, 0);
        $result = $this->db->get();
        return $result;
    }

    public function getRandActivities() {
        //$result = $this->db->query("SELECT * FROM activity ORDER BY RAND() LIMIT 0,8;");
        $this->db->select('*');
        $this->db->from('activity');
        $this->db->order_by("id", "random");
        $this->db->limit(8, 0);
        $result = $this->db->get();
        return $result;
    }

}
