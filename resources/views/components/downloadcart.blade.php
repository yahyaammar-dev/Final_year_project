<div>
    <!-- Well begun is half done. - Aristotle -->
</div>


    <form method="POST" action="http://localhost:8001/test">
        <input type="text" name="d_id" class="iddd addtocart__destination" value="123"/>
        <input type="text" name="div1" class="div1 addtocart__destination" />
        <input type="text" name="div2" class="div2 addtocart__destination" />
        <button class="submit downloadcontactdir">Download Contact Directory</button>
    </form>
    

    
    <?php 


    $id = 0;

    if(!empty($destinations)){

        $first = 0;    
        foreach($destinations as $d){
            $first = $d;
            break;
        }
        $id =  $first[0]->destination_id;

    }

    
    ?>

    <script>

        var idd = {{$id}}
        $(document).ready(function(){

            $(".downloadcontactdir").click(function(){

                $(".iddd").val(idd);
                $(".div1").val(div.innerHTML)
                $(".div2").val(div2.innerHTML)
            
            })

        })


    

    </script>