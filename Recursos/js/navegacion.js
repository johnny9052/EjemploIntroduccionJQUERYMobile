$(document).on('pagebeforecreate', '#navegation1', function () {
    $(document).ready(function () {
        $("#btnToPage2").click(backToPage2);
    });
    function backToPage2() {
        $(':mobile-pagecontainer').pagecontainer('change', '#navegation2');
    }
});

$(document).on('pagebeforecreate', '#navegation2', function () {
    $(document).ready(function () {
        $("#btnToPage1").click(backToPage1);
    });
    function backToPage1() {
        $(':mobile-pagecontainer').pagecontainer('change', '#navegation1');
    }
});


