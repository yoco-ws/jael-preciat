/**
    Custom JS
**/

$(function(){

});

$("body").mousemove(function(e) {
    var item = $('#people-connected-animation');
    if( esVisible(item) ){
        //console.log("X Axis: " + e.clientX + ", Y Axis: " + e.clientY);
        perspectiveAnimation( e.clientX, e.clientY, item );
    } else {
        restartAnimation( item );
    }
});

$(window).on('mouseout', function() {
    var item = $('#people-connected-animation');
    if( esVisible(item) ){
        restartAnimation( item );
    }
});

function restartAnimation( item ) {
    item.children('.fisrt-layer').css({
        'transform': 'perspective(1000px) rotateX(0deg) rotateY(0deg)',
        'transition-duration': '1s',
    });
    item.children('.second-layer').css({
        'transform': 'perspective(1000px) rotateX(0deg) rotateY(0deg)',
        'transition-duration': '1s',
    });
}

function perspectiveAnimation( x, y, item ) {
    width_step = $( window ).width() / 10;
    height_step = $( window ).height() / 10;

    width_step_2 = $( window ).width() / 5;
    height_step_2 = $( window ).height() / 10;

    if( x < $( window ).width() / 2 ) {
        width_step *= -1;
        width_step_2 *= -1;
    }

    if( y > $( window ).height() / 2 ) {
        height_step *= -1;
        height_step_2 *= -1;
    }

    x_deg = x/width_step;
    y_deg = y/height_step;

    x_deg_2 = x/width_step_2;
    y_deg_2 = y/height_step_2;

    css_property = 'perspective(1000px) rotateX('+ y_deg.toFixed(3) +'deg) rotateY('+ x_deg.toFixed(3) +'deg)';
    css_property_2 = 'perspective(1000px) rotateX('+ y_deg_2.toFixed(3) +'deg) rotateY('+ x_deg_2.toFixed(3) +'deg)';



    item.children('.second-layer').css({'transform': css_property});
    item.children('.first-layer').css({'transform': css_property_2});
    //console.log("X Axis: " + x/width_step + ", Y Axis: " + y/height_step);
    console.log(css_property);

    var width_step;
    var height_step;
    var css_property;
}

function esVisible(elem){
    /* Ventana de Visualización*/
    var posTopView = $(window).scrollTop();
    var posButView = posTopView + $(window).height();
    /* Elemento a validar*/
    var elemTop = $(elem).offset().top;
    var elemBottom = elemTop + $(elem).height();
    /* Comparamos los dos valores tanto del elemento como de la ventana*/
    return ((elemBottom < posButView && elemBottom > posTopView) || (elemTop >posTopView && elemTop< posButView));
}


/**
    Lottie code JS
**/
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