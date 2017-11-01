
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Lucky Draw</title>
<!-- Syntax highlighting, ignore this -->
<!--
<link href="assets/css/bootstrap.min.css" rel="stylesheet">
-->



<link type="text/css"  href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
<link type="text/css"  href="assets/css/style1.css" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Audiowide" rel="stylesheet">
<!--
<script type="text/javascript" src="assets/js/bootstrap.js"></script>
-->
</head>
<body>

    <div id="Wrapper">
            <div class="container-fluid">
            <div class="header-space text-center">
            
                <img src="assets/img/Logo.png" alt="" class="logo">


                        
            <section class="demos">
                <div class="row">
                    <div class="text-center">                                              
                       


                            <div id="slot_box1">
                                <ul id="list">
                                    <li data-roll="1">0</li>
                                    <li data-roll="2">1</li>
                                    <li data-roll="3">2</li>
                                    <li data-roll="4">3</li>
                                    <li data-roll="5">4</li>
                                    <li data-roll="6">5</li>
                                    <li data-roll="7">6</li>
                                    <li data-roll="8">7</li> 
                                    <li data-roll="9">8</li>
                                    <li data-roll="10">9</li>                         
                                </ul>
                            </div><!-- end slot box --> 

                            <div id="slot_box2">
                                    <ul id="list">
                                    <li data-roll="1">0</li>
                                    <li data-roll="2">1</li>
                                    <li data-roll="3">2</li>
                                    <li data-roll="4">3</li>
                                    <li data-roll="5">4</li>
                                    <li data-roll="6">5</li>
                                    <li data-roll="7">6</li>
                                    <li data-roll="8">7</li> 
                                    <li data-roll="9">8</li>
                                    <li data-roll="10">9</li>                        
                                    </ul>
                                </div><!-- end slot box --> 

                                    <div id="slot_box3">
                                    <ul id="list">
                                    <li data-roll="1">0</li>
                                    <li data-roll="2">1</li>
                                    <li data-roll="3">2</li>
                                    <li data-roll="4">3</li>
                                    <li data-roll="5">4</li>
                                    <li data-roll="6">5</li>
                                    <li data-roll="7">6</li>
                                    <li data-roll="8">7</li> 
                                    <li data-roll="9">8</li>
                                    <li data-roll="10">9</li>                        
                                    </ul>
                                </div><!-- end slot box --> 

                        </div>

                    </div>
                    
                </div>   
                <div class="row">                    
                    <div class="text-center">                        
                        <p class="empty-space text-center"></p>
                        <h2 class="text-center text-congrat"></h2>
                            <h1 class="text-center" id="results"></h1>
                            <div class="text-center">           
                                <input type="button" id="playFancy" value="" class="spin-btn text-white">
                            </div>
                    </div>
                </div>         

            </section>
            </div>
                <footer id="Footer" class="clearfix is-sticky">
                    <div class="row" style="padding-top: 55px;">
                      <div class="col-md-6">                      
                        <a href="reset.php" class=" trans-btn text-white footer-btn">
                            <img src="assets/img/switch-btn-Reset.png"></img>
                        </a>
                      </div>
                      <div class="col-md-6 text-right">
                        <a href="Home.php" class=" trans-btn text-white footer-btn">
                            <img src="assets/img/switch-btn-Home.png"></img>
                        </a>
                      </div>
                    </div>
                </footer>        
        </div> 
    </div>

     <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
     <script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <script src="assets/js/jquery.easing.1.3.js" type="text/javascript" charset="utf-8"></script>
    <script src="assets/js/jquery.jSlots.js" charset="utf-8"></script>
    <script src="assets/js/jquery.jSlots.min.js" type="text/javascript" charset="utf-8"></script>

    <script type="text/javascript" charset="utf-8">

    var lastNum = "000";
    var finNum = "000";
    var finDealer;
    var maxSpd = 0; var maxSpd1 = 0; var maxSpd2 = 0; var maxSpd3 = 0;

function slotRoller(spd, selector) {
    var speed = 10; 

    $(selector).animate({ 
        marginTop: "-250px"
        }, speed + (spd * 20 + spd)/3, "easeOutSine" , function(){
            firstChild = $("li:first-child", this);
            $(this).append(firstChild);
            $(this).css({ marginTop: "0px"});
            
            if ((spd != 0)&&(spd == maxSpd)) {
                    setTimeout(function(){ 
                        $("p").removeClass('empty-space');
                        $('.text-congrat').text("Congratulation!");
                        $('#results').text(finDealer);
                    },300); 
            };
        });
}

function Slot_roll1(slotName){
    this.min = 14;
    this.max = 17;
    this.dice = function(){
        var dice = Math.floor( Math.random() * (1 + this.max - this.min) ) + this.min;

        if (lastNum == "000") {
            maxSpd1 = (Number(finNum[0])+10)-1;
            for (var i = 0; i < Number(finNum[0])+10; i++) {
                slotRoller(i, slotName);
            }
        } else {
            maxSpd1 = ((10 - Number(lastNum[0]))+Number(finNum[0])+10)-1;
            for (var i = 0; i < (10 - Number(lastNum[0]))+Number(finNum[0]); i++) {
                slotRoller(i, slotName);
            }
        }
        console.log(dice);  
    }
}

function Slot_roll2(slotName){
    this.min = 23;
    this.max = 25;
    this.dice = function(){
        var dice = Math.floor( Math.random() * (1 + this.max - this.min) ) + this.min;

        if (lastNum == "000") {
            maxSpd2 = (Number(finNum[1])+10)-1;
            for (var i = 0; i < Number(finNum[1])+10; i++) {
                slotRoller(i, slotName);
            }
        } else {
            maxSpd2 = ((10 - Number(lastNum[1]))+Number(finNum[1])+10)-1;
            for (var i = 0; i < (10 - Number(lastNum[1]))+Number(finNum[1])+10; i++) {
                slotRoller(i, slotName);
            }
        }
        console.log(dice);  
    }
}

function Slot_roll3(slotName){
    this.min = 37;
    this.max = 37;
    highRound = this.max;
    this.dice = function(){        
        var dice = Math.floor( Math.random() * (1 + this.max - this.min) ) + this.min;

        if (lastNum == "000") {
            maxSpd3 = (Number(finNum[2])+20)-1;
            maxSpd = Math.max(maxSpd1, maxSpd2, maxSpd3);
            for (var i = 0; i < Number(finNum[2])+20; i++) {
                slotRoller(i, slotName);
            }
        } else {
            maxSpd3 = ((10 - Number(lastNum[2]))+Number(finNum[2])+20)-1;
            maxSpd = Math.max(maxSpd1, maxSpd2, maxSpd3);
            for (var i = 0; i < (10 - Number(lastNum[2]))+Number(finNum[2])+20; i++) {
                slotRoller(i, slotName);
            }
        }
        lastNum = finNum;
        console.log(dice);
    }
}
 
var slot_roll1 = new Slot_roll1('#slot_box1 #list');
var slot_roll2 = new Slot_roll2('#slot_box2 #list');
var slot_roll3 = new Slot_roll3('#slot_box3 #list');

$('#playFancy').on( "click", function(){
    post();
});

function post() {
   
            $("p").addClass('empty-space');
            $('#results').text("");
            $('.text-congrat').text("");

            $.post('GetGuest.php',{},
            function(data)
            {   
                finNum = data.substring(0, 4);
                finDealer = data.substring(3);
                console.log(finDealer);
                doSlot();
            });
        }

    function doSlot() {
        if( $('#slot_box1 #list').is(':not(:animated)') ){
            slot_roll1.dice();
        }
        if( $('#slot_box2 #list').is(':not(:animated)') ){
            slot_roll2.dice();
        }
        if( $('#slot_box3 #list').is(':not(:animated)') ){
            slot_roll3.dice();
        }               
    }

    </script>

</body>
</html>
