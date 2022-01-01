

<div class="container searchresult">
    <div class="row">
        <div class="panel panel-default">
            <div class="panel-body header__icons">
                <div class="form-group header__search">
                    <input type="text" autocomplete="off" class="form-controller header__searchfield header__searchfieldn" id="search" name="search" ></input>
                </div>
                <table class="table table-bordered table-hover header__seachresult header__searchfieldn">
                    <tbody>
                    </tbody>
                </table>
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
            $('tbody').html(data);
            $('table').click(function(){     
            })



            $("table").on('click',function(){
         
         var currentRow=$(this).closest("tr"); 

         var tds = currentRow.find("td");


         console.log(tds.text())

        
    });




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