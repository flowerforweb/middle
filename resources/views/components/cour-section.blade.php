<div class="cour-section">
    <div class="toggler">
        <span>
            {{$counter}}
        </span>
        <h4>
            {{$lesson->title}}
        </h4>
        <i class="fas fa-plus toggle"></i>
        <i class="fas fa-minus toggle"></i>
    </div>
    <div class="content">
        <div class="lesson-video">
            <div class="vid-header">
                <h4>
                    Title :
                    <span>
                        {{$lesson->vido->title ?? 'no title'}}
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
                <a href="#">
                    Watch
                </a>
                <a href="#" target="_blank" rel="noopener noreferrer">
                    Download
                </a>
            </div>
        </div>
    </div>

</div>