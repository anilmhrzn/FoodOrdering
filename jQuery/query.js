// for opening registraion form
function newPanel() {
  element = document.getElementById("for-form");
  element.style.display = "block";
  element = document.getElementById("content-except-register-form");
  element.style.filter = "blur(5px)";
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
/*this background color transparent is used to get rid of backgroud color when another option is selected for eg: if we select the appetizers section the background color of the appetizer is set to this #41b3a3 color and after that if main course is selected then the maincourse will have #41b3a3 this background and other will have transparent background*/
  document.getElementById("appetizers").style.backgroundColor = "transparent";
  document.getElementById("mainCourse").style.backgroundColor = "transparent";
  document.getElementById("dessert").style.backgroundColor = "transparent";
  document.getElementById("drinks").style.backgroundColor = "transparent";
  
  // this part does removes the class show-categories-section form all 4 categories which has styling such as display block
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
  element.classList.add("show-categories-section"); // show categories has styling which makes user visible the requierd block ...
}
var qty = 1;
var price;
// for displaying qty price box
function showQtyBox(price, name) {
  this.price = price;
  element = document.getElementById("QtyPriceTable");
  element.style.display = "block";
  calculateAmount(qty);
}
// for price
function calculateAmount(qty) {
  // this calculates and updates the price according to user given value
  document.getElementById("totalAmt").innerText = qty > 9999 ? "not available!!" : `${qty * price}`;
}
function closeQtyPricePanel() {
  element = document.getElementById("QtyPriceTable");
  element.style.display = "none";
}
function addInPlate(){
  parentElement=document.querySelector("table.for-adding-in-plate");
  parentElement.appendChild(document.createElement('tr').classList.add('newTrForPlateTable'));
  console.log(document.getElementById("totalAmt").innerText);

}

// when the page loads the following function will execute
window.onload = function () {
  show("appetizers", "appetizers-section");
  // this shows appetizers section when the website is loaded
};
