<?php 
function my_script_init(){ 
    // WordPressのjQueryを読み込まない
    wp_deregister_script('jQuery');
    // 標準のjQueryをCDNで読み込み
    wp_enqueue_script( 'jQuery_cdn', '//code.jQuery.com/jQuery-3.5.1.min.js');
}
add_action('wp_enqueue_scripts', 'my_script_init');

?>