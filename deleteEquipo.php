<?php 

    include("db.php"); 

    if(isset($_GET['id'])){
        $id = $_GET['id'];

        $sql = "DELETE FROM equipos WHERE idEquipo = $id";
        $result = mysqli_query($conn, $sql);
    }
    if(!$result){
        die('Query Failed');
    }

    $_SESSION['message'] = 'Eliminado!';
    $_SESSION['message_type'] = 'danger';
    header('Location: indexEquipo.php');
?>