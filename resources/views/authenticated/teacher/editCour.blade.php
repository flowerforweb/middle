<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <x-require-links />
    <link rel="stylesheet" href="{{asset('./css/accuil/header.css')}}">
    <link rel="stylesheet" href="{{asset('./css/modals/main.css')}}">
    <link rel="stylesheet" href="{{asset('./css/auth/courView.css')}}">
    <link rel="stylesheet" href="{{asset('./css/modals/addLesson.css')}}">
    <title>Add cour</title>
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
                    21/21/2002
                </span>
            </div>
            <div class="detail">
                <span class="key">
                    niveau :
                </span>
                <span class="value">
                    deuxieme
                </span>
            </div>
        </div>
        <div class="mycont">
            <div class="cour-content edit">
                <div class="cour-header">
                    <h4>
                        Le titre de cour : <span>le titre de cour</span>
                    </h4>
                    <i class="fas fa-pen"></i>
                </div>

                <div class="lessons">
                    <div class="cour-body">
                        @if(count($cour->lessons) !== 0)
                        @php
                        $counter = 0
                        @endphp
                        @foreach($cour->lessons as $lesson)
                        <div class="cour-section">
                            <div class="toggler">
                                <span>
                                    {{++$counter}}
                                </span>
                                <h4>
                                    {{$lesson->title}}
                                </h4>
                                <i class="fas fa-times"></i>
                                <i class="fas fa-plus toggle"></i>
                                <i class="fas fa-minus toggle"></i>
                            </div>
                            <div class="content">
                                <div class="lesson-video">
                                    <div class="vid-header">
                                        <h4>
                                            Title :
                                            <span>
                                                {{$lesson->video->title ?? 'no title'}}
                                            </span>
                                        </h4>
                                    </div>
                                    <div class="vid-body">
                                        <div class="vid-pic">
                                            <img src="https://www.gettyimages.fr/gi-resources/images/500px/983703508.jpg" alt="/">
                                            <i class="fas fa-play"></i>
                                        </div>
                                        <div class="vid-details">
                                            <div class="vid-detail">
                                                <span>
                                                    type :
                                                </span>
                                                <span>
                                                    video
                                                </span>
                                            </div>
                                            <div class="vid-detail">
                                                <span>
                                                    vu :
                                                </span>
                                                <span>
                                                    100
                                                </span>
                                            </div>
                                            <div class="vid-detail">
                                                <span>duree : </span>
                                                <span>
                                                    02:25
                                                </span>
                                            </div>
                                            <div class="vid-detail">
                                                <span>size : </span>
                                                <span>
                                                    10mo
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="down">
                                        <a href="{{route('watch' , ['vidId' => $lesson->video->id])}}" target="_blank" rel="noopener noreferrer">
                                            Watch
                                        </a>
                                        <a href="{{route('download' , ['fileId' => $lesson->video->id])}}">
                                            Download
                                        </a>
                                    </div>
                                </div>
                                <div class="lesson-video">
                                    <div class="vid-header">
                                        <h4>
                                            Title :
                                            <span>
                                                {{$lesson->pdffile->title ?? 'no title'}}
                                            </span>
                                        </h4>
                                    </div>
                                    <div class="vid-body">
                                        <div class="vid-pic">
                                            <img src="https://www.gettyimages.fr/gi-resources/images/500px/983703508.jpg" alt="/">
                                            <i class="fas fa-play"></i>
                                        </div>
                                        <div class="vid-details">
                                            <div class="vid-detail">
                                                <span>
                                                    type :
                                                </span>
                                                <span>
                                                    video
                                                </span>
                                            </div>
                                            <div class="vid-detail">
                                                <span>
                                                    vu :
                                                </span>
                                                <span>
                                                    100
                                                </span>
                                            </div>
                                            <div class="vid-detail">
                                                <span>duree : </span>
                                                <span>
                                                    02:25
                                                </span>
                                            </div>
                                            <div class="vid-detail">
                                                <span>size : </span>
                                                <span>
                                                    10mo
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="down">
                                        <a href="#">
                                            Watch
                                        </a>
                                        <a href="#" target="_blank" rel="noopener noreferrer">
                                            Download
                                        </a>
                                    </div>
                                </div>
                                <div class="lesson-video">
                                    <div class="vid-header">
                                        <h4>
                                            Title :
                                            <span>
                                                {{$lesson->exo->title ?? 'no title'}}
                                            </span>
                                        </h4>
                                    </div>
                                    <div class="vid-body">
                                        <div class="vid-pic">
                                            <img src="https://www.gettyimages.fr/gi-resources/images/500px/983703508.jpg" alt="/">
                                            <i class="fas fa-play"></i>
                                        </div>
                                        <div class="vid-details">
                                            <div class="vid-detail">
                                                <span>
                                                    type :
                                                </span>
                                                <span>
                                                    video
                                                </span>
                                            </div>
                                            <div class="vid-detail">
                                                <span>
                                                    vu :
                                                </span>
                                                <span>
                                                    100
                                                </span>
                                            </div>
                                            <div class="vid-detail">
                                                <span>duree : </span>
                                                <span>
                                                    02:25
                                                </span>
                                            </div>
                                            <div class="vid-detail">
                                                <span>size : </span>
                                                <span>
                                                    10mo
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="down">
                                        <a href="{{$lesson->video->id}}">
                                            Watch
                                        </a>
                                        <a href="#" target="_blank" rel="noopener noreferrer">
                                            Download
                                        </a>
                                    </div>
                                </div>
                            </div>

                        </div>
                        @endforeach
                        @else
                        {{"no lessons"}}
                        @endif
                    </div>
                    <div class="ask">
                        <button>
                            add new lesson
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <div class="test">
            <div class="go">
                <h4>
                    {{$cour->test->title ?? "No Test"}}
                </h4>
                <a href="{{route('editTest' , ['cour_id'=> $cour->id])}}" target="_blank" rel="noopener noreferrer">
                    add test
                </a>
            </div>
        </div>
    </div>
    <x-modal-component todo="create a lesson">
        <form action="/" method="post">
            @csrf
            <div class="inpt">
                <i class="fas fa-pen"></i>
                <input type="text" placeholder="Le nom de lesson" class="nameLesson">
            </div>
            <div class="files">
                <div class="file video">
                    <button onclick="upload('v')">
                        <span>
                            Add a video
                        </span>
                        <i class="fa-solid fa-bars"></i>
                    </button>
                    <input type="file" name="video" id="v" required>
                </div>
                <div class="file pdf">
                    <button onclick="upload('c')">
                        <span>
                            Add a cour
                        </span>
                        <i class="fa-solid fa-bars"></i>
                    </button>
                    <input type="file" name="pdf" id="c" required>
                </div>
                <div class="file exo">
                    <button onclick="upload('e')">
                        <span>
                            Add a exercise
                        </span>
                        <i class="fa-solid fa-bars"></i>
                    </button>
                    <input type="file" name="exo" id="e" required>
                </div>
            </div>
            <div class="btn">
                <button id="addLesson">
                    Add Lesson
                </button>
            </div>
        </form>
    </x-modal-component>
    <script src="{{asset('./js/header.js')}}"></script>
    <script>
        $(function() {
            $('.modal .fa-times').click(function() {
                $('.modal').css('display', "none");
            })
            $('.ask').click(function() {
                $('.modal').css('display', 'flex');
            })
        })

        addLesson.onclick = (e) => {
            e.preventDefault();
            $.ajax({
                type: "post",
                async: false,
                url: "{{route('createLesson')}}",
                data: {
                    _token: "{{csrf_token()}}",
                    cour: "{{$cour->id}}",
                    title: $(".nameLesson").val()
                },
                success: function(lesson_id) {
                    if (lesson_id == 0) {
                        alert("fail to create lesson maybe ther is a lesson like this")
                    } else {
                        console.log("lessson added");
                        myVideo = document.getElementById('v').files[0];
                        myExo = document.getElementById('e').files[0];
                        myPdf = document.getElementById('c').files[0];
                        videoData = new FormData();
                        pdfData = new FormData();
                        exoData = new FormData();
                        exoData.append('_token', "{{csrf_token()}}");
                        exoData.append('lesson', lesson_id);
                        pdfData.append('_token', "{{csrf_token()}}");
                        pdfData.append('lesson', lesson_id);
                        videoData.append('_token', "{{csrf_token()}}");
                        videoData.append('lesson', lesson_id);


                        videoData.append('video', myVideo);
                        pdfData.append('pdf', myPdf);
                        exoData.append('exo', myExo);

                        $.ajax({
                            type: "post",
                            url: "{{route('addVideo')}}",
                            data: videoData,
                            async: false,
                            processData: false, // tell jQuery not to process the data
                            contentType: false, // tell jQuery not to set contentType
                            success: function(videoData) {
                                alert(videoData);
                            }
                        })
                        $.ajax({
                            type: "post",
                            url: "{{route('addPdf')}}",
                            async: false,
                            processData: false, // tell jQuery not to process the data
                            contentType: false, // tell jQuery not to set contentType
                            data: pdfData,
                            success: function(pdfData) {
                                alert(pdfData);
                            }
                        })
                        $.ajax({
                            type: "post",
                            url: "{{route('addExo')}}",
                            async: false,
                            processData: false, // tell jQuery not to process the data
                            contentType: false, // tell jQuery not to set contentType
                            data: exoData,
                            success: function(exoData) {
                                alert(exoData);
                                location.reload();
                            }
                        })
                    }
                },
                fail: function() {
                    alert("sorry")
                }
            })
        }

        function upload(id) {
            $(function() {
                $('#' + id).trigger('click').on('change', function() {
                    if (this.files.length == 0) {
                        $(this).siblings().css('background', 'rgb(241, 86, 86)');
                    } else {
                        $(this).siblings().css('background', 'green');
                    }
                });
            })
        }
    </script>
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
    </script>
</body>

</html>