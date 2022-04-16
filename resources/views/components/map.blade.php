



<?php

        $i=0;
        while(true){
            if(isset($dataa[$i])){
                echo $i;
                break;
            }
            $i++;
        }
       
 



?>







<div id="map" class="map">
    
    <!-- No surplus words or unnecessary actions. - Marcus Aurelius -->
</div>




  
<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD4mwO4q3Q57vRgF2ezvpJ5jaevRxihdac&callback=initMap"></script>


    
  

<script>


        let map;
        function initMap() {
        map = new google.maps.Map(document.getElementById("map"), {
            center: {lat: <?php echo $dataa[$i]["coordx"];?>, lng: <?php  echo $dataa[$i]["coordy"]; ?>},
            zoom: 10,
        });
      

        new google.maps.Marker({
            position: {lat: <?php echo $dataa[$i]["coordx"];?>, lng: <?php  echo $dataa[$i]["coordy"]; ?>},
            map
        });

      
        }



</script>








