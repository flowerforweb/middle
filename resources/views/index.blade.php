<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <x-require-links/>
    <link rel="stylesheet" href="{{asset('./css/accuil/header.css')}}">
    <link rel="stylesheet" href="{{asset('./css/accuil/land.css')}}">

    <title>Document</title>
</head>
<body>
    <div id="app">
        @if(Auth()->check())
        <x-header a="auth"/>
        @else
        <x-header a="guest"/>
        @endif

        <div class="container">
            <div class="row-div">
                <div class="col-div">
                    
                </div>
                <div class="col-div">
                    
                </div>
                <div class="col-div">
                    
                </div>
            </div>
        </div>
        <div class="min-cont">
            <div class="inner-cont">
                <div class="box">

                </div>
            </div>
            <div class="inner-cont">
                <div class="box">
                    
                </div>
            </div>
            <div class="inner-cont">
                <div class="box">
                    
                </div>
            </div>
        </div>
        <div class="container">

        </div>
        <x-footer/>
    </div>
    <script src="{{asset('./js/header.js')}}"></script>
</body>
</html>