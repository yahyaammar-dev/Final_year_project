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
            
           
            if(rev==0.5){
                if(ide==data['id']){
                    // $('div:contains("test")').css('background-color', 'red');
                    // $(".blocks__ratings({{$ide}})")
                    console.log("0.5")
                    $('.blocks__ratings').html('<i class="fas fa-star-half-alt"></i>');
                }
            }
            else if(rev==1){
                if(ide==data['id']){
                    console.log("1")
                    $('.blocks__ratings').html('<i class="fas fa-star"></i>');    
                }
            }
            else if(rev==1.5){
                if(ide==data['id']){
                    console.log("1.5")
                    $('.blocks__ratings').html('<i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star-half-alt"></i>');
                }
            }
            else if(rev==2){
                if(ide==data['id']){
                    console.log("2")
                    $('.blocks__ratings').html('<i class="fas fa-star"></i><i class="fas fa-star"></i>');
                }
            }
            else if(rev==2.5){
                if(ide==data['id']){
                    console.log("2.5")
                    $('.blocks__ratings').html('<i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star-half-alt"></i>');
                }
            }
            else if(rev==3){
                if(ide==data['id']){
                    console.log("3")
                    $('.blocks__ratings').html('<i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>');
                }
            }
            else if(rev==3.5){
                if(ide==data['id']){
                    console.log("3.5")
                    $('.blocks__ratings').html('<i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star-half-alt"></i>');
                }
            }
            else if(rev==4){
                if(ide==data['id']){
                    console.log("4")
                    $('.blocks__ratings').html('<i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>');
                }
            }
            else if(rev==4.5){
                if(ide==data['id']){
                    console.log("4.5")
                    $('.blocks__ratings').html('<i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star-half-alt"></i>');
                }
            }
            else if(rev==0){
                if(ide==data['id']){
                    console.log("0")
                    $('.blocks__ratings').html('');
                }
            }
            else{
                if(ide==data['id']){
                    console.log("0.5")
                    $('.blocks__ratings').html('<i class="fas fa-star-half-alt"></i>');
                }
            } 
        }
    });
</script>