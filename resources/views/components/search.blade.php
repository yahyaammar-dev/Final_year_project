<div class="container searchresult">
    <div class="row">
        <div class="panel panel-default">
            <div class="panel-body header__icons">
                <div class="form-group header__search">
                    <input type="text" class="form-controller header__searchfield header__searchfieldn" id="search" name="search" ></input>
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
$('#search').on('keyup', function() {
    $value = $(this).val();
    $.ajax({
        type: 'get',
        url: 'http://localhost:8001/search',
        data: {
            'search': $value
        },
        success: function(data) {
            $('tbody').html(data);
        }
    });
})
</script>
<script type="text/javascript">
$.ajaxSetup({
    headers: {
        'csrftoken': '{{ csrf_token() }}'
    }
});
</script>