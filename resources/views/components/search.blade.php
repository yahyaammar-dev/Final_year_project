

<div class="container searchresult">
    <div class="row">
        <div class="panel panel-default">
            <div class="panel-body header__icons">
                <div class="form-group header__search">
                    <input type="text" autocomplete="off" class="form-controller header__searchfield header__searchfieldn" id="search" name="search" ></input>
                </div>
                <div class="mydiv">
                    
                </div>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript">




var typingTimer;                //timer identifier
var doneTypingInterval = 1500;  //time in ms, 5 second for example
var $input = $('#myInput');

//on keyup, start the countdown
$('#search').on('keyup', function () {
  clearTimeout(typingTimer);
  typingTimer = setTimeout(doneTyping, doneTypingInterval);
});

//on keydown, clear the countdown 
$('#search').on('keydown', function () {
  clearTimeout(typingTimer);
});

//user is "finished typing," do something
function doneTyping () {
    let value = $('#search').val();
    console.log(value);
    
    $.ajax({
        type: 'get',
        url: 'http://localhost:8001/search',
        data: {
            'search': value
        },
        success: function(data) {

            
            let i=0;
            let arr = [];
            $(data).each(function(){
                let id =  $(this)[0]["destination_id"]
                let name = $(this)[0]["name"]
                let temp = [id, name]
                i++
                arr[i]= temp;
            })


            let output;
            for(i=0; i<arr.length-1; i++){
                output = output + ('<p>'+arr[i+1]+'</p>')          
            }

            $(".mydiv").html(output)

            let eles = document.querySelectorAll(".mydiv p")

            for(let i =0; i<eles.length; i++){
               eles[i].addEventListener("click", function(){
                   let text = eles[i].innerHTML;
                   let ide = parseInt(text[0])

                   $.ajax({
                    url:"http://localhost:8001/saveid",
                    data:{id:ide},
                    success: function(data){
                        window.location.replace("http://localhost:8001/destinations");
                    }
                });


               });
            }

        }
    });
}




</script>
<script type="text/javascript">
$.ajaxSetup({
    headers: {
        'csrftoken': '{{ csrf_token() }}'
    }
});
</script>