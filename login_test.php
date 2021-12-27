<?php

namespace loginex;

if (!is_null($_POST)) {
$input_username = $_POST['userName'];
$input_password = $_POST['password'];
}  

if (!is_null($input_username)) { //form에 입력이 있을 때 처리를 진행
    echo "[DBG]폼에 입력된 항목이 있습니다.";
    //필요한 작업 내용을 pseudo code(의사코드로 표현해보자.
    // 데이터베이스와 연결(get connection)
    // require(): 특정한 외부 파일을 현재 실행중인 스크립트에 포함시키고자 할 때 사용.
    // require_once: 한번만 require 하는 경우.
    require_once '/util/dbutil.php';
    // wamp에서 데이터베이스를 만들어줘야함.
    // 질의 구성(id와 password를 만족하는 항목이 있는지)
    // 질의 실행
    // 실행결과 해당 항목이 있으면 > 로그인 성공 페이지로 이동
    // 해당 항목이 없으면, > 로그인 실패, 재로그인.
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <div class="header">
        <h2>로그인</h2>
    </div>
    <hr>
    <form action="<?= $_SERVER['PHP_SELF'] ?>" name="formUser" method="post">
        <label for="userName">User Name: </label>
        <!-- label for에는 어떤 input태그를 위한 것인지 input에서 설정한 name을 적어준다. -->
        <input type="text" name="userName" placeholder="please input your user name" /><br>
        <label for="password">Password: </label>
        <input type="password" name="password" placeholder="please input your password" /><br>
        <input type="submit" value="Login" />

    </form>
</body>

</html>