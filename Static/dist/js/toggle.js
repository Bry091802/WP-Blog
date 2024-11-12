const toggleBtn = document.querySelector("#themeToggle");
const body = document.querySelector("body");

toggleBtn.addEventListener("click", toggleTheme);

function toggleTheme() {
  body.classList.toggle("dark");
  if (body.classList.contains("dark")) {
    document.documentElement.style.setProperty("--dark", "#fff");
    document.documentElement.style.setProperty("--light", "#000");
    this.querySelector("i").setAttribute("class", "fas fa-moon");
  } else {
    document.documentElement.style.setProperty("--dark", "#000");
    document.documentElement.style.setProperty("--light", "#fff");
    this.querySelector("i").setAttribute("class", "fas fa-sun");
  }
}
