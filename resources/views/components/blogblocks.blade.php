<section class="blockscontainer">
<div class="blocks blogblocks">
        <div class="blocks__list">


        <?php 
        foreach($blog as $bl){
            $url =  "images/" . $bl["image"][0]["url"];
        
?>
        <div class="blocks__item">
                <img src="<?php echo $url ?>" alt="" class="blocks__image">
                <p class="blocks__id">{{$bl[0]["blog_id"]}}</p>
                <p class="blocks__title">{{$bl[0]["name"]}}</p>
                <i class="blocks__author">{{$bl[0]["author"][0]["name"]}}</i>
                <pre class="blocks__category">{{$bl[0]["category"][0]["name"]}}</pre>
        </div>      
        <?php       
        }
        ?>



        </div>
        <button type="submit" class="submit">Load More</button>
    </div>
</section>






<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>


<script>
        $(document).ready(function(){
            $(".blocks__item").click(function(){
                
                console.log("clicked atleast")
                let id = $(this).find(".blocks__id").text()
                let data = @json($blog);
                
                for(var i=0; i<data.length; i++){
                    if(id==data[i][0]["blog_id"]){
                       
                        /*
                        $.ajax(
                           
                           url:"http://localhost:8001/blogdetail",
                           success: function(data){
                               console.log(data)
                           }
                        )
                        */
                   }
                }
            })
        })
        
</script>


<!--
when the user clicks on one of the blog get that id 
pass the $bl object to blogdetail page of that specific id 
show details there
    -->