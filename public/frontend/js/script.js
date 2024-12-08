// Responsive Navbar 
$(document).ready(function () {
  $("#admission").click(function (event) {
    event.preventDefault(); // Prevent the link from navigating
    $("#res-nav-menu").slideToggle("slow");
    $("#s-icon").toggleClass("fa-caret-down fa-caret-up");
  });
});

$(document).ready(function () {
  $("#bars").click(function () {
    $(".res-nav-links").slideToggle("slow");
  });
});

//Smooth Scroll
$(document).ready(function () {
  $('a[href^="#"]').on("click", function (event) {
    var target = $(this.getAttribute("href"));
    if (target.length) {
      event.preventDefault();
      $("html, body").stop().animate(
        {
          scrollTop: target.offset().top,
        },
        1000
      );
    }
  });
});


// Sweet Alerts 

$(document).ready(function () {
  $(".submit").click(function (event) {
    event.preventDefault();
    Swal.fire({
      title: "Your Message Is Submited",
      icon: "success",
      showConfirmButton: true,
      confirmButtonColor: "#00a3c9",
    });
  });
});

$(document).ready(function () {
  $(".app-btn").click(function (event) {
    event.preventDefault();
    Swal.fire({
      title: "Your Form Is Submited",
      icon: "success",
      showConfirmButton: true,
      confirmButtonColor: "#00a3c9",
    });
  });
});



// Screen Loader 

// $(document).ready(function () {
//     // Function to show the loader
//     function showLoader() {
//       $(".loading").css("visibility", "visible");
//     }
  
//     // Function to hide the loader
//     function hideLoader() {
//       setTimeout(function () {
//         $(".loading").css("visibility", "hidden");
//       }, 1500);
//     }
  
//     // Show loader when the page is loading
//     showLoader();
  
//     // Hide the loader when the page has fully loaded
//     $(window).on("load", function () {
//       hideLoader();
//     });
  
//     $(".app-btn").click(function (event) {
//       event.preventDefault();
//       Swal.fire({
//         title: "Your Form Is Submitted",
//         icon: "success",
//         showConfirmButton: true,
//         confirmButtonColor: "#00a3c9",
//       });
  
//       return;
//     });
  
//     $(".submit").click(function (event) {
//       event.preventDefault();
//       Swal.fire({
//         title: "Your Message Is Submitted",
//         icon: "success",
//         showConfirmButton: true,
//         confirmButtonColor: "#00a3c9",
//       });
  
//       return;
//     });
 
//     $("a, button").on("click", function (event) {
//       if (
//         $(this).is("[type='submit']") || 
//         $(this).hasClass("no-loader") || 
//         $(this).hasClass("app-btn") || 
//         $(this).hasClass("submit")
//       ) {
//         return;
//       }
  
//       event.preventDefault();
//       showLoader();
  
//       // Get the href attribute (for anchors) or data-href attribute (if provided)
//       var href = $(this).attr("href") || $(this).data("href");
  
//       // Navigate to the new page after showing the loader
//       if (href) {
//         setTimeout(function () {
//           window.location.href = href;
//         }, 200); // Delay to allow the loader to be visible
//       }
//     });
  
//     // Add an event listener to the window's unload event
//     $(window).on("unload", function () {
//       // Show the loader on page unload
//       showLoader();
//     });
//   });
  
