<?php
        for($i=0; $i<1; $i++){
            if($dest[0]['type']=='religious' || $dest[0]['type']=='Adventourous'){
                ?>

<div class="nintycenter">
    <h1 class="gall-h1">Top Destinations</h1>
</div>

<?php
            }
            else if($dest[0]['type']=='Shoes' || $dest[0]['type']=='Apparel'){
                ?>

<div class="nintycenter">
    <h1 class="gall-h1">Top Products</h1>
</div>

            <?php
            }
            else{
                ?>

<div class="nintycenter">
    <h1 class="gall-h1">Top Freelancers</h1>
</div>

<?php
    
            }
        }
        ?>


<section class="blockscontainer">
    <div class="blocks">
        <div class="blocks__list">
            @foreach ($dest as $item)
            <x-block :dest=$item />
            @endforeach
            <div class="blocks__seeall">
                <img src="{{URL('images/product.jpg')}}" alt="" class="blocks__image">
                <div class="block__info">
                    <button class="submit submit--fullwidth">See All</submit>
                </div>
            </div>
        </div>
    </div>
</section>