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

        public function update($publication_id) {
            $publication = new \app\models\Publication();
            $publication = $publication->get($publication_id);
            $profile_id = $publication->profile_id;

            if(isset($_POST['action'])) {
                $publication->caption = $_POST['caption'];
                $publication->update();
                header('location:/Profile/detail/' . $_SESSION['profile_id']);
            } else {
                $publication = new \app\models\Publication();
                $publication = $publication->get($publication_id);
                
                $this->view('Publication/update', $publication);
            }
        }

        public function delete($publication_id) {
            $publication = new \app\models\Publication();
            $publication = $publication->get($publication_id);

            $profile_id = $publication->profile_id;

            //unlink("images/$publication->profile_id");
            $publication->delete();
            header('location:/Profile/index'. $profile_id);
        }
        
    }