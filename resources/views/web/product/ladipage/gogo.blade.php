@extends('/web/index')
@section('content')

<link rel="stylesheet" href="{{ asset('home/css/pdp-page-xmd.css') }}" />
<link rel="stylesheet" href="{{ asset('home/css/ladiframe.css') }}" />
<link rel="stylesheet" href="{{ asset('home/css/style_ladi.css') }}" />




<main>
    <section class="hero-section">
        <div class="hero-main">
            <!-- Hình ảnh banner(section 1) -->
            <div class="hero-background">
            </div>
        </div>
        <style>
            /* Hình ảnh xe(section 2): hedi-dauxe.png */
            .hero-background {
                background: url('{{ $product->gogo_images_banner1 ?? '' }}') center / cover no-repeat;
            }

            @media (max-width: 1025px) {
                .hero-background {
                    background: url('{{ $product->gogo_images_banner1_mobile ?? '' }}') center / cover no-repeat;
                }
            }
        </style>
    </section>

    <div class="buy-wrapper-box">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                    <div class="title d-flex align-items-center aos-init aos-animate" data-aos="fade-left"
                        data-aos-duration="1000" style="height: 100%">
                        <!-- Tiêu đề, slogan xe -->
                        <h1>{{ $product->gogo_slogan ?? '' }}</h1>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                    <div class="breaking-technology section" id="pdp-breaking-technology">
                        <div class="breaking-wrap" style="padding: 0">
                            <div class="breaking-top d-flex justify-content-end">
                                <div class="breaking-top__title-btn" style="margin-top: 0">
                                    <span class="">{{number_format($product->product_price ?? 0)}} VNĐ</span>
                                    <a href="/" class="add-to-cart-v3s btn-pdp btn btn-primary effect-apollo"
                                        data-pid="VF-ZFG-ESNA5LHH-REQ"><span>Mua Ngay</span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section class="section section-tinhnang">
        <div class="title-box-head">
            <h2>TÍNH NĂNG</h2>
            <p>Tính năng hiện đại, thân thiện với người dùng, bảo mật an toàn</p>
        </div>
        <div class="tinhnang-owl story-items">
            <div data-story-track="" class="tinhnang-items-track owl-carousel owl-theme">
                <!-- Hình ảnh tính năng(section 2) -->

                @if(!empty($gogo_images_banner2_multi))
                    @foreach($gogo_images_banner2_multi as $value)
                        <div class="story-item container">
                            <figure class="image-story image-story--smart-2">
                                <img src="{{ $value->images }}" alt="tn_2">
                            </figure>
                        </div>
                    @endforeach
                @endif
            </div>
            <button class="story-prev" data-story-prev="" disabled=""></button>
            <button class="story-next" data-story-next=""></button>
        </div>
        <div class="group-wrapper-func">
            <div class="d-flex align-items-center justify-content-between">
                <!-- Thông tin chi tiết xe -->
                {!! $product->gogo_desc_3 ?? '' !!}
            </div>
        </div>
    </section>


    <section class="section section-feature">
        <!-- Section 3 mô tả xe -->
        <div class="feature-bot-top-1 d-flex align-items-center">
            <div class="feature-box-top-1-left-image">
                <div class="image">
                    <img src="{{ $product->gogo_images_banner4 ?? ''}}" alt="feature1_1">
                </div>
            </div>
            <div class="feature-box-top-1-left-content">
                <div class="feature-box-top-1-left-box-content aos-init aos-animate" data-aos="fade-up"
                    data-aos-duration="2000">
                    <h3>{{$product->gogo_title_banner4 ?? ''}}</h3>
                    <p>{{$product->gogo_desc_banner4 ?? ''}}</p>
                </div>
            </div>
        </div>
        <div class="feature-bot-top-1 d-flex align-items-center flex-roate">
            <div class="feature-box-top-1-left-image feature-box-top-2-left-image-style">
                <div class="image">
                    <img src="{{ $product->gogo_images_banner5 ?? '' }}" alt="feature1_2">
                </div>
            </div>
            <div class="feature-box-top-1-left-content feature-box-top-2-left-content-style aos-init aos-animate"
                data-aos="fade-up" data-aos-duration="2000">
                <div class="feature-box-top-1-left-box-content">
                    <h3>{{$product->gogo_title_banner5 ?? ''}}</h3>
                    <p>{{$product->gogo_desc_banner5 ?? ''}}</p>
                </div>
            </div>
        </div>
    </section>

    <section class="section section-experience">
        <div class="container">
            <div class="title-box-head text-center ">
                <h2 class="text-uppercase">Trải nghiệm niềm vui, cảm nhận sự an toàn</h2>
                <p>Cảm nhận sự an toàn qua những tính năng và thông báo chủ động, luôn bảo vệ bạn.</p>
                <p>Công nghệ Osakar là những người bạn hiểu rõ nhất, như những người đồng hành đồng tâm.</p>
            </div>
        </div>

        <!-- Section trải nghiệm niềm vui, cảm nhận sự an toàn -->

        <div class="breaking-experience-tabs breaking-technology-bot">
            <ul class="nav nav-tabs" id="myTab" role="tablist">

                <!-- tiêu đề mô tả -->

                <li class="nav-item">
                    <a class="nav-link active" id="tabexperience1" data-toggle="tab" href="javascript:void(0)"
                        role="tab" aria-controls="home" aria-selected="true">{{$product->gogo_title_banner6 ?? ''}}
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="tabexperience2" data-toggle="tab" href="javascript:void(0)" role="tab"
                        aria-controls="profile" aria-selected="false">{{$product->gogo_title_banner7 ?? ''}}
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="tabexperience3" data-toggle="tab" href="javascript:void(0)" role="tab"
                        aria-controls="profile" aria-selected="false">{{$product->gogo_title_banner8 ?? ''}}
                    </a>
                </li>
            </ul>
            <div class="tab-content">
                <!-- nội dung mô tả & ảnh -->
                <div class="tab-pane show active tabexperience1" id="tabexperience1" role="tabpanel"
                    aria-labelledby="tabexperience1">
                    <div class="tab-pane-info d-flex justify-content-center">

                        <div class="block-tabs text-center">
                            <p>{{$product->gogo_desc_banner6 ?? ''}}</p>

                            <img class="mx-auto" src="{{ $product->gogo_images_banner6 ?? '' }}" alt="image-exp-tabs">
                        </div>

                    </div>
                </div>
                <div class="tab-pane tabexperience2" id="tabexperience2" role="tabpanel"
                    aria-labelledby="tabexperience2">
                    <div class="tab-pane-info d-flex justify-content-center">

                        <div class="block-tabs text-center">
                            <p>{{$product->gogo_desc_banner7 ?? ''}}</p>

                            <img class="mx-auto" src="{{ $product->gogo_images_banner7 ?? '' }}" alt="image-exp-tabs">
                        </div>

                    </div>
                </div>
                <div class="tab-pane tabexperience3" id="tabexperience3" role="tabpanel"
                    aria-labelledby="tabexperience3">
                    <div class="tab-pane-info d-flex justify-content-center">

                        <div class="block-tabs text-center">
                            <p>{{$product->gogo_desc_banner8 ?? ''}}</p>

                            <img class="mx-auto" src="{{ $product->gogo_images_banner8 ?? ''}}" alt="image-exp-tabs">
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- phần này chung chắc cho vào nội dung độc lập -->
    <section class="page-block-image page-block-dong-co-xanh" id="dong-co-xanh">
        <div class="breaking-wrap">
            <div class="row">
                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                    <div class="dong-co-xanh_img ">
                        <div class="wrap_image aos-init aos-animate" data-aos="zoom-out-down" data-aos-duration="10000">
                            <img src="{{$product->block_dongco_image ?? ''}}" alt="dongcoxanh">
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 aos-init aos-animate" data-aos="fade-up"
                    data-aos-duration="2000">
                    <div class="dong-co-xanh_text">
                        {!! $product->dongco_content ?? '' !!}
                        <!-- <div class="text_head">
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
                                cuộn mật độ dày cao gọn gàng phẳng khe hở ít, giúp hiệu suất của động cơ tăng 35 %.
                                Bộ
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
                        </div> -->
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- màu sắc -->
    <section class="section section-color">

        <div class="head_color_title">
            <h2>Đa dạng màu sắc</h2>
            <p>Mỗi màu sắc đều mang lại một phong cách riêng biệt cho người lái, thể hiện được cá tính và sở thích
                của
                họ.</p>
        </div>

        <div class="top-main-img">
            <div class="myThumbSlider">
                @if(!empty($icon_images) && !empty($color_image))
                    @for($i = 0; $i < count($icon_images); $i++)
                        <div class>
                            <picture>
                                <img data-lazy="{{ $color_image[$i]->images }}" title alt="" width="100%" />
                            </picture>
                        </div>
                    @endfor
                @endif
            </div>
        </div>
        <div class="top-main-control">
            <div class="mySliderTop" data-showitem="7">
                @if(!empty($icon_images))
                    @foreach($icon_images as $value)
                        <div class="item-myThumb">
                            <img src="{{$value->images}}" alt="màu vàng">
                        </div>
                    @endforeach
                @endif
            </div>
            <div class="box-control-nav">
                <div class="btn-arrow button-prev"></div>
                <div class="btn-arrow button-next"></div>
            </div>
            <div style="clear: left"></div>
        </div>
        <div style="clear: left"></div>
    </section>

    <!-- ảnh 360 -->
    <section class="page-block-image page-block-image-360 product-360-views product-360-views-gogo" id="pdp-img-360"
        style="background: #040406;">
        <div class="product-images-list">
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

    <section id="section-gallery" class="section section-gallery progressive-image" data-component-list="Gallery">
        <input id="gallery-toggle-01" type="radio" class="gallery-toggle d-none" name="gallery" checked>
        <input id="gallery-toggle-02" type="radio" class="gallery-toggle d-none" name="gallery">
        <input id="gallery-toggle-03" type="radio" class="gallery-toggle d-none" name="gallery">

        <!-- Nâng cấp chính bạn -->
        <div class="gallery-header">
            <div class="gallery-header-content">
                <h3 class="gallery-title">{{$product->gogo_title_banner12 ?? ''}}</h3>
                <p class="gallery-copy">{{$product->gogo_desc_banner12 ?? ''}}</p>
                <button class="cta-button cta-button--gallery btn btn-button"><a>
                        Tìm hiểu ngay
                    </a></button>
            </div>
        </div>

        <!-- gallery -->

        <div class="gallery-container">
            <div class="gallery-images hidden-xs hidden-sm">

                @if(!empty($gogo_images_banner13))
                    @foreach($gogo_images_banner13 as $value)
                        <figure class="gallery-image gallery-image--{{$value->id}}">
                        </figure>
                    @endforeach
                @endif

                @if(!empty($gogo_images_banner13))
                    @foreach($gogo_images_banner13 as $value)

                        <style>
                            .gallery-image--{{$value->id}} {
                                background-image: url("{{asset($value->images)}}")
                            }
                        </style>

                    @endforeach
                @endif
            </div>

            <div class="gallery-images hidden-md hiddem-lg">

                @if(!empty($gogo_images_banner13_mobile))
                    @foreach($gogo_images_banner13_mobile as $value)
                        <figure class="gallery-image gallery-image--{{$value->id}}">
                        </figure>
                    @endforeach
                @endif

                @if(!empty($gogo_images_banner13_mobile))
                    @foreach($gogo_images_banner13_mobile as $value)
                        <style>
                            .gallery-image--{{$value->id}} {
                                background-image: url("{{asset($value->images)}}")
                            }
                        </style>

                    @endforeach
                @endif
            </div>

            <div class="gallery-dots hidden-xs hidden-sm">
                @if(!empty($gogo_images_banner13))
                    @foreach($gogo_images_banner13 as $value)
                        <button class="gallery-dot"></button>
                    @endforeach
                @endif
            </div>

            <div class="gallery-dots hidden-md hidden-lg">
                @if(!empty($gogo_images_banner13_mobile))
                    @foreach($gogo_images_banner13_mobile as $value)
                        <button class="gallery-dot"></button>
                    @endforeach
                @endif
            </div>

            <button class="gallery-close"></button>
            <button class="gallery-prev"></button>
            <button class="gallery-next"></button>
        </div>
    </section>


    <section class="section section-tienich">
        <div class="container">
            <div class="title-box-head text-center ">
                <h2 class="text-uppercase">TIỆN ÍCH</h2>
            </div>
        </div>

        <div class="breaking-experience-tabs breaking-technology-bot">
            <ul class="nav nav-tabs" id="myTab" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" id="tienich1" data-toggle="tab" href="javascript:void(0)" role="tab"
                        aria-controls="home" aria-selected="true">{{$product->gogo_title_banner9 ?? ''}}
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="tienich2" data-toggle="tab" href="javascript:void(0)" role="tab"
                        aria-controls="profile" aria-selected="false">{{$product->gogo_title_banner10 ?? ''}}
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="tienich3" data-toggle="tab" href="javascript:void(0)" role="tab"
                        aria-controls="profile" aria-selected="false">{{$product->gogo_title_banner11 ?? ''}}
                    </a>
                </li>
            </ul>
            <div class="tab-content">
                <div class="tab-pane show active tienich1" id="tienich1" role="tabpanel" aria-labelledby="tienich1">
                    <div class="tab-pane-info d-flex justify-content-center">

                        <div class="row" style="width: 100%">
                            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6" style="padding: 0">
                                <img class="img" src="{{ $product->gogo_images_banner9 ?? '' }}" alt="tienich_1">
                            </div>
                            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6" style="padding: 0">
                                <div class="tabs-ck-editor d-flex align-items-center">
                                    <div>{!! $product->gogo_desc_banner9 ?? '' !!}</div>

                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="tab-pane tienich2" id="tienich2" role="tabpanel" aria-labelledby="tienich2">
                    <div class="breaking-battery-tab d-flex justify-content-between">
                        <div class="row" style="width: 100%">
                            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6" style="padding: 0">
                                <img class="img" src="{{ $product->gogo_images_banner10 ?? '' }}" alt="tienich_1">
                            </div>
                            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6" style="padding: 0">
                                <div class="tabs-ck-editor d-flex align-items-center">
                                    <div>{!! $product->gogo_desc_banner10 ?? '' !!}</div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane tienich3" id="tienich3" role="tabpanel" aria-labelledby="tienich3">
                    <div class="breaking-battery-tab d-flex justify-content-between">
                        <div class="row" style="width: 100%">
                            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6" style="padding: 0">
                                <img class="img" src="{{ $product->gogo_images_banner11 ?? ''}}" alt="tienich_1">
                            </div>
                            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6" style="padding: 0">
                                <div class="tabs-ck-editor d-flex align-items-center">
                                    <div>{!! $product->gogo_desc_banner11 ?? '' !!}</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="breaking-technology section" id="pdp-breaking-technology">
        <div class="breaking-wrap">

            <div class="breaking-technology-bot">
                <div class="parts-bike__head_text text-center block_center">
                    <h2>
                        Thông số kỹ thuật
                    </h2>
                </div>
                <!-- tab thông số -->
                <ul class="nav nav-tabs" id="myTab" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" id="tabInfoProduct" data-toggle="tab" href="javascript:void(0)"
                            role="tab" aria-controls="home" aria-selected="true">
                            <h2 class="tab-title">Tổng quan</h2>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="tabBatteryPackages" data-toggle="tab" href="javascript:void(0)"
                            role="tab" aria-controls="profile" aria-selected="false">
                            <h2 class="tab-title">Khung xe</h2>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="tabdongcoPackages" data-toggle="tab" href="javascript:void(0)"
                            role="tab" aria-controls="profile" aria-selected="false">
                            <h2 class="tab-title">Động cơ</h2>
                        </a>
                    </li>
                </ul>
                <div class="tab-content" id="myTabContent">
                    <div class="tabInfoProduct" id="tabInfoProduct" role="tabpanel" aria-labelledby="info-tab">
                        <div class="tab-pane-info d-flex justify-content-between">
                            {!! $product->overview !!}
                        </div>
                    </div>
                    <div class="tabBatteryPackages" id="tabBatteryPackages" role="tabpanel"
                        aria-labelledby="battery-tab">
                        <div class="tab-pane-info breaking-battery-tab d-flex justify-content-between">

                            {!! $product->chassis !!}

                        </div>
                    </div>
                    <div class="tabdongcoPackages" id="tabdongcoPackages" role="tabpanel" aria-labelledby="battery-tab">
                        <div class="tab-pane-info breaking-battery-tab d-flex justify-content-between">

                            {!! $product->engine !!}


                        </div>
                    </div>
                </div>
            </div>
            <div class="node_text">
                {!! $product->note !!}
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
<script src="{{ asset('home/js/ladi_heidi.js') }}"></script>
<script defer type="text/javascript" src="{{ asset('home/js/pdp-page-xmd.js') }}"></script>
<script src="https://cdn.jsdelivr.net/npm/@mladenilic/threesixty.js/dist/threesixty.js"></script>
<script src="{{ asset('home/js/gallarey.js') }}"></script>
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
            height: 800,
        });
    }
</script>
@endsection