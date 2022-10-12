<?php
    namespace app\controllers;

    class Main extends \app\core\Controller { 
        public function index() {
            $publication = new \app\models\Publication();
            $publications = $publication->getPublications();
            $this->view('Main/home', $publications);
        }

        public function searchByID() {

        }

        public function searchByCaption() {
            
        }
    }
