<div class="listing stories">
    <?php
    
    foreach($av as $item){

        ?>

        <div class="stories__card">

        <?php
        echo '<h1 class="blogged_id">' . $item["blog_id"] . '</h1>';
        echo '<h1>' . $item["name"] . '</h1>';
        echo '<br>';
        echo $item["content"];
        echo '<br>';

    ?>
        </div>

    <?php 

    }

    ?>


</div>


<script>

    let eles = document.querySelectorAll(".stories__card")
    console.log(eles)
    for(let i=0; i<eles.length; i++){
        eles[i].addEventListener('click',function(){
            let ele = this;
           
            let id =  ele.querySelector(".blogged_id").innerHTML   

            id = parseInt(id)

            let url = "http://localhost:8001/userstotydetail/"+id;

            window.location.href= url;

        })
    }

</script>