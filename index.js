const x = document.getElementById("navList");
const y = document.getElementById("body");

function myFunction() {
    if (x.style.display === "flex") {
        x.style.display = "none"
        y.style.overflow = "visible"
    } else {
        x.style.display = "flex"
        y.style.overflow = "hidden"
    }
}