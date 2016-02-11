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

        <script src="../Recursos/js/ajax.js"></script>

        <!-- CARGAR ARCHIVOS ONLINE -->
        <!--                <link rel="stylesheet" href="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.css" />
                        <script src="http://code.jquery.com/jquery-1.11.3.min.js"></script>
                        <script src="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.js"></script>-->
    </head>
    <body>
        <div data-role="page"  id="pageAjax">
            <div data-role="header">
                <h1>Insert Page Title Here</h1>
            </div>

            <div data-role="main" class="ui-content">

                <input type="text" name="fnumber1" id="txtNumero1" 
                       placeholder="Ingrese primer numero" data-clear-btn="true">

                <input type="text" name="fnumber2" id="txtNumero2" 
                       placeholder="Ingrese segundo numero" data-clear-btn="true">


                <input type="button" value="Sumar" data-icon="add" id="btnSumar">
            </div>

            <div data-role="footer">
                <h1>Insert Footer Text Here</h1>
            </div>
        </div>
    </body>
</html>
