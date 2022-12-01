// We create the variables for imgDog and for title
const imgDog = document.querySelector(".img-dogs");
const title = document.querySelector(".title");
// We add a listener on the dog image, when the user click it changes the src
imgDog.addEventListener("click", function () {
    imgDog.src = "https://placedog.net/300";
});
// We add a listener on the title, when the user over it changes the color
title.addEventListener("mouseover", function () {
    title.style.color = "blue";
});
// We add a listener on the title, when the mouse leave it changes the color
title.addEventListener("mouseleave", function () {
    title.style.color = "black";
});
