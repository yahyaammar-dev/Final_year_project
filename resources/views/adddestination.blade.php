<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup</title>
    <link rel="stylesheet" href="{{URL::asset('css/main.css')}}">
    <link rel="stylesheet" href="{{URL::asset('css/vendor/FontAwesome/Fontawesomecss/all.css')}}">

    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>

    <link href="https://cdn.quilljs.com/1.2.2/quill.snow.css" rel="stylesheet">
        <script src="https://cdn.quilljs.com/1.2.2/quill.js"></script>


        <meta name="csrf-token" content="{{ csrf_token() }}">

</head>
<body>
    
    <x-header />
    <x-adddestinationform />
    <x-footer />
    

    <script src="{{URL::asset('js/hamburger.js')}}"></script>
</body>
</html>



