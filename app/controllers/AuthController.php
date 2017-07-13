<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

class AuthController extends BaseController {

    public function __construct($registry) {
        parent::__construct($registry);
    }

    public function index() {
        $this->view->load('admin/login');
    }

    public function login() {
        if (isset($_POST['user'])) {
            $user = $_POST['user'];
            $pass = $_POST['pass'];
            $pwd = $pass;
            $cuser = new User($this->registry);
            $res = $cuser->login($user, $pwd);

            switch ($res[1]) {
                case 1:
                    $role = 'admin';
                    break;
                case 2:
                    $role = 'kppn';
                    break;
                case 3:
                    $role = 'kanwil';
                    break;
                default:
                    $role = 'guest';
            }

            if ((int) $res[0] == 1) {
                Session::createSession();
                Session::set('loggedin', TRUE);
                Session::set('user', $res[2]);
                Session::set('role', $role);
                Session::set('id_user', $res[3]); print_r($_SESSION);
                header('location:' . URL); 
            } else if ((int) $res[0] == 0) {
                $this->view->error = "user tidak ditemukan!";
                $this->view->load('admin/login');
            } else {
                $this->view->error = "database tidak valid!";
                $this->view->load('admin/login');
            }
        } else {
            $this->view->load('admin/login');
        }
    }

    public function logout() {
        Session::createSession();
        Session::destroySession();
        $this->view->load('admin/login');
    }

    public function __destruct() {
        parent::__destruct();
    }
}