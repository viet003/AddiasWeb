document.body.onload = function () {
    text_animation();
    open_ship();
    change_language();
    close_post();
    hidden_title();
    button_animation();
    chose_item();
    //hover_img();
    convert_img();
}
// tạo hiệu ứng chuyển đổi dòng text
function text_animation() {
    let list = [
        "HÀNG VIỆT NAM CHẤT LƯỢNG CAO ",
        "ADDIAS - ĐỒNG HÀNH TRÊN CON ĐƯỜNG CHINH PHỤC",
        "GIAO HÀNG MIỄN PHÍ CHO CÁC THÀNH VIÊN ADICLUB"
    ];
    var i = 0;

    setInterval(() => {
        let text = document.querySelector(".text_animation>p");
        var newText = list[i];
        text.classList.add("animate");
        text.innerHTML = newText + '&nbsp&nbsp<i class="fa-solid fa-chevron-down"></i>';
        text.addEventListener("animationend", function () {
            text.classList.remove("animate");
        });
        i++;
        if (i > 2) {
            i = 0;
        }
    }, 5000);
}
// open ship
function open_ship() {
    var p = document.querySelector(".text_animation>p");
    var block_scroll = document.querySelector(".body");
    var div_hidden = document.querySelector(".no");
    var bar = document.querySelector(".ship");
    var close = document.querySelector(".x");
    p.addEventListener("click", () => {
        div_hidden.style.display = "block";
        block_scroll.style.overflow = "hidden";
        bar.style.top = "0px";
    });

    div_hidden.addEventListener("click", () => {
        div_hidden.style.display = "none";
        block_scroll.style.overflow = "scroll";
        if (bar.style.height = "300px") {
            bar.style.top = "-300px";
        }
    })

    close.addEventListener("click", () => {
        div_hidden.style.display = "none";
        block_scroll.style.overflow = "scroll";
        if (bar.style.height = "300px") {
            bar.style.top = "-300px";
        }
    })
}
// gọi hàm chuyển ngôn ngữ
function change_language() {
    var language = document.querySelector(".language_select>i");
    //var isblock = false;
    language.addEventListener("click", function () {
        var el = document.querySelector(".language_select>div");
        if (el.className == "_language_change") {
            el.classList.remove("_language_change");
            el.classList.add("language_change");
            language.style.transform = "rotate(-180deg)";
        } else {
            el.classList.remove("language_change");
            el.classList.add("_language_change");
            language.style.transform = "rotate(0)"
        }
    });
}

// đóng quảng cáo
function close_post() {
    var close = document.querySelector(".post>i");
    close.addEventListener("click", function () {
        var div = document.querySelector(".post");
        if (div.style.display = "block") {
            div.style.display = "none";
        }
    });
}

// ẩn thanh title
function hidden_title() {
    var previousScrollPosition = window.scrollY;
    var Title = document.querySelector(".title");

    // Đăng ký sự kiện scroll
    window.addEventListener("scroll", function () {
        var currentScrollPosition = window.scrollY;

        if (currentScrollPosition < previousScrollPosition) {
            if (Title.style.top != "0px") {
                // Scroll lên (scroll up)
                Title.classList.add("scroll_up");
                Title.style.top = "0px";
                Title.addEventListener("animationend", function () {
                    Title.classList.remove("scroll_up");
                });
            }
        } else if (currentScrollPosition >= previousScrollPosition) {
            // Scroll xuống (scroll down)
            if (Title.style.top != "-120px") {
                Title.classList.add("scroll_down");
                Title.style.top = "-120px"; // Ẩn thanh tiêu đề bằng cách đặt top âm
                Title.addEventListener("animationend", function () {
                    Title.classList.remove("scroll_down");
                });
            }
        }
        previousScrollPosition = currentScrollPosition;
    });
}

// tạo hiệu ứng cho button
function button_animation() {
    let a = document.querySelectorAll("._main_button");
    a.forEach(element => {
        element.addEventListener("mouseover", function () {
            element.classList.add("button_animation");
            element.style.top = "0px";
            element.style.left = "0px";
        });
        element.addEventListener("mouseout", function () {
            element.style.top = "-2px";
            element.style.left = "-2px";
            element.classList.remove("button_animation");

        });
    });
}
// điều kiển video
function video_cotrol() {
    let video = document.querySelector("._video>.video");
    video.autoplay = true;
}

// tạo lựa chọn
function chose_item() {
    let a = document.querySelectorAll(".title_product>._product");
    let b = document.querySelectorAll(".more>.s");
    a[0].classList.add("click");
    b[0].style.display = "block";

    a.forEach((element, i) => {
        element.addEventListener("click", function () {
            Hidden(b);
            Delete(a);
            b[i].style.display = "block";
            element.classList.add("click");
        });
    });
}
// Hidden more
function Hidden(a) {
    a.forEach((el) => {
        el.style.display = "none";
    });
}
// remove class of product
function Delete(a) {
    a.forEach((el) => {
        el.classList.remove("click");
    });
}

// hover and animation cost
/*function hover_img() {
    var a = document.querySelectorAll(".image-item");
    var b = document.querySelectorAll(".image-item>.image>p");
    var c = document.querySelectorAll("._border");
    a.forEach((element,i) => {
        element.addEventListener("mouseover", function () {
            b[i].classList.add("hover_up");
            b[i].style.bottom = "5px";
            b[i].addEventListener("animationend" , () => {
                b[i].classList.remove("hover_up");
            })
            c[i].style.display = "block";
        });
        element.addEventListener("mouseout", function () {
            b[i].classList.add("hover_out");
            b[i].style.bottom = "0px";
            b[i].addEventListener("animationend" , () => {
                b[i].classList.remove("hover_out");
            })
            c[i].style.display = "none";
        });
    });
}*/

// Thay đổi ảnh theo time 

function convert_img() {
    let list_img = [
        "https://images.unsplash.com/photo-1630520778141-4eed402f4f4d?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1780&q=80",
        "https://images.unsplash.com/photo-1630520752435-fd9610101972?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1887&q=80"
    ];

    list_img_2 = [
        "https://images.unsplash.com/photo-1597045566677-8cf032ed6634?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1887&q=80",
        "https://images.unsplash.com/photo-1600269452121-4f2416e55c28?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1965&q=80",
        "https://images.unsplash.com/photo-1556906781-9a412961c28c?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1887&q=80"
    ];
    var i = 0;
    var j = 0;

    setInterval(() => {
        let img = document.getElementById("vip");
        let img_1 = document.getElementById("vip1");
        img.src = list_img[i];
        img_1.src = list_img_2[j];
        img.style.transform = "translateX(50px)";
        img_1.style.transform = "translateX(50px)"
        img.classList.add("convert");
        img_1.classList.add("convert");
        img.addEventListener("animationend", () => {
            img.style.transform = "translateX(0)";
            img.classList.remove("convert");
        });
        img_1.addEventListener("animationend", () => {
            img_1.style.transform = "translateX(0)";
            img_1.classList.remove("convert");
        });
        i++;
        j++;
        if (i > 1) {
            i = 0;
        }
        if (j > 2) {
            j = 0;
        }
    }, 3000);
}

// Thay đổi ảnh khi hover 
function chose_image() {
    var convert = document.querySelectorAll("#convert_img");

    convert.forEach((el) => {
        var big_img = el.querySelector(".image>img");
        var small_img = el.querySelectorAll(".small_image>img");
        small_img.forEach((e) => {
            e.addEventListener("mouseover", () => {
                big_img.src = e.src;
            });
        });
    });
}
// check xem đã cuộn hết hoặc chưa cuộn

/*function check_scroll_slick() {
    var slider = $(".image-slider").slick();
    var left_arr = document.querySelector(".slick-next");
    // Bắt đầu bằng việc lắng nghe sự kiện sau khi trình chiếu đã hoàn thành cuộn
    slider.on("afterChange", function (event, slick, currentSlide) {
        // Kiểm tra xem slider đã cuộn hết chưa
        if (currentSlide === slick.slideCount - slick.options.slidesToShow) {
            alert("s");
            left_arr.style.display = "none";
        }
    })

} không hoạt động*/

//slick-slider

$(document).ready(function () {
    $(".image-slider").slick({
        slidesToShow: 4.5, // slide hiển thị
        slidesToScroll: 4, // slide sau mỗi lần cuộn
        infinite: false,  // set chế độ chạy slide
        prevArrow: `<button type='button' class='slick-prev slick-arrow'><i class="fa-solid fa-arrow-left"></i></button>`,
        nextArrow: `<button type='button' class='slick-next slick-arrow'><i class="fa-solid fa-arrow-right"></i></button>`,
        dots: true,
        responsive: [
            {
                breakpoint: 481,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1,
                    arrows: false,
                    infinite: false,
                },
            },

            {
                breakpoint: 741,
                settings: {
                    slidesToShow: 2.3,
                },
            },

            {
                breakpoint: 1025,
                settings: {
                    slidesToShow: 4,
                },
            },
        ],
    });
});

$(document).ready(function () {
    $(".banner-slider").slick({
        slidesToShow: 4.3, // slide hiển thị
        slidesToScroll: 4, // slide sau mỗi lần cuộn
        infinite: false,  // set chế độ chạy slide
        prevArrow: `<button type='button' class='slick-prev slick-arrow'><i class="fa-solid fa-arrow-left"></i></button>`,
        nextArrow: `<button type='button' class='slick-next slick-arrow'><i class="fa-solid fa-arrow-right"></i></button>`,
        responsive: [
            {
                breakpoint: 1025,
                settings: {
                    slidesToShow: 3,
                },
            },

            {
                breakpoint: 741,
                settings: {
                    slidesToShow: 2.3,
                },
            },

            {
                breakpoint: 480,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1,
                    arrows: false,
                    infinite: false,
                },
            },
        ],
    });
});


// slider

$(document).ready(function () {
    $(".close").click (function() {
        $(".menu_hid").css('left', '-100%');
        $(".body").css('overflow','scroll')
    });

    $(".open").click (function() {
        $(".menu_hid").css('left', '0');
        $(".body").css('overflow','hidden')
    });

    $(".a1").click(function () {
        $(".c1").slideToggle(500); // Toggles the visibility of the element with id "toggleMe"
    });

    $(".a2").click(function () {
        $(".c2").slideToggle(500); // Toggles the visibility of the element with id "toggleMe"
    });

    $(".a3").click(function () {
        $(".c3").slideToggle(500); // Toggles the visibility of the element with id "toggleMe"
    });
});