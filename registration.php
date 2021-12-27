<?php
$nameErr = $emailErr = $idErr = $pwErr = $pnumErr = $websiteErr = "";
$name = $email = $id = $pw = $pnum = $website = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["name"])) {
        $nameErr = "Name is required";
        } else {    
            $name = test_input($_POST["name"]);
        }

    if (empty($_POST["email"])) {
        $emailErr = "Email is required";
        } else {
        $email = test_input($_POST["email"]);
        }

    if (empty($_POST["id"])) {
        $emailErr = "ID is required";
        } else {
        $email = test_input($_POST["id"]);
        }
    
    if (empty($_POST["pw"])) {
        $emailErr = "Password is required";
        } else {
        $email = test_input($_POST["pw"]);
        }

    if (empty($_POST["pnum"])) {
        $emailErr = "Phone Number is required";
        } else {
        $email = test_input($_POST["pnum"]);
        }

    function test_input($data) {
        $data = trim($data); 
        $data = stripslashes($data); 
        $data = htmlspecialchars($data);
        return $data;
    }
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
    <h2>회원가입</h2>    
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
        ID: <input type="text" name="id" value="" required>
        <span class="error">* <?php echo $idErr;?></span>
        <br><br>
        Password: <input type="password" name="pw" value="" required>
        <span class="error">* <?php echo $pwErr;?></span>
        <br><br>
        Name: <input type="text" name="name" value="" required>
        <span class="error">* <?php echo $nameErr;?></span>
        <br><br>
        Phone Number: <input type="tel" name="pnum" value="" required>
        <br><br>
        E-mail: <input type="email" name="email" value="" required>
        <span class="error">* <?php echo $emailErr;?></span>
        <br><br>


    <?php
        $name = test_input($_POST["name"]);
        if (!preg_match("/^[가-힣]{1,4}+$/",$name)) {
        $nameErr = "Only letters allowed";
        }
        $id = test_input($_POST["id"]);
        if (!preg_match("/^[A-Za-z]{1}[A-Za-z0-9]{8,19}$/",$id)) {
        $idErr = "Only letters allowed";
        }
        $pnum = test_input($_POST["pnum"]);
        if (!preg_match("/(\d{3}).*(\d{4}).*(\d{4})/",$pnum)) {
        $pnumErr = "Only 000-0000-0000";
        }
        $email = test_input($_POST["email"]);
        if (!preg_match("/^[a-z0-9_+.-]+@([a-z0-9-]+\.)+[a-z0-9]{2,4}$/",$email)) {
        $emailErr = "올바른 이메일 형식이 아닙니다.";
        }

    ?>
    
    

</body>
</html>