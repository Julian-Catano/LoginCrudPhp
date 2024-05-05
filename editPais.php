<?php
include ("db.php");

if (isset($_GET["id"])) {
    $id = $_GET["id"];
    $sql = "SELECT * FROM paises WHERE idPais = $id";

    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) == 1) {
        $row = mysqli_fetch_array($result);
        $id = $row["idPais"];
        $nPais = $row["nombrePais"];
    }
}

?>

<?php include ("includes/header.php"); ?>

<div class="container p-4">
    <div class="row">
        <div class="col-md-4 mx-auto">
            <div class="card card-body">
                <h2>Editar pais</h2>
                <form action="editPais.php?id=<?php echo $_GET['id'];?>" method="POST">
                    <div class="form-group">
                        <input type="text" name="id" class="form-control" value="<?php echo $id?>" readonly>
                    </div>
                    <div class="form-group">
                        <input type="text" name="nomPais" class="form-control" placeholder="Actualizar nombre pais" value="<?php echo $nPais?>" autofocus>
                    </div>
                    <input type="submit" name="update_pais" class="btn btn-success btn-block" value="Actualizar">
                </form>
            </div>
        </div>
    </div>
</div>

<?php include ("includes/footer.php"); ?>

<?php 
if(isset($_POST["update_pais"])) {
    $id = $_GET["id"];
    $nPaisNew = $_POST['nomPais'];
    $sqlNew = "UPDATE paises SET nombrePais = '$nPaisNew' WHERE idPais = $id";
    $resultNew = mysqli_query($conn, $sqlNew);
    if(!$resultNew){
        die('Query Failed');
    }
    $_SESSION['message'] = 'Actualizado!';
    $_SESSION['message_type'] = 'warning';
    header('Location: indexPais.php');
}
?>