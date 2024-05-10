function submitForm() {
  var form = document.querySelector(".search-form");

  if (form) {
    if (form.classList.contains("active")) {
      return true;
    } else {
      form.classList.add("active");
      return false;
    }
  }
  return false;
}

window.addEventListener("click", (e) => {
  var form = document.querySelector(".search-form");
  if (form) {
    if (!form.contains(e.target)) {
      form.classList.remove("active");
    }
  }
});

const open = document.querySelector(".bars-mobile");
const close = document.querySelector(".close");
// const mobile = document.querySelectorAll("#menu-menu-mobile li:has(.sub-menu)");
var tl = gsap.timeline({ defaults: { duration: 0.2, ease: "expo.inOut" } });
// var tl3 = gsap.timeline({
//   paused: true,
// });

// tl3.set("#menu-menu-mobile-service li", { width: "0" });
// tl3.to(
//   "#menu-menu-mobile-service li",
//   { width: "200px", stagger: 0.15, padding: "10px 5px " },
//   "-=.3"
// );

const mobile = document.querySelectorAll("#menu-menu-mobile li:has(.sub-menu)");
const subb = document.querySelector(".sub-menu-service");

mobile.forEach((mo) => {
  var icon = '<i class="fa-solid fa-angle-down"></i>';
  mo.innerHTML += icon;
  mo.querySelector("i").addEventListener("click", (e) => {
    e.preventDefault();
    mo.classList.toggle("active");
    subb.classList.toggle("active");
  });
});
open.addEventListener("click", (e) => {
  if (tl.reversed()) {
    tl.play();
  } else {
    tl.to("nav", { right: 0, opacity: 1 })
      .to("nav", { height: "100%" }, "-=.1")
      .to(
        "nav ul li",
        {
          opacity: 1,
          pointerEvents: "all",
          x: 0,
          stagger: 0.15,
        },
        "-=.2"
      )
      .to(
        ".close",
        {
          opacity: 1,
          pointerEvents: "all",
          rotation: 270,
          transformOrigin: "center center",
        },
        "-=.5"
      );
  }
});
const menu = document.querySelector(".heading2-info-mobile");

document.addEventListener("click", (e) => {
  if (!menu.contains(e.target) && !open.contains(e.target)) {
    subb.classList.remove("active");
    tl.timeScale(2);
    tl.reverse();
  }
});

close.addEventListener("click", () => {
  subb.classList.remove("active");
  tl.timeScale(2);
  tl.reverse();
});

var currentLanguage = document.querySelector(
  ".current-language-menu-item .trp-ls-language-name"
);
var selected = document.querySelector(".select .selected");

var dropdown = document.querySelector(".translator-dropdown");
var languageContainer = document.querySelector(
  ".menu-menu-language-container "
);

var caret = document.querySelector(".caret ");
if (currentLanguage) {
  selected.textContent = currentLanguage.textContent;
}

if (dropdown) {
  dropdown.addEventListener("click", () => {
    languageContainer.classList.toggle("active");
    dropdown.classList.toggle("active");
    caret.classList.toggle("active");
  });
  document.addEventListener("click", () => {});

  // console.log(languageContainer.offsetHeight);
  // document.querySelector(".menu-menu-language-container.active").style.height =
  //   document.querySelector(".menu-menu-language-container.active")
  //     .offsetHeight + "px";
}

var tableOfContents = document.querySelector(".content-table");
var headings = document.querySelectorAll(".wp-block-heading ");
var htmls = "";
if (tableOfContents) {
  headings.forEach((heading, index) => {
    console.log(heading.textContent);
    heading.id = index;
    heading.classList.add("heading-to-scroll");
    var html = `<div class="heading-line"><a href="#${index}"> ${heading.textContent}</a></div>`;
    htmls += html;
  });
  tableOfContents.innerHTML = htmls;
  var lines = tableOfContents.querySelectorAll(".heading-line");
  console.log(lines);
  lines.forEach((line) => {
    line.addEventListener("click", () => {
      if (document.querySelector(".heading-line.active")) {
        document
          .querySelector(".heading-line.active")
          .classList.remove("active");
      }
      line.classList.add("active");
    });
  });
}

var rocket = document.querySelector(".back-top-rocket");
window.addEventListener("scroll", () => {
  if (window.scrollY > 500) {
    rocket.classList.add("roc-active");
  } else {
    rocket.classList.remove("roc-active");
  }
});

rocket.addEventListener("click", (e) => {
  e.preventDefault();
  rocket.classList.add("active");
  setTimeout(() => {
    rocket.classList.remove("active");
  }, 1500);
  window.scrollTo({ top: 0, behavior: "smooth" });
});
var list = document.querySelector(".list-tracking");

if (list) {
  fetch(list.dataset.json)
    .then((response) => {
      if (!response.ok) {
        throw new Error("Network response was not ok");
      }
      return response.json();
    })
    .then((data) => {
      var htmls = data.trackings
        .map((item) => {
          return ` <li class="${item.pass === "1" ? "active" : ""} ${
            item.current_state === "1" ? "current-state" : ""
          }">
                        <div class="date-time">${item.time}</div>
                        <div class="package-des">${item.status}</div>
                    </li>`;
        })
        .join("");
      // console.log(htmls);

      list.innerHTML = htmls;
    })
    .catch((error) => {
      console.error("There was a problem with the fetch operation:", error);
    });
}

var liMenu = document.querySelectorAll("#menu-menu-chinh > li:has(.sub-menu)");

if (liMenu.length > 0) {
  liMenu.forEach((li, index) => {
    var sub = li.querySelector(".sub-menu");
    li.addEventListener("mouseover", () => {
      if (sub) {
        var subHeight = sub.scrollHeight;
        sub.style.maxHeight = subHeight + "px";
      }
    });
    li.addEventListener("mouseout", () => {
      if (sub) {
        sub.style.maxHeight = "0px";
      }
    });
  });
}

// var missionWrap = document.querySelector(".mission-wrap");
// console.log(missionWrap.dataset.bg);
// if (missionWrap) {
//   missionWrap.style.backgroundImage = "url(" + missionWrap.dataset.bg + ")";
// }
