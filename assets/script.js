let input_val = document.getElementById('input');

function inputvalidation() {
  if (input_val.value == "") {
    alert("Enter Product Name to Continue");
  }
  else if (input_val.value == "shirt") {
    window.open("search.html");
  }
  else {
    return false;
  }
}