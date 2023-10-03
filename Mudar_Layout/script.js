
//Trocar tema
function DarkMode() {
var body = document.body;
var square = document.getElementById("square");
var button = document.getElementById("darkModeButton");

if (body.classList.contains("dark-mode")) {
    // Mudar para o modo claro
    body.classList.remove("dark-mode");
    square.style.backgroundColor = "white";
    button.textContent = "Dark Mode";
} else {
    // Mudar para o modo escuro
    body.classList.add("dark-mode");
    square.style.backgroundColor = "#333";
    button.textContent = "Light Mode";
}
}