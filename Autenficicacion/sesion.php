<!-- Autenticación de los usuarios -->
<?php
    require('../../Conexion/bd.php');

    //Recibimos las dos variables
    $cc = $_POST["cc"];
    $contrasena = $_POST["contrasena"];

    /* Realizamos una consulta por cada tabla (de usuarios) para buscar en que tabla se encuentra el usuario que está intentando acceder */
    $admin = ("SELECT * FROM admin WHERE admin.id = '$cc' AND contrasena = '$contrasena'");
    $docentes = ("SELECT * FROM docentes WHERE docentes.id = '$cc' AND contrasena = '$contrasena'");
    $estudiantes = ("SELECT * FROM estudiantes WHERE estudiantes.id = '$cc' AND contrasena = '$contrasena'");

    /* En el caso que se encuentre el usuario en alguna tabla se guardará en un variable que guardan nuestra consulta según el tipo de usuario */
    $result1 = mysqli_query($connection, $admin) or die(mysqli_error($connection)); $count1 = mysqli_num_rows($result1);
    $result2 = mysqli_query($connection, $docentes) or die(mysqli_error($connection)); $count2 = mysqli_num_rows($result2);
    $result3 = mysqli_query($connection, $estudiantes) or die(mysqli_error($connection)); $count3 = mysqli_num_rows($result3);


    /* Comprobamos que variable contiene al usuario*/
    if ($count1 == 1) {
        /*  Se crea una sesión */
        session_start();
        $_SESSION['admin'] = "$cc";

        /* Se redirige al index según el tipo de usuario */
        header("Location: ..Vistas/Intercambios/index.php");
        exit();
    }

    else if ($count2 == 1) {
        session_start();
        $_SESSION['docentes'] = "$cc";
        header("Location: ../Vistas/Docente/indexDocente.php");
        exit();
    }
    
    else if ($count3 == 1) {
        session_start();
        $_SESSION['estudiantes'] = "$cc";
        header("Location: ../Vistas/Estudiante/indexEstudiante.php");
        exit();
    } else {
        /* Si no el usuario no se encuentra en ninguna de las tres tablas muestra un mensaje */
        $noPuedeAcceder = "El usuario y/o la contraseña son incorrectos, por favor verifique y vuelva a introducirlos.";
        echo $noPuedeAcceder;

        /* Se redirige al index principal */
        header("Location: ../index.php");
    }
?>