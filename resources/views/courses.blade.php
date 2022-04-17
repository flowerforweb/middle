<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <x-require-links/>
    <link rel="stylesheet" href="{{asset('./css/accuil/header.css')}}">
    <link rel="stylesheet" href="{{asset('./css/accuil/coursView.css')}}">
    <title>Courses</title>
</head>
<body>
    <div id="app">
        @if(Auth()->check())
        <x-header a="auth"/>
        @else
        <x-header a="guest"/>
        @endif

        <div class="land-div">
            <div class="inner">
                <h2>
                    Les cours de 1<sup>er</sup> Anee CEM de science
                </h2>
                <div class="search">
                    <form action="/" method="get">
                        <div class="form">
                            <div class="inner">
                                <input type="search" name="q" id="s" placeholder="Chercher des cours">
                                <button type="submit">
                                    <i class="fas fa-search"></i>
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <hr>
        </div>
        <div class="cours-view">
            <div class="cours">
                @if(count($courses) == 0)
                    <div class="alert">
                        NULL
                    </div>
                    
                @else
                    @php
                    $i = 0
                    @endphp
                    @foreach($courses as $c)
                    @php
                    $i++
                    @endphp
                        <x-cour-view :i="$i" :cour="$c"/>
                    @endforeach
                @endif
            </div>
        </div>
        <x-footer/>
    </div>
    <script src="{{asset('./js/header.js')}}"></script>
</body>
</html>