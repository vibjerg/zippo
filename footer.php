</div>
</div>
</div> <!-- root-container -->
<?php zippo_footer(); ?>
<script src="<?php echo get_template_directory_uri(); ?>/bower_components/jquery/dist/jquery.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/bower_components/foundation/js/foundation.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/bower_components/swiper/dist/idangerous.swiper.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/app.js"></script>
<script>
  $('a[href*="origin.cphhalf.dk"]').each(function(i, link) {
    var href = $(link).attr('href').replace('origin.cphhalf.dk', 'www.cphhalf.dk');
    $(link).attr('href', href);
  });
</script>

<?php wp_footer(); // js scripts are inserted using this function ?>

</body>

</html>
