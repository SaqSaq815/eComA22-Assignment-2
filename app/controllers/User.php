<?php
	namespace app\controllers;

	class User extends \app\core\Controller {

		public function index() {
			if(isset($_POST['action'])) {
				$user = new \app\models\User();
				$user = $user->get($_POST['username']);
				if(password_verify($_POST['password'], $user->password_hash)) {
					$_SESSION['user_id'] = $user->user_id;
					$_SESSION['username'] = $user->username;
					$profile = new \app\models\Profile();
					$profile = $profile->getByUserID($_SESSION['user_id']);
					$_SESSION['profile_id'] = $profile->profile_id;
					header('location:/Profile/index');
				}else{
					header('location:/User/index?error=Wrong username/password combination!');
				}
			}else{
				$this->view('User/index');
			}
		}

		public function register() {
			$this->view('User/register');

			if(isset($_POST['action'])) {
				if($_POST['password'] == $_POST['password_confirm']) {
					$user = new \app\models\User();
					$check = $user->get($_POST['username']);
					if(!$check) {
						$user->username = $_POST['username'];
						$user->password_hash = password_hash($_POST['password'], PASSWORD_DEFAULT);
						$user->insert();
						header('location:/User/index');
					} else {
						header('location:/User/register?error=The username "'.$_POST['username'].'" is already in use. Select another.');
					}
				} else {
					header('location:/User/register?error=Passwords do not match.');
				}
			}		
		}

		#[\app\filters\User]
		public function logout(){
			session_destroy();
			header('location:/User/index');
		}
	}