/**
    Custom JS
**/

$(function() {

    var title1 = $('#first-slide .h2');
    
    if( isVisible( title1 ) && !title1.hasClass('active')) {
        title1.addClass("active");
    }
});

setTimeout(function(){
   $(".animation-title h1").addClass("active");

},300,"JavaScript");


$("body").mousemove(function(e) {
    if( $(window).width() > 1024 ) {
        $(".animation-mouse").each(function(){
            var item = $(this);
            if( isVisible(item) ){
                //console.log("X Axis: " + e.clientX + ", Y Axis: " + e.clientY);
                perspectiveAnimation( e.clientX, e.clientY, item );
            } else {
                restartAnimation( item );
            }
        });

        
    }
});

$(window).on('mouseout', function() {
    $(".animation-mouse").each(function(){
        var item = $(this);
        if( isVisible(item) ){
            restartAnimation( item );
        }
    });
    
});

function restartAnimation( item ) {
    item.css({
        'transform': 'perspective(1000px) rotateX(0deg) rotateY(0deg)',
        'transition-duration': '1s',
    });
}

function perspectiveAnimation( x, y, item ) {

    width_step = $( window ).width() / 20;
    height_step = $( window ).height() / 20;

    x_deg = (x - ($( window ).height()/2)) / height_step;
    y_deg = -1 * ((y - ($( window ).width()/2)) / width_step);

    css_property = 'perspective(1000px) rotateX('+ y_deg.toFixed(3) +'deg) rotateY('+ x_deg.toFixed(3) +'deg)';
  
    item.css({'transform': css_property, 'transition-duration': '0s'});
    //item.children('.second-layer').css({'transform': css_property});
    //console.log("X Axis: " + x/width_step + ", Y Axis: " + y/height_step);
}

function isVisible(elem){
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
    Scroll Animation Script
**/
var lastScrollTop = 0;
$(document).scroll(function() {
    var topScrollPosition = $(window).scrollTop() + $(window).height();

    if( $(window).width() > 1024 ) {

        var firstSlide = $("#first-slide");
        scaleLayer( topScrollPosition, firstSlide, lastScrollTop );

        var secondSlide = $("#second-slide");
        scaleLayer( topScrollPosition, secondSlide, lastScrollTop );

        var thirdSlide = $("#third-slide");
        scaleLayer( topScrollPosition, thirdSlide, lastScrollTop );

        var fourthSlide = $("#fourth-slide");
        scaleLayer( topScrollPosition, fourthSlide, lastScrollTop );
    }

    lastScrollTop = topScrollPosition

    var title1 = $('#first-slide .h2');
    var title2 = $('#second-slide .h2');
    var title3 = $('#third-slide .h2');
    var title4 = $('#fourth-slide .h2');

    if( isVisible( title1 ) && !title1.hasClass('active')) {
        title1.addClass("active");
    }

    if( isVisible( title2 ) && !title2.hasClass('active')) {
        title2.addClass("active");
    }

    if( isVisible( title3 ) && !title3.hasClass('active')) {
        title3.addClass("active");
    }

    if( isVisible( title4 ) && !title4.hasClass('active')) {
        title4.addClass("active");
    }
});

function scaleLayer( topScrollPosition, slide, lastScrollTop ){
    var step = topScrollPosition / 3000;
    var slidePosition = slide.offset().top + $(window).height();

    //var footerPosition = $(window).scrollTop() + $(window).height()


    if ( topScrollPosition > slidePosition ) {
        borderRadius = parseFloat(slide.children(".background-round").css('border-top-right-radius').slice(0, -1));

        //Scroll Down
        if( topScrollPosition <= lastScrollTop ){
            newBorderRadius =  borderRadius + step;
        } else { //Scroll Up
            newBorderRadius =  borderRadius - step;
        }

        if( parseInt(newBorderRadius) <= 0 ){
            slide.children(".background-round").css({
                'border-top-right-radius': '0%',
                'border-top-left-radius': '0%'
            });
        } else if( parseInt(newBorderRadius) <= 50 ){

            slide.children(".background-round").css({
                'border-top-right-radius': newBorderRadius.toFixed(3) + '%',
                'border-top-left-radius': newBorderRadius.toFixed(3) + '%'
            });

        } else {
            slide.children(".background-round").css({
                'border-top-right-radius': '50%',
                'border-top-left-radius': '50%'
            });
        }

        if( $(window).scrollTop() == 0 ){
            slide.children(".background-round").css({
                'border-top-right-radius': '50%',
                'border-top-left-radius': '50%'
            });
        }

        if( topScrollPosition == $(document).height() ){
            slide.children(".background-round").css({
                'border-top-right-radius': '12%',
                'border-top-left-radius': '12%'
            });
        }
        
    } else {
        slide.children(".background-round").css({
            'border-top-right-radius': '50%',
            'border-top-left-radius': '50%'
        });
    }
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