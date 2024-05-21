@if(in_array('cau-hinh-popup', $configOptionGlobal))
    <div id="modal-container">
        @if(!empty($modal_image))
            @foreach($modal_image as $value)
                <div class="modal-background">
                    <div class="modal">
                        <img src="{{ $value->image_banner }}" alt="img_slider">
                        <div class="close_modal">
                            X
                        </div>
                    </div>
                </div>
            @endforeach
        @endif

    </div>
@endif