$(".page-scroll").on("click", function (e) {
    e.preventDefault();
    let href = $(this).attr("href");
    let elementHref = $(href);
    $("html, body").animate(
        {
            scrollTop: elementHref.offset().top - 120,
        },
        1000
    );
});

let text = document.getElementById("text");
let bird1 = document.getElementById("bird1");
let bird2 = document.getElementById("bird2");
let btn = document.getElementById("btn");
let rocks = document.getElementById("rocks");
let forest = document.getElementById("forest");
let water = document.getElementById("water");

window.addEventListener("scroll", function () {
    let value = window.scrollY;
    text.style.top = 50 + value * -0.2 + "%";
    bird1.style.top = value * -1.5 + "%";
    bird1.style.left = value * 2 + "%";
    bird2.style.top = value * -1.5 + "%";
    bird2.style.left = value * -5 + "%";
    // btn.style.marginTop = value * 1.5 + "px";
    rocks.style.top = value * -0.12 + "px";
    forest.style.top = value * 0.25 + "px";
});