<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <x-require-links/>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <link rel="stylesheet" href="{{asset('./css/accuil/header.css')}}">
    <link rel="stylesheet" href="{{asset('./css/auth/tdash.css')}}">
    <link rel="stylesheet" href="{{asset('./css/modals/createPost.css')}}">
    <link rel="stylesheet" href="{{asset('./css/modals/main.css')}}">
    <title>Document</title>
</head>
<body>
    <div id="add">
        <x-header a="auth"/>
        <div class="head">
            <div class="row-2">
                <div class="dash-name">
                    <div class="inner">
                        <img src="https://www.pngplay.com/wp-content/uploads/12/User-Avatar-Profile-Clip-Art-Transparent-PNG.png" alt="/">
                        <h4 class="name">
                            DR. Walt Tirner
                        </h4>
                    </div>
                </div>
                <div class="analycts">
                    <div class="inner">
                        <div class="a-name">
                            <h4>
                                Main analycts
                            </h4>
                        </div>
                        <div class="charts">
                            <div class="chart">
                                <canvas id="cnvs" width="300" height="200"></canvas>
                            </div>
                            <div class="chart">
                                <canvas id="cnvs2" width="300" height="200"></canvas>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="more">
            <div class="inner">
                <div class="inner-head">
                    You publish : 
                </div>
                <div class="publishes">
                    <div class="box">

                    </div>
                    <div class="box">
                        
                    </div>
                    <div class="box">
                        
                    </div>
                </div>
            </div>
            <div class="tools">
                <div class="all">
                    <div class="tool">
                        <i class="fas fa-pen" id="createCour"></i>
                        <span>
                            Create cour
                        </span>
                    </div>
                    <div class="tool">
                        <i class="fas fa-plus"></i>
                        <span>
                            tool name
                        </span>
                    </div>
                    <div class="tool">
                        <i class="fas fa-plus"></i>
                        <span>
                            tool name
                        </span>
                    </div>
                    <div class="tool">
                        <i class="fas fa-plus"></i>
                        <span>
                            tool name
                        </span>
                    </div>
                </div>
                <div class="tools-toggler">
                    <i id="s" class="fas fa-plus"></i>
                </div>
            </div>
        </div>
        <x-footer/>
    </div>
    <x-modal-component todo="create cour">
        <form action="{{route('createCour')}}" method="post">
            @csrf
            <div class="inpt">
                <i class="fas fa-graduation-cap"></i>
                <select name="grade" id="grade" name="grade">
                    <option value="" disabled selected>chosir un niveau</option>
                    <option value="deux">2<sup>em</sup>  niveau</option>
                    <option value="trois">3<sup>em</sup> niveau</option>
                </select>
            </div>
            <div class="inpt">
                <i class="fas fa-pen"></i>
                <input type="text" placeholder="le titre de cour" name="cour_title">
            </div>
            <div class="sub">
                <button type="submit">
                    Create
                </button>
            </div>
        </form>
    </x-modal-component>
    <script>
        $(function(){
            $("#s").click(function(){
                $(this).parent().siblings().toggleClass('all-show');
            })
            $('.modal .fa-times').click(function(){
                $('.modal').css('display',"none");
            })
            $('#createCour').click(function(){
                $('.modal').css('display',"block");
            })
        })
    </script>
    <script src="{{asset('./js/header.js')}}"></script>
    <script>
        const labels = [
                'January',
                'February',
                'March',
                'April',
                'May',
                'June',
                    ];

        const data = {
                labels: labels,
                datasets: [{
                label: 'My First dataset',
                backgroundColor: 'rgb(255, 99, 132)',
                borderColor: 'rgb(255, 99, 132)',
                data: [0, 10, 5, 2, 20, 30, 45],
                    }]
                };

            const config = {
                    type: 'line',
                    data: data,
                    options: {}
                        };
</script>
<script>
  const myChart = new Chart(
    document.getElementById('cnvs'),
    config
  );
  const myChart2 = new Chart(
    document.getElementById('cnvs2'),
    config
  );
</script>
</body>
</html>