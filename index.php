<!DOCTYPE html>
<html lang = "en">
<head>
    <link rel="stylesheet" href="font-awesome.css" />
    <link rel="stylesheet" href="style.css" />
    <meta https-equiv="X-UA-Compatible" content="ie=edge" />
    <meta charset="UTF-8" />
    <link href = "favicon.ico" rel = "shortcut icon">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/1.3.4/html2canvas.min.js"></script>
    <title>TovinOS</title>
    <script src="tos-pace/pace.js"></script>
    <link rel="stylesheet" href="tos-pace/pace.css">
    <script src="head-scripts.js"></script>
    <meta name="robots" content="noindex, nofollow">
    <meta name="googlebot" content="noindex">
    <style>
      html {
        background: url("img/Wallpapers/tos-wallpaper.png") no-repeat center fixed;
       -webkit-background-size: cover !important;
       -moz-background-size: cover !important;
       -o-background-size: cover !important;
       background-size: cover !important;
      }
    </style>
</head>
<noscript>
      <style>
        #noscript{
          opacity:1;
          z-index: 3123030130103;
        }
        
        .cover2{
          background: #ff4444;
          color: white;
          overflow: suto;
        }
        #stuffage:target{
          display: block;
        }
      </style>
      <div class = "cover2" id = "noscript">
        <dd>
          <br>
          <h1 style = "color: white; font-size: 50px;"><img src = "/wip/TovinOS/img/wow64/64x64/apps/system-error.svg" style = "margin-bottom: -15px;">&nbsp;Oops!</h1>
          <div>
            <h1>TovinOS Could not load one or more resources for the system</h1>
            <p>ERR: JAVASCRIPT_UNAVAILABLE</p>
            <br>
            <h1>Look for this icon on the address bar in Chrome/Opera:</h1>
            <img src = "/wip/TovinOS/img/browserstuff.png">
            <h1>Or in Firefox, go to about:config and set javascript.enabled to true.</h1>
            <p>For other browsers, search how to turn on JavaScript on [browser_name]</p>
          </div>
        </dd>
      </div>
    </noscript>
<body onload="loader(); functio(); setTimeout(fnBrowserDetect, 2000); currentTime();" id = "bodyid">
<?php include('preloader.php');?>  
<?php include('setup.php');?>
<div id = "main" style = "opacity: 0; transition: 0.3s;">
    <audio id = "sound"></audio>
    <span id = "vernum">TovinOS, revision <?php include("version.txt")?></span>
    <div style = "font-size: 160px; position: absolute; top: 50%; left: 50%; transform: translate(-50%, -70%); font-family: outfit; text-align: center;"><span id="clock2" style = "font-weight: bold; opacity: 0.5;"></span><p style = "margin-top: -10px; font-weight: 400; font-size: 20px;">DECEMBER 23, 2023</p></div>
    <?php include('lscrn.php');?>
    <?php include('statusbar.php');?>
    <?php include('contextmenu.php');?>
    <?php include('apps.php');?>
    <?php include('windows.php');?>
    <?php include('shutdown.php');?>
  </div>
  <script src = "script.js"></script>  
  <script>currentTime(); checkdarklight();</script>
</body>

</html>
