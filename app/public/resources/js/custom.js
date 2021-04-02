$(document).ready(function() {
    $('#copiar').on('click', function(){
        var texto = $('#conteudo').text();

        var $temp = $("<input>");

        $("body").append($temp);

        $temp.val(texto).select();

        document.execCommand("copy");

        $temp.remove();

        $.notify("Link copiado para a área de transferência");
    });

    $('.submit-form').on('click', function() {
        var id_form = '#'+$(this).data('form');

        var flag = 0;

        $('.obrigatorio').each(function() { 
            if( ! $(this).val()) {
                flag = 1;

                $(this).addClass('is-invalid');

                $.notify({
                    message: "O campo "+$(this).data('campo')+" é obrigatório"
                },{
                    type: 'danger',
                });
            }
        });

        console.log(id_form);

        if(flag != 1) {
            $(id_form).trigger('submit')
        }
    });

    $(document).on('change', '.obrigatorio', function (e) {
        if($(this).val()) {
            $(this).removeClass('is-invalid')
        }
    });

    $('.excluir-item').on('click', function(e) {
        e.preventDefault()
        var url = $(this).attr('href')
        alertify.confirm("Excluir usuário","Tem certeza que deseja remover esse usuário? Essa ação não poderá ser desfeita",
            function() {
                $.get(url, function() {
                    location.reload()
                });
            },
            function() { }
        ).setting({'labels':{ok:'Excluir', cancel:'Voltar'},
                    'defaultFocus': 'cancel'});
    });
});