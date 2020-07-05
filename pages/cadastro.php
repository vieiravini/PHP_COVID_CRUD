<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="../style/style.css">
    <title>Cadastrar - Combate ao COVID-19</title>
</head>
<body>


    <header>

        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container">
                <a class="navbar-brand" href="#">Combate ao COVID-19</a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <a class="nav-item nav-link " href="../index.php">Home </a>
                    <a class="nav-item nav-link active" href="#">Cadastrar</a>
                    <a class="nav-item nav-link" href="listar.php">Listar</span></a>
                </div>
            </div>
        </div>
        </nav>

    </header>


    <main>
        <br><br>
        <div class="container">

            <form class="w-75 p-3 m-auto" method="POST" action="../php/register.php">
            <div class="alert <?php include '../php/alertclass.php';?>">
                <?php include "../php/alert.php" ?>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                        <label for="inputName">Nome:</label>
                        <input type="text" class="form-control" id="inputName" name="nome" placeholder="Lord Voldemort">
                </div>
                <div class="form-group col-md-6">
                    <label for="inputidade">Idade:</label>
                    <input type="text" class="form-control" id="inputidade" name="idade" placeholder="115">
                </div>
            </div>
            <div class="form-group">
                <label for="inputAddress">Logradouro</label>
                <input type="text" class="form-control" id="inputAddress" name="logradouro" placeholder="Spinner's End">
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="inputBairro">Bairro</label>
                    <input type="text" class="form-control" id="inputBairro" name="bairro" placeholder="Diagon Alley">
                </div>
                <div class="form-group col-md-6">
                    <label for="inputCity">Cidade</label>
                    <input type="text" class="form-control" id="inputCity" name="cidade" placeholder="Hogsmeade">
                </div>
            </div>
            
            
            <button type="submit" class="btn btn-primary">Cadastrar</button>
            </form>
        </div>

    </main>






<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    
</body>
</html>