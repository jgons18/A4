
var show_msg=function(str){
    $('#msg').show();
    $('#msg').html('<p>'+str+'</p>');
    setTimeout(handler:function(){$('#msg').hide();}, timeout:4000);

}

$(document).ready(function () {
    //initialize elements
    $('#msg').hide();

    $('#email-reg').on('change',function () {
        var form=$('#form-reg');
        var url=form.attr('action');
        var email =$('#email-reg').val();
        $.ajax({
            url:'reg/valemail',
            type:'post',
            data:email,
            dataType:'json',
            error:function(out){//out-> salida de la funcion valemail
                console.log(out);
            },
            success:function(out){
                console.log(out);
                show_msg(out.msg);
                if(out.msg=="Email is use"){
                    $("#email").focus();
                }
            }

        });


    });

})