<?php
/**********************************************************************************************************************
 * Objetivo; Arquivo de funções matemáticas que sera otilizado dentro do projeto.
 * Autor; Hevellyn.
 * Data; 04/02/2022.
 * versão 1.0
 *********************************************************************************************************************/

 //Criando uma função para calcular as operações matemáticas
 function operacaoMatematica ($numero1, $numero2, $operacao)
 {
     //Declaraçã de variaveis locais da função
     $num1 = (double) $numero1;
     $num2 = (double) $numero2;
     $result = (double) 0;
     $tipoCalculo = (string) $operacao;

     switch ($tipoCalculo)
         {
             case "SOMAR":
                 $result = $num1 + $num2;
                 break;
             case "SUBTRAIR":
                 $result = $num1 - $num2;
                 break;
             case "MULTIPLICAR":
                 $result = $num1 * $num2;
                 break;
             case "DIVIDIR":
                 if($num2 == 0)
                     echo('<script> alert("Não é possível realizar divisão, onde o valor 2 é igual a 0!"); </script>');
                 else
                     $result = $num2 / $num2;

                 break;
             
             default:
                 //Processamento caso não entre em nenhuma das opções
         }

         $result = round($result, 2);
     
     return $result;
 }
?>