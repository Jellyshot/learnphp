<!-- 
swcodingschool's coding class
for 2021 full stack developer training course, Nov. 2021 at koreait academy

Subject : PHP Programming

data type에 대하여 설명
-->
<?php
  // 홍길동의 기본급이 5000
  $name = 'Hong Gildong';
  $salary = 5000;

  // 여기에서 $name은 문자열, $salary는 숫자형
  // 이름에 성별을 추가하고 급여를 500 증가시켰다 가정
  $name = 'Mr. ' .$name;  
  $salary = $salary+500;
  // $name은 문자열, String Concatenation. dot operator 사용
  // $salary는 정수형, 덧셈 연산 적용

  // 그러나 다음과 같은 코드는 잘못된 것
  // $salary = $salary.200; // wrong
  // $name = 'Mr. '+$name; // $name은 0이 될 것. + 연산 전 문자열을 숫자값으로 변환

  // 
  // Type Juggling
  // 일반적 프로그래밍 언어에서  값 할당 전 변수 데이터 유형 정의!
  // 이후, 해당 유형의 값만 해당 변수에 할당 가능
  // PHP에서 변수의 유형은 사용하기 전에 정의되지 않으며 
  // 유형은 컨텍스트를 기반으로 PHP 인터프리터에 의해 결정
  // 
  
  $salary = 5000;
  echo "Hong Gildong's salary is ".$salary;
  // $salary가 문자열 컨텍스트에서 사용되고 PHP 인터프리터가 이를 문자열로 처리했기
  // 때문에 여기서 문자열 연결을 수행

  $salary = $salary + 200;
  echo $salary; // Would print 5200
  // $salary가 정수 컨텍스트에서 사용되었고 따라서 정수로 해석되었기 때문에 더하기 연산

  // 위와 같은 것을 Type Juggling이라 함!!
  // Type Juggling에 대한 상세 내용은 
  // https://php.net/manual/en/language.types.type-juggling.php 참조

  //
  // Scalar Data Types
  // Variables considered so far could contain only one value at a time. 
  // Data types associated with these variables are called Scalar. 
  // There are four Scalar data types in PHP.
  //

  // 1. String
  $today = 'Today is a nice day';
  // 2. Int
  $population = 20000000;
  $temperature = -14 ;
  // 3. Float
  $length = 145.78;
  $growthRate = -5.216;
  // 4. Boolean
  if (($age > 12) && ($age < 20)) {
    $teenage = true;
  } else {
    $teenage = false;
  }
  // some content goes here
  if ($teenage) {
    // show special offers for teenagers
  }

  // 
  // Compound Data Types
  // 배열과 객체가 이 범주에 해당. 
  // 둘 다 한 번에 둘 이상의 값을 포함 가능. 
  // 배열은 관련 값 집합을 순서대로 저장하는 데 사용되는 반면 객체에는 값과 기능 포함
  // 

  //
  // Other Data Types
  // NULL과 Resource는 특별한 경우에 발생하는 두 가지 데이터 유형. 
  // NULL은 변수에 값이 할당되지 않았음을 의미
    if (is_null($increment)) {
    $increment = 1;
    return $increment;
  } else {
    return ++$increment;
  }
  // 리소스는 외부 리소스의 데이터 또는 참조를 저장하는 변수
  $result = mysql_query($query);
  //$query가 유효한 MySQL 쿼리인 경우 $result는 리소스를 저장

  //
  // Type Casting
  // 앞서 언급했듯 PHP 인터프리터는 변수가 사용되는 컨텍스트에 따라 변수의 유형 결정 
  // 그러나 특정 데이터 유형을 강제 실행하려는 특별한 경우가 있을 수 있다.
  $value1 = 10; // An int
  $value2 = 20.38; // A float
  $value3 = $value1 + $value2; // $value3 will be 30.38 which is a float.

  // $value1 및 $value2가 다른 표현식 기반으로 할당, $value3이 정수인지 항상 확인 경우
  // $value1 및 $value2 유형을 아래와 같이 캐스팅
  $value3 = (int)$value1 + (int)$value2; // $value3 will be 30

?>