const URL_CONTROL = "../controleur.php";
const INSCRIPTION = "inscription";

(function() {
  document
    .getElementById("nom")
    .addEventListener("input", verificationNom, false);
  document
    .getElementById("prenom")
    .addEventListener("input", verificationPrenom, false);
  document
    .getElementById("email")
    .addEventListener("input", verificationEmail, false);
  document
    .getElementById("mdp")
    .addEventListener("input", verificationPassword, false);

  document.getElementById("inscription").addEventListener(
      "submit",
      function(event){
          event.preventDefault();
      },false
  );

  document
    .getElementById("inscription")
    .addEventListener("submit", inscription, false);
})();

function verificationEmail() {
  console.log("ok");

  var ok = false;
  var email = document.getElementById("email").value;

  if (email.length > 3) {
    document.getElementById("email").setAttribute("class", "goodvalue");
    ok = true;
  } else {
    document.getElementById("email").setAttribute("class", "badvalue");
  }

  return ok;
}

function verificationPassword() {
  console.log("ok");

  var ok = false;
  var password = document.getElementById("mdp").value;

  if (password.length > 3) {
    document.getElementById("mdp").setAttribute("class", "goodvalue");
    ok = true;
  } else {
    document.getElementById("mdp").setAttribute("class", "badvalue");
  }

  return ok;
}

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

function verificationPrenom() {
  var ok = false;
  var prenom = document.getElementById("prenom").value;

  if (prenom.length > 3) {
    document.getElementById("prenom").setAttribute("class", "goodvalue");
    ok = true;
  } else {
    document.getElementById("prenom").setAttribute("class", "badvalue");
  }

  return ok;
}

function inscription() {
  var nom = document.getElementById("nom").value;
  var prenom = document.getElementById("prenom").value;
  var email = document.getElementById("email").value;
  var mdp = document.getElementById("mdp").value;

  var url =
    URL_CONTROL +
    "?action=" +
    INSCRIPTION +
    "&nom=" +
    nom +
    "&prenom=" +
    prenom +
    "&email=" +
    email +
    "&mdp=" +
    mdp;

  var maRep = new XMLHttpRequest();
  maRep.open("POST", url, true);

  maRep.onreadystatechange = function() {
    if (this.readyState === 4) {
      afficherStatus(this.responseText);
            console.log(this.responseText);

    }
  };

  maRep.send();
}

function afficherStatus(msg) {
  document.getElementById("status").innerHTML = msg;
}
