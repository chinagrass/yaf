<?php
define("APP_PATH",  realpath(dirname(__FILE__) . '/')); /* 指向public的上一级 */
define("PUBLIC_PATH",  dirname(__FILE__).'/public/');
$app  = new Yaf\Application(APP_PATH . "/conf/application.ini");
$app->bootstrap()->run();