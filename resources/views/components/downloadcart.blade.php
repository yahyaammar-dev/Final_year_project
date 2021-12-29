<div>
    <!-- Well begun is half done. - Aristotle -->
</div>


    <form method="POST" action="http://localhost:8001/test">
        <input type="text" name="d_id" class="iddd" value="123"/>
        <button class="submit downloadcontactdir">Download Contact Directory</button>
    </form>
    <?php 
    
    foreach($destinations as $d){
        $first = $d;
        break;
    }
    $id =  $first[0]->destination_id;

    ?>

    <script>

        var idd = {{$id}}
        
        $(document).ready(function(){
           $(".iddd").val(idd);
        })

    </script>


