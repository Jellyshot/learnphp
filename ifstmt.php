<?php
// 로그인 유무에 따라 다른 안내창 띄우기.

$Login = true;
$userName = "홍길동";
if ($Login) {
?>
    <h1 style="color: pink;"><?=$userName?>님이 로그인 하셨습니다. </h1>
<?php
} #if($login)이 true인 조건 끝
else {
?>
    <h1>Login이 필요합니다.</h1>
<?php 
} #if($login)이 false인 경우 끝
?>

<?php
if (isset($Login)) {
?>
   <?=$userName?>님 반갑습니다.
   <?php
}else {
    echo 'Welcome';
}
?>