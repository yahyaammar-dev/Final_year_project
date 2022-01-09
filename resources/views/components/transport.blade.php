<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false&v=3&libraries=geometry"></script>
    <div class="transport">
        <h1 class="transport__head">Calculate Fuel cost</h1>

            <select name="cars" id="cars">
                <option value="70">70 cc</option>
                <option value="150">150 cc</option>
                <option value="250">250 cc</option>
                <option value="660">660 cc</option>
                <option value="1000">1000 cc</option>
                <option value="1800">1800 cc</option>
                <option value="2500">2500 cc</option>
            </select>
            <button class="submit sub">Submit</button>

            <form method="get" class="sendcheckoutdata" action="http://localhost:8001/checkout">
                <input type="text" name="cost" class="costinput" />
                <input type="text" name="products" class="productsinput" />
                <input type="submit" class="submit checkoutsend"/>
            </form>

        <?php

            $first;
            foreach($destinations as $d){
                $first = $d;
                break;
            }


            $firstlat = $first[0]->coordx;
            $firstlon = $first[0]->coordy;
            

        ?>


            <div id="location"></div>
            <div id="location2"></div>


<script>



            var userlat;
            var userlong;


            let jfirstlat  = @json($firstlat);
            let jfirstlon  = @json($firstlon);




            var div  = document.getElementById("location");
            var div2  = document.getElementById("location2");
            function getLocation() {
            if (navigator.geolocation) {
                navigator.geolocation.getCurrentPosition(showPosition, showError);
            } else {
                alert("Your borwser doesn't support geolocation so you can't get estimate of the fuel for your vehicle");
            }
            }

            function showPosition(position) {            
                userlat = position.coords.latitude;
                userlong = position.coords.longitude;

                const p1 = {lat:jfirstlat, lng:jfirstlon};
                const p2 = {lat:userlat, lng:userlong};

                dis  = getDistance(p1,p2)/1000;

                dis = Math.round(dis * 100) / 100

                div.innerHTML="The distance from your location to your destination is: " + dis + " kms away ";

                function rad(x) {
                return x * Math.PI / 180;
                };

                function getDistance(p1, p2) {
                var R = 6378137; // Earth’s mean radius in meter
                var dLat = rad(p2.lat - p1.lat);
                var dLong = rad(p2.lng - p1.lng);
                var a = Math.sin(dLat / 2) * Math.sin(dLat / 2) +
                    Math.cos(rad(p1.lat)) * Math.cos(rad(p2.lat)) *
                    Math.sin(dLong / 2) * Math.sin(dLong / 2);
                var c = 2 * Math.atan2(Math.sqrt(a), Math.sqrt(1 - a));
                var d = R * c;
                return d; // returns the distance in meter
                };

            var enginePower;
            document.querySelector(".sub").addEventListener("click", function(event){
                event.preventDefault()
                var enginePower = document.getElementById("cars").value;

                console.log("Engine power is " + enginePower + " and the distance is " + dis)


                var x;

                if(enginePower==70){
                    x = dis/70;
                }else if(enginePower==150){
                    x = dis/55;
                }else if(enginePower==250){
                    x = dis/35;
                }else if(enginePower==660){
                    x = dis/15;
                }else if(enginePower==1000){
                    x = dis/13;
                }else if(enginePower==1500){
                    x = dis/10;
                }else if(enginePower==1800){
                    x = dis/8;
                }else if(enginePower==2500){
                    x = dis/6;
                }else{
                    console.log("sorry")
                }

            

                let fuelprice = Math.round(x * 100) / 100

                console.log(fuelprice)

                div2.innerHTML = "The fuel you need is " + x + " and the price of the fuel is " + fuelprice



                let cost = <?php echo json_encode($costs); ?>


                console.log("The two variables to be sent are:  " +  fuelprice + "   Cost is:   " +  cost )


                //change this cost variable to only to the value of products
                $(".costinput").val(cost)
                $(".productsinput").val(arr.toString())

            });
            }

            function showError(error) {
                if(error.PERMISSION_DENIED){
                    div.innerHTML = "The User have denied the request for Geolocation.";
                }
            }
            getLocation();

            </script>
        
        <div class="transport">
            <div class="transport__cost">
                <h2 class="transport__costhead">Total Cost: {{$costs}} pkr</h2>
            </div>
        </div>

        <div class="buttons">

        <button class="submit movetocheckout">Move To checkout</button>

        <script>
            $(".movetocheckout").click(function(){
                    $(".sendcheckoutdata").submit();          
            })
        </script>



<div>
    <!-- Well begun is half done. - Aristotle -->
</div>


    <form method="POST" action="http://localhost:8001/test">
        <input type="text" name="d_id" class="iddd addtocart__destination" value="123"/>
        <input type="text" name="div1" class="div1 addtocart__destination" />
        <input type="text" name="div2" class="div2 addtocart__destination" />
        <button class="submit downloadcontactdir">Download Directory</button>
    </form>
    

    </div>

    
    <?php 
        $id = 0;
        if(!empty($destinations)){
            $first = 0;    
            foreach($destinations as $d){
                $first = $d;
                break;
            }
            $id =  $first[0]->destination_id;
        }
    ?>

    <script>

        var idd = {{$id}}
        $(document).ready(function(){
            $(".downloadcontactdir").click(function(){

                $(".iddd").val(idd);
                $(".div1").val(div.innerHTML)
                $(".div2").val(div2.innerHTML)

            })
        })
    </script>



    </div>