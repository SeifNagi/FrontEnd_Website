function validate() {
  let username =document.signUpFrom.username.value;
  var email=document.signUpFrom.email.value;
  var password=document.signUpFrom.password.value;
  var rePassword=document.signUpFrom.repassword.value;
  let lastCharacter=username.length-1;
  if (username.length == '0') {
    document.getElementById("username_error").innerHTML = "Username is required field";
    document.forms["signUpFrom"]["username"].focus();
    return false;
  }
  else if (username.length < 4) {
    document.getElementById("username_error").innerHTML = "username should by greater than 4 characters";
    document.forms["signUpFrom"]["username"].focus();
    return false;
  }
  else if(username.length >16){
     document.getElementById("username_error").innerHTML = "UserName must be less than 16 characters";
     document.forms["signUpFrom"]["username"].focus();
    return false;
  }
  else if(username[0].match(/[0-9]/)){
     document.getElementById("username_error").innerHTML = "UserName mustn't start with numbers";
     document.forms["signUpFrom"]["username"].focus();
    return false;
  }
  else if(username[lastCharacter].match(/[0-9]/)){
     document.getElementById("username_error").innerHTML = "UserName mustn't end with numbers";
     document.forms["signUpFrom"]["username"].focus();
    return false;
  }
  else if(username.match(/[*[!`~*^%$&._/\+'"@#{}]/)){
     document.getElementById("username_error").innerHTML = "UserName must include letters and numbers only";
     document.forms["signUpFrom"]["username"].focus();
    return false;
  }
  if (email == "") {
    document.getElementById("email_error").innerHTML = "email must be filled out";
    document.getElementById("username_error").innerHTML ="";
    document.forms["signUpFrom"]["email"].focus();
    return false;
  }
  if (password == "") {
    document.getElementById("password_error").innerHTML = "password must be filled out";
    document.getElementById("email_error").innerHTML ="";
    document.forms["signUpFrom"]["password"].focus();
    return false;
  }
  else if (password.length<8) {
    document.getElementById("password_error").innerHTML = "password must be more than 7 characters";
    document.getElementById("email_error").innerHTML = "";
    document.forms["signUpFrom"]["password"].focus();
    return false;
  }
  else if (!password.match(/[a-z]/)) {
    document.getElementById("password_error").innerHTML = "password must contain lowercase";
    document.getElementById("email_error").innerHTML = "";
    document.forms["signUpFrom"]["password"].focus();
    return false;
  }
  else if (!password.match(/[A-Z]/)) {
    document.getElementById("password_error").innerHTML = "password must contain uppercase letters";
    document.getElementById("email_error").innerHTML = "";
    document.forms["signUpFrom"]["password"].focus();
    return false;
  }
  if (rePassword == "") {
    document.getElementById("repassword_error").innerHTML = "re enter password must be filled out";
    document.forms["signUpFrom"]["repassword"].focus();
    return false;
  }
  if (rePassword != password) {
    document.getElementById("repassword_error").innerHTML = "password is not the same please re-enter it.";
    document.forms["signUpFrom"]["repassword"].focus();
    return false;
  }

}