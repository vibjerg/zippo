<?php
/**
 * template settings
 */
global $sparta_excerpt_length;
$sparta_excerpt_length = 300;

?>
<?php get_header('safe'); ?>
<div id="main" class="large-8 columns clearfix" role="main">

    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

        <?php get_template_part('single', 'excerpt-long'); ?>
    <?php endwhile; ?>

        <?php if (function_exists('page_navi')) { // if expirimental feature is active ?>

            <?php page_navi(); // use the page navi function ?>

        <?php } else { // if it is disabled, display regular wp prev & next links ?>
            <nav class="wp-prev-next">
                <ul class="clearfix">
                    <li class="prev-link"><?php next_posts_link() ?></li>
                    <li class="next-link"><?php previous_posts_link() ?></li>
                </ul>
            </nav>
        <?php } ?>

    <?php else : ?>

        <article id="post-not-found">
            <header>
                <h1><?php _e("Not Found", "bonestheme"); ?></h1>
            </header>
            <section class="post_content">
                <p><?php _e("Sorry, but the requested resource was not found on this site.", "bonestheme"); ?></p>
            </section>
            <footer>
            </footer>
        </article>

    <?php endif; ?>

</div> <!-- end #main -->

<div class="large-4 columns">
    <?php if (is_active_sidebar('sidebar')) : ?>
        <?php dynamic_sidebar('sidebar'); ?>
    <?php endif; ?>
</div> <!-- end #content -->

<?php get_footer(); ?>
