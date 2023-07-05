$(document).ready(function () {
  // Validate Tanggal Meminjam
  $("#dateFirstErr").hide();
  let dateFirstError = true;
  $("#dateFirst").change(function () {
    validateDateFirst();
  });

  function validateDateFirst() {
    let dateFirstVal = $("#dateFirst").val();

    if (dateFirstVal.length == "") {
      $("#dateFirstErr").show();
      $("#dateFirst").addClass("is-invalid");
      dateFirstError = false;
      return false;
    } else {
      $("#dateFirstErr").hide();
      $("#dateFirst").removeClass("is-invalid");
      dateFirstError = true;
    }
  }

  // Validate Waktu Meminjam
  $("#timeFirstErr").hide();
  let timeFirstError = true;
  $("#timeFirst").change(function () {
    validateTimeFirst();
  });

  function validateTimeFirst() {
    let timeFirstVal = $("#timeFirst").val();

    if (timeFirstVal.length == "") {
      $("#timeFirstErr").show();
      $("#timeFirst").addClass("is-invalid");
      timeFirstError = false;
      return false;
    } else {
      $("#timeFirstErr").hide();
      $("#timeFirst").removeClass("is-invalid");
      timeFirstError = true;
    }
  }

  // Validate Tanggal Pengembalian
  $("#dateSecondErr").hide();
  let dateSecondError = true;
  $("#dateSecond").change(function () {
    let dateFirstVal = $("#dateFirst").val();
    let dateSecondVal = $("#dateSecond").val();
    let totalPrice = 1000000;

    var startDay = new Date(dateFirstVal);
    var endDay = new Date(dateSecondVal);

    var millisecondsPerDay = 1000 * 60 * 60 * 24;

    var millisBetween = endDay.getTime() - startDay.getTime();
    var days = millisBetween / millisecondsPerDay;

    if (endDay.getTime() <= startDay.getTime()) {
      $("#totalDay").html("");
      $("#totalPrice").html("Rp. 1000000");
    } else {
      $("#totalDay").html(days);
      $("#totalPrice").html("Rp. " + totalPrice * days);
    }
    validateDateSecond();
  });

  function validateDateSecond() {
    let dateFirstVal = $("#dateFirst").val();
    let dateSecondVal = $("#dateSecond").val();

    var startDay = new Date(dateFirstVal);
    var endDay = new Date(dateSecondVal);

    if (dateSecondVal.length == "") {
      $("#dateSecondErr").show();
      $("#dateSecond").addClass("is-invalid");
      dateSecondError = false;
      return false;
    } else if (endDay.getTime() <= startDay.getTime()) {
      $("#dateSecondErr").show();
      $("#dateSecondErr").html(
        "Tanggal Pengembalian tidak boleh lebih dari sama dengan Tanggal Meminjam"
      );
      $("#dateSecond").addClass("is-invalid");
      dateSecondError = false;
      return false;
    } else {
      $("#dateSecondErr").hide();
      $("#dateSecond").removeClass("is-invalid");
      dateSecondError = true;
    }
  }

  // Validate Waktu Pengembalian
  $("#timeSecondErr").hide();
  let timeSecondError = true;
  $("#timeSecond").change(function () {
    validateTimeSecond();
  });

  function validateTimeSecond() {
    let timeSecondVal = $("#timeSecond").val();

    if (timeSecondVal.length == "") {
      $("#timeSecondErr").show();
      $("#timeSecond").addClass("is-invalid");
      timeSecondError = false;
      return false;
    } else {
      $("#timeSecondErr").hide();
      $("#timeSecond").removeClass("is-invalid");
      timeSecondError = true;
    }
  }

  //   var start = $("#dateFirst").val();
  //   var end = $("#dateSecond").val();

  //   var startDay = new Date(start);
  //   var endDay = new Date(end);
  //   var millisecondsPerDay = 1000 * 60 * 60 * 24;

  //   var millisBetween = endDay.getTime() - startDay.getTime();
  //   var days = millisBetween / millisecondsPerDay;

  //   console.log(startDay.getTime());
  //   console.log(endDay.getTime());
  //   console.log(days);

  $("#handleRental").click(function () {
    validateDateFirst();
    validateTimeFirst();
    validateDateSecond();
    validateTimeSecond();

    if (
      dateFirstError == true &&
      timeFirstError == true &&
      dateSecondError == true &&
      timeSecondError == true
    ) {
      alert("Transaksi Berhasil!");
      $("#formRental").attr("method", "post");
      $("#formRental").attr("action", "transaction.html");
    } else {
      return false;
    }
  });
});
