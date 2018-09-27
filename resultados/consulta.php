<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <title>Registo Examenes del paciente</title>
        <link rel="stylesheet" href="../css/style.css">
        <link rel="icon" href="../imgs/logo.png">
        <?php 
            include ("../Base_datos/conexion_db.php");
            $id=$_POST['id'];
        ?>
    </head>
    <body class="img_fondo" background="../imgs/lab.jpg">
        <main>
            <div class="topnav">
                <a href="../ingresar-resutlado/ingresar_resultado.html">Ingresar resultado</a>
                <a href="../consulta-masiva/consulta_masiva.php">Consultar</a>
                <a href="#contact">Calidad</a>
                <a class="active" href="index.html">Resultados</a>
                <a href="../index.html">Menu inicial</a>
            </div>
            <div class="form-hce">
                <h2 class="form__titulo">Resultados individuales</h2>
                <br>
                <?php
                    $sql=$connection->query("SELECT * FROM data_exams WHERE id=$id") or die (mysql_error());
                    while ($resultado = $sql->fetch_array(MYSQLI_NUM)){
                        $consec=$resultado[0];
                        $fecha=$resultado[1];
                        $name=$resultado[2];
                        $lst_name=$resultado[3];
                        $age=$resultado[4];
                        $gender=$resultado[5];
                        $eps=$resultado[6];
                        $col=$resultado[7];
                        $hdl=$resultado[8];
                        $ldl=$resultado[9];
                        $trig=$resultado[10];
                        $id=$resultado[11];
                    };
                ?>
                <div class="contenedor_datos">
                    <p class="p-registro"><b>Consecutivo:</b>  <?php echo $consec?></p>
                    <p class="p-registro"><b>Fecha:</b>  <?php echo $fecha?></p>
                    <p class="p-registro"><b>Documento de identidad:</b> <?php echo $id?></p>
                    <p class="p-registro"><b>Nombres:</b>  <?php echo $name?></p>
                    <p class="p-registro"><b>Apellidos:</b>  <?php echo $lst_name?></p>
                    <p class="p-registro"><b>Género:</b>  <?php if ($gender==1) { echo "Masculino"; } elseif($gender==2) { echo "Femenino";} elseif($gender==0) { echo "NN";} ?></p>
                    <p class="p-registro"><b>Edad:</b>  <?php echo $age?> años de edad</p>
                    <p class="p-registro"><b>EPS:</b>  <?php if ($eps==1) { echo "Cafesalud"; } elseif($eps==2) { echo "Coomeva"; } elseif($eps==3) { echo "Sura"; } elseif($eps==4) { echo "Otro"; }?></p>
                    <p class="p-registro"><b>Colesterol total:</b>  <?php echo $col?> mg/dL</p>
                    <p class="p-registro"><b>Colesterol HDL:</b>  <?php echo $hdl?> mg/dL</p>
                    <p class="p-registro"><b>Colesterol LDL:</b>  <?php echo $ldl?> mg/dL</p>
                    <p class="p-registro"><b>Trigliceridos:</b>  <?php echo $trig?> mg/dL</p>
                </div>
            </div>
            <footer>
                    <a class="link "href="#">www.pllab.com.co</a> Teléfono: 8095412 correo: info@pllab.com.co
            </footer>
        </main>
    </body>
</html>