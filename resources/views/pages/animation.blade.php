@extends('layouts.header')

@section('content')
    <div id="xl" class="mx-auto col-lg-6" style="padding: 0 !important;   overflow: hidden;     ">
        <div class="hiding" style="background-color: #FFFFFF;">
            <div id="back1" style="background-image: url('storage/eco/back.png'); background-repeat: no-repeat; background-size:100%; width: 1280px; height: 560px; position: relative;">
                <div id="mask" style="background-color:white; position: absolute; height: 140px; top:150px; width:50px; z-index: 150;"></div>
                <img id="road1" src="storage/eco/road-green.png" style="position: absolute; height: 140px; right: 55px; top:150px; z-index: 50;">
                <img id="car" src="storage/eco/car1.png" style="position: absolute; height: 140px;  right: 990px; top:150px; z-index: 100;">
                <div id="main" style="position: absolute; right: 1200px; top:178px; z-index: 300;">
                    <div id='smoke' style="height: 87px; width:300px; background-image: url('storage/eco/smoke.png'); background-repeat: no-repeat; background-size:130px 80px;  background-position: 182px 0px; ">
                    </div>
                </div>
                <img id="road2" src="storage/eco/road-green.png" style="position: absolute; height: 140px; right: 55px; top:320px; z-index: 50;">
                <img id="car2" src="storage/eco/car2.png" style="position: absolute; height: 87px;  right: 990px; top:350px; z-index: 100;">
                <div id="main2" style="position: absolute;    right: 1200px; top:352px; z-index: 300;">
                    <div id='leaf' style="height: 87px; width:300px; background-image: url('storage/eco/leaf.png'); background-repeat: no-repeat; background-size:130px 80px;  background-position: 180px 0px; ">
                    </div>
                </div>
            </div>

            <div id="back2" style="background-image: url('storage/oil/back.png'); background-repeat: no-repeat; background-size:100%; width: 1280px; height: 560px; position: relative;">
                <img id="arrow" src="storage/oil/arrow.png" style="position: absolute; transform: rotate(16deg); width:130px; right: 576px; top:217px; z-index: 20;">

                <div id="celsius_main" style="font-size:30px; font-weight: 600; color: #33567b; font-family: 'Franklin Gothic Medium', serif; position: absolute; left:590px; top:350px; z-index: 110;">+<span id="celsius">50</span>°C</div>
                <img id="sign" src="storage/oil/sign1.png" style="position: absolute; height: 75px;  left: 595px; top:418px; z-index: 23;">
                <div id="tank" style="background-image: linear-gradient(to right, #3f648b 0%, #3f648b 3.27%, #7bafdf 50%,#3f648b 100%); background-position: -116px center; border:4px solid #000000; border-bottom-right-radius: 10px;  border-bottom-left-radius: 10px; position: absolute; height: 175px; overflow: hidden; width:165px; top:310px; left:375px; z-index: 20;">
                    <div id='oil' style="background-image: linear-gradient(to right, #c47500 0%, #c47500 3.27%, #d9a700 50%,#c47500 100%); background-position: -140px center; height: 165px; width:165px; position: absolute;z-index: 22; top:15px;"></div>
                    <div id="smoke_oil" style="background-image: url('storage/oil/smoke.png'); background-position: 0px 0px; background-repeat: repeat-y; background-size: 100% 200%; height: 176px; position: absolute; width: 166px; z-index: 21;"></div>
                </div>
                <img id="scale" src="storage/oil/scale.png" style="position: absolute; height: 175px;  left: 510px; top:314px; z-index: 23;">
                <div id="tank2" style="background-image: linear-gradient(to right, #3f648b 0%, #3f648b 3.27%, #7bafdf 50%,#3f648b 100%); background-position: -116px center; border:4px solid #000000; border-bottom-right-radius: 10px;  border-bottom-left-radius: 10px; position: absolute; height: 175px; overflow: hidden; width:165px; top:310px; left:730px; z-index: 20;">
                    <div id='oil2' style="background-image: linear-gradient(to right, #c47500 0%, #c47500 3.27%, #d9a700 50%,#c47500 100%); background-position: -140px center; height: 165px; width:165px; position: absolute;z-index: 22; top:15px;"></div>
                </div>
                <img id="scale2" src="storage/oil/scale.png" style="position: absolute; height: 175px;  left: 865px; top:314px; z-index: 23;">
                <img id="logo" src="storage/oil/logo.png" style="position: absolute; height: 100px;  left: 750px; top:360px; z-index: 23;">
            </div>

            <div id="back3" style="background-image: url('storage/money/back.png'); background-repeat: no-repeat; background-size:100%; width: 1280px; height: 560px; position: relative;">
                <img id="mon1" src="storage/money/money.png" style="position: absolute; width:35px; top:225px; left:105px; z-index: 1;">
                <img id="mon2" src="storage/money/money.png" style="position: absolute; width:35px; top:219px; left:105px; z-index: 2;">
                <img id="money4" src="storage/money/money.png" style="position: absolute; width:35px; top:213px; left:105px; z-index: 3;">
                <img id="money3" src="storage/money/money.png" style="position: absolute; width:35px; top:207px; left:105px; z-index: 4;">
                <img id="money2" src="storage/money/money.png" style="position: absolute; width:35px; top:201px; left:105px; z-index: 5;">
                <img id="money1" src="storage/money/money.png" style="position: absolute; width:35px; top:195px; left:105px; z-index: 6;">
                <img id="money_car1" src="storage/money/car1.png" style="position: absolute; height: 87px;  right: 885px; top:205px; z-index: 2;">

                <img id="mon3" src="storage/money/money.png" style="position: absolute; width:35px; top:350px; left:105px; z-index: 1;">
                <img id="mon4" src="storage/money/money.png" style="position: absolute; width:35px; top:344px; left:105px; z-index: 2;">
                <img id="mon5" src="storage/money/money.png" style="position: absolute; width:35px; top:338px; left:105px; z-index: 3;">
                <img id="mon6" src="storage/money/money.png" style="position: absolute; width:35px; top:332px; left:105px; z-index: 4;">
                <img id="mon7" src="storage/money/money.png" style="position: absolute; width:35px; top:326px; left:105px; z-index: 5;">
                <img id="mon8" src="storage/money/money.png" style="position: absolute; width:35px; top:320px; left:105px; z-index: 6;">
                <img id="money_car2" src="storage/money/car2.png" style="position: absolute; height: 87px;  right: 885px; top:345px; z-index: 2;">

                <img id="money_info" src="storage/money/info.png" style="position: absolute; height: 147px;  right: 88px; top:241px; z-index: 2;">
            </div>

            <div id="back4" style="background-image: url('storage/engine/back.png'); background-repeat: no-repeat; background-size:100%; width: 1280px; height: 560px; position: relative;">
                <img id="engine_car1" src="storage/engine/car1.png" style="position: absolute; height: 87px;  right: 990px; top:215px; z-index: 2;">
                <img id="engine_car2" src="storage/engine/car2.png" style="position: absolute; height: 87px;  right: 990px; top:350px; z-index: 2;">
                <img id="engine_info" src="storage/engine/info.png" style="position: absolute; height: 147px;  left: 108px; top:250px; z-index: 2;">
                <img id="red" src="storage/engine/red.png" style="position: absolute; height: 160px;  right: 900px; top:247px; z-index: 4;">
                <img id="yellow" src="storage/engine/yellow.png" style="position: absolute; height: 160px;  right: 900px; top:247px; z-index: 3;">
                <img id="green" src="storage/engine/green.png" style="position: absolute; height: 160px;  right: 900px; top:247px; z-index: 2;">
            </div>

            <div id="back5" style="background-image: url('storage/sound/back.png'); background-repeat: no-repeat; background-size:100%; width: 1280px; height: 560px; position: relative;">
                <img id="engine1" src="storage/sound/engine1.png" style="position: absolute; height: 190px;  right: 800px; top:280px; z-index: 2;">
                <img id="engine2" src="storage/sound/engine2.png" style="position: absolute; height: 190px;  right: 237px; top:280px; z-index: 2;">
                <img id="sound_info" src="storage/sound/info.png" style="position: absolute; height: 115px;  left: 580px; top:270px; z-index: 2;">
                <img id="equa1" src="storage/sound/equa1.png" style="position: absolute; width:510px; height: 90px;  right: 385px; top:140px; z-index: 3;">
                <img id="equa2" src="storage/sound/equa2.png" style="position: absolute; width:510px; height: 90px;  right: 385px; top:140px; z-index: 2;">
                <img id="vibr1" src="storage/sound/vibr1.png" style="position: absolute; height: 30px;  left: 165px; top:400px; z-index: 2;">
                <img id="vibr2" src="storage/sound/vibr2.png" style="position: absolute; height: 30px;  left: 200px; top:330px; z-index: 2;">
                <img id="vibr3" src="storage/sound/vibr3.png" style="position: absolute; height: 45px;  left: 260px; top:255px; z-index: 2;">
                <img id="vibr4" src="storage/sound/vibr4.png" style="position: absolute; height: 45px;  left: 335px; top:220px; z-index: 2;">
                <img id="vibr5" src="storage/sound/vibr5.png" style="position: absolute; height: 45px;  left: 420px; top:235px; z-index: 2;">
                <img id="vibr6" src="storage/sound/vibr6.png" style="position: absolute; height: 30px;  left: 460px; top:295px; z-index: 2;">
                <img id="vibr7" src="storage/sound/vibr7.png" style="position: absolute; height: 30px;  left: 440px; top:420px; z-index: 2;">
            </div>

            <div id="back6" style="background-image: url('storage/time/back.png'); background-repeat: no-repeat; background-size:100%; width: 1280px; height: 560px; position: relative;">
                <img id="heart1" src="storage/time/engine1.png" style="position: absolute; height: 190px;  right: 800px; top:280px; z-index: 5;">
                <img id="heart1_2" src="storage/time/engine1.png" style="position: absolute; height: 190px;  right: 800px; top:280px; z-index: 5;">

                <img id="cardio_img" src="storage/time/cardio.png" style="position: absolute; width: 344.5px; height: 115px; left: 170px; top:340px; z-index: 3;">
                <div id="cardio1" style="background-color: #FFFFFF; width: 344.5px; position: absolute; height: 115px; left: 170px; top:340px; z-index: 4; "></div>

                <img id="heart2" src="storage/time/engine2.png" style="position: absolute; height: 190px;  right: 237px; top:280px; z-index: 8;">
                <img id="cardio_img2" src="storage/time/cardio.png" style="position: absolute; width: 344.5px; height: 115px; left: 740px; top:340px; z-index: 6;">
                <div id="cardio2" style="background-color: #FFFFFF; width: 344.5px; position: absolute; height: 115px; left: 740px; top:340px; z-index: 7; "></div>

                <img id="time_arrow" src="storage/time/arrow.png" style="position: absolute; transform: rotate(-31deg); width:130px; right: 576px; top:217px; z-index: 20;">
                <img id="attention" src="storage/time/attention.png" style="position: absolute; height: 65px;  left: 305px; top:200px; z-index: 7;">
                <img id="time_info" src="storage/time/info.png" style="position: absolute; height: 155px;  left: 1015px; top:175px; z-index: 7;">

                <img id="counter" src="storage/time/timer.png" style="position: absolute; height: 36px;  left: 528px; top:356px; z-index: 7;">
                <div id="n6" style="font-size:40px; color: #FFFFFF; font-family: 'Franklin Gothic Medium', serif; position: absolute; left:534px; top:342px; z-index: 110;">0</div>
                <div id="n5" style="font-size:40px; color: #FFFFFF; font-family: 'Franklin Gothic Medium', serif; position: absolute; left:571px; top:342px; z-index: 110;">0</div>
                <div id="n4" style="font-size:40px; color: #FFFFFF; font-family: 'Franklin Gothic Medium', serif; position: absolute; left:608px; top:342px; z-index: 110;">0</div>
                <div id="n3" style="font-size:40px; color: #FFFFFF; font-family: 'Franklin Gothic Medium', serif; position: absolute; left:645px; top:342px; z-index: 110;">0</div>
                <div id="n2" style="font-size:40px; color: #FFFFFF; font-family: 'Franklin Gothic Medium', serif; position: absolute; left:682px; top:342px; z-index: 110;">0</div>
                <div id="n1" style="font-size:40px; color: #FFFFFF; font-family: 'Franklin Gothic Medium', serif; position: absolute; left:719px; top:342px; z-index: 110;">0</div>
            </div>

            <div id="back7" style="background-image: url('storage/comp/back.png'); background-repeat: no-repeat; background-size:100%; width: 1280px; height: 560px; position: relative;">
                <img id="comp_arrow" src="storage/comp/arrow.png" style="position: absolute; transform: rotate(-16deg); width:95px; right: 592px; top:217px; z-index: 20;">
                <img id="comp_arrow1" src="storage/comp/arrow.png" style="position: absolute; transform: rotate(15deg); width:150px; right: 733px; top:350px; z-index: 20;">
                <img id="comp_arrow2" src="storage/comp/arrow.png" style="position: absolute; transform: rotate(15deg); width:150px; right: 393px; top:350px; z-index: 20;">
                <img id="mech1" src="storage/comp/mech.png" style="position: absolute; width:41px; right: 857px; top:394px; z-index: 20;">
                <img id="mech2" src="storage/comp/mech.png" style="position: absolute; width:41px; right: 812px; top:462px; z-index: 20;">
                <img id="mech3" src="storage/comp/mech.png" style="position: absolute; width:41px; right: 767px; top:462px; z-index: 20;">
                <img id="mech4" src="storage/comp/mech.png" style="position: absolute; width:41px; right: 722px; top:394px; z-index: 20;">
                <img id="mech5" src="storage/comp/mech.png" style="position: absolute; width:41px; right: 517px; top:394px; z-index: 20;">
                <img id="mech6" src="storage/comp/mech.png" style="position: absolute; width:41px; right: 472px; top:462px; z-index: 20;">
                <img id="mech7" src="storage/comp/mech.png" style="position: absolute; width:41px; right: 427px; top:462px; z-index: 20;">
                <img id="mech8" src="storage/comp/mech.png" style="position: absolute; width:41px; right: 382px; top:394px; z-index: 20;">
                <div id="mask2" style="position:absolute; width: 1280px; height:70px; top:488px; padding-top: 30px; z-index: 21; background-color: #FFFFFF;"><img id="mask_img" src="storage/comp/line.png" style="width:1280px;"></div>
            </div>
            <div style="height: 340px;"></div>
        </div>
    </div>



    <script>
        $(window).resize(function(){
            document.location.reload(true);
        })

        $(window).ready(function(){
            var c = $("#xl").width()/1280;
            var wd1280 = 1280*c; var wd50 = 50*c; var wd300 = 300*c; var wd130 = 130*c; var wd165 = 165*c; var wd166 = 166*c; var wd35 = 35*c; var wd510 = 510*c; var wd95 = 95*c; var wd150 = 150*c; var wd41 = 41*c; var wd344 = 344.5*c;
            var hg560 = 560*c; var hg140 = 140*c; var hg87 = 87*c; var hg75 = 75*c; var hg175 = 175*c; var hg165 = 165*c; var hg176 = 176*c; var hg100 = 100*c; var hg147 = 147*c; var hg160 = 160*c; var hg190 = 190*c; var hg115 = 115*c; var hg90 = 90*c; var hg30 = 30*c; var hg45 = 45*c; var hg65 = 65*c; var hg155 = 155*c; var hg36 = 36*c; var hg50 = 50*c; var hg200 = 200*c; var hg2 = Math.ceil(2*c); var hg70 = 70*c;
            var tp150 = 150*c; var tp178 = 178*c; var tp320 = 320*c; var tp350 = 350*c; var tp352 = 352*c; var tp418 = 418*c; var tp15 = 15*c; var tp314 = 314*c; var tp360 = 360*c; var tp225 = 225*c; var tp217 = 217*c; var tp310 = 310*c; var tp219 = 219*c; var tp213 = 213*c; var tp207 = 207*c; var tp201 = 201*c; var tp195 = 195*c; var tp344 = 344*c; var tp420 = 420*c; var tp175 = 175*c; var tp351 = 351*c; var tp462 = 462*c;
            var tp338 = 338*c; var tp332 = 332*c; var tp326 = 326*c; var tp205 = 205*c; var tp345 = 345*c; var tp241 = 241*c; var tp215 = 215*c; var tp250 = 250*c; var tp247 = 247*c; var tp280 = 280*c; var tp270 = 270*c; var tp140 = 140*c; var tp400 = 400*c; var tp330 = 330*c; var tp255 = 255*c; var tp220 = 220*c; var tp235 = 235*c; var tp295 = 295*c; var tp200 = 200*c; var tp356 = 356*c; var tp394 = 394*c; var tp488 = 488*c;
            var tp61 = 61*c; var tp395 = 395*c; var tp325 = 325*c; var tp245 = 245*c; var tp290 = 290*c; var tp340 = 340*c; var tp413 = 413*c; var tp342 = 342*c;
            var rg55 = 55*c; var rg990 = 990*c; var rg1200 = 1200*c; var rg576 = 576*c; var rg885 = 885*c; var rg88 = 88*c; var rg900 = 900*c; var rg800 = 800*c; var rg237 = 237*c; var rg385 = 385*c; var rg592 = 592*c; var rg733 = 733*c; var rg350 = 350*c; var rg393 = 393*c; var rg857 = 857*c; var rg812 = 812*c; var rg767 = 767*c; var rg722 = 722*c; var rg517 = 517*c; var rg472 = 472*c; var rg427 = 427*c; var rg382 = 382*c;
            var rg70 = 70*c; var rg280 = 280*c; var rg240 = 240*c; var rg85 = 85*c;
            var lf590 = 590*c; var lf595 = 595*c; var lf375 = 375*c; var lf510 = 510*c; var lf730 = 730*c; var lf750 = 750*c; var lf865 = 865*c; var lf105 = 105*c; var lf108 = 108*c; var lf580 = 580*c; var lf165 = 165*c; var lf200 = 200*c; var lf260 = 260*c; var lf335 = 335*c; var lf420 = 420*c; var lf460 = 460*c; var lf440 = 440*c;
            var lf740 = 740*c; var lf305 = 305*c; var lf1015 = 1015*c; var lf528 = 528*c; var lf534 = 534*c; var lf571 = 571*c; var lf608 = 608*c; var lf645 = 645*c; var lf682 = 682*c; var lf719 = 719*c; var lf155 = 155*c; var lf190 = 190*c; var lf250 = 250*c; var lf430 = 430*c; var lf470 = 470*c; var lf450 = 450*c; var lf170 = 170*c; var lf514 = 514*c; var lf10845 = 1084.5*c;
            var bgh130 = 130*c;
            var bgw80 = 80*c;
            var bgx182 = 182*c; var bgx180 = 180*c; var bgx116 = -116*c; var bgx140 = -140*c; var bgx170 = 170*c;
            var bgy352=-352*c;
            var fs30 = 30*c; var fs40 = 40*c;
            var border4 = 4*c;
            var pt30 = 30*c;

            //1
            $("#back1").css({"width": wd1280+"px", "height": hg560+"px"});
            $("#mask").css({"width": wd50+"px", "height": hg140+"px", "top":tp150+"px"});
            $("#road1").css({"right": rg55+"px", "height": hg140+"px", "top":tp150+"px"});
            $("#car").css({"right": rg990+"px", "height": hg140+"px", "top":tp150+"px"});
            $("#main").css({"right": rg1200+"px", "top":tp178+"px"});
            $("#smoke").css({"width": wd300+"px", "height": hg87+"px", "background-size": bgh130+"px "+bgw80+"px", "background-position" : bgx182+"px 0px"});
            $("#road2").css({"right": rg55+"px", "height": hg140+"px", "top":tp320+"px"});
            $("#car2").css({"right": rg990+"px", "height": hg87+"px", "top":tp350+"px"});
            $("#main2").css({"right": rg1200+"px", "top":tp352+"px"});
            $("#leaf").css({"width": wd300+"px", "height": hg87+"px", "background-size": bgh130+"px "+bgw80+"px", "background-position" : bgx180+"px 0px"});
            //2
            $("#back2").css({"width": wd1280+"px", "height": hg560+"px"});
            $("#arrow").css({"width": wd130+"px", "right":rg576+"px", "top":tp217+"px"});
            $("#celsius_main").css({"font-size": fs30+"px", "left": lf590+"px", "top":tp350+"px"});
            $("#sign").css({"left": lf595+"px", "height": hg75+"px", "top":tp418+"px"});
            $("#tank").css({"width": wd165+"px", "height": hg175+"px", "top": tp310+"px", "left":lf375+"px", "background-position" : bgx116+"px center", "border":border4+"px solid #000000"});
            $("#oil").css({"width": wd165+"px", "height": hg165+"px", "top": tp15+"px", "background-position" : bgx140+"px center"});
            $("#oil2").css({"width": wd165+"px", "height": hg165+"px", "top": tp15+"px", "background-position" : bgx140+"px center"});
            $("#smoke_oil").css({"width": wd166+"px", "height": hg176+"px"});
            $("#scale").css({"top": tp314+"px", "height": hg175+"px", "left": lf510+"px"});
            $("#tank2").css({"width": wd165+"px", "height": hg175+"px", "top": tp310+"px", "left":lf730+"px", "background-position" : bgx116+"px center", "border":border4+"px solid #000000"});
            $("#scale2").css({"top": tp314+"px", "height": hg175+"px", "left": lf865+"px"});
            $("#logo").css({"top": tp360+"px", "height": hg100+"px", "left": lf750+"px"});
            //3
            $("#back3").css({"width": wd1280+"px", "height": hg560+"px"});
            $("#mon1").css({"width": wd35+"px", "top": tp225+"px", "left": lf105+"px"});
            $("#mon2").css({"width": wd35+"px", "top": tp219+"px", "left": lf105+"px"});
            $("#money4").css({"width": wd35+"px", "top": tp213+"px", "left": lf105+"px"});
            $("#money3").css({"width": wd35+"px", "top": tp207+"px", "left": lf105+"px"});
            $("#money2").css({"width": wd35+"px", "top": tp201+"px", "left": lf105+"px"});
            $("#money1").css({"width": wd35+"px", "top": tp195+"px", "left": lf105+"px"});
            $("#mon3").css({"width": wd35+"px", "top": tp350+"px", "left": lf105+"px"});
            $("#mon4").css({"width": wd35+"px", "top": tp344+"px", "left": lf105+"px"});
            $("#mon5").css({"width": wd35+"px", "top": tp338+"px", "left": lf105+"px"});
            $("#mon6").css({"width": wd35+"px", "top": tp332+"px", "left": lf105+"px"});
            $("#mon7").css({"width": wd35+"px", "top": tp326+"px", "left": lf105+"px"});
            $("#mon8").css({"width": wd35+"px", "top": tp320+"px", "left": lf105+"px"});
            $("#money_car1").css({"height": hg87+"px", "right": rg885+"px", "top": tp205+"px"});
            $("#money_car2").css({"height": hg87+"px", "right": rg885+"px", "top": tp345+"px"});
            $("#money_info").css({"height": hg147+"px", "right": rg88+"px", "top": tp241+"px"});
            //4
            $("#back4").css({"width": wd1280+"px", "height": hg560+"px"});
            $("#engine_car1").css({"height": hg87+"px", "right": rg990+"px", "top": tp215+"px"});
            $("#engine_car2").css({"height": hg87+"px", "right": rg990+"px", "top": tp350+"px"});
            $("#engine_info").css({"height": hg147+"px", "left": lf108+"px", "top": tp250+"px"});
            $("#red").css({"height": hg160+"px", "right": rg900+"px", "top": tp247+"px"});
            $("#yellow").css({"height": hg160+"px", "right": rg900+"px", "top": tp247+"px"});
            $("#green").css({"height": hg160+"px", "right": rg900+"px", "top": tp247+"px"});
            //5
            $("#back5").css({"width": wd1280+"px", "height": hg560+"px"});
            $("#engine1").css({"height": hg190+"px", "right": rg800+"px", "top": tp280+"px"});
            $("#engine2").css({"height": hg190+"px", "right": rg237+"px", "top": tp280+"px"});
            $("#sound_info").css({"height": hg115+"px", "left": lf580+"px", "top": tp270+"px"});
            $("#equa1").css({"width": wd510+"px", "height": hg90+"px", "right": rg385+"px", "top": tp140+"px"});
            $("#equa2").css({"width": wd510+"px", "height": hg90+"px", "right": rg385+"px", "top": tp140+"px"});
            $("#vibr1").css({"height": hg30+"px", "left": lf165+"px", "top": tp400+"px"});
            $("#vibr2").css({"height": hg30+"px", "left": lf200+"px", "top": tp330+"px"});
            $("#vibr3").css({"height": hg45+"px", "left": lf260+"px", "top": tp255+"px"});
            $("#vibr4").css({"height": hg45+"px", "left": lf335+"px", "top": tp220+"px"});
            $("#vibr5").css({"height": hg45+"px", "left": lf420+"px", "top": tp235+"px"});
            $("#vibr6").css({"height": hg30+"px", "left": lf460+"px", "top": tp295+"px"});
            $("#vibr7").css({"height": hg30+"px", "left": lf440+"px", "top": tp420+"px"});
            //6
            $("#back6").css({"width": wd1280+"px", "height": hg560+"px"});
            $("#cardio_img").css({"width": wd344+"px", "height": hg115+"px", "left": lf170+"px", "top": tp340+"px"});
            $("#cardio1").css({"width": wd344+"px", "height": hg115+"px", "left": lf170+"px", "top": tp340+"px"});
            $("#cardio_img2").css({"width": wd344+"px", "height": hg115+"px", "left": lf740+"px", "top": tp340+"px"});
            $("#cardio2").css({"width": wd344+"px", "height": hg115+"px", "left": lf740+"px", "top": tp340+"px"});
            $("#attention").css({"height": hg65+"px", "left": lf305+"px", "top": tp200+"px"});
            $("#time_info").css({"height": hg155+"px", "left": lf1015+"px", "top": tp175+"px"});
            $("#counter").css({"height": hg36+"px", "left": lf528+"px", "top": tp356+"px"});
            $("#n6").css({"font-size":fs40+"px", "left": lf534+"px", "top": tp342+"px"});
            $("#n5").css({"font-size":fs40+"px", "left": lf571+"px", "top": tp342+"px"});
            $("#n4").css({"font-size":fs40+"px", "left": lf608+"px", "top": tp342+"px"});
            $("#n3").css({"font-size":fs40+"px", "left": lf645+"px", "top": tp342+"px"});
            $("#n2").css({"font-size":fs40+"px", "left": lf682+"px", "top": tp342+"px"});
            $("#n1").css({"font-size":fs40+"px", "left": lf719+"px", "top": tp342+"px"});
            $("#heart1").css({"height": hg190+"px", "right": rg800+"px", "top": tp280+"px"});
            $("#heart1_2").css({"height": hg190+"px", "right": rg800+"px", "top": tp280+"px"});
            $("#heart2").css({"height": hg190+"px", "right": rg237+"px", "top": tp280+"px"});
            $("#time_arrow").css({"width": wd130+"px", "right":rg576+"px", "top":tp217+"px"});
            //7
            $("#back7").css({"width": wd1280+"px", "height": hg560+"px"});
            $("#comp_arrow").css({"width": wd95+"px", "right":rg592+"px", "top":tp217+"px"});
            $("#comp_arrow1").css({"width": wd150+"px", "right":rg733+"px", "top":tp350+"px"});
            $("#comp_arrow2").css({"width": wd150+"px", "right":rg393+"px", "top":tp350+"px"});
            $("#mech1").css({"width": wd41+"px", "right":rg857+"px", "top":tp394+"px"});
            $("#mech2").css({"width": wd41+"px", "right":rg812+"px", "top":tp462+"px"});
            $("#mech3").css({"width": wd41+"px", "right":rg767+"px", "top":tp462+"px"});
            $("#mech4").css({"width": wd41+"px", "right":rg722+"px", "top":tp394+"px"});
            $("#mech5").css({"width": wd41+"px", "right":rg517+"px", "top":tp394+"px"});
            $("#mech6").css({"width": wd41+"px", "right":rg472+"px", "top":tp462+"px"});
            $("#mech7").css({"width": wd41+"px", "right":rg427+"px", "top":tp462+"px"});
            $("#mech8").css({"width": wd41+"px", "right":rg382+"px", "top":tp394+"px"});
            $("#mask2").css({"width": wd1280+"px", "height": hg70+"px", "top": tp488+"px", "padding-top": pt30+"px"});
            $("#mask_img").css({"width": wd1280+"px"});

            var windowHeight = window.innerHeight;
            var boolback1 = true;
            var boolback2 = true;
            var boolback3 = true;
            var boolback4 = true;
            var boolback5 = true;
            var boolback6 = true;
            var boolback7 = true;
            var back1 = $('#back1').offset().top;
            var back2 = $('#back2').offset().top;
            var back3 = $('#back3').offset().top;
            var back4 = $('#back4').offset().top;
            var back5 = $('#back5').offset().top;
            var back6 = $('#back6').offset().top;
            var back7 = $('#back7').offset().top;
            if (back1<$(window).scrollTop()+windowHeight-(hg560 + ((windowHeight-hg560)/2))&&$(this).scrollTop() + windowHeight - (hg560 + ((windowHeight-hg560)/2)) < back1+((windowHeight-hg560)/2)){funcBack1();}
            if (back2<$(window).scrollTop()+windowHeight-(hg560 + ((windowHeight-hg560)/2))&&$(this).scrollTop() + windowHeight - (hg560 + ((windowHeight-hg560)/2)) < back2+((windowHeight-hg560)/2)){funcBack2();}
            if (back3<$(window).scrollTop()+windowHeight-(hg560 + ((windowHeight-hg560)/2))&&$(this).scrollTop() + windowHeight - (hg560 + ((windowHeight-hg560)/2)) < back3+((windowHeight-hg560)/2)){funcBack3();}
            if (back4<$(window).scrollTop()+windowHeight-(hg560 + ((windowHeight-hg560)/2))&&$(this).scrollTop() + windowHeight - (hg560 + ((windowHeight-hg560)/2)) < back4+((windowHeight-hg560)/2)){funcBack4();}
            if (back5<$(window).scrollTop()+windowHeight-(hg560 + ((windowHeight-hg560)/2))&&$(this).scrollTop() + windowHeight - (hg560 + ((windowHeight-hg560)/2)) < back5+((windowHeight-hg560)/2)){funcBack5();}
            if (back6<$(window).scrollTop()+windowHeight-(hg560 + ((windowHeight-hg560)/2))&&$(this).scrollTop() + windowHeight - (hg560 + ((windowHeight-hg560)/2)) < back6+((windowHeight-hg560)/2)){funcBack6();}
            if (back7<$(window).scrollTop()+windowHeight-(hg560 + ((windowHeight-hg560)/2))&&$(this).scrollTop() + windowHeight - (hg560 + ((windowHeight-hg560)/2)) < back7+((windowHeight-hg560)/2)){funcBack7();}

            //ЗАПУСК АНИМАЦИИ ПРИ ПРОКРУТКИ ДО КАЖДОГО БЛОКА------------------------
            $(window).scroll(function() {
                if ($(this).scrollTop() + windowHeight - (hg560 + ((windowHeight-hg560)/2)) > back1 && $(this).scrollTop() + windowHeight - (hg560 + ((windowHeight-hg560)/2)) < back1+((windowHeight-hg560)/2) && boolback1) {
                    funcBack1();
                }
                if ($(this).scrollTop() + windowHeight - (hg560 + ((windowHeight-hg560)/2)) > back2 && $(this).scrollTop() + windowHeight - (hg560 + ((windowHeight-hg560)/2)) < back2+((windowHeight-hg560)/2) && boolback2) {
                    funcBack2();
                }
                if ($(this).scrollTop() + windowHeight - (hg560 + ((windowHeight-hg560)/2)) > back3 && $(this).scrollTop() + windowHeight - (hg560 + ((windowHeight-hg560)/2)) < back3+((windowHeight-hg560)/2) && boolback3) {
                    funcBack3();
                }
                if ($(this).scrollTop() + windowHeight - (hg560 + ((windowHeight-hg560)/2)) > back4 && $(this).scrollTop() + windowHeight - (hg560 + ((windowHeight-hg560)/2)) < back4+((windowHeight-hg560)/2) && boolback4) {
                    funcBack4();
                }
                if ($(this).scrollTop() + windowHeight - (hg560 + ((windowHeight-hg560)/2)) > back5 && $(this).scrollTop() + windowHeight - (hg560 + ((windowHeight-hg560)/2)) < back5+((windowHeight-hg560)/2) && boolback5) {
                    funcBack5();
                }
                if ($(this).scrollTop() + windowHeight - (hg560 + ((windowHeight-hg560)/2)) > back6 && $(this).scrollTop() + windowHeight - (hg560 + ((windowHeight-hg560)/2)) < back6+((windowHeight-hg560)/2) && boolback6) {
                    funcBack6();
                }
                if ($(this).scrollTop() + windowHeight - (hg560 + ((windowHeight-hg560)/2)) > back7 && $(this).scrollTop() + windowHeight - (hg560 + ((windowHeight-hg560)/2)) < back7+((windowHeight-hg560)/2) && boolback7) {
                    funcBack7();
                }

            });

            //РАЗДЕЛ ЭКОЛОГИЯ-------------------------------------------------------
            function funcBack1(){
                $("#car").css({"right": rg990+"px", "height": hg140+"px", "top":tp150+"px"});
                $("#main").css({"right": rg1200+"px", "top":tp178+"px"});
                $("#smoke").css({"width": wd300+"px", "height": hg87+"px", "background-size": bgh130+"px "+bgw80+"px", "background-position" : bgx182+"px 0px"});
                $("#car2").css({"right": rg990+"px", "height": hg87+"px", "top":tp350+"px"});
                $("#main2").css({"right": rg1200+"px", "top":tp352+"px"});
                $("#leaf").css({"width": wd300+"px", "height": hg87+"px", "background-size": bgh130+"px "+bgw80+"px", "background-position" : bgx180+"px 0px"});
                $("#smoke").css('backgroundImage', 'url("storage/eco/smoke.png")');
                $("#leaf").css('backgroundImage', 'url("storage/eco/leaf.png")');
                boolback1 = false;
                let carsAnim = setTimeout(function carsAnimation () {
                    $("#car").animate({right:rg70+"px"},8000);
                    $("#main").animate({right:rg280+"px"},8000,function(){
                        $("#smoke").css('backgroundImage', 'url()');
                        clearInterval(timerSmoke);
                    });
                    $("#car2").animate({right:rg70+"px"},8000);
                    $("#main2").animate({right:rg280+"px"},8000,function(){
                        $("#leaf").css('backgroundImage', 'url()');
                        clearInterval(timerLeaf);
                        clearTimeout(carsAnim);
                        boolback1 = true;
                    });
                },0);
                let timerSmoke = setInterval(function tickSmoke() {
                    $("#smoke").animate({backgroundPositionX:bgx170+"px", opacity:0},900);
                    $("#smoke").animate({backgroundPosition:bgx182+"px", opacity:1},0);
                }, 300);
                let timerLeaf = setInterval(function tickLeaf() {
                    $("#leaf").animate({backgroundPositionX:bgx170+"px", opacity:0},900);
                    $("#leaf").animate({backgroundPosition:bgx180+"px", opacity:1},0);
                }, 300);
            }
            //РАЗДЕЛ МАСЛО----------------------------------------------------------
            function funcBack2(){
                $("#arrow").css({
                    '-moz-transform':'rotate(16deg)',
                    '-webkit-transform':'rotate(16deg)',
                    '-o-transform':'rotate(16deg)',
                    '-ms-transform':'rotate(16deg)',
                    'transform':'rotate(16deg)'
                });
                $("#sign").attr('src','storage/oil/sign1.png');
                $("#oil").css({"width": wd165+"px", "height": hg165+"px", "top": tp15+"px", "background-position" : bgx140+"px center"});
                $("#oil").css('background-image', 'linear-gradient(to right, #c47500 0%, #c47500 3.27%, #d9a700 50%,#c47500 100%)');
                $("#oil2").css('background-image', 'linear-gradient(to right, #c47500 0%, #c47500 3.27%, #d9a700 50%,#c47500 100%)');
                $("#celsius_main").css('color', '#33567b');
                $("#celsius").text("50");
                boolback2 = false;
                let oilDesc = setTimeout(function oilDescent(){
                    $("#oil").animate({top:tp61+"px"},10000,"linear",function(){
                        clearTimeout(oilDesc);
                        boolback2 = true;
                    });
                },0);
                let timerSmokeoil = setInterval(function tickSmokeoil() {
                    $("#smoke_oil").animate({backgroundPositionY:bgy352+"px"},10000,"linear");
                    $("#smoke_oil").animate({backgroundPositionY:"0px"},0);
                },0);
                var b = 50;
                let timerCelsius = setInterval(function tickCelsius() {
                    b++;
                    $("#celsius").text(""+b+"");
                    if(b==75){
                        $("#celsius_main").css('color', '#e12518');
                        $("#sign").attr('src','storage/oil/sign2.png');
                    }
                    if(b==85){
                        $("#oil").css('background-image', 'linear-gradient(to right, #d60811 0%, #d60811 3.27%, #eb6471 50%,#d60811 100%)');
                    }
                    if(b==90){
                        $("#oil2").css('background-image', 'linear-gradient(to right, #00c404 0%, #00c404 3.27%, #0bf41d 50%,#00c404 100%)');
                        clearInterval(timerCelsius);
                    }
                },250);
                var d = 17;
                let rotate1 = setInterval(function rot1(){
                    $("#arrow").css({
                        '-moz-transform':'rotate('+d+'deg)',
                        '-webkit-transform':'rotate('+d+'deg)',
                        '-o-transform':'rotate('+d+'deg)',
                        '-ms-transform':'rotate('+d+'deg)',
                        'transform':'rotate('+d+'deg)'
                    });
                    d++;
                    if(d==68){
                        clearInterval(rotate1);
                    }
                },200);
            }
            //РАЗДЕЛ ЭКОНОМИЯ ДЕНЕГ-------------------------------------------------
            function funcBack3(){
                $("#money4").show();
                $("#money3").show();
                $("#money2").show();
                $("#money1").show();
                $("#money_car1").css({"height": hg87+"px", "right": rg885+"px", "top": tp205+"px"});
                $("#money_car2").css({"height": hg87+"px", "right": rg885+"px", "top": tp345+"px"});
                boolback3 = false;
                $("#money_info").animate({opacity:0},0);
                $("#money_car1").animate({right:rg350+"px"},4920,"linear");
                $("#money_car2").animate({right:rg240+"px"},6000,"linear",function moneyInfo(){
                    $("#money_info").animate({opacity:1},2000,function(){
                        boolback3 = true;
                    });
                });
                var money = 0;
                let money_drop = setInterval(function tickMoney(){
                    money++;
                    $("#money"+money).hide();
                    if(money==4){
                        clearInterval(money_drop);
                    }
                },1100);
            }
            //РАЗДЕЛ МОЩНОСТЬ-------------------------------------------------------
            function funcBack4(){
                $("#engine_car1").css({"height": hg87+"px", "right": rg990+"px", "top": tp215+"px"});
                $("#engine_car2").css({"height": hg87+"px", "right": rg990+"px", "top": tp350+"px"});
                $("#red").show();
                $("#yellow").show();
                boolback4 = false;
                $("#engine_info").animate({opacity:0},0);
                let traffic1 = setTimeout(function trafficRed() {
                    $("#red").hide();
                    let traffic2 = setTimeout(function trafficYellow() {
                        $("#yellow").hide();
                        let traffic3 = setTimeout(function trafficGreen() {
                            $("#engine_car1").animate({right:rg85+"px"},4600);
                            $("#engine_car2").animate({right:rg85+"px"},4000,function moneyInfo(){
                                $("#engine_info").animate({opacity:1},2000,function(){
                                    boolback4 = true;
                                });
                            });
                        }, 0);
                    }, 1000);
                }, 1000);
            }
            //РАЗДЕЛ ШУМ И ВИБРАЦИЯ-------------------------------------------------
            function funcBack5(){
                boolback5 = false;
                $("#vibr1").animate({opacity:0},0);
                $("#vibr2").animate({opacity:0},0);
                $("#vibr3").animate({opacity:0},0);
                $("#vibr4").animate({opacity:0},0);
                $("#vibr5").animate({opacity:0},0);
                $("#vibr6").animate({opacity:0},0);
                $("#vibr7").animate({opacity:0},0);
                var dEng = -2;
                var dEng2 = -0.3;
                let vibrEngine = setInterval(function vibrEng() {
                    $("#engine1").css({
                        '-moz-transform':'rotate('+dEng+'deg)',
                        '-webkit-transform':'rotate('+dEng+'deg)',
                        '-o-transform':'rotate('+dEng+'deg)',
                        '-ms-transform':'rotate('+dEng+'deg)',
                        'transform':'rotate('+dEng+'deg)'
                    });
                    if(dEng==-2){
                        dEng = 2;
                    }
                    else {
                        dEng = -2;
                    }
                    $("#engine2").css({
                        '-moz-transform':'rotate('+dEng2+'deg)',
                        '-webkit-transform':'rotate('+dEng2+'deg)',
                        '-o-transform':'rotate('+dEng2+'deg)',
                        '-ms-transform':'rotate('+dEng2+'deg)',
                        'transform':'rotate('+dEng2+'deg)'
                    });
                    if(dEng2 == -0.3){
                        dEng2 = 0.3;
                    }
                    else {
                        dEng2 = -0.3;
                    }
                },100);
                let timerSound = setInterval(function tickSound() {
                    $("#vibr1").animate({opacity:1},0);
                    $("#vibr1").animate({left:lf155+"px", top:tp395+"px", opacity:0},1100);
                    $("#vibr1").animate({left:lf165+"px", top:tp400+"px"},0);
                    $("#vibr2").animate({opacity:1},0);
                    $("#vibr2").animate({left:lf190+"px", top:tp325+"px", opacity:0},1100);
                    $("#vibr2").animate({left:lf200+"px", top:tp330+"px"},0);
                    $("#vibr3").animate({opacity:1},0);
                    $("#vibr3").animate({left:lf250+"px", top:tp245+"px", opacity:0},1100);
                    $("#vibr3").animate({left:lf260+"px", top:tp255+"px"},0);
                    $("#vibr4").animate({opacity:1},0);
                    $("#vibr4").animate({left:lf335+"px", top:tp205+"px", opacity:0},1100);
                    $("#vibr4").animate({left:lf335+"px", top:tp220+"px"},0);
                    $("#vibr5").animate({opacity:1},0);
                    $("#vibr5").animate({left:lf430+"px", top:tp225+"px", opacity:0},1100);
                    $("#vibr5").animate({left:lf420+"px", top:tp235+"px"},0);
                    $("#vibr6").animate({opacity:1},0);
                    $("#vibr6").animate({left:lf470+"px", top:tp290+"px", opacity:0},1100);
                    $("#vibr6").animate({left:lf460+"px", top:tp295+"px"},0);
                    $("#vibr7").animate({opacity:1},0);
                    $("#vibr7").animate({left:lf450+"px", top:tp420+"px", opacity:0},1100);
                    $("#vibr7").animate({left:lf440+"px", top:tp420+"px"},0);
                }, 2000);
                var boolEqua = true;
                let timerEqua = setInterval(function tickEqua(){
                    boolEqua = !boolEqua;
                    $("#equa1").animate({opacity:0},50);
                    $("#equa1").animate({opacity:1},50);
                    $("#equa1").animate({opacity:0},50);
                    $("#equa1").animate({opacity:0},500);
                    $("#equa1").animate({opacity:1},50);
                    $("#equa1").animate({opacity:0},50);
                    $("#equa1").animate({opacity:1},50);
                    $("#equa1").animate({opacity:1},500);
                    $("#equa1").animate({opacity:0},50);
                    if(boolEqua){
                        $("#equa1").animate({opacity:1},50);
                    }
                },2000);
            }
            //РАЗДЕЛ ТАЙМЕР И КАРДИО------------------------------------------------
            function funcBack6(){
                $("#n6").empty();
                $("#n5").empty();
                $("#n4").empty();
                $("#n3").empty();
                $("#n2").empty();
                $("#n1").empty();
                $("#n6").append("0");
                $("#n5").append("0");
                $("#n4").append("0");
                $("#n3").append("0");
                $("#n2").append("0");
                $("#n1").append("0");
                $("#time_arrow").css({
                    '-moz-transform':'rotate(-31deg)',
                    '-webkit-transform':'rotate(-31deg)',
                    '-o-transform':'rotate(-31deg)',
                    '-ms-transform':'rotate(-31deg)',
                    'transform':'rotate(-31deg)'
                });
                $("#heart1").show();
                $("#heart1_2").hide();
                $("#cardio_img").animate({height:hg115+"px", top:tp340+"px"},0);
                $("#cardio_img").attr('src','storage/time/cardio.png');
                $("#cardio1").show();
                $("#cardio2").show();
                $("#attention").hide();
                $("#time_info").animate({opacity:0},0);
                boolback6 = false;
                var d2 = -30;
                let rotate2 = setInterval(function rot2(){
                    $("#time_arrow").css({
                        '-moz-transform':'rotate('+d2+'deg)',
                        '-webkit-transform':'rotate('+d2+'deg)',
                        '-o-transform':'rotate('+d2+'deg)',
                        '-ms-transform':'rotate('+d2+'deg)',
                        'transform':'rotate('+d2+'deg)'
                    });
                    d2++;
                    if(d2==90){
                        clearInterval(rotate2);
                    }
                },10);
                let timerCardio = setInterval(function tickCardio() {
                    $("#cardio1").animate({left:lf514+"px",width:"0"},1000);
                    $("#cardio1").animate({left:lf170+"px"},0);
                    $("#cardio1").animate({width:wd344+"px"},500);
                    $("#heart1").animate({height:hg200+"px"},200);
                    $("#heart1").animate({height:hg190+"px"},300);
                    $("#heart1").animate({height:hg200+"px"},200);
                    $("#heart1").animate({height:hg190+"px"},300);
                }, 2000);
                let timerCardio2 = setInterval(function tickCardio2() {
                    $("#cardio2").animate({left:lf10845+"px",width:"0"},1000);
                    $("#cardio2").animate({left:lf740+"px"},0);
                    $("#cardio2").animate({width:wd344+"px"},500);
                    $("#heart2").animate({height:hg200+"px"},200);
                    $("#heart2").animate({height:hg190+"px"},300);
                    $("#heart2").animate({height:hg200+"px"},200);
                    $("#heart2").animate({height:hg190+"px"},300);
                }, 2000);
                let attention = setInterval(function att(){
                    $("#attention").animate({opacity:1},300);
                    $("#attention").animate({opacity:0.6},300);
                },500);
                var n6 = 0;var n5 = 0;var n4 = 0;var n3 = 0;var n2 = 0;var n1 = 0;
                $("#time_info").animate({opacity:1},0);
                $("#attention").hide();
                $("#heart1_2").hide();
                let point0 = setTimeout(function (){
                    $("#time_info").animate({opacity:0},0);
                    let countTimer = setInterval(function count(){
                        if(n1<6){n1++} else{n1=0}
                        if(n2<7){n2++} else{n2=0}
                        if(n3<8){n3++} else{n3=0}
                        if(n4<10){n4++}
                        if(n4==10){n5++; n4=0;}
                        if(n5==10){n6++; n5=0;}
                        $("#n6").empty();
                        $("#n5").empty();
                        $("#n4").empty();
                        $("#n3").empty();
                        $("#n2").empty();
                        $("#n1").empty();
                        $("#n6").append(n6);
                        $("#n5").append(n5);
                        $("#n4").append(n4);
                        if(n6!=6){
                            $("#n1").append(n1);
                            $("#n2").append(n2);
                            $("#n3").append(n3);}
                        else {
                            $("#n1").append("0");
                            $("#n2").append("0");
                            $("#n3").append("0");}
                        if(n6==1 && n5==5){
                            $("#n3").empty();
                            $("#n2").empty();
                            $("#n1").empty();
                            $("#n1").append("0");
                            $("#n2").append("0");
                            $("#n3").append("0");
                            $("#heart1").hide();
                            $("#heart1_2").show();
                            $("#time_info").animate({opacity:1},0);
                            $("#cardio_img").animate({height:hg2+"px", top:tp413+"px"},0);
                            $("#cardio_img").attr('src','storage/time/cardio2.png');
                            $("#cardio1").hide();
                            $("#attention").show();
                            clearInterval(countTimer);
                            let point150 = setTimeout(function(){
                                $("#heart1").show();
                                $("#heart1_2").hide();
                                $("#cardio_img").animate({height:hg115+"px", top:tp340+"px"},0);
                                $("#cardio_img").attr('src','storage/time/cardio.png');
                                $("#cardio1").show();
                                $("#attention").hide();
                                $("#time_info").animate({opacity:0},0);
                                let countTimer3 = setInterval(function(){
                                    if(n1<6){n1++} else{n1=0}
                                    if(n2<7){n2++} else{n2=0}
                                    if(n3<8){n3++} else{n3=0}
                                    if(n4<10){n4++}
                                    if(n4==10){n5++; n4=0;}
                                    if(n5==10){n6++; n5=0;}
                                    $("#n6").empty();
                                    $("#n5").empty();
                                    $("#n4").empty();
                                    $("#n3").empty();
                                    $("#n2").empty();
                                    $("#n1").empty();
                                    $("#n6").append(n6);
                                    $("#n5").append(n5);
                                    $("#n4").append(n4);
                                    if(n6!=6){
                                        $("#n1").append(n1);
                                        $("#n2").append(n2);
                                        $("#n3").append(n3);}
                                    else {
                                        $("#n1").append("0");
                                        $("#n2").append("0");
                                        $("#n3").append("0");}
                                    if(n6==3 && n5==0){
                                        $("#n3").empty();
                                        $("#n2").empty();
                                        $("#n1").empty();
                                        $("#n1").append("0");
                                        $("#n2").append("0");
                                        $("#n3").append("0");
                                        $("#heart1").hide();
                                        $("#heart1_2").show();
                                        $("#time_info").animate({opacity:1},0);
                                        $("#cardio_img").animate({height:hg2+"px", top:tp413+"px"},0);
                                        $("#cardio_img").attr('src','storage/time/cardio2.png');
                                        $("#cardio1").hide();
                                        $("#attention").show();
                                        $("#time_info").animate({opacity:1},0);
                                        clearInterval(countTimer3);
                                        let point300 = setTimeout(function(){
                                            $("#heart1").show();
                                            $("#heart1_2").hide();
                                            $("#cardio_img").animate({height:hg115+"px", top:tp340+"px"},0);
                                            $("#cardio_img").attr('src','storage/time/cardio.png');
                                            $("#cardio1").show();
                                            $("#attention").hide();
                                            $("#time_info").animate({opacity:0},0);
                                            let countTimer4 = setInterval(function(){
                                                if(n1<6){n1++} else{n1=0}
                                                if(n2<7){n2++} else{n2=0}
                                                if(n3<8){n3++} else{n3=0}
                                                if(n4<10){n4++}
                                                if(n4==10){n5++; n4=0;}
                                                if(n5==10){n6++; n5=0;}
                                                $("#n6").empty();
                                                $("#n5").empty();
                                                $("#n4").empty();
                                                $("#n3").empty();
                                                $("#n2").empty();
                                                $("#n1").empty();
                                                $("#n6").append(n6);
                                                $("#n5").append(n5);
                                                $("#n4").append(n4);
                                                if(n6!=6){
                                                    $("#n1").append(n1);
                                                    $("#n2").append(n2);
                                                    $("#n3").append(n3);}
                                                else {
                                                    $("#n1").append("0");
                                                    $("#n2").append("0");
                                                    $("#n3").append("0");}
                                                if(n6==4 && n5==5){
                                                    $("#n3").empty();
                                                    $("#n2").empty();
                                                    $("#n1").empty();
                                                    $("#n1").append("0");
                                                    $("#n2").append("0");
                                                    $("#n3").append("0");
                                                    $("#heart1").hide();
                                                    $("#heart1_2").show();
                                                    $("#time_info").animate({opacity:1},0);
                                                    $("#cardio_img").animate({height:hg2+"px", top:tp413+"px"},0);
                                                    $("#cardio_img").attr('src','storage/time/cardio2.png');
                                                    $("#cardio1").hide();
                                                    $("#attention").show();
                                                    $("#time_info").animate({opacity:1},0);
                                                    clearInterval(countTimer4);
                                                    let point450 = setTimeout(function(){
                                                        $("#heart1").show();
                                                        $("#heart1_2").hide();
                                                        $("#cardio_img").animate({height:hg115+"px", top:tp340+"px"},0);
                                                        $("#cardio_img").attr('src','storage/time/cardio.png');
                                                        $("#cardio1").show();
                                                        $("#attention").hide();
                                                        $("#time_info").animate({opacity:0},0);
                                                        let countTimer5 = setInterval(function(){
                                                            if(n1<6){n1++} else{n1=0}
                                                            if(n2<7){n2++} else{n2=0}
                                                            if(n3<8){n3++} else{n3=0}
                                                            if(n4<10){n4++}
                                                            if(n4==10){n5++; n4=0;}
                                                            if(n5==10){n6++; n5=0;}
                                                            $("#n6").empty();
                                                            $("#n5").empty();
                                                            $("#n4").empty();
                                                            $("#n3").empty();
                                                            $("#n2").empty();
                                                            $("#n1").empty();
                                                            $("#n6").append(n6);
                                                            $("#n5").append(n5);
                                                            $("#n4").append(n4);
                                                            if(n6!=6){
                                                                $("#n1").append(n1);
                                                                $("#n2").append(n2);
                                                                $("#n3").append(n3);}
                                                            else {
                                                                $("#n1").append("0");
                                                                $("#n2").append("0");
                                                                $("#n3").append("0");}
                                                            if(n6==6){
                                                                $("#heart1").hide();
                                                                $("#heart1_2").show();
                                                                $("#time_info").animate({opacity:1},0);
                                                                $("#cardio_img").animate({height:hg2+"px", top:tp413+"px"},0);
                                                                $("#cardio_img").attr('src','storage/time/cardio2.png');
                                                                $("#cardio1").hide();
                                                                $("#attention").show();
                                                                $("#time_info").animate({opacity:1},0);
                                                                clearInterval(countTimer5);
                                                                let pointend = setTimeout(function(){
                                                                    $("#cardio2").hide();
                                                                    clearInterval(attention);
                                                                    clearInterval(timerCardio);
                                                                    clearInterval(timerCardio2);
                                                                    boolback6 = true;
                                                                },4000);
                                                            }
                                                        },20)
                                                    },2000)
                                                }
                                            },20)
                                        },2000)
                                    }
                                },20)
                            },2000)
                        }
                    },20);
                },2000);
            }
            //РАЗДЕЛ КОМПРЕССИЯ-----------------------------------------------------
            function funcBack7(){
                $("#comp_arrow").css({
                    '-moz-transform':'rotate(-16deg)',
                    '-webkit-transform':'rotate(-16deg)',
                    '-o-transform':'rotate(-16deg)',
                    '-ms-transform':'rotate(-16deg)',
                    'transform':'rotate(-16deg)'
                });
                $("#comp_arrow1").css({
                    '-moz-transform':'rotate(15deg)',
                    '-webkit-transform':'rotate(15deg)',
                    '-o-transform':'rotate(15deg)',
                    '-ms-transform':'rotate(15deg)',
                    'transform':'rotate(15deg)'
                });
                $("#comp_arrow2").css({
                    '-moz-transform':'rotate(15deg)',
                    '-webkit-transform':'rotate(15deg)',
                    '-o-transform':'rotate(15deg)',
                    '-ms-transform':'rotate(15deg)',
                    'transform':'rotate(15deg)'
                });
                boolback7 = false;
                var d3 = -30;
                let rotate3 = setInterval(function rot3(){
                    $("#comp_arrow").css({
                        '-moz-transform':'rotate('+d3+'deg)',
                        '-webkit-transform':'rotate('+d3+'deg)',
                        '-o-transform':'rotate('+d3+'deg)',
                        '-ms-transform':'rotate('+d3+'deg)',
                        'transform':'rotate('+d3+'deg)'
                    });
                    d3++;
                    if(d3==73){
                        clearInterval(rotate3);
                        boolback7 = true;
                    }
                },80);
                var d4 = 16;
                var boolarrow = true;
                let rotate4 = setInterval(function rot4(){
                    if(boolarrow){
                        $("#comp_arrow1").css({
                            '-moz-transform':'rotate('+d4+'deg)',
                            '-webkit-transform':'rotate('+d4+'deg)',
                            '-o-transform':'rotate('+d4+'deg)',
                            '-ms-transform':'rotate('+d4+'deg)',
                            'transform':'rotate('+d4+'deg)'
                        });
                        d4++;
                        if(d4==96){
                            boolarrow = false;
                        }
                    }
                    if(!boolarrow){
                        let rotate4_2 = setInterval(function rot4_2(){
                            $("#comp_arrow1").css({
                                '-moz-transform':'rotate('+d4+'deg)',
                                '-webkit-transform':'rotate('+d4+'deg)',
                                '-o-transform':'rotate('+d4+'deg)',
                                '-ms-transform':'rotate('+d4+'deg)',
                                'transform':'rotate('+d4+'deg)'
                            });
                            if(d4==96){
                                d4 = 95;
                            }
                            else {
                                d4 = 96;
                            }
                            if(boolback7){
                                clearInterval(rotate4_2);
                            }
                        },50);
                        clearInterval(rotate4);
                    }
                },50);
                var d5 = 16;
                var boolarrow2 = true;
                let rotate5 = setInterval(function rot5(){
                    if(boolarrow2){
                        $("#comp_arrow2").css({
                            '-moz-transform':'rotate('+d5+'deg)',
                            '-webkit-transform':'rotate('+d5+'deg)',
                            '-o-transform':'rotate('+d5+'deg)',
                            '-ms-transform':'rotate('+d5+'deg)',
                            'transform':'rotate('+d5+'deg)'
                        });
                        d5++;
                        if(d5==150){
                            boolarrow2 = false;
                        }
                    }
                    if(!boolarrow2){
                        let rotate5_2 = setInterval(function rot5_2(){
                            $("#comp_arrow2").css({
                                '-moz-transform':'rotate('+d5+'deg)',
                                '-webkit-transform':'rotate('+d5+'deg)',
                                '-o-transform':'rotate('+d5+'deg)',
                                '-ms-transform':'rotate('+d5+'deg)',
                                'transform':'rotate('+d5+'deg)'
                            });
                            if(d5==150){
                                d5 = 149;
                            }
                            else {
                                d5 = 150;
                            }
                            if(boolback7){
                                clearInterval(rotate5_2);
                            }
                        },50);
                        clearInterval(rotate5);
                    }
                },50);
                let mechanism = setInterval (function mechanismGo(){
                    $("#mech1").animate({top:tp462+"px"},500);
                    $("#mech1").animate({top:tp394+"px"},500);
                    $("#mech2").animate({top:tp394+"px"},500);
                    $("#mech2").animate({top:tp462+"px"},500);
                    $("#mech3").animate({top:tp394+"px"},500);
                    $("#mech3").animate({top:tp462+"px"},500);
                    $("#mech4").animate({top:tp462+"px"},500);
                    $("#mech4").animate({top:tp394+"px"},500);
                    $("#mech5").animate({top:tp462+"px"},500);
                    $("#mech5").animate({top:tp394+"px"},500);
                    $("#mech6").animate({top:tp394+"px"},500);
                    $("#mech6").animate({top:tp462+"px"},500);
                    $("#mech7").animate({top:tp394+"px"},500);
                    $("#mech7").animate({top:tp462+"px"},500);
                    $("#mech8").animate({top:tp462+"px"},500);
                    $("#mech8").animate({top:tp394+"px"},500);
                });
            }
        });
    </script>
@endsection

