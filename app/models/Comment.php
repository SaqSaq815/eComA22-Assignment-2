<?php
    namespace app\models;

    class Comment {
        
        public function get($comment_id) {
            $SQL = "SELECT * FROM comment WHERE comment_id=:comment_id";
            $STMT = self::$_connection->prepare($SQL);
            $STMT->execute(['comment_id'=>$comment_id]);
            $STMT->setFetchMode(\PDO::FETCH_CLASS, 'app\models\Comment');
            return $STMT->fetchAll();
        }

        public function insert() {
            $SQL = "INSERT INTO comment(publication_id, profile_id, comment_text, date_time) VALUES (:publication_id, :profile_id, :comment_text, :date_time)";
            $STMT = self::$_connection->prepare($SQL);
            $STMT->execute(['publication_id'=>$this->publication_id,
                            'profile_id'=>$this->profile_id,
                            'comment_text'=>$this->comment_text,
                            'date_time'=>$this->date_time]);
        }

        public function update() {
            $SQL = "UPDATE comment SET comment_text=:comment_text WHERE comment_id=:comment_id";
            $STMT = self::$_connection->prepare($SQL);
            $STMT->execute(['comment_id'=>$this->comment_id,
                            'comment_text'=>$this->comment_text]);
        }

        public function delete() {
            $SQL = "DELETE FROM comment WHERE comment_id=:comment_id";
		    $STMT = self::$_connection->prepare($SQL);
		    $STMT->execute(['comment_id'=>$this->comment_id]);
        }
        
    }
