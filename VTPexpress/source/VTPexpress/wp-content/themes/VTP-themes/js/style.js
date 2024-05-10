// contact home

var allSelect = document.querySelector.bind(document);
var all = document.querySelectorAll.bind(document);

var tabs = all('.list-address');
var contents = all('.map-address');


tabs.forEach((tab, index) => {
    var content = contents[index];

    tab.onclick = function () {

        allSelect('.list-address.active-tab').classList.remove('active-tab');
        allSelect('.map-address.active-map').classList.remove('active-map');

        this.classList.add('active-tab');
        content.classList.add('active-map');

    }
});


// slider partner

var swiper = new Swiper(".slider-intro", {
  slidesPerView: 4,
  spaceBetween: 30,
  loop: true,
	autoplay: {
		delay: 1000,
		disableOnInteraction: false,
	},
  pagination: {
    el: ".swiper-pagination",
    clickable: true,
  },
  navigation: {
    nextEl: ".button-next",
    prevEl: ".button-prev",
  },
  breakpoints: {
    300: {
      slidesPerView: 1,
		
    },
    500: {
      slidesPerView: 2,
	
    },
    1000: {
      slidesPerView: 3,
		
    },
  },
});