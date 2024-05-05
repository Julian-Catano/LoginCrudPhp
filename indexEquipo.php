<?php include("db.php");?>
<?php include("includes/header.php");
include('validacion.php');
?>


<div class="container p-4">
    <div class="row">
        <div class="col-md-4">
            <?php if(isset($_SESSION['message'])){ ?>
                <div class="alert alert-<?=$_SESSION['message_type']?> alert-dismissible fade show" role="alert">
                    <?= $_SESSION['message'] ?>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            <?php session_unset(); } ?>
            <div class="card card-body">
                <form action="saveEquipo.php" method="POST">
                    <div class="form-group">
                        <input type="text" name="nomEquipo" class="form-control" placeholder="Nombre equipo" autofocus>
                    </div>
                    <select class="form-select" aria-label="Selecciona el pais" name="nPais">
                        <option selected>Selecciona</option>
                        <?php 
                        $query = "SELECT * FROM paises";
                        $result_paises = mysqli_query($conn, $query);

                        while($row = mysqli_fetch_array($result_paises)){ ?>
                            <option value="<?php echo $row['nombrePais'] ?>">
                                <?php echo $row['nombrePais'] ?>
                            </option>
                        <?php } ?>
                    </select>
                    <select class="form-select" aria-label="Selecciona la liga" name="nLiga">
                        <option selected>Selecciona</option>
                        <?php 
                        $query = "SELECT * FROM ligas";
                        $result_paises = mysqli_query($conn, $query);

                        while($row = mysqli_fetch_array($result_paises)){ ?>
                            <option value="<?php echo $row['nombreLiga'] ?>">
                                <?php echo $row['nombreLiga'] ?>
                            </option>
                        <?php } ?>
                    </select>
                    <input type="submit" name="create_equipo" class="btn btn-success btn-block" value="Agregar">
                </form>
            </div>
        </div>
        <div class="col-md-8">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Equipo</th>
                        <th>Pais</th>
                        <th>Liga</th>
                        <th>Actions</th>
                    </tr>
                </thead>

                <tbody>
                    <?php 
                        $query = "SELECT * FROM equipos";
                        $result_paises = mysqli_query($conn, $query);

                        while($row = mysqli_fetch_array($result_paises)){ ?>
                            <tr>
                                <td><?php echo $row['idEquipo'] ?></td>
                                <td><?php echo $row['nombreEquipo'] ?></td>
                                <td><?php echo $row['pais'] ?></td>
                                <td><?php echo $row['liga'] ?></td>
                                <td>
                                    <a class="btn btn-warning" href="editEquipo.php?id=<?php echo $row['idEquipo']?>">
                                        <i class="fa-solid fa-marker"></i>
                                    </a>
                                    <a class="btn btn-danger" href="deleteEquipo.php?id=<?php echo $row['idEquipo']?>">
                                        <i class="fa-solid fa-trash"></i>
                                    </a>
                                </td>
                            </tr>
                        <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
    
<?php include("includes/footer.php")?>   
</body>
</html>