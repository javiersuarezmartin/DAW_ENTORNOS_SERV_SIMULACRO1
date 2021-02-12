<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Grupo - Alumnos</title>
        <link rel="stylesheet" href="../css/styles.css" type="text/css">
    </head>
    <body>
        <div class="container-global">
           
            <div class="grid">
                
                <?php
                    if (isset($_POST['nombre']) && isset($_POST['edad']) && isset($_POST['curso']) && isset($_POST['nombre2']) && isset($_POST['edad2']) && isset($_POST['curso2'])) {
                        // Incluimos el archivo con el código del objeto Alumno
                        include './Alumno.php';
                        
                        // Declaramos dos nuevos objetos Alumno
                        $alumno1 = new Alumno($_POST['nombre'], $_POST['edad'], $_POST['curso']);
                        $alumno2 = new Alumno($_POST['nombre2'], $_POST['edad2'], $_POST['curso2']);
                                
                        // Imprimimos los datos utilizando el método mostrarDatos();
                        
                        // Mostramos Alumno_1                            
                        
                        echo('<div class="container">');
                        echo('<img src="../img/alumno.svg" class="logo" alt="Alumno">');
                        echo('<h1>DATOS ALUMNO</h1>');                        
                        echo($alumno1->mostrarDatos());
                        echo('</div>');

                        // Mostramos Alumno_2
                        echo('<div class="container">');
                        echo('<img src="../img/alumno.svg" class="logo" alt="Alumno">');
                        echo('<h1>DATOS ALUMNO</h1>');                        
                        echo($alumno2->mostrarDatos());
                        echo('</div>');
                    } else {
                        echo('<div class="container">');
                        echo ('<p>No ha completado correctamente los datos del formulario</p>');
                        echo('</div>');
                    };  
    
                ?>
               
            </div>
            <br>
            <a href="../html/index.html" class="btn">Volver</a>       
        </div>
        
    </body>
</html>