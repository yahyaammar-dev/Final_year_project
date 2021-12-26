<h1>Reviews</h1>
<ul class="reviews">
<?php foreach($review as $rev){
  
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
    </li>
<?php
    } 
?>
</ul>