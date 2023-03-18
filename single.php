<?php get_header(); ?>

<h1>More Articles</h1>

    <section>	
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
                    <a class="underline" href="<?php the_permalink(); ?>"><span>READ MORE</span></a>
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
		<button type="button" class="btn4back" onclick="history.back();">back</button>
		<!-- <a href="<?php the_permalink(); ?>" class="mbtn">more</a> -->




<?php get_footer(); ?>