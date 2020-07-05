<?php
    if(isset($_GET['update']) && $_GET['update'] == 'true'){
        echo "show alert-success";
    }elseif(isset($_GET['update']) && $_GET['update'] == 'false'){
        echo "show alert-danger";
    }

    if(isset($_GET['register']) && $_GET['register'] == 'true'){
        echo "show alert-success";
    }elseif(isset($_GET['register']) && $_GET['register'] == 'false'){
        echo "show alert-danger";
    }

    if(isset($_GET['delete']) && $_GET['delete'] == 'true'){
        echo "show alert-success";
    }elseif(isset($_GET['delete']) && $_GET['delete'] == 'false'){
        echo "show alert-danger";
    }



?>