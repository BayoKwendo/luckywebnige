<?php

// Server variables
  $ip = $_SERVER['REMOTE_ADDR'];
  $referer = $_SERVER['HTTP_HOST'];
  $useragent = $_SERVER['HTTP_USER_AGENT'];
  $webpage = "Terms And Conditions Page";
  
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
<!-- <script type="text/javascript">
window.$zopim||(function(d,s){var z=$zopim=function(c){z._.push(c)},$=z.s=
d.createElement(s),e=d.getElementsByTagName(s)[0];z.set=function(o){z.set.
_.push(o)};z._=[];z.set._=[];$.async=!0;$.setAttribute("charset","utf-8");
$.src="https://v2.zopim.com/?6H0NFhxG4lNqPyNkddw06yl06RG7raiv";z.t=+new Date;$.
type="text/javascript";e.parentNode.insertBefore($,e)})(document,"script");
</script -->>
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
    margin: -60px;
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
.navbar-inverse .navbar-collapse, .navbar-inverse .navbar-form {
    border-color: #fff;
}
.collapsible {
    background-color: #ffb732;
    color: black;
    cursor: pointer;
    padding: 18px;
    width: 100%;
    border: none;
    text-align: left;
    outline: none;
    font-size: 15px;
    font-family: Calibri;
    margin-left: -50px;
    border-radius: 30px;
}

.activeone, .collapsible:hover {
    background-color: lightgrey;
}

.collapsible:after {
    content: '\002B';
    color: black;
    font-weight: bold;
    float: right;
    margin-left: 5px;
}

.activeone:after {
    content: "\2212";
}

.content {
    padding: 0 18px;
    max-height: 0;
    overflow: hidden;
    transition: max-height 0.2s ease-out;
    background: linear-gradient(to bottom,#fff,  lightgrey);
    border-radius: 10px;
}
div.a{
  line-height: 1.3;
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
  height: auto;
}
.color{
  width: 4.5%;
  height: auto;
}
a:focus{
  outline: 0 none !important;
}
@media(min-width: 768px) and (max-width: 1199px){
  .navbar-brand img{
    display: none;
    visibility: hidden;
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
        <a class="navbar-brand" href="index.html"><img style="width:190px;height: 90px;padding-left:5px" src="ng/universal/gold.png" alt="">
        </a>
      </div>
      <div id="navbar3" class="navbar-collapse collapse">
        <ul class="nav navbar-nav navbar-right" style="padding-right: 70px;margin-left: 10px">
          <li><a href="index.php" name="homepage">HOME</a></li>
          <li><a href="play.php" name="how to play">HOW TO PLAY</a></li>
          <li><a href="game.html" name="game">PLAY GAME</a></li>
          <!--<li><a href="#">JACKPOT WINNERS</a></li>-->
          <li class="activee"><a href="terms.php" name="terms and conditions">TERMS AND CONDITIONS</a></li>
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
  
          <!-- SLIDER -->
          
          
      </div>
  
  <!-- Content -->
  <div id="content"> 
    
    <!-- Welcome -->
    <!-- WHAT WE PROVIDE -->
    <!-- Team -->
    <!-- PORTFOLIO -->
    <!-- AMAZING -->
    <!-- News Style 2 -->
    <!-- Testimonial -->
    <!-- Conatct -->
    <!-- Clients Img -->
    <div class="padding-top-0 padding-bottom-20" style="background-image: none;background-size: cover;">
       
      <div class="container">
        <div class="text-center margin-top-20 animate fadeInUp" data-wow-delay="0.1s">
          <ul class="row">
             <p style="color: #ffd850 ;font-family: Calibri;font-size:12pt;text-align: center;"><strong><u><span><img src="ng/universal/1.png" style="float: center;margin: 0 15px 0 0;" class="color" /><img src="ng/universal/2.png" style="float: center;margin: 0 15px 0 0;" class="color" /><img src="ng/universal/3.png" style="float: center;margin: 0 15px 0 0;" class="color" />TERMS AND CONDITIONS  <img src="ng/universal/4.png" style="float: center;margin: 0 15px 0 0;" class="color" /><img src="ng/universal/5.png" style="float: center;margin: 0px 15px 0 0;" class="color" /><img src="ng/universal/6.png" style="float: center;margin: 0px 15px 0 0;" class="color"/></span></u></strong></p>

<p style="text-align: left;">&nbsp;</p>
<ul style="text-align: left;">
<p style="text-align: left;color: #ffd850;font-family: Calibri;font-size: 12pt;font-variant: normal;margin-left: 20px"><span">The following are terms and conditions of LuckyBox:</span></p>
</ul>
<p style="text-align: left;">&nbsp;</p>
<button class="collapsible" style="margin-left: 2px"><strong>GENERAL</strong></button>
<div class="content">
  <div class="a">
  <ol>
  <li style="font-family: Calibri;color: black;font-size: 11pt;margin-top:20px;text-align: left;list-style-type: decimal; "><span>LUCKY NUMBER is licensed and regulated in Nigeria by National Lottery Regulatory Commission, license number 00000224 Trading as &lsquo;LUCKY BOX&rsquo;.</span></li>
  <li style="font-family: Calibri;color: black;font-size: 11pt;margin-top:20px;text-align: left;list-style-type: decimal; "><span>The platform and the games are offered by ONFON LOTTO. (Hereinafter referred to as &lsquo;LUCKY BOX&rsquo;).</span></li>
  <li style="font-family: Calibri;color: black;font-size: 11pt;margin-top:20px;text-align: left;list-style-type: decimal; "><span>The following terms &amp; conditions apply to the &ldquo;LUCKY BOX&rdquo; promotion. By participating in this promotion, you will be deemed to have read, understood and accepted the terms and conditions.</span></li>
  <li style="font-family: Calibri;color: black;font-size: 11pt;margin-top:20px;text-align: left;list-style-type: decimal; "><span>These T&amp;C constitute a binding agreement between you and LUCKY BOX.</span>
  <li style="font-family: Calibri;color: black;font-size: 11pt;margin-top:20px;text-align: left;list-style-type: decimal; "><span>ONFON LOTTO is a limited liability company incorporated in Lagos Nigeria and subject to Nigerian law, having its registered address at BLOCK 14 PLOT 10A SARUMOH OLADOSU CLOSE LEKKI PHASE 1 LAGOS STATE.</span></li>
  <li style="font-family: Calibri;color: black;font-size: 11pt;margin-top:20px;text-align: left;list-style-type: decimal; "><span>LUCKY BOX is licensed and regulated in Nigeria by National Lottery Regulatory, license number 00000224.</span></li>
  <li style="font-family: Calibri;color: black;font-size: 11pt;margin-top:20px;text-align: left;list-style-type: decimal; "><span>LUCKY BOX reserves the right to amend these T&amp;C. It is your sole responsibility to review this agreement and amendments each time you play, together with the specific rules for each game You choose to participate in, in order to remain updated with all amendments.</span></li>
  <li style="font-family: Calibri;color: black;font-size: 11pt;margin-top:20px;text-align: left;list-style-type: decimal; "><span>You fully understand and agree to be bound by the terms and conditions contained herein and as may be amended by us from time to time.</span></li>
   <li style="font-family: Calibri;color: black;font-size: 11pt;margin-top:20px;text-align: left;list-style-type: decimal; "><span>Rules and explanations of the rules of each game provided separately on the platform are incorporated into these T&amp;C by reference.</span></li>

</ol>
</div>
</div>

<p style="text-align: left;">&nbsp;</p>
<button class="collapsible" style="margin-left: 2px"><strong>ELIGIBILTY</strong></button>
<div class="content">
  <div class="a">
  <ol>
  <li style="font-family: Calibri;color: black;font-size: 11pt;margin-top:20px;text-align: left;list-style-type: decimal; "><span>The promotion is open to persons who are 18 years of age and above.</span></li>
  <li style="font-family: Calibri;color: black;font-size: 11pt;margin-top:20px;text-align: left;list-style-type: decimal; "><span>The promotion is open to all subscribers of MTN and Airtel.</span></li>

</ol>
</div>
</div>

<p style="text-align: left;">&nbsp;</p>
<button class="collapsible" style="margin-left: 2px"><strong>PARTICIPATION</strong></button>
<div class="content">
  <div class="a">
  <ol>
  <li style="font-family: Calibri;color: black;font-size: 11pt;margin-top:20px;text-align: left;list-style-type: decimal; "><span>This competition is through Mobile App, Short Code and the LuckyBox Website.</span></li>
  <li style="font-family: Calibri;color: black;font-size: 11pt;margin-top:20px;text-align: left;list-style-type: decimal; "><span>Participants shall register to participate in the prize competition by Playing on the short code 3337, downloading the Lucky Box Mobile App or by playing directly from the LuckyBox Website.</span></li>
  <li style="font-family: Calibri;color: black;font-size: 11pt;margin-top:20px;text-align: left;list-style-type: decimal; "><span>Participants uninstall the Mobile App, SMS �STOP� to the Short Code or Log out from the website to opt out of the competition.</span>
  <li style="font-family: Calibri;color: black;font-size: 11pt;margin-top:20px;text-align: left;list-style-type: decimal; "><span>For Lucky Box, the Participant will select a box from presented selection by clicking on the box numbers presented in the Mobile App or the website for instant results. Participants can also send the box number to the Short Code provided to play.</span></li>
  <li style="font-family: Calibri;color: black;font-size: 11pt;margin-top:20px;text-align: left;list-style-type: decimal; "><span>For Jackpot which is randomly presented to the participant, the participants will click on the Box number each Jackpot entry is 50 Naira. A Participant will get a maximum of 4 entries daily for the jackpot.</span></li>
  <li style="font-family: Calibri;color: black;font-size: 11pt;margin-top:20px;text-align: left;list-style-type: decimal; "><span>Minimum stake is 50 Naira and the maximum stake is 1000 Naira.</span></li>
  <li style="font-family: Calibri;color: black;font-size: 11pt;margin-top:20px;text-align: left;list-style-type: decimal; "><span>This is a Premium Rate Service and every play will be charged at 50 Naira. The responses back to the Participant will not be charged.</span></li>
  <li style="font-family: Calibri;color: black;font-size: 11pt;margin-top:20px;text-align: left;list-style-type: decimal; "><span>The more one plays, the more chances to win. There is no restriction to the number of times that you can participate.</span></li>
  <li style="font-family: Calibri;color: black;font-size: 11pt;margin-top:20px;text-align: left;list-style-type: decimal; "><span>Participants are allowed to have only one-member account.</span></li>
  
  

</ol>
</div>
</div>


<p style="text-align: left;">&nbsp;</p>
<button class="collapsible" style="margin-left: 2px"><strong>PRIZES</strong></button>
<div class="content">
  <div class="a">
  <ol>
  <li style="font-family: Calibri;color: black;font-size: 11pt;margin-top:20px;text-align: left;list-style-type: decimal; "><span>The prizes are won instantly whenever a participant plays. The prize won will be sent to the Mobile App via a confirmation text from Participants Email address.</span></li>
  <li style="font-family: Calibri;color: black;font-size: 11pt;margin-top:20px;text-align: left;list-style-type: decimal; "><span>For Grand Jackpot, the winning prize will be advertised as it runs. The grand draw will include all entries.</span></li>

</ol>
</div>
</div>

<p style="text-align: left;">&nbsp;</p>
<button class="collapsible" style="margin-left: 2px"><strong>DEPOSITS TO MEMBER ACCOUNT</strong></button>
<div class="content">
  <div class="a">
  <ol>
  <li style="font-family: Calibri;color: black;font-size: 11pt;margin-top:20px;text-align: left;list-style-type: decimal; "><span>The minimum deposit amount is 50 Naira. The maximum is 1000 Naira.</span></li>
  <li style="font-family: Calibri;color: black;font-size: 11pt;margin-top:20px;text-align: left;list-style-type: decimal; "><span>All deposits shall be done via bank transfer by use of Interswitch into the members LUCKYBOX account.</span></li>
  <li style="font-family: Calibri;color: black;font-size: 11pt;margin-top:20px;text-align: left;list-style-type: decimal; "><span>All deposits made to Lucky Box are converted to Tickets.</span></li>
  <li style="font-family: Calibri;color: black;font-size: 11pt;margin-top:20px;text-align: left;list-style-type: decimal; "><span>Participants trying to stake with insufficient balance in the account will be notified to top up before proceeding to play.</span>
  <li style="font-family: Calibri;color: black;font-size: 11pt;margin-top:20px;text-align: left;list-style-type: decimal; "><span>You will not receive any interest of any kind on funds deposited or held in your account, including any prize winnings.</span></li>
  <li style="font-family: Calibri;color: black;font-size: 11pt;margin-top:20px;text-align: left;list-style-type: decimal; "><span>Carrier charges apply.</span></li>
  <li style="font-family: Calibri;color: black;font-size: 11pt;margin-top:20px;text-align: left;list-style-type: decimal; "><span>If LUCKY BOX mistakenly credits Your Member Account with winnings that do not belong to you, whether due to a technical or human error or otherwise, the amount will remain property of LUCKY BOX and the amount will be transferred from your Member Account.</span></li>
  <li style="font-family: Calibri;color: black;font-size: 11pt;margin-top:20px;text-align: left;list-style-type: decimal; "><span>If prior to LUCKY BOX becoming aware of the error, you withdraw funds that do not belong to you, without prejudice to other remedies and actions that may be available at law, the mistakenly paid amount will constitute a debt owed by you to LUCKY BOX.</span></li>
  <li style="font-family: Calibri;color: black;font-size: 11pt;margin-top:20px;text-align: left;list-style-type: decimal; "><span>In the event of an incorrect crediting, you are obliged to notify LUCKY BOX immediately by phone.<span></li>
  

</ol>
</div>
</div>


<p style="text-align: left;">&nbsp;</p>
<button class="collapsible" style="margin-left: 2px"><strong>BET BUNDLES</strong></button>
<div class="content">
  <div class="a">
  <ol>
  <li style="font-family: Calibri;color: black;font-size: 11pt;margin-top:20px;text-align: left;list-style-type: decimal; "><span>Bet bundles are bet tickets purchased from either customer wallet or direct deposit to Lucky Box Account by customer.</span></li>
  <li style="font-family: Calibri;color: black;font-size: 11pt;margin-top:20px;text-align: left;list-style-type: decimal; "><span>Bet Bundles are available to everyone registered on Lucky Box.</span></li>
  <li style="font-family: Calibri;color: black;font-size: 11pt;margin-top:20px;text-align: left;list-style-type: decimal; "><span>The value of a bet ticket is 50 Naira.</span></li>
  <li style="font-family: Calibri;color: black;font-size: 11pt;margin-top:20px;text-align: left;list-style-type: decimal; "><span>Bet tickets will automatically expire 30 days from the date of deposit.</span>
  <li style="font-family: Calibri;color: black;font-size: 11pt;margin-top:20px;text-align: left;list-style-type: decimal; "><span>A customer is notified with the number of bet tickets awarded for every purchase.</span></li>
  <li style="font-family: Calibri;color: black;font-size: 11pt;margin-top:20px;text-align: left;list-style-type: decimal; "><span>Customer is given the ticket balance remaining every time they play.</span></li>
  <li style="font-family: Calibri;color: black;font-size: 11pt;margin-top:20px;text-align: left;list-style-type: decimal; "><span>Bet tickets are non-withdrawable.</span></li>
  <li style="font-family: Calibri;color: black;font-size: 11pt;margin-top:20px;text-align: left;list-style-type: decimal; "><span>Winnings from the consumed bet tickets will be automatically credited on customer wallet. The winnings can be withdrawn by sending w#Amount to 3337.</span></li>
  <li style="font-family: Calibri;color: black;font-size: 11pt;margin-top:20px;text-align: left;list-style-type: decimal; "><span>Ticket balance is separate from customer�s wallet balance. Funds can only be withdrawn from customer�s wallet balance. This will not affect the ticket balance.<span></li>
  <li style="font-family: Calibri;color: black;font-size: 11pt;margin-top:20px;text-align: left;list-style-type: decimal; "><span>To purchase bet tickets from wallet, the customer will SMS TP#Amount to 3337. Amount is the money they want to convert to bet tickets will be debited from Wallet.<span></li>
  <li style="font-family: Calibri;color: black;font-size: 11pt;margin-top:20px;text-align: left;list-style-type: decimal; "><span>The customer can directly purchase Bet tickets by directly depositing the amount they wish to convert Lucky Box Account on both MTN and Airtel.<span></li>

</ol>
</div>
</div>


<p style="text-align: left;">&nbsp;</p>
<button class="collapsible" style="margin-left: 2px"><strong>WITHDRAWAL FROM MEMBER ACCOUNT</strong></button>
<div class="content">
  <div class="a">
  <ol>
  <li style="font-family: Calibri;color: black;font-size: 11pt;margin-top:20px;text-align: left;list-style-type: decimal; "><span>A member can withdraw from their wallet on web or App go to Accounts, then withdraw and enter the amount you wish to withdraw. Participants can also withdraw by sending W#amount to the LuckyBox short code.</span></li>
  <li style="font-family: Calibri;color: black;font-size: 11pt;margin-top:20px;text-align: left;list-style-type: decimal; "><span>Carrier charges apply.</span></li>

</ol>
</div>
</div>



<p style="text-align: left;">&nbsp;</p>
<button class="collapsible" style="margin-left: 2px"><strong>CLOSING ACCOUNT</strong></button>
<div class="content">
  <div class="a">
  <ol>
  <li style="font-family: Calibri;color: black;font-size: 11pt;margin-top:20px;text-align: left;list-style-type: decimal; "><span>You may close your account at any time and LUCKY BOX will return to you any and all funds from Your Member Account subject to the deduction of relevant withdrawal charges.</span></li>
  <li style="font-family: Calibri;color: black;font-size: 11pt;margin-top:20px;text-align: left;list-style-type: decimal; "><span>The method of repayment will be at our absolute discretion.</span></li>
  <li style="font-family: Calibri;color: black;font-size: 11pt;margin-top:20px;text-align: left;list-style-type: decimal; "><span>LUCKY BOX reserves the right to close Your Member Account and to refund to you the "Account balance", subject to the deduction of relevant withdrawal charges, at LUCKY BOX&rsquo;s absolute discretion and without any obligation to state a reason or give prior notice.</span></li>

</ol>
</div>
</div>



<p style="text-align: left;">&nbsp;</p>
<button class="collapsible" style="margin-left: 2px"><strong>RESPONSIBLE GAMING</strong></button>
<div class="content">
  <div class="a">
  <ol>
  <li style="font-family: Calibri;color: black;font-size: 11pt;margin-top:20px;text-align: left;list-style-type: decimal; "><span>You may at your discretion choose to exclude yourself from playing any games on our PLATFORM. This right of self-exclusion may be for a definite or indefinite period of time.</span></li>
</ol>
</div>
</div>


<p style="text-align: left;">&nbsp;</p>
<button class="collapsible" style="margin-left: 2px"><strong>WAGER RULES</strong></button>
<div class="content">
  <div class="a">
  <ol>
  <li style="font-family: Calibri;color: black;font-size: 11pt;margin-top:20px;text-align: left;list-style-type: decimal; "><span>The following amounts of wager are allowed: Any amount between 50 Naira and 1000 Naira.</span></li>
</ol>
</div>
</div>
<p style="text-align: left;">&nbsp;</p>
<button class="collapsible" style="margin-left: 2px"><strong>PRIVACY POLICY</strong></button>
<div class="content">
  <div class="a">
  <ol>
  <li style="font-family: Calibri;color: black;font-size: 11pt;margin-top:20px;text-align: left;list-style-type: decimal; "><span>You hereby acknowledge and accept that it is necessary for LUCKY BOX to collect and otherwise process your personal data in order to allow you access and use of the PLATFORM and in order to allow you to participate in games. All personal data collected shall be kept by LUCKY BOX until required for the purpose of providing the services.</span></li>
  <li style="font-family: Calibri;color: black;font-size: 11pt;margin-top:20px;text-align: left;list-style-type: decimal; "><span>LUCKY BOX will protect your personal information and respect your privacy in accordance with best business practices and applicable laws.</span></li>
  <li style="font-family: Calibri;color: black;font-size: 11pt;margin-top:20px;text-align: left;list-style-type: decimal; "><span>LUCKY BOX will only use your personal data to allow you to participate in the games and to carry out operations relevant to your participation in the games, and for the purposes of carrying out verification procedures in relation to your participation in such games.</span>
  <li style="font-family: Calibri;color: black;font-size: 11pt;margin-top:20px;text-align: left;list-style-type: decimal; "><span>Your personal data will not be disclosed to third parties, unless such disclosure is necessary for processing of your requests in relation to your participation in the games or unless it is required by law. As LUCKY BOX&rsquo;s business partners or suppliers or service providers may be responsible for certain parts of the overall functioning or operation of the PLATFROM, personal data may be disclosed to them. Internally, your personal data will be accessed by employees of LUCKY BOX, such as customer support and the payment team for purpose of providing the necessary assistance and for them to be able to perform their work. You hereby consent to all such disclosures.</span></li>
  <li style="font-family: Calibri;color: black;font-size: 11pt;margin-top:20px;text-align: left;list-style-type: decimal; "><span>Have the right to access personal data held by LUCKY BOX about You.</span></li>
  <li style="font-family: Calibri;color: black;font-size: 11pt;margin-top:20px;text-align: left;list-style-type: decimal; "><span>In order to provide you with an efficient service, LUCKY BOX and/or its service providers may require to transfer your personal data from one partner to another. You hereby consent to your personal data being so transferred.</span></li>
  <li style="font-family: Calibri;color: black;font-size: 11pt;margin-top:20px;text-align: left;list-style-type: decimal; "><span>In the processing of Your Member account and associated transactions, LUCKY BOX may have recourse to disclose information to credit rating agencies, fraud detection agencies, and anti-money laundering agencies. You hereby consent to such disclosures.</span></li>
  <li style="font-family: Calibri;color: black;font-size: 11pt;margin-top:20px;text-align: left;list-style-type: decimal; "><span>We may also inform you of changes, new services and promotions we think that you may find interesting.</span></li>
  <li style="font-family: Calibri;color: black;font-size: 11pt;margin-top:20px;text-align: left;list-style-type: decimal; "><span>LUCKY BOX shall forward your personal information to the relevant Authorities at the Betting Control and Licensing Board (BCLB) when it is obliged by law to do so, and shall not be held responsible for any results that may ensue from acting in accordance with the law.</span></li>
  

</ol>
</div>
</div>


<p style="text-align: left;">&nbsp;</p>
<button class="collapsible" style="margin-left: 2px"><strong>BREACHES,PENALTIES AND TERMINATION</strong></button>
<div class="content">
  <div class="a">
  <ol>
  <li style="font-family: Calibri;color: black;font-size: 11pt;margin-top:20px;text-align: left;list-style-type: decimal; "><span>If You breach any provision of these T&amp;C or LUCKY BOX has a reasonable ground to suspect that You have breached them, LUCKY BOX reserves the right not to open, suspend, close Your Member Account, withhold payment of Your winnings and apply such funds on account of any damages due by You.</span></li>
  <li style="font-family: Calibri;color: black;font-size: 11pt;margin-top:20px;text-align: left;list-style-type: decimal; "><span>If LUCKY BOX suspects that you are engaged in illegal or fraudulent activities when using the PLATFORM; or in breach of this agreement; or that you are having problems with creditors or otherwise detrimental to our business, we may freeze or terminate your account or cancel any stakes at our absolute discretion.</span></li>
  <li style="font-family: Calibri;color: black;font-size: 11pt;margin-top:20px;text-align: left;list-style-type: decimal; "><span>You acknowledge that LUCKY BOX shall be the final decision-maker of whether you have violated LUCKY BOX&rsquo;s rules, terms or conditions in a manner that results in your suspension or permanent barring from participation in our PLATFORM.</span></li>

</ol>
</div>
</div>


<p style="text-align: left;">&nbsp;</p>
<button class="collapsible" style="margin-left: 2px"><strong>INTELLECTUAL PROPERTY</strong></button>
<div class="content">
  <div class="a">
  <ol>
  <li style="font-family: Calibri;color: black;font-size: 11pt;margin-top:20px;text-align: left;list-style-type: decimal; "><span>ONFON LOTTO is the sole owner of the trademark LUCKYBOX and the LUCKYBOX logo. Any unauthorized use of the LUCKY BOX trademark and the LUCKYBOX logo may result in prosecution.</span></li>
  <li style="font-family: Calibri;color: black;font-size: 11pt;margin-top:20px;text-align: left;list-style-type: decimal; "><span>www.luckybox.ng is the uniform resource locator of LUCKY BOX and no unauthorized use may be made of this URL on another website or digital platform without our prior written consent.</span></li>
  <li style="font-family: Calibri;color: black;font-size: 11pt;margin-top:20px;text-align: left;list-style-type: decimal; "><span>ONFON LOTTO is the owner or the rightful licensee of the rights to the technology, software and business systems used within this PLATFORM.</span></li>
  <li style="font-family: Calibri;color: black;font-size: 11pt;margin-top:20px;text-align: left;list-style-type: decimal; "><span>The contents and structure of LUCKY BOX&acute;s PLATFORM IS subject to copyright &copy; and database rights in the name of LUCKY BOX. All rights reserved. The copyright in this PLATFORM including all text, graphics, code, files and links belong to LUCKY BOX and the site may not be reproduced, transmitted or stored in whole or in part without our written consent. Your registration and use of our system does therefore not confer any rights whatsoever to the intellectual property contained in our system.</span></li>
  <li style="font-family: Calibri;color: black;font-size: 11pt;margin-top:20px;text-align: left;list-style-type: decimal; "><span>Links to the PLATFORM therein may not be included in any other website without the prior written consent of LUCKY BOX.</span></li>
  <li style="font-family: Calibri;color: black;font-size: 11pt;margin-top:20px;text-align: left;list-style-type: decimal; "><span>You agree not to use any automatic or manual device to monitor LUCKY BOX PLATFORM or any content therein. Any unauthorized use or reproduction may be prosecuted.</span></li>

</ol>
</div>
</div>


<p style="text-align: left;">&nbsp;</p>
<button class="collapsible" style="margin-left: 2px"><strong>APPLICABLE LAW AND JURISDICTION</strong></button>
<div class="content">
  <div class="a">
  <ol>
  <li style="font-family: Calibri;color: black;font-size: 11pt;margin-top:20px;text-align: left;list-style-type: decimal; "><span>These T&C are governed by the Laws of the National Lottery Regulatory Commission.</span></li>

</ol>
</div>
</div>



<p style="text-align: left;">&nbsp;</p>
<button class="collapsible" style="margin-left: 2px"><strong>LIMITATION OF LIABILITY</strong></button>
<div class="content">
  <div class="a">
  <ol>
  <li style="font-family: Calibri;color: black;font-size: 11pt;margin-top:20px;text-align: left;list-style-type: decimal; "><span>You enter the PLATFORM and participate in the games at your own risk. The PLATFORM and the games are provided without any warranty whatsoever, whether express or implied.</span></li>
  <li style="font-family: Calibri;color: black;font-size: 11pt;margin-top:20px;text-align: left;list-style-type: decimal; "><span>Without prejudice to the generality of the preceding provision, LUCKYBOX, its directors, employees, partners, service providers:</span></li>
  <li style="font-family: Calibri;color: black;font-size: 11pt;margin-top:20px;text-align: left;list-style-type: decimal; "><span>Do not warrant that the software or the PLATFORM is/are fit for their purpose;</span></li>
  <li style="font-family: Calibri;color: black;font-size: 11pt;margin-top:20px;text-align: left;list-style-type: decimal; "><span>Do not warrant that the software and PLATFORM are free from errors;</span></li>
  <li style="font-family: Calibri;color: black;font-size: 11pt;margin-top:20px;text-align: left;list-style-type: decimal; "><span>Do   not warrant that the PLATFORM and/or games will be accessible without interruptions;</span></li>
  <li style="font-family: Calibri;color: black;font-size: 11pt;margin-top:20px;text-align: left;list-style-type: decimal; "><span>LUCKYBOX will not be liable for misinterpretation/distortion of messages as a result of the customer�s mobile handset. A list of unsupported handsets is published on our website www.luckybox.ng and is continuously updated.</span></li>
  <li style="font-family: Calibri;color: black;font-size: 11pt;margin-top:20px;text-align: left;list-style-type: decimal; "><span>Any message that does not conform to the structure and format of Lucky Box messages is considered null and void. The customer should contact customer care in such cases to have the message resent to their phone.</span></li>
  <li style="font-family: Calibri;color: black;font-size: 11pt;margin-top:20px;text-align: left;list-style-type: decimal; "><span>Lucky Box Shall not be liable for any loss, costs, expenses or damages, whether direct, indirect, special, consequential, incidental or otherwise, arising in relation to your use of the PLATFORM or Your participation in the games.</span></li>

</ol>
</div>
</div>

            
          <li class="col-md-2"> </li>
          </ul>
        </div>
      
    </div>
  </div>
  </div>
  <!-- End Content --> 
  
  <!-- Footer -->
  <footer id="footer" style="background-image: none;background-size: cover;">
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

<script>
var coll = document.getElementsByClassName("collapsible");
var i;

for (i = 0; i < coll.length; i++) {
  coll[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var content = this.nextElementSibling;
    if (content.style.maxHeight){
      content.style.maxHeight = null;
    } else {
      content.style.maxHeight = content.scrollHeight + "px";
    } 
  });
}
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