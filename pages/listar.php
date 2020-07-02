<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="../style/style.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    <title>Listagem - Combate ao COVID-19</title>
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
                    <a class="nav-item nav-link" href="cadastro.php">Cadastrar</a>
                    <a class="nav-item nav-link active" href="#">Listar</span></a>
                </div>
            </div>
        </div>
        </nav>

    </header>
    <br><br>
    <main>

        <div class="container">
            <h2>Listagem</h2>
            <table class="table table-hover">
                <thead class="thead-dark">
                    <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nome</th>
                    <th scope="col">Idade</th>
                    <th scope="col">Logradouro</th>
                    <th scope="col">Bairro</th>
                    <th scope="col">Cidade</th>
                    <th colspan="2" scope="col">Ações</th>
                    </tr>
                </thead>
                <tbody>
                <?php 
                require "../php/list.php";
                if(is_array($pessoas)){
                foreach($pessoas as $pessoa){?>
                    <tr>
                    <th scope="row"><?php echo $pessoa['id']?></th>
                    <td><?php echo $pessoa['nome']?></td>
                    <td><?php echo $pessoa['idade']?></td>
                    <td><?php echo $pessoa['logradouro']?></td>
                    <td><?php echo $pessoa['bairro']?></td>
                    <td><?php echo $pessoa['cidade']?></td>
                    <td><a class="icone" href="../php/update.php?id=<?=$pessoa['id']?>">
                        <i class="far fa-edit"></i></a>
                    </td>
                    
                    <td><a id="open-modal" href="#" class="icone"><i class="far fa-trash-alt"></i></a></td>
                    
                    </tr>

                    <div id="myModal" class="modal fade" tabindex="-1" role="dialog">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title">Excluir <?php echo $pessoa['nome']?></h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                
                                </button>
                            </div>
                            <div class="modal-body">
                                <h6>Tem certeza que deseja excluir <?php echo $pessoa['nome']?>?</h6>
                            </div>
                            <div class="modal-footer">
                            <a href="../php/delete.php?id=<?=$pessoa['id']?>"><button type="button" class="btn btn-danger">Exluir</button></a>
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                            </div>
                            </div>
                        </div>
                    </div>
                    <?php }}?>
                </tbody>
            </table>

        </div>
    </main>

            
    

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>

        <script>

            

            $('#open-modal').click(function(){
                $('#myModal').modal('show');
                $('#myModal').on('shown.bs.modal', function () {
                $('#myInput').trigger('focus')
                })
            })
        </script>
    
</body>
</html>