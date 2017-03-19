<?php

class PlacesController extends CI_Controller {

    public function index() {
        $this->load->model('PlacesModel');
        $data["main_places"] = $this->PlacesModel->getAllMainPlaces();
        $data["other_places"] = $this->PlacesModel->getRandOtherPlaces();
        $this->load->view('placesPage', $data);

        $this->load->library('email', $config);
        $this->email->from('savindamaddd@gmail.com', 'savinda');
        $this->email->to('savindamaddd@gmail.com');
        $this->email->subject('subject');
        $this->email->message('message');
        $this->email->send();
    }

    public function searchPlace() {
        $name = $this->input->post('searchName');
        $this->load->model('PlacesModel');
        $array = $this->PlacesModel->searchPlaces($name);

        echo '<div id="placeResult">
                <div class="row" style="margin-top: 40px">
                    <div class="col-md-1"></div>
                    <div class="col-md-10">
                        <div class="content_white" style="text-align: left">
                            <h2>Search Results</h2>';
        echo '</div>
                        <div class="row">';

        foreach ($array->result() as $row) {
            echo "<div class='col-md-3'>
                                    <div class='thumbnail'>
                                        <h3>$row->name</h3>
                                        <img alt='Bootstrap Thumbnail First' src='" . base_url($row->image) . "' />
                                        <div class='caption'>
                                            <p>";
            if (strlen($row->description) > 150) {
                $stringCut = substr($row->description, 0, 148);
                $string = substr($stringCut, 0, strrpos($stringCut, ' '));
                echo $string . '..';
            } else {
                echo substr($row->description, 0, 150);
            }
            echo "</p>
                <p style='margin-top: 5px'><a class='btn btn-primary' href='" . base_url('index.php/Place/') . $row->id . "'>View more details</a></p>
                </div>
                </div>
                </div> ";
        }
        echo '</div>
                    </div>
                </div>
            </div>';
    }

    public function loadPlaces() {
        $this->load->model('PlacesModel');
        $main_places = $this->PlacesModel->getAllMainPlaces();
        $other_places = $this->PlacesModel->getRandOtherPlaces();

        echo '<div class="row" style="margin-top: 40px">
                    <div class="col-md-1"></div>
                    <div class="col-md-10">
                        <div class="content_white" style="text-align: left">
                            <h2>Most popular tourist attractions</h2>
                            <p>These are the must see places in Sri Lanka, that you need to add to your itinerary</p>
                        </div>
                        <div class="row">';

        foreach ($main_places->result() as $row) {

            echo "<div class='col-md-3'>
                                    <div class='thumbnail'>
                                        <h3>$row->name</h3>
                                        <img alt='Bootstrap Thumbnail First' src='" . base_url($row->image) . "' />
                                        <div class='caption'>
                                            <p>";
            if (strlen($row->description) > 150) {
                $stringCut = substr($row->description, 0, 148);
                $string = substr($stringCut, 0, strrpos($stringCut, ' '));
                echo $string . '..';
            } else {
                echo substr($row->description, 0, 150);
            }
            echo "</p>
                <p style='margin-top: 5px'><a class='btn btn-primary' href='" . base_url('index.php/Place/') . $row->id . "'>View more details</a></p>
                </div>
                </div>
                </div> ";
        }
        echo '</div>
                        <div class="content_white" style="text-align: left">
                            <h2>Other tourist attractions</h2>
                            <p>Sri Lanka is an island blessed with beautiful beaches, ancient heritage sites, wild life and nature.</p>
                        </div>
                        <div class="row">';
        foreach ($other_places->result() as $row) {
            echo "<div class='col-md-3'>
                                    <div class='thumbnail'>
                                        <h3>$row->name</h3>
                                        <img alt='Bootstrap Thumbnail First' src='" . base_url($row->image) . "' />
                                        <div class='caption'>
                                            <p>";
            if (strlen($row->description) > 150) {
                $stringCut = substr($row->description, 0, 148);
                $string = substr($stringCut, 0, strrpos($stringCut, ' '));
                echo $string . '..';
            } else {
                echo substr($row->description, 0, 150);
            }
            echo "</p>
                <p style='margin-top: 5px'><a class='btn btn-primary' href='" . base_url('index.php/Place/') . $row->id . "'>View more details</a></p>
                </div>
                </div>
                </div> ";
        }
        echo '</div>
                </div>
                <div class="col-md-12">
                </div>
                </div>';
    }

}
