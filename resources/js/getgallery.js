
var mywindowswidth = document.documentElement.scrollWidth;

var widthdef; //ширина блока изображений
var heightdef;//максимальная высота одной строки
if  (mywindowswidth>=1080){
    widthdef = (mywindowswidth/100)*50;
    heightdef = widthdef/100*50;
    document.getElementById("my_gallery").style.width = widthdef + 'px';
}
else {
    widthdef = mywindowswidth;
    heightdef = widthdef/100*50;
    document.getElementById("my_gallery").style.width = widthdef + 'px';
}

var mymargin = 2; //отступы между картинками
var imagescount_js; //количество картинок в директории uploadsdir, будет произведен подсчет в php через ajax-запрос
var images;
var hightes;
var mywidth;

var w = new Array();
var h = new Array();

$(document).ready (function (){
    $.ajax({
        url:"/getmsg",
        type:"GET",
        data:'_token = <?php echo csrf_token() ?>',
        dataType: "json",
        beforeSend: funcBefore,
        success: funcSuccess
    });

});
function funcBefore(){
    $("#information").text("Ожидание...");
}
function funcSuccess(data){
    $("#information").empty();
    if(data=='Картинок не найдено, всё очень плохо:('){
        $("#information").text(data);
        return;
    }
    w = Object.values(data['arr1']); //массив с ширинами картинок
    h = Object.values(data['arr2']); //массив с высотами картинок
    lines = Object.values(data['arr3']);
    imagescount_js = h.length-1;
    var img = new Array(); //- массив картинок
    for (var z=0; z<=imagescount_js; z++){
        img[z]= z+1;
    }
    var delim;
    var delit;
    var ht;
    var first = 0;

    while (first<=imagescount_js){

        images=first-1;
        hightes=heightdef+1;

        while(hightes > heightdef && images<imagescount_js) {
            images++;
            mywidth=widthdef-(images-first+1)*(mymargin*2); //ширина,с учетом отсупов
            delim=mywidth*h[first];
            delit=w[first];

            for(var j=(first+1); j<=images; j++) {
                delit=delit+w[j]*(h[first]/h[j]);
            }
            hightes=Math.floor(delim/delit);//высота строки

            if(hightes<=heightdef) {
                for(var i=first; i<=images;i++) {
                    ht=hightes+'px';
                    if(lines[i]){
                        $("#my_gallery").append("<a data-caption='"+lines[i]+"' href='resources/img/big/"+img[i]+".jpg'><img style='margin:"+mymargin+"px;' src='resources/img/big/"+img[i]+".png' height='"+ht+"'></a>");
                    }
                    else { //выводим картинку
                        $("#my_gallery").append("<a href='resources/img/big/"+img[i]+".jpg'><img style='margin:"+mymargin+"px;' src='resources/img/big/"+img[i]+".png' height='"+ht+"'></a>");
                    }
                }
                first=images+1;
            }
            else {
                if(images == imagescount_js) {
                //вывод картинок, если блок не получается полностью заполненным
                    for(var y=first; y<=images; y++) {
                        if(lines[i]){
                            $("#my_gallery").append("<a data-caption='"+lines[y]+"' href='resources/img/big/"+img[y]+".jpg'><img style='margin:"+mymargin+"px;' src='resources/img/"+img[y]+".png' height='"+heightdef+"px'></a>");
                        }
                        else {
                            $("#my_gallery").append("<a href='resources/img/big/"+img[y]+".jpg'><img style='margin:"+mymargin+"px;' src='resources/img/"+img[y]+".png' height='"+heightdef+"px'></a>");
                        }
                    }
                    first=images+1; //указываем, с какой картинки считать
                }
            }
        }
    }
}
