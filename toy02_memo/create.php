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
        <p style="font-size: 30px;">New Memo</p>
    </header>

    <form class=form action="create_process.php" method="post">
        <div class="date">
            <?php
            $currdt = date("Y-m-d h:i:s");
            echo "작성일시: " . $currdt;
            ?>
        </div>
        <div class="contents">
        <p><input type="text" name="title" placeholder="Title" /></p>
        <p><textarea name="description" placeholder="Description" cols="100" rows="20"></textarea></p>
        </div>
        <div class="buttons">
            <p><input type="submit" value="Save" style="font-size: 16px;"/></p>
            <p><input type="reset" value="Reset" style="font-size: 16px;"/>
                <a href="memolist.php"><button style="font-size: 16px;">list</button></a>
    </form>
</body>

</html>