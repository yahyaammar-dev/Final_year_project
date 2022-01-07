<div>
    <!-- Simplicity is the essence of happiness. - Cedric Bledsoe -->
</div>

<div>
    <!-- Simplicity is an acquired taste. - Katharine Gerould -->
</div>

<div>
    <!-- People find pleasure in different ways. I find it in keeping my mind clear. - Marcus Aurelius -->
</div>










<?php



     echo '<h1>' . json_encode($products) . '</h1>'; ?>


<?php



    $phparr = [];
    $i=0;

    foreach($products as $d){   
  
            echo json_encode($d[0]);

            $phparr[$i] =$d[0]->id;
            $i++;


?>


<section class="cartitemcontainer">
    <div class="cartitem">
        <i class="fas fa-times cartitem__close"></i>
        <div class="cartitem__content">
            <img src="{{URL('images/product.jpg')}}" alt="" class="cartitem__image">
            <div class="cartitem__info">
                <h3 class="cartitem__heading id">{{$d[0]->id}}</h3>
               <h3 class="cartitem__heading">{{$d[0]->price}}</h3>
                <h5 class="cartitem__heading">{{$d[0]->name}}</h5>
                <p class="cartitem__title">{{$d[0]->type}}</p>
                <p>{{$d[0]->description}}</p>
                <pre class="cartitem__ratings"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star-half-alt"></i><i class="far fa-star"></i></pre>
            </div>
        </div>
    </div>
</section>








<?php


    }


    $List = implode(', ', $phparr);
  
  

    // Display the comma separated list

    echo '<p class="mylist">' . $List . '</p>';


?>



<script>

    var arr;

    arr = $(".mylist").html() 



</script>