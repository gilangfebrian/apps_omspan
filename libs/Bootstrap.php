<?php

class Bootstrap {

    private $registry;
    private $controller;
    private $method;
    private $param;
    private $file;
    private $role;
    private $url = array();

    public function __construct($registry) {
        $this->registry = $registry;
        Session::createSession();
        $logged = Session::get('loggedin');
        $this->role = ($logged) ? (Session::get('role') == ADMIN ? : 'kppn') : 'guest';
    }

    /*
     * mendapatkan url dan pembuatan objek controller 
     */

    public function getController() {
        $page = ($_GET['page']) ? $_GET['page'] : 'index';
        $page = rtrim($page, '/');
        $this->url = explode('/', $page);
        if (isset($this->url[0])) {
            $this->file = ROOT . '/app/controllers/' . ucfirst($this->url[0]) . 'Controller.php';
            if (is_readable($this->file)) {
                $name = ucfirst($this->url[0]) . 'Controller';
                $this->controller = new $name($this->registry);
            } else {
                $this->controller = new Index($this->registry);
            }
        }
    }

    /*
     * cek method di controller
     */

    private function getAction() {
        if (isset($this->url[1])) {
            if (method_exists($this->controller, $this->url[1])) {
                $this->method = $this->url[1];
            } else {
                $this->method = 'index';
            }
        } else {
            $this->method = 'index';
        }
    }

    /*
     * loader url
     */

    public function loader() {

        /*         * * check the route ** */
        $this->getController();

        $this->getAction();

        $loggedin = $this->cek_session();
        if ((!$loggedin && !($this->controller instanceof AuthController) && $this->method != 'index')) {
            $this->controller = new AuthController($this->registry);
            $this->method = 'index';
        }
        //echo $this->role.",".$this->url[0].",".$this->method;
        //var_dump($this->registry->auth->is_allowed($this->role,$this->url[0],$this->method));
        /*
          if(!$this->registry->auth->is_allowed($this->role,$this->url[0],$this->method) && $this->role!='guest'){
          $this->controller = new Index($this->registry);
          $this->method = 'index';
          }else if(!$this->registry->auth->is_allowed($this->role,$this->url[0],$this->method) && $this->role=='guest'){
          $this->controller = new AuthController($this->registry);
          $this->method = 'index';
          }

          /*         * * check if the action is callable ** */
        if (is_callable(array($this->controller, $this->method)) == false) {
            $action = 'index';
        } else {
            $action = $this->method;
        }

        /*         * * load arguments for action ** */
        $arguments = array();
        $i = 0;
//        var_dump($this->url);
        foreach ($this->url as $key => $val) {
            if ($i > 1) {
                $arguments[] = $val;
//                var_dump($arguments);
//                $i++;
            }
            $i++;
        }
        if ($i > 1)
            call_user_func_array(array($this->controller, $action), $arguments);
        else
            call_user_func(array($this->controller, $action), $arguments);
    }

    private function cek_session() {
        @Session::createSession();
        if (isset($_SESSION) && Session::get('loggedin') == TRUE && Session::get('user') != '' && Session::get('role') != '') {
            return true;
        }
        return false;
    }

    public function get_controller() {
        return $this->controller;
    }

    public function get_method() {
        return $this->controller;
    }

    public function __destruct() {
        ;
    }

}