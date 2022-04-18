<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <x-require-links />
    <link rel="stylesheet" href="{{asset('./css/accuil/header.css')}}">
    <link rel="stylesheet" href="{{asset('./css/auth/courView.css')}}">
    <title>View Cour</title>
</head>

<body>
    <div id="app">
        <x-header a="auth" />

        <div class="cour-details">
            <div class="detail">
                <span class="key">
                    Added :
                </span>
                <span class="value">
                    {{$c->created_at}}
                </span>
            </div>
            <div class="detail">
                <span class="key">
                    niveau :
                </span>
                <span class="value">
                    {{$c->niveau}}<sup>eme</sup>
                </span>
            </div>
            <div class="detail">
                <span class="key">
                    enseignant :
                </span>
                <span class="value">
                    {{$c->user->name}}
                </span>
                <span>
                    <i class="fa-solid fa-chalkboard-user"></i>
                </span>
            </div>
        </div>
        <div class="cour-content">
            <div class="cour-header">
                <h4>
                    Cour Content
                </h4>
            </div>
            <div class="cour-body">
                @if(count($c->lessons) == 0)
                <div class="alert">
                    NO Lesson
                </div>
                @else
                @php
                $i = 0
                @endphp
                @foreach($c->lessons as $le)
                <x-cour-section :counter="++$i" :lesson="$le" />
                @endforeach
                @endif
            </div>
        </div>
        <div class="test">
            <div class="go">
                <h4>
                    {{$c->test->title ?? 'no test'}}
                </h4>
                <a href="{{route('doTest',['test_id'=>$c->test->id])}}" target="_blank" rel="noopener noreferrer">
                    <i class="fa-brands fa-golang"></i>
                </a>
            </div>
        </div>
        <div class="comments">
            <div class="inner">
                <div class="comments-header">
                    <h3>
                        Comments
                    </h3>
                </div>
                <div class="comments-body">
                    <div class="inner-body">

                        @if(count($c->comments) == 0)
                        <div class="alert">
                            NO comment
                        </div>
                        @else
                        @foreach($c->comments as $co)
                        <x-comment :comment="$co" />
                        @endforeach
                        @endif

                    </div>
                </div>
                <div class="comments-footer">
                    <div class="footer-inner">
                        <form action="#" method="post">
                            @csrf
                            <div class="add">
                                <i class="fa-regular fa-comment"></i>
                                <input type="text" placeholder="commanter ..." name="comment">
                                <input type="hidden" value="{{$c->id}}" name="cour">
                            </div>
                            <div class="btn">
                                <button id="commenter">
                                    <i class="fa-regular fa-paper-plane"></i>
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <x-footer />
    </div>
    <script src="{{asset('./js/header.js')}}"></script>
    <script>
        $(function() {
            $('.fa-plus').click(function() {
                $('.cour-section').removeClass('show');
                $(this).parent().parent().addClass('show');
            })
            $('.fa-minus').click(function() {
                $(this).parent().parent().removeClass('show');
            })
        })

        $(function() {
            $("#commenter").click(function(e) {
                e.preventDefault();
                commenter();
            })
        })

        function commenter() {
            $.ajax({
                type: 'post',
                url: "{{route('commenter')}}",
                data: {
                    cour: "{{$c->id}}",
                    comment: $("input[name = comment]").val().trim(),
                    _token: "{{csrf_token()}}"
                },
                success: function(res) {
                    $(".inner-body").append(`
                    <div class="comment">
                        <div class="comment-view">
                            <div class="publisher">
                                <span class="pub-pic">
                                    <img src="https://www.attendit.net/images/easyblog_shared/July_2018/7-4-18/b2ap3_large_totw_network_profile_400.jpg" alt="/">
                                </span>
                                <span>
                                    {{Auth::user()->name}}
                                </span>
                                <span>
                                    <i class="fa-solid fa-chalkboard-user"></i>
                                </span>
                            </div>
                            <div class="comment-content">
                                ${res.content}
                            </div>
                        </div>
                    </div>
                    `);
                    $("input[name = comment]").val("");
                }
            })
        }
    </script>
</body>

</html>