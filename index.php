<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>        
        <!-- Include meta tag to ensure proper rendering and touch zooming -->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title></title>
        <link rel="stylesheet" href="Recursos/jquerymobile/jquery.mobile-1.4.5.min.css" />        
        <script src="Recursos/jquerymobile/jquery-1.11.3.min.js"></script>
        <script src="Recursos/jquerymobile/jquery.mobile-1.4.5.min.js"></script>        

        <!-- CARGAR ARCHIVOS ONLINE -->
        <!--        <link rel="stylesheet" href="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.css" />
                <script src="http://code.jquery.com/jquery-1.11.3.min.js"></script>
                <script src="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.js"></script>-->
    </head>
    <body>
        <div data-role="page">
            <div data-role="header">
                <h1>Introduccion a JQUERY MOBILE</h1>
                <h2>http://demos.jquerymobile.com/</h2>
            </div>

            <!-- target
   _blank	Opens the linked document in a new window or tab
   _self	Opens the linked document in the same frame as it was clicked (this is default)
   _parent	Opens the linked document in the parent frame
   _top	Opens the linked document in the full body of the window
   framename	Opens the linked document in a named frame
            -->

            <!-- EL TARGET _SELF EVITA QUE GENERE PROBLEMAS EN LA NAVEGACION INTERNA CON # -->
            <div data-role="main" class="ui-content">
                <a href="Vista/EstructuraPagina.php" target="_self">Estructura pagina</a><br>
                <a href="Vista/PaginaInterna.php" target="_self">Pagina interna</a><br>
                <a href="Vista/PaginaModal.php" target="_self">Pagina modal</a><br>
                <a href="Vista/Transicion.php" target="_self">Efectos</a><br>
                <a href="Vista/Botones.php" target="_self">Boton</a><br>                
                <a href="Vista/VentanaFlotante.php" target="_self">Ventana flotante</a><br>
                <a href="Vista/ToolBars.php" target="_self">Toolbars</a><br>
                <a href="Vista/EstructuraPagina2.php" target="_self">Estructura pagina 2</a><br>
                <a href="Vista/Paneles.php" target="_self">Paneles</a><br>
                <a href="Vista/Tablas.php" target="_self">Tablas</a><br>
                <a href="Vista/Listas.php" target="_self">Listas</a><br>
                <a href="Vista/Formularios.php" target="_self">Formularios</a><br>
                <a href="Vista/crearTemas.php" target="_self">Crear temas</a><br>                
                <a href="Vista/Eventos.php" target="_self">Eventos</a><br>        
                <a href="Vista/Persistencia.php" target="_self">GRIDS y Persistencia</a><br>   
                <a href="Vista/NavegacionProgramatica.php" target="_self">Navegacion programatica</a><br>
                <a href="Vista/ajax.php" target="_self">AJAX en JQUERY Mobile</a><br>                
                <a href="Vista/CargaSelectTable.php" target="_self">Carga SELECT - TABLE dinamicamente</a><br>
                <a href="Vista/Grid.php" target="_self">GRID</a><br>
                <a href="Vista/Imagenes_resize.php" target="_self">Imagenes Resize </a><br>
            </div>

            <div data-role="footer">
                <h1>Johnny Alexander Salazar Cardona</h1>
            </div>
        </div>

    </body>
</html>
