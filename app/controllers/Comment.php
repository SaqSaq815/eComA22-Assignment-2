<?php
    namespace app\controllers;

    class Comment extends \app\core\Controller {

        public function index() {
            $comment = new \app\models\Comment();
            $comment = $comment->get($comment_id);
        }

        public function create($publication_id) {
            if(isset($_POST['action'])){
                $comment = new \app\models\Comment();
                $comment->publication_id = $publication_id;
                $comment->profile_id = $_SESSION['profile_id'];
                $comment->comment_text = $_POST['comment_text'];
                $comment->date_time = date('Y-m-d H:i:s');
                $comment->insert();
                header('location:/Publication/detail/' . $publication_id);
            }else{
                $this->view('Publication/addComment');
            }


        }

        public function update() {

        }

        public function delete() {

        }
    }