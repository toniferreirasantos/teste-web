function salvar() {

    $.ajax({
        url: 'backend/insert.php',
        type: 'POST',
        cache: false,
        data: $('#form_cadastro').serialize(),
        success: (response) => {

            console.log(response);
            

        },
        error: () => {
            
        }
    });

}

