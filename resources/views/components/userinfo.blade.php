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
<!-- 

<section class="pastorders">

</section>


<script>

    let eles;
    let i=0; 
    let ids;

</script>


<?php 


 

    for($i=0; $i<count($productqw); $i++){
       
        $heading =  '<h1>' . "Order: " . '</h1>';

        echo $heading;
        $arr = $productqw[$i]["product_ids"];

        $arr = explode (",", $arr); 

        foreach($arr as $item){

            echo $item;
?>
<script>

                    var id = <?php echo $item; ?>;

                    $.ajax({
                            url:"http://localhost:8001/productdetailgetter/",
                            method: "POST",
                            data: {"proid": id},
                            success: function(data){
                                console.log(data)
                            }
                        })  

</script>
<?php 
        }

?>
        <?php 
    }
?> -->
