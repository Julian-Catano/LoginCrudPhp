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
                <form action="savePais.php" method="POST">
                    <div class="form-group">
                        <input type="text" name="nomPais" class="form-control" placeholder="Nombre pais" autofocus>
                    </div>
                    <input type="submit" name="create_pais" class="btn btn-success btn-block" value="Agregar">
                </form>
            </div>
        </div>
        <div class="col-md-8">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Pais</th>
                        <th>Actions</th>
                    </tr>
                </thead>

                <tbody>
                    <?php 
                        $query = "SELECT * FROM paises";
                        $result_paises = mysqli_query($conn, $query);

                        while($row = mysqli_fetch_array($result_paises)){ ?>
                            <tr>
                                <td><?php echo $row['idPais'] ?></td>
                                <td><?php echo $row['nombrePais'] ?></td>
                                <td>
                                    <a class="btn btn-warning" href="editPais.php?id=<?php echo $row['idPais']?>">
                                        <i class="fa-solid fa-marker"></i>
                                    </a>
                                    <a class="btn btn-danger" href="deletePais.php?id=<?php echo $row['idPais']?>">
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