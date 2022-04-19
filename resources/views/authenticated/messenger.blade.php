<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <x-require-links />
    <link rel="stylesheet" href="{{asset('css/auth/messenger.css')}}">
    <title>Document</title>
</head>

<body>
    <div id="app">
        <x-header a="auth" />
        <div class="messenger-outer">
            <div class="messenger-inner">
                <div class="people">
                    <div class="people-inner">
                        <div class="people-header">
                            <form action="#">
                                <input type="text" placeholder="search friend">
                                <i class="fas fa-search"></i>
                            </form>
                        </div>
                        <div class="friends">
                            <a href="#">
                                <div class="friend">
                                    <span>
                                        <img src="https://www.attendit.net/images/easyblog_shared/July_2018/7-4-18/b2ap3_large_totw_network_profile_400.jpg" alt="/">
                                    </span>
                                    <span>
                                        name of user
                                    </span>
                                </div>
                            </a>
                            <a href="#">
                                <div class="friend">
                                    <span>
                                        <img src="https://www.attendit.net/images/easyblog_shared/July_2018/7-4-18/b2ap3_large_totw_network_profile_400.jpg" alt="/">
                                    </span>
                                    <span>
                                        name of user
                                    </span>
                                </div>
                            </a>
                            <a href="#">
                                <div class="friend">
                                    <span>
                                        <img src="https://www.attendit.net/images/easyblog_shared/July_2018/7-4-18/b2ap3_large_totw_network_profile_400.jpg" alt="/">
                                    </span>
                                    <span>
                                        name of user
                                    </span>
                                </div>
                            </a>
                            <a href="#">
                                <div class="friend">
                                    <span>
                                        <img src="https://www.attendit.net/images/easyblog_shared/July_2018/7-4-18/b2ap3_large_totw_network_profile_400.jpg" alt="/">
                                    </span>
                                    <span>
                                        name of user
                                    </span>
                                </div>
                            </a>
                            <a href="#">
                                <div class="friend">
                                    <span>
                                        <img src="https://www.attendit.net/images/easyblog_shared/July_2018/7-4-18/b2ap3_large_totw_network_profile_400.jpg" alt="/">
                                    </span>
                                    <span>
                                        name of user
                                    </span>
                                </div>
                            </a>
                            <a href="#">
                                <div class="friend">
                                    <span>
                                        <img src="https://www.attendit.net/images/easyblog_shared/July_2018/7-4-18/b2ap3_large_totw_network_profile_400.jpg" alt="/">
                                    </span>
                                    <span>
                                        name of user
                                    </span>
                                </div>
                            </a>
                            <a href="#">
                                <div class="friend">
                                    <span>
                                        <img src="https://www.attendit.net/images/easyblog_shared/July_2018/7-4-18/b2ap3_large_totw_network_profile_400.jpg" alt="/">
                                    </span>
                                    <span>
                                        name of user
                                    </span>
                                </div>
                            </a>
                            <a href="#">
                                <div class="friend">
                                    <span>
                                        <img src="https://www.attendit.net/images/easyblog_shared/July_2018/7-4-18/b2ap3_large_totw_network_profile_400.jpg" alt="/">
                                    </span>
                                    <span>
                                        name of user
                                    </span>
                                </div>
                            </a>
                            <a href="#">
                                <div class="friend">
                                    <span>
                                        <img src="https://www.attendit.net/images/easyblog_shared/July_2018/7-4-18/b2ap3_large_totw_network_profile_400.jpg" alt="/">
                                    </span>
                                    <span>
                                        name of user
                                    </span>
                                </div>
                            </a>
                            <a href="#">
                                <div class="friend">
                                    <span>
                                        <img src="https://www.attendit.net/images/easyblog_shared/July_2018/7-4-18/b2ap3_large_totw_network_profile_400.jpg" alt="/">
                                    </span>
                                    <span>
                                        name of user
                                    </span>
                                </div>
                            </a>
                            <a href="#">
                                <div class="friend">
                                    <span>
                                        <img src="https://www.attendit.net/images/easyblog_shared/July_2018/7-4-18/b2ap3_large_totw_network_profile_400.jpg" alt="/">
                                    </span>
                                    <span>
                                        name of user
                                    </span>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="show">
                    <div class="show-inner">
                        <div class="show-header">
                            <div class="user-id">
                                <span>
                                    <img src="https://www.attendit.net/images/easyblog_shared/July_2018/7-4-18/b2ap3_large_totw_network_profile_400.jpg" alt="/">
                                </span>
                                <span>
                                    user name
                                </span>
                            </div>
                            <div class="toggler">
                                <i class="fa-solid fa-ellipsis"></i>
                            </div>
                        </div>
                        <div class="show-messages">
                            <div class="messages">
                                <div class="message message-sent">
                                    <p>
                                        hello
                                    </p>
                                </div>
                                <div class="message message-reciver">
                                    <p>
                                        hi
                                    </p>
                                </div>
                                <div class="message message-reciver">
                                    <p>
                                        hi how are you
                                    </p>
                                </div>
                                <div class="message message-sent">
                                    <p>
                                        i am good thank you for question i was waiting you all the day i am good thank you for question i was waiting you all the day
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="form">
                            <form id="messageForm">
                                <input type="text" id="message" placeholder="your message ...">
                                <i class="fas fa-paper-plane"></i>
                            </form>
                        </div>

                        <div class="chat">
                            <div class="icon">
                                <i class="fas fa-comment"></i>
                            </div>
                            <div class="chat-text">
                                Chat Room
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <script>
        function seeChat(id){
            $.ajax({
                type : "get",
                url : "",
                success : function(data){
                    $(function(){
                        var cont = $('.messages');
                        $(cont).html('.');
                        var html;
                        for(let message of data){
                            html = `
                            <div class="message ${message.sender == id ? "message-reciver" :"message-sent"}">
                                <p>
                                    ${message.message}
                                </p>
                            </div>
                            `
                            $(cont).append()
                        }

                    })
                }
            })
        }
    </script>
</body>

</html>