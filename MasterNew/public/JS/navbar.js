let prevScroll = window.pageYOffset;

window.addEventListener('scroll', function() {
  let currentScroll = window.pageYOffset;

  if (prevScroll > currentScroll) {
    // Scrolling up
    document.getElementById('head').style.transform = 'translateY(0)';
    document.getElementById('nav').style.transform = 'translateY(0px)';  
  }else {
    // Scrolling down
    document.getElementById('head').style.transform = 'translateY(-100%)';
    document.getElementById('nav').style.transform = 'translateY(-137px)';  
}
  prevScroll = currentScroll;
});