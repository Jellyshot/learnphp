<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>WEB</h1>
    <h3>learn PHP</h3>
    <ol>
        <li><a href="index.php?id=HTML">HTML</a></li>
        <li><a href="index.php?id=CSS">CSS</a></li>
        <li><a href="index.php?id=JavaScript">JavaScript</a></li><br>
        <a href="form.html"><Button>로그인</Button></a>
    </ol>

<?php
    if (isset($_GET['id'])) {
        echo "<h2>" . $_GET['id'] . "</h2><br>";
        // echo안에 html태그를 줄 때는 태그마다 문자처럼 묶어줘야함. 
    }else  {
        echo "<h2>Welcome</h2>";
    }
?>
    
    <!-- // echo '안녕하세요 ' .$_GET["name"] . "님?";
    // echo '지금 접속하신 지역은 ' .$_GET['adress'] . '입니다.';
    //해당값의 name은 출력이 되지 않지만, url을 통해 값을 얻어와서 줄 수 있음
    // http://localhost/index.php?name=홍길동&adress=대한민국 > 'get'방식. parameter.php라는 어플리케이션에게 name=홍길동이다 라고 값을 준거임 단. 주소창에 값이 뜸.
    // 'post'방식 : request라는 https 프로토콜을 이용해 정보를 전달하여 내용은 숨김.
    // 출력값: 안녕하세요 홍길동님? 지금 접속하신 지역은 대한민국입니다. -->
<?php
    if (isset($_GET['id'])) {
        echo file_get_contents('data/'.$_GET['id']);
        // id값이 있으면, 해당 아이디값의 data파일을 불러오고
    }else {
        echo htmlspecialchars(file_get_contents('data/HTML4'));
    } //id값이 없으면, html의 파일을 불러와라.
    ?>
<p>======================</p>
<!-- var_dump 함수 사용하기 -->

<?php
    // phpinfo(); - php정보를 불러옴
    echo date('Y-m-d H:i:s'); //세계표준시간이 나옴
    echo '<br>';
    $a = 100;
    var_dump($a);  //변수의 타입을 확인시켜줌 int(100)
    echo '<br>';
    $a = 'korea';
    var_dump($a); // string(5) "korea" 문자열이의 길이와 값이 나옴
    echo '<br> ====================== <br>';
    ?>
<p>======================</p>

<!-- scandir() 함수와 if반복문을 사용하여 data 폴더안의 파일들이 자동으로 파일이름값을 가져와 id와 html구문 안의 li를 가상으로 만듬 -->

<h1><a href="index.php" style="text-decoration: none; color:black;">WEB 자동목록만들기</a></h1>
<ol>
<?php
$list = scandir('data');
$i = 0;
while ($i < count($list)) {
    if($list[$i] != '.'){
        if ($list[$i] != '..') {
            ?>
            <li><a href="index.php?id=<?=$list[$i]?>"><?=$list[$i]?></a></li>
            <?php
           
        }
    } $i += 1;
} //자동목록생성 끝 

    if (isset($_GET['id'])) {
        echo '<p>' .file_get_contents("data/".$_GET['id']) .'</p>';
        // id값이 있으면, 해당 아이디값의 data파일을 불러오고
    }else {
        echo '<p> click the number of list <p>';
    } //id값이 없으면, html의 파일을 불러와라.

?>
</ol>
</body>
</html>