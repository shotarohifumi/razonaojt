<?php get_header(); ?>

<h1>More Articles</h1>

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




<?php get_footer(); ?>