<div class="images">
    <div>
        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">

            <?php $i=0; ?>

            <?php foreach($images as $image){  
                
                $i++;
                
                ?>
            <div class="carousel-item  
            
            <?php 

if($i==1){
    echo "active";
}
                ?>
            
            ">
                <img class="images__image d-block w-100" src="<?php echo "http://localhost:8001/images/" . $image[0]["url"]; ?>" alt="First slide">
            </div>
            <?php  } ?>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
        </div>
    </div>
</div>