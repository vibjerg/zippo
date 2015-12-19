<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes('xhtml'); ?>>
  <head>
    <meta charset="utf-8"/>
    <meta name = "viewport" content = "width = device-width"/>
    <meta name = "viewport" content = "initial-scale = 1.0"/>


    <title><?php the_title(); ?></title>

    <link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>" type="text/css" media="screen" />
  <style type="text/css">
    body, h1, h2, h3, h4, h5, h6, p, a {font-family: forza, helvetica, arial;}
    body {background-color: white; font-size:15px; margin:8px; line-height:19px;}
    h1, h2 {color: #F36C20;}
    h3, h4, h5 {color: #1A1A1A;}
    h1 {font-size:20px; margin:24px 0 8px; line-height:21px;}
    h2 {font-size:19px; margin:24px 0 8px; line-height:21px;}
    h3 {font-size:18px; margin:16px 0 4px; text-transform: none; font-weight: bold}
    h4 {font-size:16px; margin:16px 0 4px;}
    h5 {font-size:15px; margin:15px 0 2px; font-style: normal; font-weight: bold;}
    h6 {font-size:14px; margin:14px 0 2px;}
    body {margin:8px 8px 8px;}
    p, div, ul, ol {margin:0 0 8px;}
    a, a:visited {color:#F36C20;}
    img {max-width:100%; margin-bottom:8px; }
    embed {max-width:100%; margin-bottom:8px;}
    iframe {max-width:100%; margin-bottom:8px;}
    table {width: 100%; clear: both; border-collapse: collapse; border: solid 1px #ccc;}
    tr:first-child {
            background-color: #F36C20;
            color: white;
    }
    
    table tr td, table tr th {padding: 3px; vertical-align: middle;}
    th {background:#F36C20; color:white;}
    .ssba {
      display: none;
    }
  </style>
    <?php wp_head(); // WP head hook ?>
  </head>

  <body>
    <div id="body-container">
      <div id="container">
        <div class="hfeed content">


          <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

              <div id="post-<?php the_ID(); ?>">

                <?php //hybrid_before_entry(); // Before entry hook ?>
                                <!--<h2><?php the_title(); ?></h2>-->
                <div class="entry-content">
                  <?php the_content(); ?>
                </div><!-- .entry-content -->
              </div><!-- .hentry -->
            <?php endwhile; ?>

          <?php else : ?>

            <p class="no-data">
              <?php _e('Sorry, no posts matched your criteria.', 'hybrid'); ?>
            </p><!-- .no-data -->

          <?php endif; ?>
        </div><!-- .content .hfeed -->
      </div>
    </div>
  </body>
  <style>
    html {
      margin-top: 0 !important;
    }
  </style>
<?php wp_footer(); ?>
</html>
