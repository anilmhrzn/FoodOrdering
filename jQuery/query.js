// for search bar
// /*function noPlaceholder() {
//   element = document.getElementById("inputSearchBar");
//   element.placeholder = "";
//   element.addEventListener("focusout", () => {
//     if (element.value.trim() == "") {
//       element.placeholder = "search for food or drinks";
//     }
//   });
// }*/
// for opening registraion form
function newPanel() {
  element = document.getElementById("for-form");
  element.style.display = "block";
  element = document.getElementById("content-except-register-form");
  element.style.filter = "blur(5px)";
}
//for validation
function frontentValidation() {
  var fullName = document.getElementById("fullName").value.trim();
  var address = document.getElementById("address").value.trim();
  var number = document.getElementById("number").value.trim();
  var email = document.getElementById("email").value.trim();
  var username = document.getElementById("username").value.trim();
  var password = document.getElementById("password").value.trim();
  var reEnteredPassword = document
    .getElementById("reEnteredPassword")
    .value.trim();
  var validated = true;
  if (fullName == "") {
    alert("fullname cannot be empty");
  }
}
// for closing registraion form
function closeNewPanel() {
  element = document.getElementById("for-form");
  element.style.display = "none";
  element = document.getElementById("content-except-register-form");
  element.style.filter = "blur(0px)";
}

//for categories section
function show(id, idofcategories) {
  document.getElementById("appetizers").style.backgroundColor = "transparent";
  document.getElementById("mainCourse").style.backgroundColor = "transparent";
  document.getElementById("dessert").style.backgroundColor = "transparent";
  document.getElementById("drinks").style.backgroundColor = "transparent";
  document.getElementById("appetizers-section").classList.remove("show-categories-section");
  document.getElementById("mainCourse-section").classList.remove("show-categories-section");
  document.getElementById("dessert-section").classList.remove("show-categories-section");
  document.getElementById("drinks-section").classList.remove("show-categories-section");
  element = document.getElementById(id);
  element.style.backgroundColor = "#41b3a3";
  showCategories(idofcategories);
}
// for showing the clicked categories section
function showCategories(id) {
  element = document.getElementById(id);
  element.classList.add("show-categories-section");
}
var qty = 1;
var price;
// for displaying qty price box
function showQtyBox(price, name) {
  // console.log(price);
  // console.log(name);
  this.price = price;
  element = document.getElementById("QtyPriceTable");
  element.style.display = "block";
  calculateAmount(qty);
}
// for quantity
function calculateAmount(qty) {
  if (qty > 9999) {
    document.getElementById("totalAmt").innerText = "not available!!";
  } else {
    document.getElementById("totalAmt").innerText = "R.s." + qty * price + "";
  }
}

// when the page loads the following function will execute
window.onload = function () {
  show("appetizers", "appetizers-section");
};
