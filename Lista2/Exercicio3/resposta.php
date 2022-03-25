<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Exercicio 3 resposta</title>
  </head>
  <body class="container">
    <h1>Exercicio 3 resposta</h1>
    <?php
    $existe = 0;

    for ($i = 1; $i <= 10; $i++) {
        $vetor[$i] = $_POST["valor$i"];
    }

    foreach ($vetor as $chave => $valor) {
        $existe = 0;
        for ($i = 1; $i <= 10; $i++){
            if ($vetor[$i] == $valor){
                $existe++;
            }
        }
        if ($existe >= 2)
            $vetor[$chave] = "-";
        echo "Valor: ".$vetor[$chave]."<br>";
    }
    ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

  </body>
</html>