function salvar() {

    $.ajax({
        url: 'backend/insertee.php',
        type: 'POST',
        cache: false,
        data: $('#form_cadastro').serialize(),
        success: (response) => {
            console.log(response);
        },
        error: (error) => {
            console.log('teste de erro');
            
        }
    });

}

