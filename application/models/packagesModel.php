<?php

class packagesModel extends CI_Model {

    public function getPackages() {
        $this->db->select('*');
        $this->db->from('package_info');
        $result = $this->db->get();
        return $result;
    }

    public function getRandPackages() {
        $result = $this->db->query("SELECT * FROM package_info ORDER BY RAND() LIMIT 0,3;");
        return $result;
    }

}
