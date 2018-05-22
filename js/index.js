$(document).ready(function() {
//   $(function() {
//
//     $(".jselector").append('<div class="inc button">+</div><div class="dec button">-</div>');
//
// });

$(".b1").on("click", function() {
  var oldValue = $(".jselector").val();

	  var newVal = parseFloat(oldValue) + 1;


  $(".jselector").val(newVal);

});

$(".b2").on("click", function() {
  var oldValue = $(".jselector").val();

   // Don't allow decrementing below zero
    if (oldValue > 0) {
      var newVal = parseFloat(oldValue) - 1;
    } else {
      newVal = 0;
    }


  $(".jselector").val(newVal);

});




});
