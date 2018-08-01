<?php

/*
* 
*  BoostPHP2 in PHP7.1
*
*  Test By Liuxing
*
*  1st August,2018
*
*/ 
error_reporting(E_ALL);

//Load BoostPHP2 Library
require_once __DIR__ . "/BoostPHP/autoload.php";


//Start Testing the functions in Cache.php


use \BoostPHP\Cache\AutoMode as A;
use \BoostPHP\Cache\ManualMode as M;

var_dump(A::CacheStart(  '200'  ,  'cache'  ));
var_dump(A::CacheEnd());


 ?>
