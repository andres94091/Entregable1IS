<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <title>Registro</title>
        <link rel="stylesheet" href="../css/style.css">
        <link rel="icon" href="../imgs/logo.png">
        <?php
            include("../Base_datos/conexion_db.php");
            $id=$_GET['id'];
        ?>
    </head>
    <body class="img_fondo" background="../imgs/lab.jpg">    
        <main>
           <div class="topnav">
                <a href="../index.html">Menu inicial</a>
                <a href="../ingresar-resultado/ingresar_resultado.html">Ingresar resultado</a>
                <a class="active" href="consultar_ind.php">Consultar</a>
                <a href="../control-calidad/c_calidad.html">Calidad</a>
                <a href="../resultados/resultados.html">Resultados</a>
            </div>
       <br><br>
    <div class="form-hce">
   
        <h2 class="form__titulo">Pacientes registrados</h2>
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
            <h3>Datos básicos del paciente</h3>
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
        <div class="contenedor-btn">
            <a href="consulta_masiva.php">Consultar Otro paciente</a>
            
        </div>
        <footer>
           <a class="link "href="#">www.pllab.com.co</a> Teléfono: 8095412 correo: info@pllab.com.co
        </footer>
      </div>
        </main>
    </body>
</html>