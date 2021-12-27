<!-- registform을 통해 정보가 넘어옴.  -->
<!-- 
회원가입시 저장버튼을 클릭했을 때 동작 하도록 만듬. 
폼에서 입력받은 username, password를 db에 저장할 것. 

1. post방식으로 전달된 값을 취한다. $변수=$_POST[name];
2. form validation 
3. 데이터베이스 연결 (아이디 중복체크를 한다면, 데이터베이스가 연결 된 후 여기서 확인해야 한다. -> search 질의어 구성)
    3.1. 중복체크를 위한 질의어 구성
    3.2. 중복체크 쿼리
    3.3. 중복이면 중복메세지 출력 후 회원가입으로 되돌아감.
    3.4. 중복이 아니면 다음단계 진행
4. 질의어 구성(insert 구문)
5. mysql에 쿼리. 
6. login화면으로 이동. -->
<?php

// 1. post방식으로 registForm에서 전달된 값을 취한다. $변수=$_POST[name];
    $username = $_POST['username'];
    $password = $_POST['password'];

// 2. form validation 
if (empty($username) || empty($password)) {
    header('Location: step1_registForm.php');
    // is_null은 값이 없는것. empty는 데이터 공간 자체가 없는것
}

// 3. 데이터베이스 연결 
    $hostname = 'localhost'; //데이터베이스가 연결되어 있으면 localhost를 써도 되는데, db가 다른곳에 물려있다면 그 ip주소를 써줘야됨. 
    $user = 'webapp';
    $pass = 'webapp';
    $db = 'webdb';

    $dbconn = mysqli_connect($hostname, $user, $pass, $db);

// 3.1. 아이디 중복체크를 위한 질의어 구성
    $sql = "SELECT * From users WHERE username='".$username ."'"; 
      // $sql = $dbconn -> prepare("INSERT INTO users(username, userpwd) VALUES(?, sha2(?,256))"); 
    // $sql->bind_param("ss",$username, $password);
  

// 3.2. 중복체크 쿼리
$resultset = mysqli_query($dbconn, $sql);
$number = mysqli_num_rows($resultset); //resultset안에 몇개의 레코드가 있는지 숫자로 반환하는 함수. 

// 3.3. 중복이면 중복메세지 출력 후 회원가입으로 되돌아감.
if ($number >0) {
    // echo "<script language = javascript> alert('동일한 아이디가 이미 있습니다.');</script>" ;
    header('Location: step1_registForm.php');
}else{ //3.4. 아니면 다음단계로 넘어감.


// 4. 질의어 구성(insert 구문)
    $sql = "INSERT INTO users(username, userpwd)
    VALUES('".$username ."', SHA2('".$password ."',256))";

    // mysql코드를 php에서 적으니까 변수값을 제외하고"로 묶어줘야함
    // mysql 코드: INSERT INTO users(username, userpwd) VALUES('username ', 'password '); 

    // 더 쉽게는 prepare - bind_param를 사용하여 표현할 수 있음.
    // $sql = $mysqli->prepare("INSERT INTO users(username, userpwd) VALUES (?, ?)");
    // $sql->bind_param("ss", $username, $userpwd);
    // "ss" > username과 userpwd는 string, string이다. 

// 5. mysql에 쿼리. 
    $result = mysqli_query($dbconn,$sql);

// 6. login화면으로 이동.
if ($result) {
    header('Location: step1_LoginForm.php');
}
}
?>