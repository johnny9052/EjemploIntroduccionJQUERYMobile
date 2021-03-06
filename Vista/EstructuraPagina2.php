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
        <div data-role="page" id="pageone2">
            <div data-role="header">
                <h1>Welcome To My Homepage</h1>
                <div data-role="navbar">
                    <ul>
                        <li><a href="#" class="ui-btn-active ui-state-persist" data-icon="home">Home</a></li>
                        <li><a href="#pagetwo2" data-icon="arrow-r">Page Two</a></li>
                    </ul>
                </div>
            </div>

            <div data-role="main" class="ui-content">
                <p>With the ui-btn-active class, notice that the Home button stays highlighted (selected).</p>
                <p>Click on the Page Two button to see what happens.</p>
            </div>

            <div data-role="footer">
                <h1>My Footer</h1>
            </div> 
        </div> 

        <div data-role="page" id="pagetwo2">
            <div data-role="header">
                <h1>Welcome To My Homepage</h1>
                <div data-role="navbar">
                    <ul>
                        <li><a href="#pageone2" data-icon="home">Home</a></li>
                        <li><a href="#" class="ui-btn-active ui-state-persist" data-icon="arrow-r">Page Two</a></li>
                    </ul>
                </div>
            </div>

            <div data-role="main" class="ui-content">
                <p>This page will also have its button highlighted, because of the ui-btn-active class.</p> 
                <p>And if you go back to the "Home" page, you will notice that the state of that page will continue to exist, and vice versa DUE TO THE CLASS UI-STATE-PERSIST!</p>
            </div>

            <div data-role="footer">
                <h1>My Footer</h1>
            </div>
        </div> 
    </body>
</html>
