<div class = "appmenu" id = "appmenu" onclick = "appmenuhide()">
  <div class = "appicons">
    <img src="img/wow64/24x24/apps/preferences-desktop.svg" height="64px" width="64px" onclick = "showWindow(1, 'wppr.php')"/>
    <img src="icons/racer.svg" height="64px" width="64px" onclick = "showWindow(0, 'coming.php')"/>
    <a onclick = "capture()"><img src="img/wow64/24x24/apps/applets-screenshooter.svg" height="64px" width="64px"/></a>
    <img src="img/wow64/24x24/status/dialog-information.svg" height="54px" width="54px" onclick="showWindow(2, 'about.php')" />
    <a onclick = "showWindow(3, 'files.php')"><img src="img/wow64/24x24/apps/system-file-manager.svg" height="64px" width="64px"/></a>
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
  <a onclick = "capture()"><img src="img/wow64/24x24/apps/applets-screenshooter.svg" class = "appimg"/></a>
  <img src="img/wow64/24x24/status/dialog-information.svg" onclick="showWindow(2, 'about.php')" class = "appimg"/>
<span id="clock"></span>
</div>