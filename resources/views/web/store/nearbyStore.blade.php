@extends('/web/index')
@section('content')

<main class="page-content">
    <h1 class="hidden">Cửa Hàng - Osakar.vn</h1>
    <div class="banner_store_top">
        <div class="container">
            <div class="banner-image row">
                <div class="col-xs-12 col-md-6 col-sm-6 col-lg-6">
                    <div class="text_box_image">
                        <h2>Mạng Lưới</h2>
                        <p>Hệ thống cửa hàng đại lý của Osakar sẵn sàng phục vụ Quý khách hàng tại hơn</p>
                        @if(!empty($store_counter ))
                            @foreach($store_counter  as $value)

                                {!! $value->detail !!}


                            @endforeach
                        @endif
                    </div>
                </div>
                <div class="col-xs-12 col-md-6 col-sm-6 col-lg-6">
                    <img src="{{ asset('home/images/image-background_store.png') }}" alt="image-background_store">
                </div>
            </div>
        </div>
    </div>
    <form method="get" action="{{route('nearbyStore')}}" id="formSearchLocation">
        @csrf
        <input type="hidden" id="location" name="your_location" value="" />
    </form>

    <div class="grid_item_list_store" style="background: #F4F4F4;margin-bottom: 0">

        <div class="container">
            <div class="u_locate_box">
                <span>
                    <img src="{{ asset('home/images/position.png') }}" title="position" />
                    Vị trí của bạn:
                </span>
                <span id="your_location">
                </span>
            </div>
            <div class="result_store_near_by">
                <h2>Có <span>{{count($listStore) ?? 0}} cửa hàng</span> ở gần vị trí của bạn</h2>
            </div>
            <div class="row">
                @if(!empty($listStore))
                    @foreach($listStore as $value)
                        <div class="col-xs-6 col-sm-4 col-md-4 col-lg-4">
                            <div class="item_store">
                                <div class="image">
                                    <img src="{{ asset('home/images/store.png') }}" alt="store">
                                </div>
                                <div class="content">
                                    <div class="title">
                                        <h2>{{$value->title_store}}</h2>
                                    </div>
                                    <div class="descreption">
                                        <p>
                                            <img src="{{ asset('home/images/location.png') }}" alt="location">
                                            <span>{{$value->address}}</span>
                                        </p>
                                        <p>
                                            <a href="tel:{{$value->page_title_tag}}" title="{{$value->page_title_tag}}">
                                                <img src="{{ asset('home/images/mobile.png') }}" alt="mobile">
                                                <span>{{$value->page_title_tag}}</span>
                                            </a>
                                        </p>
                                    </div>
                                </div>
                                <div class="ridect_map-wrapper">
                                    <a target="_blank" href="{{$value->path}}" title="Osakar Hà Nội - Xe điện Thành Công">
                                        <p>
                                            <img src="{{ asset('home/images/material-symbols_directions.png') }}"
                                                alt="material-symbols_directions">
                                            <span>Chỉ đường trên Google Map</span>
                                        </p>
                                    </a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                @endif


            </div>
            <div class="return_back_store">
                <a href="#" title="Quay lại">Quay lại</a>
            </div>
        </div>
    </div>
    <script>
        $(document).ready(function () {
            $('#your_location').text(getCookie('location'))
            $('#location').val(getCookie('location'))

            var queryString = window.location.search;
            var urlParams = new URLSearchParams(queryString);

            if (!urlParams.has('your_location')) {
                document.getElementById("formSearchLocation").submit();
            }
        });

    </script>
</main>

@endsection