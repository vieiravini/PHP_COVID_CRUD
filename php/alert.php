<?php

    if(isset($_GET['update']) && $_GET['update'] == 'true'){
        echo "Registro alterado com sucesso!";
    }elseif(isset($_GET['update']) && $_GET['update'] == 'false'){
        echo "Ocorreu um erro.";
    }

    if(isset($_GET['register']) && $_GET['register'] == 'true'){
        echo "Registro adicionado com sucesso!";
    }elseif(isset($_GET['register']) && $_GET['register'] == 'false'){
        echo "Ocorreu um erro.";
    }

    if(isset($_GET['delete']) && $_GET['delete'] == 'true'){
        echo "Registro removido com sucesso!";
    }elseif(isset($_GET['delete']) && $_GET['delete'] == 'false'){
        echo "Ocorreu um erro.";
    }

?>