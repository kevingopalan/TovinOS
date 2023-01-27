<div class = "setup">
  <h1>Welcome</h1>
  <form onsubmit = "return false">
    <input id = "submitpwd" required>
    <input type = "submit" value = "Create" onclick = "this.parentNode.parentNode.style.display = 'none'; localStorage.setupFinished = 'yes'; localStorage.pwd = document.getElementById('submitpwd').value">
  </form>
</div>