<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Logins/stylelogin.css">
    <link rel="stylesheet" href="Logins/boxicons-master/css/boxicons.css">
    <title>LoginAdmin</title>
</head>

<body>
    <form action="validar.php" method="post">
        <div class="box">
            <div class="container">
                <div class="top-header">
                    <span>Bienvenido Administrador</span>
                    <header>Iniciar Sesión</header>
                </div>

                <div class="input-field">
                    <input type="text" class="input" placeholder="Usuario" required name="usuario">
                    <i class="bx bx-user"></i>
                </div>
                <div class="input-field">
                    <input type="password" class="input" placeholder="Contraseña" required name="contraseña">
                    <i class="bx bx-lock-alt"></i>
                </div>
                <div class="input-field">
                    <input type="submit" class="submit" value="Inicio">
                </div>

                <div class="botton">
                    <div class="left">
                        <input type="checkbox" id="check">
                        <label for="check" class="recordarme">Recordarme</label>
                    </div>
                    <div class="right">
                        <label><a href="#">¿Olvidaste la contraseña?</a></label>
                    </div>
                </div>
            </div>
        </div>
    </form>
</body>

</html>