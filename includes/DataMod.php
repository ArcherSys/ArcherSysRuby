<?php
namespace ArcherSys/Ruby/Data;
 class DataMod{
     static function openDatabase($dbname){
        mysql_select_db($dbname);
    }
     static function openConnection($host,$user,$pass){
        mysql_connect($host,$user,$pass);
    }
     static function query($query){
        mysql_query($query);
    }
     static function createTable($table, $query){
        DataMod::query("CREATE TABLE ".$table." (".$query.")");
    }
    
}
?>