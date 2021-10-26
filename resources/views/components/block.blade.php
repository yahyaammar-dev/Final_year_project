<div class="block">
    <img src="{{URL('images/product.jpg')}}" alt="" class="blocks__image">
    <div class="block__info">    
        <p class="blocks__title">{{$dest['name']}}</p>
        <p class="blocks__price">{{$dest['price']}} pkr</p>
        <p class="blocks__category">{{$dest['type']}}</p>
        <p class="blocks__region">{{$dest['regions']}}</p>
        <p class="blocks__weather">{{$dest['weather']}}</p>
        <pre class="blocks__ratings"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star-half-alt"></i><i class="far fa-star"></i></pre>
    </div>
</div>


<script>
                                var id = '<?php echo  $dest['destination_id']; ?>';
                                $.ajax({
                                    url:"http://localhost:8001/Calculatereviews",
                                    data: {id: id},
                                    success: function(review){
                                        console.log(review)
                                    }
                                });
</script>




        if(review==0.5){
            $('.blocks__rating').html('<i class="fas fa-star-half-alt"></i>');
        }
        else if(review==1){
            $('.blocks__rating').html('<i class="fas fa-star">');      
        }
        else if(review==1.5){
            $('.blocks__rating').html('<i class="fas fa-star"><i class="fas fa-star-half-alt"></i>');      
        }
        else if(review==2){
            $('.blocks__rating').html('<i class="fas fa-star"><i class="fas fa-star-half-alt"></i>');      
        }
        else if(review==2.5){
            $('.blocks__rating').html('<i class="fas fa-star"><i class="fas fa-star"><i class="fas fa-star-half-alt"></i>');      
        }
        else if(review==3){
            $('.blocks__rating').html('<i class="fas fa-star"><i class="fas fa-star"><i class="fas fa-star">');      
        }
        else if(review==3.5){
            $('.blocks__rating').html('<i class="fas fa-star"><i class="fas fa-star"><i class="fas fa-star"><i class="fas fa-star-half-alt"></i>');      
        }
        else if(review==4){
            $('.blocks__rating').html('<i class="fas fa-star"><i class="fas fa-star"><i class="fas fa-star"><i class="fas fa-star">');      
        }
        else if(review==4.5){
            $('.blocks__rating').html('<i class="fas fa-star"><i class="fas fa-star"><i class="fas fa-star"><i class="fas fa-star"><i class="fas fa-star-half-alt"></i>');      
        }else{

        }