// 1. use strict mode for valid Javascript
'use strict';

// 2. variable, rw(read/write) : 변수는 값을 읽거나 쓰는 것이 가능... 변경 가능
// let (added in ES6)
let globalName = 'global name';
{
let name = 'swcodingschool';
console.log(name);
name = 'hello';
console.log(name);
console.log(globalName);
}
console.log(name);
console.log(globalName);
// block scope {  }를 이용, {} 안에 코드를 작성하게 될 경우
// {} 밖에서는 더 이상 변수를 인식할 수 없음
// 반대로 {} 밖에 변수를 선언하면 어디서나 사용 가능. global scope이라고 함
// 

// var (don't ever use this!!. ES6 이전 사용법)
// var 는 사용하기도 전에 사용 가능 ===>  hoisting
// var hoisting( move declaration from bottom to top)
age = 4;
var age;

// var는 block scope가 없다.
//3. constant  :   read only
// favor immutable data type always for a few reasons:
// - security
// - thread safety
// - reduce human mistakes
// const maxNumber = 1 

// 4. variable types
// primitive, single type : number, string, boolean, null, undefined, symbol
// object type : object, box container
// function, first-class function


const count = 100; // integer
const size = 1.23; // decimal number
console.log(`value: ${count}, type: ${typeof count}`)   //  grave 사용에 주의!!
console.log(`value: ${size}, type: ${typeof size}`)

// number - special numeric values : infinity, -infinity, NaN
const infinity = 1 / 0;
const negativeInfinity = -1 / 0;
const nAn = 'not a number' / 2;
console.log(infinity);
console.log(negativeInfinity);
console.log(nAn);

// bigInt(fairly new, don't use it yet)
const bigInt = 1234567890123456789012345678901234567890n; // over (-2**53 ~ 2**53) n을 추가함으로써 bitInt 로 변경
console.log(`value: ${bigInt}, type: ${typeof bigInt}`);
console.log(Number.MAX_SAFE_INTEGER);

// String
const char = 'c';
const brendan = 'brendan';
const greeting = 'hello ' + brendan;
console.log(`value: ${greeting}, type: ${typeof greeting}`);
const helloBob = `hi ${brendan}!!`;  // template literals....   grave 기호 사용함에 주의!!
console.log(`value: ${helloBob}, type: ${typeof helloBob}`);

//boolean
// false : 0, null, udefined, NaN, ''
// true : any other value
const canRead = true;
const test = 3 < 1; // false
console.log(`value: ${canRead}, type: ${typeof canRead}`)
console.log(`value: ${test}, type: ${typeof test}`)

// null 
let nothing = null;
console.log(`value: ${nothing}, type: ${typeof nothing}`)

// undefined
let x;  // 또는 let x = undefined;
console.log(`value: ${x}, type: ${typeof x}`)

// symbol, create unique identifiers for objects
const symbol1 = Symbol('id');
const symbol2 = Symbol('id');
console.log(symbol1 == symbol2); // false
const gSymbol1 = Symbol.for('id');
const gSymbol2 = Symbol.for('id');
console.log(gSymbol1 == gSymbol2); // true
// console.log(`value: ${symbol1}, type: ${typeof symbol1}`)  // symbol값을 바로 출력하면 오류 발생 : symbol value를 stringㅇ로 변환할 수 없다는
console.log(`value: ${symbol1.description}, type: ${typeof symbol1}`) // description을 붙여 string으로 변환 후 출력해야 함.

//object, real-life object, data structure
const john = {name: 'john', age:26};  // object 자체는 const이지만 
john.age = 27;   // object를 구성하고 있는 요소는 값 변경 가능함

// 5. Dynamic typing : dynamically typed language
let text = 'korea';
console.log(`value: ${text}, type: ${typeof text}`);
console.log(text.charAt(0));  // 스트링일때는 첫글자를 가져올 수 있으나
// console.log(text.charAt(0));  // 숫자로 변경된 후에는 불가능함
text = 1;
console.log(`value: ${text}, type: ${typeof text}`); // string 타입의 변수가 값에 따라 숫자형으로 변경됨
text = '7' + 5;
console.log(`value: ${text}, type: ${typeof text}`); // string과 숫자형의 결합은 스트링으로 변환됨
text = '10' / '5';
console.log(`value: ${text}, type: ${typeof text}`); // string과 string 나누기 : 숫자료 변환하여 연산 후 숫자로 보관
// console.log(text.charAt(0));  // 숫자로 변경된 후에는 불가능함