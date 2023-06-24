<div class = "setup" id = "setuptos">
  <h1>Welcome</h1>
  <form onsubmit = "return false">
    <h2>Security</h2>
    <input type = password id = "submitpwd" placeholder = "Please enter your password" required>
    <br>
    <label style = "display: none;"><input type="checkbox" id="myChecki" onclick="darklight2()"/> Dark Mode</label>
    <br>
    <h2>Theme</h2>
    <button onclick = "document.getElementById('myChecki').checked = true; darklight2()">Dark<br><img src = "img/dark.png" width = "250px"></button>
    <button onclick = "document.getElementById('myChecki').checked = false; darklight2()">Light<br><img src = "img/light.png" width = "250px"></button>
    <br>
    <br>
    <input type = "submit" value = "Finish" onclick = "this.parentNode.parentNode.style.display = 'none'; localStorage.setupFinished = 'yes'; localStorage.pwd = document.getElementById('submitpwd').value; location.reload()">
  </form>
</div>