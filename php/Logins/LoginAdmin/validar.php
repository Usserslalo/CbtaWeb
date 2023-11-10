<?php
include('db.php');
$usuario = $_POST['usuario'];
$contraseña = $_POST['contraseña'];
session_start();
$_SESSION['usuario'] = $usuario;

$conexion = mysqli_connect("localhost", "root", "", "loginadmin");

$consulta = "SELECT*FROM usuarios where usuario = '$usuario' and contraseña = '$contraseña'";
$resultado = mysqli_query($conexion, $consulta);

$filas = mysqli_num_rows($resultado);
if ($filas) {
    header("location:opAdmin.php");
} else {
?>
    <?php
    include("loginAdmin.php");

    ?>
    <h1 class="bad">Error en los datos</h1>
<?php
}
mysqli_free_result($resultado);
mysqli_close($conexion);
