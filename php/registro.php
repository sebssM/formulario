<?php 

include("conexion.php");

if (isset($_POST['enviar'])) {
    
    if (strlen($_POST['nom']) >= 1 &&
    strlen($_POST['ape']) >= 1 &&
    strlen($_POST['email']) >= 1 &&
    strlen($_POST['tel']) >= 1 &&
    strlen($_POST['puesto']) >= 1 &&
    strlen($_POST['exp_lab'])>=  1) {
        $nom = trim($_POST['nom']);
        $ape = trim($_POST['ape']);
        $email = trim($_POST['email']);
        $tel= trim($_POST['tel']);
        $puesto = trim($_POST['puesto']); 
        $exp_lab = trim($_POST['exp_lab']);
        
        $consulta = "INSERT INTO registro (nombre, apellido, email, telefono, p_interes, exp_laboral) VALUES
        ('$nom','$ape','$email','$tel','$puesto', '$exp_lab')";

        $resultado = mysqli_query($conexion, $consulta);

    }
}
?>