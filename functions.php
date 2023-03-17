<?php
add_theme_support( 'post-thumbnails' );
add_theme_support('menus');

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


function sample_widgets(){
 register_sidebar(array(
 'name' => '共通サイドバー',/* ←追加したいウィジェットの名前 */
 'description' => 'サイドバーウィジェット',/* ←追加したいウィジェットの概要 */
 'id' => 'sidebar',/* ←追加したいウィジェットのID */
 'before_widget' => '<div>', /* ←追加したいウィジェットを囲う開始タグ */
 'after_widget' => '</div>',/* ←追加したいウィジェットを囲う閉じタグ */
 'before_title' => '<h3>',/* ←追加したいウィジェットのタイトルを囲う開始タグ */
 'after_title' => '</h3>'/* ←追加したいウィジェットのタイトルを囲う閉じタグ */
 ));
}
add_action('widgets_init', 'sample_widgets');

?>