
//checksignup
function validateMssv(){
    var maso = document.getElementById("mssv").value;
    document.getElementById("invalidMssv").style.color = "red";
    document.getElementById("invalidMssv").style.marginLeft = "10px";
    if (!/^SV\d{4}$/.test(maso))
      document.getElementById('invalidMssv').innerHTML="Không hợp lệ";
    else
      document.getElementById('invalidMssv').innerHTML="";
  }
  
  function validateEmail(){
    var email = document.getElementById("email").value;
    document.getElementById("invalidEmail").style.color = "red";
    document.getElementById("invalidEmail").style.marginLeft = "10px";
    if (!(/^[A-Za-z][\w$.]+@[\w]+\.\w+$/).test(email))
      document.getElementById('invalidEmail').innerHTML="Không hợp lệ";
    else
      document.getElementById('invalidEmail').innerHTML="";
  }
  
  function validatePhone(){
    var phone = document.getElementById("phone").value;
    document.getElementById("invalidPhone").style.color = "red";
    document.getElementById("invalidPhone").style.marginLeft = "10px";
    if (!(/^0[3579]\d{6}$|^0[3579]\d{8}$/).test(phone))
      document.getElementById('invalidPhone').innerHTML="Không hợp lệ";
    else
      document.getElementById('invalidPhone').innerHTML="";
  }
  //end

  //checkLoginEmpty?
  (function() {
    'use strict';
    window.addEventListener('load', function() {
      // Get the forms we want to add validation styles to
      var forms = document.getElementsByClassName('needs-validation');
      // Loop over them and prevent submission
      var validation = Array.prototype.filter.call(forms, function(form) {
        form.addEventListener('submit', function(event) {
          if (form.checkValidity() === false) {
            event.preventDefault();
            event.stopPropagation();
          }
          form.classList.add('was-validated');
        }, false);
      });
    }, false);
  })();
  //end


