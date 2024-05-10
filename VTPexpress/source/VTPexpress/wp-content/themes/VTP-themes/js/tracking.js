var list = document.querySelector(".order-info");
var submitBtn = document.querySelector(".code button[type='submit']");

var input = document.querySelector(".code input");

var inputValue = "";

if (list) {
  fetch(list.dataset.json)
    .then((response) => {
      if (!response.ok) {
        throw new Error("Lỗi mạng");
      }
      return response.json();
    })
    .then((data) => {
      submitBtn.addEventListener("click", (e) => {
        e.preventDefault();
        var car = document.querySelector(".car-loading");
        if (car) {
          car.classList.add("active");
          setTimeout(() => {
            car.classList.remove("active");
          }, 1000);
        }
        inputValue = input.value;

        if (data.idorder === inputValue) {
          var tracking_htmls = "";
          var tracking_html = data["order-process-detail-list"]
            .map((item) => {
              return `<li class="${item.status === "1" ? "success" : "failed"}">
                        <div class="date-time" >${item["item-date"]}</div>
                        <div class="package-des" >${item["item-desc"]}</div>`;
            })
            .join("");
          tracking_htmls += tracking_html;
          var html = `<div class="col-lg-4 col-md-6">
                <div class="sender">
                    <div class="label-info">
                        Thông tin gửi
                    </div>
                    <ul class="list-info">
                        <li>Mã đơn hàng: <span>${data.idorder}</span></li>
                        <li>Tên người gửi: <span>${data.sender.name}</span></li>
                        <li>Số điện thoại: <span>${data.sender.number}</span></li>
                        <li>Địa chỉ: <span>${data.sender.address}</span></li>
                    </ul>
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="receiver">
                    <div class="label-info">
                        Thông tin nhận
                    </div>
                    <ul class="list-info">
                        <li>Tên người nhận: <span>${data.receiver.name}</span></li>
                        <li>Số điện thoại: <span>${data.receiver.number}</span></li>
                        <li>Địa chỉ: <span>${data.receiver.address}</span></li>
                    </ul>
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="package-detail">
                    <div class="label-info">
                        Thông tin hàng hóa
                    </div>
                    <ul class="list-info">
                        <li>Trọng lượng: <span>${data["order-info"].weight}</span></li>
                        <li>Nội dung: <span>${data["order-info"].type}</span></li>
                        <li>Trạng thái đơn hàng: <span>${data["order-status"]}</span></li>
                    </ul>
                </div>
            </div>

            <div class="col-lg-5 mt-5">
                <div class="package-progress-bar">
                    <ul class="list-tracking" >
                    ${tracking_htmls}
                    </ul>
                </div>
            </div>

            <div class="col-lg-7 mt-5">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d15677.628213898926!2d106.64015346390741!3d10.780103209003425!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e0!4m5!1s0x31752eb2d4f93565%3A0x18098d9db411d16f!2zVGVjaGNvbWJhbmssIELDoHUgQ8OhdCwgcGjGsOG7nW5nIDE0LCBUw6JuIELDrG5oLCBUaMOgbmggcGjhu5EgSOG7kyBDaMOtIE1pbmg!3m2!1d10.7921087!2d106.6436786!4m5!1s0x31752ec1f7684e97%3A0xd484c4271645e903!2zVGVjaGNvbWJhbmsgLSBBVE0sIEzDvSBUaMaw4budbmcgS2nhu4d0LCBwaMaw4budbmcgMTQsIFF14bqtbiAxMCwgVGjDoG5oIHBo4buRIEjhu5MgQ2jDrSBNaW5o!3m2!1d10.770224899999999!2d106.6584221!5e0!3m2!1svi!2s!4v1713152834887!5m2!1svi!2s"
                    width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"></iframe>

            </div>`;
          setTimeout(() => {
            list.innerHTML = html;
          }, 1000);
        } else {
          setTimeout(() => {
            list.innerHTML = `<div class="search-fail text-center" style="color: #b90c0c;">
              Không tìm thấy thông tin về đơn hàng này
            </div>`;
          }, 1000);
        }
      });
    })
    .catch((error) => {
      console.error("There was a problem with the fetch operation:", error);
    });
}
