// navigation - hamburger
const ham = document.querySelector(".ham");

ham.addEventListener("click", () => {
    const menu = document.querySelector(".menu");
    menu.classList.toggle("active");
    ham.classList.toggle("active");
    document.body.classList.toggle("active");
})