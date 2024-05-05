<?php
    include 'db.php';
    

    $correo_inicio = $_POST['correo_inicio'];
    $contrasena_inicio = $_POST['contrasena_inicio'];
    $query2 = "SELECT * FROM tblusuarios WHERE correo = '$correo_inicio' AND contrasena = '$contrasena_inicio'";
    
    $resultado = mysqli_query($conn, $query2);
      
        if (mysqli_num_rows($resultado) > 0) {
            echo '
                <script>
                    alert("sesion iniciada correctamente");
                    window.location = "index.php"
                </script> 

                
            ';
            session_start();
                $_SESSION['correo'] = $correo_inicio;
        }else{
            echo '
                <script>
                    alert("correo o contraseña incorrectos, vuelve a intentarlo");
                    window.location = "index.php"
                </script>   
            ';
        }


        mysqli_close($conn);
      


?>