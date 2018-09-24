<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <title>Guardados</title>
        <link rel="stylesheet" href="../css/style.css">
        <link rel="icon" href="../imgs/logo.png">
        <?php 
            include ("../Base_datos/conexion_db.php");
            $date = date('Y-m-d H:i:s');
            $name=$_POST['name'];
            $lst_name=$_POST['last_name'];
            $id=$_POST['id'];
            $age=$_POST['age'];
            $gender=$_POST['gender'];
            $eps=$_POST['eps'];
            $col=$_POST['col'];
            $hdl=$_POST['hdl'];
            $ldl=$_POST['ldl'];
            $trig=$_POST['trig'];
        
        ?>
    </head>
    <body class="img_fondo" background="../imgs/lab.jpg">
        <?php
            
           $sql = $connection->query("INSERT INTO data_exams  (`Fecha`, `name`, `lst_name`, `age`, `gender`, `eps`, `col`, `hdl`, `ldl`, `trig`, `id`)VALUES ('".$date."','".$name."','".$lst_name."','".$age."','".$gender."','".$eps."','".$col."','".$hdl."','".$ldl."','".$trig."','".$id."')");
        ?>
        <main>
            <!-- navbar-->
            <div class="topnav">
                <a class="active" href="ingresar_resultado.html">Ingresar resultado</a>
                <a href="../consulta-masiva/consulta_masiva.php">Consultar</a>
                <a href="#contact">Calidad</a>
                <a href="#about">Resultados</a>
                <a href="index.html">Menu inicial</a>
            </div>
            <!-- Formulario-->
            <div class="form-hce">
                <h3>Datos personales</h3>
                <p class="p-registro"><b>Documento de identidad:</b> <?php echo $id?></p>
                <p class="p-registro"><b>Nombres:</b>  <?php echo $name?></p>
                <p class="p-registro"><b>Apellidos:</b>  <?php echo $lst_name?></p>
                <p class="p-registro"><b>edad:</b>  <?php echo $age?></p>
                <p class="p-registro"><b>genero:</b>  <?php if ($gender==1) { echo "Masculino"; } elseif($gender==2) { echo "Femenino";} elseif($gender==0) { echo "NN";}?></p>
                <p class="p-registro"><b>eps:</b>  <?php if ($eps==1) { echo "Cafesalud"; } elseif($eps==2) { echo "Coomeva"; } elseif($eps==3) { echo "Sura"; } elseif($eps==4) { echo "Otro"; }?></p>
                <p class="p-registro"><b>colesterol total:</b>  <?php echo $col?></p>
                <p class="p-registro"><b>HDL:</b>  <?php echo $hdl?></p>
                <p class="p-registro"><b>LDL:</b>  <?php echo $ldl?></p>
                <p class="p-registro"><b>Trigliceridos:</b>  <?php echo $trig?></p>
                
            
            </div>
            <div class="btn">
             <a class="btn_bck" href="ingresar_resultado.html">Ingresar otro paciente</a>
            </div>
            <footer>
                <a class="link "href="#">www.pllab.com.co</a> Teléfono: 8095412 correo: info@pllab.com.co
            </footer>
        
        </main>
    </body>
</html>