<h1 class="reviews__heading">Reviews</h1>



<?php 
    
    $user = session('user');
    if(isset($user)){
     
      
      ?>


      

      <form method="POST" class="reviews__form" action="http://localhost:8001/submitreview">

      <div class="reviews__center">        
        <input type="text" name="id" class="id reviews__hidden"/>
        <input type="text" name="type" value="destination" class="destination reviews__hidden"/>
        <label for="content">Text</label>
        <input type="text" name="content" /><br>
        <label for="rating">Rating</label>
        <input type="range" name="rating" min="0" max="5"/><br>
        <input type="text" name="author" class="reviews__hidden author" step="0.5"/><br>
        <input type="text" name="email" class="reviews__hidden email"/><br>
        <input type="submit" name="submit" value="submit" class="submit" />
      </div>

   

      </form>


      <?php
    }
  

?>


<script>

      $(document).ready(function(){
        
          let data = @json($user);
          let name = data["name"]
          let email = data["email"]

          let id = @json($id);


          $(".author").val(name)
          $(".email").val(email)
          $(".id").val(id)
    
      })    

</script>


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


