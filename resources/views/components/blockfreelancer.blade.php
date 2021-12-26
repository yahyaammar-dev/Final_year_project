
      
    <div class="block">
        <img src="{{URL('images/product.jpg')}}" alt="" class="blocks__image">
        <div class="block__info">
            <p class="blocks__id">{{$dest['id']}}</p>
            <p class="blocks__name">{{$dest['name']}}</p>
            <p class="blocks__description">{{$dest['description']}} pkr</p>
            <p class="blocks__price">{{$dest['price']}}</p>
            <p class="blocks__type">{{$dest['type']}}</p>
            <pre class="blocks__ratings"></pre>
        </div>
    </div>
 
     

<script>

        $(document).ready(function(){
            $(".block").click(function(){
                var id = $(this).find(".blocks__id").text();
                $.ajax({
                url: "http://localhost:8001/freelancerdetail",
                data: {
                    id: id
                },
                success: function(data) {
                    console.log(data)
                }
                });
            })
        })

</script>

