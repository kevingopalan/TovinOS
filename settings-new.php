<div>
<style>
.settings-actions div {
  margin: 16px;
  display: inline-block !important;
  text-align: center;
}
</style>
<h1>Settings</h1>
<div class = "settings-actions">
  <div onclick = "this.parentNode.parentNode.innerHTML = document.getElementById('windowHTM1').innerHTML"><img width = "64px" src = "img/wow64/64x64/apps/com.github.maoschanz.DynamicWallpaperEditor.svg"><br>Personalize</div>
  <div onclick = "this.parentNode.parentNode.innerHTML = document.getElementById('windowHTM2').innerHTML"><img width = "64px" src = "img/wow64/64x64/apps/system-users.svg"><br>Users</div>
  <div onclick = "this.parentNode.parentNode.innerHTML = document.getElementById('windowHTM3').innerHTML"><img width = "64px" src = "img/wow64/64x64/apps/internet-web-browser.svg"><br>Network</div>
  <div onclick = "this.parentNode.parentNode.innerHTML = document.getElementById('windowHTM4').innerHTML"><img width = "64px" src = "img/wow64/64x64/apps/system-lock-screen.svg"><br>Security</div>
  <div onclick = "this.parentNode.parentNode.innerHTML = document.getElementById('windowHTM5').innerHTML"><img width = "64px" src = "img/wow64/64x64/apps/preferences-desktop-display.svg"><br>Displays</div>
</div>
</div>
<div style = "display: none" id = "windowHTM1">
<h1>Personalization</h1>
<form onsubmit = "return false">
<input type = "text" id = "wallurl"/>
<input type = "submit" onclick = "bg()">
</form>
<br>
<label style = "display: none;"><input type="checkbox" id="myCheck" onclick="darklight()"/> Dark Mode</label>
<button onclick = "document.getElementById('myCheck').checked = true; darklight()">Dark<br><img src = "img/dark.png" width = "250px"></button>
    <button onclick = "document.getElementById('myCheck').checked = false; darklight()">Light<br><img src = "img/light.png" width = "250px"></button>
<span id = "val"></span>
</div>
<div style = "display: none" id = "windowHTM2">
<h1>Users</h1>
<p>Coming soon</p>
</div>
<div style = "display: none" id = "windowHTM3">
<h1>Network</h1>
<p>Dummy text</p>
<p>Dummy text</p>
<p>Dummy text</p>
</div>
<div style = "display: none" id = "windowHTM4">
<h1>Security</h1>
<p>Dummy text</p>
<p>Dummy text</p>
<p>Dummy text</p>
</div>
<div style = "display: none" id = "windowHTM5">
<h1>Displays</h1>
<p>Dummy text</p>
<p>Dummy text</p>
<p>Dummy text</p>
</div>