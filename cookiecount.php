<?php

$mysqli = new mysqli( "mysql57.websupport.sk", "raw_web", "Brokolica1", "raw_web", "3311" );

$sql = $mysqli->query("SELECT SUM(visit) as total FROM cookies");
$row = $sql->fetch_array();
$sum = $row['total'];

echo $sum;