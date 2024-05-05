<?php
include ("db.php");

if (isset($_GET["id"])) {
    $id = $_GET["id"];
    $sql = "SELECT * FROM ligas WHERE idLiga = $id";

    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) == 1) {
        $row = mysqli_fetch_array($result);
        $id = $row["idLiga"];
        $nLiga = $row["nombreLiga"];
        $nPais = $row["pais"];
    }
}

?>

<?php include ("includes/header.php"); ?>

<div class="container p-4">
    <div class="row">
        <div class="col-md-4 mx-auto">
            <div class="card card-body">
                <h2>Editar Liga</h2>
                <form action="editLiga.php?id=<?php echo $_GET['id'];?>" method="POST">
                    <div class="form-group">
                        <input type="text" name="id" class="form-control" value="<?php echo $id?>" readonly>
                    </div>
                    <div class="form-group">
                        <input type="text" name="nomLiga" class="form-control" placeholder="Actualizar nombre liga" value="<?php echo $nLiga?>" autofocus>
                    </div>
                    <select class="form-select" aria-label="Selecciona el pais" name="nPais">
                    <option style="display:none;" selected><?php echo $nPais?></option>
                        <?php 
                        $query = "SELECT * FROM paises";
                        $result_paises = mysqli_query($conn, $query);  

                        while($row = mysqli_fetch_array($result_paises)){ ?>
                            <option value="<?php echo $row['nombrePais'] ?>">
                                <?php echo $row['nombrePais'] ?>
                            </option>
                        <?php } ?>
                    </select>
                    <input type="submit" name="update_liga" class="btn btn-success btn-block" value="Actualizar">
                </form>
            </div>
        </div>
    </div>
</div>

<?php include ("includes/footer.php"); ?>

<?php 
if(isset($_POST["update_liga"])) {
    $id = $_GET["id"];
    $nLigaNew = $_POST['nomLiga'];
    $nPaisNew = $_POST['nPais'];
    $sqlNew = "UPDATE ligas SET nombreLiga = '$nLigaNew', pais = '$nPaisNew' WHERE idLiga = $id";
    $resultNew = mysqli_query($conn, $sqlNew);
    if(!$resultNew){
        die('Query Failed');
    }
    $_SESSION['message'] = 'Actualizado!';
    $_SESSION['message_type'] = 'warning';
    header('Location: indexLiga.php');
}
?>