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

    <form accept-charset="UTF-8" action="" class="form-inline"  method="post">
  <table width="340" height="82" border="0">
    <tr>
      <td><div align="right">หมุ่บ้าน :</div></td>
      <td><input   name="home_village_name" placeholder="ชื่อหมู่บ้าน"  type="text" id="home_village_name"/></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td><input name="commit" type="submit" value="เพิ่ม" id="commit"/>
      <input  name="commit2" type="reset" value="ยกเลิก"/></td>
    </tr>
  </table>
</form>
    
    
</body>
</html>
