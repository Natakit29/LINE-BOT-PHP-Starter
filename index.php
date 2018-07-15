<!DOCTYPE html>
<html>
<body>
<body onload="getLocation()">

<p id="demo"></p>

<script>
var x = document.getElementById("demo");

function getLocation() {
    if (navigator.geolocation) {
        navigator.geolocation.getCurrentPosition(showPosition);
    } else { 
        x.innerHTML = "Geolocation is not supported by this browser.";
    }
}

function showPosition(position) {
    x.innerHTML = "" + position.coords.latitude + 
    "," + position.coords.longitude;
}
</script>

</body>
</html>
