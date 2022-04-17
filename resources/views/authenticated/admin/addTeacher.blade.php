<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <x-require-links />
    <link rel="stylesheet" href="{{asset('css/accuil/header.css')}}">
    <link rel="stylesheet" href="{{asset('css/auth/auth.css')}}">
    <title>Document</title>
</head>

<body>
    <div id="app">
        <x-header a="auth" />
        <div class="auth-container reg-con">
            <div class="inner">
                <div class="auth-header">
                    <i class="fas fa-sign-in-alt"></i>
                    <h2>
                        creé nouveau compte pour enseignante
                    </h2>
                </div>
                <form action="{{route('createTeacher')}}" class="reg-form" method="post">
                    @csrf
                    <div class="errors">
                        <ul>
                            @if ($errors->any())
                            @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                            @endforeach
                            @endif
                        </ul>
                    </div>
                    <input type="hidden" name="type">
                    <div class="inpt">
                        <i class="fas fa-user"></i>
                        <input type="text" name="name" id="name" placeholder="Ton Nom" required>
                        <span style="font-family : cursive">X</span>
                    </div>
                    <div class="inpt">
                        <i class="fas fa-envelope"></i>
                        <input type="email" name="email" id="email" placeholder="Ton Email" required>
                        <i class="fas fa-check i"></i>
                    </div>
                    <div class="inpt">
                        <i class="fas fa-lock"></i>
                        <select name="grade" style="background:none;border: none;outline:none">
                            <option value="" selected disabled>chose a grade</option>
                            <option value="2">2eme</option>
                            <option value="3">3eme</option>
                        </select>
                        <i class="fas fa-check i"></i>
                    </div>
                    <div class="inpt">
                        <i class="fas fa-lock"></i>
                        <input type="password" name="password" id="password" placeholder="Ton Password" required>
                        <i class="fas fa-check i"></i>
                    </div>
                    <div class="inpt">
                        <i class="fas fa-lock"></i>
                        <input type="password" name="password_confirmation" id="password_confirmation" placeholder="Confirm Password" required>
                        <i class="fas fa-check i"></i>
                    </div>
                    <div class="sub">
                        <button id="sub">
                            create 
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script src="{{asset('./js/header.js')}}"></script>
</body>

</html>