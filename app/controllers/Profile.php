<?php
    namespace app\controllers;

    class Profile extends \app\core\Controller {

        public function index() {
            $publication = new \app\models\Publication();
            $publications = $publication->getPublications();
            $this->view('Profile/index', $publications);
        }

        #[\app\filters\User]
		public function create() {
            $this->view('Profile/create');
			if(isset($_POST['action'])) {
				$newProfile = new \app\models\Profile();
                $newProfile->user_id = $_SESSION['user_id'];
                $newProfile->first_name = $_POST['first_name'];
                $newProfile->middle_name = $_POST['middle_name'];
                $newProfile->last_name = $_POST['last_name'];
                $newProfile->insert();
                header('location:/Profile/detail');
			} else {
                $this->view('Profile/detail');
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
                $this->view('Profile/edit');
            }
            $profile = new \app\models\Profile();
            
        }
    }