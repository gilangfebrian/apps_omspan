<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of View
 *
 * @author aisyah
 */
class View {

    private $title;

    public function __construct() {
        
    }

    /*
     * render include header + footer
     * @param nama file tanpa ekstensi .php
     */

    public function render($view) {

        if (!is_array($view)) {
            require 'app/view/Header.php';
            require 'app/view/' . $view . '.php';
            require 'app/view/Footer.php';
        } else {
            $this->load($view);
        }
    }

    /*
     * render file
     * @param nama file tanpa ekstensi .php
     */

    public function load($fileView) {
        require 'app/view/' . $fileView . '.php';
    }

    /*
     * set judul halaman di browser
     * @param judul
     */

    private function _set_title($title) {
        $this->title = $title;
    }

    /*
     * get judul halaman
     * return judul
     */

    private function get_title() {
        if (is_null($this->title))
            return 'Scholarsip Information Management System';
        return $this->title;
    }

}