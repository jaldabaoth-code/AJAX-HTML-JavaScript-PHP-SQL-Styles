const randomNumber = Math.floor(Math.random() * 100) + 1;
const playerName = prompt("What's your name?");
let guessNumber = parseInt(prompt("Guess the number (between 1 and 100 included)"));
let round = 1;
while (guessNumber !== randomNumber) {
    if (isNaN(guessNumber)) {
        guessNumber = parseInt(prompt("Give me a number you idiot!"));
    } else if (guessNumber > randomNumber) {
        guessNumber = parseInt(prompt("It is less! Try again! :P"));
    } else if (guessNumber < randomNumber) {
        guessNumber = parseInt(prompt("It is more! Try again! :P"));
    }
    round++;
}
alert("Congratulations, " + playerName + "! You win in " + round + " rounds! :D");
