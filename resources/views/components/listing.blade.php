<div class="listing__main">
    <x-sidebar />
    <div class="listing__content">

        @foreach($dest as $item)
        <x-block :dest="$item"/>
        @endforeach

        <script>
                let blocks = $(".block");
                for(let i=0; i<blocks.length; i++){
                    blocks[i].addEventListener('click',function(){
                        let ide = this.querySelector(".blocks__id").textContent
                        $.ajax({
                            url:"http://localhost:8001/saveid",
                            data:{id:ide},
                            success: function(data){
                                window.location.replace("http://localhost:8001/destinations");
                            }
                        });
                    });
                }
        </script>
    
    </div>
</div>