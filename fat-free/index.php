<?php

//Init
date_default_timezone_set ('Europe/Paris');
$f3=require('app/helpers/lib/base.php');
$f3->config('config/globals.ini');
$f3->config('config/routes.ini');

//BDD connect
$f3->set('db',new DB\SQL('mysql:host='.$f3->get('db_host').';port=3306;dbname='.$f3->get('db_name') , $f3->get('db_user') , $f3->get('db_pw')));

$f3->set('DEBUG',3);

$f3->run();
?>