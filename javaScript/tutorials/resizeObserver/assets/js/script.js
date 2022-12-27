const box = document.querySelector(".box");
const container = document.querySelector(".container");



const observer = new ResizeObserver((entries) => {
    const boxElement = entries[0];
    console.log(entries);
    const size = boxElement.contentRect.width < 400;
    boxElement.target.style.backgroundColor = size ? "blue" : "red";

    }
)

observer.observe(box);
observer.observe(container);
