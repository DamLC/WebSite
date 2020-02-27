const URL_CONTROL = "../Controleur.php";
const CONNEXION = "connexion";


(function() {
 document
    .getElementById("email")
    .addEventListener("input", verificationEmail, false);
  document
    .getElementById("mdp")
    .addEventListener("input", verificationPassword, false);

  

  document.getElementById("connexion").addEventListener(
    "submit",
    function(event) {
      event.preventDefault();
    },
    false
  );
  document
    .getElementById("connexion")
    .addEventListener("submit", connexion, false);
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

function connexion() {
  var email = document.getElementById("email").value;
  var pass = document.getElementById("mdp").value;

  var url =
    URL_CONTROL + "?action=" + CONNEXION + "&email=" + email + "&pass=" + pass;
  // console.log(url);

  var maRep = new XMLHttpRequest();
  maRep.open("POST", url, true);

  maRep.onreadystatechange = function() {
    if (this.readyState === 4) {
      afficherStatus(this.responseText);
    }
  };

  maRep.send();
}

function afficherStatus(msg) {
  document.getElementById("status").innerHTML = msg;
  console.log(msg);

  if (msg.indexOf("Bienvenue") > -1) {
    setTimeout(function() {
      document.location.href = "../html/ajoute.php";
    }, 3000);
  } else {
    return "identifiant incorrect";
  }
}
