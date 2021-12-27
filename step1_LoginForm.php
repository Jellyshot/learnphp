<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>로그인 시스템 제작 테스트</h1>
    <form action="step1_LoginProcess.php" method="POST">
    <label for="username">UserName: </label>
    <input type="text" name="username" placeholder="사용자명을 입력해주세요"><br>
    <label for="password">Password: </label>
    <input type="password" name="password" placeholder="비밀번호를 입력해주세요"><br>
    <input type="submit" value="로그인">
    <a href="step1_registForm.php" ><button>회원가입</button></a>
    </form>
</body>
</html>