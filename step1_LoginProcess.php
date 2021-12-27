<?php

// Pseudo Code: 처리과정을 일상의 언어로 적어 보기 쉽게 함(의사코드)
/*  1. get the value from $_POST (사용자가 입력한 정보를 가져옴)-> $변수 = $_POST[name];
    2. 전달된 값이 공백이면, 재입력 요청. (validation절차)
    3. 데이터 베이스 연결 및 질의어 구성
    4. 구성된 질의어 실행(MySQL에 질의를 던진다.)하여 결과를 받는다.
    5. 결과 확인. 
        5.1.레코드가 존재하면 로그인 성공 페이지로 이동
        5.2.레코드가 존재하지 않으면 로그인 실패. 폼화면으로 이동. */


// 1. get the value from $_POST -> $변수 = $_POST[name];
    $username = $_POST['username'];
    $password = $_POST['password'];
    // $pwdhash = SHA2($password, 256);

// 2. 전달된 값이 공백이면, 재입력 요청. (validation절차)
    if (empty($username) || empty($password)) {
        header('Location: step1_LoginForm.php');
        // is_null은 값이 없는것. empty는 데이터 공간 자체가 없는것
    }

// 3. 데이터 베이스 연결 및 질의어 구성
// 3.1.데이터베이스 연결: $dbconn = mysqli_connect(호스트명, 사용자명, 비밀번호, 데이터베이스)를 사용;
    $host = 'localhost';
    $user = 'webapp';
    $pass = 'webapp';
    $db = 'webdb';

    $dbconn = mysqli_connect($host, $user, $pass, $db);
    
    // db연결이 되지 않았을 경우를 정의
    if (is_null($dbconn)) {
        echo "<script>alert('데이터 베이스 연결에 문제가 있습니다.');</script>";
    }
// 3.2. 질의어(sql) 구성
    $sql = "SELECT * FROM users WHERE username= '" . $username . "' and userpwd = sha2('".$password."',256))";

// 4. 구성된 질의어 실행(MySQL에 질의를 던진다.)

    $sql->execute();
    //$resultset = mysqli_query($dbconn, $sql);
    //while($row = mysqli_fetch_array($resultset)) { /*mysqli_fetch_array함수는 mysqli_qury를 통해 얻은 resultset에서 레코드를 1개씩 리턴해주는 함수이다. 
       // mysqli_fetch_array: 일반 배열 + 연관배열
        //mysqli_fetch_row: 일반 배열
       // mysqli_fetch_assoc: 연관 배열*/


    // 5.1 로그인 성공시
        if( $password == $row['userpwd']) {
                header('Location: step1_LoginSuccess.php');
        }else { //5.2 로그인 실패시
            echo "<script>alert('비밀번호가 틀렸습니다.');</script>";
            header('Location: step1_LoginForm.php');
        }
    }

?>