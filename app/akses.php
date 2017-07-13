<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

$akses = array();
$akses['Auth'] = array(
    'login',
    'logout'
);

/*
 * akses modul Data Tetap
 */
$akses['DataTetap'] = array(
    '__construct',
    'index',
    'addDataTetap',
    'updDataTetap',
    'delDataTetap',
    '__destruct'
);

/*
 * akses modul Data User
 */
$akses['DataUser'] = array(
    '__construct',
    'index',
    'addDataUser',
    'updDataUser',
    'delDataUser',
    '__destruct'
);

/*
 * akses modul Data UserBobot
 */
$akses['DataBobot'] = array(
    '__construct',
    'index',
    'viewDataBobot',
    '__destruct'
);

/*
 * akses modul data KPPN
 */
$akses['DataKppn'] = array(
    '__construct',
    'index',
    'viewDataKppnLvl1',
    'addDataKppnLvl4',
    'addDataKppnLvl3Jkt2',
    'addDataKppnLvl3Jkt6',
    'get_data_kppn_array',
    'data_nav',
    'updDataKppnLvl3Jkt2',
    'updDataKppnLvl3Jkt6',
    'delDataKppnLvl3Jkt2',
    'delDataKppnLvl3Jkt6',
    'delDataKppn',
    'viewDataKppnLvl2',
    'viewDataKppnLvl3',
    'upload',
    '__destruct'
);

/*
 * akses modul data BA.999
 */
$akses['DataBa'] = array(
    '__construct',
    'index',
    'addDataBa',
    'updDataBa',
    'delDataBa',
    '__destruct'
);

/*
 * akses modul data BA.999
 */
$akses['DataPkn'] = array(
    '__construct',
    'index',
    'addDataPkn',
    'updDataPkn',
    'delDataPkn',
    '__destruct'
);

/*
 * akses Input Masalah
 */
$akses['DataMasalah'] = array(
    '__construct',
    'index',
    'addDataMasalah',
    'updDataMasalah',
    'delDataMasalah',
    '__destruct'
);
?>
