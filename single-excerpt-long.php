<a href="<?php echo get_permalink(); ?>" rel="bookmark">
    <article id="post-<?php the_ID(); ?>" <?php post_class('clearfix single-excerpt'); ?> role="article">
        <div class="title">
            <?php the_title('<h6 class="entry-title">', '</h6>'); ?>
        </div>
        <p class="summary clearfix">
            <?php if (has_post_thumbnail()): ?>
                <?php the_post_thumbnail('thumbnail', array('class' => 'thumb', 'align' => 'left')); ?>
            <?php else : ?>
                <img class='img thumb' src='<?php the_default_image(); ?>'/>
            <?php endif; ?>
            <?php echo zippo_shorten_text(wp_strip_all_tags(get_the_excerpt()), 400); ?>
        </p>
        <hr/>
    </article>
    <!-- end article -->
</a>
