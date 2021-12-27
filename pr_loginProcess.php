<?php

// login_form에서 불러온 처리변수 설정
$name = $_POST['name'];
$pwd = $_POST['pwd'];

// 로그인창 입력 제대로 안하면 > 로긴창으로 돌려보냄
if(empty($name)||empty($pwe)){
    // error "<script>alert('아이디와 비밀번호가 일치하지 않습니다');history.back();</script>";
    header('Location: pr_login_form.php');
}

//로그인정보 확인 1. 데이터베이스 설정
$host = 'localhost';
$user = 'admin';
$pass = 'admin';
$db = 'users';

$dbconn = mysqli_connect($host, $user, $pass, $db);

// db에 문제가 있으면 알려주고
if(is_null($dbconn)){
    echo "데이터베이스 연결에 문제가 생겼습니다.";
}

// 질의어를 구성
$sql = "SELECT pwd FROM users Where name= '" .$name ."'"

$resultset = mysqli_query($dbconn, $sql); //> 에러

while ($row = mysqili_fetch_array($resultset)) { //결과값을 배열로 가져올건데
    if ($pwd == $row['pwd']){
        header('Location: pr_loginSuccess.php');
    }else{
        echo '비밀번호가 틀렸습니다.';
        header('Location: pr_login_form.php');
    }
}

?>