// form validation
$(document).ready(function() {
  window.ParsleyConfig = {
    errorsWrapper: "<div></div>",
    errorTemplate:
      '<div class="alert alert-danger parsley" role="alert"></div>',
    errorClass: "has-error",
    successClass: "has-success"
  };
});

// register hide input

$("#student").change(function() {
  if ($("#student".checked)) {
    $("#if-student").show();
  }
});
$("#teacher").change(function() {
  if ($("#teacher".checked)) {
    $("#if-student").hide();
  }
});

//password validation

window.Parsley.addValidator("isequal", {
  requirementType: "",
  validateString: function(value, requirement) {
    var password = $("#password").val();
    var password_confirm = $("#password-confirm").val();

    return password === password_confirm;
  },
  messages: {
    en: "Your password does not match"
  }
});
// reveal animation
function reveal() {
  var reveals = document.querySelectorAll(".reveal");

  for (var i = 0; i < reveals.length; i++) {
    var windowHeight = window.innerHeight;
    var elementTop = reveals[i].getBoundingClientRect().top;
    var elementVisible = 150;

    if (elementTop < windowHeight - elementVisible) {
      reveals[i].classList.add("active");
    } else {
      reveals[i].classList.remove("active");
    }
  }
}

window.addEventListener("scroll", reveal);