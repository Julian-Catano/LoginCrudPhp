<?php include("db.php"); ?>

<?php

    if(isset($_POST["create_pais"])){
        $nPais = $_POST["nomPais"];

        $query = "INSERT INTO paises(nombrePais) VALUES ('$nPais')";
        $result = mysqli_query($conn, $query); 
        if(!$result){
            die("Query Failed");
        }       
    }
    
    $_SESSION['message'] = 'Pais agregado';
    $_SESSION['message_type'] = 'success';

    header("Location: indexPais.php");

?>