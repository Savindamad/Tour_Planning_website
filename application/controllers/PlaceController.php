<?php

class PlaceController extends CI_Controller {

    public function index($id) {
        $this->load->model('PlaceModel');
        $data["place_info"] = $this->PlaceModel->getPlace($id);
        $data["activities"] = $this->PlaceModel->getActivities($id);
        $data["two_star_hotels"] = $this->PlaceModel->getTwoStarHotels($id);
        $this->load->view('placePage', $data);
    }

    public function getMapPlace() {
        $id = $this->input->post('placeId');

        $this->load->model('PlaceModel');
        $row = $this->PlaceModel->getPlace($id);
        $mapPlace = array("name", 6.9271, 79.8612, 1);

        //$mapPlace[] = $row->name;
        //$mapPlace[] = $row->latitude;
        //$mapPlace[] = $row->longitude;
        //$mapPlace[] = $row->id;

        echo json_encode($mapPlace);
    }

    public function getHotels() {
        $id = $this->input->post('placeId');
        $star = $this->input->post('star');

        $this->load->model('PlaceModel');
        $hotels = $this->PlaceModel->getStarHotel($id, $star);
        foreach ($hotels->result() as $row) {
            echo '<div class="row">
                                                    <div class="col-md-12">
                                                        <div class="row">
                                                            <div class="col-md-4" style="border: 1px">
                                                                <div class="thumbnail">';
            echo "<img alt='Bootstrap Thumbnail First' src='" . base_url($row->image) . "' />";
            echo '</div>
                                                            </div>
                                                            <div class="col-md-8">
                                                                <div class="thumbnail">
                                                                    <div class="caption">';
            echo "<h4>$row->name</h4>
                                                                        <p><small>$row->description</small></p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>";
        }
        if (sizeof($hotels->result()) == 0) {
            echo '<div class="row">
                    <div class="col-md-12">
                        <div class="row">
                            <div class="col-md-12">
                                <h4>No hotels found</h4>
                            </div>
                        </div>
                    </div>
                </div>';
        }
    }

}
