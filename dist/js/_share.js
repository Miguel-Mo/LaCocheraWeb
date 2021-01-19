

$(document).ready(function () {

    $.ajax({
        type: "GET",
        url: `http://localhost:1498/usuario/1`,
        dataType: "JSON",
        success: function (response) {
            console.log(response);

            const nombreCompleto = response.nombre + ' ' + response.apellidos;

            $('#topbar-usuario').text(nombreCompleto)
            $('#topbar-usuario-dropdown').text(nombreCompleto + ' - Web Developer')
            $('#nombre-perfil').text(nombreCompleto)
        }
    });

});