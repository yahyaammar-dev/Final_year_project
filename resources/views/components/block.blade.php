<div class="block">
    <img src="{{URL('images/product.jpg')}}" alt="" class="blocks__image">
    <div class="block__info">
        <p class="blocks__id">{{$dest['destination_id']}}</p>
        <p class="blocks__title">{{$dest['name']}}</p>
        <p class="blocks__price">{{$dest['price']}} pkr</p>
        <p class="blocks__category">{{$dest['type']}}</p>
        <p class="blocks__region">{{$dest['regions']}}</p>
        <p class="blocks__weather">{{$dest['weather']}}</p>
        <pre class="blocks__ratings"></pre>
    </div>
</div>



<script>

    

    var id = '<?php echo  $dest['destination_id']; ?>';



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

            let ide = '<?php echo  $dest['destination_id']; ?>';
            
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