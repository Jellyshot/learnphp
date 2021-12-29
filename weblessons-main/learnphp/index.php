<!-- 
  Open a Connection to MySQL
  Before we can access data in the MySQL database, 
  we need to be able to connect to the server: 

  three ways of working with PHP and MySQL:
  1. MySQLi (object-oriented)
  2. MySQLi (procedural)
  3. PDO

  PDO will work on 12 different database systems, whereas MySQLi will only work with MySQL databases.
-->


<!-- 
  Example 1. MySQLi Object-Oriented
-->
<?php
$servername = "localhost";
$username = "webapp";
$password = "webapp";
$dbname = "webdb";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully</br>";

$sql = "SELECT * FROM user";
$result = $conn->query($sql);

if( $result->num_rows > 0) {
  //output data of each row
  while($row = $result->fetch_assoc()){
    echo $row["id"]. " " . $row["username"]. " " .$row["userpwd"]. "<br>";
  }
} else {
  echo "no results";
}

$conn->close();
?> 


<!-- 
  Example 2. MySQLi Procedural
-->
<!-- 
<?php
$servername = "localhost";
$username = "webdb";
$password = "webdb";
$dbname = "webdb";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully<br>";

$sql = "SELECT * FROM user";
$result = mysqli_query($conn, $sql);

if(mysqli_num_rows($result) > 0) {
  //output data of each row
  while($row = mysqli_fetch_assoc($result)) {
    echo $row["id"]. " " . $row["username"]. " " .$row["userpwd"]. "<br>";
  }
} else {
  echo "no results";
}
//close the connection
mysqli_close($conn);
?> 
-->

<!-- 
  Example 3.PDO
-->
<!-- <?php
$servername = "localhost";
$username = "webdb";
$password = "webdb";

try {
  $conn = new PDO("mysql:host=$servername;dbname=webdb", $username, $password);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  echo "Connected successfully";
} catch(PDOException $e) {
  echo "Connection failed: " . $e->getMessage();
}
// close the connection
$conn = null;
?> -->