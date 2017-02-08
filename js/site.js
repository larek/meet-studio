    $(document).ready(function(){
        $('#row .box-hover').hover(function(){
        $('.hover-homepage', this).stop().animate({marginBottom:'10px'},{queue:false,duration:460,speed : 500});
        $('.hover-homepage',this).removeClass('invisible').addClass('visible');
    }, function() {
        $('.hover-homepage', this).stop().animate({marginBottom:'-50px'},{queue:false,duration:460,speed : 500}).addClass('invisible');
        $('.hover-homepage',this).removeClass('visible').addClass('invisible');
        });



        $('#row .box-hover').hover(function(){
        $('.hm-extra', this).stop().animate({marginBottom:'40px'},{queue:false,duration:460,speed : 200});
        $('.hm-extra',this).removeClass('invisible').addClass('visible');
    }, function() {
        $('.hm-extra', this).stop().animate({marginBottom:'-20px'},{queue:false,duration:460,speed : 500}).addClass('invisible');
        $('.hm-extra',this).removeClass('visible').addClass('invisible');
        });

        

    var index = 0, hash = window.location.hash;
    if (hash) {
        index = /\d+/.exec(hash)[0];
        index = (parseInt(index) || 1) - 1;
    }

    $(".flexslider_refresh").flexslider({
		animation: "slide",
        slideshow: true,
        controlNav: false,
        directionNav: true,     
	    animationLoop: true,
	    slideshowSpeed: 4500,
        animationDuration: 5000,
        startAt: index, 
        
    })

    // $(".nav > ul > li > a").mouseenter(function(){
    //     $(this).attr('class') == 'dropdown' ? $(".nav-dropdown").show() : $(".nav-dropdown").hide();
    // });

    // $(".nav").mouseleave(function(){
    //     $(".nav-dropdown").hide();
    // });

})