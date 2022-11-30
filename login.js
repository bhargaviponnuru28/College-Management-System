 

 function Validate() {
      var password = document.getElementById("signup_password").value;
      var confirmPassword = document.getElementById("confirm_password").value;

      if (password != confirmPassword) {
        confirm_password.setCustomValidity("Passwords Don't Match");
      }
       else if (confirmPassword == "" || password == "") {
        confirm_password.setCustomValidity("Passwords Can't be Empty");

      }
      else{
        confirm_password.setCustomValidity("");
      }
    }
    