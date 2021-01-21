var Login = function () {

    var handler = function () {
        const $login = $('#login'), 
            $usuario = $('#usuario'), $pass = $('#pass'), 
            form = document.getElementById('form');


        $login.click((e) => {
            e.preventDefault();

            if (!form.reportValidity()) return;

            $.ajax({
                type: "POST",
                url: 'http://localhost:1498/login',
                dataType: 'json',
                contentType: 'application/json',
                data: JSON.stringify({ usuario : $usuario.val(), password : $pass.val() }),
                success: function(response) {
                    
                    if (!response) {
                        Swal.fire({
                            title: '¡Error!',
                            html: `Fallo en el usuario o la contraseña`,
                            icon: 'error',
                            confirmButtonText: 'De acuerdo',
                            confirmButtonColor: '#2A9D8F' 
                        })
                        return;
                    } 

                    window.location.replace("/dashboard");
                },
                error: function(request,erroType,errorMessage) {

                    if (errorMessage === 'timeout')
                        errorMessage = 'Problema al conectar con la API'

                    Swal.fire({
                        title: '¡Error!',
                        html: `<p>Status Error: ${request.status}</p>
                               <p>errorMessage: ${errorMessage}</p>`,
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
