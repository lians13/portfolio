$('.detail_btn').click(function (e) { 
    e.stopPropagation();
    if($('.menu').css('display') == 'block'){
        $('.menu').fadeOut(150);
    }else if($('.menu').css('display') == ''||$('.menu').css('display') == 'none'){
        $('.menu').fadeIn(150);
        if($('header').css('position') == 'fixed'){
            $('.menu').css({'top':95})
        }else{
            $('.menu').css({'top':$('.detail_btn').offset().top+55})
        }
    }
});
$('.menu').click(function (e) { 
    e.stopPropagation();
});
$(document).click(function(){
    if($('.menu').css('display') == 'block'){
        $('.menu').fadeOut(150);
    }
});
var navheight = $('header').offset().top;
$(window).scroll(function(){
    if(window.scrollY>navheight){
        $('header').css({'position': 'fixed','boxShadow':'0px 3px 5px rgba(52,44,52,0.1) inset'});
        $('.pack').css({'padding-top':$('header').innerHeight()});
        $('.portfolio').css({'padding-top':$('header').innerHeight()});
    }else{
        $('header').removeAttr('style');
        $('.pack').removeAttr('style');
        $('.portfolio').removeAttr('style');
    }
});

new Clipboard( "#copy" );
$('.contact_btn').click(function(){
    alert('Email 已複製到剪貼簿');
});