<!-- ヘッダー読み込み -->

<?php get_header(); ?>

<div class="allwrapper">
    <div class="wrapper">

        <!-- kv -->
        <section class="kv">

            <!-- <div class="kvimg wrapper"> -->
            <div class="n2_clear">
                <?php
                echo do_shortcode('[smartslider3 slider="2"]');
                ?>
                <div class="kv_sm_img"><img src="<?php echo get_template_directory_uri(); ?>/img_file/logo.png" alt=""></div>
                <div class="kv_text_img"><img src="<?php echo get_template_directory_uri(); ?>/img_file/visual_text_pc.png" alt=""></div>
                
            </div>


            <div class="kv_text inner">進化し続ける「街」アメリカンビレッジマガジン</div>

        </section>
    </div>

		<h1>Latest Articles</h1>

    <section class="articles wrapper">
		<div class="boxes">
				
					<?php
					if (have_posts()):
						while(have_posts()):
							the_post();
					?>

            <div class="box1">
                <img src="<?php echo get_the_post_thumbnail_url(get_the_ID(), 'medium'); ?>" alt="cafe">
                <div class="words">
                    <p><?php echo get_the_date(); ?></p>
                    <p><?php the_title(); ?></p>
                    <a class="underline" href="<?php the_permalink(); ?>">READ MORE</a>
                </div>
            </div>
         
						<?php
							endwhile;
							else:
						?>
						<div class="box1">
							<p>表示する記事がありません</p>
						</div>
						<?php endif; ?>
    </div>
		</section>

		<a href="<?php the_permalink(); ?>" class="mbtn">more</a>

</div>

<!-- フッターの読み込み -->
<?php get_footer(); ?>