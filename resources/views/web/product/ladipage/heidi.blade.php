@extends('/web/index')
@section('content')

<link rel="stylesheet" href="{{ asset('home/css/pdp-page-xmd.css') }}" />
<link rel="stylesheet" href="{{ asset('home/css/ladiframe.css') }}" />
<link rel="stylesheet" href="{{ asset('home/css/style_ladi.css') }}" />

<main>

    <!-- Hình ảnh banner(section 1): sec_1_banner.png -->
    <section class="hero-section">
        <div class="hero-main">
            <div class="hero-background"
                style="background: url({{ $product->heidi_images_banner1 ?? '' }}) center / cover no-repeat;"></div>
        </div>
    </section>

    <section class="section section-break-a progressive-image">
        <div class="break-a-duration"></div>
        <div class="animation-layer">
            <div class="break-spotlight">

            </div>
            <div class="break-scooter">
                <p class="heidi_text_head_line_top">
                    <!-- Hình ảnh tên xe(section 2): HEIDI.png -->
                    <img src="{{ $product->heidi_images_banner2 ?? '' }}" alt="HEIDI">
                </p>
                <p class="heidi_text_head_line_bottom">
                    <span>TỐI ƯU TRẢI NGHIỆM</span>
                    <span>TỰ DO KHÁM PHÁ</span>
                </p>
            </div>
            <div class="break-words" style="display: none">
                <canvas></canvas>
            </div>
        </div>
        <style>
            /* Hình ảnh xe(section 2): hedi-dauxe.png */
            .break-scooter::before {
                background-image: url('{{ $product->heidi_images_banner3 ?? '' }}');
            }
        </style>
    </section>

    <section class="section section-fast progressive-image">
        <div class="section-content">
            <div class="row justify-content-center text-center">
                <div class="col-xl-6 col-lg-8 col-md-10">
                    <div class="dash-line">
                        <div class="dash-line-top"></div>
                        <div class="dash-line-bottom"></div>
                    </div>
                    <h3 class="section-title section-title--animation">Hiệu suất cao</h3>
                    <p class="section-description">Khối động cơ điện hoạt động với hiệu suất cao, giúp xe có thể vận
                        hành khỏe và êm trên mọi dạng địa hình.</p>
                </div>
            </div>
            <style>
                /* Hình ảnh xe(section 3): OSK_7822.png */
                .section-fast::after {
                    background: url('{{ $product->heidi_images_banner4 ?? '' }}') center bottom / auto 100% no-repeat;
                }

                @media (min-width: 768px) {
                    .section-fast::after {
                        background-size: 65%;
                    }
                }
            </style>
        </div>

        <div class="key-number-wrapper">
            <div class="key-number-list">
                <div class="key-number__bg">
                    <div class="key-number-sizer"></div>
                </div>
                <div class="key-number-item">
                    <div class="key-number-sizer">
                        <div class="key-number d-flex flex-column justify-content-between">
                            <div class="d-flex key-number_box">
                                <div class="key-number__value">48V20Ah</div>
                                <div class="key-number__unit">DUNG LƯỢNG</div>
                            </div>
                            <div class="key-number__content">ACQUY</div>
                        </div>
                    </div>
                </div>
                <div class="key-number-item">
                    <div class="key-number-sizer">
                        <div class="key-number d-flex flex-column justify-content-between">
                            <div class="d-flex key-number_box">
                                <div class="key-number__value">500W</div>
                                <div class="key-number__unit">VẬN HÀNH KHOẺ, ÊM</div>
                            </div>
                            <div class="key-number__content">ĐỘNG CƠ</div>
                        </div>
                    </div>
                </div>
                <div class="key-number-item">
                    <div class="key-number-sizer">
                        <div class="key-number d-flex flex-column justify-content-between">
                            <div class="d-flex key-number_box">
                                <div class="key-number__value">41KM/H</div>
                                <div class="key-number__unit">DI CHUYỂN NHANH CHÓNG</div>
                            </div>
                            <div class="key-number__content">VẬN TỐC</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Hình ảnh xe da dạng màu sắc(section 4): Banner_color.png -->
    <section class="section section-color"
        style="background: #000 url({{ $product->heidi_images_banner5 ?? '' }}) no-repeat;">

        <div class="head_color_title">
            <h2>Đa dạng màu sắc</h2>
            <p>Mỗi màu sắc đều mang lại một phong cách riêng biệt cho người lái, thể hiện được cá tính và sở thích
                của
                họ.</p>
        </div>

        <!-- load icon màu sắc và hình ảnh -->
        <div class="top-main-img">
            <div class="myThumbSlider">
                @if(!empty($icon_images) && !empty($color_image))
                    @for($i = 0; $i < count($icon_images); $i++)
                        <div class>
                            <picture>
                                <img data-lazy="{{ $color_image[$i]->images }}" title alt="Xe máy điện VinFast Evo200 màu vàng"
                                    width="100%" />
                            </picture>
                        </div>
                    @endfor
                @endif
            </div>
        </div>
        <div class="top-main-control">
            <div class="mySliderTop" data-showitem="8">
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


    <section class="section section-design progressive-image">
        <div class="design-bg"></div>
        <div class="section-content">
            <div class="row justify-content-center text-center">
                <div class="col-xl-6 col-lg-8 col-md-10">
                    <div class="dash-line">
                        <div class="dash-line-top"></div>
                        <div class="dash-line-bottom"></div>
                    </div>
                    <h3 class="section-title section-title--animation">Perfectly Stealth</h3>
                    <p class="section-description">Every surface has been poured-over, polished, and crafted to
                        elevate
                        you beyond the everyday. Built for the few who are constantly seeking more.</p>
                </div>
            </div>

            <!-- Section Perfectly Stealth -->

            <div class="design-topics">
                <div class="design-topic">
                    <div class="design-topic__image aos-init aos-animate" data-aos="fade-up" data-aos-duration="2000">
                        <div class="image-design image-design--dashboard"></div>
                    </div>
                    <div class="design-topic__content aos-init aos-animate" data-aos="fade-up-left"
                        data-aos-duration="2000">
                        <div>
                            <h4 class="subhead">{{$product->heidi_title_banner6 ?? ''}}</h4>
                            <p>{{$product->heidi_desc_banner6 ?? ''}}</p>
                        </div>
                    </div>
                </div>
                <div class="design-topic">
                    <div class="design-topic__image aos-init aos-animate" data-aos="fade-up" data-aos-duration="2000">
                        <div class="image-design image-design--seat"></div>
                    </div>
                    <div class="design-topic__content aos-init aos-animate" data-aos="fade-up-right"
                        data-aos-duration="2000">
                        <div>
                            <h4 class="subhead">{{$product->heidi_title_banner7 ?? ''}}</h4>
                            <p>{{$product->heidi_desc_banner7 ?? ''}}</p>
                        </div>
                    </div>
                </div>
                <div class="design-topic">
                    <div class="design-topic__image aos-init aos-animate" data-aos="fade-up" data-aos-duration="2000">
                        <div class="image-design image-design--floor"></div>
                    </div>
                    <div class="design-topic__content aos-init aos-animate" data-aos="fade-up-left"
                        data-aos-duration="2000">
                        <div>
                            <h4 class="subhead">{{$product->heidi_title_banner8 ?? ''}}</h4>
                            <p>{{$product->heidi_desc_banner8 ?? ''}}</p>
                        </div>
                    </div>
                </div>
                <div class="design-topic">
                    <div class="design-topic__image aos-init aos-animate" data-aos="fade-up" data-aos-duration="2000">
                        <div class="image-design image-design--wheel"></div>
                    </div>
                    <div class="design-topic__content aos-init aos-animate" data-aos="fade-up-right"
                        data-aos-duration="2000">
                        <div>
                            <h4 class="subhead">{{$product->heidi_title_banner9 ?? ''}}</h4>
                            <p>{{$product->heidi_desc_banner9 ?? ''}}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>

    <!-- ảnh 360 -->
    <section class="page-block-image page-block-image-360 product-360-views product-360-views-gogo" id="pdp-img-360"
        style="background: #1B1B1E;">
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

    <!-- Section chi tiết nổi bật xe -->
    <section class="section section-performance progressive-image">
        <div class="performance-gallery">
            <div class="performance performance--caliper">
                <div class="performance-bg performance-bg--caliper"></div>
                <style>
                    /* Hình ảnh 2 */
                    .performance-bg--caliper {
                        background-image: url({{ $product->heidi_images_banner10_1 ?? '' }});
                    }

                    /* Hình ảnh 1 */
                    .performance-bg--caliper::before {
                        background-image: url({{ $product->heidi_images_banner10 ?? '' }});
                    }
                </style>
                <div class="performance-content">
                    <!-- nội dung từng phần -->
                    <div class="section-content">
                        <div class="performance-content-sizer">
                            <h4 class="subhead">{{ $product->heidi_title_banner10 ?? ''}}</h4>
                            <p>{{ $product->heidi_desc_banner10 ?? '' }}
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="performance performance--f-suspension">
                <div class="performance-bg performance-bg--f-suspension"></div>
                <style>
                    /* Hình ảnh 2 */
                    .performance-bg--f-suspension {
                        background-image: url({{ $product->heidi_images_banner11_1 ?? '' }});
                    }

                    /* Hình ảnh 1 */
                    .performance-bg--f-suspension::before {
                        background-image: url({{ $product->heidi_images_banner11 ?? '' }});
                    }
                </style>
                <div class="performance-content">
                    <!-- nội dung từng phần -->
                    <div class="section-content">
                        <div class="performance-content-sizer">
                            <h4 class="subhead">{{ $product->heidi_title_banner11 ?? '' }}</h4>
                            <p>{{ $product->heidi_desc_banner11 ?? '' }}</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="performance performance--r-suspension">
                <div class="performance-bg performance-bg--r-suspension"></div>
                <style>
                    /* Hình ảnh 2 */
                    .performance-bg--r-suspension {
                        background-image: url({{ $product->heidi_images_banner12_1 ?? '' }});
                    }

                    /* Hình ảnh 1 */
                    .performance-bg--r-suspension::before {
                        background-image: url({{ $product->heidi_images_banner12 ?? '' }});
                    }
                </style>
                <div class="performance-content">
                    <!-- nội dung từng phần -->
                    <div class="section-content">
                        <div class="performance-content-sizer">
                            <h4 class="subhead">{{ $product->heidi_title_banner12 ?? '' }}</h4>
                            <p>{{ $product->heidi_desc_banner12 ?? '' }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section section-gallarey">
        <img src="{{ $product->heidi_images_banner13 ?? '' }}" alt="section8_gallarey">
    </section>

    <!-- thông số kỹ thuật -->
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
<script src="//cdn.jsdelivr.net/npm/binary-toolbox@1.3.0"></script>
<script src="{{ asset('home/js/ladi_heidi.js') }}"></script>
<script src="https://cdn.jsdelivr.net/npm/@mladenilic/threesixty.js/dist/threesixty.js"></script>
<script defer type="text/javascript" src="{{ asset('home/js/pdp-page-xmd.js') }}"></script>
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