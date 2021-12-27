<?php
    // echo "<p>ID: " .$_GET['id'] ."</p>";
    // echo "<p>Password: " .$_GET['pw'] ."</p>";
    echo "<p>ID: " .$_POST['uid'] ."</p>";
    echo "<p>Password: " .$_POST['upw'] ."</p>";

    file_put_contents('act/' .$_POST['uid'], $_POST['upw']);
    header('Location: /login.php');
?>