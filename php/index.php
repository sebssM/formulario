<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/index.css">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">

    <title>Formulario de registro</title>
</head>

<body>
    <div class="container">
        <header>Registro</header>

        <form action="../mensaje.html" method="POST">
            <div class="form">
                <div class="registro">
                    <div class="fields">
                        <div class="input-field">
                            <label>Nombre: </label>
                            <input type="text" name="nom" placeholder="Ingrese su nombre" required >
                        </div>

                        <div class="input-field">
                            <label>Apellido: </label>
                            <input type="text" name="ape" placeholder="Ingrese su apellido" required>
                        </div>

                        <div class="input-field">
                            <label>Correo electrònico: </label>
                            <input type="text" name="email" placeholder="Ingrese su correo" required>
                        </div>

                        <div class="input-field">
                            <label>Telèfono: </label>
                            <input type="number" name="tel" placeholder="Ingrese su telèfono" required pattern="[0-999]+">
                        </div>

                        <div class="input-field">
                            <label>Puestos de interès: </label>
                            <select name="puesto" required>
                                <option disabled selected>Seleccione un puesto</option>
                                <option>Desarrollo de software</option>
                                <option>Mesa de ayuda</option>
                                <option>Soporte tècnico</option>
                            </select>
                        </div>

                        <div class="input-field-cv">
                            <label>Cargar CV</label>
                            <input type="file" name="cv">
                        </div>

                        <div class="input-field">
                            <label>Experiencia laboral: </label>
                        </div>
                        <textarea name="exp_lab" required></textarea>
                    </div>
                </div>
                <button class="nextBtn" name="enviar">
                    <span class="btnText">Enviar</span>
                    <i class="uil uil-navigator"></i>
                </button>
            </div>

        <?php 
        
         include("registro.php");

         ?>

    </div>
    
</body>

</html>