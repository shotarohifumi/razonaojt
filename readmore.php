<?php
  require_once("../../../wp-config.php");
 
  $now_post_num = $_POST['now_post_num'];
  $get_post_num = $_POST['get_post_num'];
  $loopcounter = 0;
  $html = '';
?>
 
<?php
  $args = array(
'post_type' => 'post',
'orderby' => 'post_date',
'order' => 'DESC',
    'posts_per_page' => $get_post_num,
    'offset' => $now_post_num,
  );
  $posts = new WP_Query($args);
?>
 
<?php if ($posts -> have_posts()) : ?>
  <?php while($posts -> have_posts()) : $posts -> the_post();?>
  <?php $loopcounter++;?>
 
<?php //ヒアドキュメントで変数に格納し続ける
$html .= <<<EOM
●ここに投稿記事の内容（タイトルとか画像とか）を記述（元のファイルと同じように投稿記事を出力させればOK）
EOM;
?>
 
  <?php endwhile;?>
<?php endif; wp_reset_postdata();?>
 
<?php // カウンターを用意しておいてボタンを表示させるかを判別
  if($loopcounter == $get_post_num) {
  // 表示させようとした投稿数に実際の投稿が届かない場合はボタンの表示はない
    $html .= '<div id="more_disp"<p class="mbtn">MORE</p></div>';
  }
  echo $html;

