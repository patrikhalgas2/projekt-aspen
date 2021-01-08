<?php
if( ! isset( $_COOKIE[ "visits" ] ) ) {
    $file = "count.txt";

    $content = file_get_contents( $file );
    $value = $content++;
    $put = file_put_contents( $file, $value );

    setcookie( "visits", $value, time() + 3600 );

//    $clientsIP = $_SERVER["REMOTE_ADDR"];
//    $result = $db->query( "SELECT * FROM cookies" );
//    $row = $result->fetch_assoc();
//
//    if( ! ( $result && $result->num_rows == 0 ) ) {
//        $db->query( "INSERT INTO cookies( 'ip', 'visits' ) VALUES ( '{$clientsIP}', 1 );" );
//    } else {
//        $db->query( "UPDATE cookies SET visits = visits + 1 WHERE ip = '{$clientsIP}';" );
//    }

}
