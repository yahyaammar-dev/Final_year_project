<h1 class="reviews__heading">Reviews</h1>
<ul class="reviews slidert">


<?php foreach($review as $rev){
  
  ?>
    <div>
      <li class="reviews__listitem videos__item videos__active">
          <div class="review__text">
              <p>
                  <?php 
                       ?> <h4> <?php echo $rev[0]["author"];?> </h4> <?php
                       echo '<p>' . $rev[0]["type"] . '</p>';
                       echo '<p>' . $rev[0]["rating"] . '</p>';
                       echo '<p>' . $rev[0]["text"] . '</p>';
                  ?>
              </p>
          </div>
      </li>
    </div>
  <?php
      } 
  ?>



</ul>



<script>
        $('.slidert').slick({
            dots: true,
            infinite: true,
            slidesToShow: 1,
            slidesToScroll: 1,
            arrows: true
          

        });
        </script>


