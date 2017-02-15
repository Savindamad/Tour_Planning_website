<?php

class PlaceModel extends CI_Model {

    public function getPlace($id) {
        $this->db->select('*');
        $this->db->from('place');
        $this->db->where('id', $id);
        $result = $this->db->get();
        return $result->row();
    }

    public function getActivities($id) {
        $this->db->select('*');
        $this->db->from('place_activity_info');
        $this->db->where('place_activity_info.place_id', $id);
        $this->db->join('activity', 'place_activity_info.activity_id = activity.id');
        $result = $this->db->get();
        return $result;
    }

    public function getTwoStarHotels($id) {
        $this->db->select('*');
        $this->db->from('place_hotel_info');
        $this->db->where('place_hotel_info.place_id', $id);
        $this->db->where('place_hotel_info.hotel_star', 'TWO');
        $this->db->join('hotel', 'place_hotel_info.hotel_id = hotel.id');
        $result = $this->db->get();
        return $result;
    }

    public function getThreeStarHotels($id) {
        $this->db->select('*');
        $this->db->from('place_hotel_info');
        $this->db->where('place_hotel_info.place_id', $id);
        $this->db->where('place_hotel_info.hotel_star', 'THREE');
        $this->db->join('hotel', 'place_hotel_info.hotel_id = hotel.id');
        $result = $this->db->get();
        return $result;
    }

    public function getFourStarHotels($id) {
        $this->db->select('*');
        $this->db->from('place_hotel_info');
        $this->db->where('place_hotel_info.place_id', $id);
        $this->db->where('place_hotel_info.hotel_star', 'FOUR');
        $this->db->join('hotel', 'place_hotel_info.hotel_id = hotel.id');
        $result = $this->db->get();
        return $result;
    }

    public function getTwoFiveHotels($id) {
        $this->db->select('*');
        $this->db->from('place_hotel_info');
        $this->db->where('place_hotel_info.place_id', $id);
        $this->db->where('place_hotel_info.hotel_star', 'FIVE');
        $this->db->join('hotel', 'place_hotel_info.hotel_id = hotel.id');
        $result = $this->db->get();
        return $result;
    }
    
    public function getStarHotel($id, $star){
        $this->db->select('*');
        $this->db->from('place_hotel_info');
        $this->db->where('place_hotel_info.place_id', $id);
        $this->db->where('place_hotel_info.hotel_star', $star);
        $this->db->join('hotel', 'place_hotel_info.hotel_id = hotel.id');
        $result = $this->db->get();
        return $result;
    }

    public function getAllHotels($id) {
        $this->db->select('*');
        $this->db->from('place_hotel_info');
        $this->db->where('place_hotel_info.place_id', $id);
        $this->db->join('hotel', 'place_hotel_info.hotel_id = hotel.id');
        $result = $this->db->get();
        return $result;
    }

}
