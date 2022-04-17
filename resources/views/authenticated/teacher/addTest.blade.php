<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <x-require-links />
    <link rel="stylesheet" href="{{asset('./css/accuil/header.css')}}">
    <link rel="stylesheet" href="{{asset('./css/auth/addTest.css')}}">
    <link rel="stylesheet" href="{{asset('./css/loader.css')}}">
    <title>Document</title>
</head>

<body>
    <div id="app">
        <x-header a="auth" />

        <div class="cont">
            <div class="test">
                <div class="test-title">
                    <h2>
                        Test : title of the cour
                    </h2>
                </div>
                <div class="test-body">
                    <div class="test-questions">
                        <form class="ask">
                            <div class="question">
                                <i class="fas fa-question-circle"></i>
                                <input type="text" class="ask-inpt" placeholder="your question">
                            </div>
                            <div class="choices">
                                <div class="inner">

                                </div>
                            </div>
                            <div class="addChoice">
                                <i class="fas fa-plus" onclick="addChoice(this);"></i>
                            </div>
                        </form>
                    </div>
                    <div class="addAsk">
                        <button onclick="addAsk()">
                            add Question
                        </button>
                    </div>
                </div>
            </div>
            <div class="btn">
                <button id="add">
                    Add test
                </button>
            </div>
        </div>
    </div>
    </div>
    <div class="modal">
        <div class="loader">
            <div class="tip"></div>
            <div class="tip"></div>
            <div class="tip"></div>
            <div class="tip"></div>
            <div class="tip"></div>
            <div class="tip"></div>
            <div class="tip"></div>
            <div class="tip"></div>
            <div class="tip"></div>
            <div class="tip"></div>
            <div class="tip"></div>
            <div class="tip"></div>
            <div class="tip"></div>
            <div class="tip"></div>
            <div class="tip"></div>
            <div class="tip"></div>
            <div class="tip"></div>
            <div class="tip"></div>
            <div class="tip"></div>
            <div class="tip"></div>
            <div class="tip"></div>
            <div class="tip"></div>
            <div class="tip"></div>
            <div class="tip"></div>
            <div class="tip"></div>
            <div class="tip"></div>
            <div class="tip"></div>
            <div class="tip"></div>
            <div class="tip"></div>
            <div class="tip"></div>
        </div>
    <script src="{{asset('./js/header.js')}}"></script>
    <script>
        var asks = document.querySelector('.test-questions');
        var i = 1;
        var choices = [];
        var choice = (s) => {
            return `<div class="choice">
                            <span>
                                ${s}
                            </span>
                            <span  onclick="changeText(this)">
                                Click here to change text
                            </span>
                            <input type="hidden" class="choice-inpt" name="choice">
                            <span class="span-btn">
                                <i class="fas fa-check vrai" onclick="setVrai(this)"></i>
                                <i class="fas fa-times faux active" onclick="setFaux(this)"></i>
                                <input type="hidden" class="correct" name="correct" value="faux">
                            </span>
                        </div>`
        };
        var ask = `<form class="ask">
                            <div class="question">
                                <i class="fas fa-question-circle"></i>
                                <input type="text" class="ask-inpt" placeholder="your question">
                            </div>
                            <div class="choices">
                                <div class="inner">
                                    ${choice(1)}
                                </div>
                            </div>
                            <div class="addChoice">
                                <i class="fas fa-plus" onclick="addChoice(this);"></i>
                            </div>
                        </form>`;

        function addChoice(e) {
            $(function() {
                let f = $(e).parent().parent().find('.choice').length;
                $(e).parent().parent().find('.inner').append(choice(f + 1));
            })
        }

        function addAsk() {
            asks.innerHTML = asks.innerHTML + ask;
        }

        function changeText(e) {
            let t = "";
            while (t == "") {
                t = prompt("choice")
            }
            e.innerText = t;
            $(function() {
                $(e).next().val(t);
            })
        }


        function setVrai(e) {
            $(e).next().removeClass('active');
            $(e).addClass('active');
            $(e).next().next().val(1);
        }

        function setFaux(e) {
            $(e).prev().removeClass('active');
            $(e).addClass('active');
            $(e).next().val(0);
        }
    </script>


    <script>
        var i = 0;
        //ajax script
        $("#add").click(function(e) {
            $('.modal').css('display' , 'flex');
            if (confirm("add Test ?")) {
                
                let forms = document.querySelectorAll('.ask');

                $.ajax({
                    type: "post",
                    url: "{{route('addTest')}}",
                    data: {
                        _token: "{{csrf_token()}}",
                        cour: "{{$cour_id}}",
                        test_title: "this is a title"
                    },
                    success: function(test_id) {
                        forms.forEach(form => {
                            $.ajax({
                                type: "post",
                                url: "{{route('addAsk')}}",
                                data: {
                                    _token: "{{csrf_token()}}",
                                    ask: $(form).find('.ask-inpt').val(),
                                    test: test_id
                                },
                                success: function(ask_id) {
                                    console.log("ask added successfully" + ask_id)
                                    $(form).find('.ask-inpt').css('background', 'rgba(0,255,0,0.5)');
                                    let choices = form.querySelectorAll('.choice');

                                    choices.forEach(choice => {
                                        $.ajax({
                                            type: "post",
                                            url: "{{route('addChoice')}}",
                                            data: {
                                                _token: "{{csrf_token()}}",
                                                mychoice: $(choice).find('.choice-inpt').val(),
                                                question: ask_id,
                                                isCorrect: $(choice).find('.correct').val() == '1' ? 1 : 0
                                            },
                                            success: function() {
                                                $(choice).css('background', 'rgba(0,255,0,0.5)');

                                                console.log(++i);

                                                if(i == choices.length){
                                                    window.location.href = "{{route('viewCour',['cour'=>$cour_id])}}"
                                                }
                                            }
                                        })
                                    })
                                }
                            })
                        })
                    },
                })
            } else {
                $('.modal').css('display' , 'none');
                e.preventDefault();
            }
        })
    </script>
</body>

</html>