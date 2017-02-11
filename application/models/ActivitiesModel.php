<?php

class ActivitiesModel extends CI_Model {

    public function getAllActivities() {
        $this->db->select('*');
        $this->db->from('activity');
        $result = $this->db->get();
        return $result;
    }

    public function getRandActivities() {
        $result = $this->db->query("SELECT * FROM activity ORDER BY RAND() LIMIT 0,8;");
        return $result;
    }
    
    public function searchActivity($name){
        
    }
}

