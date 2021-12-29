<!-- 
swcodingschool's coding class
for 2021 full stack developer training course, Nov. 2021 at koreait academy

Subject : PHP Programming

Arrays는 한번에 하나 이상의 값을 저장.
데이터 그룹을 다루는데 유용.
배열의 선언과 사용법을 설명한다.
-->
<?php
  // 사원 ID가 NX-91234인 홍길동의 기본 급여가 5000
  // 다음과 같이 코딩 가능
  $empName = 'Hong Gildong';
  $empId = 'NX-91234';
  $empSalary = 5000;
  // 위 코드는 1인의 직원을 다룰 때는 충분하지만
  // 더 많은 직원을 처리해야 한다면, 
  // 직원 각자에 대해 변수를 선언해야 할 것.

  // 이 문제를 배열을 통해 해결하자.
  $emp1 = array('Hong Gildong', 'NX-91234', 5000);
  // 개별 요소를 출력하기 위해서 다음과 같이 코딩
  echo $emp1[0]; // Hong Gildong
  echo $emp1[1]; // NX-91234
  echo $emp1[2]; // 5000

  // 다른 직원을 정의하려 한다면
  $emp2 = array('Seong Chunhyang', 'NX-95678', 5500);

  // 모든 직원을 하나의 배열로 선언하려한다면
  $employees = array($emp1, $emp2);

  // $employees 배열에 대해서는 다음과 같이 액세스
  echo $employees[0][0]; // Hong Gildong
  echo $employees[0][1]; // NX-91234
  echo $employees[1][2]; // 5500
  // $employees는 다차원 배열

  // Indexed vs Associative Arrays
  // 위에서 각 배열 요소는 키$emp1[0]와 값 Hong Gidldong의 두개 부분으로 구성
  // 배열의 키는 엘리먼트의 위치값을 알 수 있게 함.
  // 배열에서 이것을 인덱스라 하며 기본적으로 숫자임.

  // 문자열을 키로 사용할 때 Associative Array라 함.
  // 배열 요소를 기억하기에 편리함.
  // $emp3를 다음과 같이 정의하고 각 요소에 대해 액세스할 수 있음
  $emp3 = array('name'=>'Hong Gildong', 'id'=>'NX-91234', 'salary'=>5000);
  echo $emp3['name']; // Hong Gildong
  echo $emp3['id']; // NX-91234
  echo $emp3['salary']; //5000

  // Array의 정의
  // array() 함수 사용 정의 방법은 이미 확인
  // also define an array by directly assigning a value to an element.
  $emp4[0] = 'Hong Gildong'; // Makes $emp3 an array
  // Associative Array로 정의시
  $emp4['name'] = 'Hong Gildong'; // Makes $emp3 an array

  // 배열 함수, PHP는 built-in functions을 제공
  // 배열과 관련한 함수 : 
  // array functions     https://www.php.net/manual/en/ref.array.php
  echo count($emp1); // will print number of elements in the array
  // associative array로 선언된 경우라면
  $keys = array_keys($emp3); // $keys become an array that contains keys to of $emp1
  echo $keys[0];
  echo $keys[1];
  echo $keys[2];
?>