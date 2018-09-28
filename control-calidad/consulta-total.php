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
        $Acol1=[];
        $Acol2=[];
        $Ahdl1=[];
        $Ahdl2=[];
        $Aldl1=[];
        $Aldl2=[];
        $Atrig1=[];
        $Atrig2=[];
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
            $Acol1[]=$resultado[1];
            $col2=$resultado[2];
            $Acol2[]=$resultado[2];
            $hdl1=$resultado[3];
            $Ahdl1[]=$resultado[3];
            $hdl2=$resultado[4];
            $Ahdl2[]=$resultado[4];
            $ldl1=$resultado[5];
            $Aldl1[]=$resultado[5];
            $ldl2=$resultado[6];
            $Aldl2[]=$resultado[6];
            $trig1=$resultado[7];
            $Atrig1[]=$resultado[7];
            $trig2=$resultado[8];
            $Atrig2[]=$resultado[8];      
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
        echo "</table>";?>

        <?php 
            
            $mnCol1 =array_sum($Acol1)/count($Acol1);
            $mnCol2 =array_sum($Acol2)/count($Acol2);
            $mnHdl1 =array_sum($Ahdl1)/count($Ahdl1);
            $mnHdl2 =array_sum($Ahdl2)/count($Ahdl2);
            $mnLdl1 =array_sum($Aldl1)/count($Aldl1);
            $mnLdl2 =array_sum($Aldl2)/count($Aldl2);
            $mnTrig1 =array_sum($Atrig1)/count($Atrig1);
            $mnTrig2 =array_sum($Atrig2)/count($Atrig2);

            function Stand_Deviation($arr) { 
                $num_of_elements = count($arr); 
                $variance = 0.0; 
                $average = array_sum($arr)/$num_of_elements; 
                foreach($arr as $i) { 
                    $variance += pow(($i - $average), 2); 
                } 
                return (float)sqrt($variance/$num_of_elements); 
            }
            
            $stdCol1= Stand_Deviation($Acol1);
            $stdCol2= Stand_Deviation($Acol2);
            $stdHdl1= Stand_Deviation($Ahdl1);
            $stdHdl2= Stand_Deviation($Ahdl2);
            $stdLdl1= Stand_Deviation($Aldl1);
            $stdLdl2= Stand_Deviation($Aldl2);
            $stdTrig1= Stand_Deviation($Atrig1);
            $stdTrig2= Stand_Deviation($Atrig2);

            $cvCol1 = $stdCol1/$mnCol1;
            $cvCol2 = $stdCol2/$mnCol2;
            $cvHdl1 = $stdHdl1/$mnHdl1;
            $cvHdl2 = $stdHdl2/$mnHdl2;
            $cvLdl1 = $stdLdl1/$mnLdl1;
            $cvLdl2 = $stdLdl2/$mnLdl2;
            $cvTrig1 = $stdTrig1/$mnTrig1;
            $cvTrig2 = $stdTrig2/$mnTrig2;

            echo '<table border="1" cellspacing="2" cellpadding="10" 
            <tr align="center" bgcolor="#B9CCDD"> 
            <td><b>Variable</b></td>
            <td><b>COL lvl 1</b></td>
            <td><b>COL lvl 2</b></td>
            <td><b>HDL lvl 1</b></td>
            <td><b>HDL lvl 2</b></td>
            <td><b>LDL lvl 1</b></td>
            <td><b>LDL lvl 2</b></td>
            <td><b>TRIG lvl 1</b></td>
            <td><b>TRIG lvl 2</b></td>
            </tr>';
            echo'<tr align="center" bgcolor="#B9CCDD">
            <td><b>Media</b></td>
            <td><b>'.$mnCol1.'</b></td>
            <td><b>'.$mnCol2.'</b></td>
            <td><b>'.$mnHdl1.'</b></td>
            <td><b>'.$mnHdl2.'</b></td>
            <td><b>'.$mnLdl1.'</b></td>
            <td><b>'.$mnLdl2.'</b></td>
            <td><b>'.$mnTrig1.'</b></td>
            <td><b>'.$mnTrig2.'</b></td>
            </tr>
            <tr align="center" bgcolor="#B9CCDD">
            <td><b>std</b></td>
            <td><b>'.number_format($stdCol1, 2).'</b></td>
            <td><b>'.number_format($stdCol2, 2).'</b></td>
            <td><b>'.number_format($stdHdl1, 2).'</b></td>
            <td><b>'.number_format($stdHdl2, 2).'</b></td>
            <td><b>'.number_format($stdLdl1, 2).'</b></td>
            <td><b>'.number_format($stdLdl2, 2).'</b></td>
            <td><b>'.number_format($stdTrig1, 2).'</b></td>
            <td><b>'.number_format($stdTrig2, 2).'</b></td>
            </tr>
            <tr align="center" bgcolor="#B9CCDD">
            <td><b>C.V.</b></td>
            <td><b>'.number_format($cvCol1, 2).'</b></td>
            <td><b>'.number_format($cvCol2, 2).'</b></td>
            <td><b>'.number_format($cvHdl1, 2).'</b></td>
            <td><b>'.number_format($cvHdl2, 2).'</b></td>
            <td><b>'.number_format($cvLdl1, 2).'</b></td>
            <td><b>'.number_format($cvLdl2, 2).'</b></td>
            <td><b>'.number_format($cvTrig1, 2).'</b></td>
            <td><b>'.number_format($cvTrig2, 2).'</b></td>
            </tr>

            </table>';

        ?>

        
    <footer>
        <a class="link "href="#">www.pllab.com.co</a> Teléfono: 8095412 correo: info@pllab.com.co
    </footer>
            </div>
        </main>
    </body>
</html>