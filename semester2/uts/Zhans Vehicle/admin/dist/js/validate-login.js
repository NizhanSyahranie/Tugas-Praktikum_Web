$(document).ready(function (params) {
  // Validate Email
  const email = $("#email");
  let emailError = true;
  email.on("blur", function () {
    let regex = /^([_\-\.0-9a-zA-Z]+)@([_\-\.0-9a-zA-Z]+)\.([a-zA-Z]){2,7}$/;
    let emailVal = email.val();
    if (emailVal == "superadmin@gmail.com") {
      email.removeClass("is-invalid");
      emailError = true;
    } else if (emailVal == "") {
      email.addClass("is-invalid");
      emailError = false;
    } else if (regex.test(emailVal)) {
      email.removeClass("is-invalid");
      emailError = false;
    } else {
      email.addClass("is-invalid");
      emailError = false;
    }
  });

  // Validate Password
  let passError = true;
  $("#password").keyup(function () {
    validatePassword();
  });

  function validatePassword() {
    let passVal = $("#password").val();
    if (passVal == "superadmin") {
      $("#password").removeClass("is-invalid");
      passError = true;
    } else if (passVal.length == "") {
      $("#password").addClass("is-invalid");
      passError = false;
      return false;
    } else {
      $("#password").removeClass("is-invalid");
      passError = false;
      return false;
    }
  }

  $("#handleLogin").click(function () {
    validatePassword();

    if (emailError == true && passError == true) {
      $("#formLogin").attr("method", "post");
      $("#formLogin").attr("action", "dashboard.html");
    } else {
      alert("Email atau password salah!");
      return false;
    }
  });
});
