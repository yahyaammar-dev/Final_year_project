<section class="videosContainer">
    <div class="videos">
        <div class="videos__main">
            <div class="videos__playing">
                <iframe width="560" height="315" src="https://www.youtube.com/embed/_1KVl5bZF30" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
            <div class="videos__description">
                <h1 class="videos__title">{{$dataa[$id-1]['name']}}</h1>
                <h3 class="videos__date">{{$dataa[$id-1]['type']}}</h3>
                <h3 class="videos__weather">{{$dataa[$id-1]['weather']}} - 05° C</h3>
                <p class="videos__descriptiontext">
                    {{$dataa[$id-1]['description']}}
                </p>
                <button type="submit" class="submit">Add to Cart</button>
            </div>
        </div>
    
        <div class="slider" >        
        <?php 

                    foreach($videos as $video){
                        ?>
                        <div class="videos__item videos__active">
                            <iframe width="300" height="200" src="<?php echo $video[0]["url"]; ?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" class="videos__thumbnail" allowfullscreen></iframe>
                         </div>
                          <?php 
                        
                    }


        ?>

</div>





        <script>
            $('.slider').slick({
                infinite: true,
                slidesToShow: 3,
                slidesToScroll: 1,
                arrows: true
            });
        </script>

    </div>
    <!-- Walk as if you are kissing the Earth with your feet. - Thich Nhat Hanh -->
</section>