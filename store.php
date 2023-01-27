<style>

    li{
      list-style-type: none;
      background:#555555;
      padding:10px;
      font-family:monospace;
      border-bottom:1px solid grey;
      text-decoration:none;
      color: white;
    }

    #afterinstall {
      display: none;
    }
</style>
<div class = "storemain">
<h2>Store</h2>
<input id = "search" onkeyup="searchstore()" placeholder = "Search">
<ul id="myUL">
    <li><img src = "img/wow64/24x24/apps/applets-screenshooter.svg"/> Screenshooter | <span class = "appname">tos.app.screenshooter</span> <span><button onclick = "installapp('tos.app.screenshooter', this)" id = "install">Install</button></span> <span id = "afterinstall"><button onclick = "uninstallapp('tos.app.screenshooter', this)">Uninstall</button></span></li>
    <li><img src = "icons/trafficjam3d.jpeg" height = "24px"/> Traffic Jam 3D - Contains Ads | <span class = "appname">tos.app.trafficjam3d</span> <span><button onclick = "installapp('tos.app.trafficjam3d', this)" id = "install">Install</button></span> <span id = "afterinstall"><button onclick = "uninstallapp('tos.app.trafficjam3d', this)">Uninstall</button></span></li>

<li><img src = "icons/lost.png" height = "24px"/> Lost | <span class = "appname">tos.app.nano-x1.lost</span> <span><button onclick = "installapp('tos.app.nano-x1.lost', this)" id = "install">Install</button></span> <span id = "afterinstall"><button onclick = "uninstallapp('tos.app.nano-x1.lost', this)">Uninstall</button></span></li>

<li><img src = "icons/lost.png" height = "24px"/> Lost v1 | <span class = "appname">tos.app.nano-x1.lost01</span> <span><button onclick = "installapp('tos.app.nano-x1.lost01', this)" id = "install">Install</button></span> <span id = "afterinstall"><button onclick = "uninstallapp('tos.app.nano-x1.lost01', this)">Uninstall</button></span></li>
</ul>
</div>
