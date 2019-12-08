"use strict";


$(document).ready(function () {
  $(".owl-carousel").owlCarousel({
    loop: true,
    autoplay: true,
    autoplayTimeout: 2500,
    items: 6,
    responsive: {
      0: {
        items: 3,
      },
      600: {
        items: 5,
      },
      1000: {
        items: 6,
      }
    }
  });
});

$('[data-fancybox="portfolio"]').fancybox({
  loop: true
});

document.querySelector(".burger").addEventListener("click", function () {
  console.log("meniu veikia");
  document.querySelector(".main-nav").classList.toggle("show");
});



$(function () {

  let filter = $("[data-filter]");
  filter.on("click", function () {
    // console.log(1);


    let category = $(this).data('filter');

    if (category == 'allWorks') {
      $("[data-category]").removeClass("hide");
    } else {
      $("[data-category]").each(function () {
        let workCategory = $(this).data('category');
        // console.log(workCategory);

        if (workCategory != category) {
          $(this).addClass('hide');
        } else {
          $(this).removeClass('hide');
        }
      });
    }
  });
});
