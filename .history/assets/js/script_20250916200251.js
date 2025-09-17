function salvar() {

    $.ajax({
        url: '/path/teste.php',
        type: 'POST',
        cache: false,
        data: $('#form_teste').serialize(),
        success: (response) => {

            preload_hide();
            if (modo_dev()) console.log(response);
            resposta(response);

            var json = $.parseJSON(response);
            if (json['result'] == 'success') {
                // Código...
            }

        },
        error: () => {
            preload_hide();
            error('<b>NÃO FOI realizar [BLABLABLA] NO NOMENTO!</b>');
        }
    });

}