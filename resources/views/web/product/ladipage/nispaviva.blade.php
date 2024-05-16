@extends('/web/index')
@section('content')

<link href="{{ asset('home/css/jquery.fancybox.css') }}" rel="stylesheet" />
<link rel="stylesheet" href="{{ asset('home/css/pdp-page-xmd.css') }}" />
<link rel="stylesheet" href="{{ asset('home/css/ladiframe.css') }}" />
<link rel="stylesheet" href="{{ asset('home/css/style_ladi.css') }}" />
<link rel="stylesheet" href="{{ asset('home/css/nispaviva.css') }}" />

<main>
    <section class="section section-hero inview" data-component-list="ClassicHero">
        <canvas class="hero-background"></canvas>

        <div class="hero-scooters-svg">
            <div class="viva-svg">
                <!-- Hình ảnh logo xe(section 1) -->
                <img src="{{ $product->viva_images_banner1 ?? '' }}" alt="titlenispabanner">
                <div class="name_title-banner d-flex align-items-center justify-content-between">
                    <span>
                        OSAKAR
                    </span>
                    <span>
                        E_BIKE
                    </span>
                    <span>
                        2024
                    </span>
                </div>
            </div>
        </div>

        <div class="hero-scooters">
            <!-- ảnh màu sắc xe-->
            @if(!empty($color_image))
                @foreach($color_image as $value)
                    <figure class="hero-scooter"
                            style="background-image: url('{{ $value->images }}')">
                    </figure>
                @endforeach
            @endif
        </div>


        <!-- video nền section 1 -->
        @if(!empty($viva_upload_video))
            @foreach($viva_upload_video as $value)
                <video class="d-none" playsinline preload autoplay muted
                       data-src="{{ $value->images }}"></video>
            @endforeach
        @endif
    </section>


    <div class="buy-wrapper-box">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <div class="title d-flex align-items-center" style="height: 100%">
                        <!-- Tiêu đề, slogan xe -->
                        <h1>{{$product->viva_slogan ?? ''}}</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="wrapper-image-itelligent">
        <!-- Hình ảnh (section 2) (kt: 1910 × 1035 px) -->
        <img class="w-100" src="{{ $product->viva_images_banner2 ?? '' }}" alt="section1">
    </div>

    <section class="parts-bike section" id="pdp-parts-bike" style="margin-bottom: 60px">
        <div class="parts-bike__head_text text-center block_center">
            <h2>
                Dẫn đầu phong cách thời thượng
            </h2>
            <p>
                Nâng chất lượng - Trải nghiệm lái xe êm ái. Bứt phá công nghệ hiện đại, được tính hợp nhiều tính năng
                thông minh.
            </p>
        </div>
        <div class="parts-bike__container padding-container">
            <div class="parts-bike__list parts-bike__list_type__owl owl-carousel owl-theme">
                <!-- Ảnh chi tiết xe trong tabs hình ảnh chi tiết -->
                @if(!empty($vehicle_detail_photos))
                    @foreach($vehicle_detail_photos as $value)
                        <div class="parts-bike__item js-aos aos-init aos-animate" data-aos="fade-left" data-aos-delay="0"
                             data-aos-duration="300">
                            <picture>
                                <source class="img-srcset" data-srcset="{{ $value->images }}"
                                        type="image/png" srcset="{{ $value->images }}">
                                <img data-src="{{ $value->images }}" title="Evo200"
                                     alt="Hệ thống đèn LED và đèn pha projector của xe máy điện VinFast Evo200" width="100%"
                                     class="img-lazy" src="{{ $value->images }}">
                            </picture>
                        </div>
                    @endforeach
                @endif

            </div>
        </div>
    </section>

    <section class="section section-video" data-component-list="Video">
        <div class="video-copy">
            <!-- url video youtube -->
            <a data-fancybox data-width="auto" data-height="auto" href="{{$product->viva_youtube_banner3 ?? ''}}"
                title="video">
                <!-- ảnh nền section video -->
                <figure class="image-video-crossover">
                    <img class="w-100" src="{{ $product->viva_images_banner3 ?? '' }}"
                        alt="thumbnailvideo1">
                </figure>
                <svg xmlns="http://www.w3.org/2000/svg" width="132" height="132" viewBox="0 0 132 132" fill="none">
                    <circle cx="66.0019" cy="66" r="55.2558" fill="white" />
                    <path
                        d="M66.0019 10.7441C35.5007 10.7441 10.7461 35.4987 10.7461 66C10.7461 96.5012 35.5007 121.256 66.0019 121.256C96.5031 121.256 121.258 96.5012 121.258 66C121.258 35.4987 96.5584 10.7441 66.0019 10.7441ZM82.5787 78.322L66.5545 87.5497C64.5653 88.7101 62.355 89.2626 60.2 89.2626C57.9898 89.2626 55.8348 88.7101 53.8456 87.5497C49.8672 85.229 47.4912 81.14 47.4912 76.4986V57.9879C47.4912 53.4016 49.8672 49.2574 53.8456 46.9367C57.824 44.616 62.576 44.616 66.6097 46.9367L82.6339 56.1644C86.6123 58.4852 88.9883 62.5741 88.9883 67.2156C88.9883 71.8571 86.6123 76.0013 82.5787 78.322Z"
                        fill="#ED2025" />
                </svg>
            </a>
        </div>
    </section>

    <!-- phần chung cho vô nội dung độc lập -->
    <section class="page-block-image page-block-dong-co-xanh" id="dong-co-xanh">
        <div class="breaking-wrap">
            <div class="row">
                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                    <div class="dong-co-xanh_img ">
                        <div class="wrap_image aos-init aos-animate" data-aos="zoom-out-down" data-aos-duration="10000">
                            <img src="{{ asset('home/images/dongcoxanh.png') }}" alt="dongcoxanh">
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 aos-init aos-animate" data-aos="fade-up"
                    data-aos-duration="2000">
                    <div class="dong-co-xanh_text">
                        <div class="text_head">
                            <h2> ĐỘNG CƠ ĐỘC QUYỀN
                                <br /> OSAKAR
                            </h2>
                        </div>
                        <div class="text_mid">
                            <h3> Mạnh mẽ hơn - Ổn định hơn - Êm ái hơn
                            </h3>
                        </div>
                        <div class="text_descreption">
                            <p>Trang bị động cơ công suất tối đa 2800W, hoạt động bền bỉ, công nghệ cuộn dây đơn dây
                                cuộn mật độ dày cao gọn gàng phẳng khe hở ít, giúp hiệu suất của động cơ tăng 35 %. Bộ
                                điều khiển thu hồi điện năng.</p>
                        </div>
                        <div class="infor_bottom">
                            <div class="infor_box">
                                <span>Tốc độ tối đa</span>
                                <p>50km/h</p>
                            </div>
                            <div class="infor_box">
                                <span>Tăng tốc độ trong</span>
                                <p>0-50km/h</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- màu sắc -->
    <section class="section section-color"
        style="background: #000 url({{ asset('home/images/nispaviva/bg-360.png') }}) center / cover no-repeat;">

        <div class="head_color_title">
            <h2>Đa dạng màu sắc</h2>
            <p>Mỗi màu sắc đều mang lại một phong cách riêng biệt cho người lái, thể hiện được cá tính và sở thích của
                họ.</p>
        </div>

        <div class="top-main-img">
            <div class="mySliderTop">
                @if(!empty($color_image))
                    @foreach($color_image as $value)
                        <div class>
                            <picture>
                                <source srcset="{{ $value->images }}" type="image/webp" />
                                <img data-lazy="{{ $value->images }}" title
                                     alt="Xe máy điện VinFast Evo200 màu vàng" width="100%" />
                            </picture>
                        </div>
                    @endforeach
                @endif

            </div>
        </div>
        <div class="top-main-control js-aos" style="max-width: 800px;margin:auto; overflow: hidden;" data-aos="fade-left" data-aos-delay="100" data-aos-duration="300">
            <div class="myThumbSlider" data-showitem="8">
                @if(!empty($icon_images))
                    @foreach($icon_images as $value)
                        <div class="item-myThumb">
                            <img src="{{$value->images}}"
                                 alt="màu vàng">
                        </div>
                    @endforeach
                @endif

            </div>
            <div class="box-control-nav">
                <div class="btn-arrow button-prev"></div>
                <div class="btn-arrow button-next"></div>
            </div>
        </div>
    </section>


    <!-- ảnh 360  -->
    <section class="page-block-image page-block-image-360 product-360-views product-360-views-gogo" id="pdp-img-360">
        <div class="breaking-wrap product-images-list">
            <!-- Ảnh 360 -->
            <div id="threesixty" class="wrap_image"></div>
            <div class="instruction">
                <div class="rotating-360-ico">
                    <div class="main-circle"></div>
                    <div class="sub-circle horizontal"></div>
                    <div class="sub-circle vertical"></div>
                    <div class="context">360</div>
                </div>
                <p>Xoay để xem ảnh 360 toàn xe</p>
            </div>
        </div>
    </section>

    <!-- tiện ích -->
    <section class="section section-tienich">
        <div class="container">
            <div class="title-box-head text-center ">
                <h2 class="text-uppercase">TIỆN ÍCH</h2>
            </div>
        </div>

        <div class="breaking-experience-tabs">
            <ul class="nav nav-tabs" id="myTab" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" id="tienich1" data-toggle="tab" href="javascript:void(0)" role="tab"
                        aria-controls="home" aria-selected="true">{{$product->viva_title_banner4 ?? ''}}
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="tienich2" data-toggle="tab" href="javascript:void(0)" role="tab"
                        aria-controls="profile" aria-selected="false">{{$product->viva_title_banner5 ?? ''}}
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="tienich3" data-toggle="tab" href="javascript:void(0)" role="tab"
                        aria-controls="profile" aria-selected="false">{{$product->viva_title_banner6 ?? ''}}
                    </a>
                </li>
            </ul>
            <div class="tab-content tab-content-experience">
                <div class="tab-pane show active tienich1" id="tienich1" role="tabpanel" aria-labelledby="tienich1">
                    <div class="tab-pane-info d-flex justify-content-center">

                        <div class="row" style="width: 100%">
                            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6" style="padding: 0">
                                <img class="img" src="{{ $product->viva_images_banner4 ?? '' }}" alt="tienich_1">
                            </div>
                            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6" style="padding: 0">
                                <div class="tabs-ck-editor d-flex align-items-center">
                                    {!! $product->viva_desc_banner4 ?? '' !!}
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="tab-pane tienich2" id="tienich2" role="tabpanel" aria-labelledby="tienich2">
                    <div class="breaking-battery-tab d-flex justify-content-between">
                        <div class="row" style="width: 100%">
                            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6" style="padding: 0">
                                <img class="img" src="{{ $product->viva_images_banner5 ?? '' }}" alt="tienich_1">
                            </div>
                            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6" style="padding: 0">
                                <div class="tabs-ck-editor d-flex align-items-center">
                                    {!! $product->viva_desc_banner5 ?? '' !!}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane tienich3" id="tienich3" role="tabpanel" aria-labelledby="tienich3">
                    <div class="breaking-battery-tab d-flex justify-content-between">
                        <div class="row" style="width: 100%">
                            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6" style="padding: 0">
                                <img class="img" src="{{ $product->viva_images_banner6 ?? '' }}" alt="tienich_1">
                            </div>
                            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6" style="padding: 0">
                                <div class="tabs-ck-editor d-flex align-items-center">
                                    {!! $product->viva_desc_banner6 ?? '' !!}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="section-gallery" class="section section-gallery progressive-image nispaviva-block-gallery"
        data-component-list="Gallery">
        <input id="gallery-toggle-01" type="radio" class="gallery-toggle d-none" name="gallery" checked>
        <input id="gallery-toggle-02" type="radio" class="gallery-toggle d-none" name="gallery">
        <input id="gallery-toggle-03" type="radio" class="gallery-toggle d-none" name="gallery">

        <div class="gallery-header">
            <!-- Nâng cấp chính bạn -->
            <div class="gallery-header-content">
                <h3 class="gallery-title">{{$product->viva_title_banner7 ?? ''}}</h3>
                <p class="gallery-copy">{{$product->viva_desc_banner7 ?? ''}}</p>
                <button class="cta-button cta-button--gallery btn btn-button"><a href="#">
                        Tìm hiểu ngay
                    </a></button>
            </div>
        </div>

        <div class="gallery-container">
            <div class="gallery-images">
                <!-- Hình ảnh gallery -->
                <figure class="gallery-image gallery-image--01">
                </figure>
                <figure class="gallery-image gallery-image--02">
                </figure>
                <figure class="gallery-image gallery-image--03">
                </figure>

                <style>
                    .gallery-image--01 {
                        background-image: url("//cdn.gogoro.com/resources/pages/smartscooter/viva/home/gallery/img-accessories-01-mobile@2x.jpg?v=v1")
                    }

                    .gallery-image--02 {
                        background-image: url("//cdn.gogoro.com/resources/pages/smartscooter/viva/home/gallery/img-accessories-02-mobile@2x.jpg?v=v1")
                    }

                    .gallery-image--03 {
                        background-image: url("//cdn.gogoro.com/resources/pages/smartscooter/viva/home/gallery/img-accessories-03-mobile@2x.jpg?v=v1")
                    }

                    @media(min-aspect-ratio: 1/1) {
                        .gallery-image--01 {
                            background-image: url("//cdn.gogoro.com/resources/pages/smartscooter/viva/home/gallery/img-accessories-01@2x.jpg?v=v1")
                        }

                        .gallery-image--02 {
                            background-image: url("//cdn.gogoro.com/resources/pages/smartscooter/viva/home/gallery/img-accessories-02@2x.jpg?v=v1")
                        }

                        .gallery-image--03 {
                            background-image: url("//cdn.gogoro.com/resources/pages/smartscooter/viva/home/gallery/img-accessories-03@2x.jpg?v=v1")
                        }
                    }
                </style>

            </div>
            <div class="gallery-dots">
                <button class="gallery-dot"></button>
                <button class="gallery-dot"></button>
                <button class="gallery-dot"></button>
            </div>
            <button class="gallery-close"></button>
            <button class="gallery-prev"></button>
            <button class="gallery-next"></button>
        </div>
    </section>

    <!-- thông số kỹ thuật -->
    <section class="breaking-technology section" id="pdp-breaking-technology">
        <div class="breaking-wrap">

            <div class="breaking-technology-bot">
                <h3 class="headline text-center">Thông số kỹ thuật</h3>
                <ul class="nav nav-tabs" id="myTab" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" id="tabInfoProduct" data-toggle="tab" href="javascript:void(0)"
                            role="tab" aria-controls="home" aria-selected="true">
                            <h2 class="tab-title">THÔNG SỐ SẢN PHẨM</h2>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="tabBatteryPackages" data-toggle="tab" href="javascript:void(0)"
                            role="tab" aria-controls="profile" aria-selected="false">
                            <h2 class="tab-title">DỊCH VỤ PIN</h2>
                        </a>
                    </li>
                </ul>
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane  show active tabInfoProduct" id="tabInfoProduct" role="tabpanel"
                        aria-labelledby="tabInfoProduct">
                        <div class="breaking-battery-tab d-flex justify-content-between">
                            <div>
                        {!! $product->overview ?? '' !!}
                        </div>  
                        </div>  
                    </div>
                    <div class="tab-pane  tabBatteryPackages" id="tabBatteryPackages" role="tabpanel"
                        aria-labelledby="tabBatteryPackages">
                        <div class="breaking-battery-tab d-flex justify-content-between">
                            <div>
                            {!! $product->engine ?? '' !!}
                            </div>  
                            </div>  

                    </div>
                </div>
            </div>
            <div class="node_text">
                <p> *Độ dài quãng đường đi được và tốc độ tối đa đạt được trong phần giới thiệu này được thử nghiệm
                    trong điều kiện tiêu chuẩn của OSAKAR, các yếu tố khác có thể làm ảnh hưởng đến quãng đường thực tế,
                    ví dụ như tải trọng, nhiệt độ, tốc độ gió, điều kiện đường và thói quen di chuyển. Đồng thời dung
                    lượng tối đa của ắc quy sẽ bị giảm sau một thời gian sử dụng do đặc tính của nó.
                    *OSAKAR có quyền thay đổi hoặc sửa đổi bất kỳ thông số kỹ thuật nào mà không cần thông báo trước.
                </p>
            </div>
        </div>
    </section>
    <div class="fixed_policy">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                    <div class="menu_item_fixed">
                        <p><a href="/list-store/mien-bac" title="HỆ THỐNG CỬA HÀNG">
                                <img src="{{ asset('home/images/shop.png') }}" alt="shop">HỆ THỐNG CỬA HÀNG</a></p>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                    <div class="menu_item_fixed_policy">
                        <p><a href="#" title="ĐIỀU KHOẢN PHÁP LÝ"><img
                                    src="{{ asset('home/images/akar-icons_question.png') }}" alt="akar-icons_question">
                                ĐIỀU KHOẢN PHÁP LÝ</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>

<script src="//cdnjs.cloudflare.com/ajax/libs/bodymovin/5.6.4/lottie.min.js"></script>
<script src="//cdn.jsdelivr.net/npm/binary-toolbox@1.3.0"></script>
<script src="{{ asset('home/js/ladi_heidi.js') }}"></script>
<script defer type="text/javascript" src="{{ asset('home/js/pdp-page-xmd.js') }}"></script>
<script src="https://cdn.jsdelivr.net/npm/@mladenilic/threesixty.js/dist/threesixty.js"></script>
<script src="{{ asset('home/js/gallarey.js') }}"></script>
<script src="{{ asset('home/js/nispaviva.js') }}"></script>
<script defer src="{{ asset('home/js/jquery.fancybox.min.js') }}"></script>
@php
    $imageUrls = [];
@endphp
@if(!empty($images360))
    @foreach($images360 as $value)
        @php
            $imageUrls[] = $value->images;
        @endphp
    @endforeach
@endif
<script>
    var img360 = @json($imageUrls);
    if (img360 != '') {
        const threesixty = new ThreeSixty(document.getElementById('threesixty'), {
            image: img360,
            count: 31,
            perRow: 0,
            width: '100%',
            height: 680,
        });
    }
</script>
@endsection
