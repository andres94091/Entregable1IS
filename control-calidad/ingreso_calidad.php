<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <title>Guardados</title>
        <link rel="stylesheet" href="../css/style.css">
        <link rel="icon" href="../imgs/logo.png">
        <?php 
            include ("../Base_datos/conexion_db.php");
            date_default_timezone_set('America/Bogota');
            $date = date('Y-m-d H:i:s');
            $col1=$_POST['col1'];
            $col2=$_POST['col2'];
            $hdl1=$_POST['hdl1'];
            $hdl2=$_POST['hdl2'];
            $ldl1=$_POST['ldl1'];
            $ldl2=$_POST['ldl2'];
            $trig1=$_POST['trig1'];
            $trig2=$_POST['trig2'];
        
        ?>
    </head>
    <body class="img_fondo" background="../imgs/lab.jpg">
        <?php
            
           $sql = $connection->query("INSERT INTO qlty_ctrol  (`fecha`,`col1`, `col2`, `hdl1`, `hdl2`, `ldl1`, `ldl2`, `trig1`, `trig2`)
           VALUES ('".$date."','".$col1."','".$col2."','".$hdl1."','".$hdl2."','".$ldl1."','".$ldl2."','".$trig1."','".$trig2."')");
        ?>
        <main>
            <!-- navbar-->
            <div class="topnav">
                <a href="../ingresar-resultado/ingresar_resultado.html">Ingresar resultado</a>
                <a href="../consulta-masiva/consulta_masiva.php">Consultar</a>
                <a class="active" href="c_calidad.html">Calidad</a>
                <a href="../resultados/resultados.html">Resultados</a>
                <a href="index.html">Menu inicial</a>
            </div>
            <!-- Formulario-->
            <div class="form-hce">
                <h3>Datos personales</h3>
                <p class="p-registro"><b>Fecha: </b><?php echo $date?></p>
                <p class="p-registro"><b>Colesterol 1:</b> <?php echo $col1?></p>
                <p class="p-registro"><b>Colesterol 2:</b>  <?php echo $col2?></p>
                <p class="p-registro"><b>HDL 1:</b>  <?php echo $hdl1?></p>
                <p class="p-registro"><b>HDL 2:</b>  <?php echo $hdl2?></p>
                <p class="p-registro"><b>LDL 1:</b>  <?php echo $ldl1?></p>
                <p class="p-registro"><b>LDL 2:</b>  <?php echo $ldl2?></p>
                <p class="p-registro"><b>Trigliseridos 1:</b>  <?php echo $trig1?></p>
                <p class="p-registro"><b>Trigliceridos 2:</b>  <?php echo $trig2?></p>                
            </div>
            <div class="btn">
             <a class="con-ttl" href="consulta-total.php">Historial de Calidad</a>
            </div>
            <footer>
                <a class="link "href="#">www.pllab.com.co</a> Teléfono: 8095412 correo: info@pllab.com.co
            </footer>
        
        </main>
    </body>
</html>