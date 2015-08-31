<?php
 // Database information
 $settings = array(
  'driver' => 'mysql',
  'host' => 'localhost',
  'database' => 'db_chat_member_test',
  'username' => 'root',
  'password' => '111111',
  'charset'   => 'utf8',
  'collation' => 'utf8_general_ci',
  'prefix' => ''
 );
 // Bootstrap Eloquent ORM
 use vender\illuminate\database\Capsule\Manager as Capsule;  
 $capsule = new Capsule; 
 $capsule->addConnection($settings);
 $capsule->bootEloquent();
?>