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

<body>

    <x-header />
    <x-banner />
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
            $.ajax({
                url: "http://localhost:8001/filterdestination",
                data: {info: arr},
                success: function($dest) {
                    console.log($dest)
                    // let len = Object.entries($dest).length
                    // $(".listing__content").empty();
                    // $.each($dest, function() {
                    //     var name = this['name'];
                    //     var price = this['price'];
                    //     var type = this['type'];
                    //     var regions = this['region'];


                    //     $(".listing__content").append(`<div class="block">
                    //         <img src="{{URL('images/product.jpg')}}" alt="" class="blocks__image">
                    //         <div class="block__info">    
                    //             <p class="blocks__title">${name}</p>
                    //             <p class="blocks__price">${price} pkr</p>
                    //             <p class="blocks__category">${type}</p>
                    //             <p class="blocks__region">${regions}</p>
                    //             <pre class="blocks__ratings"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star-half-alt"></i><i class="far fa-star"></i></pre>
                    //         </div>
                    //     </div>
                    //     `);
                    // });

                }
            });
        });
    });
    </script>


    <script src="{{URL::asset('js/hamburger.js')}}"></script>
</body>

</html>