function mostrarConductor() {
    let x = document.getElementById("conductorForm");
    if (x.style.display === "none") {
        x.style.display = "block";
    } else {
        x.style.display = "none";
    }
}
function mostrarPropie() {
    let x = document.getElementById("propietarioForm");
    if (x.style.display === "block") {
        x.style.display = "none";
    } else {
        x.style.display = "block";
    }
}
