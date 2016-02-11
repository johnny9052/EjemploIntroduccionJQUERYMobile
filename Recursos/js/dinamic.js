//Solo se ejecuta 1 ves, cuando se carga la pagina por primera ves en el navegador
$(document).on('pagebeforecreate', '#pageDinamicElement', function (e, data) {

    $(document).ready(function () {
        $("#btnCargaSelect").click(cargarSelect);
        $("#btnCargaTable").click(cargarTabla);
    });


    function cargarSelect() {

        var select = $('#day');

        var temp = new Array();
        temp.push("option 1");
        temp.push("option 2");
        temp.push("option 3");
        temp.push("option 4");

        for (var x in temp) {
            var option = '<option value="' + temp[x] + '">' + temp[x] + '</option>';
            select.append(option);
        }

        //select.selectmenu();
        select.selectmenu('refresh', true);
    }


    function cargarTabla() {
        var newRows = " <tr>\n\
                            <td>1</td>\n\
                            <td>Alfreds Futterkiste</td>\n\
                            <td>Maria Anders</td>\n\
                            <td>Obere Str. 57</td>\n\
                            <td>Berlin</td>\n\
                            <td>12209</td>\n\
                            <td>Germany</td>\n\
                        </tr>";

        $("#myTable tbody")
                // Append the new rows to the body
                .append(newRows)
                // Call the refresh method
                .closest("#myTable")
                .table("refresh")
                // Trigger if the new injected markup contain links or buttons that need to be enhanced
                .trigger("create");
    }
});


