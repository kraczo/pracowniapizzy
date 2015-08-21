<?php

  /*
    Template Name: Pojedynczy_produkt
  */

?>
<?php get_header(); ?>
<?php get_sidebar(); ?>    

<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/css/style_common.css" />
<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/css/style1.css" />
<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/dave.js"></script>

    <div id="home" class="big">
  
    <?php while (have_posts()) : the_post(); ?>
        
          <h1><?php the_title(); ?></h1>
      <div id="page_content">
<a style="text-decoration:none;" href="<?php echo get_post_meta ($post -> ID,'nastepna_pizza_link',true); ?>" title="<?php echo get_post_meta ($post -> ID,'nastepna_pizza_nazwa',true); ?>"><div class="next"></div><div style="width:160px; height:40px; text-decoration:none; color:#DADADA; top:290px; right:496px; position:absolute;  text-transform: uppercase; font-familly:playfair; text-align: center;;"><?php echo get_post_meta ($post -> ID,'nastepna_pizza_nazwa',true); ?></div></a>
      <a style="text-decoration:none;" href="<?php echo get_post_meta ($post -> ID,'poprzednia_pizza_link',true); ?>" title="<?php echo get_post_meta ($post -> ID,'poprzednia_pizza_nazwa',true); ?>"><div class="prev"></div><div style=" width:160px; height:40px; text-decoration:none; color:#DADADA; top:290px; left:490px; position:absolute;  text-transform: uppercase; font-familly:playfair; text-align: center;"><?php echo get_post_meta ($post -> ID,'poprzednia_pizza_nazwa',true); ?></div></a>
          <?php the_content(); ?>
          
         

          </br>
          <?php
            if(function_exists('display_social4i'))
            echo display_social4i("small","align-left");
            ?>
          
          <span style="color:white !important;">
          <?php  global $withcomments;
                        $withcomments = 1;
                        comments_template( 'comments.php', true ); ?></span>
          
          </div>
        <?php endwhile; ?>
        
  </div>
  
<?php get_footer(); ?>