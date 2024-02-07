function getCookie(cookie, name) {
    const q = {}
    cookie?.replace(/\s/g, '')
      .split(';')
      .map(i=>i.split('='))
      .forEach(([key, value]) => {
        q[key] = value
      })
    return q[name]??null;
}

var number = getCookie(document.cookie, "fidelityCount");
var i = 0;
var fidelity = $(".fidelity-point");

$(".fidelity-text").text(number + " réservation(s)");

for (let index = 0; index < number; index++) {
    if (i == 5) {
        fidelity.append("<br>");
    }
    fidelity.append("<img src='ressources/fidelity_green.png'>");
    i++;
}
for (let index = 0; index < 10-number; index++) {
    if (i == 5) {
        fidelity.append("<br>");
    }
    fidelity.append("<img src='ressources/fidelity_black.png'>");
    i++;
}