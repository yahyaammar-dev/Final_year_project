<div class="visainfo">
    <x-visasidebar />
    <div class="visainfo__ajaxblock">
        <div class="visainfo__main">
            <h2 class="visainfo__name">Heading 1</h2>
            <p class="visainfo__content">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Autem necessitatibus error reprehenderit molestias vero non, dicta unde, consequuntur ratione delectus, voluptatibus quos itaque dignissimos nostrum suscipit eveniet nemo incidunt ab?</p>
        </div>
    </div>
</div>

<script>
        let eles = document.querySelectorAll(".visasidebar__listitem");
        for(let i = 0; i<eles.length; i++){
            eles[i].addEventListener("click",function(){
                let country = this.innerHTML
                $.ajax({
                url: "http://localhost:8001/visac/",
                method: "POST",
                data: {"countryname":country},
                success: function(data){
                    var result = data.substring(1, data.length-1);
                    let obj = JSON.parse(result);
                    let name = obj["name"]
                    let content = obj["content"]
                    $(".visainfo__name").html(name);
                    $(".visainfo__content").html(content);
                }
                });
            })
        }
</script>