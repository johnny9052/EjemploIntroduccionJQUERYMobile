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
    </head>
    <body>
        <div data-role="page"  id="pageoneBtn">
            <div data-role="header">
                <h1>Botones</h1>
            </div>

            <div data-role="main" class="ui-content">
                <input type="button" value="Button">

                <br>

                <label>Boton enlace</label>                
                <a href="#pagetwobtn" class="ui-btn">Go to Page Two</a>                               


                <br>

                <!--LISTADO DE ICONOS http://www.w3schools.com/jquerymobile/jquerymobile_ref_icons.asp -->

                <label>Iconos</label>
                <a href="#anylink" class="ui-btn ui-icon-search ui-btn-icon-top">Top</a>
                <a href="#anylink" class="ui-btn ui-icon-save ui-btn-icon-right">Right</a>
                <a href="#anylink" class="ui-btn ui-icon-delete ui-btn-icon-bottom">Bottom</a>
                <a href="#anylink" class="ui-btn ui-icon-search ui-btn-icon-left">Left</a>

                <br>

                <label>Mostrar solo icono</label>
                <a href="#anylink" class="ui-btn ui-icon-search ui-btn-icon-notext">Search</a>
                
                
                <label>Mostrar solo icono sin circulo</label>
                <a href="#anylink" class="ui-btn ui-btn-b ui-icon-search ui-btn-icon-left 
                   ui-nodisc-icon">Without circle</a>
                   
                <label>Icono oscuro</label>
                <a href="#anylink" class="ui-btn ui-icon-search ui-btn-icon-left 
                   ui-alt-icon">Black</a>
                <br>

                <div data-role="controlgroup" data-type="horizontal">
                    <a href="#" class="ui-btn">Button 1</a>
                    <a href="#" class="ui-btn ui-btn-b">Button 2</a>
                    <a href="#" class="ui-btn ui-mini">Button 3</a>
                </div>

                <br>

                <label>Boton de regresar</label>
                <a href="#" class="ui-btn" data-rel="back">Go Back</a>

                
                
                
                <br>
                <label>Boton inline para auto ajustar al texto</label>
                <a href="#pagetwobtn" class="ui-btn ui-btn-inline">Go to Page Two</a>
            </div>

            <div data-role="footer">
                <h1>Insert Footer Text Here</h1>
            </div>
        </div>


        <div data-role="page" data-dialog="true" id="pagetwobtn">
            <div data-role="header">
                <h1>I'm A Dialog Box!</h1>
            </div>

            <div data-role="main" class="ui-content">
                <p>The dialog box is different from a normal page, it is displayed on top of the current page and it will not span the entire width of the page. The dialog has also an icon of "X" in the header to close the box.</p>
                <a href="#pageonebtn">Go to Page One</a>
            </div>

            <div data-role="footer">
                <h1>Footer Text In Dialog</h1>
            </div>
        </div> 
    </body>
</html>
