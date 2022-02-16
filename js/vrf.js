//Query Selector des Inputs
const inputNom = document.querySelector('#nom');
const inputPrenom = document.querySelector('#prenom');
const inputPassword = document.querySelector('#password');
const inputPasswordVerif = document.querySelector('#passwordVerif');
const inputEmail = document.querySelector('#email');
const inputDate = document.querySelector('#dateNaissance');
const btnInscription = document.querySelector('#btnInscription');
//QuerySelector des Span Error
const spanNomError = document.querySelector('#nomError');
const spanPrenomError = document.querySelector('#prenomError');
const spanEmailError = document.querySelector('#emailError');

const spanPasswordErrorSize = document.querySelector('#passwordErrorSize');
const spanPasswordErrorMajuscule = document.querySelector('#passwordErrorMajuscule');
const spanPasswordErrorMinuscule = document.querySelector('#passwordErrorMinuscule');
const spanPasswordErrorSpecial = document.querySelector('#passwordErrorSpecial');
const spanPasswordErrorNombre = document.querySelector('#passwordErrorNombre');
const spanPasswordVerif = document.querySelector('#passwordVerifError');
const spanDateError = document.querySelector('#dateError');

const tbodyInscrits = document.querySelector("#inscrits");

const constColorValid = "green";
const constColorError = "red";


//Event listener sur la modification d'un Input
inputNom.addEventListener('input', nomChange);
inputPrenom.addEventListener('input', prenomChange);
inputPassword.addEventListener('input', passwordChange);
inputPasswordVerif.addEventListener('input', passwordVerifChange);
inputEmail.addEventListener('input', emailChange);
inputDate.addEventListener('input', dateChange);
btnInscription.addEventListener('click', inscription);

let inscrits = [];

function isSpanValid(spanStr) {
    if (spanStr.style.color == constColorValid) {
        return true;
    } else {
        return false;
    }
}

function isFormValid() {
    if (isSpanValid(spanNomError) && isSpanValid(spanPrenomError) &&
        isSpanValid(spanEmailError) && isSpanValid(spanDateError) &&
        isSpanValid(spanPasswordErrorSize) && isSpanValid(spanPasswordErrorMajuscule) &&
        isSpanValid(spanPasswordErrorMinuscule) && isSpanValid(spanPasswordErrorNombre) &&
        isSpanValid(spanPasswordErrorSpecial) && isSpanValid(spanPasswordVerif)
    ) {
        return true;
    } else {
        return false;
    }
}

function inscription() {
    if (isFormValid()) {
        let nouveauUtilisateur = {
            prenom: inputPrenom.value,
            nom: inputNom.value,
            dateNaissance: inputDate.value,
            email: inputEmail.value,
            password: inputPassword.value
        };

        inscrits.push(nouveauUtilisateur);
        affichageInscrits();
    } else {
        alert("Formulaire non valide");
    }
}

function affichageInscrits() {
    tbodyInscrits.innerHTML = "";
    inscrits.forEach(function(item) {
        tbodyInscrits.innerHTML +=
            "<tr><td>" + item["prenom"] + "</td><td>" + item["nom"] + "</td><td>" + item["email"] + "</td><td>" + item["dateNaissance"] + "</td><td>" + item["password"] + "</td></tr>";
    });
}

function colorValide(str) {
    str.style.color = constColorValid;
}

function colorError(str) {
    str.style.color = constColorError;
}

function nomChange() {
    const valueSize = inputNom.value.length;

    if (valueSize >= 2 && valueSize <= 20) {
        colorValide(spanNomError);
    } else {
        colorError(spanNomError);
    }
}

function prenomChange() {
    if (inputPrenom.value.length >= 2 && inputPrenom.value.length <= 20) {
        colorValide(spanPrenomError);
    } else {
        colorError(spanPrenomError);
    }
}

function passwordChange() {
    passwordVerifChange();
    //Vérification Taille >=8
    if (inputPassword.value.length >= 8) {
        colorValide(spanPasswordErrorSize);
    } else {
        colorError(spanPasswordErrorSize);
    }

    //Vérification présence d'une minuscule
    if (hasLowerCase(inputPassword.value) == true) {
        colorValide(spanPasswordErrorMinuscule);
    } else {
        colorError(spanPasswordErrorMinuscule);
    }

    //Vérification présence d'une majuscule
    if (hasUpperCase(inputPassword.value)) {
        colorValide(spanPasswordErrorMajuscule);
    } else {
        colorError(spanPasswordErrorMajuscule);
    }

    //Vérification présence d'un nombre
    if (hasNumber(inputPassword.value)) {
        colorValide(spanPasswordErrorNombre);
    } else {
        colorError(spanPasswordErrorNombre);
    }

    //Vérification présence d'un char special
    if (hasSpecial(inputPassword.value)) {
        colorValide(spanPasswordErrorSpecial);
    } else {
        colorError(spanPasswordErrorSpecial);
    }
}

function passwordVerifChange() {
    if (inputPassword.value.length > 0) {
        if (inputPassword.value == inputPasswordVerif.value) {
            colorValide(spanPasswordVerif);
        } else {
            colorError(spanPasswordVerif);
        }
    }
}

function emailChange() {
    if (hasEmailValid(inputEmail.value)) {
        colorValide(spanEmailError);
    } else {
        colorError(spanEmailError);
    }
}

function dateChange() {
    const age = getAge(inputDate.value);

    if (age >= 18 && age < 120) {
        colorValide(spanDateError);
    } else {
        colorError(spanDateError);
    }
}

function getAge(dateString) {
    var today = new Date();
    var birthDate = new Date(dateString);
    var age = today.getFullYear() - birthDate.getFullYear();
    var m = today.getMonth() - birthDate.getMonth();
    if (m < 0 || (m === 0 && today.getDate() < birthDate.getDate())) {
        age--;
    }
    return age;
}

fetch("https://api.thecatapi.com/v1/images/search")
    .then((resp) => resp.json())
    .then(function(data) {
        console.log(data);
    })
    .catch(function(error) {
        console.log(error);
    });

function hasEmailValid(str) {
    return (/^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/.test(str));
}

function hasLowerCase(str) {
    return (/[a-z]/.test(str));
}

function hasUpperCase(str) {
    return (/[A-Z]/.test(str));
}

function hasNumber(str) {
    return (/[0-9]/.test(str));
}

function hasSpecial(str) {
    return (/[!-/]|[:-@]|[[-`]|[{-~]/.test(str));
}