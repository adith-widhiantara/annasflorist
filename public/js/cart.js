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
