<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="style/style.css">
    <title>Combate ao Covid-19</title>
</head>
<body>

    

        <header style="height: 7vh;">

            <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
                <div class="container">
                    <a class="navbar-brand" href="#">Combate ao COVID-19</a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                        <div class="navbar-nav">
                            <a class="nav-item nav-link active " href="#">Home </a>
                            <a class="nav-item nav-link " href="pages/cadastro.php">Cadastrar</a>
                            <a class="nav-item nav-link" href="pages/listar.php">Listar</span></a>
                        </div>
                    </div>
                </div>
            </nav>

        </header>

        <main>
            <div class="container" style="height: calc(100vh - 7vh)" >
            <div class="flex" style="display: flex; justify-content: center;">
            
            <div class="container-left" style="margin: 0 200px 0 0;">
                <div class="container" style="max-width: 20rem;">
                <?php 
                        require("php/api/covidApiSP.php");
                        require_once('php/api/geoplugin.class.php');
                        $geoplugin = new geoPlugin();
                        $geoplugin->locate();
                        $decode = json_decode( $response, FALSE );
                        foreach($decode->data as $valor){
                            if($valor->uf == $geoplugin->regionCode){
                    ?>
                    <br><br><br><br>
                            <h2 class="row"><?php echo $valor->state ?></h2>
                    <div>
                        <h5>Casos:</h5>
                        <p> <?php echo number_format($valor->cases, 0, ',', '.') ?></p>
                    </div>
                    <div>
                        <h5>Casos Falsos:</h5>
                        <p> <?php echo number_format($valor->refuses, 0, ',', '.')?></p>
                    </div>
                    <div>
                        <h5>Suspeitos:</h5>
                        <p> <?php echo number_format($valor->suspects, 0, ',', '.')?></p>
                    </div>
                    <div>
                        <h5>Mortes:</h5>
                        <p> <?php echo number_format($valor->deaths, 0, ',', '.')?></p>
                    </div>
                    <?php }} ?>
                </div>
            </div>

            <br><br>
            <div class="container-right">
                <div class="container" style="max-width: 20rem;">
                <?php 
                    require("php/api/covidApiBrazil.php");
                    $decode = json_decode( $response, FALSE );
                ?>
                    
                    <br><br><br><br>
                    <h2 class="row"><?php echo $decode->data->country ?></h2>
                    <div>
                        <h5>Casos:</h5>
                        <p> <?php echo number_format($decode->data->cases, 0, ',', '.') ?></p>
                    </div>
                    <div>
                        <h5>Confirmados:</h5>
                        <p> <?php echo number_format($decode->data->confirmed, 0, ',', '.')?></p>
                    </div>
                    <div>
                        <h5>Recuperados:</h5>
                        <p> <?php echo number_format($decode->data->recovered, 0, ',', '.')?></p>
                    </div>
                    <div>
                        <h5>Mortes:</h5>
                        <p> <?php echo number_format($decode->data->deaths, 0, ',', '.')?></p>
                    </div>
                </div>
            </div>
            </div>
            <br><br><br><br><br><br>
                <div class="d-flex justify-content-center">
                    
                        <button id="statesbtn" class="btn btn-primary btn-block" style="margin: 0 150px 0 150px"><h4>Estados</h4></button>
                        
                        <button id="countriesbtn" class="btn btn-primary btn-block" style="margin: 0 150px 0 150px"><h4>Paises</h4></button>
                    
                </div>
            </div>
            

            <div class="container">
                <div id="statesAPI" class="container">
                <table class="table table-hover">
                    <thead class="thead-dark">
                        <tr>
                        <th scope="col">UF</th>
                        <th scope="col">Estado</th>
                        <th scope="col">Casos</th>
                        <th scope="col">Suspeitos</th>
                        <th scope="col">Casos Falsos</th>
                        <th scope="col">Mortes</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                            require("php/api/covidApiSP.php");
                            require_once('php/api/geoplugin.class.php');
                            $geoplugin = new geoPlugin();
                            $geoplugin->locate();
                            $decode = json_decode( $response, FALSE );
                                foreach($decode->data as $valor){
                        ?>    

                            <tr>
                            <th><?php echo $valor->uf?></th>
                            <td><?php echo $valor->state?></td>
                            <td><?php echo number_format($valor->cases, 0, ',', '.')?></td>
                            <td><?php echo number_format($valor->suspects, 0 ,',', '.')?></td>
                            <td><?php echo number_format($valor->refuses, 0 ,',', '.')?></td>
                            <td><?php echo number_format($valor->deaths, 0 ,',', '.')?></td>
                            </tr>
                            <?php } ?>
                                
                    </tbody>
                </table>

                </div>


                <div id="countriesAPI" class="container">
                <table class="table table-hover">
                    <thead class="thead-dark">
                        <tr>
                        <th scope="col">País</th>
                        <th scope="col">Casos</th>
                        <th scope="col">Recuperados</th>
                        <th scope="col">Mortes</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                            require("php/api/covidApiPaises.php");
                            require_once('php/api/geoplugin.class.php');
                            $geoplugin = new geoPlugin();
                            $geoplugin->locate();
                            $decode = json_decode( $response, FALSE );
                                foreach($decode->data as $valor){
                        ?>    

                            <tr>
                            <td scope="row"><?php echo $valor->country?></td>
                            <td><?php echo number_format($valor->cases,0,',', '.')?></td>
                            <td><?php echo number_format($valor->recovered,0,',', '.')?></td>
                            <td><?php echo number_format($valor->deaths,0,',', '.')?></td>
                            </tr>
                            <?php } ?>
                                
                    </tbody>
                </table>

                </div>
            </div>
        </main>







        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>

        <script>    

            

            $('#statesbtn').click(function(){
                $('#statesAPI').toggle();
            })

            $('#countriesbtn').click(function(){
                $('#countriesAPI').toggle();
            })

        </script>
    
</body>
</html>