<?php
// Bootstrap Eloquent ORM
use \Illuminate\Database\Capsule\Manager as Capsule;
$capsule = new Capsule;
$capsule->addConnection ( [ 
		'driver' => 'mysql',
		'host' => 'localhost',
		'database' => 'db_chat_member_test',
		'username' => 'root',
		'password' => '111111',
		'charset' => 'utf8',
		'collation' => 'utf8_general_ci',
		'prefix' => '' 
] );
$capsule->setAsGlobal ();
$capsule->bootEloquent ();
?>