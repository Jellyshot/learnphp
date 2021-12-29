<!-- 
swcodingschool's coding class
for 2021 full stack developer training course, Nov. 2021 at koreait academy

Subject : PHP Programming

PHP 스크립트에서 PHP 엔진이 생성하는 출력(그런 다음 클라이언트로 전송됨)을 위해 
echo() 사용 
-->

<?php
// 시간이 12시 이전이면 아침인사를 그렇지 않으면 welcome을 출력해 보자.
  // locale timezone 설정
  // php.ini 파일의 date.timezone 항목에 시간대timezone 설정
  // date.timezone=Asia/Seoul
  date_default_timezone_set("Asia/Seoul");

  // date - Format a local time/date
  // date(string $format, ?int $timestamp = null): string
  echo date('l').'<br>'; // prints something like: Monday
  echo date('l jS \of F Y h:i:s A').'<br>'; // Prints something like: Monday 8th of November 2021 01:12:46 PM
  echo date("Y-m-d H:i:s").'<br>'; // 2021-11-30 13:12:46 (the MySQL DATETIME format)

  
  echo date('G').'<br>';
  if(date('G') < 12){
    $greeting = 'Good Morning!!';
  } else {
    $greeting = 'Welcome! ';
  }
  echo $greeting.'<br>';  // 또는 echo($greeting); 

  $intro = 'My age is ';
  $myAge = 21;

  echo $intro, $myAge;

  // print() is also a language construct and behaves almost same as echo(). 
  // Noticeable differences are print() can’t take more than one argument 
  // and print() has a return value which is always 1.
?>