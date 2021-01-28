
if( $('.lottie-animation').length > 0 ){
	

	$('.lottie-animation').one('isVisible', animate_lottie);


	$(window).on('scroll', function(){
	    $('.lottie-animation').each(function(){
	        
	        if( isInViewPort( $(this) ) ){
	            $(this).trigger('isVisible');
	        }

	    });
	});

    $(document).ready(function(){
        $('.lottie-animation').each(function(){
            
            if( isInViewPort( $(this) ) ){
                $(this).trigger('isVisible');
            }

        });
    });
}

function animate_lottie( ){

     path = rootUrl+'animations/'+$(this).attr('data-animation-name')+'.json';  

 

    var animate = lottie.loadAnimation({
        container: $(this).get(0), // the dom element that will contain the animation
        renderer: 'svg',
        loop: $(this).attr('data-loop'),
        autoplay: true,
        name: "bates",
        path: path
    });


    if ( $(this).attr('speed').length > 0  ) {
        animate.setSpeed( $(this).attr('speed') );  
    }else{
        animate.setSpeed(0.8);  
    }

    
}



function isInViewPort ( element ) {

    if( $(element).length == 0 ) return false;
    var elementTop = $(element).offset().top;
    var elementBottom = elementTop + $(element).outerHeight();
    var viewportTop = $(window).scrollTop() ;
    var viewportBottom = viewportTop + $(window).height() ;
    return elementBottom > viewportTop && elementTop < viewportBottom;
    
};

var rootUrl = $('meta[name="root-url"]').attr('content');