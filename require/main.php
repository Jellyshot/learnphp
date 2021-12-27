<!-- 리팩터링: 코드를 조금 더 효율적으로 개선하는 것
    중복 입력을 피하기 위해, header와 footer php파일을 만들어 두고 
    require 함수를 이용하여 해당 내용을 불러옴-->
    
<?php   
require('header.php');

echo '이것은 메인페이지 입니다. <br>';
echo '이것은 메인페이지 입니다. <br>';
echo '이것은 메인페이지 입니다. <br>';
echo '<a href="main2.php">main2</a><br>';
require('footer.php');