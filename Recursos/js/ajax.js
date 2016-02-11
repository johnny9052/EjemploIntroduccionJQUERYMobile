$(document).on('pagebeforecreate', '#pageAjax', function () {

    $(document).ready(function () {
        $("#btnSumar").click(sumar);
    });

    function sumar() {       
        var num1 = $("#txtNumero1").val();
        var num2 = $("#txtNumero2").val();
        $.mobile.loading('show', {theme: "b", 
            text: "espere..", textonly: false, textVisible: true});
        $.ajax({
            type: 'post',
            url: "../Controlador/prueba.php",
            data: {num1: num1, num2: num2},
            success: function (data) {
                $.mobile.loading('hide');
                var aux = JSON.parse(data);
                alert(aux[0].res);
            },
            error: function (jqXHR, textStatus, errorThrown) {
                $.mobile.loading('hide');
                alert("Error detectado: " + textStatus + "\nExcepcion: " + 
                        errorThrown);
            }
        });
    }
});


