<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans+Condensed:ital,wght@0,300;0,700;1,300&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.2/css/bulma.min.css">
    <link rel="stylesheet" href="<?=get_template_directory_uri()?>/assets/css/style.css">
    <title>Calidra</title>
</head>
<body>
    <?php 
        $menu_items = Array(
            "corporativo",
            "usos cotidianos",
            "Alimenticia y agrícola",
            "química",
            "minería y siderúrgica",
            "estabilización de suelos",
            "construcción",
            "localizador"
        )
    ?>
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
            <img src="<?=get_template_directory_uri()?>/assets/img/logo.png" alt="Calidra">
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
                    echo "<li>".$menu_item."</li>";
                }
            ?>
        </ul>
    </nav>
</div>