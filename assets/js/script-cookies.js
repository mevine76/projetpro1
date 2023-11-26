// Fonction pour définir un cookie
function setCookie(cname, cvalue, exdays) {
    var d = new Date();
    d.setTime(d.getTime() + (exdays * 24 * 60 * 60 * 1000));
    var expires = "expires=" + d.toUTCString();
    document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
}

// Fonction pour obtenir la valeur d'un cookie
function getCookie(cname) {
    var name = cname + "=";
    var decodedCookie = decodeURIComponent(document.cookie);
    var ca = decodedCookie.split(';');
    for (var i = 0; i < ca.length; i++) {
        var c = ca[i];
        while (c.charAt(0) == ' ') {
            c = c.substring(1);
        }
        if (c.indexOf(name) == 0) {
            return c.substring(name.length, c.length);
        }
    }
    return "";
}

// Fonction pour vérifier si l'utilisateur a accepté les cookies
function checkCookie() {
    var cookieAccepted = getCookie("cookieAccepted");
    if (cookieAccepted === "") {
        // Afficher la bannière de consentement si le cookie n'est pas défini
        document.getElementById("cookieConsentBanner").style.display = "block";
    }
}

// Fonction appelée lorsqu'un utilisateur accepte les cookies
function accepterCookies() {
    // Définir le cookie et masquer la bannière
    setCookie("cookieAccepted", "true", 365);
    document.getElementById("cookieConsentBanner").style.display = "none";
}

// Vérifier les cookies lorsque la page est chargée
window.onload = checkCookie;
