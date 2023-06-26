$(document).ready(function() {
    $('#form').submit(function(event) {
      event.preventDefault();
  
      var inputs = $('.input-data');
  
      var data = {};

      inputs.each(function() {
        var fieldName = $(this).attr('name');
        var fieldValue = $(this).val();
  
        data[fieldName] = fieldValue;
      });
  
      var dataJSON = JSON.stringify(data);
  
      console.log(data);     
      console.log(dataJSON); 
  
      // Resto de acciones, como enviar los datos al backend mediante AJAX
    });
  });
  