<?php
session_start ();

    if ( ! (isset ($_REQUEST ["combustivel"]))) {
         
       echo "Não foi definido um campo com o valor disponível no Tanque...";
       exit ();

    }

$combustivel        = $_REQUEST ["combustivel"];
$quilometros    = $_REQUEST ["quilometros"];

      //verificar se combustivel tem conteúdo
     if ( $combustivel == "" ) {

     echo "Preencha o campo do Tanque...<br><br>";
     echo "<a href='../html/formulario.html'> Clique aqui para voltar</a>";
     exit ();
      
    }

     //verificar se quilometros tem conteúdo
     if ( $quilometros == "" ) {

     echo "Preencha o campo da Quantidade Consumida...<br><br>";
     echo "<a href='../html/formulario.html'>Clique aqui para voltar</a>";
     exit ();
             
    }

echo "<h1> Recebi o Combustível: $combustivel <br> " .
     "Valor que é feito por Litro: " . $_REQUEST ['quilometros'] . "  <br> ";

     //Aqui vamos manipular nosso Array
     $arrayFoguete    =  [$combustivel, $quilometros];
     echo "<pre>";
     print_r ($arrayFoguete);

       $distancia = (($combustivel * 15376) / $quilometros );
  
            if ($distancia >= 384000)
            {
                echo "Parabéns, você chegou na Lua!, a quilometragem total percorrida foi de " . $distancia ;
            }
              else 
              {
                  echo "Eita, Faltou um pouco! A quilometragem total percorrida foi de " . $distancia;
              }
 
       $combustivelUsado  =  ($distancia / $combustivel);

       echo "<br> A média de distância percorrida por combustível foi de " . $combustivelUsado;
       echo "<br> Você nos disse que tinha " . $combustivel . " Litros no tanque e para fazer 15.376Km iria utilizar " . $quilometros . " Litros";

    $chegada  = ($distancia / $combustivelUsado);
    $dados    = (384000 / $combustivelUsado);
    echo "<br> <br>Combustível usado foi de: " . $chegada . " Na marca atingida, para chegar seria de " . $dados;
    
?>

