<?php
    namespace app\controllers;

    class Profile extends \app\core\Controller {

        public function index() {
            $profile = new \app\models\Profile();
            $publications = $profile->getPublications();
            $this->view('Profile/index', $publications);
        }

        #[\app\filters\User]
		public function createProfile() {
            $this->view('Profile/profileCreation');
			if(isset($_POST['action'])) {
				$profile = new \app\models\Profile();
			}
		}

        public function update() {
            $profile = new \app\models\Profile();
            $profile = $profile->get($profile_id);
            if(isset($_POST['action'])) {
				$profile->first_name = $_POST['first_name'];
                $profile->middle_name = $_POST['middle_name'];
			    $profile->last_name = $_POST['last_name'];
                $profile->update();

                header('location:/Profile/index');
			} else {
                $this->view('Profile/profileEditing');
            }
            $profile = new \app\models\Profile();
            
        }
    }