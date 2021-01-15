var Login = function () {

    var handler = function () {
        const $login = $('#login'), $usuario = $('#usuario'), $pass = $('#pass');


        $login.click((e) => {
            e.preventDefault();

            if (!$usuario.val() || !$pass.val()) return;

            $.ajax({
                type: "POST",
                url: 'http://localhost:1498/login',
                dataType: 'json',
                contentType: 'application/json',
                data: JSON.stringify({ usuario : $usuario.val(), password : $pass.val() }),
                success: function(response) {
                    
                    if (!response) {
                        console.log('error');
                        return;
                    } 

                    window.location.replace("/content/dashboard.php");
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
