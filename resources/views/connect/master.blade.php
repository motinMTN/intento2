<!DOCTYPE html>
<html lang="en">
<head>
    <title>MyCsm - @yield('title')</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0m shrink-to-fit=no">    
    
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <link rel="stylesheet" href="{{ url('/static/css/connect.css?v='.time()) }}">

    <script src="https://kit.fontawesome.com/dd1ecc74eb.js" crossorigin="anonymous"></script>

</head>
<body>
    @section('content')    
    @show
</body>
</html>