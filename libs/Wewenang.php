<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

class Wewenang {

    public static function status_int_string($status) {
        $sts = '';

        switch ($status) {
            case '1':
                $sts = 'Admin';
                break;
            case '2':
                $sts = 'KPPN';
                break;
            case '3':
                $sts = 'Kanwil';
                break;
            case '4':
                $sts = 'BA.999';
                break;
            case '5':
                $sts = 'PKN';
                break;
            case '6':
                $sts = 'APK';
                break;
            case '7':
                $sts = 'SMI';
                break;
            case '8':
                $sts = 'DJPU';
                break;
            case '9':
                $sts = 'Lainya';
                break;
            case '10':
                $sts = 'Jaringan';
                break;
        }

        return $sts;
    }

    public static function status_string_int($status) {
        $sts = '';

        switch ($status) {
            case 'Admin':
                $sts = '1';
                break;
            case 'KPPN':
                $sts = '2';
                break;
            case 'Kanwil':
                $sts = '3';
                break;
            case 'BA.999':
                $sts = '4';
                break;
            case 'PKN':
                $sts = '5';
                break;
            case 'APK':
                $sts = '6';
                break;
            case 'SMI':
                $sts = '7';
                break;
            case 'DJPU':
                $sts = '8';
                break;
            case 'Lainya':
                $sts = '9';
                break;
            case 'Jaringan':
                $sts = '10';
                break;
        }
        return $sts;
    }

}