<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <x-require-links/>
    <link rel="stylesheet" href="{{asset('./css/accuil/header.css')}}">
    <link rel="stylesheet" href="{{asset('./css/auth/auth.css')}}">
    <title>Document</title>
</head>
<body>
    <div id="app">
        <x-header a="guest"/>
        <div class="auth-container log-con">
            <div class="inner">
                <div class="auth-header">
                    <i class="fas fa-sign-in-alt"></i>
                    <h2>
                        Connexion
                    </h2>
                </div>
                <x-auth.login/>
            </div>
        </div>
    </div>
    <script src="{{asset('./js/header.js')}}"></script>
    <script src="{{asset('./js/helpers.js')}}"></script>
</body>
</html>