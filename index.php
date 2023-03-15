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

    <section class="articles wrapper">
        <h1>Latest Articles</h1>
        <div class="boxes">
            <div class="box1">
                <img src="<?php echo get_template_directory_uri(); ?>/img_file/post_img_1.png" alt="cafe">
                <div class="words">
                    <p>2018/5/20</p>
                    <p>おしゃれなカフェがありますよ</p>
                    <a>READ MORE</a>
                </div>

            </div>
            <div class="box2">
                <img src="<?php echo get_template_directory_uri(); ?>/img_file/post_img_2.png" alt="village">
                <div class="words">
                    <p>2018/5/19</p>
                    <p>あのネオンはいつ交換するのか！？観覧車の謎に迫る！</p>
                    <a>READ MORE</a>
                </div>

            </div>
            <div class="box3">
                <img src="<?php echo get_template_directory_uri(); ?>/img_file/post_img_3.png" alt="office">
                <div class="words">
                    <p>2018/5/18</p>
                    <p>ラソナの社内はこんなのよ</p>
                    <a>READ MORE</a>
                </div>

            </div>
            <div class="box4">
                <img src="<?php echo get_template_directory_uri(); ?>/img_file/post_img_4.png" alt="araha">
                <div class="words">
                    <p>2018/5/17</p>
                    <p>お隣のアラハはハワイ？</p>
                    <a>READ MORE</a>
                </div>

            </div>
            <div class="box5">
                <img src="<?php echo get_template_directory_uri(); ?>/img_file/post_img_5.png" alt="tent">
                <div class="words">
                    <p>2018/5/16</p>
                    <p>なぜテント？ラソナの人に聞いてみた</p>
                    <a>READ MORE</a>
                </div>
            </div>
            <div class="box6">
                <img src="<?php echo get_template_directory_uri(); ?>/img_file/post_img_6.png" alt="bayarea">
                <div class="words">
                    <p>2018/5/15</p>
                    <p>ベイエリアおしゃれすぎる問題</p>
                    <a>READ MORE</a>
                </div>

            </div>
        </div>
<<<<<<< HEAD
        <div class="box2">
            <img src="<?php echo get_template_directory_uri(); ?>/img_file/post_img_2.png" alt="village">
            <p>2018/5/19</p>
            <p>あのネオンはいつ交換するのか！？観覧 <br> 車の謎に迫る！</p>
            <p>READ MORE</p>
        </div>
        <div class="box3">
            <img src="<?php echo get_template_directory_uri(); ?>/img_file/post_img_3.png" alt="office">
            <p>2018/5/18</p>
            <p>ラソナの社内はこんなのよ</p>
            <p>READ MORE</p>
        </div>
        <div class="box4">
            <img src="<?php echo get_template_directory_uri(); ?>/img_file/post_img_4.png" alt="araha">
            <p>2018/5/17</p>
            <p>お隣のアラハはハワイ？</p>
            <p>READ MORE</p>
        </div>
        <div class="box5">
            <img src="<?php echo get_template_directory_uri(); ?>/img_file/post_img_5.png" alt="tent">
            <p>2018/5/16</p>
            <p>なぜテント？ラソナの人に聞いてみた</p>
            <p>READ MORE</p>
        </div>
        <div class="box6">
            <img src="<?php echo get_template_directory_uri(); ?>/img_file/post_img_6.png" alt="bayarea">
            <p>2018/5/15</p>
            <p>ベイエリアおしゃれすぎる問題</p>
            <p>READ MORE</p>
        </div>
</div>
=======
       
    </div>
>>>>>>> c4f6cbc9bdf33c6099335d6f35479829e3db67de
</section>
</div>
</div>




<!-- フッターの読み込み -->
<?php get_footer(); ?>