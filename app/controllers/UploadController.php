<?php

class UploadController extends Controller {
    
        public function index ($param) {
            echo '(upload) user index function not implemented';
        }


        public function upload() {
                if($this->method('post')) {
                    if($this->model('User')->upload_function()) {
                        header('Location: /upload/all_images');
                    } else {
                        echo 'upload failed';
                    }
                } else {
                    $this->view('user', 'upload');
                }
        }


        public function all_images () {
            $viewbag['images'] = $this->model('user')->get_images();
            $this->view('user', 'images', $viewbag);
        }


}