<div class="listing__main">
    <div class="listing__content">
    <?php for($i=0; $i<count($abc["product"]); $i++){ ?>

<script>
    var id = '<?php echo  $abc["product"][$i]['id']; ?>';
    $.ajax({
        url:"http://localhost:8001/Calculatereviews",
        data: {id: id},
        dataType: 'JSON',
        success: function(data){
            var rev = parseFloat(data['review']);
            if(rev>0 && rev<=0.5){
                rev = 0.5;
            }
            else if(rev>0.5 && rev<=1){
                rev =1;
            }
            else if(rev>1 && rev<=1.5){
                rev = 1.5
            }
            else if(rev>1.5 && rev<=2){
                rev = 2;
            }
            else if(rev>2 && rev<=2.5){
                rev = 2.5;
            }
            else if(rev>2.5 && rev<=3){
                rev = 3;
            }
            else if(rev>3 && rev<=3.5){
                rev = 3.5;
            }
            else if(rev>3.5 && rev<=4){
                rev = 4.5;
            }
            else{
                rev =0;
            }

            let ide = id;
            
            let allItem = $('.blocks__id');

            // for(let i=0; i<=allItem.length; i++){
            //     let current = this["url"].split('=')[1];
            // }


            let abc = document.querySelectorAll(".blocks__id");
            
            
            for(let i=0; i<=allItem.length-1; i++){
                let myid = parseInt(abc[i].textContent)
                if(myid==ide){
                    let ele = abc[i].nextElementSibling.nextElementSibling.nextElementSibling.nextElementSibling.nextElementSibling.nextElementSibling
                

                    if(rev==0.5){
                            console.log("0.5")
                            ele.innerHTML = "<i class=\"fas fa-star-half-alt\"></i>";
                    }
                    else if(rev==1){
                            console.log("1")
                            ele.innerHTML = "<i class=\"fas fa-star\"></i>";    
                    }
                    else if(rev==1.5){
                        if(ide==data['id']){
                            console.log("1.5")
                            ele.innerHTML = "<i class=\"fas fa-star\"></i><i class=\"fas fa-star\"></i><i class=\"fas fa-star-half-alt\"></i>";
                        }
                    }
                    else if(rev==2){
                        if(ide==data['id']){
                            console.log("2")
                            ele.innerHTML = "<i class=\"fas fa-star\"></i><i class=\"fas fa-star\"></i>";
                        }
                    }
                    else if(rev==2.5){
                        if(ide==data['id']){
                            console.log("2.5")
                            ele.innerHTML = "<i class=\"fas fa-star\"></i><i class=\"fas fa-star\"></i><i class=\"fas fa-star-half-alt\"></i>";
                        }
                    }
                    else if(rev==3){
                        if(ide==data['id']){
                            console.log("3")
                            ele.innerHTML = "<i class=\"fas fa-star\"></i><i class=\"fas fa-star\"></i><i class=\"fas fa-star\"></i>";
                        }
                    }
                    else if(rev==3.5){
                        if(ide==data['id']){
                            console.log("3.5")
                            ele.innerHTML = "<i class=\"fas fa-star\"></i><i class=\"fas fa-star\"></i><i class=\"fas fa-star\"></i><i class=\"fas fa-star-half-alt\"></i>";
                        }
                    }
                    else if(rev==4){
                        if(ide==data['id']){
                            console.log("4")
                            ele.innerHTML = "<i class=\"fas fa-star\"></i><i class=\"fas fa-star\"></i><i class=\"fas fa-star\"></i><i class=\"fas fa-star\"></i>";
                        }
                    }
                    else if(rev==4.5){
                        if(ide==data['id']){
                            console.log("4.5")
                            ele.innerHTML = "<i class=\"fas fa-star\"></i><i class=\"fas fa-star\"></i><i class=\"fas fa-star\"></i><i class=\"fas fa-star\"></i><i class=\"fas fa-star-half-alt\"></i>";
                        }
                    }
                    else if(rev==0){
                        if(ide==data['id']){
                            console.log("0")
                            ele.innerHTML('');
                        }
                    }
                    else{
                        if(ide==data['id']){
                            console.log("0.5")
                            ele.innerHTML = "<i class=\"fas fa-star-half-alt\"></i>";
                        }
                    }
                }

            }
        }
    });
</script>



    <div class="productsingle">

        <div class="block">
                <?php $url = "images/" . $abc["images"][$i][0]["url"];  ?>

            <img src="<?php echo $url; ?>" alt="" class="blocks__image">
            <div class="block__info">
                <p class="blocks__id"><?php echo $abc["product"][$i]["id"]; ?></p>
                <p class="blocks__title"><?php echo $abc["product"][$i]["name"];   ?></p>
                <p class="blocks__price"> <?php       echo $abc["product"][$i]["description"];   ?></p>
                <p class="blocks__category"> <?php       echo $abc["product"][$i]["price"];   ?></p>
                <p class="blocks__region"> <?php       echo $abc["product"][$i]["type"];   ?></p>
                <pre class="blocks__ratings"></pre>
            </div>
        </div>

    </div>


    <script>

        $(document).ready(function(){
            $(".productsingle").click(function(){
                var id = $(this).find(".blocks__id").text();
                console.log(id)
                id = parseInt(id);
                let  url =  "http://localhost:8001/productdetail/"+id;
                
                window.location.href= url;

            })
        })

    </script>

<?php 

}



    ?>


    </div>
</div>





