<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup</title>
    <!-- Later Needs to be removed -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
    </script>
    <link rel="stylesheet" href="{{URL::asset('css/main.css')}}">
    <link rel="stylesheet" href="{{URL::asset('css/vendor/FontAwesome/Fontawesomecss/all.css')}}">
</head>




<script>




function abc(){




let blocks = $(".block");
    for(let i=0; i<blocks.length; i++){
        blocks[i].addEventListener('click',function(){
            let ide = this.querySelector(".blocks__id").textContent
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




</script>



<body>


    <x-header />
    <x-banner :type="$type"/>
    <button class="sidebar__open" onclick="openNav()">☰</button>
    <x-listing :dest="$dest" />
    <x-footer />


    


    <script>
    $(document).ready(function() {
        $(".submit--filter").click(function() {
            let data = $(".sidebar__listradio")
            let arr = []
            for (i = 0; i < data.length; i++) {
                if (data[i].checked) {
                    arr.push(data[i].value)
                }
            }
            var filters = JSON.stringify(arr);
            let ids = [];
            $.ajax({
                url: "http://localhost:8001/filterdestination",
                data: {
                    info: filters
                },
                success: function(dest) {
                    let data = JSON.parse(dest)
                    let len = Object.entries(dest).length
                    $(".listing__content").empty();
                    $.each(data, function(index, jsonObject) {
                        $.each(jsonObject, function(key, val) {
                            //maintian a flag
                            let abc = false;
                            //check if array has number
                            for (let k = 0; k < ids.length; k++) {
                                if (ids[k] == key) {
                                    abc = true;
                                }
                            }
                            if (abc == false) {
                                ids.push(key)

                                // fethcing the data
                                var id = val['destination_id'];
                                window.eleid = id;
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

                                    let ide = data['id'];

                                    let allItem = $('.blocks__id');

                                    // for(let i=0; i<=allItem.length; i++){
                                    //     let current = this["url"].split('=')[1];
                                    // }


                                    let abc = document.querySelectorAll(".blocks__id");


                                    for(let i=0; i<=allItem.length-1; i++){
                                        let myid = parseInt(abc[i].textContent)
                                    
                                        if(myid==ide){
                                            let ele = abc[i].nextElementSibling.nextElementSibling.nextElementSibling.nextElementSibling.nextElementSibling
                                            

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


                                var id = val['destination_id']
                                var name = val['name'];
                                var price = val['price'];
                                var type = val['type'];
                                var regions = val['region'];
                                $(".listing__content").append(`<div class="block">
                                <img src="{{URL('images/product.jpg')}}" alt="" class="blocks__image">
                                <div class="block__info">    
                                    <p class="blocks__id">${id}</p>
                                    <p class="blocks__title">${name}</p>
                                    <p class="blocks__price">${price} pkr</p>
                                    <p class="blocks__category">${type}</p>
                                    <p class="blocks__region">${regions}</p>
                                    <pre class="blocks__ratings"></pre>
                                </div>
                            </div>
                            `);
                            




                            let blocks = $(".block");
        for(let i=0; i<blocks.length; i++){
            blocks[i].addEventListener('click',function(){
                let ide = this.querySelector(".blocks__id").textContent
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
                    });
                }
            });
        });
    });

    </script>
    <script src="{{URL::asset('js/hamburger.js')}}"></script>


    <script>

function abc(){


    console.log("I am calllllllllllllllllllllled")


    let blocks = $(".block");
        for(let i=0; i<blocks.length; i++){
            blocks[i].addEventListener('click',function(){
                let ide = this.querySelector(".blocks__id").textContent
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

    
    let blocks = $(".block");
        for(let i=0; i<blocks.length; i++){
            blocks[i].addEventListener('click',function(){
                let ide = this.querySelector(".blocks__id").textContent
                $.ajax({
                    url:"http://localhost:8001/saveid",
                    data:{id:ide},
                    success: function(data){
                        window.location.replace("http://localhost:8001/destinations");
                    }
                });
            });
        }

    </script>

</body>
</html>