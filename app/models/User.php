<?php
namespace app\models;

class User extends \app\core\Model {
        
	public function get($user_id){
		$SQL = "SELECT * FROM user WHERE user_id=:user_id";
		$STMT = self::$_connection->prepare($SQL);
		$STMT->execute(['user_id'=>$user_id]);
		$STMT->setFetchMode(\PDO::FETCH_CLASS, 'app\models\User');
		return $STMT->fetch();
	}

	public function insert(){
		$SQL = "INSERT INTO user(user_id, password_hash) VALUES (:user_id, :password_hash)";
		$STMT = self::$_connection->prepare($SQL);
		$STMT->execute(['username'=>$this->user_id,
						'password_hash'=>$this->password_hash]);
	}

}
