// menu

var openMenu = document.getElementsByClassName('icon-bar')[0];

var closeMenu = document.getElementsByClassName('close-menu')[0];
var closeMenu2 = document.getElementsByClassName('bg-menu')[0];

var modalMenu = document.getElementsByClassName('modal-menu')[0];

openMenu.onclick = function() {
    modalMenu.classList.add('sticky-modal');
}

closeMenu.onclick = function() {
    modalMenu.classList.remove('sticky-modal');
}

closeMenu2.onclick = function() {
    modalMenu.classList.remove('sticky-modal');
}


// thanh tim kiếm

var openSearch = document.getElementsByClassName('search-menu')[0];
var closeSearch = document.getElementsByClassName('close-menu2')[0];

var search = document.getElementsByClassName('bg-search')[0];

openSearch.onclick = function() {
    search.classList.add('bg-search2');
}

closeSearch.onclick = function() {
    search.classList.remove('bg-search2');
}


// đảo chiều MARKET & REVIEW

var reverse = document.getElementsByClassName('border-market');

for ( var i = 0; i < reverse.length; i++) {
    if (i % 2) {
        reverse[i].classList.add('reverse-market');
    }
}


// đảo chiều PERSPECTIVE

var reverse2 = document.getElementsByClassName('border-perspective');

for ( var i = 0; i < reverse2.length; i++) {
    if (i % 2) {
        reverse2[i].classList.add('reverse-market');
    }
}

// đảo chiều feature

var reverse3 = document.getElementsByClassName('border-feature');

for ( var i = 0; i < reverse3.length; i++) {
    if (i % 2) {
        reverse3[i].classList.add('reverse-market');
    }
}


// slider news

var swiper = new Swiper(".slider-intro", {
  slidesPerView: 2,
  spaceBetween: 30,
  loop: true,
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
    800: {
      slidesPerView: 1,
    },
  },
});


// slider news News & Exhibition

var swiper = new Swiper(".slider-news", {
  slidesPerView: 2,
  spaceBetween: 30,
  loop: true,
  pagination: {
    el: ".swiper-pagination",
    clickable: true,
  },
  navigation: {
    nextEl: ".button-next",
    prevEl: ".button-prev",
  },
  breakpoints: {
    0: {
      slidesPerView: 1,
    },
    600: {
      slidesPerView: 3,
    },
    1000: {
      slidesPerView: 5,
    },
  },
});