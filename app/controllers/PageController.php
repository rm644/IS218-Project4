<?php
class PageController extends Controller {
    public function __construct() {
       $this->userModel = $this->model('User');
    }

    public function index(){
        $data = [
            'title' => 'Home page',
            'name' => 'Rishi'
        ];

        $this->view('pages/index', $data);
    }

    public function about() {
        $this->view('pages/about');
    }

    public function login() {
        $this->view('pages/login');
    }

    public function register() {
        $this->view('pages/register');
    }
}


?>