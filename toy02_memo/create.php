<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/create.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <title>Document</title>
</head>

<body>
    <header>
        <div class="menu_icon">
            <sapn>&#9776;</sapn>
        </div>
    </header>
    <h1>New Memo</h1>
    <form class=form action="create_process.php" method="post">
        <div class="date">
            <?php
            $currdt = date("Y-m-d h:i:s");
            echo "작성일시: " . $currdt;
            ?>
        </div>
        <br>
        <div class="contents">
            <p><input type="text" name="title" placeholder="Title" /></p>
            <hr>
            <p><textarea name="description" placeholder="Description" cols="90" rows="15"></textarea></p>
        </div>
        <div class="buttons">
            <span><input type="submit" value="Save" style="font-size: 16px;" /></span>
            <span><input type="reset" value="Reset" style="font-size: 16px;" /></span>
            <span><a href="memolist.php"><button style="font-size: 16px;">List</button></a></span>
        </div>
    </form>
</body>

</html>