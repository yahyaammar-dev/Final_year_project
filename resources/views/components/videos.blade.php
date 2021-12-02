<section class="videosContainer">
    <div class="videos">
        <div class="videos__main">
            <div class="videos__playing">
                <iframe width="560" height="315" src="https://www.youtube.com/embed/_1KVl5bZF30" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
            <div class="videos__description">
                <h1 class="videos__title">{{$dataa[$id-1]['name']}}</h1>
                <h3 class="videos__date">{{$dataa[$id-1]['type']}}</h3>
                <h3 class="videos__weather">{{$dataa[$id-1]['weather']}} - <span class="videos__weatherlive">05</span>° C</h3>
                <h3 class="videos__city">{{$dataa[$id-1]['city']}}</h3>
                <p class="videos__descriptiontext">
                    {{$dataa[$id-1]['description']}}
                </p>
                <button type="submit" class="submit">Add to Cart</button>
            </div>
        </div>

        
<script>



  const form = document.querySelector(".top-banner form");
  const input = document.querySelector(".top-banner input");
  const list = document.querySelector(".ajax-section .cities");
  const apiKey = "4d8fb5b93d4af21d66a2948710284366";
  const element = document.querySelector(".videos__weatherlive");
  const city = document.querySelector(".videos__city").innerHTML;
                  
console.log(city)

  //ajax here
  const url = `https://api.openweathermap.org/data/2.5/weather?q=${city}&appid=${apiKey}&units=metric`;
  fetch(url)
    .then(response => response.json())
    .then(data => {
      const { main, name, sys, weather } = data;
      const icon = `https://s3-us-west-2.amazonaws.com/s.cdpn.io/162656/${
        weather[0]["icon"]
      }.svg`;
  
      const markup = `
        ${Math.round(main.temp)}
      `;
      console.log("The temperature is " + markup)
      element.innerHTML = markup;
  
    })
    .catch(() => {
      console.log("Please search for a valid city 😩");
    });










  </script>





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


