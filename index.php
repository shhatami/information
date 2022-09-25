<!DOCTYPE html>
<!--توضیحات صفحه  جزییات تور که صفحه اصلی اضافه شد اینجاست-->
<html lang="fa" lang="en">
<title>اوگوفای</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<style>
body,h1,h2,h3,h4,h5,h6 {font-family: "Raleway", Arial, Helvetica, sans-serif}
.mySlides {display: none;
padding:;
}
</style>


<body class="w3-content w3-border-left w3-border-right">

<!-- Sidebar/menu -->
<nav class="w3-sidebar w3-light-grey w3-collapse w3-top" style="z-index:3;width:260px" id="mySidebar">
    
  <div class="w3-container w3-display-container w3-padding-16">
      
    <i onclick="w3_close()" class="fa fa-remove w3-hide-large w3-button w3-transparent w3-display-topright"></i>
    <h3 class="w3-right-align">مشخصات تور درخواستی خود را وارد نمایید</h3>
    <h3></h3>
    <h6 class="w3-right-align">هر روز هفته</h6>
    <hr>
    
    <form action="/action_page.php" target="_blank" class="w3-right-align">
      <p><label><i class="fa fa-calendar-check-o"></i> تاریخ رفت</label></p>
      <input class="w3-input w3-border" type="text" placeholder="DD MM YYYY" name="" required>          
      <p><label><i class="fa fa-calendar-o"></i> تاریخ برگشت</label></p>
      <input class="w3-input w3-border" type="text" placeholder="DD MM YYYY" name="CheckOut" required>
      <p><label><i class=""></i>مقصد یا تور مورد علاقه</label></p>
      <input class="w3-input w3-border" type="text"  name="distination" required>
      <p><label><i class="fa fa-male"></i> بزرگسالان</label></p>
      <input class="w3-input w3-border" type="number" value="1" name="Adults" min="1" max="3">              
      <p><label><i class="fa fa-child"></i> کودکان(2-11)</label></p>
      <input class="w3-input w3-border" type="number" value="0" name="Kids" min="0" max="6">
      <p><button class="w3-button w3-block w3-green w3-right-align" type="submit"><i class="fa fa-search w3-margin-right"></i> جستجو </button></p>
    </form>
    
  </div>
    
    
  <div class="w3-bar-block">

    
    <a href="javascript:void(0)" class="w3-bar-item w3-button w3-padding-16" onclick="document.getElementById('subscribe').style.display='block'"><i class="fa fa-rss"></i> عضویت در خبرنامه</a>
    
    <a href="#contact" class="w3-bar-item w3-button w3-padding-16"><i class="fa fa-envelope"></i> ارتباط</a>
  </div>
    
    
    
</nav>

<!-- Top menu on small screens -->
<header class="w3-bar w3-top w3-hide-large w3-black w3-xlarge">
  <span class="w3-bar-item"></span>
  <a href="javascript:void(0)" class="w3-right w3-bar-item w3-button" onclick="w3_open()"><i class="fa fa-bars"></i></a>
</header>




<!-- Overlay effect when opening sidebar on small screens -->
<div class="w3-overlay w3-hide-large" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>

<!-- !PAGE CONTENT! -->
<div class="w3-main w3-white" style="margin-left:260px">

  <!-- Push down content on small screens -->
  <div class="w3-hide-large" style="margin-top:80px"></div>

  
  <!-- Slideshow Header -->
  <div class="w3-container" id="apartment">
    <h2 class="w3-text-green"></h2>
    <div class="w3-display-container mySlides">
    <img src="#.jpg" style="width:50%; margin-bottom:-6px">
      <div class="w3-display-bottomleft w3-container w3-black">
        <p></p>
      </div>
    </div>
    <div class="w3-display-container mySlides">
    <img src="#.jpg" style="width:50%;margin-bottom:-6px">
      <div class="w3-display-bottomleft w3-container w3-black">
        <p>مسیر</p>
      </div>
    </div>
    <div class="w3-display-container mySlides">
    <img src="#.jpg" style="width:50%;margin-bottom:-6px">
      <div class="w3-display-bottomleft w3-container w3-black">
        <p>اقامتگاه</p>
      </div>
    </div>
    <div class="w3-display-container mySlides">
    <img src="#.jpg" style="width:50%;margin-bottom:-6px">
      <div class="w3-display-bottomleft w3-container w3-black">
        <p>جاهای دیدنی</p>
      </div>
    </div>
  </div>
  <div class="w3-row-padding w3-section">
    <div class="w3-col s3">
      <img class="demo w3-opacity w3-hover-opacity-off" src="#.jpg" style="width:100%;cursor:pointer" onclick="currentDiv(1)" title="تور">
    </div>
    <div class="w3-col s3">
      <img class="demo w3-opacity w3-hover-opacity-off" src="#.jpg" style="width:100%;cursor:pointer" onclick="currentDiv(2)" title="مسیر">
    </div>
    <div class="w3-col s3">
      <img class="demo w3-opacity w3-hover-opacity-off" src="#.jpg" style="width:100%;cursor:pointer" onclick="currentDiv(3)" title="اقامتگاه">
    </div>
    <div class="w3-col s3">
      <img class="demo w3-opacity w3-hover-opacity-off" src="#.jpg" style="width:100%;cursor:pointer" onclick="currentDiv(4)" title="جاهای دیدنی">
    </div>
  </div>

  <div class="w3-container">
    <h4><strong>شرایط تور</strong></h4>
    <div class="w3-row w3-large">
      <div class="w3-col s6">
        <p><i class="fa fa-fw fa-male"></i> حداکثر نفر در سفر: 4</p>
        <p><i class="fa fa-remove"></i> درصورت کنسلی تا 1 روز قبل از سفر: برگشت 70%</p>
        <p><i class="fa fa-remove"></i> درصورت کنسلی تا8 ساعت قب از سفر: برگشت 30%</p>
        <p><i class="fa fa-remove"></i> درصورت کنسلی تا2 ساعت قب از سفر: برگشت 10%</p>
      </div>
      <div class="w3-col s6">
        <p><i class="fa fa-fw fa-clock-o"></i>  روز و ساعت حرکت : .....</p>
        <p><i class="fa fa-fw fa-clock-o"></i> روز و ساعت برگشت : .....</p>
        <p><i class="fa fa-fw fa-home"></i>اقامتگاه ...</p>
      </div>
        <div class="w3-row w3-large">
        <div class="w3-col s6">
        <p><i class="fa fa-fw fa-cutlery"></i> صبحانه...</p>
        <p><i class="fa fa-fw fa-cutlery"></i> نهار...</p>
        <p><i class="fa fa-fw fa-cutlery"></i> عصرانه...</p>
        <p><i class="fa fa-fw fa-cutlery"></i> شام...</p>
        
      </div>
        </div>
    </div>
    <hr>
    
    <h4><strong>سایر توضیحات</strong></h4>
    <div class="w3-row w3-large">
      <div class="w3-col s6">
        <p><i class="fa fa-fw fa-wifi"></i>دسترسی به اینترنت...</p>
        <p><i class="fa"></i>نوع وسیله حرکت : ....</p>
      </div>
      <div class="w3-col s6">
        <p><i class="fa fa-fw fa-thermometer"></i>نوع آب و هوا  ...</p>
        <p><i class="fa fa-fw fa-wheelchair"></i>درصورت نداشتن همراه جهت هماهنگی اطلاع داده شود</p>
      </div>
    </div>
    <hr>
    
    <h4><strong>درباره تور بدانید</strong></h4>
    <p>سایر توضیحات ... </p>
    <p><i></i></p>
    <hr>
    
    <h4><strong>آژانس هایی که این تور را ارائه می دهند</strong></h4>
    <p>قبل از خرید، هماهنگی لازم را با شماره آژانس مورد نظر انجام دهید و </p>
    <p><i></i></p>
    <hr>
    
    <h4><strong>خبرنامه</strong></h4>
    <p>اگر تمایل دارید روزانه خبرهای مربوط به سفر به جاهای دیدنی را دریافت کنید میتوانید عضو خبرنامه اوگوفای شود. کافیست ایمیل خود را درقسمت عضویت در خبرنامه وارد نمایید</p>
    <p>با عضو شدن در خبرنامه هم می توانید از آگهی ها به صورت آنلاین مطلع شوید و هم از تخفیف های ما آگاه شوید.</p>
    <p><button class="w3-button w3-green w3-third" onclick="document.getElementById('subscribe').style.display='block'">عضویت در خبرنامه</button></p>
  </div>
  <hr>
  
  <!-- Contact -->
  <div class="w3-container" id="">
    <h2>ارتباط</h2>
    <i class="fa fa-map-marker" style="width:30px"></i> IRAN,TEHRAN <br>
    <i class="fa fa-envelope" style="width:30px"> </i> Email: help@ogofy.com <br>
    <p>سوال ها? تنها راه ارتباطی شما با ما: میتونی بپرسی:</p>
    <form action="/action_page.php" target="_blank">
      <p><input class="w3-input w3-border" type="text" placeholder="نام" required name="Name"></p>
      <p><input class="w3-input w3-border" type="text" placeholder="ایمیل" required name="Email"></p>
      <p><input class="w3-input w3-border" type="text" placeholder="پیام" required name="Message"></p>
    <button type="submit" class="w3-button w3-green w3-third">ارسال پیام</button>
    </form>
  </div>
  
 

<!-- End page content -->
</div>

<!-- Subscribe Modal -->
<div id="subscribe" class="w3-modal">
  <div class="w3-modal-content w3-animate-zoom w3-padding-large">
    <div class="w3-container w3-white w3-center">
      <i onclick="document.getElementById('subscribe').style.display='none'" class="fa fa-remove w3-button w3-xlarge w3-right w3-transparent"></i>
      <h2 class="w3-wide">SUBSCRIBE</h2>
      <p>Join our mailing list to receive updates on available dates and special offers.</p>
      <p><input class="w3-input w3-border" type="text" placeholder="Enter e-mail"></p>
      <button type="button" class="w3-button w3-padding-large w3-green w3-margin-bottom" onclick="document.getElementById('subscribe').style.display='none'">Subscribe</button>
    </div>
  </div>
</div>

<script>
// Script to open and close sidebar when on tablets and phones
function w3_open() {
  document.getElementById("mySidebar").style.display = "block";
  document.getElementById("myOverlay").style.display = "block";
}
 
function w3_close() {
  document.getElementById("mySidebar").style.display = "none";
  document.getElementById("myOverlay").style.display = "none";
}

// Slideshow Apartment Images
var slideIndex = 1;
showDivs(slideIndex);

function plusDivs(n) {
  showDivs(slideIndex += n);
}

function currentDiv(n) {
  showDivs(slideIndex = n);
}

function showDivs(n) {
  var i;
  var x = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("demo");
  if (n > x.length) {slideIndex = 1}
  if (n < 1) {slideIndex = x.length}
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" w3-opacity-off", "");
  }
  x[slideIndex-1].style.display = "block";
  dots[slideIndex-1].className += " w3-opacity-off";
}
</script>

</body>
</html>

