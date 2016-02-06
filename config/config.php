<?php

use FStudio\myConfig as config;

$config = new config();

$config->setPath('C:/wamp/www/agricola/');
$config->setUrl('http://localhost/agricola/web/');

$config->setDriver('mysql');
$config->setHost('localhost');
$config->setPort(3306);
$config->setDbName('agricola');
//$config->setDbName('pruebas');
$config->setUser('root');
$config->setPassword('');
$config->setDsn($config->getDriver() . ':host=' . $config->getHost() . ';port=' . $config->getPort() . ';dbname=' . $config->getDbName());

$config->setSessionName('FStudio');

$config->setDefaultModule('ejemplo');
$config->setDefaultAction('index');