const DivNaslovna = document.getElementById("naslovna");
const DivGalerija = document.getElementById("galerija");
const DivCenovnik = document.getElementById("cenovnik");
const DivONama = document.getElementById("onama");
const DivMreze = document.getElementById("mreze");
const DivIgrica = document.getElementById("igrica");

const NavNaslovna = document.getElementById("NavNaslovna");
const NavGalerija = document.getElementById("NavGalerija");
const NavCenovnik = document.getElementById("NavCenovnik");
const NavONama = document.getElementById("NavONama");
const NavMreze = document.getElementById("NavMreze");
const NavIgrica = document.getElementById("NavIgrica");

DivNaslovna.style.display = "block";
DivGalerija.style.display = "none";
DivCenovnik.style.display = "none";
DivONama.style.display = "none";
DivMreze.style.display = "none";
DivIgrica.style.display = "none";

NavNaslovna.onclick = function () {
    if (DivNaslovna.style.display == "none") {
        DivGalerija.style.display = "none";
        DivCenovnik.style.display = "none";
        DivONama.style.display = "none";
        DivMreze.style.display = "none";
        DivIgrica.style.display = "none";
        DivNaslovna.style.display = "block";
    }
};

NavGalerija.onclick = function () {
    
    if (DivGalerija.style.display == "none") {
        DivNaslovna.style.display = "none";
        DivCenovnik.style.display = "none";
        DivONama.style.display = "none";
        DivMreze.style.display = "none";
        DivIgrica.style.display = "none";
        DivGalerija.style.display = "block";
    }
};

NavCenovnik.onclick = function () {
    if (DivCenovnik.style.display == "none") {
        DivCenovnik.style.display = "block";
        DivNaslovna.style.display = "none";
        DivGalerija.style.display = "none";
        DivONama.style.display = "none";
        DivMreze.style.display = "none";
        DivIgrica.style.display = "none";
    }
};

NavONama.onclick = function () {
    if (DivONama.style.display == "none") {
        DivONama.style.display = "block";
        DivNaslovna.style.display = "none";
        DivGalerija.style.display = "none";
        DivCenovnik.style.display = "none";
        DivMreze.style.display = "none";
        DivIgrica.style.display = "none";
    }
};

NavMreze.onclick = function () {
    if (DivMreze.style.display == "none") {
        DivMreze.style.display = "block";
        DivNaslovna.style.display = "none";
        DivGalerija.style.display = "none";
        DivCenovnik.style.display = "none";
        DivONama.style.display = "none";
        DivIgrica.style.display = "none";
    }
};

NavIgrica.onclick = function () {
    if (DivIgrica.style.display == "none") {
        DivIgrica.style.display = "block";
        DivNaslovna.style.display = "none";
        DivGalerija.style.display = "none";
        DivCenovnik.style.display = "none";
        DivONama.style.display = "none";
        DivMreze.style.display = "none";
    }
};