<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup</title>

    <!-- Later Needs to be removed -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">

    <link rel="stylesheet" href="{{URL::asset('css/main.css')}}">
    <link rel="stylesheet" href="{{URL::asset('css/vendor/FontAwesome/Fontawesomecss/all.css')}}">

</head>
<body>

    <x-header />
    <x-hero />
    <!--Regions are optional -->
    <x-gallery />

    <!-- Destinations, products and freelancers blocks -->
    <?php
        if(count($dest)>0){
            $destination = $dest[0];
            $freelancer = $dest[1];
            $product = $dest[2];
        }
    ?>
    <x-blocks :dest="$destination"/>
    <x-blocks :dest="$product"/>
    <x-blocks :dest="$freelancer"/>
    
    <x-instatravelers />
    <x-footer />

    <script src="{{URL::asset('js/hamburger.js')}}"></script>
</body>
</html>