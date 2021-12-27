<!--
  Object-Oriented and Procedural interface.
-->
<?php
  require_once 'dbconfig.php';
  //====================
  // MySQLi Procedural (d001에서 쓴 방법)
  //====================
  $mysqli = mysqli_connect($host, $user, $pass, $db);
  $sql = "SELECT 'A world full of  ' AS _msg FROM DUAL";
  $result = mysqli_query($mysqli, $sql);
  $row = mysqli_fetch_assoc($result);
  echo $row['_msg'];

  //========================
  // MySQLi Object-Oriented 
  //========================
  $mysqli = new mysqli($host, $user, $pass, $db);
  $sql = "SELECT 'choices to please everybody.  ' AS _msg FROM DUAL";
  $result = $mysqli->query($sql); #(->는 자바에서의 .과 같음)
  $row = $result->fetch_assoc();
  echo $row['_msg'];
?>