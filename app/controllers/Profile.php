<?php
    namespace app\controllers;

    class Profile extends \app\core\Controller {

        #[\app\filters\User]
		public function createProfile() {
            $this->view('Profile/profileCreation');
			if(isset($_POST['action'])) {
				$profile = new \app\models\Profile();
			}
		}
    }