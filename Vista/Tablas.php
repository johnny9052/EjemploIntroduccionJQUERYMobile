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

        <!-- CARGAR ARCHIVOS ONLINE -->
        <!--                <link rel="stylesheet" href="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.css" />
                        <script src="http://code.jquery.com/jquery-1.11.3.min.js"></script>
                        <script src="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.js"></script>-->


        <style>
            tr {
                border-bottom: 1px solid lightgray;
            }

            th {
                border-bottom: 1px solid #d6d6d6;
            }

            tr:nth-child(even) {
                background: #e9e9e9;
            }
        </style>

    </head>    

    <body>
        <div data-role="page" id="pageone">
            <div data-role="header">
                <h1>Reflow Table</h1>
            </div>

            <div data-role="main" class="ui-content">

                <!-- data-mode= columntoggle aparecen filtros de columnas y prioridades -->
                <table data-role="table" data-mode="columntoggle" 
                       class="ui-responsive ui-shadow" id="myTable">
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
                            <td>1</td>
                            <td>Alfreds Futterkiste</td>
                            <td>Maria Anders</td>
                            <td>Obere Str. 57</td>
                            <td>Berlin</td>
                            <td>12209</td>
                            <td>Germany</td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>Antonio Moreno Taquería</td>
                            <td>Antonio Moreno</td>
                            <td>Mataderos 2312</td>
                            <td>México D.F.</td>
                            <td>05023</td>
                            <td>Mexico</td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>Around the Horn</td>
                            <td>Thomas Hardy</td>
                            <td>120 Hanover Sq.</td>
                            <td>London</td>
                            <td>WA1 1DP</td>
                            <td>UK</td>
                        </tr>
                        <tr>
                            <td>4</td>
                            <td>Berglunds snabbköp</td>
                            <td>Christina Berglund</td>
                            <td>Berguvsvägen 8</td>
                            <td>Luleå</td>
                            <td>S-958 22</td>
                            <td>Sweden</td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <div data-role="footer">
                <h1>Footer Text</h1>
            </div>
        </div> 

    </body>
</html>
