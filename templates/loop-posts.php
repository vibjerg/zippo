    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

        <?php get_template_part('single', 'excerpt'); ?>
    <?php endwhile; ?>
    <?php endif; ?>
    <a class="button" href="<?php echo icl_get_home_url(); ?>/category/<?php echo get_query_var('category_name'); ?>"><?php echo __('Læs flere nyheder', 'Sparta'); ?></a>
