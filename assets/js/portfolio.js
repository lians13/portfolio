var wWidth = $(window).innerWidth();
$(window).resize(function () { 
    var w = $(window).innerWidth();
    if(wWidth != w){setplace();}
    wWidth=w;
    
});
$('.work').click(function (e) { 

    $('.float_info').css('display','flex')
    
    var img_gif_id ='#'+ $(this).attr('id')+'_img';
    var text_id ='#'+ $(this).attr('id')+'_text';

    $('.info_img').html($(img_gif_id).html());

    $('.info_img').children('.work_img').removeAttr('style');
    $('.info_img').children('.work_img').removeAttr('class');

    $('.info_text').html($(text_id).html());
    $('.info_text_pos').css({'width': $('.info_img').innerWidth()-30 , 'top': $('.info_img').offset().top+$('.info_img').innerHeight()-window.scrollY});

});

$('.float_info').click(function (e) {
    if($('.float_info').css('display') == 'block' ||$('.float_info').css('display') == 'flex'){
        $('.float_info').fadeOut(100);
    }
});

function setplace(){ 
    imgsize();

    var left_width = 0;
    var height_offest =0;   var point=0;
    var work_height= new Array();

    $(".work").each(function(index){

        var y = 0
        if(height_offest == 0){y=$('header').innerHeight()}
        else{y = work_height[index-height_offest]}

        $(this).css({'position': 'absolute' , 'left': left_width , 'top': y+15})
  
        if($(this).offset().left+ $(this).innerWidth() > $('.preview').innerWidth()){
            left_width = 0; 

            height_offest = index - point;
            y = work_height[index-height_offest]
            $(this).css({'position': 'absolute' , 'left': left_width ,'top': y+15})
            point = index;
        }
        left_width+=$(this).innerWidth();

        work_height[index] = $(this).offset().top + $(this).innerHeight();
        
        if( work_height[index] -$('.preview').offset().top> $('.preview').innerHeight()){
            $('.preview').css('height', work_height[index])
        }
    });
}
function imgsize(){
    var fulllwidth = $('.preview').width();
    var y = 0;
    if(fulllwidth>1024){y= (fulllwidth-40)/4}
    else if(fulllwidth>768){y= (fulllwidth-30)/3}
    else{y= (fulllwidth-20)/2}
    $(".work_img").each(function(){
        $(this).css('width', y-1)
    })

    $('.preview').css('height','auto');
}