<?php
/**
 * ----------------------------------------------------
 * Created by: PhpStorm.
 * Written by: Camilo Lozano III (Camilo3rd)
 *             www.camilord.com
 *             me@camilord.com
 * Date: 25/02/2018
 * Time: 3:54 PM
 * ----------------------------------------------------
 */

function __autoload($class_name) {
    $class_name = str_replace(['camilord\\', 'NZCompaniesRegister\\'],'',$class_name);
    $filename = str_replace(['//', '\\'], '/',__DIR__.'/src/'.$class_name.'.php');
    include_once($filename);
}

use camilord\NZCompaniesRegister\NZCompaniesRegister;

$obj = new NZCompaniesRegister();
$result = $obj->search('bluehorn');

print_r($result);
