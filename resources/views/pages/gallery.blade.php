@extends('layouts.header')

@section('content')
    <style>
        .big_photo{
        position: fixed;
        background-color: rgba(27, 33, 37, 0.77);
        z-index: 9999;
        }
        .gitlinks a {
            color: #636b6f;
            font-size: 13px;
            font-style: italic;
        }
    </style>

    <div class="row m-0 align-items-center big_photo" style="height: 100%"></div>
    <div id="information"></div>
    <div class="col-lg-3 p-0 text-right gitlinks">
        <img src="storage/icn/git.png" style="height: 50px">
        <a href="https://github.com/Tsumir/Portfolio/blob/master/resources/views/pages/gallery.blade.php">github.com/Tsumir/Portfolio/blob/master/resources/views/pages/gallery.blade.php</a>
        <a href="https://github.com/Tsumir/Portfolio/blob/master/app/Http/Controllers/AjaxController.php">github.com/Tsumir/Portfolio/blob/master/app/Http/Controllers/AjaxController.php</a>
    </div>
    <div class="col-lg-6 p-0">
        <div id="my_gallery" class=""></div>
    </div>
    <script>
        var mywindowswidth = document.documentElement.scrollWidth;
        var widthdef; //ширина блока изображений
        var heightdef;//максимальная высота одной строки
        var imagescount_js;//количество изображений
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
        var mymargin = 2; //отступы между изображениями
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
        //Формирование галереи
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
                            var view = 'storage/images/big/'+(i+1)+'.jpg';
                            if(lines[i]){
                                $("#my_gallery").append("<a class='view_photo' data-caption='"+lines[i]+"' onclick='viewPhoto(\""+view+"\")' ><img style='margin:"+mymargin+"px;' src='storage/images/"+img[i]+".png' height='"+ht+"'></a>");
                            }
                            else { //выводим картинку
                                $("#my_gallery").append("<a class='view_photo' onclick='viewPhoto('"+view+"')'><img style='margin:"+mymargin+"px;' src='storage/images/"+img[i]+".png' height='"+ht+"'></a>");
                            }
                        }
                        first=images+1;
                    }
                    else {
                        if(images == imagescount_js) {
                            //вывод картинок, если блок не получается полностью заполненным
                            for(var y=first; y<=images; y++) {
                                var view = 'storage/images/big/'+(y+1)+'.jpg';
                                if(lines[i]){
                                    $("#my_gallery").append("<a class='view_photo' data-caption='"+lines[y]+"' onclick='viewPhoto('"+view+"')'><img style='margin:"+mymargin+"px;' src='storage/images/"+img[y]+".png' height='"+heightdef+"px'></a>");
                                }
                                else {
                                    $("#my_gallery").append("<a class='view_photo' onclick='viewPhoto('"+view+"')'><img style='margin:"+mymargin+"px;' src='storage/images/"+img[y]+".png' height='"+heightdef+"px'></a>");
                                }
                            }
                            first=images+1; //указываем, с какой картинки считать
                        }
                    }
                }
            }
        }

        //Функции отображения изображения в полный размер и функция выхода из него
        var trig = false;
        var viewPhoto = function(text){
            var id = text;
            document.body.style.overflow = 'hidden';
            $(".big_photo").show();
            $(".big_photo").append("<div class='col-lg-12 img_big_photo text-center' style='width:"+document.documentElement.clientWidth+"px'><img src='"+id+"' style='width:auto; max-height: 800px' class='img-fluid' alt=''></div>");
            trig = true;
            return false;
        }
        $(document).mouseup(function (e) {
            var container = $(".img_big_photo");
            if (trig && container.has(e.target).length === 0){
                document.body.style.overflow = 'visible';
                $(".big_photo").empty();
                $(".big_photo").hide();
                trig = false;
            }
        });

    </script>


@endsection
