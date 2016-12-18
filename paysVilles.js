$('document').ready(function(){
//=========================================================================
reqListePays();
$('#cboPays').on('change', reqListeVilles);
$('#cboVilles').on('change', affChoix);
//---------------------------------------------------------
function reqListePays(){
  $.getJSON('./listePays.php',
    function(reponse){
      $('#cboPays').empty();
      $('#cboPays').append( '<option value="">'
                          + 'Choix du pays'
                          + '</option>' );
/*
      for(var li in reponse){
        $('#cboPays').append( '<option value="' + reponse[li].paysV + '">'
                            + reponse[li].paysV
                            + '</option>' );
      }
*/
      for(var li=0; li<reponse.length; li++){
        $('#cboPays').prop('options')[li+1]=
                   new Option(reponse[li].paysV,
                              reponse[li].paysV);
      }
  }); //$.getJSON
}

function reqListeVilles(){
  $('#divChoix').empty(); 
  $.getJSON('./listeVilles.php', 'nomPays=' + $('#cboPays').val(),   
    function(reponse){
      $('#cboVilles').empty();
      $('#cboVilles').append( '<option value="">'
                            + 'Choix d\'une ville'
                            + '</option>' );
      for(var li in reponse){
        $('#cboVilles').append( '<option value="' + reponse[li].idV + '">'
                              + reponse[li].nomV
                              + '</option>' );
      }
  }); //$.getJSON
}

function affChoix(){
  if($('#cboPays option:selected').index()==0
       || $('#cboVilles option:selected').index()==0){
    $('#divChoix').empty(); 
  }else{       
    $('#divChoix').html( "Vous avez choisi " 
                     + $('#cboVilles option:selected').text() + " en " 
                     + $('#cboPays option:selected').text() + "." );
  }
}
//=========================================================================  </script>
}); //$('document').ready(function(){
