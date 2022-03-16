<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Exercicio1 Resposta</title>
  </head>
  <body class="container">
    <h1>Exercicio1 Resposta</h1>
    <?php
           for ($i= 1; $i<=10; $i++){
               $vetor[$i] = $_POST["valor$i"];
           }
           $posiscao = 0;
           $maior = 0;
            
           //var_dump($vetor);
           foreach($vetor as $chave => $valor){
               echo "Posição do vetor: $chave e seu valor é $valor";
               echo "<br>";
               if ($valor > $maior){
                   $maior = $valor;
                   $posiscao = $chave;
               }
           }
           echo "O maior valor é $maior e está na posição $posiscao"
    ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </body>
</html>