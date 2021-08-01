<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    

    <title>Tábua TRigonométrica</title>
</head>

<?php
    function radianos($graus){
        return $graus*pi()/180;
    }
?>
<body>
    <table class="table table-striped">
        <tr>
            <th>Ângulo</th>
            <th>Seno</th>
            <th>Cosseno</th>
            <th>Tangente</th>
        </tr>

    <?php

    $angulo = $_GET["angulo"];
    $passo = $_GET["pontos"];

        for($x=0;$x<=$angulo;$x+=$passo){
            
            echo "<tr>";
                echo "<td>". $x . "º";
                echo "<td>" . number_format(sin(radianos($x)),4,",",".") . "</td>";
                echo "<td>" . number_format(cos(radianos($x)),4,",",".") . "</td>";
                echo "<td>";
                        if($x<>90){
                            echo number_format(tan(radianos($x)),4,",",".");
                        } else{
                            echo "Tende ao inifito";
                        }
                        echo "</td>";

            echo "</tr>";    
        }

    ?>    


    </table>
    
</body>
</html>