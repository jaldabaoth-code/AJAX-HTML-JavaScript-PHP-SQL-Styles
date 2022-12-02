// This function loads simpson data from the simpson API
function fetchSimpsonJSON() {
    // Feel free to download this HTML and edit it, to use another simpson ID
    const url = `https://thesimpsonsquoteapi.glitch.me/quotes`;
    axios.get(url)
        .then(function(response) {
            return response.data; // response.data instead of response.json() with fetch
        })
        .then(function(simpson) {
            // Build a block of HTML
            const simpsonHtml = `<img src="${simpson[0].image}" /><p><strong>${simpson[0].quote}</strong></p>`;
            document.querySelector('#simpson').innerHTML = simpsonHtml;
        })
    ;
}
fetchSimpsonJSON();
const btn = document.querySelector('.btn');
btn.addEventListener('click', (event) => {
    event.preventDefault();
    fetchSimpsonJSON();
});
