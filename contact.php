<?php

// Server variables
  $ip = $_SERVER['REMOTE_ADDR'];
  $referer = $_SERVER['HTTP_HOST'];
  $useragent = $_SERVER['HTTP_USER_AGENT'];
  $webpage = "Contact Page";
  
?>
<html class="no-js" lang="en">
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<!-- Document Title -->
<title>LuckyBox</title>
<!-- FontsOnline -->
<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Crimson+Text:400,400italic,600,600italic,700,700italic' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Damion' rel='stylesheet' type='text/css'>

<!-- StyleSheets -->
<link rel="stylesheet" href="css/ionicons.min.css">
<link rel="stylesheet" href="css/bootstrap/bootstrap.min.css">
<link rel="stylesheet" href="css/font-awesome.min.css">
<link rel="stylesheet" href="css/main.css">
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="css/responsive.css">

<!-- COLORS -->
<link rel="stylesheet" id="color" href="css/default.css">

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-166884654-1">
</script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-166884654-1');
</script>
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-166884654-3">
</script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-166884654-3');
</script>
<!-- Start Pixel Code -->
<script>
    !function(f,e,t,u,n,s,p) {if(f.esk)return;n=f.esk=function(){n.callMethod?n.callMethod.apply(n,arguments):n.queue.push(arguments)};if(!f.___esk)f.___esk=n;n.push=n;n.loaded=!0;n.apUrl='https://dsp-ap.eskimi.com/v2/gtr';n.queue=[];s=e.createElement(t);s.async=!0;s.src=u;p=e.getElementsByTagName(t)[0];p.parentNode.insertBefore(s,p)}(window,document,'script', 'https://dsp-media.eskimi.com/assets/js/e/gtr.min.js');
    esk('init', '12592');     esk('cid', '43518');
</script>
<noscript>
    <img height="1" width="1" style="display:none" src="https://dsp-ap.eskimi.com/v2/gtr?id=12592&cid=43518&noScript=1"/>
</noscript>
<!-- End Pixel Code -->
<!-- JavaScripts -->
<!--Start of Zendesk Chat Script-->
<script type="text/javascript">
window.$zopim||(function(d,s){var z=$zopim=function(c){z._.push(c)},$=z.s=
d.createElement(s),e=d.getElementsByTagName(s)[0];z.set=function(o){z.set.
_.push(o)};z._=[];z.set._=[];$.async=!0;$.setAttribute("charset","utf-8");
$.src="https://v2.zopim.com/?6H0NFhxG4lNqPyNkddw06yl06RG7raiv";z.t=+new Date;$.
type="text/javascript";e.parentNode.insertBefore($,e)})(document,"script");
</script>
<!--End of Zendesk Chat Script-->

<script src="js/vendors/modernizr.js"></script>
<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <style>
    /*.fa {
  padding:-80px;
  font-size: 20px;
  width: 50px;
  text-align: center;
  text-decoration: none;
  margin:;
  border-radius: 50%;
  }*/


  /**********************************
Responsive navbar-brand image CSS
- Remove navbar-brand padding for firefox bug workaround
- add 100% height and width auto ... similar to how bootstrap img-responsive class works
***********************************/

.navbar-brand {
  padding: 0px;
}
.navbar-brand>img {
  height: 100%;
  padding: 15px;
  width: auto;
}

/*************************
EXAMPLES 2-7 BELOW 
**************************/

/* EXAMPLE 3

line height is 20px by default so add 30px top and bottom to equal the new .navbar-brand 80px height  */

.example3 .navbar-brand {
    height: 80px;
    float: left;
    position: absolute;
    text-align: left;
    z-index: 9999;
    margin-top: 10px;
    padding-top: 20px;
}

.example3 .nav >li >a {
  padding-top: 30px;
  font-size: 13.4px;
  padding-bottom: 20px;
}
.example3 .navbar-toggle {
  padding: 10px;
  margin: 25px 15px 25px 0;
}
.navbar-inverse {
    background: none;
    border-color:rgba(0,0,0,0);
}
.navbar-inverse .navbar-nav>.activee>a, .navbar-inverse .navbar-nav>.activee>a:focus, .navbar-inverse .navbar-nav>.activee>a:hover {
    color: #ff83a6;
    border-bottom: 2px solid ;
    border-color: #ff83a6;
}  
.navbar-inverse .navbar-nav>li>a {
    color: #ffd850;
    border-bottom: 2px solid;
    border-color: transparent;

}
.navbar-inverse .navbar-nav>li>a:hover {
    color: #ff83a6;
  }
.navbar-inverse .navbar-toggle .icon-bar {
    background-color: #c73b8f;
}
.fa-youtube {
  color: #e4e4e4;
  font-size: 35px;
  margin-right: 15px;
  }
.fa-facebook {
  font-size: 35px;
  color: #e4e4e4;
  padding-top:10px;
  margin-right:15px;
}
.fa-instagram {
  font-size: 35px;
  color: #e4e4e4;
  margin-right:15px;
}
.fa-twitter {
  font-size: 35px;
  color: #e4e4e4;
  margin-right:15px;
}
img {
    transition: 0.4s ease-in-out;
    display: inline-block !important;
    margin: -45px;
}
.borders {
  border: solid 1px pink;
  padding: 20px;
  background-clip: content-box;
  background: linear-gradient(to right,#FFFF66,  #DCDCDC ,  #D3D3D3);
  box-shadow: 0px 0px 5px 0px #8e0202;
  outline: 1px solid white;
  outline-offset: -10px;
}
.copy{
  background: yellow;
}
.navbar-inverse .navbar-collapse, .navbar-inverse .navbar-form {
    border-color: #fff;
}
.logonew{
    width: 12%;
    height: auto;
}
.page-header {
    padding-bottom: 9px;
    margin: 40px 0 20px;
    border-bottom: 0px solid #eee;
}
.page-header1 {
    padding-top: 9px;
    padding-bottom: 12px;
    margin: 40px 0 20px;
    border: 0px solid #fff;
    background: linear-gradient(to bottom,#e5e5e5,  #fff);
}
.container {
    padding-right: 0px;
    padding-left: 0px;
    margin-right: auto;
    margin-left: auto;
}
.win{
  width: 116%;
  height: 400px;
}
.work{
  width: 50%;
  height: auto;
}
.jackpot{
  width: 100%;
}
a:focus{
  outline: 0 none !important;
}
@media(min-width: 768px) and (max-width: 1199px){
  .navbar-brand img{
   margin-left: -45px;
   max-width: 95%;
   margin-top:-35px;
   max-height: 105px;
  }
}
@media(max-width:767px){
  .color{
    display: none;
  }
   .navbar-brand img{
   margin-left: 20px;
   max-width: 75%;
   margin-top:-35px;
   max-height: 75px;
  
  }
}
    </style>
</head>
<body style="overflow-x: hidden;max-width: 100%;background-image: url(ng/universal/back1.png);background-size: cover;background-repeat: no-repeat;background-attachment: fixed;background-position: center;">
<!-- LOADER ===========================================
<div id="loader">
  <div class="loader">
    <div class="position-center-center"> <img src="images/logo-dark.png" alt="">      
      <p class="font-crimson text-center">Please Wait...</p>
      <div class="loading">
        <div class="ball"></div>
        <div class="ball"></div>
        <div class="ball"></div>
      </div>
    </div>
  </div>
</div>--> 

<!-- Page Wrapper -->

  
<!-- Header -->
  <div class="example3">
  <nav class="navbar navbar-inverse navbar-static-top">
    <div class="container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar3">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="index.html"><img style="width:190px;height: 90px;padding-left:5px;margin-top: -30px" src="ng/universal/gold.png" alt="">
        </a>
      </div>
      <div id="navbar3" class="navbar-collapse collapse">
        <ul class="nav navbar-nav navbar-right" style="padding-right: 70px;margin-left: 10px">
          <li><a href="index.php" name="homepage">HOME</a></li>
          <li><a href="play.php" name="how to play">HOW TO PLAY</a></li>
          <li><a href="game.html" name="game">PLAY GAME</a></li>
          <!--<li><a href="#">JACKPOT WINNERS</a></li>-->
          <li><a href="terms.php" name="terms and conditions">TERMS AND CONDITIONS</a></li>
          <li><a href="faq.php" name="faqs">FAQS</a></li>
          <li><a href="disclaimer.php" name="disclaimer">DISCLAIMER</a></li>
          <li class="activee"><a href="contact.php" name="contactpage">CONTACT US</a></li>
          <i><a href="https://www.facebook.com/luckyboxng/?modal=admin_todo_tour" name="facebook link" class=" fa fa-facebook" target="_blank" style="padding-top: 25px;padding-right: 5px"></a>
            </i>
          <i><a href="https://www.instagram.com/luckyboxng/" name="instagram link" class=" fa fa-instagram" target="_blank" style="padding-right: 5px"></a></i>
          <i><a href="https://www.youtube.com/channel/UCbJhV-2UiyxKK-I0SHqpdsQ?view_as=subscriber" name="youtube link" class="fa fa-youtube" target="_blank" style="padding-right: 5px"></a></i>
          <i><a href="https://twitter.com/luckyboxng?lang=en" name="twitter link" class="fa fa-twitter" target="_blank" style="padding-right: 5px"></a></i>
        </ul>
      </div>
      <!--/.nav-collapse -->
    </div>
    <!--/.container-fluid -->
  </nav>
</div>
  <!-- End Header --> 
  
  
  
  
  <!-- Content -->
  <div id="content"> 
    
    <!-- Conatct -->
    <div class="padding-top-20 padding-bottom-20" style="background-image: none;background-size: cover;">
      
      <div class="container">
        
            <div class="icon-style style-2 icon-fill">
              <ul class="row">
                
                <!-- Services -->
                <li class="col-md-4">
                  <article class="text-center margin-bottom-50">
                    <div class="icon icon-large"> <i class="lnr lnr-bubble"></i> </div>
                    <h6 style="color: #ffd850">Support</h6>
                    <p style="color: #ffd850">support@luckybox.ng</p>
                  </article>
                </li>
                
                <!-- Services -->
                <li class="col-md-4">
                  <article class="text-center margin-bottom-50">
                    <div class="icon icon-large"> <i class="lnr lnr-phone"></i> </div>
                    <h6 style="color: #ffd850">Phone</h6>
                    <p style="color: #ffd850">+234 1700 5530</p>
                  </article>
                </li>
                
                <!-- Services -->
                <li class="col-md-4">
                  <article class="text-center margin-bottom-50">
                    <div class="icon icon-large"> <i class="lnr lnr-envelope"></i> </div>
                    <h6 style="color: #ffd850">Email</h6>
                    <p style="color: #ffd850">marketing@luckybox.ng</p>
                  </article>
                </li> 
              </ul>
            
    
       
        </br>
        
    
    <!-- Map -->
    
  </div>

  <!-- End Content --> 
  
  <!-- Footer -->
  <footer id="footer" >
    <div class="footer-wrapper"> 
      
      <!-- Footer Top -->
      <div class="footer-top">
        <div class="footer-top-wrapper">
          <div class="container">
            <div class="row"> 
              <!-- About Block -->
              <div class="col-md-4">
                <div class="block block-about">
                    
                    </div>
                    <p style="color: #ffd850"><strong>Location</strong> : Suit 15 Divine Grace Plaza Emmanuel Keshi Street. Magodo Phase 2.</p>

                  </div>
                </div>
              </div>
            </div>
              <!-- End About Block --> 
              
              <!-- Footer Links Block -->
              
              <!-- End Footer Links Block --> 
              
              <!-- Twitter Widget Block -->
              
                      
                    </div>
                  </div>
                </div>
              </div>
              <!-- End Twitter Widget Block --> 
              
              <!-- Instagram Widget Block -->
              
              <!-- End Instagram Widget Block --> 
              
            </div>
          
        
      <div>
      <!-- End Footer Top --> 
      
      <!-- Footer Bottom -->
      <div class="footer-bottom" style="background-image:none;background-size: cover;">
        <div class="footer-bottom-wrapper">
          <div class="container">
            <div class="row">
              <div class="col-md-12 text-center copyright">
                <p style="color: #ffd850">&copy; <script>document.write(new Date().getFullYear());</script> LuckyBox.<br>ONFON LOTTO trading as LUCKYBOX <br>is licensed by National Lottery Regulatory Commission<br> under the license number 00000224</p>
              </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- End Footer Bottom --> 
    </div>
  </footer>
  <!-- End Footer --> 
  
  <!-- GO TO TOP --> 
  <a href="#" class="cd-top"><i class="fa fa-angle-up"></i></a> 
  <!-- GO TO TOP End --> 
<!-- End Page Wrapper -->
  </div>
</div>

<!-- JavaScripts --> 
<script src="js/vendors/jquery/jquery.min.js"></script> 
<script src="js/vendors/wow.min.js"></script> 
<script src="js/vendors/bootstrap.min.js"></script> 
<script src="js/vendors/own-menu.js"></script> 
<script src="js/vendors/flexslider/jquery.flexslider-min.js"></script> 
<script src="js/vendors/jquery.countTo.js"></script> 
<script src="js/vendors/jquery.isotope.min.js"></script> 
<script src="js/vendors/jquery.bxslider.min.js"></script> 
<script src="js/vendors/owl.carousel.min.js"></script> 
<script src="js/vendors/jquery.lighter.js"></script> 
<script src="js/vendors/jquery.sticky.js"></script> 
<script src="js/vendors/cp.min.js"></script>

<!-- SLIDER REVOLUTION 4.x SCRIPTS  -->
<script src="js/main.js"></script> 

<!-- begin map script--> 
<script type='text/javascript' src='http://maps.google.com/maps/api/js?sensor=false'></script> 
<script type="text/javascript">
/*==========  Map  ==========*/
var map;
function initialize_map() {
if ($('#map').length) {
  var myLatLng = new google.maps.LatLng(51.083570,-0.203680);
  var mapOptions = {
    zoom: 15,
    center: myLatLng,
    scrollwheel: false,
    panControl: false,
    zoomControl: true,
    scaleControl: false,
    mapTypeControl: false,
    streetViewControl: false
  };
  map = new google.maps.Map(document.getElementById('map'), mapOptions);
  var marker = new google.maps.Marker({
    position: myLatLng,
    map: map,
    tittle: 'Lucky Box',
    icon: './images/map-locator.png'
  });
} else {
  return false;
}
}
google.maps.event.addDomListener(window, 'load', initialize_map);
</script>
<script>

  //impressions
  $(window).on('load', function() {
      var ip = "<?php echo $ip; ?>";  
      var referer = "<?php echo $referer; ?>"; 
      var useragent = "<?php echo $useragent; ?>";        
      var webpage = "<?php echo $webpage; ?>";

      $.ajax({  
          url:"http://ngapi.luckybox.co.ke",  
          method:"post",  
          data:{ip:ip, referer:referer, useragent:useragent, webpage:webpage},  
          success:function(data){ 
            console.log(ip);
          },
          error: function (xhr, status, error) {
            console.log(xhr.responseText);
            $.alert('An error was thrown.');
          }
      });
  });

  //links
  $('a').click(function(){ 
     var ip = "<?php echo $ip; ?>"; 
     var name = $(this).attr('name');
     var webpage = "<?php echo $webpage; ?>";

     $.ajax({  
          url:"http://ngredirects.luckybox.co.ke",  
          method:"post",  
          data:{ip:ip, name:name, webpage:webpage},  
          success:function(data){ 
            //console.log(ip);
          },
          error: function (xhr, status, error) {
            console.log(xhr.responseText);
            $.alert('An error was thrown.');
          }
      });

   });

</script>
</body>
</html>