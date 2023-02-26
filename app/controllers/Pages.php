<?php
    class Pages extends Controller{
        public function __construct(){
            $this->postModel = $this->model('Post');
           //echo 'Pages loaded';
        }

        public function index(){
            $data = [
                'title'=> 'Welcome'
            ];

            $this->view('pages/index', $data);

        }

        Public function about(){
            $data = [
                'title' => 'About Us'
            ];
            $this->view('pages/about', $data);
        }
    }