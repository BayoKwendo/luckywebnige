<?php

// Server variables
  $ip = $_SERVER['REMOTE_ADDR'];
  $referer = $_SERVER['HTTP_HOST'];
  $useragent = $_SERVER['HTTP_USER_AGENT'];
  $webpage = "Home Page";
  $action = "Start Playing Button";
  
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
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="css/ionicons.min.css">
<link rel="stylesheet" href="css/bootstrap/bootstrap.min.css">
<link rel="stylesheet" href="css/font-awesome.min.css">
<link rel="stylesheet" href="css/main.css">
<link rel="stylesheet" href="css/style.css" >
<link rel="stylesheet" href="css/responsive.css">
<link rel="stylesheet" href="css/play.css">
<link rel="stylesheet" href="css/bootstrap.css">

<!-- JavaScripts -->
<script src="js/vendors/modernizr.js"></script>

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
 
<style>
  .borders {
  border: solid 1px pink;
  padding: 20px;
  background-clip: content-box;
  background: linear-gradient(to right,#FFFF66,  #DCDCDC ,  #D3D3D3);
  box-shadow: 0px 0px 5px 0px #8e0202;
  outline: 1px solid white;
  outline-offset: -10px;
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
   /*width: 100%;
   max-width: 80px;
   height: auto;*/
  transition: 0.4s ease-in-out;
    display: inline-block !important;
    margin: -60px;
}
.now>img{

   width: 100%;
   max-width: 95px;
   height: 100%;
}
.play{
  padding-top: -100px;
}
.text-center {
    text-align: center;
}
@media (min-width: 768px){
.col-sm-offset-3 {
    margin-left: 24%;}
}
.btn {
    background: #ff83a600;
    text-transform: uppercase;
    letter-spacing: 2px;
    border: none !important;
    position: relative;
    overflow: hidden;
}
.btnn {
    background: #ff83a600;
    text-transform: uppercase;
    letter-spacing: 2px;
    border: none !important;
    position: relative;
    overflow: hidden;
}
.btnnn {
    background: #ff83a600;
    text-transform: uppercase;
    letter-spacing: 2px;
    border: none !important;
    position: relative;
    overflow: hidden;
}
.btnnnn {
    background: #ff83a600;
    text-transform: uppercase;
    letter-spacing: 2px;
    border: none !important;
    position: relative;
    overflow: hidden;
}
.btnnnnn {
    background: #ff83a600;
    text-transform: uppercase;
    letter-spacing: 2px;
    border: none !important;
    position: relative;
    overflow: hidden;
}
.btnnnnnn {
    background: #ff83a600;
    text-transform: uppercase;
    letter-spacing: 2px;
    border: none !important;
    position: relative;
    overflow: hidden;
}

@media (min-width: 1200px){
.contain {
    width: 100%;}
}
.feedback {
  background-color : #31B0D5;
  color: white;
  padding: 10px 20px;
  border-radius: 4px;
  border-color: #46b8da;
}

#mybutton {
  position: fixed;
  bottom: 10px;
  right: 20px;
}
* {
    box-sizing: border-box;
    background-size: contain;

}

.column {
    float: left;
    width: 33.33%;
    padding: 5px;
}

/* Clearfix (clear floats) */
.row::after {
    content: "";
    clear: both;
    display: table;
}
div.angrytext {
 font-size: 70px;

 -webkit-animation: jump 1.5s ease 0s infinite normal ;
 animation: jump 1.5s ease 0s infinite normal ;
}
.words{
  width: 100%;
  height: 100%;
  margin: 0px auto;
  position: relative;
}

@-webkit-keyframes jump {
  0%{
  -webkit-transform: translateY(0);
  transform: translateY(0);
  }
  20%{
  -webkit-transform: translateY(0);
  transform: translateY(0);
  }
  40%{
  -webkit-transform: translateY(-30px);
  transform: translateY(-30px);
  }
  50%{
  -webkit-transform: translateY(0);
  transform: translateY(0);
  }
  60%{
  -webkit-transform: translateY(-15px);
  transform: translateY(-15px);
  }
  80%{
  -webkit-transform: translateY(0);
  transform: translateY(0);
  }
  100%{
  -webkit-transform: translateY(0);
  transform: translateY(0);
  }
}

@keyframes jump {
  0%{
  transform: translateY(0);
  }
  20%{
  transform: translateY(0);
  }
  40%{
  transform: translateY(-30px);
  }
  50%{
  transform: translateY(0);
  }
  60%{
  transform: translateY(-15px);
  }
  80%{
  transform: translateY(0);
  }
  100%{
  transform: translateY(0);
  }
}
  .border {
  border: solid 1px pink;
  padding: 10px;
  width: 250px;
  background-clip: content-box;
  background: linear-gradient(to right,#ffff32eb,#ffa500e3,#e76eab ,#4c4cff,#009900b8);
  box-shadow: 0px 0px 5px 0px #8e0202;
  outline: 0px solid white;
  outline-offset: -9px;
}

.slider {
  width: 245px;
  height: 175px;
  margin: 0px auto;
  position: relative;
}
.slide1,.slide2,.slide3,.slide4,.slide5 {
  position: absolute;
  width: 100%;
  height: 100%;
}
.slide1 {
  background: url(images/black.jpg)no-repeat center;
      background-size: cover;
    animation:fade 8s infinite;
-webkit-animation:fade 8s infinite;

} 
.slide2 {
  background: url(images/dom.jpg)no-repeat center;
      background-size: cover;
    animation:fade2 8s infinite;
-webkit-animation:fade2 8s infinite;
}
.slide3 {
    background: url(images/cath.jpg)no-repeat center;
      background-size: cover;
    animation:fade3 8s infinite;
-webkit-animation:fade3 8s infinite;
}
@keyframes fade
{
  0%   {opacity:1}
  33.333% { opacity: 0}
  66.666% { opacity: 0}
  100% { opacity: 1}
}
@keyframes fade2
{
  0%   {opacity:0}
  33.333% { opacity: 1}
  66.666% { opacity: 0 }
  100% { opacity: 0}
}
@keyframes fade3
{
  0%   {opacity:0}
  33.333% { opacity: 0}
  66.666% { opacity: 1}
  100% { opacity: 0}
}

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
.logonew{
    width: 12%;
    height: auto;
    position: relative;
}

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
    border-bottom: 10px solid;
    border-color: transparent;

}
.navbar-inverse .navbar-nav>li>a:hover {
    color: #ff83a6;
  }
.navbar-inverse .navbar-toggle .icon-bar {
    background-color: #c73b8f;
}
.navbar-inverse .navbar-collapse, .navbar-inverse .navbar-form {
    border-color: #fff;
}
@media only screen and (min-width: 200px) and (max-width: 990px){  

  #wowslider-container1 {
    display: none; 
  }
  .ws_images{
    display: none;
  }
}
@media (min-width: 1024px){
.navbar-inverse {
    width: 100%;
  }
}
@media (min-width: 768px) and (max-width: 1200px) {
    .navbar-header {
        float: none;
    }
    .navbar-left,.navbar-right {
        float: none !important;
    }
    .navbar-toggle {
        display: block;
    }
    .navbar-collapse {
        border-top: 1px solid transparent;
        box-shadow: inset 0 1px 0 rgba(255,255,255,0.1);
    }
    .navbar-fixed-top {
        top: 0;
        border-width: 0 0 1px;
    }
    .navbar-collapse.collapse {
        display: none!important;
    }
    .navbar-nav {
        float: none!important;
        margin-top: 7.5px;
    }
    .navbar-nav>li {
        float: none;
    }
    .navbar-nav>li>a {
        padding-top: 10px;
        padding-bottom: 10px;
    }
    .collapse.in{
        display:block !important;
    }
}
.tube>img{
    width: 100%;
      max-width: 69px;
      height: 50%;
  
}
@media (min-width:100px ) and (max-width:400px ){
    .border{
      width: 100px;
    }
  div.angrytext{
    width: 70%;
    max-width: 70px;
    
  }
  .now>img{
    margin-left:-145px;
  }

}
@media (min-width:100px ) and (max-width:400px ){
  .tube>img{
    margin-left:-150px;
  }
}
@media (min-width:401px ) and (max-width:500px ){
  div.angrytext{
    width: 70%;
    max-width: 70px;
    
  }
  .now>img{
    margin-left:-130px;
  }
}
@media (min-width:501px ) and (max-width:600px ){
  div.angrytext{
    width: 70%;
    max-width: 70px;
    
  }
  .now>img{
    margin-left:-120px;
  }
}
@media (min-width:601px ) and (max-width:767px ){
  div.angrytext{
    width: 70%;
    max-width: 70px;
    
  }
  .now>img{
    margin-left:-120px;
  }
}
@media (min-width:768px ) and (max-width:989px ){
  div.angrytext{
    width: 70%;
    max-width: 70px;
    
  }
  .now>img{
    margin-left:-50px;
  }
  p{
    text-align: center;
  }

}
@media(min-width: 990px){
  div.angrytext{
    width: 70%;
    max-width: 70px;
    
  }
  .now>img{
    margin-left:-100px;
  }

}
@media(min-width: 1024px){
  div.angrytext{
    width: 70%;
    max-width: 80px;
  }
  .now>img{
    margin-left: -60px;
  }
}
@media (min-width: 1024px) and (max-width: 1279px){
  div.angrytext{
    width: 70%;
    max-width: 70px;
  }
  .now>img{
    margin-left: -70px;
  }
}
@media(min-width: 1920px){
  div.angrytext{
    width: 100%;
    max-width: 80px;
  }
  .now>img{
    margin-left: 25px;
  }
}

body.modal-open {
    overflow: auto !important;
}

body.modal-open[style] {
    padding-right: 0px !important;
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
  width: 100%;
  height: auto;
  max-width: 280px;
  margin-left: 525px;
}
.work{
  width: 23%;
  height: auto;
}
.jackpot{
  width: 100%;
  height: auto;
}
label {
    display: inline-block;
    max-width: 100%;
    margin-bottom: 20px;
    font-weight: 1000;
    color: #ffd850 ;
    font-size: 18px;
}
.button {
    background: linear-gradient(to bottom,#7f0000,#660000);
    border: none;
    color: #ffd850;
    padding: 10px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    cursor: pointer;
    border-radius: 8px;
    margin-top: 30px;
    box-shadow: 0px 0px 2px 2px #ffd850;
}
.form-control {
    display: block;
    width: 50%;
    height: 34px;
    padding: 6px 12px;
    font-size: 14px;
    line-height: 1.42857143;
    color: #555;
    background: linear-gradient(to right,yellow);
    background-image: none;
    border: 1px solid #ccc;
    border-radius: 10px;
    margin-left: auto;
    margin-right: auto;
    box-shadow: 0px 0px 5px 5px #ffd850;
}
@font-face{
  font-family: 'MyFont';
  src:url('fonts/web-font.ttf') format('truetype');
}
.top-left {
    position: absolute;
    top: 90px;
    left: 105px;
    color: #ffd850;
    text-transform: uppercase;
    font-weight: bold;
    font-size: 3vw;
    /*font-family: "Comic Sans MS", cursive, sans-serif;
    font-family: '-apple-system','HelveticaNeue';*/
    font-family: 'MyFont', Fallback, sans-serif;
}
a:focus{
  outline: 0 none !important;
}
@media(min-width: 1321px) and (max-width: 1340px){
  .win{
    margin-left: 520px;
  }
  .work{
    height: 60px;
    width: 280px;
    margin-bottom: 20px;
  }
  .navbar-brand img{
   margin-left: 40px;
   max-width: 70%;
   margin-top:-35px;
   max-height: 75px;
  
  }
}
@media(min-width: 1300px) and (max-width: 1320px){
  .win{
    margin-left: 500px;
  }
  .work{
    height: 60px;
    width: 280px;
    margin-bottom: 20px;
  }
  .navbar-brand img{
   margin-left: 40px;
   max-width: 70%;
   margin-top:-35px;
   max-height: 75px;
  
  }
}
@media(min-width: 1281px) and (max-width: 1299px){
  .win{
    width: 125%;
    height: 250px;
    margin-left: 500px;
  }
  .top-left{
    top:270px;
    font-size: 27px;
    left:130px;
    margin-top: -50px;
  }
  .work{
    margin-top: -300px;
    height: 55px;
    margin-left: -55px;
    width: 260px;
  }
  .navbar-brand img{
   margin-left: 40px;
   max-width: 70%;
   margin-top:-35px;
   max-height: 75px;
  
  }
}
@media(min-width: 1266px) and (max-width: 1280px){
  .win{
    width: 125%;
    height: 250px;
    margin-left: 490px;
  }
  .top-left{
    top:270px;
    font-size: 27px;
    left:130px;
    margin-top: -50px;
  }
  .work{
    margin-top: -300px;
    height: 55px;
    margin-left: -55px;
    width: 260px;
  }
  .navbar-brand img{
   margin-left: 40px;
   max-width: 70%;
   margin-top:-35px;
   max-height: 75px;
  
  }
}
@media(min-width: 1241px) and (max-width: 1265px){
  .win{
    width: 125%;
    height: 250px;
    margin-left: 480px;
  }
  .top-left{
    top:270px;
    font-size: 27px;
    left:130px;
    margin-top: -50px;
  }
  .work{
    margin-top: -300px;
    height: 55px;
    margin-left: -55px;
    width: 260px;
  }
  .navbar-brand img{
   margin-left: 40px;
   max-width: 70%;
   margin-top:-35px;
   max-height: 75px;
  
  }
}
@media(min-width: 1221px) and (max-width: 1240px){
  .win{
    width: 125%;
    height: 250px;
    margin-left: 470px;
  }
  .top-left{
    top:270px;
    font-size: 27px;
    left:130px;
    margin-top: -50px;
  }
  .work{
    margin-top: -300px;
    height: 55px;
    margin-left: -55px;
    width: 260px;
  }
  .navbar-brand img{
   margin-left: 40px;
   max-width: 70%;
   margin-top:-35px;
   max-height: 75px;
  
  }
}
@media(min-width: 1200px) and (max-width: 1220px){
  .win{
    width: 125%;
    height: 250px;
    margin-left: 460px;
  }
  .top-left{
    top:270px;
    font-size: 27px;
    left:130px;
    margin-top: -50px;
  }
  .work{
    margin-top: -300px;
    height: 50px;
    margin-left: -55px;
    width: 200px;
  }
  .navbar-brand img{
   margin-left: 40px;
   max-width: 70%;
   margin-top:-35px;
   max-height: 75px;
  
  }
}
@media(min-width: 1186px) and (max-width: 1199px){
  .win{
    width: 125%;
    height: 250px;
    margin-left: 455px;
  }
  .top-left{
    top:270px;
    font-size: 27px;
    left:130px;
    margin-top: -50px;
  }
  .work{
    margin-top: -350px;
    height: 50px;
    margin-left: -55px;
    width: 200px;
  }
  .button{
    margin-top: -500px;
  }
  .navbar-brand img{
   margin-left: 40px;
   max-width: 70%;
   margin-top:-35px;
   max-height: 75px;
  
  }
}
@media(min-width: 1161px) and (max-width: 1185px){
  .win{
    width: 125%;
    height: 250px;
    margin-left: 440px;
  }
  .top-left{
    top:270px;
    font-size: 27px;
    left:130px;
    margin-top: -50px;
  }
  .work{
    margin-top: -150px;
    height: 50px;
    margin-left: -55px;
    width: 200px;
  }
  .button{
    margin-top: 10px;
  }
  .navbar-brand img{
   margin-left: 40px;
   max-width: 70%;
   margin-top:-35px;
   max-height: 75px;
  
  }
}
@media(min-width: 1131px) and (max-width: 1160px){
  .win{
    width: 125%;
    height: 250px;
    margin-left: 430px;
  }
  .top-left{
    top:270px;
    font-size: 27px;
    left:130px;
    margin-top: -50px;
  }
  .work{
    margin-top: -150px;
    height: 50px;
    margin-left: -55px;
    width: 200px;
  }
  .button{
    margin-top: 10px;
  }
  .navbar-brand img{
   margin-left: 40px;
   max-width: 70%;
   margin-top:-35px;
   max-height: 75px;
  
  }
}
@media(min-width: 1106px) and (max-width: 1130px){
  .win{
    width: 125%;
    height: 250px;
    margin-left: 410px;
  }
  .top-left{
    top:270px;
    font-size: 27px;
    left:130px;
    margin-top: -50px;
  }
  .work{
    margin-top: -150px;
    height: 50px;
    margin-left: -55px;
    width: 200px;
  }
  .button{
    margin-top: 10px;
  }
  .navbar-brand img{
   margin-left: 40px;
   max-width: 70%;
   margin-top:-35px;
   max-height: 75px;
  
  }
}
@media(min-width: 1081px) and (max-width: 1105px){
  .win{
    width: 125%;
    height: 250px;
    margin-left: 395px;
  }
  .top-left{
    top:270px;
    font-size: 27px;
    left:130px;
    margin-top: -50px;
  }
  .work{
    margin-top: -150px;
    height: 50px;
    margin-left: -55px;
    width: 200px;
  }
  .button{
    margin-top: 10px;
  }
  .navbar-brand img{
   margin-left: 40px;
   max-width: 70%;
   margin-top:-35px;
   max-height: 75px;
  
  }
}
@media(min-width: 1041px) and (max-width: 1080px){
  .win{
    width: 125%;
    height: 250px;
    margin-left: 385px;
  }
  .top-left{
    top:270px;
    font-size: 27px;
    left:130px;
    margin-top: -50px;
  }
  .work{
    margin-top: -150px;
    height: 50px;
    margin-left: -55px;
    width: 200px;
  }
  .button{
    margin-top: 10px;
  }
  .navbar-brand img{
   margin-left: 40px;
   max-width: 70%;
   margin-top:-35px;
   max-height: 75px;
  
  }
}
@media(min-width: 1021px) and (max-width: 1040px){
  .win{
    width: 125%;
    height: 250px;
    margin-left: 370px;
  }
  .top-left{
    top:270px;
    font-size: 27px;
    left:130px;
    margin-top: -50px;
  }
  .work{
    margin-top: -150px;
    height: 50px;
    margin-left: -55px;
    width: 200px;
  }
  .button{
    margin-top: 10px;
  }
  .navbar-brand img{
   margin-left: 40px;
   max-width: 70%;
   margin-top:-35px;
   max-height: 75px;
  
  }
}
@media(min-width: 991px) and (max-width: 1020px){
  .win{
    width: 125%;
    height: 250px;
    margin-left: 360px;
  }
  .top-left{
    top:270px;
    font-size: 27px;
    left:130px;
    margin-top: -50px;
  }
  .work{
    margin-top: -150px;
    height: 50px;
    margin-left: -55px;
    width: 200px;
  }
  .button{
    margin-top: -10px;
  }
  .navbar-brand img{
   margin-left: 40px;
   max-width: 70%;
   margin-top:-35px;
   max-height: 75px;
  
  }
}
@media(min-width: 961px) and (max-width: 990px){
  .win{
    width: 125%;
    height: 250px;
    margin-left: 340px;
  }
  .top-left{
    top:270px;
    font-size: 27px;
    left:130px;
    margin-top: -50px;
  }
  .work{
    margin-top: -150px;
    height: 50px;
    margin-left: -55px;
    width: 200px;
  }
  .button{
    margin-top: 10px;
  }
  .navbar-brand img{
   margin-left: 40px;
   max-width: 70%;
   margin-top:-35px;
   max-height: 75px;
  
  }
}
@media(min-width: 931px) and (max-width: 960px){
  .win{
    width: 125%;
    height: 250px;
    margin-left: 325px;
  }
  .top-left{
    top:270px;
    font-size: 27px;
    left:130px;
    margin-top: -50px;
  }
  .work{
    margin-top: -150px;
    height: 50px;
    margin-left: -55px;
    width: 200px;
  }
  .button{
    margin-top: 10px;
  }
  .navbar-brand img{
   margin-left: 40px;
   max-width: 70%;
   margin-top:-35px;
   max-height: 75px;
  
  }
}
@media(min-width: 901px) and (max-width: 930px){
  .win{
    width: 125%;
    height: 250px;
    margin-left: 310px;
  }
  .top-left{
    top:270px;
    font-size: 27px;
    left:130px;
    margin-top: -50px;
  }
  .work{
    margin-top: -150px;
    height: 50px;
    margin-left: -55px;
    width: 200px;
  }
  .button{
    margin-top: 10px;
  }
  .navbar-brand img{
   margin-left: 40px;
   max-width: 70%;
   margin-top:-35px;
   max-height: 75px;
  
  }
}
@media(min-width: 871px) and (max-width: 900px){
  .win{
    width: 125%;
    height: 250px;
    margin-left: 295px;
  }
  .top-left{
    top:270px;
    font-size: 27px;
    left:130px;
    margin-top: -50px;
  }
  .work{
    margin-top: -150px;
    height: 50px;
    margin-left: -55px;
    width: 200px;
  }
  .button{
    margin-top: 10px;
  }
  .navbar-brand img{
   margin-left: 40px;
   max-width: 70%;
   margin-top:-35px;
   max-height: 75px;
  
  }
}
@media(min-width: 846px) and (max-width: 870px){
  .win{
    width: 125%;
    height: 250px;
    margin-left: 285px;
  }
  .top-left{
    top:270px;
    font-size: 27px;
    left:130px;
    margin-top: -50px;
  }
  .work{
    margin-top: -150px;
    height: 50px;
    margin-left: -55px;
    width: 200px;
  }
  .button{
    margin-top: 10px;
  }
  .navbar-brand img{
   margin-left: 40px;
   max-width: 70%;
   margin-top:-35px;
   max-height: 75px;
  
  }
}
@media(min-width: 826px) and (max-width: 845px){
  .win{
    width: 125%;
    height: 250px;
    margin-left: 270px;
  }
  .top-left{
    top:270px;
    font-size: 27px;
    left:130px;
    margin-top: -50px;
  }
  .work{
    margin-top: -150px;
    height: 50px;
    margin-left: -55px;
    width: 200px;
  }
  .button{
    margin-top: 10px;
  }
  .navbar-brand img{
   margin-left: 40px;
   max-width: 70%;
   margin-top:-35px;
   max-height: 75px;
  
  }
}
@media(min-width: 791px) and (max-width: 825px){
  .win{
    width: 125%;
    height: 250px;
    margin-left: 260px;
  }
  .top-left{
    top:270px;
    font-size: 27px;
    left:130px;
    margin-top: -50px;
  }
  .work{
    margin-top: -150px;
    height: 50px;
    margin-left: -55px;
    width: 200px;
  }
  .button{
    margin-top: 10px;
  }
  .navbar-brand img{
   margin-left: 40px;
   max-width: 70%;
   margin-top:-35px;
   max-height: 75px;
  
  }
}
@media(min-width: 768px) and (max-width: 790px){
  .win{
    width: 125%;
    height: 250px;
    margin-left: 240px;
  }
  .top-left{
    top:270px;
    font-size: 27px;
    left:130px;
    margin-top: -50px;
  }
  .work{
    margin-top: -150px;
    height: 50px;
    margin-left: -55px;
    width: 200px;
  }
  .button{
    margin-top: 10px;
  }
  .navbar-brand img{
   margin-left: 40px;
   max-width: 70%;
   margin-top:-35px;
   max-height: 75px;
  
  }
}
@media(min-width: 741px) and (max-width: 767px){
  .win{
    width: 125%;
    height: 250px;
    margin-left: 230px;
  }
  .top-left{
    top:270px;
    font-size: 27px;
    left:130px;
    margin-top: -50px;
  }
  .work{
    margin-top: -150px;
    height: 50px;
    margin-left: -55px;
    width: 200px;
  }
  .button{
    margin-top: 10px;
  }
  .navbar-brand img{
   margin-left: 40px;
   max-width: 70%;
   margin-top:-35px;
   max-height: 75px;
  
  }
}
@media(min-width: 721px) and (max-width: 740px){
  .win{
    width: 125%;
    height: 250px;
    margin-left: 220px;
  }
  .top-left{
    top:270px;
    font-size: 27px;
    left:130px;
    margin-top: -50px;
  }
  .work{
    margin-top: -150px;
    height: 50px;
    margin-left: -55px;
    width: 200px;
  }
  .button{
    margin-top: 10px;
  }
  .navbar-brand img{
   margin-left: 40px;
   max-width: 70%;
   margin-top:-35px;
   max-height: 75px;
  
  }
}

@media(min-width: 691px) and (max-width: 720px){
  .win{
    width: 125%;
    height: 250px;
    margin-left: 210px;
  }
  .top-left{
    top:270px;
    font-size: 27px;
    left:130px;
    margin-top: -50px;
  }
  .work{
    margin-top: -150px;
    height: 50px;
    margin-left: -55px;
    width: 200px;
  }
  .button{
    margin-top: 10px;
  }
  .navbar-brand img{
   margin-left: 40px;
   max-width: 70%;
   margin-top:-35px;
   max-height: 75px;
  
  }
}
@media(min-width: 667px) and (max-width: 690px){
  .win{
    width: 125%;
    height: 250px;
    margin-left: 195px;
  }
  .top-left{
    top:270px;
    font-size: 27px;
    left:130px;
    margin-top: -50px;
  }
  .work{
    margin-top: -150px;
    height: 50px;
    margin-left: -55px;
    width: 200px;
  }
  .button{
    margin-top: 10px;
  }
  .navbar-brand img{
   margin-left: 40px;
   max-width: 70%;
   margin-top:-35px;
   max-height: 75px;
  
  }
}
@media(min-width: 641px) and (max-width: 665px){
  .win{
    width: 125%;
    height: 250px;
    margin-left: 180px;
  }
  .top-left{
    top:270px;
    font-size: 27px;
    left:130px;
    margin-top: -50px;
  }
  .work{
    margin-top: -150px;
    height: 50px;
    margin-left: -55px;
    width: 200px;
  }
  .button{
    margin-top: 10px;
  }
  .navbar-brand img{
   margin-left: 40px;
   max-width: 70%;
   margin-top:-35px;
   max-height: 75px;
  
  }
}
@media(min-width: 616px) and (max-width: 640px){
  .win{
    width: 125%;
    height: 250px;
    margin-left: 170px;
  }
  .top-left{
    top:270px;
    font-size: 27px;
    left:130px;
    margin-top: -50px;
  }
  .work{
    margin-top: -150px;
    height: 50px;
    margin-left: -55px;
    width: 200px;
  }
  .button{
    margin-top: 10px;
  }
  .navbar-brand img{
   margin-left: 40px;
   max-width: 70%;
   margin-top:-35px;
   max-height: 75px;
  
  }
}
@media(min-width: 591px) and (max-width: 615px){
  .win{
    width: 125%;
    height: 250px;
    margin-left: 160px;
  }
  .top-left{
    top:270px;
    font-size: 27px;
    left:130px;
    margin-top: -50px;
  }
  .work{
    margin-top: -150px;
    height: 50px;
    margin-left: -55px;
    width: 200px;
  }
  .button{
    margin-top: 10px;
  }
  .navbar-brand img{
   margin-left: 40px;
   max-width: 70%;
   margin-top:-35px;
   max-height: 75px;
  
  }
}
@media(min-width: 566px) and (max-width: 590px){
  .win{
    width: 125%;
    height: 250px;
    margin-left: 140px;
  }
  .top-left{
    top:270px;
    font-size: 27px;
    left:130px;
    margin-top: -50px;
  }
  .work{
    margin-top: -150px;
    height: 50px;
    margin-left: -55px;
    width: 200px;
  }
  .button{
    margin-top: 10px;
  }
  .navbar-brand img{
   margin-left: 40px;
   max-width: 70%;
   margin-top:-35px;
   max-height: 75px;
  
  }
}
@media(min-width: 531px) and (max-width: 565px){
  .win{
    width: 125%;
    height: 250px;
    margin-left: 130px;
  }
  .top-left{
    top:270px;
    font-size: 27px;
    left:130px;
    margin-top: -50px;
  }
  .work{
    margin-top: -150px;
    height: 50px;
    margin-left: -55px;
    width: 200px;
  }
  .button{
    margin-top: 10px;
  }
  .navbar-brand img{
   margin-left: 40px;
   max-width: 70%;
   margin-top:-35px;
   max-height: 75px;
  
  }
}
@media(min-width: 506px) and (max-width: 530px){
  .win{
    width: 125%;
    height: 250px;
    margin-left: 115px;
  }
  .top-left{
    top:270px;
    font-size: 27px;
    left:130px;
    margin-top: -50px;
  }
  .work{
    margin-top: -150px;
    height: 50px;
    margin-left: -55px;
    width: 200px;
  }
  .button{
    margin-top: 100px;
  }
  .navbar-brand img{
   margin-left: 40px;
   max-width: 70%;
   margin-top:-35px;
   max-height: 75px;
  
  }
}
@media(min-width: 480px) and (max-width: 505px){
  .win{
    width: 125%;
    height: 250px;
    margin-left: 105px;
  }
  .top-left{
    top:270px;
    font-size: 27px;
    left:130px;
    margin-top: -50px;
  }
  .work{
    margin-top: -150px;
    height: 50px;
    margin-left: -55px;
    width: 200px;
  }
  .button{
    margin-top: 10px;
  }
  .navbar-brand img{
   margin-left: 40px;
   max-width: 70%;
   margin-top:-35px;
   max-height: 75px;
  
  }
}
@media(min-width: 456px) and (max-width: 479px){
  .win{
    width: 125%;
    height: 250px;
    margin-left: 90px;
  }
  .top-left{
    top:270px;
    font-size: 27px;
    left:130px;
    margin-top: -50px;
  }
  .work{
    margin-top: -150px;
    height: 50px;
    margin-left: -55px;
    width: 200px;
  }
  .button{
    margin-top: 10px;
  }
  .navbar-brand img{
   margin-left: 40px;
   max-width: 70%;
   margin-top:-35px;
   max-height: 75px;
  
  }
}
@media(min-width: 431px) and (max-width: 455px){
  .win{
    width: 125%;
    height: 250px;
    margin-left: 80px;
  }
  .top-left{
    top:270px;
    font-size: 27px;
    left:130px;
    margin-top: -50px;
  }
  .work{
    margin-top: -150px;
    height: 50px;
    margin-left: -55px;
    width: 200px;
  }
  .button{
    margin-top: 10px;
  }
  .navbar-brand img{
   margin-left: 40px;
   max-width: 70%;
   margin-top:-35px;
   max-height: 75px;
  
  }
}
@media(min-width: 406px) and (max-width: 430px){
  .win{
    width: 125%;
    height: 250px;
    margin-left: 70px;
  }
  .top-left{
    top:270px;
    font-size: 27px;
    left:130px;
    margin-top: -50px;
  }
  .work{
    margin-top: -150px;
    height: 50px;
    margin-left: -50px;
    width: 200px;
  }
  .button{
    margin-top: -10px;
  }
  .navbar-brand img{
   margin-left: 40px;
   max-width: 70%;
   margin-top:-35px;
   max-height: 75px;
  
  }
}
@media(min-width: 379px) and (max-width: 405px){
  .win{
    width: 125%;
    height: 250px;
    margin-left: 55px;
  }
  .top-left{
    top:270px;
    font-size: 27px;
    left:130px;
    margin-top: -50px;
  }
  .work{
    margin-top: -150px;
    height: 50px;
    margin-left: -50px;
    width: 200px;
  }
  .button{
    margin-top: 100px;
  }
  .navbar-brand img{
   margin-left: 40px;
   max-width: 70%;
   margin-top:-35px;
   max-height: 75px;
  }
}
@media(max-width: 378px){
  .win{
    width: 125%;
    height: 250px;
    margin-left: 45px;
  }
  .top-left{
    top:270px;
    font-size: 27px;
    left:130px;
    margin-top: -50px;
  }
  .work{
    margin-top: -150px;
    height: 50px;
    margin-left: -55px;
    width: 200px;
  }
  .button{
    margin-top: 20px;
  }
  .navbar-brand img{
   margin-left: 14px;
   max-width: 80%;
   margin-top:-35px;
   max-height: 75px;
  
  }
}
@media (min-width: 1200px){
  .button{
    margin-top: 150px;
  }
}

  </style>

  <!-- Facebook Pixel Code -->
<script>
  !function(f,b,e,v,n,t,s)
  {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
  n.callMethod.apply(n,arguments):n.queue.push(arguments)};
  if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
  n.queue=[];t=b.createElement(e);t.async=!0;
  t.src=v;s=b.getElementsByTagName(e)[0];
  s.parentNode.insertBefore(t,s)}(window, document,'script',
  'https://connect.facebook.net/en_US/fbevents.js');
  fbq('init', '2160219670973656');
  fbq('track', 'PageView');
</script>
<noscript><img height="1" width="1" style="display:none"
  src="https://www.facebook.com/tr?id=2160219670973656&ev=PageView&noscript=1"
/></noscript>
<!-- End Facebook Pixel Code -->
</head>
<body style="padding-right: 0px !important;background-image: url(ng/universal/back1.png);background-size: cover;background-size: cover;overflow-x: hidden;max-width: 100%;background-repeat: no-repeat;background-attachment: fixed;background-position: center; ">

<div class="container" id="wrap"> 
  
  <!--<div class="play">
     <div class="row text-center">
      <div style="text-align:center;">
                    <h3 class="page-header1" style="margin-top: 20px">
                        <img src="img/luckybox.png" alt="" class="logonew">
                   </h3>
      </div>
     </div>
   </div>-->
  <!-- Header -->
  <div class="example3" style="width: 100%">
  <nav class="navbar navbar-inverse navbar-static-top">
    <div class="container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar3">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        
        <a class="navbar-brand" href="index.php" name="logo"><img style="width:190px;height: 90px;padding-left:5px;margin-top: -40px" src="ng/universal/gold.png" alt="">
        </a>
      </div>
      <div id="navbar3" class="navbar-collapse collapse">
        <ul class="nav navbar-nav navbar-right" style="padding-right: 70px;margin-left: 10px">
          <li class="activee"><a href="index.php" name="homepage">HOME</a></li>
          <li><a href="play.php" name="how to play">HOW TO PLAY</a></li>
          <li><a href="game.html" name="game">PLAY GAME</a></li>
          <!--<li><a href="#">JACKPOT WINNERS</a></li>-->
          <li><a href="terms.php" name="terms and conditions">TERMS AND CONDITIONS</a></li>
          <li><a href="faq.php" name="faqs">FAQS</a></li>
          <li><a href="disclaimer.php" name="disclaimer">DISCLAIMER</a></li>
          <li><a href="contact.php" name="contactpage">CONTACT US</a></li>
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
  
  <!--======= HOME MAIN SLIDER =========-->
<div class="row">
   <div class="col-md-12 col-xs-12 col-lg-12" style="height: 400px;margin-top: 50px">
           <img src="ng/universal/box.png" alt="" class="win" />    
    </div>
    <div class="col-md-12 col-xs-12 col-lg-12">
          <div style="text-align:center;">
              <h3 class="page-header" style="margin-top: -20px">
                  <img src="ng/universal/u.png" alt="" class="work">
              </h3>
          </div>
    </div>
    <div class="col-md-12 col-xs-12 col-lg-12 text-center" style="margin-top: -100px">
          <button type="submit" class="button" id='submit' onclick="detectOS()"> <strong>START PLAYING</strong></button>
        </div>
</div>
 
  <!-- End Content --> 
<div class="row">
      <!-- <div class="col-md-12 col-xs-12 col-lg-12">
          <div style="text-align:center;">
              <h3 class="page-header" style="margin-top: -20px">
                  <img src="ng/universal/u.png" alt="" class="work">
              </h3>
          </div>
      </div> -->

      <!-- <div class="row">
        <div class="col-md-12 col-xs-12 col-lg-12 text-center" style="margin-top: -100px">
          <button type="submit" class="button" id='submit' onclick="detectOS()"> <strong>START PLAYING</strong></button>
        </div>
      </div> -->
</div>           

<!-- end of letter box -->

<!-- message form -->

<!-- end -->
  
  <!-- Footer -->
  <footer id="footer">
    <div class="footer-wrapper"> 
      
      <!-- Footer Top -->
      <div class="footer-top">
        <div class="footer-top-wrapper">
          <div class="container"> </div>
        </div>
      </div>
      <!-- End Footer Top --> 
      
      <!-- Footer Bottom -->
      <div class="footer-bottom">
        <div class="footer-bottom-wrapper">
          <div class="container">
            <div class="row">
              <div class="col-md-12 text-center copyright">
                <p>&copy; <script>document.write(new Date().getFullYear());</script> LuckyBox.<br>ONFON LOTTO trading as LUCKYBOX <br>is licensed by National Lottery Regulatory Commission<br> under the license number 00000224</p>
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
</div>
<!-- End Page Wrapper -->

<!-- JavaScripts --> 
<script src="js/vendors/jquery/jquery.min.js"></script> 
<script src="js/vendors/bootstrap.min.js"></script>

<!-- SLIDER REVOLUTION 4.x SCRIPTS  -->
<script src="js/main.js"></script>
<script type="text/javascript">
  
  function detectOS() {
    // body...
    var ua = navigator.userAgent.toLowerCase();
    //var isAndroid = ua.indexOf("android") > -1; //&& ua.indexOf("mobile");
    var isAndroid = /(android)/i.test(navigator.userAgent);

    // console.log(isAndroid);

    if(false) {
      //let user download apk
      
      var fallbackFunction = function() {
        var r = confirm("Confirm Download?");
        if (r == true) {
          window.location.href='https://luckybox.ng/apps/latest.apk'
        }
      	
      };
      
      var launchApp = function() {
        window.location.href='app://luckybox.ng/open'
      };
    
    launchApp();
    setTimeout(fallbackFunction, 350);
    }else{
      //others play online
      window.location.href='game.html'
    }
  }

</script>
<!-- Start Pixel Code -->
<script>
    !function(f,e,t,u,n,s,p) {if(f.esk)return;n=f.esk=function(){n.callMethod?n.callMethod.apply(n,arguments):n.queue.push(arguments)};if(!f.___esk)f.___esk=n;n.push=n;n.loaded=!0;n.apUrl='https://dsp-ap.eskimi.com/v2/gtr';n.queue=[];s=e.createElement(t);s.async=!0;s.src=u;p=e.getElementsByTagName(t)[0];p.parentNode.insertBefore(s,p)}(window,document,'script', 'https://dsp-media.eskimi.com/assets/js/e/gtr.min.js');
    esk('init', '12592'); 
  esk('track', 'Conversion');</script>
<noscript>
    <img height="1" width="1" style="display:none" src="https://dsp-ap.eskimi.com/v2/gtr?id=12592&conv=1&noScript=1"/>
</noscript>
<!-- End Pixel Code -->
<!-- Start Pixel Code -->
<script>
    !function(f,e,t,u,n,s,p) {if(f.esk)return;n=f.esk=function(){n.callMethod?n.callMethod.apply(n,arguments):n.queue.push(arguments)};if(!f.___esk)f.___esk=n;n.push=n;n.loaded=!0;n.apUrl='https://dsp-ap.eskimi.com/v2/gtr';n.queue=[];s=e.createElement(t);s.async=!0;s.src=u;p=e.getElementsByTagName(t)[0];p.parentNode.insertBefore(s,p)}(window,document,'script', 'https://dsp-media.eskimi.com/assets/js/e/gtr.min.js');
    esk('init', '12592'); 
  esk('aid', '118751');</script>
<noscript>
    <img height="1" width="1" style="display:none" src="https://dsp-ap.eskimi.com/v2/gtr?id=12592&aid=118751&noScript=1"/>
</noscript>
<!-- End Pixel Code -->

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
  
  //play button
  $( "#submit" ).click(function(event) {
     var ip = "<?php echo $ip; ?>";
     var action = "<?php echo $action; ?>";
     var webpage = "<?php echo $webpage; ?>";

    //$( "#play" ).mousedown();
      $.ajax({  
          url:"http://ngsms.luckybox.co.ke",  
          method:"post",  
          data:{ip:ip, action:action, webpage:webpage},  
          success:function(data){ 
            //alert(mobile);
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
