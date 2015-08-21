/*
    Dawid Kraczowski jscripts
    Version : 1
    Site  : www.pracownia-pizzy.pl  
    
    Author  : Dawid Kraczowski
    Url : kraczo.2ap.pl
    License : MIT License / GPL License
*/

$(document).ready(function(){
         
$("#fanpagebutton").toggle(function(){
        $("#fanpagebox").animate({left: "0px"}, 500 );
      },
      function(){  
        $("#fanpagebox").animate({left: "-200px"}, 500 );
      });
      
      $("#googlebutton").toggle(function(){
        $("#googlebox").animate({left: "0px"}, 500 );
      },
      function(){  
        $("#googlebox").animate({left: "-162px"}, 500 );
      });

   });   
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
  sel1.val('');
  sel2.val('');
  var method1 = sel1.val();
  var method2 = sel2.val();
  
   var w = window.innerWidth;
  var h = window.innerHeight;
  if (w <= '1400') {
      $('#logo').css("display","none");
      $('#logo2').css("display","block");
    $('#fanpagebox').css("top","0px");
    $('#googlebutton').css("display","none");
    $('#wp_login_button').css("display","none");
  }
  
 /* $(window).resize(function(){
  var w = window.innerWidth;
  var h = window.innerHeight;
    
    if (w <= '1400') {
      $('#logo').css("display","none");
      $('#logo2').css("display","block");
      $('#fanpagebox').css("top","0px");
      $('#googlebutton').css("display","none");
      $('#wp_login_button').css("display","none");
    } else {
    $('#logo2').css("display","none");
    $('#logo').css("display","block");
    $('#fanpagebox').css("top","200px");
    $('#googlebutton').css("display","block");
    $('#wp_login_button').css("display","block");
    }
  }); */
  
    $('#home').css("display","block");
    $('#home').animate({height:630}, {duration: 300, easing: method1});

    $('#menu-item-72').click(function(e){

    $('#home').animate({height:0}, {duration: 300, easing: method2});
    setInterval(function(){$('#home').css("display","none");},100);
    });
    
    $('#menu-item-37').click(function(e){

    $('#home').animate({height:0}, {duration: 300, easing: method2});
    setInterval(function(){$('#home').css("display","none");},100);
    });
    
    $('#menu-item-40').click(function(e){

    $('#home').animate({height:0}, {duration: 300, easing: method2});
    setInterval(function(){$('#home').css("display","none");},100);
    });
  
    
    $('#menu-item-41').click(function(e){

    $('#home').animate({height:0}, {duration: 300, easing: method2});
    setInterval(function(){$('#home').css("display","none");},100);
    });
    
    $('#menu-item-38').click(function(e){

    $('#home').animate({height:0}, {duration: 300, easing: method2});
    setInterval(function(){$('#home').css("display","none");},100);
    });
  
   $('#menu-item-443').click(function(e){

    $('#home').animate({height:0}, {duration: 300, easing: method2});
    setInterval(function(){$('#home').css("display","none");},300);
    });
    
    $('#menu-item-39').click(function(e){

    $('#home').animate({height:0}, {duration: 300, easing: method2});
    setInterval(function(){$('#home').css("display","none");},100);
    });
  
   $('.next').click(function(e){

    $('#home').animate({height:0}, {duration: 300, easing: method2});
    setInterval(function(){$('#home').css("display","none");},100);
    });
  
  $('.prev').click(function(e){

    $('#home').animate({height:0}, {duration: 300, easing: method2});
    setInterval(function(){$('#home').css("display","none");},100);
    });
  
  
});