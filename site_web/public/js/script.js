function initTyped() {
  new Typed(".ChangeText", {
    strings: ["Vos achats ", "Votre santé", "Votre identité"],
    loop: true,
    typeSpeed: 100,
    backSpeed: 80,
    backDelay: 1500,
  });
}

initTyped();

function afficherAlerte() {
  alert("Vous devez-vous connecter pour pouvoir faire votre demande de NFT");
}

function validation() {
  alert(
    "Votre demande a bien été prise en compte, nous équipes vérifie vos information et vous allez recevoir un mail avec un code sous 24h"
  );
}

function contact() {
  alert(
    "Votre demande a bien été prise en compte, nous équipes vont vous répondre dans les plus bref délaie"
  );
}
