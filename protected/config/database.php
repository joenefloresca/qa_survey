<?php

// This is the database connection configuration.
return array(
	//'connectionString' => 'sqlite:'.dirname(__FILE__).'/../data/testdrive.db',
	// uncomment the following lines to use a MySQL database
	
	'connectionString' => 'mysql:host=localhost;dbname=form',
	'emulatePrepare' => true,
	'username' => 'root',
	'password' => '',
	'charset' => 'utf8',
    
        //'connectionString' => 'sqlsrv:Server=joene;Database=master;',
//        'connectionString' => 'odbc:Driver={joene};Server=127.0.0.1;Database=master',
//	'username' => 'joenefloresca',
//	'password' => 'CheRambil27@',
//	'charset' => 'utf8',
//        'emulatePrepare' =>false
//	
);