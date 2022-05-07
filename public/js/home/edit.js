var my_icon = document.querySelector('.icon_profile');
var pop_up = document.querySelector('.pop_up');
var header = document.querySelector('.con-text');
var elements = document.getElementsByTagName("*");
// var nextSibling = header.nextElementSibling();

my_icon.addEventListener('click', function () {
    pop_up.classList.toggle("show");
});

document.querySelectorAll("li a").forEach(function (l) {
    l.addEventListener("click", function () {
        document.querySelector(".accept").classList.remove("accept");
        l.classList.add("accept");

    })
});
// ===================================================================

var profile_picture = document.querySelector('.profile_picture');
var hover_picture = document.querySelector('.hover_picture');

profile_picture.addEventListener('mouseover', function () {
    hover_picture.classList.add("show_hover_picture");
    // console.log("yes");
});

profile_picture.addEventListener('mouseout', function () {
    hover_picture.classList.remove("show_hover_picture");
    // console.log("yes");
});

// document.querySelector("demo").addEventListener("mouseover", hoverPicture);

// function hoverPicture() {
//   document.getElementById("demo").style.color = "red";
// }