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
      body {
        background: url("img/Wallpapers/tos-wallpaper.png") no-repeat center fixed;
        background-size: cover;
      }
    </style>
</head>

<body onload="loader(); functio(); alpha(); setTimeout(fnBrowserDetect, 2000); checkdarklight();" id = "bodyid">
<?php include('preloader.php');?>  
<div id = "main" style = "opacity: 0; transition: 0.3s;">
    <?php include('noscript.php');?>
    <audio id = "sound"></audio>
    <span style = "margin: 10px;">TovinOS, revision <?php include("version.txt")?></span>
    <?php include('contextmenu.php');?>
    <?php include('setup.php');?>
    <?php include('apps.php');?>
    <?php include('windows.php');?>
    <?php include('shutdown.php');?>
    <script src = "script.js"></script>
  </div>
</body>

</html>