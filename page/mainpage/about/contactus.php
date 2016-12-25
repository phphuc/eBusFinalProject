<?php
include_once "/home/s3568988/public_html/setting/config.php";
?>

<div class="container">
	<div class="row">
    	
        <div class="col-md-4 col-md-offset-1">
        	<h2>Members</h2>
           <ul class="list-group">
           	<li class="list-group-item">
            		<h4>To Quang Khai</h4>
                  <p>s3568988</p>
               </li>
               <li class="list-group-item">
            		<h4>Pham Hoang Phuc</h4>
                  <p>s3575984</p>
               </li>
               <li class="list-group-item">
            		<h4>Nguyen Huu Tai</h4>
                  <p>s3500271</p>
               </li>
           </ul>
       </div>
       
       <div id="map-container" class="col-md-6">
       	<script src="http://maps.google.com/maps/api/js?sensor=false"></script>	
			<script>	
 
      function init_map() {
		var var_location = new google.maps.LatLng(10.729243,106.696035);
 
        var var_mapoptions = {
          center: var_location,
          zoom: 20
        };
 
		var var_marker = new google.maps.Marker({
			position: var_location,
			map: var_map,
			title:"RMIT University Vietnam"});
 
        var var_map = new google.maps.Map(document.getElementById("map-container"),
            var_mapoptions);
 
		var_marker.setMap(var_map);	
 
      }
 
      google.maps.event.addDomListener(window, 'load', init_map);
 
    </script>
    
 <!--
	
<script>
function myMap() {
  var mapCanvas = document.getElementById("map-container");
  var mapOptions = {
    center: new google.maps.LatLng(10.729243,106.696035), zoom: 20
  };
  var map = new google.maps.Map(mapCanvas, mapOptions);
}
</script>
​
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBu-916DdpKAjTmJNIgngS6HL_kDIKU0aU&callback=myMap"></script>
	-->
       </div>
       
    </div>
</div>
