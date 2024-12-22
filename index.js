  // FOR SIDENAV
  let openBtn = document.getElementById("openBtn");
  let closeBtn = document.getElementById("closeBtn");
  let sideNav = document.getElementById("sideNav");
  let body = document.body;
  
  openBtn.addEventListener("click", function () {
      sideNav.style.display = "block";
      body.style.overflow = "hidden"; // Disable scrolling
  });
  
  closeBtn.addEventListener("click", function () {
      sideNav.style.display = "none";
      body.style.overflow = ""; // Re-enable scrolling
  });


window.addEventListener('scroll', function() {
    var navbar = document.getElementById('wrapper');
    var scrollThreshold = 200; // Change color after scrolling 30px

    if (window.scrollY >= scrollThreshold) {
      navbar.classList.add('try');
    } else {
      navbar.classList.remove('try');
    }
  });



  