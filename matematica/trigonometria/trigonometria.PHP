<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sinal das funções</title>
</head>
<body>

    <?php

        $quadrante = isset($_GET["quadrante"])?$_GET["quadrante"]:0;

        switch($quadrante){

            case(0):
                echo "Variável não informada";
                break;

            case(1):
                echo "x positivo e x positivo";
                break;

            case(2):
                echo "x negativo e y positivo";
                break;

            case(3):
                echo "x negativo e y negativo";
                break;

            case(4): 
                echo "x positivo e y negativo";
                break;

            default:
                echo "opção inválida";
        }


    ?>

    <p><a href="/matematica/trigonometria/trigonometria.html">VOLTAR</a></p>

</body>
</html>