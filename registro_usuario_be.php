<?php

    include 'db.php';

    $nombre_completo = $_POST['nombre_completo'];
    $correo = $_POST['correo'];
    $usuario = $_POST['usuario'];
    $contrasena = $_POST['contrasena'];
    
    $query = "INSERT INTO tblusuarios(nombre_completo, correo, usuario, contrasena) VALUES('$nombre_completo','$correo','$usuario','$contrasena')";
    
    //verificar que el correo no se repita en la base de datos

    
    
    $verificar_correo = mysqli_query($conn, "SELECT * FROM tblusuarios where correo ='$correo' ");
    if(mysqli_num_rows($verificar_correo) > 0){

        echo '
            <script>
                alert("El Correo ya estan en uso, intentalo con otro diferente");
                window.location = "index.php"
            </script>
        ';
        
        exit();

    }
    $verificar_usuario = mysqli_query($conn, "SELECT * FROM tblusuarios where usuario ='$usuario' ");
    if(mysqli_num_rows($verificar_usuario) > 0){

        echo '
            <script>
                alert("Usuario ya estan en uso, intentalo con otro diferente");
                window.location = "index.php"
            </script>
        ';
        
        exit();

    }
    $ejecutar = mysqli_query($conn, $query);

    if($ejecutar){
        echo '
            <script>
                alert("se ah almacenado exitosamente");
                window.location = "inicio.php";
            </script>
        ';
        
    }else{
        echo '
            <script>
                alert("intentalo de nuevo, hubo un error");
                window.location = "inicio.php";
            </script>
        ';
    }

    mysqli_close($conn);