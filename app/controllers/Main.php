<?php
    namespace app\controllers;

    class Main extends \app\core\Controller { 
        public function index() {
            $publication = new \app\models\Publication();
            $publications = $publication->getPublications();
            $this->view('Main/home', $publications);
        }

        // public function searchByID($publication_id) {
        //     if(isset($_POST['action'])){
        //         $main = new \app\models\Main();
        //         $publication = new \app\models\Publication();
        //         $publication = $publication->getPublications($publication_id);
        //         $this->view('Main/byId');
        //         var_dump($publication_id);    
        //     }            
        // }

        public function searchByCaption() {
            //$main = new \app\models\Main();
            if(isset($_POST['action'])){
                $publication = new \app\models\Publication();
                
                $search = $_POST['searchbar'];
                $search =ltrim($search);
                $search =rtrim($search);
                $publication = $publication->searchByCaption($search);
                $this->view('Main/byCaption', $publication);
                //var_dump($publication);

            }   
                  
        }


    }
