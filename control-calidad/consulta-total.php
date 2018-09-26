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
                <a href="../ingresar-resultado/ingresar_resultado.html">Ingresar resultado</a>
                <a href="../consulta-masiva/consulta_masiva.php">Consultar</a>
                <a class="active" href="#contact">Calidad</a>
                <a href="#about">Resultados</a>
                <a href="index.html">Menu inicial</a>
            </div>
       <br><br>
    <div class="form-hce">
   
        <h2 class="form__titulo">Registro de control de calidad</h2>
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

        $sql2=$connection->query("SELECT * FROM set_point") or die (mysql_error());
        $set=$sql2->fetch_array(MYSQLI_NUM);
        $colmin1 = $set[0];
        $colmax1 = $set[1];
        $hdlmin1 = $set[2];
        $hdlmax1 = $set[3];
        $ldlmin1 = $set[4];
        $ldlmax1 = $set[5];
        $trigmin1 = $set[6];
        $trigmax1 = $set[7];
        $colmin2 = $set[8];
        $colmax2 = $set[9];
        $hdlmin2 = $set[10];
        $hdlmax2 = $set[11];
        $ldlmin2 = $set[12];
        $ldlmax2 = $set[13];
        $trigmin2 = $set[14];
        $trigmax2 = $set[15];

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
            echo "<td align='center'>".$fecha."</td>";

            if ( ($col1 < $colmin1 ) || ($col1 > $colmax1) ){
                echo"<td bgcolor='#FF0000' >".$col1."</td>";
            }
            else{
                echo"<td bgcolor='#B9CCDD'>".$col1."</td>";
            }

            if ( ($col2 < $colmin2 ) || ($col2 > $colmax2) ){
                echo"<td bgcolor='#FF0000' >".$col2."</td>";
            }
            else{
                echo"<td bgcolor='#B9CCDD'>".$col2."</td>";
            }

            if ( ($hdl1 < $hdlmin1 ) || ($hdl1 > $hdlmax1) ){
                echo"<td bgcolor='#FF0000' >".$hdl1."</td>";
            }
            else{
                echo"<td bgcolor='#B9CCDD'>".$hdl1."</td>";
            }

            if ( ($hdl2 < $hdlmin2 ) || ($hdl2 > $hdlmax2) ){
                echo"<td bgcolor='#FF0000' >".$hdl2."</td>";
            }
            else{
                echo"<td bgcolor='#B9CCDD'>".$hdl2."</td>";
            }

            if ( ($ldl1 < $ldlmin1 ) || ($ldl1 > $ldlmax1) ){
                echo"<td bgcolor='#FF0000' >".$ldl1."</td>";
            }
            else{
                echo"<td bgcolor='#B9CCDD'>".$ldl1."</td>";
            }

            if ( ($ldl2 < $ldlmin2 ) || ($ldl2 > $ldlmax2) ){
                echo"<td bgcolor='#FF0000' >".$ldl2."</td>";
            }
            else{
                echo"<td bgcolor='#B9CCDD'>".$ldl2."</td>";
            }

            if ( ($trig1 < $trigmin1 ) || ($trig1 > $trigmax1) ){
                echo"<td bgcolor='#FF0000' >".$trig1."</td>";
            }
            else{
                echo"<td bgcolor='#B9CCDD'>".$trig1."</td>";
            }

            if ( ($trig2 < $trigmin2 ) || ($trig2 > $trigmax2) ){
                echo"<td bgcolor='#FF0000' >".$trig2."</td>";
            }
            else{
                echo"<td bgcolor='#B9CCDD'>".$trig2."</td>";
            }

            echo"</tr>";

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