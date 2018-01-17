<?php

// job
$servidor = "SRVM\NAMELESS";
$connectionInfo = array("Database"=>"aquila", "UID"=> "ste", "PWD"=>"lust1234");

$conn = sqlsrv_connect( $servidor, $connectionInfo );

if($conn === false){
	die(print_r(sqlsrv_errors(), true));
}

?>