<h1 class="blocks__realtedproducts">Related Products</h1>


<section class="relatedblockscontainer">
    <div class="relatedblocks">
        <div class="relatedblocks__list">
            <?php 
        foreach($product as $item){
            $url =  "images/" . $item[0]["image"][0]["url"];
        ?>
            <div class="block">
                <img src="<?php echo $url; ?>" alt="" class="blocks__image">
                <div class="block__info">
                    <p class="blocks__id"> <?php  echo  $item[0]["data"][0]["id"] ; ?> </p>
                    <p class="blocks__name"> <?php  echo  $item[0]["data"][0]["name"] ; ?> </p>
                    <p class="blocks__description"> <?php   echo  $item[0]["data"][0]["description"] ;   ?> </p>
                    <p class="blocks__price"> <?php    echo  $item[0]["data"][0]["price"] ;   ?> </p>
                    <p class="blocks__phone"> <?php   echo  $item[0]["data"][0]["type"] ;   ?> </p>
                    <pre class="blocks__ratings"></pre>
                </div>
            </div>
            <?php  
        }
?>
        </div>
    </div>
</section>

<script>
$(document).ready(function() {
    $(".block").click(function() {
        var id = $(this).find(".blocks__id").text();

            id = parseInt(id);

           let url = "http://localhost:8001/productdetail/" + id; 
            window.location.href = url;

    })
})
</script>