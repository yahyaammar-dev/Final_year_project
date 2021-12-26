


<section class="blockscontainer">
    <div class="blocks">
        <div class="blocks__list">

<?php
    for($i=0; $i<count($product); $i++){
        foreach($product[$i][0] as $item){
            ?>
            <div class="block">
                <?php
                $url =  "images/" . $item[0]["url"];
                ?>
                <img src="<?php echo $url; ?>" alt="" class="blocks__image">
                <div class="block__info">
                    <p class="blocks__id">   <?php  echo '<p>' . $item[0]["id"] . '</p>'; ?>  </p>
                    <p class="blocks__name"> <?php  echo '<p>' . $item[0]["name"] . '</p>'; ?>  </p>
                    <p class="blocks__description"> <?php   echo '<p>' . $item[0]["description"] . '</p>';   ?>  </p>
                    <p class="blocks__price"> <?php    echo '<p>' . $item[0]["price"] . '</p>';   ?>  </p>
                    <p class="blocks__phone">   <?php   echo '<p>' . $item[0]["type"] . '</p>';   ?>    </p>
                    <pre class="blocks__ratings"></pre>
                </div>
            </div>
        <?php
        }
    }
?>




</div>
        <button type="submit" class="submit">Load More</button>
    </div>
</section>



  
<script>
        $(document).ready(function(){
            $(".block").click(function(){
                var id = $(this).find(".blocks__id").text();
                $.ajax({
                url: "http://localhost:8001/productdetail",
                data: {
                    id: id
                },
                success: function(data) {
                    console.log(data)
                }
                });
            })
        })
</script>