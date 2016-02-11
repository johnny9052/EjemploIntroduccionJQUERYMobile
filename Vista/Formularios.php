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
        <div data-role="page"  id="pageoneExample">
            <div data-role="header" data-theme="b" data-position="fixed">
                <h1>Insert Page Title Here</h1>
            </div>

            <div data-role="main" class="ui-content">
                <form method="post" action="demoform.php">
                    <label for="fname">First name:</label>
                    <input type="text" name="fname" id="fname" 
                           placeholder="First name..." data-clear-btn="true">

                    <label for="bday">Date of Birth:</label>
                    <input type="date" name="bday" id="bday">


                    <label for="info">Additional Information:</label>
                    <textarea name="addinfo" id="info"></textarea>

                    <input type="button" value="Useless Button" data-icon="alert">

                    <input type="reset" value="Limpiar campo" data-inline="true">

                    <input type="submit" value="Submit Button">



                    <fieldset data-role="controlgroup">
                        <legend>Choose your gender:</legend>
                        <label for="male">Male</label>
                        <input type="radio" name="gender" id="male" value="male" checked>
                        <label for="female">Female</label>
                        <input type="radio" name="gender" id="female" value="female">	
                    </fieldset>






                    <fieldset data-role="controlgroup" data-type="horizontal">
                        <legend>Choose as many favorite colors as you'd like:</legend>
                        <label for="red">Red</label>
                        <input type="checkbox" name="favcolor" id="red" value="red" checked>
                        <label for="green">Green</label>
                        <input type="checkbox" name="favcolor" id="green" value="green">
                        <label for="blue">Blue</label>
                        <input type="checkbox" name="favcolor" id="blue" value="blue">	
                    </fieldset>


                    <fieldset class="ui-field-contain">                            
                        <select name="day" id="day" data-native-menu="false">
                            <option value="mon">Monday</option>
                            <option value="tue">Tuesday</option>
                            <option value="wed">Wednesday</option>
                            <option value="thu">Thursday</option>
                            <option value="fri">Friday</option>
                            <option value="sat">Saturday</option>
                            <option value="sun">Sunday</option>
                        </select>
                    </fieldset>
                    
                    
                    
                    <input type="checkbox" 
                           data-role="flipswitch" name="switch" id="switch" 
                           data-on-text="Si" data-off-text="No" checked>
                    </div>
            
            
            
            
            
            

                    <div data-role="footer" data-theme="b" data-position="fixed">
                        <h1>Insert Footer Text Here</h1>
                    </div>
            </div>
    </body>
</html>
