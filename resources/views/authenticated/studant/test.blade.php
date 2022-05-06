<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <x-require-links/>
    <link rel="stylesheet" href="{{asset('./css/auth/test.css')}}">
    <title>Document</title>
</head>
<body>
    <div id="app">
        <x-header a="auth"/>
        <div class="test-container">
            <div class="test-header">
                <h2>
                    <span>test</span> test title
                </h2>
                <h3>
                    <span>cour</span> Cour title
                </h3>
            </div>
            <div class="test-body">
                <div class="test">
                    <form action="" class="question">
                        <div class="question-ask">
                            <span>
                                Q°= 1
                            </span>
                            <h3>
                                asking something
                            </h3>
                        </div>
                        <div class="choices">
                            <div class="choices">
                                <div class="choice">
                                    <input type="radio" name="answer" value="1">
                                    <h3>
                                        choice text
                                    </h3>
                                </div>
                                <div class="choice">
                                    <input type="radio" name="answer" value="2">
                                    <h3>
                                        choice text
                                    </h3>
                                </div>
                                <div class="choice">
                                    <input type="radio" name="answer" value="3">
                                    <h3>
                                        choice text
                                    </h3>
                                </div>
                            </div>
                        </div>
                    </form>
                    <div class="state">
                        <span>
                            1
                        </span>
                        <span>
                            2
                        </span>
                        <span>
                            3
                        </span>
                        <span>
                            4
                        </span>
                        <span>
                            5
                        </span>
                        <span>
                            6
                        </span>
                    </div>
                    <div class="btn">
                        <button id="next">next</button>
                        <button id="fin">finish</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>