const URL_CONTROL = "../controleur.php";
const ADD = "Add";

(function() {
  document
    .getElementById("nom")
    .addEventListener("input", verificationNom);

 
  document.getElementById("ajouter").addEventListener("submit", add);
})();

function verificationNom() {
  var ok = false;
  var nom = document.getElementById("nom").value;

  if (nom.length > 3) {
    document.getElementById("nom").setAttribute("class", "goodvalue");
    ok = true;
  } else {
    document.getElementById("nom").setAttribute("class", "badvalue");
  }

  return ok;
}

function add(event) {
  event.preventDefault();
  // Je récupère mes information du formulaire
  const form = document.getElementById("ajouter");
  const nom = document.getElementById("nom").value;
  const description = document.getElementById("description").value;
  const nbAppercu = document.getElementById("nbAppercu").value;
  const espece = document.getElementById("espece").value;

  //construit l url
  var urlBdd =
    URL_CONTROL +
    "?action=" +
    ADD +
    "&espece=" +
    espece +
    "&nom=" +
    nom +
    "&description=" +
    description +
    "&nbAppercu=" +
    nbAppercu;

  console.log(urlBdd);

  var maRep = new XMLHttpRequest();

  maRep.onreadystatechange = function() {
    if (this.readyState === 4) {
      afficherStatus(this.responseText);
      form.reset();
    }
  };
  maRep.open("POST", urlBdd, true);

  maRep.send();

}

function afficherStatus(msg) {
  document.getElementById("status").innerHTML = msg;
  console.log(msg);
}
