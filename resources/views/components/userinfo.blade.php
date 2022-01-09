<section class="userinfocontainer">
    <div class="userinfo">
        <div class="userinfo__ele">
            <h3 class="userinfo__head">Name: </h3> <p class="userinfor__text">{{$user['name']}}</p>
        </div>
        <div class="userinfo__ele">
            <h3 class="userinfo__head">Email: </h3> <p class="userinfor__text">{{$user['email']}}</p>
        </div>
        <div class="userinfo__ele">
            <h3 class="userinfo__head">Password: </h3> <p class="userinfor__text">{{$user['pass']}}</p>
        </div>
        <div class="userinfo__ele">
            <h3 class="userinfo__head">Phone: </h3> <p class="userinfor__text">{{$user['phone']}}</p>
        </div>
    </div>
</section>


<section class="pastorders">



</section>


<script>

    let eles;
    let i=0; 
    let ids;

</script>


<?php 


    for($i=0; $i<count($productqw); $i++){
        echo $productqw[$i]."<br/>";


?>
        <script>
                eles = <?php echo $productqw[$i]; ?>;
                ids = eles["product_ids"].split(",")
                var parent = document.querySelector(".pastorders");
                var html = `<div class="order"> 
                    <h1>Order:</h1>
                `;
                for(let l=0; l<ids.length; l++){
                    $.ajax({
                        url:"http://localhost:8001/productdetailgetter/",
                        method: "POST",
                        data: {"proid": ids[l]},
                        success: function(data){
                            console.log(data)
                            html = html + data;
                        }
                    })
                }
                html = html + `</div>`;
                console.log(html)
        </script>
<?php 
    }
?>


