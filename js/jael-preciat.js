var rootUrl = $('meta[name="root-url"]').attr('content');






if( $('.lottie-animation').length > 0 ){
    $('.lottie-animation').one('isVisible', animate);

    $(window).on('scroll', function(){
        $('.lottie-animation').each(function(){
            if( isInViewPort( $(this) ) ){
                $(this).trigger('isVisible');
            }
        });
    });

    $(document).ready(function(){
        $('.lottie-animation').each(function(){
            if ( $(this).attr("autoplay") ) {
                $(this).trigger('isVisible');
            }
            if( isInViewPort( $(this) ) ){
                $(this).trigger('isVisible');
            }
        });
    });
}

function animate( ){
    let path = rootUrl+'animations/'+$(this).attr('data-animation-name')+'.json';
    
    var animate = lottie.loadAnimation({
        container: $(this).get(0), // the dom element that will contain the animation
        renderer: 'svg',
        loop: $(this).attr('data-loop'),
        autoplay: true,
        name: "jael-preciat",
        path: path
    });
    animate.setSpeed(1);
}

function isInViewPort ( element ) {
    if( $(element).length == 0 ) return false;
    var elementTop = $(element).offset().top;
    var elementBottom = elementTop + $(element).outerHeight();
    var viewportTop = $(window).scrollTop() ;
    var viewportBottom = viewportTop + $(window).height() ;
    return elementBottom > viewportTop && elementTop < viewportBottom;
}
