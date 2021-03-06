<!doctype html>
<html lang="en">
  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Exercicio 3</title>
  </head>
  <body class="container">
    <h1>Exercicio 3</h1>
    <form action="resposta.php" method="POST">

        <div class="row">
            <?php
            for ($i = 1; $i <= 10; $i++) {
            ?>
                <div class="col">
                    <label for="valor<?= $i ?>" class="label-control">Insira um valor: <?= $i ?>:</label>
                    <input type="number" name="valor<?= $i ?>" id="valor<?= $i ?>" class="form-control" />
                </div>
            <?php
            }
            ?>
        </div>
        <div class="row mt-4">
            <div class="col">
                <button type="submit" class="btn btn-primary">Enviar</button>
            </div>
        </div>
        </div>
    </form>

   
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    
  </body>
</html>