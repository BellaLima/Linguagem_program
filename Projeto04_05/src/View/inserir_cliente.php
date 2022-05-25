<!doctype html>
<html lang="en">
  <head>
   
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

  
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Cadastro de clientes</title>
  </head>
  <body class="container">
      <?php require_once "barra_navegacao.php";?>

    <h1>Cadastro de clientes</h1>
    <form action="/cliente/inserir" method="post">
        <div class="row">
            <div class="col-5">
                <label for="nome" class="label-control">Digite o nome:</label>
                <input type="text" class="form-control" name="nome" id="nome">
            </div>
        </div>
        <br>
        <br>

        <div class="row">
            <div class="col-5">
                <label for="email" class="label-control">Digite o e-mail:</label>
                <input type="text" class="form-control" name="email" id="email">
            </div>
        </div>
        <br>
        <br>

        <div class="row">
            <div class="col-2">
                <label for="idade" class="label-control">Digite a idade:</label>
                <input type="number" class="form-control" name="idade" id="idade">
            </div>
            <br>
            <br>

        <div class="row flex-row-reverse">
            <div class="col-auto">
            <button class="btn btn-danger text-center" type="submit">Apagar</button>
            <button class="btn btn-success text-center" type="submit">Próximo</button>
            </div>
        </div>
    </form>

    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    
  </body>
</html>