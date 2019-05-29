<?php

    include(APPROOT . '/helper/helperfunctions.php');

    class People extends Controller {

        public function index() {
            return $this->view('people/view1', $data = []);
        }
    }