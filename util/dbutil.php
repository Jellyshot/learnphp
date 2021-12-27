<?php
namespace loginex; //namespace는 항상 최상위에 위치함

use mysqli;

$HOSTNAME = 'localhost';
$USERNAME = 'webApp';
$PASSWORD = 'webApp';
$DATABASENAME = 'webApp';

// create a connection get dbconnection
    $dbconn = mysqli_connect($HOSTNAME, $USERNAME, $PASSWORD, $DATABASENAME);

    if ($dbconn) {
        echo "db가 성공적으로 연결되었습니다";
    }else {
        die("db연결에 실패하였습니다". mysqli_connect_error());
    }

?>