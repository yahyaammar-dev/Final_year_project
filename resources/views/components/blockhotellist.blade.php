<h1 class="relatedhotels">Related Hotels</h1>
<section class="blockscontainer">
    <div class="blocks">
        <div class="blocks__list" style="flex-wrap: nowrap">
    <?php
        foreach($hotel as $item){
            ?>
            <div class="blockhotel" style="width: 40%;">
                <?php
                $url =  "images/" . $item["image"][0]["url"];
                ?>
                <img src="<?php echo $url; ?>" alt="" class="blocks__image">
                <div class="block__info">
                    <p class="blocks__id">   <?php  echo $item[0]["id"]; ?>  </p>
                    <p class="blocks__name"> <?php  echo '<p>' . $item[0]["name"] . '</p>'; ?>  </p>
                    <p class="blocks__description"> <?php   echo '<p>' . $item[0]["description"] . '</p>';   ?>  </p>
                    <p class="blocks__price"> <?php    echo '<p>' . $item[0]["price"] . '</p>';   ?>  </p>
                    <p class="blocks__phone">   <?php   echo '<p>' . $item[0]["phone"] . '</p>';   ?>    </p>
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
        $(document).ready(function(){
            $(".blockhotel").click(function(){
                var id = $(this).find(".blocks__id").text();
                console.log(id)
                id = parseInt(id);
                let  url =  "http://localhost:8001/hoteldetail/"+id;
                
                window.location.href= url;

         
            })
        })
</script>