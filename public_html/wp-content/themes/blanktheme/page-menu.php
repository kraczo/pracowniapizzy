<?php

  /*
    Template Name: Menu
  */

?>
<?php get_header(); ?>
<?php get_sidebar(); ?>

<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/css/style_common.css" />
<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/css/style1.css" />
<link href='http://fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css' />
<!--<script type="text/javascript">
$(function(){
  
  $(".view-first").preloader();
  
  });
</script>-->
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
    $('#men').animate({height:600}, {duration: 200, easing: method1});
    var abc = $('#men').css("height","600px");

    $('#menu-item-72').click(function(e){

    $('#men').animate({height:0}, {duration: 200, easing: method2});
    setInterval(function(){$('#men').css("display","none");},200);
    });

    $('#menu-item-37').click(function(e){

    $('#men').animate({height:0}, {duration: 200, easing: method2});
    setInterval(function(){$('#men').css("display","none");},200);
    });
    
    $('#menu-item-40').click(function(e){

    $('#men').animate({height:0}, {duration: 200, easing: method2});
    setInterval(function(){$('#men').css("display","none");},200);
    });
    
    $('#menu-item-41').click(function(e){

    $('#men').animate({height:0}, {duration: 200, easing: method2});
    setInterval(function(){$('#men').css("display","none");},200);
    });
    
    $('#menu-item-38').click(function(e){

    $('#men').animate({height:0}, {duration: 200, easing: method2});
    setInterval(function(){$('#men').css("display","none");},200);
    });
    
    $('#menu-item-39').click(function(e){

    $('#men').animate({height:0}, {duration: 200, easing: method2});
    setInterval(function(){$('#men').css("display","none");},200);
    });
    
    $('.info').click(function(e){

    $('#men').animate({height:0}, {duration: 200, easing: method2});
    setInterval(function(){$('#men').css("display","none");},200);
    });
  
  $('#menu-item-443').click(function(e){

    $('#men').animate({height:0}, {duration: 200, easing: method2});
    setInterval(function(){$('#men').css("display","none");},200);
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
  height:600px;
}
#clear {
  clear:both;
}
</style>
<div id="men" class="big" style="height:600px;">
    <div id="clear"></div>
    <div id="menu_content">
  <div class="view view-first"">
                    <div class="preloader"><img id="preloader" src="<?php bloginfo('template_url'); ?><?php echo get_post_meta ($post -> ID,'foto_pizza1',true); ?>" /></div>
                    <div class="mask">
                        <h2>1.<?php echo get_post_meta ($post -> ID,'nazwa_pizzy1',true); ?></h2>
                        <p><?php echo get_post_meta ($post -> ID,'skladniki1',true); ?></p>
                        <a href="/<?php echo get_post_meta ($post -> ID,'nazwa_pizzy1',true); ?>/" class="info">Zobacz</a>
                      <div id="cena_mala">Cena 30 cm - <?php echo get_post_meta ($post -> ID,'cena_mala1',true); ?> zł</div>
                      <div id="cena_duza">45 cm - <?php echo get_post_meta ($post -> ID,'cena_duza1',true); ?> zł</div>
                    </div>
                </div>  
                <div class="view view-first">
                    <div class="preloader"><img id="preloader" src="<?php bloginfo('template_url'); ?><?php echo get_post_meta ($post -> ID,'foto_pizza2',true); ?>" /></div>
                    <div class="mask">
                        <h2>2.<?php echo get_post_meta ($post -> ID,'nazwa_pizzy2',true); ?></h2>
                        <p><?php echo get_post_meta ($post -> ID,'skladniki2',true); ?></p>
                        <a href="http://pracownia-pizzy.pl/menu/margharitta-extra" class="info">Zobacz</a>
                      <div id="cena_mala">Cena 30 cm - <?php echo get_post_meta ($post -> ID,'cena_mala2',true); ?> zł</div>
                      <div id="cena_duza">45 cm - <?php echo get_post_meta ($post -> ID,'cena_duza2',true); ?> zł</div>
                    </div>
                </div>  
                <div class="view view-first">
                    <div class="preloader"><img id="preloader" src="<?php bloginfo('template_url'); ?><?php echo get_post_meta ($post -> ID,'foto_pizza3',true); ?>" /></div>
                    <div class="mask">
                        <h2>3.<?php echo get_post_meta ($post -> ID,'nazwa_pizzy3',true); ?></h2>
                        <p><?php echo get_post_meta ($post -> ID,'skladniki3',true); ?></p>
                        <a href="/<?php echo get_post_meta ($post -> ID,'nazwa_pizzy3',true); ?>/" class="info">Zobacz</a>
                      <div id="cena_mala">Cena 30 cm - <?php echo get_post_meta ($post -> ID,'cena_mala3',true); ?> zł</div>
                      <div id="cena_duza">45 cm - <?php echo get_post_meta ($post -> ID,'cena_duza3',true); ?> zł</div>
                    </div>
                </div>  
                <div class="view view-first">
                    <div class="preloader"><img id="preloader" src="<?php bloginfo('template_url'); ?><?php echo get_post_meta ($post -> ID,'foto_pizza4',true); ?>" /></div>
                    <div class="mask">
                        <h2>4.<?php echo get_post_meta ($post -> ID,'nazwa_pizzy4',true); ?></h2>
                        <p><?php echo get_post_meta ($post -> ID,'skladniki4',true); ?></p>
                        <a href="/<?php echo get_post_meta ($post -> ID,'nazwa_pizzy4',true); ?>/" class="info">Zobacz</a>
                      <div id="cena_mala">Cena 30 cm - <?php echo get_post_meta ($post -> ID,'cena_mala4',true); ?> zł</div>
                      <div id="cena_duza">45 cm - <?php echo get_post_meta ($post -> ID,'cena_duza4',true); ?> zł</div>
                    </div>
                </div>  
                <div class="view view-first">
                    <div class="preloader"><img id="preloader" src="<?php bloginfo('template_url'); ?><?php echo get_post_meta ($post -> ID,'foto_pizza5',true); ?>" /></div>
                    <div class="mask">
                        <h2>5.<?php echo get_post_meta ($post -> ID,'nazwa_pizzy5',true); ?></h2>
                        <p><?php echo get_post_meta ($post -> ID,'skladniki5',true); ?></p>
                        <a href="/<?php echo get_post_meta ($post -> ID,'nazwa_pizzy5',true); ?>/" class="info">Zobacz</a>
                      <div id="cena_mala">Cena 30 cm - <?php echo get_post_meta ($post -> ID,'cena_mala5',true); ?> zł</div>
                      <div id="cena_duza">45 cm - <?php echo get_post_meta ($post -> ID,'cena_duza5',true); ?> zł</div>
                    </div>
                </div>  
                <div class="view view-first">
                    <div class="preloader"><img id="preloader" src="<?php bloginfo('template_url'); ?><?php echo get_post_meta ($post -> ID,'foto_pizza6',true); ?>" /></div>
                    <div class="mask">
                        <h2>6.<?php echo get_post_meta ($post -> ID,'nazwa_pizzy6',true); ?></h2>
                        <p><?php echo get_post_meta ($post -> ID,'skladniki6',true); ?></p>
                        <a href="http://pracownia-pizzy.pl/menu/wegetarianska/" class="info">Zobacz</a>
                      <div id="cena_mala">Cena 30 cm - <?php echo get_post_meta ($post -> ID,'cena_mala6',true); ?> zł</div>
                      <div id="cena_duza">45 cm - <?php echo get_post_meta ($post -> ID,'cena_duza6',true); ?> zł</div>
                    </div>
                    </div>
                    <div class="view view-first">
                    <div class="preloader"><img id="preloader" src="<?php bloginfo('template_url'); ?><?php echo get_post_meta ($post -> ID,'foto_pizza7',true); ?>" /></div>
                    <div class="mask">
                        <h2>7.<?php echo get_post_meta ($post -> ID,'nazwa_pizzy7',true); ?></h2>
                        <p><?php echo get_post_meta ($post -> ID,'skladniki7',true); ?></p>
                        <a href="/<?php echo get_post_meta ($post -> ID,'nazwa_pizzy7',true); ?>/" class="info">Zobacz</a>
                      <div id="cena_mala">Cena 30 cm - <?php echo get_post_meta ($post -> ID,'cena_mala7',true); ?> zł</div>
                      <div id="cena_duza">45 cm - <?php echo get_post_meta ($post -> ID,'cena_duza7',true); ?> zł</div>
                    </div>
                    </div>
                    <div class="view view-first">
                    <div class="preloader"><img id="preloader" src="<?php bloginfo('template_url'); ?><?php echo get_post_meta ($post -> ID,'foto_pizza8',true); ?>" /></div>
                    <div class="mask">
                        <h2>8.<?php echo get_post_meta ($post -> ID,'nazwa_pizzy8',true); ?></h2>
                        <p><?php echo get_post_meta ($post -> ID,'skladniki8',true); ?></p>
                        <a href="http://pracownia-pizzy.pl/menu/chlopska" class="info">Zobacz</a>
                      <div id="cena_mala">Cena 30 cm - <?php echo get_post_meta ($post -> ID,'cena_mala8',true); ?> zł</div>
                      <div id="cena_duza">45 cm - <?php echo get_post_meta ($post -> ID,'cena_duza8',true); ?> zł</div>
                    </div>
                    </div>
                    <div class="view view-first">
                   <div class="preloader"><img id="preloader" src="<?php bloginfo('template_url'); ?><?php echo get_post_meta ($post -> ID,'foto_pizza9',true); ?>" /></div>
                    <div class="mask">
                        <h2>9.<?php echo get_post_meta ($post -> ID,'nazwa_pizzy9',true); ?></h2>
                        <p><?php echo get_post_meta ($post -> ID,'skladniki9',true); ?></p>
                        <a href="/<?php echo get_post_meta ($post -> ID,'nazwa_pizzy9',true); ?>/" class="info">Zobacz</a>
                      <div id="cena_mala">Cena 30 cm - <?php echo get_post_meta ($post -> ID,'cena_mala9',true); ?> zł</div>
                      <div id="cena_duza">45 cm - <?php echo get_post_meta ($post -> ID,'cena_duza9',true); ?> zł</div>
                    </div>
                    </div>
                    <div class="view view-first">
                    <div class="preloader"><img id="preloader" src="<?php bloginfo('template_url'); ?><?php echo get_post_meta ($post -> ID,'foto_pizza10',true); ?>" /></div>
                    <div class="mask">
                        <h2>10.<?php echo get_post_meta ($post -> ID,'nazwa_pizzy10',true); ?></h2>
                        <p><?php echo get_post_meta ($post -> ID,'skladniki10',true); ?></p>
                        <a href="http://pracownia-pizzy.pl/menu/por-na-boczku" class="info">Zobacz</a>
                      <div id="cena_mala">Cena 30 cm - <?php echo get_post_meta ($post -> ID,'cena_mala10',true); ?> zł</div>
                      <div id="cena_duza">45 cm - <?php echo get_post_meta ($post -> ID,'cena_duza10',true); ?> zł</div>
                    </div>
                    </div>
                    <div class="view view-first">
                   <div class="preloader"><img id="preloader" src="<?php bloginfo('template_url'); ?><?php echo get_post_meta ($post -> ID,'foto_pizza11',true); ?>" /></div>
                    <div class="mask">
                        <h2>11.<?php echo get_post_meta ($post -> ID,'nazwa_pizzy11',true); ?></h2>
                        <p><?php echo get_post_meta ($post -> ID,'skladniki11',true); ?></p>
                        <a href="http://pracownia-pizzy.pl/menu/goralska" class="info">Zobacz</a>
                      <div id="cena_mala">Cena 30 cm - <?php echo get_post_meta ($post -> ID,'cena_mala11',true); ?> zł</div>
                      <div id="cena_duza">45 cm - <?php echo get_post_meta ($post -> ID,'cena_duza11',true); ?> zł</div>
                    </div>
                    </div>
                    <div class="view view-first">
                    <div class="preloader"><img id="preloader" src="<?php bloginfo('template_url'); ?><?php echo get_post_meta ($post -> ID,'foto_pizza12',true); ?>" /></div>
                    <div class="mask">
                        <h2>12.<?php echo get_post_meta ($post -> ID,'nazwa_pizzy12',true); ?></h2>
                        <p><?php echo get_post_meta ($post -> ID,'skladniki12',true); ?></p>
                        <a href="/<?php echo get_post_meta ($post -> ID,'nazwa_pizzy12',true); ?>/" class="info">Zobacz</a>
                      <div id="cena_mala">Cena 30 cm - <?php echo get_post_meta ($post -> ID,'cena_mala12',true); ?> zł</div>
                      <div id="cena_duza">45 cm - <?php echo get_post_meta ($post -> ID,'cena_duza12',true); ?> zł</div>
                    </div>
                    </div>
                    <div class="view view-first">
                    <div class="preloader"><img id="preloader" src="<?php bloginfo('template_url'); ?><?php echo get_post_meta ($post -> ID,'foto_pizza13',true); ?>" /></div>
                    <div class="mask">
                        <h2>13.<?php echo get_post_meta ($post -> ID,'nazwa_pizzy13',true); ?></h2>
                        <p><?php echo get_post_meta ($post -> ID,'skladniki13',true); ?></p>
                        <a href="/<?php echo get_post_meta ($post -> ID,'nazwa_pizzy13',true); ?>/" class="info">Zobacz</a>
                      <div id="cena_mala">Cena 30 cm - <?php echo get_post_meta ($post -> ID,'cena_mala13',true); ?> zł</div>
                      <div id="cena_duza">45 cm - <?php echo get_post_meta ($post -> ID,'cena_duza13',true); ?> zł</div>
                    </div>
                    </div>
                    <div class="view view-first">
                    <div class="preloader"><img id="preloader" src="<?php bloginfo('template_url'); ?><?php echo get_post_meta ($post -> ID,'foto_pizza14',true); ?>" /></div>
                    <div class="mask">
                        <h2>14.<?php echo get_post_meta ($post -> ID,'nazwa_pizzy14',true); ?></h2>
                        <p><?php echo get_post_meta ($post -> ID,'skladniki14',true); ?></p>
                        <a href="/<?php echo get_post_meta ($post -> ID,'nazwa_pizzy14',true); ?>/" class="info">Zobacz</a>
                      <div id="cena_mala">Cena 30 cm - <?php echo get_post_meta ($post -> ID,'cena_mala14',true); ?> zł</div>
                      <div id="cena_duza">45 cm - <?php echo get_post_meta ($post -> ID,'cena_duza14',true); ?> zł</div>
                    </div>
                    </div>
                    <div class="view view-first">
                    <div class="preloader"><img id="preloader" src="<?php bloginfo('template_url'); ?><?php echo get_post_meta ($post -> ID,'foto_pizza15',true); ?>" /></div>
                    <div class="mask">
                        <h2>15.<?php echo get_post_meta ($post -> ID,'nazwa_pizzy15',true); ?></h2>
                        <p><?php echo get_post_meta ($post -> ID,'skladniki15',true); ?></p>
                        <a href="http://pracownia-pizzy.pl/menu/meksykanska/" class="info">Zobacz</a>
                      <div id="cena_mala">Cena 30 cm - <?php echo get_post_meta ($post -> ID,'cena_mala15',true); ?> zł</div>
                      <div id="cena_duza">45 cm - <?php echo get_post_meta ($post -> ID,'cena_duza15',true); ?> zł</div>
                    </div>
                    </div>
      <div class="view view-first">
                    <div class="preloader"><img id="preloader" src="<?php bloginfo('template_url'); ?><?php echo get_post_meta ($post -> ID,'foto_pizza16',true); ?>" /></div>
                    <div class="mask">
                        <h2>16.<?php echo get_post_meta ($post -> ID,'nazwa_pizzy16',true); ?></h2>
                        <p><?php echo get_post_meta ($post -> ID,'skladniki16',true); ?></p>
                        <a href="http://pracownia-pizzy.pl/menu/del-mare/" class="info">Zobacz</a>
                      <div id="cena_mala">Cena 30 cm - <?php echo get_post_meta ($post -> ID,'cena_mala16',true); ?> zł</div>
                      <div id="cena_duza">45 cm - <?php echo get_post_meta ($post -> ID,'cena_duza16',true); ?> zł</div>
                    </div>
                    </div>
      <div class="view view-first">
                    <div class="preloader"><img id="preloader" src="<?php bloginfo('template_url'); ?><?php echo get_post_meta ($post -> ID,'foto_pizza17',true); ?>" /></div>
                    <div class="mask">
                        <h2>17.<?php echo get_post_meta ($post -> ID,'nazwa_pizzy17',true); ?></h2>
                        <p><?php echo get_post_meta ($post -> ID,'skladniki17',true); ?></p>
                        <a href="/<?php echo get_post_meta ($post -> ID,'nazwa_pizzy17',true); ?>/" class="info">Zobacz</a>
                      <div id="cena_mala">Cena 30 cm - <?php echo get_post_meta ($post -> ID,'cena_mala17',true); ?> zł</div>
                      <div id="cena_duza">45 cm - <?php echo get_post_meta ($post -> ID,'cena_duza17',true); ?> zł</div>
                    </div>
                    </div>
      <div class="view view-first">
                    <div class="preloader"><img id="preloader" src="<?php bloginfo('template_url'); ?><?php echo get_post_meta ($post -> ID,'foto_pizza18',true); ?>" /></div>
                    <div class="mask">
                        <h2>18.<?php echo get_post_meta ($post -> ID,'nazwa_pizzy18',true); ?></h2>
                        <p><?php echo get_post_meta ($post -> ID,'skladniki18',true); ?></p>
                        <a href="/<?php echo get_post_meta ($post -> ID,'nazwa_pizzy18',true); ?>/" class="info">Zobacz</a>
                      <div id="cena_mala">Cena 30 cm - <?php echo get_post_meta ($post -> ID,'cena_mala18',true); ?> zł</div>
                      <div id="cena_duza">45 cm - <?php echo get_post_meta ($post -> ID,'cena_duza18',true); ?> zł</div>
                    </div>
                    </div>
      <div class="view view-first">
                    <div class="preloader"><img id="preloader" src="<?php bloginfo('template_url'); ?><?php echo get_post_meta ($post -> ID,'foto_pizza19',true); ?>" /></div>
                    <div class="mask">
                        <h2>19.<?php echo get_post_meta ($post -> ID,'nazwa_pizzy19',true); ?></h2>
                        <p><?php echo get_post_meta ($post -> ID,'skladniki19',true); ?></p>
                        <a href="http://pracownia-pizzy.pl/menu/wlasna-kompozycja" class="info">Zobacz</a>
                      <div id="cena_mala">Cena 30 cm - <?php echo get_post_meta ($post -> ID,'cena_mala19',true); ?> zł</div>
                      <div id="cena_duza">45 cm - <?php echo get_post_meta ($post -> ID,'cena_duza19',true); ?> zł</div>
                    </div>
                    </div>
      <div class="view view-first">
                    <div class="preloader"><img id="preloader" src="<?php bloginfo('template_url'); ?><?php echo get_post_meta ($post -> ID,'foto_pizza20',true); ?>" /></div>
                    <div class="mask">
                        <h2>20.<?php echo get_post_meta ($post -> ID,'nazwa_pizzy20',true); ?></h2>
                        <p><?php echo get_post_meta ($post -> ID,'skladniki20',true); ?></p>
                        <a href="/<?php echo get_post_meta ($post -> ID,'nazwa_pizzy20',true); ?>/" class="info">Zobacz</a>
                      <div id="cena_mala">Cena 30 cm - <?php echo get_post_meta ($post -> ID,'cena_mala20',true); ?> zł</div>
                      <div id="cena_duza">45 cm - <?php echo get_post_meta ($post -> ID,'cena_duza20',true); ?> zł</div>
                    </div>
                    </div>
      <div class="view view-first">
                    <div class="preloader"><img id="preloader" src="<?php bloginfo('template_url'); ?><?php echo get_post_meta ($post -> ID,'foto_pizza21',true); ?>" /></div>
                    <div class="mask">
                        <h2>21.<?php echo get_post_meta ($post -> ID,'nazwa_pizzy21',true); ?></h2>
                        <p><?php echo get_post_meta ($post -> ID,'skladniki21',true); ?></p>
                        <a href="http://pracownia-pizzy.pl/menu/say-chesse/" class="info">Zobacz</a>
                      <div id="cena_mala">Cena 30 cm - <?php echo get_post_meta ($post -> ID,'cena_mala21',true); ?> zł</div>
                      <div id="cena_duza">45 cm - <?php echo get_post_meta ($post -> ID,'cena_duza21',true); ?> zł</div>
                    </div>
                    </div>
    </div>
    </div>

<?php get_footer(); ?>