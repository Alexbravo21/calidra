<?php 
    global $site_url;
    $site_url = 'http://localhost/calidra/';
    $menu_items = Array(
        ["corporativo", "corporativo"],
        ["usos cotidianos", "usos-cotidianos"],
        ["Alimenticia y agrícola", "alimenticia-y-agricola"],
        ["química", "quimica"],
        ["minería y siderúrgica", "mineria-y-siderurgica"],
        ["estabilización de suelos", "estabilizacion-de-suelos"],
        ["construcción", "construccion"],
        ["localizador", "localizador"]
    )
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans+Condensed:ital,wght@0,300;0,700;1,300&display=swap" rel="stylesheet"><link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Lato&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@900&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.2/css/bulma.min.css">
    <link rel="stylesheet" href="<?=get_template_directory_uri()?>/assets/css/style.css">
    <title>Calidra</title>
</head>
<body>
<div class="nav-container">
    <div class="top-menu">
        <div class="search-container container">
            <p>blog</p>
            <p>contacto</p>
            <p><i class="fas fa-search"></i></p>
        </div>
    </div>
    <nav class="container">
        <div class="logo">
            <a href="<?=$site_url ?>"><img src="<?=get_template_directory_uri()?>/assets/img/logo.png" alt="Calidra"></a>
        </div>
        <div class="burger">
            <span></span>
            <span></span>
            <span></span>
            <span></span>
        </div>
        <ul class="nav-ul">
            <?php 
                foreach ($menu_items as $menu_item){
                    echo "<a href='".$site_url.$menu_item[1]."'><li>".$menu_item[0]."</li></a>";
                }
            ?>
        </ul>
    </nav>
</div>