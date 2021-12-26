<h1>Hotels</h1>
<section class="blockscontainer">
    <div class="blocks">
        <div class="blocks__list">
            @foreach ($blockhotels as $item)
            <?php 




    foreach($item as $it){
            ?>
            <div class="block">
                <img src="{{URL('images/product.jpg')}}" alt="" class="blocks__image">
                <div class="block__info">
                    <p class="blocks__id">{{$it['id']}}</p>
                    <p class="blocks__name">{{$it['name']}}</p>
                    <p class="blocks__description">{{$it['description']}} pkr</p>
                    <p class="blocks__price">{{$it['price']}}</p>
                    <p class="blocks__phone">{{$it['phone']}}</p>
                    <pre class="blocks__ratings"></pre>
                </div>
            </div>
        <?php } ?>
            @endforeach
        </div>
    </div>
</section>



<script>

        $(document).ready(function(){
            $(".block").click(function(){
                var id = $(this).find(".blocks__id").text();
                $.ajax({
                url: "http://localhost:8001/hoteldetail",
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

<!-- Algorithm 

        When this block is clicked then the id is selected and is passed to controller which gets the data of the specific hotel and redirect it to a view


    -->