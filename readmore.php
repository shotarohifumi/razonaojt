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
	<div class="boxes">
		<div class="box1">
			<img src="<?php echo get_the_post_thumbnail_url(get_the_ID(), 'medium'); ?>" alt="cafe">
			<div class="words">
					<p><?php echo get_the_date(); ?></p>
					<p><?php the_title(); ?></p>
					<a class="underline" href="<?php the_permalink(); ?>"><span>READ MORE</span></a>
			</div>
		</div>
	</div>
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

