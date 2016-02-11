$(document).ready(function () {
    // Arranque general de todo
});

$(window).on("orientationchange", function (event) {
    alert("Orientation is: " + event.orientation);

    if (window.orientation == 0) // Portrait
    {
        $("label").css({"background-color": "yellow", "font-size": "300%"});
    }
    else // Landscape
    {
        $("label").css({"background-color": "pink", "font-size": "200%"});
    }
});


$(document).on("pagecreate", "#pageoneEvents", function () {
    //Inicio de una pagina especifica


    //Eventos TAP
    //$("p").on("tap", function () {
      //  $(this).hide();
    //});





    //Eventos TAP LARGO
    $("p").on("taphold", function () {
        $(this).hide();
    });


    //Evento de TAP LARGO A UN LADO
    $("label").on("swipe", function () {
        $("span").text("Swipe detected!");
    });



    //Evento de TAP LARGO A LA IZQUIERDA
    $("label").on("swipeleft", function () {
        alert("You swiped left!");
    });
});