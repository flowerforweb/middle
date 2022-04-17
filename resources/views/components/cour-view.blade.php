<div class="cour">
    <div class="header">
        <span>
            {{$i}}
        </span>
        <span>
            {{$cour->title}}
        </span>
    </div>
    <div class="cour-lessons">
        <span>{{count($cour->lessons)}}</span> Lesson
    </div>
    <div class="cour-pic">
        <img src="/" alt="/">
    </div>
    <div class="btn">
        <a href="{{route('viewCour',['cour'=>$cour->id])}}" target="_blank" rel="noopener noreferrer">
            view >>
        </a>
    </div>
</div>