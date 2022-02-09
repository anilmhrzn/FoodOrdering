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
  element3 = document.getElementById("content-except-register-form");
  element3.style.filter = "blur(2px)";
  // element3.style.height = "100%";
  element3.style.overflow = "hidden";
}
//for validation
function frontentValidation(){
  var fullName=document.getElementById('fullName').value.trim();
  var address=document.getElementById('address').value.trim();
  var number=document.getElementById('number').value.trim();
  var email=document.getElementById('email').value.trim();
  var username=document.getElementById('username').value.trim();
  var password=document.getElementById('password').value.trim();
  var reEnteredPassword=document.getElementById('reEnteredPassword').value.trim();
  var validated=true;
  if(fullName==''){
    alert ("fullname cannot be empty");
  }

}
// closing registration form
function closeNewPanel() {
  element = document.getElementById("for-form");
  element.style.visibility = "hidden";
 // // element.classList.remove("transitionClass");
  // element2 = document.getElementById("content-except-register-form");
  // element2.classList.remove("body-content");
  // element2.classList.add("body-content-after-form");
  element2 = document.getElementById("content-except-register-form");
  element2.classList.add('hideScrollBar')
  // element2.style.overflowY = "visible";
  // element3.style.height = "auto";
  element2.style.filter = "blur(0px)";

  // element3.style.filter = "blur(2px)";
  // element3.style.overflow = "hidden";
  
  // element3 = document.getElementById("content-except-register-form");
}
//for categories section
var flagForBgColor=false;
function show(id,idofcategories){
  if(flagForBgColor==true){
    document.getElementById('appetizers').style.backgroundColor='transparent';
    document.getElementById('mainCourse').style.backgroundColor='transparent';
    document.getElementById('dessert').style.backgroundColor='transparent';
    document.getElementById('drinks').style.backgroundColor='transparent';
    document.getElementById('appetizers-section').classList.remove('show-categories-section');
    document.getElementById('mainCourse-section').classList.remove('show-categories-section');
    document.getElementById('dessert-section').classList.remove('show-categories-section');
    document.getElementById('drinks-section').classList.remove('show-categories-section');

    // console.log('hello')
  }
  element=document.getElementById(id);
  element.style.backgroundColor="#41b3a3";
  showCategories(idofcategories);
  flagForBgColor=true;
}
function showCategories(id){
  element=document.getElementById(id);
  element.classList.add('show-categories-section');
}