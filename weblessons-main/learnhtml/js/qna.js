// Get the elements with class="column"
var elements = document.getElementsByClassName("column");

// Declare a loop variable
var i;

// Full-width images
function one() {
    for (i = 0; i < elements.length; i++) {
        elements[i].style.msFlex = "100%";  // IE10
        elements[i].style.flex = "100%";
    }
}

// Two images side by side
function two() {
    for (i = 0; i < elements.length; i++) {
        elements[i].style.msFlex = "50%";  // IE10
        elements[i].style.flex = "50%";
    }
}

// Four images side by side
function four() {
    for (i = 0; i < elements.length; i++) {
        elements[i].style.msFlex = "25%";  // IE10
        elements[i].style.flex = "25%";
    }
}

// Add active class to the current button (highlight it)
var header = document.getElementById("myHeader");
var btns = header.getElementsByClassName("btn");
for (var i = 0; i < btns.length; i++) {
    btns[i].addEventListener("click", function () {
        // var current = document.getElementsByClassName("active");
        // current[0].className = current[0].className.replace(" active", "");
        var current = document.querySelector(".active");
        current.className = current.className.replace(" active", "");
        this.className += " active";
    });
}

// .addEventLisenter 이벤트가 생길때 대기를 만들어주는것 / 당장 실행이 아니라, 실행은 클릭할때 "click".
//current[0]왜 0을 적어주었을까? 
    //current[0]의 의미는 current 변수 배열의 0번째(첫번째)요소안에 오는 것을 가져온다, current 변수의 결과는 어찌됐건 1개밖에 없으니까 - active는 하나만이니까 

//btns[i].addEventListener("click", function() {
    //pg341 문서객체 - 여러개선택 - 클라스 속성으로 여러개 선택 - 따라서 배열요소로써 첫번째 요소를 가져오기
    // var current = document.getElementsByClassName("active");
    // current[0].className = current[0].className.replace(" active", "");

    //OR

    //pg341 문서 객체 - 1개선택 - 선택자 사용 ".클라스이름" - 배열를 사용할 필요가 X
    // var current = document.querySelector(".active");
    // current.className = current.className.replace(" active", ""); 