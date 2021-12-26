<div>
    <!-- Very little is needed to make a happy life. - Marcus Antoninus -->
</div>






<h1>Reviews</h1>
<ul class="reviews">
<?php foreach($reviews as $rev){
  
?>
    <li class="reviews__listitem">
        <div class="reviews__listitemcontent">
            <i class="reviews__listitemicon fas fa-bars"></i>
        </div>
        <div class="review__text">
            <p>
                <?php 
                     ?> <h4> <?php echo $rev[0]["author"];?> </h4> <?php
                     echo $rev[0]["text"];
                ?>
            </p>
        </div>
        <div class="review__rating"><?php echo $rev[0]["rating"];?></div>
        <div class="review__email"><?php echo $rev[0]["email"];?></div>

    </li>
<?php
    } 
?>
</ul>