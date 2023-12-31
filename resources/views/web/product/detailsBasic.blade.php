@extends('/web/index')
@section('page_name', $product->page_title_tag)
@section('key_words', $product->keyword_tags)
@section('description', $product->description_card)
@section('content')
<link rel="stylesheet" href="{{ asset('home/css/pdp-page-xmd.css') }}" />
<link rel="stylesheet" href="{{ asset('home/css/slick.min.css') }}" />


<div class="page v3s" data-action="Page-Show">


    <div class="pdp-page pdp-evo200" id="pdp-page">
        <section class="page-block top-main section active" id="pdp-top-main">
            <div class="box-block box-top-main">
                <div class="top-main-wrap">
                    <!-- fixx -->
                    <h1 class="hidden-h1">Mua xe máy điện VinFast Evo200 - Có hỗ trợ trả góp - Thanh toán dễ dàng,
                        nhanh chóng</h1>
                    <div class="top-bg"></div>
                    <div class="top-main-head">
                        <!-- fixx -->
                        <h3 class="top-main-hsub show-pc js-aos" data-aos="fade-down" data-aos-delay="0" data-aos-duration="300">OSAKAR</h3>
                        <!-- title -->
                        <h2 class="top-main-htitle">{{$product->product_name}}</h2>
                    </div>
                    <div class="top-main-info js-aos" data-aos="fade-right" data-aos-delay="100" data-aos-duration="300">
                        <ul class="top-main-list">
                            <li class="top-main-item">
                                <p class="text">Quãng đường di chuyển</p>
                                <!-- Quãng đường di chuyển -->
                                <p class="no">{{$product->distance_traveled}} km</p>
                            </li>
                            <li class="top-main-item">
                                <p class="text">Vận tốc lớn nhất</p>
                                <!-- Vận tốc lớn nhất -->
                                <p class="no">{{$product->maximum_speed}} km/h</p>
                            </li>
                            <li class="top-main-item">
                                <p class="text">Khối lượng cho phép chở</p>
                                <!-- Khối lượng cho phép chở -->
                                <p class="no">{{$product->allowable_weight_to_carry}} kg</p>
                            </li>
                        </ul>
                    </div>
                    <!-- giá -->
                    <p class="top-main-pt2 top-main-ptext top-main__price-text js-aos" data-aos="fade-left" data-aos-delay="0" data-aos-duration="300"><b>{{number_format($product->product_price)}}
                            VNĐ</b>

                        <br class="show-pc"><span class="desc">(Giá đã bao gồm VAT, 01 bộ sạc)</span></span>
                    </p>
                    <div class="top-main-btn js-aos" data-aos="fade-left" data-aos-delay="100" data-aos-duration="300">

                        <div class="top-btn">
                            <a href class="add-to-cart-v3s btn-pdp btn btn-primary effect-apollo" data-pid="VF-ZFG-ESNA5LHH-REQ"><span>Mua Ngay</span></a>
                        </div>
                    </div>

                    <div class="top-main-img">
                        <div class="mySliderTop">
                            <!-- Màu sắc xe -->
                            @if(!empty($color_image))
                            @foreach($color_image as $value)
                            <div class>
                                <picture>
                                    <source srcset="{{$value->images}}" type="image/webp" />
                                    <img data-lazy="{{$value->images}}" title alt="Xe máy điện VinFast Evo200 màu vàng" width="100%" />
                                </picture>
                            </div>
                            @endforeach
                            @endif
                        </div>
                    </div>
                </div>
            </div>
            <div class="top-main-control js-aos" data-aos="fade-left" data-aos-delay="100" data-aos-duration="300">
                <div class="myThumbSlider" data-showitem="7">
                    <!-- icon màu sắc -->
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
            </div>
        </section>
        <section class="page-block banner-info section" id="pdp-banner-info">
            <div class="box-block box-banner-info">
                <div class="banner-info-left">
                    <div class="banner-info-group">
                        <!-- Mô tả 1 -->
                        <div class="banner-info-item js-aos" data-aos="fade-right" data-aos-delay="0" data-aos-duration="300">
                            <h2 class="banner-info-name">{{$product->describe_input_1}}</h2>
                            <p class="banner-info-desc">{{$product->describe_textarea_1}}</p>
                        </div>
                        <!-- Mô tả 2 -->
                        <div class="banner-info-item js-aos" data-aos="fade-right" data-aos-delay="200" data-aos-duration="300">
                            <h2 class="banner-info-name">{{$product->describe_input_2}}</h2>
                            <p class="banner-info-desc">{{$product->describe_textarea_2}}</p>
                        </div>
                    </div>
                </div>
                <div class="banner-info-center">
                    <div class="banner-info-img">
                        <!-- Ảnh slide mô tả tính năng -->
                        <picture>
                            @if(!empty($feature_description))
                            @foreach($feature_description as $value)
                            <img data-src="{{$value->images}}" type="image/webp" alt="Xe máy điện VinFast Evo200 thiết kế sang trọng" width="100%" class="img-lazy" />
                            @endforeach
                            @endif
                        </picture>
                    </div>
                </div>
                <div class="banner-info-right">
                    <div class="banner-info-group">
                        <!-- Mô tả 3 -->
                        <div class="banner-info-item js-aos" data-aos="fade-left" data-aos-delay="0" data-aos-duration="300">
                            <h2 class="banner-info-name">{{$product->describe_input_3}}</h2>
                            <p class="banner-info-desc">{{$product->describe_textarea_3}}</p>
                        </div>
                        <!-- Mô tả 4 -->
                        <div class="banner-info-item js-aos" data-aos="fade-left" data-aos-delay="200" data-aos-duration="300">
                            <h2 class="banner-info-name">{{$product->describe_input_4}}</h2>
                            <p class="banner-info-desc">{{$product->describe_textarea_4}}</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="page-block-image page-block-image-360 product-360-views" id="pdp-img-360">
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
                <div class="top-btn">
                    <a href="" class="add-to-cart-v3s btn-pdp btn btn-primary effect-apollo" data-pid="VF-ZFG-ESNA5LHH-REQ"><span>Mua Ngay</span></a>
                </div>
            </div>
        </section>
        <section class="page-block parts-bike section" id="pdp-parts-bike">

            <div class="breaking-wrap">
                <div class="parts-bike__head_text">
                    <h2>
                        Không chỉ là phong cách thời thượng
                    </h2>
                    <p>
                        Nâng chất lượng - Trải nghiệm lái xe êm ái. Bứt phá công nghệ hiện đại, được tính hợp nhiều
                        tính năng thông minh.
                    </p>
                </div>
            </div>
            <div class="parts-bike__container">
                <!-- Ảnh chi tiết xe -->
                <div class="parts-bike__list parts-bike__list__owl owl-carousel owl-theme">
                    @if(!empty($vehicle_detail_photos))
                    @foreach($vehicle_detail_photos as $value)
                    <div class="parts-bike__item js-aos container" data-aos="fade-left" data-aos-delay="0" data-aos-duration="300">
                        <picture class="image-story">
                            <source class="img-srcset" data-srcset="{{ $value->images }}" type="image/webp" />
                            <img data-src="{{ $value->images }}" title="Evo200" alt="Hệ thống đèn LED và đèn pha projector của xe máy điện VinFast Evo200" width="100%" class="img-lazy" />
                        </picture>
                    </div>
                    @endforeach
                    @endif
                </div>
            </div>
        </section>
        <section class="page-block parts-bike section" id="pdp-parts-bike">
            <div class="parts-bike__head_text text-center block_center">
                <h2>
                    Dẫn đầu phong cách thời thượng
                </h2>
                <p>
                    Nâng chất lượng - Trải nghiệm lái xe êm ái. Bứt phá công nghệ hiện đại, được tính hợp nhiều tính
                    năng thông minh.
                </p>
            </div>
            <div class="parts-bike__container padding-container">
                <!-- Ảnh thực tế -->
                <div class="parts-bike__list parts-bike__list__gallarey">
                    @if(!empty($actual_photo))
                    @foreach($actual_photo as $value)
                    <div class="parts-bike__item js-aos aos-init aos-animate" data-aos="fade-left" data-aos-delay="0" data-aos-duration="300">
                        <picture>
                            <source class="img-srcset" data-srcset="{{$value->images}}" type="image/webp" srcset="{{$value->images}}">
                            <img data-src="{{$value->images}}" title="Evo200" alt="Hệ thống đèn LED và đèn pha projector của xe máy điện VinFast Evo200" width="100%" class="img-lazy" src="{{$value->images}}">
                        </picture>

                    </div>
                    @endforeach
                    @endif


                </div>
            </div>
        </section>
        <section class="page-block battery-technology section" id="pdp-battery-technology">
            <div class="battery-technology__container">
                <div class="battery-technology__item js-aos" data-aos="fade-left" data-aos-delay="0" data-aos-duration="300">
                    <!-- Ảnh Đại diện -->
                    @if(!empty($product->representative_image))
                    <img data-src="{{$product->representative_image}}" title="Evo200" alt="Xe máy điện VinFast Evo200 ứng dụng công nghệ pin LFP tiên tiến" width="100%" class="img-lazy" />
                    @endif
                </div>
                <div class="battery-technology__content">
                    <!-- Chi tiết -->
                    {!! $product->detail !!}
                </div>
            </div>
        </section>
        <section class="page-block breaking-technology section" id="pdp-breaking-technology">
            <div class="breaking-wrap">
                <div class="breaking-top d-flex justify-content-between ">
                    <div class="breaking-top__title">
                        <h2 class="breaking-technology-banner breaking-top-decs">OSAKAR</h2>
                        <!-- title -->
                        <h2 class="breaking-technology-name">{{$product->product_name}}</h2>
                        <div class="breaking-top__title-btn">
                            <!-- giá -->
                            <span class>{{number_format($product->product_price)}} VNĐ</span>
                            <a href class="add-to-cart-v3s btn-pdp btn btn-primary effect-apollo" data-pid="VF-ZFG-ESNA5LHH-REQ"><span>Mua Ngay</span></a>
                        </div>
                        <h6 class="breaking-top__title-vat">Giá đã bao gồm VAT, 01 bộ sạc 400W và không bao gồm
                            pin.</h6>
                    </div>
                    <div class="breaking-top__img breaking-slick">
                        <div class="slick-slide">
                            <!-- Ảnh đại diện -->
                            @if(!empty($product->representative_image))
                            <picture>
                                <source class="img-srcset" data-srcset="{{$product->representative_image}}" type="image/webp" />
                                <img class="img-lazy" data-src="{{$product->representative_image}}" title alt="Thiết kế xe máy điện VinFast Evo200 màu vàng" width="100%" />
                            </picture>
                            @endif
                        </div>
                    </div>
                </div>
                <div class="breaking-technology-bot">
                    <div class="parts-bike__head_text text-center block_center">
                        <h2>
                            Thông số kỹ thuật
                        </h2>
                    </div>
                    <!-- tab thông số -->
                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="tabInfoProduct" data-toggle="tab" href="javascript:void(0)" role="tab" aria-controls="home" aria-selected="true">
                                <h2 class="tab-title">Tổng quan</h2>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="tabBatteryPackages" data-toggle="tab" href="javascript:void(0)" role="tab" aria-controls="profile" aria-selected="false">
                                <h2 class="tab-title">Khung xe</h2>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="tabdongcoPackages" data-toggle="tab" href="javascript:void(0)" role="tab" aria-controls="profile" aria-selected="false">
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
                        <div class="tabBatteryPackages" id="tabBatteryPackages" role="tabpanel" aria-labelledby="battery-tab">
                            <div class="breaking-battery-tab d-flex justify-content-between">
                                <div>
                                    {!! $product->chassis !!}
                                </div>
                            </div>
                        </div>
                        <div class="tabdongcoPackages" id="tabdongcoPackages" role="tabpanel" aria-labelledby="battery-tab">
                            <div class="breaking-battery-tab d-flex justify-content-between">
                                <div>
                                    {!! $product->engine !!}
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="page-block-image">
            <div class="breaking-wrap">
                <div class="wrap_image">
                    <img src="{{ asset('home/images/bg_facepr.png') }}" alt="coverimg">
                </div>
            </div>
        </section>
    </div>
</div>
<script defer type="text/javascript" src="{{ asset('home/js/slick.min.js') }}"></script>
<script defer type="text/javascript" src="{{ asset('home/js/pdp-page-xmd.js') }}"></script>
<script src="https://cdn.jsdelivr.net/npm/@mladenilic/threesixty.js/dist/threesixty.js"></script>
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

@include('/web/skinpart/formemail')

@endsection
