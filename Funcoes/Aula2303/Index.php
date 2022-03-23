<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Funções</title>
  </head>
  <body class="container">
    <h1>Funções</h1>
    <?=date ("d/m/Y")?>
<br>
    <?=date("h:i")?>
<br>
    <?php
    $valor = 10004.789;
    echo "R$".(number_format($valor,2,',','.'));?>
<br>

    <?php
    function formatarNumero($numero){
        echo "R$".(number_format($numero,2,',','.'));
    }

    function retornarNumero($numero){
        return "R$".(number_format($numero,2,',','.'));
    }

    formatarNumero(10003.731);
    echo "<br/>";
    formatarNumero(879.564);
    echo "<br/>";

    echo retornarNumero(2000.700);
    $numero = retornarNumero(150.66);
    echo "<br/>";
    echo $numero;
    ?>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>


  </body>
</html>