<?php
    namespace app\controllers;

    class Comment extends \app\core\Controller {

        public function index() {
            $comment = new \app\models\Comment();
            $comment = $comment->get($comment_id);
            $this->view('Publication/detail');
        }

        public function create($publication_id) {
            if(isset($_POST['action'])){
                $comment = new \app\models\Comment();
                $comment->publication_id = $publication_id;
                $comment->profile_id = $_SESSION['profile_id'];
                $comment->comment_text = $_POST['comment_text'];
                $comment->date_time = date('Y-m-d H:i:s');
                $comment->insert();
                $comments = new \app\models\Comment();
                $comments = $comments->getByPublication($publication_id);
                $publication = new \app\models\Publication();
                $publication = $publication->get($publication_id);
                $this->view('Publication/detail', ['publication'=>$publication, 'comment'=>$comments]);
            }else{
                $this->view('Publication/addComment');
            }
        }

        public function update($comment_id) {
            $comment = new \app\models\Comment();
            $comment = $comment->get($comment_id);

            $publication_id = $comment->publication_id;

            if(isset($_POST['action'])){
                $comment->comment_text = $_POST['comment'];
                $comment->update();
                header('location:/Publication/detail/'. $publication_id);
                //header('location:/Publication/index'. $_SESSION['publication_id']);
            }else{
                $this->view('Publication/updateComment', $comment);
            }
        }

        public function delete($comment_id) {
            $comment = new \app\models\Comment();
            $comment = $comment->get($comment_id);

            //$publication = $comment->profile_id;
            $publication_id = $comment->publication_id;

            $comment->delete();
            header('location:/Publication/detail/' . $publication_id);
        }
    }