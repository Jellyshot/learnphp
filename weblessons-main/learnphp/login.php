<?php
  $username = $_POST['username'];
  $password = $_POST['password'];
  $wu = 0;
  $wp = 0;
  if ( !is_null( $username ) ) {
    $conn = mysqli_connect( 'localhost', 'webdb', 'webdb', 'webdb' );
    $sql = "SELECT userpwd FROM user WHERE username = '" . $username . "';";
    $result = mysqli_query( $conn, $sql );
    while ( $row = mysqli_fetch_array( $result ) ) {
      $encrypted_password = $row['userpwd'];
      // $encrypted_password = password_hash($row['userpwd'], PASSWORD_DEFAULT);
    }
    if ( is_null( $encrypted_password ) ) {
      $wu = 1;
    } else {
      
      if ( $password == $encrypted_password ) {
      // if ( password_verify( $password, $encrypted_password ) ) {
        header( 'Location: login-ok.php' );
      } else {
        $wp = 1;
      }
    }
  }
?>
<!doctype html>
<html lang="ko">
  <head>
    <meta charset="utf-8">
    <title>로그인</title>
    <style>
      body { font-family: sans-serif; font-size: 14px; }
      input, button { font-family: inherit; font-size: inherit; }
    </style>
  </head>
  <body>
    <h1>로그인</h1>
    <form action="login.php" method="POST">
      <p><input type="text" name="username" placeholder="사용자이름" required></p>
      <p><input type="password" name="password" placeholder="비밀번호" required></p>
      <p><input type="submit" value="로그인"></p>
      <?php
      if ( $wu == 1 ) {
        echo "<p>사용자이름이 존재하지 않습니다.</p>";
      }
      if ( $wp == 1 ) {
        echo "<p>비밀번호가 틀렸습니다.</p>";
      }
      ?>
    </form>
  </body>
</html>