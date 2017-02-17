<?php

class CustomPackageController extends CI_Controller {

    public function index() {
        $this->load->model('CustomPackageModel');
        $data["places"] = $this->CustomPackageModel->getAllPlaces();
        $this->load->view('customPackagePage', $data);
    }

    public function getHotels() {
        $id = $this->input->post('placeId');
        $star = $this->input->post('star');
        $this->load->model('CustomPackageModel');
        $hotels = $this->CustomPackageModel->getHotels($id, $star);

        foreach ($hotels->result() as $row) {
            echo "<option value='$row->hotel_id'>$row->hotel_name</option>";
            //echo "<option value='1'>name</option>";
        }
    }

    public function getHotelsStar() {
        $places = $this->input->post('places');
        $star = $this->input->post('star');

        $this->load->model('CustomPackageModel');
        $hotelsArray = array();

        foreach ($places as $id) {
            $hotels = $this->CustomPackageModel->getHotels($id, $star);
            $hotelString = "";
            foreach ($hotels->result() as $row) {
                $hotelString = $hotelString . "<option value='$row->hotel_id'>$row->hotel_name</option>";
            }
            $hotelsArray[] = $hotelString;
        }

        echo json_encode($hotelsArray);
    }

    public function getPlaceHotels() {
        $id = $this->input->post('placeId');
        $star = $this->input->post('star');
        $this->load->model('CustomPackageModel');
        $hotels = $this->CustomPackageModel->getHotels($id, $star);

        $hotelString = "";
        foreach ($hotels->result() as $row) {
            $hotelString = $hotelString . "<option value='$row->hotel_id'>$row->hotel_name</option>";
        }
        echo $hotelString;
    }

    public function getDayPlaceHotels() {
        $daysPrv = $this->input->post('numDaysPrv');
        $daysAdd = $this->input->post('numDaysAdd');

        $this->load->model('CustomPackageModel');
        $places = $this->CustomPackageModel->getAllPlaces();
        $placeOne = $places->row();
        $hotels = $this->CustomPackageModel->getHotels($placeOne->id, 'TWO');

        for ($i = $daysPrv + 1; $i <= $daysPrv + $daysAdd; $i++) {
            echo '<div class="col-md-6" style="margin-top: 20px; margin-bottom: 20px" id="d_' . $i . '">
                        <div class="row" >
                            <div class="col-md-2"></div>
                            <div class="col-md-10" style="background-color: #ffffff; border-radius: 5px;">
                                <div class="row">
                                    <div style="margin-top: 15px">';
            if ($i > 9) {
                echo "<h4>&nbsp&nbsp<b>Day $i</b></h4>";
            } else {
                echo "<h4>&nbsp&nbsp<b>Day 0$i</b></h4>";
            }
            echo '</div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <form role="form">
                                            <div class="form-group">';
            echo "<label for='p_$i'>Select Place</label>
                                                <select class='form-control' id='p_$i' onchange='getPlaceHotels($i)'>";
            foreach ($places->result() as $row) {
                echo "<option value='$row->id'>$row->name</option>";
            }

            echo '</select>
                                            </div>
                                            <div class="form-group">';
            echo "<label for='s_$i'>Hotel star</label>
                                                <select class='form-control' id='s_$i' onchange='getPlaceHotelsStar($i)'>";
            echo '<option value="TWO">Two star</option>
                                                    <option value="THREE">Three star</option>
                                                    <option value="FOUR">Four star</option>
                                                    <option value="FIVE">Five star</option>
                                                </select>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="col-md-6">
                                        <form role="form">
                                            <div class="form-group">';
            echo "<label for='h_$i'>Select hotel</label>
                                                <select class='form-control' id='h_$i'>";
            foreach ($hotels->result() as $row) {
                echo "<option value='$row->hotel_id'>$row->hotel_name</option>";
            }
            echo '</select>
                                            </div>
                                            <div class="form-group">';
            echo "<label for='r_$i'>Room condition</label>
                                                <select class='form-control' id='r_$i'>";
            echo '<option value="STANDARD">Standard</option>
                                                    <option value="DELUX">Delux</option>
                                                </select>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>';
        }
    }

}
