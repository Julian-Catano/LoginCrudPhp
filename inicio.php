<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilos.css">
    <title>LOGIN/REGISTER</title>
</head>
<body>
    <main>
        <div class="contenedor__todo">
            <div class="caja__trasera">
                <div class="caja__trasera-login">
                    <h1>ya tienes cuenta?</h1>
                    <p>inicia sesion para entrar en la pagina</p>
                    <button onclick="login()" id="btn__iniciar-sesion">Iniciar sesion</button>
                </div>
                <div class="caja__trasera-register">
                    <h1>Aun no tienes cuenta?</h1>
                    <p>Registrate para Iniciar sesion</p>
                    <button  onclick="register()" id="btn__registrarse">Registrarse</button>
                </div>
            </div>
            <div class="contenedor__login-register">
                <form method="POST" action="inicio_usuario_be.php" class="formulario__login">
                    <h2>Iniciar sesion</h2>
                    <input type="text" placeholder="correo electronico" name="correo_inicio">
                    <input type="password" placeholder="contraseña" name="contrasena_inicio">
                    <button  type="submit">entrar</button>
                </form>
                <form method="POST" action="registro_usuario_be.php" class="formulario__register">
                    <h2>Registrarse</h2>
                    <input type="text" placeholder="nombre completo" name="nombre_completo">
                    <input type="text" placeholder="correo electronico" name="correo">
                    <input type="text" placeholder="usuario" name = "usuario">
                    <input type="password" placeholder="contraseña" name="contrasena">
                    <button type="submit">Registrarse</button>
                </form>
            </div>
        </div>
    </main>
    <script src="script.js"></script>
</body>
</html>