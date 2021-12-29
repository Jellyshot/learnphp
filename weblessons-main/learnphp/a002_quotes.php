<!-- 
swcodingschool's coding class
for 2021 full stack developer training course, Nov. 2021 at koreait academy

Subject : PHP Programming

PHP 스크립트에서 String은 Quotes를 사용함을 설명하고
double quotes와 single quotes의 차이점을 구분하여 설명한다.
-->

<?php
  // string has to be enclosed by quotes like below.
  $name = 'Hong Gildong';

  // While both single and double quotes can be used to enclose strings, 
  // there is a difference in how PHP interprets two methods. 
  // If you used double quotes then PHP would interpret variables 
  // and special characters (\t, \n etc) inside the string 
  // but if you used single quotes PHP would consider only the literal value 
  // of the whole string.
  $name = 'Hong Gildong';
  echo "Name is $name"."<br>"; // Would print Name is Hong Gildong
  echo 'Name is $name'."<br>"; // Would print Name is $name
  // Usually single quotes are used when the whole statement is a simple string 
  // (like ‘Name is Hong Gildong’) and double quotes are used when the statement 
  // contains variables to be interpreted (like “Name is $name”).
?>