<?php

add_theme_support('menus');
add_theme_support("post-thumbnails");

//メニュー有効
function register_my_menus()
{
    register_nav_menus(array(
        'header' => 'ヘッダー', //表示する位置
    ));
}
add_action('after_setup_theme', 'register_my_menus');

function my_script_init()
{
    // WordPressのjQueryを読み込まない
    wp_deregister_script('jQuery');
    // 標準のjQueryをCDNで読み込み
    wp_enqueue_script('jQuery_cdn', '//code.jQuery.com/jQuery-3.5.1.min.js');
}
add_action('wp_footer', 'my_script_init');

?>