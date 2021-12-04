<div id="map" class="map">
    
    <!-- No surplus words or unnecessary actions. - Marcus Aurelius -->
</div>




  
    
  

<script>

    function initMap(){
        var location = {lat: <?php echo $dataa[0]["coordx"];?>, lng: <?php  echo $dataa[0]["coordy"]; ?>};
        var map  = new google.maps.Map(document.getElementById("map"),{
            zoom: 4,
            center: location
        });

    }    

</script>


<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyASBbUiwLFNlfD7VTbNxiODMx3jCv7qZ7M&callback=initMap"></script>

