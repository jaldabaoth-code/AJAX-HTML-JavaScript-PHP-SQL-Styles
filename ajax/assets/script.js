// This function loads simpson data from the simpson API
function fetchSimpsonJSON() {
    // Feel free to download this HTML and edit it, to use another simpson ID
    const url = `https://simpsons-quotes-api.herokuapp.com/quotes`;
    axios.get(url)
        .then(function(response) {
            return response.data; // response.data instead of response.json() with fetch
        })
        .then(function(simpson) {
            // Build a block of HTML
            const simpsonHtml = `<p><strong>${simpson[0].quote}</strong></p><img src="${simpson[0].image}" />`;
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
