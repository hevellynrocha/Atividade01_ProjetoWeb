}
<?php
$media = 0;
$nota1 = null;
$nota2 = null;
$nota3 = null;
$nota4 = null;

if (isset($_POST['btnCalcular']))
{
    $nota1 = $_POST['txtn1'];
    $nota2 = $_POST['txtn2'];
    $nota3 = $_POST['txtn3'];
    $nota4 = $_POST['txtn4'];
    require_once('caixaVazia.php');    
} 
?>
<!DOCTYPE html>
<html lang="pt-BR">
    <head>
         <title>
              Calculadora
         </title>
         <meta charset="utf-8">
        <link rel="stylesheet" type="text/css"      
        href="css/style.css"> 
        <meta charset="utf-8">
    </head>
    <body>
        <div id="tabela">
            
            <form name="calculos.php" 
            method="post" action="">
            
            <div id="titulo">
             <h1>Calculo de Médias</h1>
            </div>
                
        <div>
            <p>Nota 1:<input class="" type="" name="txtn1" value="<?=$nota1?>" required></p>    
            <p>Nota 2:<input class="" type="" name="txtn2" value="<?=$nota2?>" required></p>
            <p>Nota 3:<input class="" type="" name="txtn3" value="<?=$nota3?>" required></p> 
            <div id="button"><input class="button" type="submit" name="btnCalcular" value="Calcular">
                        </div>
            <div id="botaoReset">  
                <a href="calculos.php">Atualizar</a> 
           </div>   
            </div>
            </form>
             
            <div id="colunaMed">
            
    
            <footer id="resultado">
                <h2>Sua média é: <?=$media;?> </h2> 
            </footer>    
            
            </div>
        </div>
    </body>
</html>