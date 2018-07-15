<!DOCTYPE html>
<html>
<body>
<body onload="getLocation()">

<p id="demo"></p>
<form accept-charset="UTF-8" action="http://rtp.in.th/wifi_home/admin/new.php" class="form-inline"  method="post">
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
    x.innerHTML = "<input   name='gps' type='text' value='"+position.coords.latitude+","+position.coords.longitude+"' />";
}
</script>

 <input name="commit" type="submit" value="OK" id="commit"/>
</form>
    
    
</body>
</html>
