<?php include("db.php"); ?>

<?php

    if(isset($_POST["create_equipo"])){
        $nEquipo = $_POST["nomEquipo"];
        $nLiga = $_POST["nLiga"];
        $nPais = $_POST["nPais"];
        
        $query = "INSERT INTO equipos(nombreEquipo, pais, liga) VALUES ('$nEquipo', '$nPais', '$nLiga')";
        $result = mysqli_query($conn, $query); 
        if(!$result){
            die("Query Failed");
        }       
    }
    
    $_SESSION['message'] = 'Agregado!';
    $_SESSION['message_type'] = 'success';

    header("Location: indexEquipo.php");

?>