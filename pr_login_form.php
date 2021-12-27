<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>로그인</title>
    <link rel="stylesheet" href="/css/pr_login_form.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <h1>로그인</h1>
    <hr>

    <form action="pr_loginProcess.php">
        <div class="pannel1">
        <span><i class="fa fa-user-circle-o"></i></span>
        <input type="text" name="name" placeholder="사용자명을 입력해 주세요"><br>
        </div>
        <div class="pannel2">
        <span><i class="fa fa-unlock-alt"></i></span>
        <input type="password" name="pwd" placeholder= "비밀번호를 입력해 주세요"><br>
        </div>
        <div class="pannel3">
        <input type="submit" value= 로그인>
        <a href="pr_registform.php"><button>회원가입</button></a>
        </div>
    </form>
    
</body>
</html>

