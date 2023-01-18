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
        DivNaslovna.style.opacity = "0";
        DivNaslovna.style.transition = ".7s";
        setTimeout(function(){DivNaslovna.style.opacity = "1";}, 50);

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
        DivGalerija.style.opacity = "0";
        DivGalerija.style.transition = ".7s";
        setTimeout(function(){DivGalerija.style.opacity = "1";}, 50);
    }
};

NavCenovnik.onclick = function () {
    if (DivCenovnik.style.display == "none") {
        DivNaslovna.style.display = "none";
        DivGalerija.style.display = "none";
        DivONama.style.display = "none";
        DivMreze.style.display = "none";
        DivIgrica.style.display = "none";

        DivCenovnik.style.display = "block";
        DivCenovnik.style.opacity = "0";
        DivCenovnik.style.transition = ".7s";
        setTimeout(function(){DivCenovnik.style.opacity = "1";}, 50);
    }
};

NavONama.onclick = function () {
    if (DivONama.style.display == "none") {
        DivNaslovna.style.display = "none";
        DivGalerija.style.display = "none";
        DivCenovnik.style.display = "none";
        DivMreze.style.display = "none";
        DivIgrica.style.display = "none";

        DivONama.style.display = "block";
        DivONama.style.opacity = "0";
        DivONama.style.transition = ".7s";
        setTimeout(function(){DivONama.style.opacity = "1";}, 50);
    }
};

NavMreze.onclick = function () {
    if (DivMreze.style.display == "none") {
        DivNaslovna.style.display = "none";
        DivGalerija.style.display = "none";
        DivCenovnik.style.display = "none";
        DivONama.style.display = "none";
        DivIgrica.style.display = "none";

        DivMreze.style.display = "block";
        DivMreze.style.opacity = "0";
        DivMreze.style.transition = ".7s";
        setTimeout(function(){DivMreze.style.opacity = "1";}, 50);
    }
};

NavIgrica.onclick = function () {
    if (DivIgrica.style.display == "none") {
        DivNaslovna.style.display = "none";
        DivGalerija.style.display = "none";
        DivCenovnik.style.display = "none";
        DivONama.style.display = "none";
        DivMreze.style.display = "none";

        DivIgrica.style.display = "block";
        DivIgrica.style.opacity = "0";
        DivIgrica.style.transition = ".7s";
        setTimeout(function(){DivIgrica.style.opacity = "1";}, 50);
    }
};
