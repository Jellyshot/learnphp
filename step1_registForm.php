<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>회원가입</h2>
    <form action="step1_registProcess.php" method="POST">
    <label for="username">사용자명: </label>
    <input type="text" name="username" placeholder= "유저명을 입력해주세요"><br>
    <label for="password">비밀번호: </label>
    <input type="password" name="password" placeholder="비밀번호를 입력해 주세요.">
    <br>
    <input type="submit" value="저장">

</form>
</body>
</html>