<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <x-require-links/>
    <title>Document</title>
</head>
<body>
    <div id="app">
        <x-header a="auth"/>
        <div class="messenger-outer">
            <div class="messenger-inner">
                <div class="show">
                    <div class="show-header">
                        <div class="user-id">
                            <span>
                                <img src="/" alt="/">
                            </span>
                            <span>
                                user name
                            </span>
                            <span>
                                ...
                            </span>
                        </div>
                    </div>
                    <div class="show-messages">
                        <div class="show-inner">
                            here messas
                        </div>
                    </div>
                    <div class="form">
                        <form id="messageForm">
                            <i class="fas fa-chat"></i>
                            <input type="text">
                            <i class="fas fa-papper-plane"></i>
                        </form>
                    </div>
                </div>
                <div class="people">

                </div>
            </div>
        </div>
    </div>
</body>
</html>