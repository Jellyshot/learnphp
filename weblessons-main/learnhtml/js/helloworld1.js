// java script simple demonstration
// 2021-12-01, swcodingschool@gmail.com

// JavaScript 의 엄격모드는 JavaScript 의 제한된 버전을 선택하여 
// 암묵적인 "느슨한 모드(sloppy mode)" 를 해제하기 위한 방법

// 엄격 모드는 평범한 JavaScript 시멘틱스에 몇가지 변경이 일어나게 합니다.
// 1. 기존에는 조용히 무시되던 에러들을 throwing
// 2. JavaScript 엔진의 최적화 작업을 어렵게 만드는 실수들을 바로잡는다. 
//    가끔씩 엄격 모드의 코드는 비-엄격 모드의 동일한 코드보다 더 빨리 작동하도록 만들어진다.
// 3. 엄격 모드는 ECMAScript의 차기 버전들에서 정의 될 문법을 금지합니다.

// 엄격모드를 전체 스크립트에 적용하기 위해, 
// 정확한 구문 "use strict";(또는 'use strict';) 을 다른 구문 작성 전에 삽입
let a;
a = 6;

// 함수에 strict mode 적용
// 마찬가지로, 함수에 strict mode를 적용하기 위해, 함수 본문 처음에 다음의 구문을 넣는다. 
// "use strict"; (또는 'use strict';)
function strict() {
  // 함수-레벨 strict mode 문법
  'use strict';
  function nested() { return "And so am I!"; }
  return "Hi!  I'm a strict mode function!  " + nested();
}
function notStrict() { 
  return "I'm not strict."; 
}
