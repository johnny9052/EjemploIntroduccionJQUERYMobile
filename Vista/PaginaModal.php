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
        <div data-role="page" id="pageoneModal">
            <div data-role="header">
                <h1>Welcome To My Homepage</h1>
            </div>

            <div data-role="main" class="ui-content">
                <p>Welcome!</p>
                <a href="#pagetwoModal">Go to Dialog Page</a>
            </div>

            <div data-role="footer">
                <h1>Footer Text</h1>
            </div>
        </div> 

        <div data-role="page" data-dialog="true" id="pagetwoModal">
            <div data-role="header">
                <h1>I'm A Dialog Box!</h1>
            </div>

            <div data-role="main" class="ui-content">
                <p>The dialog box is different from a normal page, it is displayed on top of the current page and it will not span the entire width of the page. The dialog has also an icon of "X" in the header to close the box.</p>
                <a href="#pageoneModal">Go to Page One</a>
            </div>

            <div data-role="footer">
                <h1>Footer Text In Dialog</h1>
            </div>
        </div> 

    </body>
</html>
