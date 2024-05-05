
<?php
ob_start();
include ("db.php");

if (isset($_GET["id"])) {
    $id = $_GET["id"];
    $sql = "SELECT * FROM equipos WHERE idEquipo = $id";

    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) == 1) {
        $row = mysqli_fetch_array($result);
        $id = $row["idEquipo"];
        $nEquipo = $row["nombreEquipo"];
        $nLiga = $row["liga"];
        $nPais = $row["pais"];
    }
}

?>

<?php include ("includes/header.php"); ?>

<div class="container p-4">
    <div class="row">
        <div class="col-md-4 mx-auto">
            <div class="card card-body">
                <h2>Editar Equipo</h2>
                <form action="editEquipo.php?id=<?php echo $_GET['id'];?>" method="POST">
                    <div class="form-group">
                        <input type="text" name="id" class="form-control" value="<?php echo $id?>" readonly>
                    </div>
                    <div class="form-group">
                        <input type="text" name="nomEquipo" class="form-control" placeholder="Actualizar nombre equipo" value="<?php echo $nEquipo?>" autofocus>
                    </div>
                    <select class="form-select" aria-label="Selecciona el pais" name="nPais">
                    <option style="display:none;" selected><?php echo $nPais?></option>
                        <?php 
                        $query = "SELECT * FROM paises";
                        $result_paises = mysqli_query($conn, $query);  

                        while($row = mysqli_fetch_array($result_paises)){?>
                            <option value="<?php echo $row['nombrePais']?>">
                                <?php echo $row['nombrePais']?>
                            </option>
                        <?php } ?>
                    </select>
                    <select class="form-select" aria-label="Selecciona la liga" name="nLiga">
                    <option style="display:none;" selected><?php echo $nLiga?></option>
                        <?php 
                        $query = "SELECT * FROM ligas";
                        $result_paises = mysqli_query($conn, $query);  

                        while($row = mysqli_fetch_array($result_paises)){?>
                            <option value="<?php echo $row['nombreLiga']?>">
                                <?php echo $row['nombreLiga']?>
                            </option>
                        <?php } ?>
                    </select>
                    <input type="submit" name="update_equipo" class="btn btn-success btn-block" value="Actualizar">
                </form>
            </div>
        </div>
    </div>
</div>

<?php include ("includes/footer.php"); ?>

<?php 
if(isset($_POST["update_equipo"])) {
    $id = $_GET["id"];
    $nEquipoNew = $_POST['nomEquipo'];
    $nLigaNew = $_POST['nLiga'];
    $nPaisNew = $_POST['nPais'];
    $sqlNew = "UPDATE equipos SET nombreEquipo = '$nEquipoNew', pais = '$nPaisNew', liga = '$nLigaNew' WHERE idEquipo = $id";
    $resultNew = mysqli_query($conn, $sqlNew);
    if(!$resultNew){
        die('Query Failed');
    }
    $_SESSION['message'] = 'Actualizado!';
    $_SESSION['message_type'] = 'warning';
    header('Location: indexEquipo.php');
}

ob_end_flush();
?>