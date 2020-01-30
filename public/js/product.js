// Navbar
$(document).ready(function() {
  $(window).scroll(function() {
    if($(this).scrollTop() > 50) {
        $('.navnav').addClass('solid');
    } else {
        $('.navnav').removeClass('solid');
    }
  });
});
// End Navbar

document.addEventListener('DOMContentLoaded', function() {
  var elems = document.querySelectorAll('.modal');
  var instances = M.Modal.init(elems);
});

// inputnumber
function increaseValue() {
  var value = parseInt(document.getElementById('number').value, 10);
  value = isNaN(value) ? 0 : value;
  value++;
  document.getElementById('number').value = value;
}

function decreaseValue() {
  var value = parseInt(document.getElementById('number').value, 10);
  value = isNaN(value) ? 0 : value;
  value < 1 ? value = 1 : '';
  value--;
  document.getElementById('number').value = value;
}
// end inputnumber
