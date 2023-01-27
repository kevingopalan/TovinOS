<div class = "appmenu" id = "appmenu" onclick = "appmenuhide()">
  <h1 style = "margin: 100px;">Applications</h1>
  <div class = "appicons">
    <img src="img/wow64/64x64/apps/preferences-desktop.svg" height="48px" width="48px" onclick = "showWindow(1, 'wppr.php')"/>
    <img src="icons/racer.svg" height="48px" width="48px" onclick = "showWindow(0, 'coming.php')"/>
    <a onclick = "capture()"><img src="img/wow64/64x64/apps/applets-screenshooter.svg" height="48px" width="48px" id = "tos.app.screenshooter" style = "display: none;"/></a>
    <a onclick = "showWindow(8, 'trafficjam.php')"><img src="icons/trafficjam3d.jpeg" height="48px" width="48px" id = "tos.app.trafficjam3d" style = "display: none;"/></a>

<a onclick = "showWindow(9, 'lost.php')"><img src="icons/lost.png" height="48px" width="48px" id = "tos.app.nano-x1.lost" style = "display: none;"/></a>

<a onclick = "showWindow(10, 'lost01.php')"><img src="icons/lost.png" height="48px" width="48px" id = "tos.app.nano-x1.lost01" style = "display: none;"/></a>

    <img src="img/wow64/48x48/status/dialog-information.svg" height="48px" width="48px" onclick="showWindow(2, 'about.php')" />
    <img src="img/wow64/64x64/apps/internet-chat.svg" height="48px" width="48px" onclick="showWindow(4, 'chat.php')" />
    <a onclick = "showWindow(3, 'files.php')"><img src="img/wow64/64x64/apps/system-file-manager.svg" height="48px" width="48px"/></a>
    <a onclick = "showWindow(6, 'feedback.php')"><img src="img/wow64/64x64/apps/system-error.svg" height="48px" width="48px"/></a>
    <img src="img/wow64/64x64/apps/software-store.svg" onclick="showWindow(7, 'store.php'); setTimeout(check, 500)" height="48px" width="64px"/>
  </div>
  <a onclick="menu()" style="position:absolute;bottom:0;right:0;">
    <img src="img/wow64/24x24/apps/system-shutdown.svg" height="28px" width="28px" style = "margin: 10px;"/>
  </a>
</div>

   <div class="bar" id = "dock">
	<a onclick="appmenushow()"><img src="img/appmenu.png"/></a>
<a onclick="showWindow(1, 'wppr.php')">
  <img src="img/wow64/24x24/apps/preferences-desktop.svg" class = "appimg"/>
</a>
	<a onclick="showWindow(0, 'racer.php')">
<img src="icons/racer.svg" class = "appimg"/>
</a>
  <a onclick = "showWindow(3, 'files.php')"><img src="img/wow64/24x24/apps/system-file-manager.svg" class = "appimg"/></a>
  <a onclick = "showWindow(4, 'chat.php')"><img src="img/wow64/24x24/apps/internet-chat.svg" class = "appimg"/></a>
  <img src="img/wow64/24x24/apps/software-store.svg" onclick="showWindow(7, 'store.php'); setTimeout(check, 500)" class = "appimg"/>
  <img src="img/wow64/24x24/apps/multimedia-photo-viewer.svg" onclick="showWindow(5, 'imgview.php')" class = "appimg"/>
  <img src="img/wow64/24x24/apps/system-error.svg" onclick="showWindow(6, 'feedback.php')" class = "appimg"/>
<span id="clock"></span>
</div>
