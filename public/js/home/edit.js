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
})