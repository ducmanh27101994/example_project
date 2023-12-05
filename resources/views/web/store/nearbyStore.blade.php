@extends('/web/index')
@section('content')

<main class="page-content">
    <h1 class="hidden">Cửa Hàng - Osakar.vn</h1>
    <div class="banner_store_top">
        <div class="container">
            <div class="banner-image">
                <img src="{{ asset('home/images/banner_top_store.png') }}" title="banner_top_store" />
            </div>
        </div>
    </div>
    <input type="hidden" id="location" name="your_location" value="" />
    <div class="grid_item_list_store" style="background: #F4F4F4;margin-bottom: 0">

        <div class="container">
            <div class="u_locate_box">
                <img src="{{ asset('home/images/position.png') }}" title="position" />
                Vị trí của bạn: <span id="your_location">
                </span>
            </div>
            <div class="result_store_near_by">
                <h2>Có <span>6 cửa hàng</span> ở gần vị trí của bạn</h2>
            </div>
            <div class="row">
                <div class="col-xs-6 col-sm-4 col-md-4 col-lg-4">
                    <div class="item_store">
                        <div class="image">
                            <img src="{{ asset('home/images/store.png') }}" alt="store">
                        </div>
                        <div class="content">
                            <div class="title">
                                <h2>Osakar Hà Nội - Xe điện Thành Công</h2>
                            </div>
                            <div class="descreption">
                                <p>
                                    <img src="{{ asset('home/images/location.png') }}" alt="location">
                                    <span>KDV Vĩnh Lộc - Phùng Xá - Thạch Thất - Hà Nội</span>
                                </p>
                                <p>
                                    <a href="tel:0986 666 330" title="0986 666 330">
                                        <img src="{{ asset('home/images/mobile.png') }}" alt="mobile">
                                        <span>0986 666 330</span>
                                    </a>
                                </p>
                            </div>
                        </div>
                        <div class="ridect_map-wrapper">
                            <a href="#" title="Osakar Hà Nội - Xe điện Thành Công">
                                <p>
                                    <img src="{{ asset('home/images/material-symbols_directions.png') }}" alt="material-symbols_directions">
                                    <span>Chỉ đường trên Google Map</span>
                                </p>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-xs-6 col-sm-4 col-md-4 col-lg-4">
                    <div class="item_store">
                        <div class="image">
                            <img src="{{ asset('home/images/store.png') }}" alt="store">
                        </div>
                        <div class="content">
                            <div class="title">
                                <h2>Osakar Hà Nội - Xe điện Thành Công</h2>
                            </div>
                            <div class="descreption">
                                <p>
                                    <img src="{{ asset('home/images/location.png') }}" alt="location">
                                    <span>KDV Vĩnh Lộc - Phùng Xá - Thạch Thất - Hà Nội</span>
                                </p>
                                <p>
                                    <a href="tel:0986 666 330" title="0986 666 330">
                                        <img src="{{ asset('home/images/mobile.png') }}" alt="mobile">
                                        <span>0986 666 330</span>
                                    </a>
                                </p>
                            </div>
                        </div>
                        <div class="ridect_map-wrapper">
                            <a href="#" title="Osakar Hà Nội - Xe điện Thành Công">
                                <p>
                                    <img src="{{ asset('home/images/material-symbols_directions.png') }}" alt="material-symbols_directions">
                                    <span>Chỉ đường trên Google Map</span>
                                </p>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-xs-6 col-sm-4 col-md-4 col-lg-4">
                    <div class="item_store">
                        <div class="image">
                            <img src="{{ asset('home/images/store.png') }}" alt="store">
                        </div>
                        <div class="content">
                            <div class="title">
                                <h2>Osakar Hà Nội - Xe điện Thành Công</h2>
                            </div>
                            <div class="descreption">
                                <p>
                                    <img src="{{ asset('home/images/location.png') }}" alt="location">
                                    <span>KDV Vĩnh Lộc - Phùng Xá - Thạch Thất - Hà Nội</span>
                                </p>
                                <p>
                                    <a href="tel:0986 666 330" title="0986 666 330">
                                        <img src="{{ asset('home/images/mobile.png') }}" alt="mobile">
                                        <span>0986 666 330</span>
                                    </a>
                                </p>
                            </div>
                        </div>
                        <div class="ridect_map-wrapper">
                            <a href="#" title="Osakar Hà Nội - Xe điện Thành Công">
                                <p>
                                    <img src="{{ asset('home/images/material-symbols_directions.png') }}" alt="material-symbols_directions">
                                    <span>Chỉ đường trên Google Map</span>
                                </p>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-xs-6 col-sm-4 col-md-4 col-lg-4">
                    <div class="item_store">
                        <div class="image">
                            <img src="{{ asset('home/images/store.png') }}" alt="store">
                        </div>
                        <div class="content">
                            <div class="title">
                                <h2>Osakar Hà Nội - Xe điện Thành Công</h2>
                            </div>
                            <div class="descreption">
                                <p>
                                    <img src="{{ asset('home/images/location.png') }}" alt="location">
                                    <span>KDV Vĩnh Lộc - Phùng Xá - Thạch Thất - Hà Nội</span>
                                </p>
                                <p>
                                    <a href="tel:0986 666 330" title="0986 666 330">
                                        <img src="{{ asset('home/images/mobile.png') }}" alt="mobile">
                                        <span>0986 666 330</span>
                                    </a>
                                </p>
                            </div>
                        </div>
                        <div class="ridect_map-wrapper">
                            <a href="#" title="Osakar Hà Nội - Xe điện Thành Công">
                                <p>
                                    <img src="{{ asset('home/images/material-symbols_directions.png') }}" alt="material-symbols_directions">
                                    <span>Chỉ đường trên Google Map</span>
                                </p>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-xs-6 col-sm-4 col-md-4 col-lg-4">
                    <div class="item_store">
                        <div class="image">
                            <img src="{{ asset('home/images/store.png') }}" alt="store">
                        </div>
                        <div class="content">
                            <div class="title">
                                <h2>Osakar Hà Nội - Xe điện Thành Công</h2>
                            </div>
                            <div class="descreption">
                                <p>
                                    <img src="{{ asset('home/images/location.png') }}" alt="location">
                                    <span>KDV Vĩnh Lộc - Phùng Xá - Thạch Thất - Hà Nội</span>
                                </p>
                                <p>
                                    <a href="tel:0986 666 330" title="0986 666 330">
                                        <img src="{{ asset('home/images/mobile.png') }}" alt="mobile">
                                        <span>0986 666 330</span>
                                    </a>
                                </p>
                            </div>
                        </div>
                        <div class="ridect_map-wrapper">
                            <a href="#" title="Osakar Hà Nội - Xe điện Thành Công">
                                <p>
                                    <img src="{{ asset('home/images/material-symbols_directions.png') }}" alt="material-symbols_directions">
                                    <span>Chỉ đường trên Google Map</span>
                                </p>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-xs-6 col-sm-4 col-md-4 col-lg-4">
                    <div class="item_store">
                        <div class="image">
                            <img src="{{ asset('home/images/store.png') }}" alt="store">
                        </div>
                        <div class="content">
                            <div class="title">
                                <h2>Osakar Hà Nội - Xe điện Thành Công</h2>
                            </div>
                            <div class="descreption">
                                <p>
                                    <img src="{{ asset('home/images/location.png') }}" alt="location">
                                    <span>KDV Vĩnh Lộc - Phùng Xá - Thạch Thất - Hà Nội</span>
                                </p>
                                <p>
                                    <a href="tel:0986 666 330" title="0986 666 330">
                                        <img src="{{ asset('home/images/mobile.png') }}" alt="mobile">
                                        <span>0986 666 330</span>
                                    </a>
                                </p>
                            </div>
                        </div>
                        <div class="ridect_map-wrapper">
                            <a href="#" title="Osakar Hà Nội - Xe điện Thành Công">
                                <p>
                                    <img src="{{ asset('home/images/material-symbols_directions.png') }}" alt="material-symbols_directions">
                                    <span>Chỉ đường trên Google Map</span>
                                </p>
                            </a>
                        </div>
                    </div>
                </div>

            </div>
            <div class="return_back_store">
                <a href="#" title="Quay lại">Quay lại</a>
            </div>
        </div>
    </div>
    <script>
        $(document).ready(function() {
            $('#your_location').text(getCookie('location'))
            $('#location').val(getCookie('location'))
        });
    </script>
</main>

@endsection