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
                    alert("EY")
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
