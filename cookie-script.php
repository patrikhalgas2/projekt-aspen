<?php

$mysqli = new mysqli( "mysql57.websupport.sk", "raw_web", "Brokolica1", "raw_web", "3311" );

$ip = $_POST["ip"];
$accepted = $_POST["accepted"];

$result = $mysqli->query( "INSERT INTO cookies ( ip, visit, accepted ) VALUES ( '$ip', 1, 1 );" );

if( !$result ) {
    createLog( $mysqli->error );
}

echo json_encode( [
    "ip"=>$ip,
    "accepted"=>$accepted,
    "mysqlError"=> $result ? $mysqli->error : false
] );