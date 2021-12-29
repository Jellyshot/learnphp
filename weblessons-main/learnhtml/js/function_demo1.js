var acc = document.getElementsByClassName("accordion");
// console.log(acc);
var i;

for (i = 0; i < acc.length; i++) {
  acc[i].addEventListener("click", function() {
    // "active" class 토글 
    this.classList.toggle("active");
    console.log(this.classList);

    /* 숨김과 보임 토글 */
    var panel = this.nextElementSibling;
    //console.log(panel);
    if (panel.style.display === "block") {
      panel.style.display = "none";
    } else {
      panel.style.display = "block";
    }
  });
}