<div class="visainfo">
    <x-visasidebar />
    <div class="visainfo__ajaxblock">
        <div class="visainfo__main">
            <h2 class="visainfo__name">Afghanistan</h2>
            <p class="visainfo__content">Pakistan tourist visa from Afghanistan Pakistan tourist visa is required for Afghan citizens. The stay is usually short with a period of 90 days and visa expires in 180 days. Applicant is not required to be present when applying for Pakistan tourist visa. A total of 10 documents are required for applying Pakistan tourist visa. You can also find useful tips from fellow travellers. How to get Pakistan tourist visa from Afghanistan 1 Step 1 : Afghan citizens need to get a visa for Pakistan by going to the nearest embassy. 2 Step 2 : Fill the application form for Pakistan. 3 Step 3 : After filling, providing the required documents with your passport and make the payment and submit visa application at the embassy of Pakistan 4 Step 4 : Once the visa application for Pakistan is approved, you will be notified by e-mail. 5 Step 5 : Pickup your passport from Pakistan embassy 6 Step 6 : You can now travel to Pakistan and stay for the duration on your visa.</p>
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