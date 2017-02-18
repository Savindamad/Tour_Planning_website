<?php

class TourGuideController extends CI_Controller {

    public function index() {
        $this->load->model('TourGuideModel');
        $data["places"] = $this->TourGuideModel->getAllPlaces();
        $this->load->view('tourGuidePage', $data);
    }

    public function getPlaces() {
        $placeNum = $this->input->post('placeNum');
        $placeNumNw = $this->input->post('placeNumNw');

        $this->load->model('TourGuideModel');
        $places = $this->TourGuideModel->getAllPlaces();

        for ($i = $placeNum + 1; $i <= $placeNumNw; $i++) {
            echo '<div class="col-md-6" id="d_'.$i.'">
                                <div class="row" style="margin-top : 20px">
                                    <div class="col-md-1"></div>
                                    <div class="col-md-11">
                                        <div class="row">
                                            <div class="col-md-1"></div>
                                            <div class="col-md-10" style="background: #ffffff; border-radius: 5px">';
            if ($i < 9) {
                echo '<h4 style = "margin-top: 15px;"><b>Place 0' . $i . '</b></h4>';
            } else {
                echo '<h4 style = "margin-top: 15px;"><b>Place ' . $i . '</b></h4>';
            }
            echo '<form role="form">
                                                    <div class="form-group">
                                                        <label for="p_' . $i . '">
                                                            Select place
                                                        </label>
                                                        <select class="form-control" id="p_1">';
            foreach ($places->result() as $row) {
                echo "<option value='$row->id'>$row->name</option>";
            }
            echo'</select>
                                                    </div>
                                                </form>
                                            </div>
                                            <div class="col-md-1"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>    ';
        }
    }

}
