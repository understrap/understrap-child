


jQuery('#navbarNavDropdown').on('hidden.bs.collapse', function () {
  jQuery('.navbar').removeClass('menu-pane');
});

jQuery('#navbarNavDropdown').on('show.bs.collapse', function () {
  jQuery('.navbar').addClass('menu-pane');
});

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
	
	var didScroll = false;
	
	jQuery(window).scroll(function() {
    didScroll = true;
});
 
setInterval(function() {
	
    if ( didScroll ) {
	    
        didScroll = false;
        
	      jQuery('.article-card').each(function(){
	        var itemOffset = Math.abs(jQuery(this).offset().top)-150;
	        var itemHeight = Math.abs(jQuery(this).outerHeight());
	        var height = jQuery(window).scrollTop();
	        if (itemOffset < height && height < (itemOffset+itemHeight)) {
		      $articletext =  jQuery(this).find('.subarticle');
		      $incrnum = jQuery(this).find('.post-incr'); 
	          //console.log($articletext.text());
	          //console.log("itemoffset: "+itemOffset);
	          //console.log("height: "+height);
	          //console.log("itemoffset+itemHeight: "+ (itemOffset+itemHeight));
	          jQuery('#post-title').text($articletext.text());
	          jQuery('#article-number').text($incrnum.text());
 
	        }
	        
    	});    
    }
    
}, 250);


// video playback

var videos = document.getElementsByTagName("video"),
fraction = 0.8;
function checkScroll() {

    for(var i = 0; i < videos.length; i++) {


        var video = videos[i];

        var x = video.offsetLeft, y = video.offsetHeight, w = video.offsetWidth, h = video.offsetHeight, r = x + w, //right
// .e.offsetParent.offsetParent.offsetParent.scrollHeight
        	$grandf = video.offsetParent.offsetParent.offsetParent.offsetTop;
            b = y + h;
			console.log("ID: " + videos[i].id + "OffsetTop: " + y + "Grandfather: " + $grandf);
			console.log("Bottom: " + b + " Height" + h);
			console.log("Page Offset: " + window.pageYOffset);
			
			console.log("Calc: " + ($grandf-(h/2)) + " -- " + ($grandf+(h/2)));
			
			
            if (window.pageYOffset  < ($grandf+(h/2)) &&  window.pageYOffset  > ($grandf-(h/2))) {
                video.play();
            } else {
                video.pause();
            }

    }

}

window.addEventListener('scroll', checkScroll, false);
window.addEventListener('resize', checkScroll, false);

	


/*
	if( jQuery('body.home').length ){
      var $elem = jQuery('#carouselExampleControls');
      var $activeslide = $elem.find('.active'); 
    var $incrnum = $activeslide.find('.incr_num'); 
    var $posttitle = $activeslide.find('.slideposttitle'); 
    jQuery('#article-number').text($incrnum.text());
    jQuery('#post-title').text($posttitle.text());
}
*/
      
      
 
 

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

/*
jQuery('#carouselExampleControls').bind('slid.bs.carousel', function (e) {
    var $elem = jQuery(this);
    var $activeslide = $elem.find('.active'); 
    var $incrnum = $activeslide.find('.incr_num'); 
    var $posttitle = $activeslide.find('.slideposttitle'); 
    
    
    jQuery('#article-number').text($incrnum.text());
    jQuery('#post-title').text($posttitle.text());
    
});
*/