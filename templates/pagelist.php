<?php
/*
Template Name: Page-List template
*/
?><?php get_header('safe'); ?>
<div id="main" class="large-12 clearfix" role="main">
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <?php get_template_part('pagelist', 'item'); ?>
    <?php endwhile; ?>
</div>
<?php get_footer('zippo'); ?>