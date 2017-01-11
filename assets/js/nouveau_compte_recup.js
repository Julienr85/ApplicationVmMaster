$("#creationCompte" ).click(function() {

  var nom_compte=$('#nom_compte').val();
  var prenom_compte=$('#prenom_compte').val();
  var inputEmail_compte=$('#inputEmail_compte').val();
  var inputPassword_compte=$('#inputPassword_compte').val();

  createElement('#idModalElement','nom_compte',nom_compte);
  createElement('#idModalElement','prenom_compte',prenom_compte);
  createElement('#idModalElement','inputEmail_compte',inputEmail_compte);
  createElement('#idModalElement','inputPassword_compte',inputPassword_compte);


});

function createElement(idModal,idelement,element){
  var div = $('<div></div>');
  var label = $('<label></label>').
                attr('for',idelement);
  label.append(idelement);

  var input = $('<input></input>').
                addClass('form-control').
                attr('id',idelement).
                attr('placeholder',element).
                attr('disabled','true');
  div.append(label)
     .append(input);
  $(idModal).append(div);
}
