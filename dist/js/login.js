var Login = function () {

    var handler = function () {
        const $login = $('#login'), $usuario = $('#usuario'), $pass = $('#pass');


        $login.click((e) => {
            e.preventDefault();

            $.ajax({
                type: "POST",
                url: 'http://localhost:1498/login',
                dataType : 'JSONP',
                data: { usuario : $usuario.val(), password : $pass.val() },
                success: function(response) {
                    console.log(response);
                },
                error: function(request,erroType,errorMessage) {

                    if (errorMessage === 'timeout')
                        errorMessage = 'Problema al conectar con la API'

                    Swal.fire({
                        title: '¡Error!',
                        text: errorMessage,
                        icon: 'error',
                        confirmButtonText: 'De acuerdo',
                        confirmButtonColor: '#2A9D8F' 
                    })
                },
                timeout: 3000
            });
        })
    }

    return {
        init: function () {
            handler();
        }
    };
}();
