<!--
  2. Navigation through buffered results
-->
<?php
require_once 'dbconfig.php';
// activating report
//mysqli_report(MYSQLI_REPORT_STRICT | MYSQLI_REPORT_ALL);
$mysqli = new mysqli($host, $user, $pass, $db);

$mysqli->query("DROP TABLE IF EXISTS test");
$mysqli->query("CREATE TABLE test(id INT)");
$mysqli->query("INSERT INTO test(id) VALUES (1), (2), (3)"); //각 row마다 괄호처리 해줘야함.

$result = $mysqli->query("SELECT id FROM test ORDER BY id ASC");
/* result에는 dataseek으로 찾은 no들이 1(0),2(1),3(2) 순서대로 담겨있는 데이터베이스에서 bufferd에 담아올때 첫번째로 가져온 1값이 가장 아래에 담김. 
    따라서 인덱스번호가 거꾸로 됨. -> 3(0),2(1),1(2)
    그러니까 음.. 첫번째로 가져온게 제일 아래로 감(인덱스 번호가)
    게시판 글을 보면, 가장 최근에 쓴 글번호가 제일 높은게 위에나옴. */


echo "Reverse order...<br>"; 
for ($row_no = $result->num_rows - 1; $row_no >= 0; $row_no--) { //거꾸로 출력하게 만듬.

  $result->data_seek($row_no); //여기서 row_no는 qurey의 index가 되었음. data_seek(i): 조건에 따라 값을 찾아 포인터로 가리킴
  $row = $result->fetch_assoc();
  echo "id = " . $row['id'] . "<br>"; // 3, 2, 1
}

echo "Result set order... <br>"; 
foreach ($result as $row) {
  echo "id = " . $row['id'] . "<br>"; // 1, 2, 3
}
?>