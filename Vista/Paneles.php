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

        <div data-role="page" id="pageonePanel">


            <!--PANEL #1 data-display= efecto   data-dismissible= solo cerrar deslizando data-position= ubicacion -->
            <div data-role="panel" id="overlayPanel" 
                 data-display="overlay" data-dismissible="false" data-position="right"> 
                <h2>Overlay Panel</h2>
                <p>You can close the panel by clicking outside the panel, pressing the Esc key, by swiping, or by clicking the button below:</p>
                <a href="#pageonePanel" data-rel="close" class="ui-btn ui-btn-inline ui-shadow ui-corner-all ui-btn-a ui-icon-delete ui-btn-icon-left">Close panel</a>
            </div> 

            <!--PANEL #2 -->
            <div data-role="panel" id="revealPanel" 
                 data-display="reveal" data-dismissible="false" data-position="left"
                 data-position-fixed="true"> 
                <h2>Reveal Panel</h2>
                <p>You can close the panel by clicking outside the panel, pressing the Esc key, by swiping, or by clicking the button below:</p>
                <a href="#pageonePanel" data-rel="close" class="ui-btn ui-btn-inline ui-shadow ui-corner-all ui-btn-a ui-icon-delete ui-btn-icon-left">Close panel</a>
            </div> 

            <!--PANEL #3 -->
            <div data-role="panel" id="pushPanel" data-display="push" data-dismissible="false" data-position="left"> 
                <h2>Push Panel</h2>
                <p>You can close the panel by clicking outside the panel, pressing the Esc key, by swiping, or by clicking the button below:</p>
                <a href="#pageonePanel" data-rel="close" class="ui-btn ui-btn-inline ui-shadow ui-corner-all ui-btn-a ui-icon-delete ui-btn-icon-left">Close panel</a>
            </div> 


            <!-- ESTRUCTURA PAGINA -->
            <div data-role="header">
                <h1>Page Header</h1>
            </div>

            <div data-role="main" class="ui-content">
                <p>Click on one of the the buttons to open the Panel with different display modes.</p>
                
                <a href="#overlayPanel" 
                   class="ui-btn ui-btn-inline ui-corner-all ui-shadow">Overlay Panel</a>
                   
                <a href="#revealPanel" class="ui-btn ui-btn-inline ui-corner-all ui-shadow">Reveal Panel</a>
                <a href="#pushPanel" class="ui-btn ui-btn-inline ui-corner-all ui-shadow">Push Panel</a>
            </div>

            <div data-role="footer">
                <h1>Page Footer</h1>
            </div> 
        </div> 





    </body>
</html>
