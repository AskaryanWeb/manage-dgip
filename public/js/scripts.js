
$('#sidenav').click(function(){
  $('.ui.sidebar')
  .sidebar('toggle');
});
  
  $(document).ready(function(){

    $('.ui.dropdown').dropdown();
    $('.ui.checkbox').checkbox();
    $('.message .close')
  .on('click', function() {
    $(this)
      .closest('.message')
      .transition('zoom');
  });
     
  });

 
 