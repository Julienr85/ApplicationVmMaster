
$("#btSubmit" ).click(function() {

  var providChoice = $('input[name=providChoice]:checked').val();
  var distroChoice = $('input[name=distroChoice]:checked').val();
  var machine_puphet=$('#machine_puphet').val();
  var adresseIp=$('#adresseIp').val();
  var memory=$('#memory').val();
  var cpu=$('#cpu').val();
  var host_Port=$('#host_Port').val();
  var vm_Port=$('#vm_Port').val();
  var host_port_supp=$('#host_port_supp').val();
  var vm_port_supp=$('#vm_port_supp').val();


  createElement('#idModalElement','providChoice',providChoice);
  createElement('#idModalElement','distroChoice',distroChoice);
  createElement('#idModalElement','machine_puphet',machine_puphet);
  createElement('#idModalElement','adresseIp',adresseIp);
  createElement('#idModalElement','memory',memory);
  createElement('#idModalElement','cpu',cpu);
  createElement('#idModalElement','host_Port',host_Port);
  createElement('#idModalElement','vm_Port',vm_Port);
  createElement('#idModalElement','host_port_supp',host_port_supp);
  createElement('#idModalElement','vm_port_supp',vm_port_supp);


});


function createElement(idModal,idelement,element){
  var div = $('<div></div>');
  var label = $('<label></label>').
                attr('for',idelement);
  label.append(idelement);

  var input = $('<input></input>').
                addClass('form-control').
                attr('id',idelement).
                attr('name',idelement).
                attr('placeholder',element).
                attr('disabled','true');
  div.append(label)
     .append(input);

  $(idModal).append(div);

}
