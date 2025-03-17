// Function to load HTML components
function loadHTML(id, file) {
    fetch(file)
        .then(response => response.text())
        .then(data => document.getElementById(id).innerHTML = data)
        .catch(error => console.error(`Error loading ${file}:`, error));
}

// Load header and footer
document.addEventListener("DOMContentLoaded", function () {
    loadHTML("header", "header/header.html");
    loadHTML("footer", "footer/footer.html");
});