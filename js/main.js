/* When the user scrolls down, hide the navbar. When the user scrolls up, show the navbar */
var prevScrollpos = window.pageYOffset;

window.onscroll = function() {
  var currentScrollPos = window.pageYOffset;
  if (prevScrollpos > currentScrollPos) {
    document.getElementById("navbar").style.top = "0";
  } else {
    document.getElementById("navbar").style.top = "-50px";
  }

  prevScrollpos = currentScrollPos;
}

$(document).ready(function() {
  $("#contactusformloader").hide();
  $("#errorcontacting").hide();
  $("#successfulsaving").hide();
  $( "#submit" ).click(function() {

    if ($("#name").val() == '') {
      $("#name").addClass("is-invalid");
    } else {
      $("#name").removeClass("is-invalid");
    }
    if ($("#phone").val() == '') {
      $("#phone").addClass("is-invalid");
    } else {
      $("#phone").removeClass("is-invalid");     
    }
    if ((!$("#name").val() == '')  && !($("#phone").val() == '')) {
    $("#contactusformdiv").hide();
    $("#contactusformloader").show();
    $.ajax({
     type: "POST",
     url: "form.php",
     data: {name:$("#name").val(), phone:$("#phone").val()},
     success: function(msg) {
       $("#contactusformloader").hide();
       $("#successfulsaving").show();
     }
   }).fail(function() {
      $("#contactusformloader").hide();
      $("#errorcontacting").show();
      $("#contactusformdiv").show();
    });
    }
    
  });
});
