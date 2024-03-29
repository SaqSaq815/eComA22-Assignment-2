<?php
    namespace app\controllers;

    class Profile extends \app\core\Controller {

        public function index() {
            if (isset($_SESSION['profile_id'])) {
                $publication = new \app\models\Publication();
                $publications = $publication->getPublicationsByProfile($_SESSION['profile_id']);
                $this->view('Profile/detail', $publications);
            } else {
                $this->view('Profile/create');
            }
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

        #[\app\filters\User]
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
                $this->view('Profile/update', $profile);
            }
            $profile = new \app\models\Profile();
            
        }
    }