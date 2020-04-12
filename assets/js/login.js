$(function(){
    $('#enviar').on('click', function(e){

        e.preventDefault();

        var email = $('input[id=email]').val();
        var senha = $('input[id=senha').val();
        // alert(email + senha);

        $.ajax({
            type:'POST',
            url:'http://localhost/ProjetoEmModulos/login/loginAction',
            data:{email:email, senha:senha},
            dataType:'json',
            success:function(msg){
                alert(msg.msg);
                window.location.href = 'http://localhost/ProjetoEmModulos/';
            }
        });

    });
});