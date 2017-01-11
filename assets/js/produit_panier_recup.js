function getTextVal(form, name) {
    var val = form.elements[name];
    alert(val.value);
    return val.value;
}

document.getElementById('form_compte').onsubmit = function() {

    var nom_compte = getTextVal(this, 'nom');
    var prenom_compte = getTextVal(this, 'prenom');
    var email_compte = getTextVal(this, 'inputEmail');
    var password_compte = getTextVal(this, 'inputPassword');

    // display value obtained

    // more code here ...
}
