function viewAndHide(id) {
  if (event.target.value == "view") {
    // console.log(id);
    document.getElementById(id).style.display = "block";
    event.target.value = "hide";
  } else {
    // console.log(id);
    document.getElementById(id).style.display = "none";
    event.target.value = "view";
  }
}