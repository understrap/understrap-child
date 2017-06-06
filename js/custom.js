var $item = jQuery('.carousel .carousel-item');
var $wHeight = (jQuery(window).width() / 1500) * 844;

$item.height($wHeight); 
$item.addClass('full-screen');

jQuery('.carousel img').each(function() {
  var $src = jQuery(this).attr('src');
  var $color = jQuery(this).attr('data-color');
  jQuery(this).parent().css({
    'background-image' : 'url(' + $src + ')',
    'background-color' : $color
  });
  jQuery(this).remove();
});



var $article = jQuery('.home .site-main .card');
$article.height($wHeight); 
$article.addClass('full-screen');

jQuery('.home .site-main img').each(function() {
  var $src = jQuery(this).attr('src');
  jQuery(this).parent().css({
    'background-image' : 'url(' + $src + ')'
  });
  jQuery(this).remove();
});


jQuery(window).on('resize', function (){
  var $wHeight = (jQuery(window).width() / 1500) * 844;
  $item.height($wHeight);
  $article.height($wHeight); 
});



jQuery(document).ready(function(){
	if( jQuery('body.home').length ){
      var $elem = jQuery('#carouselExampleControls');
      var $activeslide = $elem.find('.active'); 
    var $incrnum = $activeslide.find('.incr_num'); 
    var $posttitle = $activeslide.find('.slideposttitle'); 
    jQuery('#article-number').text($incrnum.text());
    jQuery('#post-title').text($posttitle.text());
}
      
          });
 
 
jQuery(document).ready(function(){
     jQuery(window).scroll(function () {
            if (jQuery(this).scrollTop() > 50) {
                jQuery('#back-to-top').fadeIn();
            } else {
                jQuery('#back-to-top').fadeOut();
            }
        });
        // scroll body to 0px on click
        jQuery('#back-to-top').click(function () {
            jQuery('#back-to-top').tooltip('hide');
            jQuery('body,html').animate({
                scrollTop: 0
            }, 800);
            return false;
        });
        

});

jQuery('#carouselExampleControls').bind('slid.bs.carousel', function (e) {
    var $elem = jQuery(this);
    var $activeslide = $elem.find('.active'); 
    var $incrnum = $activeslide.find('.incr_num'); 
    var $posttitle = $activeslide.find('.slideposttitle'); 
    
    
    jQuery('#article-number').text($incrnum.text());
    jQuery('#post-title').text($posttitle.text());
    
});