var swiper = new Swiper(".Review", {
  slidesPerView: 2,
  spaceBetween: 30,
  pagination: {
    el: ".swiper-pagination-rev",
    clickable: true,
  },
  navigation: {
    nextEl: ".swiper-button-next-rev",
    prevEl: ".swiper-button-prev-rev",
  },
  breakpoints: {
    300: {
      slidesPerView: 1,
    },
    800: {
      slidesPerView: 2,
    },
  },
});

document.addEventListener("DOMContentLoaded", function () {
  var questions = document.querySelectorAll(".question");

  questions.forEach(function (question) {
    question.addEventListener("click", function () {
      var answer = this.nextElementSibling; // Lấy phần tử kế tiếp (câu trả lời)
      var icon = this.querySelector("i");

      if (answer.classList.contains("active")) {
        answer.classList.remove("active");
      } else {
        answer.classList.add("active");
      }

      this.classList.toggle("active");
      var quesGroup = this.closest(".ques-group");
      quesGroup.classList.toggle("active");
    });
  });
});

var ser = document.querySelector(".display-mobile .ser");
var act = document.querySelector(".display-mobile .activities");
var aboutUs = document.querySelector(".display-mobile .aboutus");

var serSub = document.querySelector(".display-mobile .ser > .sub-menu");

var actSub = document.querySelector(".display-mobile .activities > .sub-menu");
var aboutUsSub = document.querySelector(".display-mobile .aboutus > .sub-menu");

ser.addEventListener("click", () => {
  serSub.classList.toggle("show");
});

act.addEventListener("click", () => {
  actSub.classList.toggle("show");
});

aboutUs.addEventListener("click", () => {
  aboutUsSub.classList.toggle("show");
});

$(".grid-imgs").magnificPopup({
  delegate: "a",
  type: "image",
  gallery: {
    enabled: true,
  },
  zoom: {
    enabled: true,

    duration: 300,
    easing: "ease-in-out",
  },
});

$(`input[type="number"]`).each(function (i, obj) {
  $(this).after(
    '<span class="selectNumber__increase selectNumber__change"><i class="far fa-plus"></i></span>'
  );
  $(this).before(
    '<span class="selectNumber__decrease selectNumber__change"><i class="far fa-minus"></i></span>'
  );

  $(this).val(1);
});

$(".selectNumber__decrease").on("click", function (e) {
  var $input = $(this).next("input");
  var $oldValue = parseInt($input.val());

  if ($oldValue > 0) {
    var $newValue = $oldValue - 1;
    $input.val($newValue);
  }
});

$(".selectNumber__increase").on("click", function (e) {
  var $input = $(this).prev("input");
  var $oldValue = parseInt($input.val());

  if ($oldValue >= 0) {
    var $newValue = $oldValue + 1;
    $input.val($newValue);
  }
});

document.addEventListener('DOMContentLoaded', function() {
    var currentDate = new Date();
    var day = currentDate.getDate();
    var month = currentDate.getMonth() + 1; 
    var year = currentDate.getFullYear();

  
    var formattedDate = year + '-' + (month < 10 ? '0' : '') + month + '-' + (day < 10 ? '0' : '') + day;

    if(document.getElementById('start')) {
		 document.getElementById('start').value = formattedDate;

   
		var nextDate = new Date(currentDate);
		nextDate.setDate(currentDate.getDate() + 1);

		var nextDay = nextDate.getDate();
		var nextMonth = nextDate.getMonth() + 1; 
		var nextYear = nextDate.getFullYear();


		var formattedNextDate = nextYear + '-' + (nextMonth < 10 ? '0' : '') + nextMonth + '-' + (nextDay < 10 ? '0' : '') + nextDay;


		document.getElementById('end').value = formattedNextDate;
		
	}
   
});


const link = encodeURI(window.location.href);

if(document.querySelector('.facebook')){
	const fb = document.querySelector('.facebook');
	fb.href = `https://www.facebook.com/share.php?u=${link}`;

	const twitter = document.querySelector('.twitter');
	twitter.href = `http://twitter.com/share?&url=${link}`;
}

var swiper = new Swiper(".topFood", {
	spaceBetween: 24,
		slidesPerView: 3,
      pagination: {
        el: ".swiper-pagination-food",
        clickable: true,
        renderBullet: function (index, className) {
          return '<span class="' + className + '">' + (index + 1) + "</span>";
        },
      },
	breakpoints: {
    320: {
      slidesPerView: 1,
    },
    480: {
      slidesPerView: 1,
      
    },
    800: {
      slidesPerView: 2,
    }, 
	1000: {
		slidesPerView: 3,
	}
  }
});

var swiper = new Swiper(".topGolf", {
	spaceBetween: 24,
		slidesPerView: 3,
      pagination: {
        el: ".swiper-pagination-golf",
        clickable: true,
        renderBullet: function (index, className) {
          return '<span class="' + className + '">' + (index + 1) + "</span>";
        },
      },
	breakpoints: {
    320: {
      slidesPerView: 1,
    },
    480: {
      slidesPerView: 1,
      
    },
    800: {
      slidesPerView: 2,
    }, 
	1000: {
		slidesPerView: 3,
	}
  }
});

var swiper = new Swiper(".topHotel", {
	spaceBetween: 24,
		slidesPerView: 3,
      pagination: {
        el: ".swiper-pagination-hotel",
        clickable: true,
        renderBullet: function (index, className) {
          return '<span class="' + className + '">' + (index + 1) + "</span>";
        },
      },
	breakpoints: {
    320: {
      slidesPerView: 1,
    },
    480: {
      slidesPerView: 1,
      
    },
    800: {
      slidesPerView: 2,
    }, 
	1000: {
		slidesPerView: 3,
	}
  }
});

var swiper = new Swiper(".topTour", {
	spaceBetween: 24,
		slidesPerView: 3,
      pagination: {
        el: ".swiper-pagination-tour",
        clickable: true,
        renderBullet: function (index, className) {
          return '<span class="' + className + '">' + (index + 1) + "</span>";
        },
      },
	breakpoints: {
    320: {
      slidesPerView: 1,
    },
    480: {
      slidesPerView: 1,
      
    },
    800: {
      slidesPerView: 2,
    }, 
	1000: {
		slidesPerView: 3,
	}
  }
});

