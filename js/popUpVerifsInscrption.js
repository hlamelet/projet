//Query Selector des Inputs
const inputNom = document.querySelector('#nom');
const inputEmail = document.querySelector('#email');
const inputPassword = document.querySelector('#password');
const inputPasswordVerif = document.querySelector('#passwordVerif');
const btnInscription = document.querySelector('#btnInscription');

//QuerySelector des Span Error
const spanNomError = document.querySelector('#nomError');
const spanEmailError = document.querySelector('#emailError');


const spanPasswordErrorSize = document.querySelector('#passwordErrorSize');
const spanPasswordErrorMajuscule = document.querySelector('#passwordErrorMajuscule');
const spanPasswordErrorMinuscule = document.querySelector('#passwordErrorMinuscule');
const spanPasswordErrorSpecial = document.querySelector('#passwordErrorSpecial');
const spanPasswordErrorNombre = document.querySelector('#passwordErrorNombre');
const spanPasswordVerif = document.querySelector('#passwordVerifError');

const constColorValid = "green";
const constColorError = "red";

//Event listener sur la modification d'un Input
inputNom.addEventListener('input', nomChange);
inputPassword.addEventListener('input', passwordChange);
inputPasswordVerif.addEventListener('input', passwordVerifChange);

function isSpanValid(spanStr) {
    if (spanStr.style.color == constColorValid) {
        return true;
    } else {
        return false;
    }
}

function isFormValid() {
    if (isSpanValid(spanNomError) &&
        isSpanValid(spanEmailError) &&
        isSpanValid(spanPasswordErrorSize) && isSpanValid(spanPasswordErrorMajuscule) &&
        isSpanValid(spanPasswordErrorMinuscule) && isSpanValid(spanPasswordErrorNombre) &&
        isSpanValid(spanPasswordErrorSpecial) && isSpanValid(spanPasswordVerif)
    ) {
        return true;


    } else {
        return false;
    }
}
/*
function btnAcces() {
    if (isFormValid()) {
        $('#btnInscription').style.backgroundColor = "red";

    }

}
*/

/*
function affichageInscrits() {
    tbodyInscrits.innerHTML = "";
    inscrits.forEach(function(item) {
        tbodyInscrits.innerHTML +=
            "<tr><td>" + item["prenom"] + "</td><td>" + item["nom"] + "</td><td>" + item["email"] + "</td><td>" + item["dateNaissance"] + "</td><td>" + item["password"] + "</td></tr>";
    });
}
*/
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

$(document).on('click', '#btnInscription', function() {

    if (inputNom || inputPassword || inputEmail == "") {
        $('form').prepend("hellooo");
    } else {

    }
})

/*----------verifs--fin-----------*/