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

        <!-- EFECTOS DISPONIBLES http://www.w3schools.com/jquerymobile/jquerymobile_transitions.asp -->

        <div data-role="page" id="pageoneTrans">
            <div data-role="header">
                <h1>Welcome To My Homepage</h1>
            </div>

            <div data-role="main" class="ui-content">
                <p>Welcome! If you click on the link below, it will take you to Page Two.</p>
<!--                <a href="#pagetwoTrans" data-transition="slide">Go to Page Two</a>-->
                <a href="#pagetwoTrans" data-transition="flow">Go to Page Two #2 </a>
            </div>

            <div data-role="footer">
                <h1>Footer Text</h1>
            </div>
        </div> 

        <div data-role="page" id="pagetwoTrans">
            <div data-role="header">
                <h1>Welcome To My Homepage</h1>
            </div>

            <div data-role="main" class="ui-content">
                <p>This is Page Two. If you click on the link below, it will take you to Page One.</p>
<!--                <a href="#pageoneTrans" data-transition="slide" data-direction="reverse">Go to Page One</a>-->
                <a href="#pageoneTrans" data-transition="flip">Go to Page One</a>                
            </div>

            <div data-role="footer">
                <h1>Footer Text</h1>
            </div>
        </div> 
    </body>
</html>
