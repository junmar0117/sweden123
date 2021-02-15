const slidePage = document.querySelector(".slide-page");
const nextBtnFirst = document.querySelector(".firstNext");
const prevBtnSec = document.querySelector(".prev-1");
const nextBtnSec = document.querySelector(".next-1");
const prevBtnThird = document.querySelector(".prev-2");
const nextBtnThird = document.querySelector(".next-2");
const prevBtnFourth = document.querySelector(".prev-3");
const submitBtn = document.querySelector(".submit");
const progressText = document.querySelectorAll(".step p");
const progressCheck = document.querySelectorAll(".step .check");
const bullet = document.querySelectorAll(".step .bullet");
let current = 1;

nextBtnFirst.addEventListener("click", function(event) {
    event.preventDefault();
    slidePage.style.marginLeft = "-25%";
    bullet[current - 1].classList.add("active");
    progressCheck[current - 1].classList.add("active");
    progressText[current - 1].classList.add("active");
    current += 1;
});
nextBtnSec.addEventListener("click", function(event) {
    event.preventDefault();
    slidePage.style.marginLeft = "-50%";
    bullet[current - 1].classList.add("active");
    progressCheck[current - 1].classList.add("active");
    progressText[current - 1].classList.add("active");
    current += 1;
});
nextBtnThird.addEventListener("click", function(event) {
    event.preventDefault();
    slidePage.style.marginLeft = "-75%";
    bullet[current - 1].classList.add("active");
    progressCheck[current - 1].classList.add("active");
    progressText[current - 1].classList.add("active");
    current += 1;

    var name = document.getElementById("prefix").value + " " + document.getElementById("firstname").value + " " + 
    document.getElementById("lastname").value;//get first name
    disp_name.innerHTML = name;//assign disp_name to be shown in html

    var phoneNumber = document.getElementById("phonenumber").value;
    disp_phone.innerHTML = phoneNumber;

    var address = document.getElementById("address").value + ", " + document.getElementById("city").value + ", " + 
    document.getElementById("state").value + ", " + document.getElementById("zipcode").value;//get address
    disp_address.innerHTML = address;

    var check_in = document.getElementById("check-in").value;
    disp_check_in.innerHTML = check_in;
    var check_out = document.getElementById("check-out").value;
    disp_check_out.innerHTML = check_out;
    var adults = document.getElementById("adults").value;
    disp_adults.innerHTML = adults;
    var children = document.getElementById("children").value;
    disp_children.innerHTML = children;

    document.getElementById("submit").style.visibility = "visible";
});
submitBtn.addEventListener("click", function() {
    // bullet[current - 1].classList.add("active");
    // progressCheck[current - 1].classList.add("active");
    // progressText[current - 1].classList.add("active");
    // current += 1;
    document.getElementById("booking").submit();
    window.location.assign("index.php");
    setTimeout(function() {
        alert("You've successfully booked???");
        location.reload();
    }, 800);
});

prevBtnSec.addEventListener("click", function(event) {
    event.preventDefault();
    slidePage.style.marginLeft = "0%";
    bullet[current - 2].classList.remove("active");
    progressCheck[current - 2].classList.remove("active");
    progressText[current - 2].classList.remove("active");
    current -= 1;
});
prevBtnThird.addEventListener("click", function(event) {
    event.preventDefault();
    slidePage.style.marginLeft = "-25%";
    bullet[current - 2].classList.remove("active");
    progressCheck[current - 2].classList.remove("active");
    progressText[current - 2].classList.remove("active");
    current -= 1;
});
prevBtnFourth.addEventListener("click", function(event) {
    event.preventDefault();
    slidePage.style.marginLeft = "-50%";
    bullet[current - 2].classList.remove("active");
    progressCheck[current - 2].classList.remove("active");
    progressText[current - 2].classList.remove("active");
    current -= 1;
});