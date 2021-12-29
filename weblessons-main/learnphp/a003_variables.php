<!-- 
swcodingschool's coding class
for 2021 full stack developer training course, Nov. 2021 at koreait academy

Subject : PHP Programming

variables은 value를 저장하는 역할을하며 변수내 값은 프로그램의 실행 중 바뀔 수 있음을 설명
-->

<?php
  $greeting = 'Welcome';

  $name = 'Tom';
  echo "$greeting $name";
  echo '<br />';

  $name = 'Jack';
  echo "$greeting $name";
  echo '<br />';

  // Naming Variables
  // In php, all variables should start with $ sign.
  // The part after $ sign is called variable name.
  // 1. Variable names can only contain letters, numbers and underscores.
  // 2. A variable name should only start with a letter or an underscore.
  // 3. Variable names are case-sensitive. 
  //    That means $Greeting and $greeting are two different variables.

  // 좀 더 나아가서...
  // Arrays의 개념 미리 설명
  // All the variables considered so far could contain only one value at a time. 
  // Arrays provide a way to store a set of values under one variable. 
  // 향후 배열의 선언과 사용법에서 상세히 다루자.

  // Predefined Variables
  // PHP provides a set of predefined variables. 
  // Most of them are arrays. 
  // Their availability and values are based on the context. 
  // For an example $_POST contains all the values submitted via a web form that used post method. 
  // Refer PHP manual for more information on predefined variables.
  // https://www.php.net/manual/en/reserved.variables.php


  // Constants  : 변수와 다른 점 강조. 실행 중 변경되지 않음!!
  // constants hold values that don’t get changed during the runtime of a script. 
  define('SITE_URL', 'http://www.google.com');
  echo SITE_URL; // Would print http://www.google.com
  // 일단 정의된 constant는 새로운 값을 대입할 수 없다.
  define('SITE_URL', 'http://www.naver.com');
  echo SITE_URL; // Would still print http://www.google.com
?>