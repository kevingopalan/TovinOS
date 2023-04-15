<div class = "setup" id = "setuptos">
  <h1>Welcome</h1>
  <form onsubmit = "return false">
    <input type = password id = "submitpwd" required>
    <label><input type="checkbox" id="myChecki" onclick="darklight2()"/> Dark Mode</label>
    <input type = "submit" value = "Finish" onclick = "this.parentNode.parentNode.style.display = 'none'; localStorage.setupFinished = 'yes'; localStorage.pwd = document.getElementById('submitpwd').value; location.reload()">
  </form>
</div>