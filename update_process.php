<?php
rename('data/'.$_POST['old_title'],'data/'.$_POST['title']);
file_put_contents('data/'.$_POST['title'], $_POST['description']);
header('Location:/index_login.php?id='.$_POST['title']);
?>