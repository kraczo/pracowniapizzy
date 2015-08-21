<?php

  /*
    Template Name: Menu_produkty
  */

?>

<?php get_header(); ?>
<?php get_sidebar(); ?>

<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/css/style_common.css" />
<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/css/style1.css" />
<link href='http://fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css' />
<!-- <script type="text/javascript">
$(function(){
  
  $(".view-first").preloader();
  
  });
</script> -->
<script type="text/javascript">
$(document).ready(function() {

  jQuery.easing.def = 'easeOutCubic';
  // $('<div id="controls">').appendTo('#examples');
  var sel1 = $("<select>").appendTo('#controls');
  for (x in jQuery.easing)
  {
    if (x != 'linear' && x != 'swing')
      sel1.append($('<option>').attr('value', x).text(x));
  }
  sel2 = sel1.clone().appendTo('#controls');
  sel1.val('easeOutCubic');
  sel2.val('easeOutCubic');
  var method1 = sel1.val();
  var method2 = sel2.val();



    $('#men').css("display","block");
    $('#men').animate({height:700}, {duration: 300, easing: method1});
    var abc = $('#men').css("height","100%");


    $('#menu-item-37').click(function(e){

    $('#men').animate({height:0}, {duration: 300, easing: method2});
    setInterval(function(){$('#men').css("display","none");},300);
    });
    
    $('#menu-item-40').click(function(e){

    $('#men').animate({height:0}, {duration: 300, easing: method2});
    setInterval(function(){$('#men').css("display","none");},300);
    });
    
    $('#menu-item-41').click(function(e){

    $('#men').animate({height:0}, {duration: 300, easing: method2});
    setInterval(function(){$('#men').css("display","none");},300);
    });
    
    $('#menu-item-38').click(function(e){

    $('#men').animate({height:0}, {duration: 300, easing: method2});
    setInterval(function(){$('#men').css("display","none");},300);
    });
    
    $('#menu-item-39').click(function(e){

    $('#men').animate({height:0}, {duration: 300, easing: method2});
    setInterval(function(){$('#men').css("display","none");},300);
    }); 
  
});
</script>
<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/jquery.preloader.js"></script>
<style>
#men {
  padding-top:20px;
  padding-bottom:20px;
  overflow:hidden;
  width:960px;
}
#menu_content {
  margin-left:20px;
  overflow: auto !important;
  height:700px;
}
#clear {
  clear:both;
}
</style>
    <div id="men" class="big">
    <div id="clear"></div>
    <div id="menu_content">
     <div class="view view-first"">
        <div class="view view-first">
                    <div class="preloader"><img id="preloader" src="<?php bloginfo('template_url'); ?><?php echo get_post_meta ($post -> ID,'foto_pizza',true); ?>" /></div>
                    <div class="mask">
                        <h2><?php echo get_post_meta ($post -> ID,'nazwa_pizzy',true); ?></h2>
                        <p><?php echo get_post_meta ($post -> ID,'skladniki',true); ?></p>
                        <a href="#" class="info">Read More</a>
                    </div>
                </div> 
        
    </div>
    </div>