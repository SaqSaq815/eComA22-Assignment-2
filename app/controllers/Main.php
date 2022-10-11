<?php
    namespace app\controllers;

    class Main extends \app\core\Controller { 
        public function index() {
            // $profile = new \app\models\Profile();
            // $publications = $profile->getPublications();
            $this->view('Main/home');
        }

        public function searchByID() {

        }

        public function searchByCaption() {
            
        }
    }
