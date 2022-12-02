let firstValue = prompt("Your first number");
let operator = prompt("Your operator");
let secondValue = prompt("Your second number");
firstValue = parseInt(firstValue);
secondValue = parseInt(secondValue);
switch(operator) {
    case '+':
        console.log(firstValue + secondValue);
        break;
    case '-':
        console.log(firstValue - secondValue);
        break;
    case '*':
        console.log(firstValue * secondValue);
        break;
    case '/':
        console.log(firstValue / secondValue);
        break;
    default:
        console.log("invalid operator");
}
