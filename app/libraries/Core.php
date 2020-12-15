<?php
    //Core App Class
    class Core {
        protected $currentController = 'Page';
        protected $currentMethod = 'index';
        protected $params = [];

        public function __construct() {
            //print_r($this->getUrl());
            $url = $this->getUrl();
            //print_r($this->getUrl());
            
            //look in controllers for first value, ucwords will capitilze first letter
            if (file_exists('../app/controllers/' . ucwords($url[0]) . 'Controller.php')) {
                $this->currentController = ucwords($url[0]) . 'Controller';
                unset($url[0]);

            }

            //require controllers
            require_once '../app/controllers/' . $this->currentController . '.php';
            $this->currentController = new $this->currentController;

            //Check for second part of url
            if (isset($url[1])) {
                if (method_exists($this->currentController, $url[1])) {
                        $this->currentMethod = $url[1];
                        unset($url[1]);
                }
            }

            //Get parameters
            $this->params = $url ? array_values($url) : [];

            //Call a callback with array of params
            call_user_func_array([$this->currentController, $this->currentMethod], $this->params);

        }

        
        public function getUrl() {
            if(isset($_GET['url'])) {
                $url = rtrim($_GET['url'], '/');
                //allows you to filter variables as a string/number
                $url = filter_var($url, FILTER_SANITIZE_URL);
                //breaking it into an array
                $url = explode('/', $url);
                return $url;
            }
        }


    }


?>