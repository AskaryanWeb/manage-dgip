
$('#sidenav').click(function(){
  $('.ui.sidebar')
  .sidebar('toggle');
});

$('#next').click(function(){
  $('#dos').click();
});
  
  $(document).ready(function(){

    $('.tabular.menu .item').tab();
    $('.ui.dropdown').dropdown();
    $('.ui.checkbox').checkbox();
    $('.message .close')
  .on('click', function() {
    $(this)
      .closest('.message')
      .transition('zoom');
  });

  
     
  });

 
 