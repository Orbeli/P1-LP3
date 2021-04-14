function limpa_formulário_cep() {
    document.getElementById('rua').value=("");
    document.getElementById('bairro').value=("");
    document.getElementById('cidade_endereco').value=("");
    document.getElementById('estado').value=("");
}

function meu_callback(conteudo) {
    if (!("erro" in conteudo)) {
        //Atualiza os campos com os valores.
        document.getElementById('rua').value=(conteudo.logradouro);
        document.getElementById('bairro').value=(conteudo.bairro);
        document.getElementById('cidade_endereco').value=(conteudo.localidade);
        document.getElementById('estado').value=(conteudo.uf);
    }
    //CEP não Encontrado.
    else {
        limpa_formulário_cep();
        alertify.set('notifier','position', 'top-center');
        alertify.warning('CEP não encontrado');
    }
}

function pesquisacep(valor) {
    //Nova variável "cep" somente com dígitos.
    var cep = valor.replace(/\D/g, '');

    if (cep != "") {

        //Expressão regular para validar o CEP.
        var validacep = /^[0-9]{8}$/;

        //Valida o formato do CEP.
        if(validacep.test(cep)) {

            //Preenche os campos com "..." enquanto consulta webservice.
            document.getElementById('rua').value="...";
            document.getElementById('bairro').value="...";
            document.getElementById('cidade_endereco').value="...";
            document.getElementById('estado').value="...";

            //Cria um elemento javascript.
            var script = document.createElement('script');

            //Sincroniza com o callback.
            script.src = 'https://viacep.com.br/ws/'+ cep + '/json/?callback=meu_callback';

            //Insere script no documento e carrega o conteúdo.
            document.body.appendChild(script);
        }
        //cep é inválido.
        else {
            limpa_formulário_cep();
            alertify.set('notifier','position', 'top-center');
            alertify.error('Formato de CEP inválido');
        }
    }
    //cep sem valor, limpa formulário.
    else {
        limpa_formulário_cep();
    }
}

$(document).ready(function() {
    $("#CEP").blur(function(){
        pesquisacep($(this).val())
    });
    // $('#copiar').on('click', function(){
    //     var texto = $('#conteudo').text();

    //     var $temp = $("<input>");

    //     $("body").append($temp);

    //     $temp.val(texto).select();

    //     document.execCommand("copy");

    //     $temp.remove();

    //     $.notify("Link copiado para a área de transferência");
    // });

    // $('.submit-form').on('click', function() {
    //     var id_form = '#'+$(this).data('form');

    //     var flag = 0;

    //     $('.obrigatorio').each(function() { 
    //         if( ! $(this).val()) {
    //             flag = 1;

    //             $(this).addClass('is-invalid');

    //             $.notify({
    //                 message: "O campo "+$(this).data('campo')+" é obrigatório"
    //             },{
    //                 type: 'danger',
    //             });
    //         }
    //     });

    //     console.log(id_form);

    //     if(flag != 1) {
    //         $(id_form).trigger('submit')
    //     }
    // });

    // $(document).on('change', '.obrigatorio', function (e) {
    //     if($(this).val()) {
    //         $(this).removeClass('is-invalid')
    //     }
    // });

    // inicia tooltip bootstrap
    $("body").tooltip({ selector: '[data-toggle=tooltip]' });

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

    // Mascaras
    $('.cpf').mask('000.000.000-00');
    $('.rg').mask('00.000.000-A');
    $('.contato').mask('(00)000000000');
    $('.cep').mask('00.000-000');
    $('.numero_endereco').mask('0-00');
    $('.mask-dois-n').mask('00');
    $('.mask-tres-n').mask('000');
});