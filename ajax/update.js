
function updateHeading() {
  var text = document.getElementById("text").value;

  var xhttp = new XMLHttpRequest();
  xhttp.open("POST", "/voting/ajax/update.php", true);

  xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");

  xhttp.onload = function () {
    alert(this.responseText);
    loadHeading(); 
  };

  xhttp.send("heading=" + encodeURIComponent(text));
}

function loadHeading() {
  var xhttp = new XMLHttpRequest();
  xhttp.open("GET", "/voting/ajax/get-heading.php", true);


  xhttp.onload = function () {
    
    var adminLive = document.getElementById("liveHeading");
    if (adminLive) {
      adminLive.innerText = this.responseText;
    }
  };

  xhttp.send();
}

window.onload = loadHeading;


setInterval(function() {
  var mainHeading = document.getElementById("mainHeading");
  if (mainHeading) {
    var xhttp = new XMLHttpRequest();
    xhttp.open("GET", "/voting/ajax/get-heading.php", true);

    xhttp.onload = function () {
      mainHeading.innerText = this.responseText;
    };
    xhttp.send();
  }
}, 1000);
