<head>
<title>NEWSPORTAL</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="assets/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="assets/css/animate.css">
<link rel="stylesheet" type="text/css" href="assets/css/font.css">
<link rel="stylesheet" type="text/css" href="assets/css/li-scroller.css">
<link rel="stylesheet" type="text/css" href="assets/css/slick.css">
<link rel="stylesheet" type="text/css" href="assets/css/jquery.fancybox.css">
<link rel="stylesheet" type="text/css" href="assets/css/theme.css">
<link rel="stylesheet" type="text/css" href="assets/css/style.css">
<!--[if lt IE 9]>
<script src="assets/js/html5shiv.min.js"></script>
<script src="assets/js/respond.min.js"></script>
<![endif]--> 
</head>

<a class="scrollToTop" href="#"><i class="fa fa-angle-up"></i></a>
  <header id="header">
    <div class="row">
      <div class="col-lg-12 col-md-12 col-sm-12">
        <div class="header_top">
         
          <div class="header_top_right">
            <p> <span class="time_date">
        <?php 
        $timezone = "Asia/Kathmandu";
        if(function_exists('date_default_timezone_set')) date_default_timezone_set($timezone);
        echo date('l F j, Y');?>  &nbsp;| &nbsp; <script type='text/javascript'>var __ndq = __ndq || {format:'W, M D, Y',color:'#555555'};var __sn = document.getElementsByTagName('script'); __sn = __sn[__sn.length-1];(function() {var __nd = document.createElement('script'); __nd.type = 'text/javascript'; __nd.async = true; __nd.src = ('http://') + 'goodies.softnep.com/nepali_date/nep.date.js'; __sn.parentNode.insertBefore(__nd, __sn);})();</script>&nbsp;|&nbsp; <span id="sn_nepalitime"></span></span>
        <script type="text/javascript">
        var currenttime = "<?php echo date('M-d,Y h:i:s');?>"; 
        var montharray = new Array("January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December")
        var numbers = Array("&#2406;", "&#2407;", "&#2408;", "&#2409;", "&#2410;", "&#2411;", "&#2412;", "&#2413;", "&#2414;", "&#2415;");
        var serverdate = new Date(currenttime);
        function padlength(what) {
            var output = (what.toString().length == 1) ? "0" + what : what
            return output
        }
        function displaytime() {
            //alert(currenttime);
            serverdate.setSeconds(serverdate.getSeconds() + 1)
            var datestring = montharray[serverdate.getMonth()] + " " + padlength(serverdate.getDate()) + ", " + serverdate.getFullYear()


            hr=padlength(serverdate.getHours());
            mi=padlength(serverdate.getMinutes()) ;
            se=padlength(serverdate.getSeconds());
            dd="PM";
               if (hr >= 12) {
                hr = hr-12;
                dd = "AM";
            }
            if (hr == 0) {
                hr = 12;
            }
            var timestring = hr + ":" + mi + ":" + se +" "+ dd;
                var arr = timestring.split("");
                for (i = 0; i < (arr.length-3); i++) {
                    if (arr[i] != ":") {
                        arr[i] = numbers[arr[i]];
                    } 
                }
                timestring = arr.join("");
        /*        timestring = timestring.replace("AM","gu");       
         timestring = timestring.replace("PM","gu");*/
                document.getElementById("sn_nepalitime").innerHTML = " " + timestring;

            setTimeout('displaytime()',1000);
        }
        displaytime();
        </script></p>
          </div>
        </div>
      </div>
      <div class="col-lg-12 col-md-12 col-sm-12">
        <div class="header_bottom center">
          <div class="logo_area"><a href="index.php" class="logo"><img src="images/logo.jpg" alt=""></a></div>
          <!-- <div class="add_banner"><a href="#"><img src="images/addbanner_728x90_V1.jpg" alt=""></a></div> -->
        </div>
      </div>
    </div>
  </header>
  <section id="navArea">
    <nav class="navbar navbar-inverse" role="navigation">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
      </div>
      <div id="navbar" class="navbar-collapse collapse">
        <ul class="nav navbar-nav main_nav">
          <li class="active"><a href="index.php"><span class="fa fa-home desktop-home"></span><span class="mobile-show">गृहपृष्ठ</span></a></li>
          <li><a href="#">अर्थ / वाणिज्य</a></li>
       
         
          <li><a href="#">खेलकुद</a></li>
          <li><a href="#">मनोरञ्जन</a></li>
          <li><a href="#">साहित्य/विविध</a></li>
              <li><a href="#">विज्ञान र प्रविधि</a></li>
              <li><a href="#">स्वास्थ्य</a></li>
              <li><a href="#">अन्तर्राष्ट्रिय समाचार
</a></li>
          
        </ul>
      </div>
    </nav>
  </section>
  <section id="newsSection">
    <div class="row">
      <div class="col-lg-12 col-md-12">
        <div class="latest_newsarea"> <span>भर्खरको समाचार
</span>
          <ul id="ticker01" class="news_sticker">
            <li><a href="#"><img src="images/news.jpg" alt="">नेपालमा कोरोना संक्रमितको संख्या ५० हजार नाघ्यो</a></li>
            <li><a href="#"><img src="images/news.jpg" alt="">उपत्यकामा थप ५ सय ७२ जनामा कोरोना पुष्टि</a></li>
            <li><a href="#"><img src="images/news.jpg" alt="">वामदेवको खाल्डो : प्रतिक्रियावादी पुर्ने कि आफ्नै राजनीति ?</a></li>
            <li><a href="#"><img src="images/news.jpg" alt="">नेपाल-पाकिस्तान सम्बन्धमा भारत चुनौती बनेर आयो : नेकपाका प्रमुख सचेतक गुरुङ</a></li>
            
          </ul>
          <div class="social_area">
            <ul class="social_nav">
              <li class="facebook"><a href="#"></a></li>
              <li class="twitter"><a href="#"></a></li>
              <li class="flickr"><a href="#"></a></li>
              <li class="pinterest"><a href="#"></a></li>
              <li class="googleplus"><a href="#"></a></li>
              <li class="vimeo"><a href="#"></a></li>
              <li class="youtube"><a href="#"></a></li>
              <li class="mail"><a href="#"></a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </section>