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

            <div data-role="main" class="ui-content">

                <h2>List Dividers</h2>
                <ul data-role="listview" data-inset="true">
                    <li data-role="list-divider">Europe</li>
                    <li data-icon="plus"><a href="#"><img src="../Recursos/imagenes/gb.png" class="ui-li-icon">Norway</a></li>
                    <li data-icon="minus"><a href="#"><img src="../Recursos/imagenes/germany.png" class="ui-li-icon">Germany</a></li>
                    <li data-role="list-divider">Asia</li>
                    <li data-icon="delete"><a href="#"><img src="../Recursos/imagenes/us.png" class="ui-li-icon">India</a></li>
                    <li data-icon="location"><a href="#">Thailand</a></li>
                    <li data-role="list-divider">Africa</li>
                    <li data-icon="false"><a href="#">Zimbabwe</a></li>
                    <li><a href="#">Uganda</a></li>
                </ul>


                <br>


                <h2>Autodividers</h2>
                <ul data-role="listview" data-autodividers="true" data-inset="true">
                    <li><a href="#">Adele</a></li>
                    <li><a href="#">Agnes</a></li>
                    <li><a href="#">Albert</a></li>
                    <li><a href="#">Billy</a></li>
                    <li><a href="#">Bob</a></li>
                    <li><a href="#">Calvin</a></li>
                    <li><a href="#">Cameron</a></li>
                    <li><a href="#">Chloe</a></li>
                    <li><a href="#">Christina</a></li>
                    <li><a href="#">Diana</a></li>
                    <li><a href="#">Gabriel</a></li>
                    <li><a href="#">Glen</a></li>
                    <li><a href="#">Ralph</a></li>
                    <li><a href="#">Valarie</a></li>
                </ul>


                <br> 
                <h2>Filtros</h2>


                <form class="ui-filterable">
                    <input id="myFilter" data-type="search" placeholder="Search for names..">
                </form>
                
                <ul data-role="listview" data-filter="true" data-input="#myFilter" 
                    data-autodividers="true" data-inset="true">
                    <li><a href="#">Adele</a></li>
                    <li><a href="#">Agnes</a></li>
                    <li><a href="#">Albert</a></li>
                    <li><a href="#">Billy</a></li>
                    <li><a href="#">Bob</a></li>
                    <li><a href="#">Calvin</a></li>
                    <li><a href="#">Cameron</a></li>
                    <li><a href="#">Chloe</a></li>
                    <li><a href="#">Christina</a></li>
                    <li><a href="#">Diana</a></li>
                    <li><a href="#">Gabriel</a></li>
                    <li><a href="#">Glen</a></li>
                    <li><a href="#">Ralph</a></li>
                    <li><a href="#">Valarie</a></li>
                </ul>


            </div>

            <div data-role="footer">
                <h1>Insert Footer Text Here</h1>
            </div>
        </div>
    </body>
</html>
