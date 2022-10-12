<?php
    namespace app\controllers;

    class Profile extends \app\core\Controller {

        public function index() {
            if (isset($_SESSION['profile_id'])) {
                $this->view('Profile/detail');
            } else {
                $this->view('Profile/create');
            }
            // $publication = new \app\models\Publication();
            // $publications = $publication->getPublications();
            
        }

        #[\app\filters\User]
		public function create() {
            if(isset($_POST['action'])) {
                $newProfile = new \app\models\Profile();
                $newProfile->user_id = $_SESSION['user_id'];
                $newProfile->first_name = $_POST['first_name'];
                $newProfile->middle_name = $_POST['middle_name'];
                $newProfile->last_name = $_POST['last_name'];
                $newProfile->insert();
                header('location:/Profile/detail');
            }
		}

        public function update() {
            $profile = new \app\models\Profile();
            $profile = $profile->get($_SESSION['profile_id']);
            if(isset($_POST['action'])) {
				$profile->first_name = $_POST['first_name'];
                $profile->middle_name = $_POST['middle_name'];
			    $profile->last_name = $_POST['last_name'];
                $profile->update();

                header('location:/Profile/index');
			} else {
                $this->view('Profile/update');
            }
            $profile = new \app\models\Profile();
            
        }
    }