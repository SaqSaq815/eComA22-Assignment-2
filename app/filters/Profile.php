<?php
namespace app\filters;

#[\Attribute]
class Profile extends \app\core\AccessFilter{
	public function execute(){
		if(!isset($_SESSION['publication_id'])){
			header('location:/User/account?error=You may not access the administration features.');
			return true;
		}
		return false;
	}
}
?>