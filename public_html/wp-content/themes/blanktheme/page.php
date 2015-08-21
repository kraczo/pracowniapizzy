<?php get_header(); ?>
<!-- <script type="text/javascript" src="https://apis.google.com/js/plusone.js">
    {"parsetags": "explicit"}
    </script>
    <script type="text/javascript">
    function renderWidget() {
        gapi.plusone.render("widget-div" );
    }
    </script>
<div id="googlebutton"><a onClick="renderWidget();"><img src="<?php bloginfo('template_url'); ?>/images/googleplus@64.png" /></a>
    <div id="widget-div"></div></div> -->
<?php get_sidebar(); ?>

    <div id="home" class="big">
      <style>
         
::-webkit-scrollbar {
width: 12px;
}

::-webkit-scrollbar-track {
    -webkit-box-shadow: inset 0 0 6px rgba(169,169,169,0.6); 
    border-radius: 10px;
}
 
::-webkit-scrollbar-thumb {
    border-radius: 10px;
    -webkit-box-shadow: inset 0 0 6px rgba(169,169,169,0.6); 
}
        </style>
  
    <?php while (have_posts()) : the_post(); ?>
        
          <h1><?php the_title(); ?></h1>
          
          <div id="page_content">
          <?php the_content(); ?>
          </div>
        <?php endwhile; ?> 
  </div>
  
<?php get_footer(); ?>