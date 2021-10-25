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

