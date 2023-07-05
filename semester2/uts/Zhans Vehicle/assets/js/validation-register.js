$(document).ready(function () {
  // Validate User
  $("#usernameErr").hide();
  let usernameError = true;
  $("#username").keyup(function () {
    validateUsername();
  });

  function validateUsername() {
    let usernameVal = $("#username").val();
    if (usernameVal.length == "") {
      $("#usernameErr").show();
      $("#username").addClass("is-invalid");
      usernameError = false;
      return false;
    } else {
      $("#usernameErr").hide();
      $("#username").removeClass("is-invalid");
      usernameError = true;
    }
  }

  // Validate Email
  const email = $("#email");
  let emailError = true;
  email.on("blur", function () {
    let regex = /^([_\-\.0-9a-zA-Z]+)@([_\-\.0-9a-zA-Z]+)\.([a-zA-Z]){2,7}$/;
    let emailVal = email.val();
    if (emailVal == "") {
      email.addClass("is-invalid");
      emailError = false;
    } else if (regex.test(emailVal)) {
      email.removeClass("is-invalid");
      emailError = true;
    } else {
      email.addClass("is-invalid");
      emailError = false;
    }
  });

  // Validate Password
  $("#passErr").hide();
  let passError = true;
  $("#password").keyup(function () {
    validatePassword();
  });

  function validatePassword() {
    let passVal = $("#password").val();
    if (passVal.length == "") {
      $("#passErr").show();
      $("#password").addClass("is-invalid");
      passError = false;
      return false;
    } else {
      $("#passErr").hide();
      $("#password").removeClass("is-invalid");
      passError = true;
    }
  }

  // Validate Confirm Password
  $("#cpassErr").hide();
  let cpassError = true;
  $("#cpassword").keyup(function () {
    validateCPassword();
  });

  function validateCPassword() {
    let cpassVal = $("#cpassword").val();
    let passVal = $("#password").val();

    if (cpassVal.length == "") {
      $("#cpassErr").show();
      $("#cpassword").addClass("is-invalid");
      cpassError = false;
      return false;
    } else if (cpassVal != passVal) {
      $("#cpassErr").show();
      $("#cpassword").addClass("is-invalid");
      cpassError = false;
      return false;
    } else {
      $("#cpassErr").hide();
      $("#cpassword").removeClass("is-invalid");
      cpassError = true;
    }
  }

  $("#handleRegister").click(function () {
    validateUsername();
    validatePassword();
    validateCPassword();

    if (
      usernameError == true &&
      emailError == true &&
      passError == true &&
      cpassError == true
    ) {
      alert("Akun berhasil ditambahkan!");
      $("#formRegister").attr("method", "post");
      $("#formRegister").attr("action", "vehicle.html");
    } else {
      return false;
    }
  });
});
