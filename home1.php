<html>
<header>
  <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <link href="https://fonts.googleapis.com/css?family=Archivo:700" rel="stylesheet">
     <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
     <!-- <script type = "text/javascript" src = "https://code.jquery.com/jquery-2.1.1.min.js"></script> -->
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
</header>




<body style="height:100%;">
  <div class="wrapper">

  <nav>
     <div class="nav-wrapper grey darken-3">
       <center>
       <a href="#" style="font-family: 'Archivo', sans-serif;"><p style="font-size: 18px;">Electrical Engineering Time Table</p></a>
       </center>
     </div>
  </nav>
  <br>
    <!-- <center>
      <a class="waves-effect waves-light btn-large white red-text">  Monday  </a><br><br>
      <a class="waves-effect waves-light btn-large white red-text">Tuesday</a><br><br>
      <a class="waves-effect waves-light btn-large white red-text">Wednesday</a><br><br>
      <a class="waves-effect waves-light btn-large white red-text">Thursday</a><br><br>
      <a class="waves-effect waves-light btn-large white red-text">Friday</a><br><br>
    </center> -->

  <div class="container">
  <ul class="collapsible popout">
    <li class="<?php date_default_timezone_set('Asia/Kolkata');
                    if(date("l")=="Monday"){ echo "active"; }?>">
      <div class="hoverable collapsible-header center red-text">  <div class="container center-align flowtext"><h6>Monday</h6><?php if(date("l")=="Monday"){ echo '<span class=" new badge green" style="margin-top:-25px; margin-right:-15px" data-badge-caption="Today"></span>'; }?></div></div>
      <div class="collapsible-body grey lighten-3"><span>
        <strong>Applied Digital Logic Design IC150 (TUT)</strong><br>8:30 am - 10:00 am | Room no.- 107<br><br>
        <strong>Applied Digital Logic Design IC150</strong><br>10:00 am - 11:30 am | Room no.- 107<br><br>
        <strong>Quantum Physics IC151</strong><br>11:30 am - 12:50 pm | Room no.- 107<br>
      </span></div>
    </li>
    <li class="<?php if(date("l")=="Tuesday"){ echo "active"; }?>">
      <div class="hoverable collapsible-header center red-text">  <div class="container center-align flowtext"><h6>Tuesday</h6><?php if(date("l")=="Tuesday"){ echo '<span class=" new badge green" style="margin-top:-25px; margin-right:-15px" data-badge-caption="Today"></span>'; }?></div></div>
      <div class="collapsible-body grey lighten-3"><span>
        <strong>Applied Digital Logic Design IC150 (TUT)</strong><br>8:30 am - 10:00 am | Room no.- 107<br><br>
        <strong>Applied Digital Logic Design IC150</strong><br>10:00 am - 11:30 am | Room no.- 107<br><br>
        <strong>Quantum Physics IC151</strong><br>11:30 am - 12:50 pm | Room no.- 107<br>
      </span></div>
    </li>
    <li class="<?php if(date("l")=="Wednesday"){ echo "active"; }?>">
      <div class="hoverable collapsible-header center red-text">  <div class="container center-align flowtext"><h6>Wednesday</h6><?php if(date("l")=="Wednesday"){ echo '<span class=" new badge green" style="margin-top:-25px; margin-right:-15px" data-badge-caption="Today"></span>'; }?></div></div>
      <div class="collapsible-body grey lighten-3"><span>
        <strong>Applied Digital Logic Design IC150 (TUT)</strong><br>8:30 am - 10:00 am | Room no.- 107<br><br>
        <strong>Applied Digital Logic Design IC150</strong><br>10:00 am - 11:30 am | Room no.- 107<br><br>
        <strong>Quantum Physics IC151</strong><br>11:30 am - 12:50 pm | Room no.- 107<br>
      </span></div>
    </li>
    <li class="<?php if(date("l")=="Thursday"){ echo "active"; }?>">
      <div class="hoverable collapsible-header center red-text">  <div class="container center-align flowtext"><h6>Thursday</h6><?php if(date("l")=="Thursday"){ echo '<span class=" new badge green" style="margin-top:-25px; margin-right:-15px" data-badge-caption="Today"></span>'; }?></div></div>
      <div class="collapsible-body grey lighten-3"><span>
        <strong>Applied Digital Logic Design IC150 (TUT)</strong><br>8:30 am - 10:00 am | Room no.- 107<br><br>
        <strong>Applied Digital Logic Design IC150</strong><br>10:00 am - 11:30 am | Room no.- 107<br><br>
        <strong>Quantum Physics IC151</strong><br>11:30 am - 12:50 pm | Room no.- 107<br>
      </span></div>
    </li>
    <li class="<?php if(date("l")=="Friday"){ echo "active"; }?>">
      <div class="hoverable collapsible-header center red-text">  <div class="container center-align flowtext"><h6>Friday</h6><?php if(date("l")=="Friday"){ echo '<span class=" new badge green" style="margin-top:-25px; margin-right:-15px" data-badge-caption="Today"></span>'; }?></div></div>
      <div class="collapsible-body grey lighten-3"><span>
        <strong>Applied Digital Logic Design IC150 (TUT)</strong><br>8:30 am - 10:00 am | Room no.- 107<br><br>
        <strong>Applied Digital Logic Design IC150</strong><br>10:00 am - 11:30 am | Room no.- 107<br><br>
        <strong>Quantum Physics IC151</strong><br>11:30 am - 12:50 pm | Room no.- 107<br>
      </span></div>
    </li>
  </ul>
</div>
<br>
<!-- <center>
  <p class="white-text">Made with <br><i class="material-icons red-text">favorite</i></p><br>
</center> -->
</div>



       <!-- Compiled and minified JavaScript -->
       <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
       <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
       <script src="https://cdn.bootcss.com/store.js/1.3.20/store.min.js"></script>
<script type="text/javaScript">
         $(document).ready(function(){
      $('.sidenav').sidenav();
    });
    $(document).ready(function(){
      $('.collapsible').collapsible();
    });
  </script>

  <style>
    html {
    background: url(background.png) no-repeat center center fixed;
    -webkit-background-size: cover;
    -moz-background-size: cover;
    -o-background-size: cover;
    background-size: cover;
    height:100%;
  }
    body{
      height:100%;
    }
    .wrapper {
      min-height: 100%;

      /* Equal to height of footer */
      /* But also accounting for potential margin-bottom of last child */
      margin-bottom: 0px;
    }
    .footer {
      height: 100px;
        line-height: 0px;
    }

    nav {
            height: 60px;
        line-height: 60px;
    }
  </style>
</body>
</html>
