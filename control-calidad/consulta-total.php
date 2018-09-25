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
                <a class="active" href="../ingresar-resultado/ingresar_resultado.html">Ingresar resultado</a>
                <a href="consulta_masiva.php">Consultar</a>
                <a href="#contact">Calidad</a>
                <a href="#about">Resultados</a>
                <a href="index.html">Menu inicial</a>
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
           <td><b>Fecha.</b></td>
           <td><b>COL lvl 1</b></td>
           <td><b>COL lvl 2</b></td>
           <td><b>HDL lvl 1</b></td>
           <td><b>HDL lvl 2</b></td>
           <td><b>LDL lvl 1</b></td>
           <td><b>LDL lvl 2</b></td>
           <td><b>TRIG lvl 1</b></td>
           <td><b>TRIG lvl 2</b></td>
        </tr>
        <tr>';
        $sql=$connection->query("SELECT * FROM qlty_ctrol") or die (mysql_error());
        while ($resultado = $sql->fetch_array(MYSQLI_NUM)){
            $fecha=$resultado[0];
            $col1=$resultado[1];
            $col2=$resultado[2];
            $hdl1=$resultado[3];
            $hdl2=$resultado[4];
            $ldl1=$resultado[5];
            $ldl2=$resultado[6];
            $trig1=$resultado[7];
            $trig2=$resultado[8];
            $i=$i+1;
            echo "<td align='center'>".$fecha."</td>
            <td>".$col1."</td>
            <td>".$col2."</td>
            <td>".$hdl1."</td>
            <td>".$hdl2."</td>
            <td>".$ldl1."</td>
            <td>".$ldl2."</td>
            <td>".$trig1."</td>
            <td>".$trig2."</td>
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