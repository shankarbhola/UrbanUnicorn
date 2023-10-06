//login
// let modalloginbtn = document.getElementById("modalloginbtn");

// let loginuid = document.getElementById("inputLoginId");
// let loginpwd = document.getElementById("inputLoginPassword");
// function validation() {
//  console.log(loginuid.value, loginpwd.value);
// if(loginuid.value==loginpwd.value){
// modalloginbtn.parentNode.removeChild(modalloginbtn);
// }
// }


//search


//Login
let uid = document.getElementById("user_name");
let upwd = document.getElementById("password");
function loginevalue() {
  if (uid.value=="") {
    alert("Enter username");
  }
  else if (upwd.value=="") {
    alert("Enter Password");
  }
  
}

//regstration
let ruid = document.getElementById("ruid");
let rpwd = document.getElementById("rpwd");
function registervalidation() {
  if (ruid.value=="") {
    alert("Enter username");
  }
  else if (rpwd.value=="") {
    alert("Enter Password");
  }
  
}



