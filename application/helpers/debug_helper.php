<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

if (!function_exists('debug')) {

    function debug($array) {

        echo "<pre>";
        print_r($array);
        exit;

    }

}