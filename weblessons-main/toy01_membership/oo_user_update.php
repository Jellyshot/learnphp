<?php
    //연결준비
    require 'adbconfig.php'; //이거 안해주면 데이터를 못물어옴 ./ 현재 내가 있는 기준으로(절대경로), 아무것도 없는것: 내가 있는 기준으로(상대경로)

    // create connection
    $conn = new mysqli($dbservername, $dbusername, $dbpassword, $dbname);

    // check connection : 연결 확인, 오류가 있으면 메시지 출력 후 프로세스 정료
    if($conn->connect_error) {
        echo outmsg(DBCONN_FAIL);
        die("연결실패 :".$conn->connect_error);
    }else {
        if(DBG) echo outmsg(DBCONN_SUCCESS);
    }

    // 변수 및 쿼리 설정 
    $id = $_GET['id'];  //수정할 레코드의 id값을 받아온다
    $sql = "SELECT * FROM users WHERE id = " .$id; //해당 id로 데이터를 검색하는 질의문 구성

    //회원가입할때 썼단 쿼리 실행구문을 동일하게 적용하여 결과처리
    $result = $conn ->query($sql); 

    if($result-> num_rows > 0) {
        $row = $result -> fetch_array(); //데이터를 배열로 얻어와서
        $username = $row['username']; //변수별로 값을 할당함 왼쪽 value, 오른쪽 데이터베이스의 column
        $cellphone = $row['cellphone'];
        $email = $row['email'];
    }else { echo outmsg(INVALID_USER);
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
    <h1>사용자정보 수정</h1>
    <form action="oo_user_updateprocess.php" method="POST">
        <input type="hidden" name= "id" value="<?=$id?>"> 
        <!-- 현재 form을 통해 post방식으로 데이터가 updateprocess로 넘어가기 때문에, process파일에서 prepare문에 where 조건을 id로 걸기 위해서는, update파일에서 id값을 넘겨줘야 함. 하지만 수정화면에서는 필요하지 않기 때문에 hidden처리함         -->
        <label for="username">사용자 아이디 : </label><input type="text" name="username" value="<?=$username?>" readonly /><br>
        <label for="passwd">비밀번호 : </label><input type="password" name="passwd"/><a href="#"><button>비밀번호 수정</button></a><br>
        <label for="cellphone">전화번호 : </label><input type="text" name="cellphone" value="<?=$cellphone?>" required /><br>
        <label for="email">E-Mail : </label><input type="text" name="email" value="<?=$email?>" required /><br>
        <br>
        <input type=submit value="저장">
    </form>
</body>

</html>