<?php
    unlink('data/'.$_POST['id']);
    // php파일을 지울 때 사용 하는 함수
    header('Location: /index_login.php');
?>