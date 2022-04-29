window.onload = function(){
    
    const validations = {
        error: '#AF0000',
        success: '#00AF00',
        messageError1: 'El campo Numeros solo puede contener numeros',
        messageError2: 'EL campo Alfanumerico solo puede contener letras del alfabeto y numeros',

    }

    $(document).ready(function(){
        $('#form').submit(function(event){
            event.preventDefault();
            var a = $('#a').val();
            var b = $('#b').val();
            if(a == '' || b == ''){
                $('#a').css('border-color', validations.error);
                $('#b').css('border-color', validations.error);
            }
            else if(b.match(/[^aeiouAEIOU0-9]/gi)){
                $('#b').css('border-color', 'red');
                alert(validations.messageError2);
            }
            else if(isNaN(a)){
                $('#a').css('border-color', 'red');
                alert(validations.messageError1);
            }
            else{
                $('#form').unbind('submit').submit();
            } 
        });
    
    })  
    
;}