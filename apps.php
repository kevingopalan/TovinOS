<div class = "appmenu" id = "appmenu" onclick = "appmenuhide()">
  <h1 style = "margin: 100px;">Applications</h1>
  <div class = "appicons">
    <img src="icons/racer.svg" height="48px" width="48px" onclick = "showWindow(0, 'coming.php')"/>
    <a onclick = "capture()"><img src="img/BeautySolar/apps/scalable/accessories-screenshot.svg" height="48px" width="48px" id = "tos.app.screenshooter" style = "display: none;"/></a>
    <a onclick = "showWindow(8, 'trafficjam.php')"><img src="icons/trafficjam3d.jpeg" height="48px" width="48px" id = "tos.app.trafficjam3d" style = "display: none;"/></a>

<a onclick = "showWindow(9, 'lost.php')"><img src="icons/lost.png" height="48px" width="48px" id = "tos.app.nano-x1.lost" style = "display: none;"/></a>

<a onclick = "showWindow(11, 'settings-new.php')"><img src="img/BeautySolar/apps/scalable/preferences.svg" height="48px" width="48px"/></a>

    <img src="img/BeautySolar/apps/scalable/applications-chat.svg" height="48px" width="48px" onclick="showWindow(4, 'chat.php')" />
    <a onclick = "showWindow(3, 'files.php')"><img src="img/BeautySolar/apps/scalable/system-file-manager.svg" height="48px" width="48px"/></a>
    <a onclick = "showWindow(6, 'feedback.php')"><img src="img/BeautySolar/apps/scalable/system-error.svg" height="48px" width="48px"/></a>
    <img src="img/BeautySolar/apps/scalable/software-store.svg" onclick="showWindow(7, 'store.php'); setTimeout(check, 500)" height="48px" width="64px"/>
    <img src="img/BeautySolar/apps/scalable/multimedia-photo-viewer.svg" onclick="showWindow(5, 'imgview.php')" height = "48px"/>
  </div>
  <a onclick="menu()" style="position:absolute;bottom:0;right:0;">
    <img src="img/BeautySolar/apps/scalable/system-shutdown.svg" height="28px" width="28px" style = "margin: 10px;"/>
  </a>
</div>

   <div class="bar" id = "dock">
	<a onclick="appmenushow()"><img src="img/BeautySolar/apps/scalable/applications-all.svg"/></a>
	<a onclick="showWindow(0, 'racer.php')">
<img src="icons/racer.svg" class = "appimg"/>
</a>
  <a onclick = "showWindow(3, 'files.php')"><img src="img/BeautySolar/apps/scalable/system-file-manager.svg" class = "appimg"/></a>
  <a onclick = "showWindow(4, 'chat.php')"><img src="img/BeautySolar/apps/scalable/applications-chat.svg" class = "appimg"/></a>
  <img src="img/BeautySolar/apps/scalable/software-store.svg" onclick="showWindow(7, 'store.php'); setTimeout(check, 500)" class = "appimg"/>
  <img src="img/BeautySolar/apps/scalable/multimedia-photo-viewer.svg" onclick="showWindow(5, 'imgview.php')" class = "appimg"/>
  <img src="img/BeautySolar/apps/scalable/system-error.svg" onclick="showWindow(6, 'feedback.php')" class = "appimg"/>
  <span id="clock"></span>
</div>
