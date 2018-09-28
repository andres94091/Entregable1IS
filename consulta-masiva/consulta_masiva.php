<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <title>Registro</title>
        <link rel="stylesheet" href="../css/style.css">
        <link rel="icon" href="../imgs/logo.png">
    </head>
    <body class="img_fondo" background="../imgs/lab.jpg">    
        <main>
           <div class="topnav">
                <a href="../index.html">Menu inicial</a>
                <a href="../ingresar-resultado/ingresar_resultado.html">Ingresar resultado</a>
                <a class="active" href="consulta_masiva.php">Consultar</a>
                <a href="../control-calidad/c_calidad.html">Calidad</a>
                <a href="../resultados/resultados.html">Resultados</a>
            </div>
       <br><br>
    <div class="form-hce">
   
        <h2 class="form__titulo">Pacientes registrados</h2>
        <br>
        <?php
        include ("../Base_datos/conexion_db.php");
        $i=0;
        echo '<table border="1" cellspacing="2" cellpadding="10" 
        <tr align="center" bgcolor="#B9CCDD"> 
           <td><b>Consecutivo.</b></td>
           <td><b>ID</b></td>
           <td><b>NOMBRE</b></td>
           <td><b>APELLIDOS</b></td>
        </tr>
        <tr>';
        $sql=$connection->query("SELECT * FROM data_exams") or die (mysql_error());
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
            $i=$i+1;
            echo "<td align='center'>".$i."
            </td>
            <td align='center'><a href='consultar_ind.php?id=".$id."'>".$id." </a>
            </td>
            <td>".$name."</td>
            <td>".$lst_name."</td>
            </tr>";

        ?>
        
        <?php } //fin while
        echo "</table>"; ?>
        
    <footer>
        <a class="link "href="#">www.pllab.com.co</a> Teléfono: 8095412 correo: info@pllab.com.co
    </footer>
            </div>
        </main>
    </body>
</html>