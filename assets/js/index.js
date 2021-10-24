var str=["Hi ...",
        "I am Lian, Yan-Jia.",
        "I graduatted from NTUB Department of Digital Multimedia Design.",
        "I good at programming and art design.",
        "Here is my portfolio and take a look."
        ];
var i = 0;var j= 0;
var back;
var reverse = false;

function type(){
    if(!reverse){
        if(i <= str[j].length){
            i++;
            $('.typing').html(str[j].slice(0,i));
            setTimeout('type()', 200);
        }
        else{
            reverse=!reverse;
            if(j<str.length-1){
                setTimeout('type()', 750);
            }else{
                setTimeout('type()', 5000);
            }
            back= 45;
        }
    }else{
        if(i > 0){
            i--;
            $('.typing').html(str[j].slice(0,i));
            setTimeout('type()', back);
            if(back>1){back-=0.25;}
        }
        else{
            reverse=!reverse;
            if(j<str.length-1){j++;}
            else{j=1;}

            setTimeout('type()', 750);
        }
    }
}
type();

var isFlash = false
function flashing(){
    isFlash= !isFlash;
    if(isFlash){
        $('.flashing').html('|');
    }else{
        $('.flashing').html('');
    }
    setTimeout('flashing()', 250);
}
flashing();
