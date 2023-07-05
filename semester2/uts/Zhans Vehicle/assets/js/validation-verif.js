$(document).ready(function () {
  $(".number").keypress(function (e) {
    if (e.which != 8 && e.which != 0 && (e.which < 48 || e.which > 57)) {
      return false;
    }
  });

  // Validate Nama Lengkap
  $("#namaErr").hide();
  let namaError = true;
  $("#nama").keyup(function () {
    validateNama();
  });

  function validateNama() {
    let namaVal = $("#nama").val();
    if (namaVal.length == "") {
      $("#namaErr").show();
      $("#nama").addClass("is-invalid");
      namaError = false;
    } else {
      $("#namaErr").hide();
      $("#nama").removeClass("is-invalid");
      namaError = true;
    }
  }

  // Validate NIK
  $("#nikErr").hide();
  let nikError = true;
  $("#nik").keyup(function () {
    validateNIK();
  });

  function validateNIK() {
    let nikVal = $("#nik").val();
    if (nikVal.length == "") {
      $("#nikErr").show();
      $("#nik").addClass("is-invalid");
      nikError = false;
    } else if (
      (nikVal.length > 0 && nikVal.length < 16) ||
      nikVal.length > 16
    ) {
      $("#nikErr").html("NIK harus terdiri dari 16 angka!");
      $("#nik").addClass("is-invalid");
      nikError = false;
    } else {
      $("#nikErr").hide();
      $("#nik").removeClass("is-invalid");
      nikError = true;
    }
  }

  // Validate Nomor Handphone
  $("#notelpErr").hide();
  let notelpError = true;
  $("#notelp").keyup(function () {
    validateNotelp();
  });

  function validateNotelp() {
    let notelpVal = $("#notelp").val();
    if (notelpVal.length == "") {
      $("#notelpErr").show();
      $("#notelp").addClass("is-invalid");
      notelpError = false;
    } else if (notelpVal.length > 14) {
      $("#notelpErr").html("Nomor Handphone tidak boleh lebih dari 14 digit!");
      $("#notelp").addClass("is-invalid");
      notelpError = false;
    } else {
      $("#notelpErr").hide();
      $("#notelp").removeClass("is-invalid");
      notelpError = true;
    }
  }

  // Validate Alamat
  $("#alamatErr").hide();
  let alamatError = true;
  $("#alamat").keyup(function () {
    validateAlamat();
  });

  function validateAlamat() {
    let alamatVal = $("#alamat").val();
    if (alamatVal.length == "") {
      $("#alamatErr").show();
      $("#alamat").addClass("is-invalid");
      alamatError = false;
    } else {
      $("#alamatErr").hide();
      $("#alamat").removeClass("is-invalid");
      alamatError = true;
    }
  }

  // Validate Jenis SIM
  $("#jenisSimErr").hide();
  let jenisSimError = true;
  $("#jenis_sim").change(function () {
    validateJenisSIM();
  });

  function validateJenisSIM() {
    let jenisSimVal = $("#jenis_sim").val();
    if (jenisSimVal == 0) {
      $("#jenisSimErr").show();
      $("#jenis_sim").addClass("is-invalid");
      jenisSimError = false;
    } else {
      $("#jenisSimErr").hide();
      $("#jenis_sim").removeClass("is-invalid");
      jenisSimError = true;
    }
  }

  // Validate SIM
  $("#simErr").hide();
  $("#simPreview").hide();
  let simError = true;
  $("#sim").change(function () {
    validateSIM();
    const file = this.files[0];
    if (file) {
      let reader = new FileReader();
      reader.onload = function (event) {
        $("#simPreview").show();
        $("#simPreview").attr("src", event.target.result);
      };
      reader.readAsDataURL(file);
    }
  });

  function validateSIM() {
    let simVal = $("#sim").val();
    if (simVal.length == 0) {
      $("#simErr").show();
      $("#sim").addClass("is-invalid");
      simError = false;
    } else {
      $("#simErr").hide();
      $("#sim").removeClass("is-invalid");
      simError = true;
    }
  }

  // Validate KTP
  $("#ktpErr").hide();
  $("#ktpPreview").hide();
  let ktpError = true;
  $("#ktp").change(function () {
    validateKTP();
    const file = this.files[0];
    if (file) {
      let reader = new FileReader();
      reader.onload = function (event) {
        $("#ktpPreview").show();
        $("#ktpPreview").attr("src", event.target.result);
      };
      reader.readAsDataURL(file);
    }
  });

  function validateKTP() {
    let ktpVal = $("#ktp").val();
    if (ktpVal.length == 0) {
      $("#ktpErr").show();
      $("#ktp").addClass("is-invalid");
      ktpError = false;
    } else {
      $("#ktpErr").hide();
      $("#ktp").removeClass("is-invalid");
      ktpError = true;
    }
  }

  // Validate Swafoto KTP
  $("#swafotoErr").hide();
  $("#swafotoPreview").hide();
  let swafotoError = true;
  $("#swafoto_ktp").change(function () {
    validateSwafotoKTP();
    const file = this.files[0];
    if (file) {
      let reader = new FileReader();
      reader.onload = function (event) {
        $("#swafotoPreview").show();
        $("#swafotoPreview").attr("src", event.target.result);
      };
      reader.readAsDataURL(file);
    }
  });

  function validateSwafotoKTP() {
    let swafotoktpVal = $("#swafoto_ktp").val();
    if (swafotoktpVal.length == 0) {
      $("#swafotoErr").show();
      $("#swafoto_ktp").addClass("is-invalid");
      swafotoError = false;
    } else {
      $("#swafotoErr").hide();
      $("#swafoto_ktp").removeClass("is-invalid");
      swafotoError = true;
    }
  }

  // Validate Selfie
  $("#selfieErr").hide();
  $("#selfiePreview").hide();
  let selfieError = true;
  $("#foto_selfie").change(function () {
    validateSelfie();
    const file = this.files[0];
    if (file) {
      let reader = new FileReader();
      reader.onload = function (event) {
        $("#selfiePreview").show();
        $("#selfiePreview").attr("src", event.target.result);
      };
      reader.readAsDataURL(file);
    }
  });

  function validateSelfie() {
    let selfieVal = $("#foto_selfie").val();
    if (selfieVal.length == 0) {
      $("#selfieErr").show();
      $("#foto_selfie").addClass("is-invalid");
      selfieError = false;
    } else {
      $("#selfieErr").hide();
      $("#foto_selfie").removeClass("is-invalid");
      selfieError = true;
    }
  }

  $("#handleVerif").click(function () {
    validateNama();
    validateNIK();
    validateNotelp();
    validateAlamat();
    validateJenisSIM();
    validateSIM();
    validateKTP();
    validateSwafotoKTP();
    validateSelfie();

    if (
      namaError == true &&
      nikError == true &&
      notelpError == true &&
      alamatError == true &&
      jenisSimError == true &&
      simError == true &&
      ktpError == true &&
      swafotoError == true &&
      selfieError == true
    ) {
      alert("Data berhasil ditambahkan!");
      $("#formVerif").attr("method", "post");
      $("#formVerif").attr("action", "profile.html");
    } else {
      return false;
    }
  });
});
