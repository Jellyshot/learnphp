// 1. String concatenation
console.log('my' + ' dog');
console.log('1' + 2);
console.log(`string literals : 1 + 2 = ${1 + 2}` );

// 2. Numeric Operators
console.log(1 + 1); // add
console.log(1 - 1); // substract
console.log(1 / 1); // divide
console.log(1 * 1); // multiply
console.log(5 % 2); // remainder
console.log(2 ** 3); // exponentiation

// 3. increment and decrement operators
let counter = 2;
const preIncrement = ++counter;
// counter = counter + 1;
// preIncrement = counter;
console.log(`preIncrement: ${preIncrement}, counter:${counter}`);
counter = 2;
const postIncrement = counter++;
// postIncrement = counter;
// counter = counter + 1;
console.log(`postIncrement: ${postIncrement}, counter:${counter}`);

// 4. Assignment operators
let x = 3;
let y = 6;
x += y; // x = x + y;
x -= y;
x *= y;
x /= y;

// 5. comparison operators

// 6. logincal operators : || (or), && (and), !(not)
const value1 = false;
const value2 = 4 < 2;
// || (or)
console.log(`or : ${value1 || value2 || check()}`);  // value1 이 true 인 경우 뒤는 더이상 검토하지 않음... 함수에서 출력하는 룰루랄라가 출력되지 않을 수 있음....

function check() {
  for (let i = 0; i < 10; i++) {
    //wasting time
    console.log('♬');
  }
  return true;
}


// 7. equality
const stringFive = '5';
const numberFive = 5;
// == loose equality, with type conversion
console.log(stringFive == numberFive);
console.log(stringFive != numberFive);
// === strict equality, no type conversion
console.log(stringFive === numberFive);
console.log(stringFive !== numberFive);


// 8. conditional operators : if
// if, else if, else
const name = 'john'
if(name === 'john') {
  console.log('Welcome, John');
}else if(name ==='coder'){
  console.log('you are amazing coder');
}else {
  console.log('unknown');
}

// 9. Ternary operator: ?
// condition ? vlaue1 : value2;
console.log(name === 'john' ? 'yes' : 'no');

// 10. switch statement
// switch () {   case : break; ...   default: break;}

//11. Loops
// while loop, whiel the condition is truthy, body code is executed
// while() { }
// do { } while(조건비교);
// for loop, for(begin;condition;step) { }
// nested loops



function(a, b) {
  return a - b;
}