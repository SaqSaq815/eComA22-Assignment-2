<?php
    namespace app\controllers;

    class Publication extends \app\core\Controller {

        public function detail($publication_id) {
            $publication = new \app\models\Publication();
            $publication = $publication->get($publication_id);
            $comment = new \app\models\Comment();
            $comment = $comment->getByPublication($publication_id);
            $this->view('Publication/detail', ['publication'=>$publication, 'comment'=>$comment]);
        }

        public function create() {
            if (isset($_POST['action'])) {
                $publication = new \app\models\Publication();
                $publication->profile_id = $_SESSION['profile_id'];
                $filename = $this->saveFile($_FILES['picture']);
                $publication->picture = $filename;
                $publication->caption = $_POST['caption'];
                $publication->date_time = date('Y-m-d H:i:s');
                $publication->insert();
                header('location:/Profile/detail/' . $_SESSION['profile_id']);
            } else {
                $this->view('Publication/create');
            }
        }

        public function update() {

        }

        public function delete() {

        }
    }