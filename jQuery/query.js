// for search bar
function noPlaceholder() {
  element = document.getElementById("inputSearchBar");
  element.placeholder = "";
  element.addEventListener("focusout", () => {
    if (element.value.trim() == "") {
      element.placeholder = "search for food or drinks";
    }
  });
}
// opening registration form
function newPanel() {
  element = document.getElementById("for-form");
  element.style.visibility = "visible";
  element.classList.add("transitionClass");
  element2 = document.getElementById("main-body");
  element2.classList.remove("body-content");
  element2.style.overflow = "hidden";
  element3 = document.getElementById("content-except-register-form");
  element3.style.filter = "blur(2px)";
}
// closing registration form
function closeNewPanel() {
  element = document.getElementById("for-form");
  element.style.visibility = "hidden";
  element.classList.remove("transitionClass");
  element2 = document.getElementById("main-body");
  element2.classList.add("body-content");
  element2.style.overflowY = "visible";
  element3 = document.getElementById("content-except-register-form");
  element3.style.filter = "blur(0px)";
}
//for categories section
var flagForBgColor=false;
function show(id){
  // if(flagForBgColor==true){
    document.getElementById('appetizers').style.backgroundColor='transparent';
    document.getElementById('mainCourse').style.backgroundColor='transparent';
    document.getElementById('dessert').style.backgroundColor='transparent';
    document.getElementById('drinks').style.backgroundColor='transparent';
    console.log('hello')
  // }
  element=document.getElementById(id);
  element.style.backgroundColor="rgb(167, 167, 167)";
  showCategories();
  // flagForBgColor=true;
}
function showCategories(){
  element=document.getElementById('appetizers-section');
  element.classList.add('show-categories-section');
}