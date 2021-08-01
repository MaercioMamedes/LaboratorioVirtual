<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/lancamentoObliquo/_css/estilos.css">
    <title>Resultados</title>
</head>
<body>
    <div class="resultado">
    <?php
        # conversão de graus para radianos
        function graus($angulo){
            return ($angulo*pi())/180;
        }

        #Cálculo da velocidade vertical    
        function vel_vertical($velocidade,$angulo){
            return $velocidade*sin(graus($angulo));
        }

        #Cálculo da velocidade horizontal
        function vel_horizontal($velocidade,$angulo){
            return $velocidade*cos(graus($angulo));
        }

        #Cáculo do alcance do projétil
        function alcance($velocidade,$angulo){
            return pow($velocidade,2)*sin(2*graus($angulo))/9.8;
        }

        #Cálculo da altura máxima do projétil
        function altura($velocidade,$angulo){
            return pow($velocidade,2)*pow(sin(graus($angulo)),2)/2*9.8;
        }

        #Cáculo das coordenadas do alvo
        function coordenadas($alcance, $azimute){
            return array($alcance*cos(graus(90-$azimute)),$alcance*sin(graus(90-$azimute)));
        }


        #Teste do alvo
        function alvo($alvo,$posicao){
            if (pow($posicao[0]-$alvo[0],2) + pow($posicao[1]-$alvo[1],2) <= pow($alvo[2],2))
            {

                return true;
            }
            else
            { 
                return false;

            }
        }

        #Variáveis 
        $velocidade = $_GET["velocidade"];
        $angulo = $_GET["angulo"];
        $azimute = $_GET["azimute"];
        $posicao = coordenadas(alcance($velocidade,$angulo),$azimute);
        $alvo = array(3, 4,1);


        #Exibição dos resultados
        echo "<ul>";
        echo "<li><p> A velocidade horizontal é ".number_format((vel_horizontal($velocidade, $angulo)),2,",",".")." m/s"."</p>"."</li>";

        echo "<li><p> A velocidade vertical é ".number_format((vel_vertical($velocidade,$angulo)),2,",",".")." m/s"."</p>"."</li>";

        echo "<li><p> O alcance do projétil foi ".number_format(alcance($velocidade,$angulo),2,",",".")." metros"."</p>"."</li>";

        echo "<li><p> A altuta máxima do projétil foi ".number_format(altura($velocidade,$angulo),2,",",".")." metros"."</p>"."</li>";

        echo "<li><p> As coordenadas do alvo foi "."[ ".number_format($posicao[0],2,",",".")." ; ".number_format($posicao[1],2,",",".")." ]";

        echo "<li><p>".$resultado=alvo($alvo,$posicao)?"Você atingiu o alvo":"Você não atingiu o alvo"."</p>"."</li>";

        echo "</ul>"

    ?>
    <p><a href="/fisica/lancamentoObliquo/index.html">VOLTAR</a></p>
    </div>
</body>
</html>