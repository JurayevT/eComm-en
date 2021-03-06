<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>

    {{-- bootstrap CSS --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    
    {{-- jQuery link --}}
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    
    {{-- bootstrap JS --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</head>
<body>

    {{ View::make('header') }}
    
    @yield('content')
    
    {{ View::make('footer') }}

    {{-- <script>
        $(document).ready( function()
        {
            $("button").click( function()
            {
                alert('jQuery is working!')
            })
        })
    </script> --}}
    
</body>
<style>
    .custom-product {
        /* height: 500px; */
    }
    img.slider-img {
        margin: 0 auto;
        height: 450px !important;
    }
    .slider-text {
        background-color: #3544355e !important;
    }
    .prevv {
        background: linear-gradient(to left, #ffffff, #5a5454) !important;
        opacity: .7 !important;
    }
    .nextt {
        background: linear-gradient(to right, #ffffff, #5a5454) !important;
        opacity: .7 !important;
    }
</style>
</html>