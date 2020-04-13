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
                // alert(msg.success);
                if(msg.success == true){
                    window.location.href = 'http://localhost/ProjetoEmModulos/';
                }else if(msg.success == false){
                    $("p").remove('strong');
                    $("p").remove('.remover');
                    $("#myAlert").append("<p class='remover'><strong>Aviso!</strong> "+ msg.msg +".</p>");
                    $("#aviso").removeClass('d-lg-none');
                    $("#aviso").addClass('d-block');
                    // alert(msg.msg);
                }
                
            }
        });
    });
});

function fecharAlert(){
    $("#aviso").click(function(){
        $("#aviso").removeClass('d-block');
        $("#aviso").addClass('d-lg-none');
    });
}






