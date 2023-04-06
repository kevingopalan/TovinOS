//Made by Kevin Gopalan, 2021

// _____            _         ___   ___  _ 
//(_   _) ___ __ __(_) _ _   / _ \ / __)| |
//  | |  / _ \\ V /| || ' \ ( (_) )\__ \|_|
//  |_|  \___/ \_/ |_||_||_| \___/ (___/|_|
if (typeof localStorage.pwd == 'undefined' || localStorage.pwd == '') {
	localStorage.pwd = ""
	document.getElementById('pwdenter').style.display = "none"
}

if (localStorage.darkMode != 'yes') {
	localStorage.darkMode = 'no';
} else if (localStorage.darkMode == 'yes') {
	darklight();
}

if (typeof localStorage.wpurl == 'undefined') {
	localStorage.wpurl = "img/Wallpapers/tos-wallpaper.png";
} else {
	document.body.style.background = "url('" + localStorage.wpurl + "') no-repeat center fixed, var(--darklight)";
}

if (typeof localStorage.installedapps == 'undefined') {
	installedapps = []
    localStorage.installedapps = JSON.stringify(installedapps);
} else {
	installedapps = JSON.parse(localStorage.installedapps);
	for (let i = 0; i < installedapps.length; i++) {
	document.getElementById(installedapps[i]).style.display = "block";
	}
}

if (localStorage.setupFinished != 'yes') {
	localStorage.setupFinished = '';
	document.querySelector('.setup').style.display = "block";
}

function bg() {
	const valbg = document.getElementById('wallurl').value;
	localStorage.wpurl = valbg;
	document.body.style.background = "url('" + valbg + "') no-repeat center fixed, var(--darklight)";
}

function showWindow(windowNumber, file) {
	var tosWindow = document.querySelectorAll(".popup");
	tosWindow[windowNumber].style.display = "block";
	getFileForElementPrototype(file, windowNumber);
	for (i = 0; i < tosWindow.length; i++) {
		tosWindow[i].style.zIndex = "1";
		tosWindow[i].children[2].style.pointerEvents = "none";
	}
	tosWindow[windowNumber].style.zIndex = "41";
	tosWindow[windowNumber].children[2].style.pointerEvents = "auto";
}

function getFileForElementPrototype(file, elname) {
	var xhr = new XMLHttpRequest();
	xhr.open('get', file, true);
	xhr.onreadystatechange = function() {
		if (xhr.readyState == 4 && xhr.status == 200) {
			document.querySelectorAll("#reduceload")[elname].innerHTML = xhr.responseText;
		}
	}
	xhr.send();
}

function hide(ele) {
	ele.parentNode.parentNode.children[2].innerHTML = "";
	ele.parentNode.parentNode.style.display = "none";
}

function darklight() {
	var checkBox = document.getElementById("myCheck");
	if (checkBox.checked == true) {
		document.querySelector(':root').style.setProperty('--darklight', '#333');
		document.querySelector(':root').style.setProperty('--darklight-blue', '#11243d');
		document.querySelector(':root').style.setProperty('--darklight-opacity', '#33333399');
		document.querySelector(':root').style.setProperty('--darklight-opacity-fbgb', '#333333de');
		document.body.style.color = "#FFF";
		localStorage.darkMode = 'yes';
	} else {
		document.querySelector(':root').style.setProperty('--darklight', '#fff');
		document.querySelector(':root').style.setProperty('--darklight-blue', '#c7dffc');
		document.querySelector(':root').style.setProperty('--darklight-opacity', '#ffffff99');
		document.querySelector(':root').style.setProperty('--darklight-opacity-fbgb', '#ffffffde');
		document.body.style.color = "#000"
		localStorage.darkMode = 'no';
	}
}

function checkdarklight() {
	var checkBox = document.getElementById("myCheck");
	if (localStorage.darkMode == 'yes') {
		document.querySelector(':root').style.setProperty('--darklight', '#333');
		document.querySelector(':root').style.setProperty('--darklight-blue', '#11243d');
		document.querySelector(':root').style.setProperty('--darklight-opacity', '#33333399');
		document.querySelector(':root').style.setProperty('--darklight-opacity-fbgb', '#333333de');
		document.body.style.color = "#FFF";
		checkBox.checked = true;
	}
}

function currentTime() {
	var date = new Date(); /* creating object of Date class */
	var hour = date.getHours();
	var min = date.getMinutes();
	var midday = "AM";
	midday = (hour >= 12) ? "PM" : "AM"; /* assigning AM/PM */
	hour = (hour == 0) ? 12 : ((hour > 12) ? (hour - 12) : hour); /* assigning hour in 12-hour format */
	hour = updateTime(hour);
	min = updateTime(min);
	document.getElementById("clock").innerText = hour + ":" + min + " " + midday; /* adding time to the div */
	var t = setTimeout(currentTime, 1); /* setting timer */
}

function updateTime(k) {
	/* appending 0 before time elements if less than 10 */
	if (k < 10) {
		return "0" + k;
	} else {
		return k;
	}
}

currentTime();

function menu() {
	document.getElementById("cover").style.opacity = "1";
	document.getElementById("cover").style.pointerEvents = "auto";
}

function hidemenu() {
	document.getElementById("cover").style.opacity = "0";
	document.getElementById("cover").style.pointerEvents = "none";
}

function sdown() {
	window.close();
}

function notify(notifhead, notifbody) {
	var notif = document.createElement("div");
	notif.innerHTML = '<h4>' + notifhead + '</h4><p>' + notifbody + '</p>'
	document.getElementById("main").appendChild(notif);
	notif.classList.add("notif");
        notif.style.top = "10px";
	playAudio("Audio/notif.mp3");
	notif.onclick = function() {
		this.style.top = "-100px"
	};
}

function chromie() {
	var notif = document.createElement("div");
	notif.innerHTML = '<h4>Browser notice</h4><p>Please use Chrome or Opera for best performance</p>';
	document.getElementById("main").appendChild(notif);
	notif.classList.add("notif");
  notif.style.top = "10px";
	playAudio("Audio/notice.mp3");
	notif.onclick = function() {
		this.style.top = "-100px"
	};
}

function loader() {
	setTimeout(function() {
		document.getElementById("load").style.opacity = "0";
	}, 1000)
	if (localStorage.setupFinished == 'yes') {
		setTimeout(function() {
			document.getElementById("load").style.display = "none"
			document.getElementById("main").style.opacity = '1';
		}, 1300);
	} else {
		setTimeout(function() {
			document.getElementById("setuptos").style.opacity = '1';
		}, 1300);
	}
}

function functio() {
	initDragElement();
	initResizeElement();
};

function initDragElement() {
	var pos1 = 0,
		pos2 = 0,
		pos3 = 0,
		pos4 = 0;
	var popups = document.getElementsByClassName("popup");
	var elmnt = null;
	var currentZIndex = 100; //TODO reset z index when a threshold is passed

	for (var i = 0; i < popups.length; i++) {
		var popup = popups[i];
		var header = getHeader(popup);

		popup.onmousedown = function() {
			this.style.zIndex = "" + ++currentZIndex;
			for (i = 0; i < popups.length; i++) {
				popups[i].children[2].style.pointerEvents = "none";
			}
			this.children[2].style.pointerEvents = "auto";
		};

		if (header) {
			header.parentPopup = popup;
			header.onmousedown = dragMouseDown;
		}
	}

	function dragMouseDown(e) {
		elmnt = this.parentPopup;
		elmnt.style.zIndex = "" + ++currentZIndex;

		e = e || window.event;
		// get the mouse cursor position at startup:
		pos3 = e.clientX;
		pos4 = e.clientY;
		document.onmouseup = closeDragElement;
		// call a function whenever the cursor moves:
		document.onmousemove = elementDrag;
	}

	function elementDrag(e) {
		if (!elmnt) {
			return;
		}

		e = e || window.event;
		// calculate the new cursor position:
		pos1 = pos3 - e.clientX;
		pos2 = pos4 - e.clientY;
		pos3 = e.clientX;
		pos4 = e.clientY;
		// set the element's new position:
		elmnt.style.top = elmnt.offsetTop - pos2 + "px";
		elmnt.style.left = elmnt.offsetLeft - pos1 + "px";
	}

	function closeDragElement() {
		document.onmouseup = null;
		document.onmousemove = null;
	}

	function getHeader(element) {
		var headerItems = element.getElementsByClassName("popup-header");

		if (headerItems.length === 1) {
			return headerItems[0];
		}

		return null;
	}
}

function initResizeElement() {
	var popups = document.getElementsByClassName("popup");
	var element = null;
	var startX, startY, startWidth, startHeight;

	for (var i = 0; i < popups.length; i++) {
		var p = popups[i];

		var right = document.createElement("div");
		right.className = "resizer-right";
		p.appendChild(right);
		right.addEventListener("mousedown", initDrag, false);
		right.parentPopup = p;


		var bottom = document.createElement("div");
		bottom.className = "resizer-bottom";
		p.appendChild(bottom);
		bottom.addEventListener("mousedown", initDrag, false);
		bottom.parentPopup = p;

		var both = document.createElement("div");
		both.className = "resizer-both";
		p.appendChild(both);
		both.addEventListener("mousedown", initDrag, false);
		both.parentPopup = p;
	}

	function initDrag(e) {
		element = this.parentPopup;

		startX = e.clientX;
		startY = e.clientY;
		startWidth = parseInt(
			document.defaultView.getComputedStyle(element).width,
			10
		);
		startHeight = parseInt(
			document.defaultView.getComputedStyle(element).height,
			10
		);
		document.documentElement.addEventListener("mousemove", doDrag, false);
		document.documentElement.addEventListener("mouseup", stopDrag, false);
	}

	function doDrag(e) {
		element.style.width = startWidth + e.clientX - startX + "px";
		element.style.height = startHeight + e.clientY - startY + "px";
	}

	function stopDrag() {
		document.documentElement.removeEventListener("mousemove", doDrag, false);
		document.documentElement.removeEventListener("mouseup", stopDrag, false);
	}
}
document.onclick = hideMenu;
document.oncontextmenu = rightClick;

function hideMenu() {
	document.getElementById("contextMenu").style.display = "none"
}

function rightClick(e) {
	e.preventDefault();

	if (document.getElementById("contextMenu").style.display == "block") {
		hideMenu();
	} else {
		var menu = document.getElementById("contextMenu");
		menu.style.display = 'block';
		menu.style.left = e.pageX + "px";
		menu.style.top = e.pageY + "px";
	}
}

function appmenushow() {
	document.getElementById("appmenu").style.display = "block";
	setTimeout(function() {
		document.getElementById("appmenu").style.opacity = "1";
		document.getElementById("appmenu").style.bottom = "100px";
	}, 100);
}

function appmenuhide() {
	setTimeout(function() {
		document.getElementById("appmenu").style.opacity = "0";
		document.getElementById("appmenu").style.bottom = "-100%";
		setTimeout(function() {
			document.getElementById("appmenu").style.display = "none";
		}, 500);
    }, 100);
}

function capture() {
	html2canvas(document.body).then((canvas) => {
		let a = document.createElement("a");
		a.download = "tscrot.png";
		a.href = canvas.toDataURL("image/png");
		a.click(); // MAY NOT ALWAYS WORK!
	});
}

function fnBrowserDetect() {

	let userAgent = navigator.userAgent;

	if (userAgent.match(/chrome|chromium|crios/i)) {} else {
		notify("Browser Notice", "Your browser is not currently supported by TovinOS. Please download Chrome, Edge, or Opera for optimal performance.");
	}
}

function playAudio(soundUrl) {
	audio = new Audio();
	audio.src = soundUrl;
	audio.load()
	audio.play()
}

function getFileForElement(file, elname) {
	var xhr = new XMLHttpRequest();
	xhr.open('get', file, true);
	xhr.onreadystatechange = function() {
		if (xhr.readyState == 4 && xhr.status == 200) {
			document.querySelector(elname).innerHTML = xhr.responseText;
		}
	}
	xhr.send();
}

function maximize(btn) {
	btn.parentNode.parentNode.children[2].style.pointerEvents = "none";
	setTimeout(function() {
		btn.parentNode.parentNode.classList.toggle("maximized")
	}, 100);
	btn.parentNode.parentNode.children[2].style.pointerEvents = "auto";
}

function installapp(package, bclck) {
    document.getElementById(package).style.display = "initial";
	bclck.parentNode.parentNode.children[3].style.display = "initial";
	bclck.style.display = "none";
	installedapps.push(package)
	localStorage.installedapps = JSON.stringify(installedapps);
}

function uninstallapp(package, bclck) {
    document.getElementById(package).style.display = "none";
	bclck.parentNode.parentNode.children[2].children[0].style.display = "initial";
	bclck.parentNode.style.display = "none";
	installedapps.splice(installedapps.indexOf(package), 1);
	localStorage.installedapps = JSON.stringify(installedapps);
}

function check() {
	appname = document.querySelectorAll('.appname');
	for (i = 0; i < installedapps.length; i++) {
		for (g = 0; g < appname.length; g++) {
			if (appname[g].innerHTML == installedapps[i]) {
				appname[g].parentNode.children[2].children[0].style.display = "none"
				appname[g].parentNode.children[3].style.display = "initial"
			}
		}
	}
}

function searchstore() {
    var input, filter, ul, li, a, i, txtValue;
    input = document.getElementById("search");
    filter = input.value.toUpperCase();
    ul = document.getElementById("myUL");
    li = ul.getElementsByTagName("li");
    for (i = 0; i < li.length; i++) {
        a = li[i].getElementsByTagName("span")[0];
        txtValue = a.textContent || a.innerText;
        if (txtValue.toUpperCase().indexOf(filter) > -1) {
            li[i].style.display = "";
        } else {
            li[i].style.display = "none";
        }
    }
}

function unlock() {
    pswd = document.getElementById('pwdenter').value;
    if (pswd == localStorage.pwd){
	document.getElementById('lscrn').style.display = "none";
	playAudio("Audio/login.mp3")
    }
}

function bypassUnlockScreen() {
	document.getElementById('lscrn').style.display = "none";
}