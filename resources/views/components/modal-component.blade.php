<div class="modal" id="modal">
        <div class="modal-inner">
            <div class="modal-header">
                <h4>
                    {{$todo}}
                </h4>
                <i class="fas fa-times"></i>
            </div>
            <div class="modal-body">
                {{$slot}}
            </div>
        </div>
    </div>