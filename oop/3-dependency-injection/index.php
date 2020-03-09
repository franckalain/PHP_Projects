<?php
ini_set('error_reporting', E_ALL & ~E_NOTICE & ~E_STRICT & ~E_DEPRECATED); 
require 'Chest.php';
require 'Lock.php';

$chest = new Chest(new Lock);
$chest->close();
$chest->open();