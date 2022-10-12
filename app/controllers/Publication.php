<?php
    namespace app\controllers;

    class Publication extends \app\core\Controller {

        public function index() {

        }

        public function create() {
            $this->view('Publication/create');
            if (isset($_POST['action'])) {
                $publication = new \app\models\Publication();
                $publication->profile_id
            }
        }

        public function update() {

        }

        public function delete() {

        }
    }