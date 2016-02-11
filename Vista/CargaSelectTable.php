<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title></title>
        <link rel="stylesheet" href="../Recursos/jquerymobile/jquery.mobile-1.4.5.min.css" />        
        <script src="../Recursos/jquerymobile/jquery-1.11.3.min.js"></script>
        <script src="../Recursos/jquerymobile/jquery.mobile-1.4.5.min.js"></script>

        <script src="../Recursos/js/dinamic.js"></script>
        <!-- CARGAR ARCHIVOS ONLINE -->
        <!--                <link rel="stylesheet" href="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.css" />
                        <script src="http://code.jquery.com/jquery-1.11.3.min.js"></script>
                        <script src="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.js"></script>-->
    </head>
    <body>
        <div data-role="page"  id="pageDinamicElement">
            <div data-role="header">
                <h1>Insert Page Title Here</h1>
            </div>

            <div data-role="main" class="ui-content">
                <input type="button" value="Llenar select" id="btnCargaSelect">

                <fieldset class="ui-field-contain">                            
                    <select name="day" id="day" data-native-menu="true">
                        <option value="-1">Seleccione</option>                       
                    </select>
                </fieldset>




                <input type="button" value="Llenar tabla" id="btnCargaTable">

<!--                 data-mode= columntoggle aparecen filtros de columnas y prioridades -->
                <table data-role="table" data-mode="columntoggle" 
                       class="ui-responsive ui-shadow table-stroke" id="myTable">
                    <thead>
                        <tr>
                            <th  data-priority="6">CustomerID</th>
                            <th>CustomerName</th> <!-- Siempre aparece -->
                            <th  data-priority="1">ContactName</th>
                            <th  data-priority="2">Address</th>
                            <th  data-priority="3">City</th>
                            <th  data-priority="4">PostalCode</th>
                            <th  data-priority="5">Country</th>
                        </tr>
                    </thead>
                    <tbody>                       
                        <tr>
                            <td>2</td>
                            <td>Antonio Moreno Taquería</td>
                            <td>Antonio Moreno</td>
                            <td>Mataderos 2312</td>
                            <td>México D.F.</td>
                            <td>05023</td>
                            <td>Mexico</td>
                        </tr>                        
                    </tbody>
                </table>
            </div>

            <div data-role="footer">
                <h1>Insert Footer Text Here</h1>
            </div>
        </div>
    </body>
</html>
