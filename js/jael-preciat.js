var rootUrl = $('meta[name="root-url"]').attr('content');


//formulario de contacto
$('#form-contact').submit(function( event ){

    event.preventDefault();
    var $form = $(this);


    var $submitBtn = $form.find('button');
    $submitBtn.prop('disabled', true);

    var $alert = $form.find('.alert');
    var action = $form.attr('action');

    var data = $form.serializeArray().reduce(function(obj, item) {
        obj[item.name] = item.value;
        return obj;
    }, {});


  
    //Completar la venta
    jQuery.ajax({
        type: "POST",
        url: action,
        data :  {
            'data': data
        },
        dataType: 'json',
        async: true
    
    }).done(function(response){
        console.log(response);
        
        if(response.status == "success"){
            $(".hide-on-submit").hide();
            $(".show-on-submit").show();
        }
        else if(response.status == "error"){
            
            $alert.text(response.msg).fadeIn().delay(3400).fadeOut();
            $submitBtn.prop('disabled', false);

        }else{
           $submitBtn.prop('disabled', false);

        }

    }).fail(function(response){
        console.log(response.responseText);
    })
    
});


// Animaciones de lottie 
if( $('.lottie-animation').length > 0 ){

    $('.lottie-animation').one('isVisible', animate);

    $(window).on('scroll', function(){
        $('.lottie-animation').each(function(){

            $offset = $(this).attr("offset");

            if ($offset == null) {
                $offset=0;
            }

            if( isInViewPort( $(this), $offset ) ){
                $(this).trigger('isVisible');
            }
        });
    });

    $(document).ready(function(){
        $('.lottie-animation').each(function(){
            
            $offset = $(this).attr("offset");

            if ($offset == null) {
                $offset=0;
            }

            if( isInViewPort( $(this), $offset ) ){
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







// Animación del background y de la navbar
$intro = $(".intro").innerHeight() ;
$(document).ready(function(){
    if ( $(window).scrollTop() > $intro ) {
        $(".cover").addClass("dark");
        $(".predecimos").addClass("active");

    }else{
        $(".cover").removeClass("dark"); 
        $(".predecimos").removeClass("active");         
    }
});

$(window).on('scroll', function(){
    if ( $(window).scrollTop() > $intro - 300 ) {
        $(".cover").addClass("dark");
        $(".predecimos").addClass("active");

    }else{
        $(".cover").removeClass("dark"); 
        $(".predecimos").removeClass("active");         
    }

    if ( $(window).scrollTop() > $intro-100 ) {
        $(".item-nav").addClass("active");
    }else{
        $(".item-nav").removeClass("active");
    }
});


// Scroll top de la barra de navegación
$(".scrollTop").on("click", function(){
    $('html, body').animate({
        scrollTop: 0
    }, 800, function(){
    });
});



// Animacion de textos

if( $('.animation-text').length > 0 ){
    $('.animation-text').one('isVisible', animate_text);

    $(window).on('scroll', function(){
        $('.animation-text').each(function(){
            $offset = $(this).attr("offset");

            if ($offset == null) {
                $offset=50;
            }

            
            if( isInViewPort( $(this), $offset ) ){
                $(this).trigger('isVisible');
            }
        });
    });

    $(document).ready(function(){
        $('.animation-text').each(function(){
            $offset = $(this).attr("offset");
            if ($offset == null) {
                $offset=50;
            }
            if( isInViewPort( $(this), $offset ) ){
                $(this).trigger('isVisible');
            }
        });
    });
}



function animate_text(){
    $(this).addClass("active");
}















function isInViewPort ( element, $offset ) {
    if( $(element).length == 0 ) return false;
    var elementTop = $(element).offset().top;
    var elementBottom = elementTop + $(element).outerHeight();
    var viewportTop = $(window).scrollTop() ;
    var viewportBottom = viewportTop + $(window).height() ;
    return elementBottom > viewportTop && elementTop < viewportBottom - $offset;
}