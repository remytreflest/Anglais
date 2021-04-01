var carteDevant = document.getElementById("lacarte");
var buttonRetourner = document.getElementById("retourner");
var buttonChoix = document.getElementById("button");

buttonRetourner.addEventListener("click", () => {
    carteDevant.classList.add("rotate");
    buttonChoix.style.visibility = "visible";
    buttonRetourner.style.display = "none";
})