const nom = document.getElementById('nom')
const mdp = document.getElementById('mdp')
const mdp2 = document.getElementById('mdp2')
const regEx = /^[a-zA-Z0-9]+$/

const errorMessage_1 = document.getElementById('error1');
const errorMessage_2 = document.getElementById('error2');
const errorMessage_3 = document.getElementById('error3');

function validation() {

    //NOM not EMPTY 
    if (nom.value.trim() === '') {
        nom.style.borderColor = 'red'
        errorMessage_1.textContent = 'Veuillez entrer votre nom !'
        return false
    }
    //NOM > 3 caractères
    else if (nom.value.length < 3) {
        nom.style.borderColor = 'red'
        errorMessage_1.textContent = 'Veuillez entrer un nom de 3 caractères au moins !'
        return false
    }
    //NOM *uniquement alphanumérique*
    else if (regEx.test(nom.value) == false) {
        nom.style.borderColor = 'red'
        errorMessage_1.textContent = 'Veuillez entrer un nom qui comporte uniquement des lettres et chiffres !'
        return false
    } else {
        nom.style.borderColor = 'green'
        errorMessage_1.textContent = ''
    }

    //MOT DE PASSE not EMPTY
    if (mdp.value.trim() === '') {
        mdp.style.borderColor = 'red'
        errorMessage_2.textContent = 'Veuillez entrer un mot de passe !'
        return false
    } //MOT DE PASSE > 6 caractères
    else if (mdp.value.length <= 6) {
        mdp.style.borderColor = 'red'
        errorMessage_2.textContent = 'Veuillez entrer un mot de passe qui dépasse 6 caractères'
        return false
    } else {
        mdp.style.borderColor = 'green'
        errorMessage_2.textContent = ''
    }

    //MOT DE PASSE (confirmation)
    if (mdp2.value.trim() === '') {
        mdp2.style.borderColor = 'red'
        errorMessage_3.textContent = 'Veuillez confirmer le mot de passe'
        return false
    } else if (mdp2.value.length <= 6) {
        mdp2.style.borderColor = 'red'
        errorMessage_3.textContent = 'Veuillez entrer un mot de passe qui dépasse 6 caractères'
        return false
    } else {
        mdp2.style.borderColor = 'green'
        errorMessage_3.textContent = ''
    }
    //Psw1 == Psw2
    if (mdp.value != mdp2.value) {
        errorMessage_2.textContent = errorMessage_3.textContent = 'Les 2 mots de passe doivent etre identiques !';
        mdp.style.borderColor = mdp2.style.borderColor = 'red';
        return false;
    }
    return true
}