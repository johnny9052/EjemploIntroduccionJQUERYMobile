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

        <script src="../Recursos/js/navegacion.js"></script>


        <!-- CARGAR ARCHIVOS ONLINE -->
        <!--                <link rel="stylesheet" href="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.css" />
                        <script src="http://code.jquery.com/jquery-1.11.3.min.js"></script>
                        <script src="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.js"></script>-->
    </head>
    <body>
        <div data-role="page"  id="navegation1">
            <div data-role="header">
                <h1>Pagina 1 </h1>
            </div>

            <div data-role="main" class="ui-content">
                <p>Contenido 1</p>
                <input type="button" value="a pagina 2" id="btnToPage2">
            </div>

            <div data-role="footer">
                <h1>Insert Footer Text Here</h1>
            </div>
        </div>

        <div data-role="page"  id="navegation2">
            <div data-role="header">
                <h1>Pagina 2</h1>
            </div>

            <div data-role="main" class="ui-content">
                <p>Contenido 2</p>
                <input type="button" value="a pagina 1" id="btnToPage1">
            </div>

            <div data-role="footer">
                <h1>Insert Footer Text Here</h1>
            </div>
        </div>
    </body>
</html>
