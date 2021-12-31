<div>
    <!-- Be present above all else. - Naval Ravikant -->
</div>



<section class="videosContainer">
<div class="videos">
    <div class="videos__main">
        <div class="videos__playing">
            <iframe width="560" height="315" src="<?php echo $videos[0][0]; ?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
        <div class="videos__description">
            <h1 class="videos__id">{{$ida}}</h1>
            <h1 class="videos__title">{{$dataa[0]['name']}}</h1>
            <p class="videos__date">{{$dataa[0]['description']}}</p>
            <h3 class="videos__weather">{{$dataa[0]['price']}} 
            <h3 class="videos__city">{{$dataa[0]['phone']}}</h3>
            <h6 class="videos__city"><i>{{$dataa[0]['type']}}</i></h6>
            <button type="submit" class="addtocart submit">Add to Cart</button>
        </div>
    </div>

    <div class="slider" >        
    <?php 
        foreach($videos as $video){
            
            ?>
            <div class="videos__item videos__active">
                <iframe width="300" height="200" src="<?php echo $video[0]; ?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" class="videos__thumbnail" allowfullscreen></iframe>
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
            arrows: true,
            dots: true,
            responsive: [
            {
              breakpoint: 1024,
              settings: {
                slidesToShow: 3,
                slidesToScroll: 1,
                infinite: true,
                dots: true
              }
            },
            {
              breakpoint: 1000,
              settings: {
                slidesToShow: 2,
                slidesToScroll: 1
              }
            },
            {
              breakpoint: 700,
              settings: {
                slidesToShow: 1,
                slidesToScroll: 1
              }
            }
          ]

        });
    </script>
</div>
<!-- Walk as if you are kissing the Earth with your feet. - Thich Nhat Hanh -->
</section>



<script>
        $(document).ready(function() {
            $(".addtocart").click(function() {
            var id = $(".videos__id").text();
            var type="product";
            let mydata = {id:id, type:type};
            $.ajax({
                url: "http://localhost:8001/addtocart",
                method: "POST",
                data: {
                    info: mydata
                },
                success: function(data) {
                console.log(data)
                }
            });
            })
        })
    </script>



