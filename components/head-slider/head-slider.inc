<?php
$q = new WP_Query(array(
    'post_type' => 'post',
    'numberpost' => 4,
    'posts_per_page' => 4,
    'offset' => 0,
    'order_post' => 'DESC',
    'post_status' => 'publish',
    'category_name' => (ICL_LANGUAGE_CODE == 'da') ? 'top-nyhed' : 'top-news',
));
?>
<div class="frontpage-slider">
    <div class="frontpage-slider-images">
        <div class="swiper-container">
            <div class="swiper-wrapper">
                <?php if ($q->have_posts()) : while ($q->have_posts()) : $q->the_post(); ?>
                    <div class="swiper-slide">
                        <?php if ($config['show_text_overlay'] == true) : ?>
                            <div class="swiper-content-wrapper">
                                <div class="swiper-content">
                                    <a href="<?php the_permalink(); ?>">
                                        <h1 class="headline"><?php the_title(); ?></h1>

                                        <div class="excerpt"><?php the_excerpt(); ?></div>
                                    </a>
                                </div>
                            </div>
                        <?php endif; ?>
                        <div class="swiper-image b-lazy swiper-parlax"
                                 data-src="<?php echo zippo_thumbnail_url(null, 'big'); ?>">
                        </div>
                    </div>
                <?php endwhile; ?>
                <?php endif ?>
            </div>
        </div>
        <?php if ($config['show_tabs'] == true) : ?>
            <div class="swiper-tabs">
                <ul class="swiper-tabs__list">
                    <?php $q->rewind_posts();
                    if ($q->have_posts()) : while ($q->have_posts()) : $q->the_post(); ?>
                        <li><a href="#"><?php echo zippo_shorten_text(get_the_title(), 30); ?></a></li>
                    <?php endwhile; ?>
                    <?php endif ?>
                </ul>
            </div>
        <?php endif; ?>
        <!--<div class="pagination"></div>-->
    </div>
    <div class="frontpage-slider-menu"></div>
</div>
<?php the_post();