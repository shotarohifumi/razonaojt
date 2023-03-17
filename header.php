<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>北谷町観光協会!</title>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/reset.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/style.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />

    <?php wp_head(); ?>
</head>

<body>
    <div class="allwrapper">

            <?php wp_nav_menu(array(
                'theme_location' => 'header',
                'hamburger' => 'ハンバーガーメニュー',
                'container' => 'div',
                'depth' => 1,
                'container_class' => 'global__navi-container',
                'menu_id'         => 'global__navi-menu', // ulのid名
                'menu_class' => 'global__navi-menu', // ulのclass名
            ));
            ?>
        </div>

   
    </div>