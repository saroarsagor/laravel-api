let indicator1 = true;
let indicator2 = true;
let indicator3 = true;
let indicator4 = true;
let indicator5 = true;
let indicator6 = true;

$(document).ready(function () {
  $("#toggleBtn1").click(function () {
    if (indicator1 === true) {
      $(".toggleText").slideUp();
      $("#toggleText1").slideDown();
      indicator1 = false;
    } else {
      $(".toggleText").slideUp();
      $("#toggleText1").slideUp();
      indicator1 = true;
    }
  });

  $("#toggleBtn2").click(function () {
    if (indicator2 === true) {
      $(".toggleText").slideUp();
      $("#toggleText2").slideDown();
      indicator2 = false;
    } else {
      $(".toggleText").slideUp();
      $("#toggleText2").slideUp();
      indicator2 = true;
    }
  });

  $("#toggleBtn3").click(function () {
    if (indicator3 === true) {
      $(".toggleText").slideUp();
      $("#toggleText3").slideDown();
      indicator3 = false;
    } else {
      $(".toggleText").slideUp();
      $("#toggleText3").slideUp();
      indicator3 = true;
    }
  });

  $("#toggleBtn4").click(function () {
    if (indicator4 === true) {
      $(".toggleText").slideUp();
      $("#toggleText4").slideDown();
      indicator4 = false;
    } else {
      $(".toggleText").slideUp();
      $("#toggleText4").slideUp();
      indicator4 = true;
    }
  });

  $("#toggleBtn5").click(function () {
    if (indicator5 === true) {
      $(".toggleText").slideUp();
      $("#toggleText5").slideDown();
      indicator5 = false;
    } else {
      $(".toggleText").slideUp();
      $("#toggleText5").slideUp();
      indicator5 = true;
    }
  });

  $("#toggleBtn6").click(function () {
    if (indicator6 === true) {
      $(".toggleText").slideUp();
      $("#toggleText6").slideDown();
      indicator6 = false;
    } else {
      $(".toggleText").slideUp();
      $("#toggleText6").slideUp();
      indicator6 = true;
    }
  });
});

const loginBtn = document.getElementById("login_btn");
loginBtn.addEventListener("click", () => {
  location.href = "https://jahid757.github.io/pasona_HTML_Template/login.html";
});

const signup = document.getElementById("signup");
signup.addEventListener("click", () => {
  location.href =
    "https://jahid757.github.io/pasona_HTML_Template/registration.html";
  console.log("object");
});

console.log('object');