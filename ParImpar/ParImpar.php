<?php
    require_once('funcao.php');


$cont = (int) 0;
$exibirImpar = (int) 0;
$exibirPar = (int) 0;

$numeroInicial = (int) 0;
$numeroFinal = (int) 0;

if(isset ($_POST['btnCalc'])){
    
    if( $_POST["stlPar"] = "" || $_POST["stlIm"] = "" ){
        echo("Caixa vazia, selecione um número!</h1>");
    }
    else{
        $numeroInicial = (int)$_POST['sltPar'];
        $numeroFinal = (int)$_POST['sltIm'];
    }
    
    if($numeroInicial >= $numeroFinal){ 
                        
        echo("<h1>selecione um numero maior!</h1>");
    
    }
}
?>

<html>
<head>
    <meta charset="utf-8">
    <link rel="" href="css/style.css">
    
</head>

<body>

    <header>Pares e Impares</header>

    <form name="frmParimp" method="post" action="">
        <label> <h1>Numero Inicial</h1></label>

        <select name="sltPar">

            <?php  
        for($cont=0;$cont<=500;$cont++){
            
        echo "<option value='$cont'>$cont  </option>"; 
    }
  
  ?>

        </select>



        <label> <h2>Numero Final</h2></label>

        <select name="sltIm">

            <?php  
        for($cont=100;$cont<=1000;$cont++){
            
        echo "<option value='$cont'>$cont  </option>"; 
    }
  
  ?>

        </select>
        <input type="submit" name="btnCalc" value="Calcular">


        <table id="resultado">

            <tr>
                <td id="tabela">
                    <?php
                    for($cont=$numeroInicial;$cont<=$numeroFinal;$cont++){
                        if ( ($cont % 2) == 0){
                            echo ($cont."<br>");
                    }
                } 
                ?>
                </td>

                <td id="segundaTabela">
                    <?php
                
                   for($cont=$numeroInicial;$cont<=$numeroFinal;$cont++){ 
                    
                    if( ($cont % 2) != 0){
                           echo ($cont."<br>");
                        
                        
                       }
                   
                   }
                     
                  ?>
                </td>


            </tr>

            <tr>

                <td class="quantidade">

                    <?php
                
                for($cont=$numeroInicial;$cont<=$numeroFinal;$cont++){
                    if(($cont %2 ) != 0 ){
                        $exibirPar = $exibirPar +1;
                       }
                    
                }
                
                 echo ($exibirPar);
                    ?>

                </td>


                <td class="quantidade">

                    <?php
                
                for($cont=$numeroInicial;$cont<=$numeroFinal;$cont++){
                    if(($cont %2 ) != 0  ){
                   $exibirImpar = $exibirImpar +1; 
                    }
                     
                }
                echo ($exibirImpar);
                  
            
            ?>


                </td>
            </tr>
        </table>
    </form>
</body>

</html>
