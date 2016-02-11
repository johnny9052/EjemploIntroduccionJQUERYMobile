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
        <div data-role="page"  id="pageoneExample">
            <div data-role="header">
                <h1>Insert Page Title Here</h1>
            </div>

            <!-- http://www.w3schools.com/jquerymobile/jquerymobile_popups.asp -->
            <div data-role="main" class="ui-content">                
                <a href="#myPopup" data-rel="popup" class="ui-btn" data-transition="pop">Pop</a>
                
                
                
                <a href="#myPopup" data-rel="popup" class="ui-btn" data-transition="fade">Fade</a>     
                <a href="#myPopupForm" data-rel="popup" class="ui-btn" data-transition="pop">Show Popup Form</a>
            </div>

            <!-- VENTANAS EMERGENTES -->
            <div data-role="popup" id="myPopup" class="ui-content">
                <p>This is a simple popup.</p>
            </div>

            <div data-role="popup" id="myPopupForm" class="ui-content" data-theme="b">
                
                    <div>
                        <h3>Login information</h3>
                        <label for="usrnm" class="ui-hidden-accessible">Username:</label>
                        <input type="text" name="user" id="usrnm" placeholder="Username">
                        <label for="pswd" class="ui-hidden-accessible">Password:</label>
                        <input type="password" name="passw" id="pswd" placeholder="Password">
                        <label for="log">Keep me logged in</label>
                        <input type="checkbox" name="login" id="log" value="1" data-mini="true">
                        <input type="submit" data-inline="true" value="Log in">
                    </div>
                
            </div>

        </div>

        <div data-role="footer">
            <h1>Insert Footer Text Here</h1>
        </div>
    </div>
</body>
</html>
