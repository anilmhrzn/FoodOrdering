function viewAndHide(id) {
  if (event.target.value == "view") {
    console.log(id);
    document.getElementById(id).style.display = "block";
    console.log((event.target.value = "hide"));
  } else {
    console.log(id);
    document.getElementById(id).style.display = "none";
    console.log((event.target.value = "view"));
  }
}
