<div>
    <!-- Well begun is half done. - Aristotle -->
</div>


    <form method="POST" action="http://localhost:8001/test">
        <input type="text" name="d_id" class="iddd" value="123"/>
        <button class="submit downloadcontactdir">Download Contact Directory</button>
    </form>
    
    
    <form method="POST" action="http://localhost:8001/cartdownload">
        <input type="text" name="cart_d" class="iddd" value="123"/>
        <button class="submit downloadcontactdir">Download Contact Directory</button>
    </form>
    
    
    <?php 

    if(!empty($destination)){

        $first = 0;
        
        foreach($destinations as $d){
            $first = $d;
            break;
        }
        $id =  $first[0]->destination_id;

    }

    $id = 0;

    ?>

    <script>

        var idd = {{$id}}
        
        $(document).ready(function(){
           $(".iddd").val(idd);

        })

    </script>