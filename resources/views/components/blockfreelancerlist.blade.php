<h1 class="relatedfreelancer__heading">Related freelancers</h1>

<section class="blockscontainer">
    <div class="blocks">
        <div class="blocks__list">

<?php
 
        foreach($freelancer as $item){
            ?>
            <div class="blockfreelancer">
                <?php
                $url =  "images/" . $item["image"][0]["url"];
                ?>
                <img src="<?php echo $url; ?>" alt="" class="blocks__image">
                <div class="block__info">
                    <p class="blocks__id">   <?php  echo  $item[0]["id"] ; ?>  </p>
                    <p class="blocks__name"> <?php  echo '<p>' . $item[0]["name"] . '</p>'; ?>  </p>
                    <p class="blocks__price"> <?php    echo '<p>' . $item[0]["price"] . '</p>';   ?>  </p>
                    <p class="blocks__phone">   <?php   echo '<p>' . $item[0]["phone"] . '</p>';   ?>    </p>
                    <pre class="blocks__ratings"></pre>
                </div>
            </div>
        <?php
        }
    
?>



<!-- 
</div>
        <button type="submit" class="submit">Load More</button>
    </div> -->
</section>



  
<script>
        $(document).ready(function(){
            $(".blockfreelancer").click(function(){
                var id = $(this).find(".blocks__id").text();
                console.log(id)
                id = parseInt(id);
                let  url =  "http://localhost:8001/freelancerdetail/"+id;
                
                window.location.href= url;

         
            })
        })
</script>