/* Adopt A Cat! */
const cards = document.querySelector(".cards");
const animalsToAdopt = [
    {
        name: "Lucky",
        picture: "https://placekitten.com/200/287"
    },
    {
        name: "Symba",
        picture: "https://placekitten.com/200/139"
    },
    {
        name: "Leo",
        picture: "https://placekitten.com/200/90"
    },
    {
        name: "Milo",
        picture: "https://placekitten.com/200/194"
    },
    {
        name: "Charly",
        picture: "https://placekitten.com/200/179"
    }
];
function createCard(title, imageUrl) {
    const card = document.createElement("div");
    card.classList.add("card");
    cards.appendChild(card);
    const cardHeader = document.createElement("div");
    cardHeader.classList.add("card-header");
    card.appendChild(cardHeader);
    const cardImg = document.createElement("div");
    cardImg.style.backgroundImage = `url(${imageUrl})`;
    cardImg.classList.add("card-img");
    cardHeader.appendChild(cardImg);
    // Step 1: Create the cardBody div, add the class card-body and add it to the card
    const cardBody = document.createElement("div");
    cardBody.classList.add("card-body");
    card.appendChild(cardBody);
    // Step 2: Create the cardTitle h3, add the class card-title, set the text inside the tag to the "title" parameter of this function and add it to the cardBody
    const cardTitle = document.createElement("h3");
    cardTitle.classList.add("card-title");
    cardTitle.innerHTML = title;
    cardBody.appendChild(cardTitle);
    // Step 3: Create the cardButton button, add the class card-button, set the text inside the tag to be "Adopt Now" and add it to the cardBody
    const cardButton = document.createElement("button");
    cardButton.classList.add("card-button");
    cardButton.innerHTML = "Adopt Now";
    cardBody.appendChild(cardButton);
}
// Step 4: Create a for loop, for each element of the array, call the function createCard with the corresponding parameter
for (let i = 0; i < animalsToAdopt.length; i++) {
    createCard(animalsToAdopt[i].name, animalsToAdopt[i].picture);
}

/* Hover me */
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
