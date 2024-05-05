<?php include("db.php"); ?>

<?php

    if(isset($_POST["create_liga"])){
        $nLiga = $_POST["nomLiga"];
        $nPais = $_POST["nPais"];
        
        $query = "INSERT INTO ligas(nombreLiga, pais) VALUES ('$nLiga', '$nPais')";
        $result = mysqli_query($conn, $query); 
        if(!$result){
            die("Query Failed");
        }       
    }
    
    $_SESSION['message'] = 'Agregado!';
    $_SESSION['message_type'] = 'success';

    header("Location: indexLiga.php");

?>