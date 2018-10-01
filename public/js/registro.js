var start = 0;

$(document).ready(function(){
    showStep(start);

});



$('#form1').form({
    inline:true,
    on:'blur',
    fields:{

      name:{
        identifier:'name',
        rules:[
          {
            type:'empty',
            prompt:'El campo esta vacio.'
          }
        ]
      },
      paterno:{
        identifier:'paterno',
        rules:[
          {
            type:'empty',
            prompt:'El campo esta vacio.'
          }
        ]
      },
      materno:{
        identifier:'materno',
        rules:[
          {
            type:'empty',
            prompt:'El campo esta vacio.'
          }
        ]
      },
      telefono:{
        identifier:'telefono',
        rules:[
          {
            type:'exactLength[10]',
            prompt:'Debe tener {ruleValue} digitos'
          }
        ]
       },
       genero:{
        identifier:'genero',
        rules:[
          {
            type:'empty',
            prompt:'El campo esta vacio.'
          }
        ]
      },

      // password:['maxLength[8]','empty'],
      // confirm_password:['match[password]','empty']
  
    }
  
});


$('#form2').form({
    inline:true,
    on:'blur',
    fields:{
        plaza:{
            identifier:'plaza',
            rules:[
                {
                    type:'empty',
                    prompt:'El campo esta vacio'
                },
                {
                    type:'exactLength[5]',
                    prompt:'Debe tener {ruleValue} digitos'
                },
                {
                    type:'number',
                    prompt:'Debe ser un número'
                }
            ]            
        },
        unidad_academica:{
            identifier:'unidad_academica',
            rules:[
                {
                    type:'empty',
                    prompt:'El campo esta vacio'
                }
            ]
        },
        grado_academico:{
            identifier:'grado_academico',
            rules:[
                {
                    type:'empty',
                    prompt:'El campo esta vacio'
                }
            ]
        },
    }
    
});


$('#form3').form({
    inline:true,
    on:'blur',
    fields:{
        email:{
            identifier:'email',
            rules:[
                    {
                      type:'regExp[/^([a-zA-z]{1})([0-9]{6})(@unach.mx)$/ui]',
                      prompt:'{name} no tiene el formato correcto.'
                    },
                {
                  type:'empty',
                  prompt:'El campo esta vacio.'
                }
            ]
       },
       password:{
            identifier:'password',
            rules:[
                {
                    type:'empty',
                    prompt:'El campo esta vacio'
                },
                {
                    type:'minLength[8]',
                    prompt:'Debe tener mínimo {ruleValue} caracteres'
                }
            ]
       },
       password_confirmation:{
        identifier:'password_confirmation',
        rules:[
            {
                type:'empty',
                prompt:'El campo esta vacio'
            },
            {
                type:'match[password]',
                prompt:'Los valores no coinciden'
            }
        ]
   },
    }
});


// -----------------------------CONTROL DE STEPS------------------------------

function showStep(n)
{
  var steps = document.getElementsByClassName('form');
  var next=$('#next');
  $(steps[n]).transition('zoom in');
  

  // $(steps[n]).transition('zoom in');


  if(n == 0){
    $('#back').prop('disabled',true);
  }else{
    $('#back').prop('disabled',false);
  }

  if(n == steps.length - 1)
  {

    next.text('Registrarme');
    next.removeClass('bg-accent btn-accent tx-white');
    next.addClass("bg-primary btn-primary");

  }else{
    next.removeClass('bg-primary btn-primary');
    next.addClass('bg-accent btn-accent tx-white');
    document.getElementById('next').innerHTML='Siguiente <i class="right chevron icon"></i>';
  }

}

function nextStep(n){
  var form = $('#form'+(start+1));
  var steps = document.getElementsByClassName('form');

  if(n==1 && !form.form('is valid'))
  {
    form.form('validate form');
    return false;
  }

  if(start+n>=steps.length){
    $('#regform').submit();
    return false;
  }
  $(steps[start]).transition('hide');

  start=start+n;

  showStep(start);
  
}