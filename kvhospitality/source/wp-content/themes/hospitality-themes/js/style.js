
// menu mobile

var openMenu = document.getElementsByClassName('icon-bar')[0];


var modalMenu = document.getElementsByClassName('modal-menu')[0];
var stopMenu = document.getElementsByClassName('modal-menu-2')[0];


openMenu.onclick = function() {
	modalMenu.classList.add('action-menu');
}

modalMenu.onclick = function() {
	modalMenu.classList.remove('action-menu');
}

stopMenu.addEventListener('click', function(event) {
  event.stopPropagation();
});



// slider banner

var swiper = new Swiper(".mySwiper", {
  centeredSlides: true,
  autoplay: {
    delay: 15000,
    disableOnInteraction: false,
  },
  loop: true,
  pagination: {
    // el: ".swiper-pagination",
    clickable: true,
    dynamicBullets: true,
  },
});

// --------------------

(function(d, s, id, w, n) {
  w.__ssc = w.__ssc || {};
  w.__ssc.license = 'fmp5yc';
  if (w.ssq) return false;
  n = w.ssq = function() {n.callMethod?n.callMethod.apply(n,arguments):n.queue.push(arguments)};
  n.push=n;n.loaded=!0;n.queue=[];
  var js, sjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = 'https://kvhospitality.com.vn/wp-content/themes/hospitality-themes/js/chat.js';
  sjs.parentNode.insertBefore(js, sjs);
}(document, 'script', 'ss-chat', window));





