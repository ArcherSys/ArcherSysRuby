<?php
require_once "includes/DataMod.php";
use ArcherSys\Ruby\Data\DataMod;
include_once 'base.php';
DataMod::createTable('users',"'UserID' INT(25) NOT NULL AUTO_INCREMENT PRIMARY KEY ,
'Username' VARCHAR(65) NOT NULL ,
'Password' VARCHAR(32) NOT NULL ,
'EmailAddress' VARCHAR(255) NOT NULL
");
?>