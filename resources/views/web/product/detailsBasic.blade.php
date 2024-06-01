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
                        <h3 class="top-main-hsub show-pc js-aos" data-aos="fade-down" data-aos-delay="0"
                            data-aos-duration="300">OSAKAR</h3>
                        <!-- title -->
                        <h2 class="top-main-htitle">{{$product->product_name}}</h2>
                    </div>
                    <div class="top-main-info js-aos" data-aos="fade-right" data-aos-delay="100"
                        data-aos-duration="300">
                        <ul class="top-main-list">
                            <li class="top-main-item">
                                <p class="text">Quãng đường di chuyển</p>
                                <!-- Quãng đường di chuyển -->
                                <p class="no"><span class="counter">{{$product->distance_traveled}}</span> km</p>
                            </li>
                            <li class="top-main-item">
                                <p class="text">Vận tốc lớn nhất</p>
                                <!-- Vận tốc lớn nhất -->
                                <p class="no"><span class="counter">{{$product->maximum_speed}}</span> km/h</p>
                            </li>
                            <li class="top-main-item">
                                <p class="text">Khối lượng cho phép chở</p>
                                <!-- Khối lượng cho phép chở -->
                                <p class="no"><span class="counter">{{$product->allowable_weight_to_carry}}</span> kg
                                </p>
                            </li>
                        </ul>
                    </div>
                    <!-- giá -->
                    <p class="top-main-pt2 top-main-ptext top-main__price-text js-aos" data-aos="fade-left"
                        data-aos-delay="0" data-aos-duration="300"><b>{{number_format($product->product_price)}}
                            VNĐ</b>

                        <br class="show-pc"><span class="desc">(Giá đã bao gồm VAT, 01 bộ sạc)</span></span>
                    </p>
                    <div class="top-main-btn js-aos" data-aos="fade-left" data-aos-delay="100" data-aos-duration="300">

                        <div class="top-btn">
                            <a href class="add-to-cart-v3s btn-pdp btn btn-primary effect-apollo"
                                data-pid="VF-ZFG-ESNA5LHH-REQ"><span>Mua Ngay</span></a>
                        </div>
                    </div>

                    <div class="top-main-img">
                        <div class="mySliderTop">
                            <div class>
                                <picture>
                                    <img data-lazy="https://osakar.vn/storage/uploads/1717211975-76374f2fbdbd4270fa69816fd1353fd36fa09ac53ac105e4eb14eda79fd2ef34.png"
                                        title alt="" width="100%" />
                                </picture>
                            </div>
                            <div class>
                                <picture>
                                    <img data-lazy="https://osakar.vn/storage/uploads/1717211975-90aa02e4830ceade47a14e6b63af5c56a086738b6ff32c7503ff5003b09bdb68.png"
                                        title alt="" width="100%" />
                                </picture>
                            </div>
                            <div class>
                                <picture>
                                    <img data-lazy="https://osakar.vn/storage/uploads/1717211977-f2de1cee5ec02a43dfabe6d077213f293f94e14869d24dd8ce838701a31fd92a.png"
                                        title alt="" width="100%" />
                                </picture>
                            </div>
                            <div class>
                                <picture>
                                    <img data-lazy="https://osakar.vn/storage/uploads/1717211977-fdc6195751b279d546f88b443fd5646eae1def21ddab6a2f1ad7545bd2dbe15e.png"
                                        title alt="" width="100%" />
                                </picture>
                            </div>
                            <div class>
                                <picture>
                                    <img data-lazy="https://osakar.vn/storage/uploads/1717211977-5ee37e1d7930070345a68eb010e417871487e296eddbfe156f12af033c59ccba.png"
                                        title alt="" width="100%" />
                                </picture>
                            </div>
                            <div class>
                                <picture>
                                    <img data-lazy="https://osakar.vn/storage/uploads/1717211977-6cc915b40b9beffe25fc54c67b34c529db82aa01f7664e04a7b0382d3b49055a.png"
                                        title alt="" width="100%" />
                                </picture>
                            </div>
                            <div class>
                                <picture>
                                    <img data-lazy="https://osakar.vn/storage/uploads/1717211977-2fdeb2eb217cdb627882d8eb9475579871206a3da2bbb94ba79c3b47644db421.png"
                                        title alt="" width="100%" />
                                </picture>
                            </div>
                            <div class>
                                <picture>
                                    <img data-lazy="https://osakar.vn/storage/uploads/1717211977-0e7166945c2d455f702656608359139638b7ac496ac91adca16d3e96f454cddf.png"
                                        title alt="" width="100%" />
                                </picture>
                            </div>
                            <div class>
                                <picture>
                                    <img data-lazy="https://osakar.vn/storage/uploads/1717211979-f6a93f0bce8fa69451e84fb045ca1a65da6b796acd7d745c7df3901f626402e2.png"
                                        title alt="" width="100%" />
                                </picture>
                            </div>
                            <div class>
                                <picture>
                                    <img data-lazy="https://osakar.vn/storage/uploads/1717211979-a00fa707cfca77fd9c8948647964dceb267021751bbad79fccd81e51309ea505.png"
                                        title alt="" width="100%" />
                                </picture>
                            </div>
                            <div class>
                                <picture>
                                    <img data-lazy="https://osakar.vn/storage/uploads/1717211979-a0a9c8cd4ada71ffde50cca91fb555263900f76566cd81f8eeb5c2ecdd4aa523.png"
                                        title alt="" width="100%" />
                                </picture>
                            </div>
                            <div class>
                                <picture>
                                    <img data-lazy="https://osakar.vn/storage/uploads/1717211979-09e52465fc284a0c48ed5925a5a62b56e676a3232bded7eecc28d514eede969b.png"
                                        title alt="" width="100%" />
                                </picture>
                            </div>
                            <div class>
                                <picture>
                                    <img data-lazy="https://osakar.vn/storage/uploads/1717211979-50badfe0f9fb9527d02b45785571a5396dd59e7ec773f6cd01fe48bf31b8634e.png"
                                        title alt="" width="100%" />
                                </picture>
                            </div>
                            <div class>
                                <picture>
                                    <img data-lazy="https://osakar.vn/storage/uploads/1717211979-43be213f6e6e3b89f4b2855d1f81cf49c1c237e2a0808e0be95bd2825e3ddf81.png"
                                        title alt="" width="100%" />
                                </picture>
                            </div>
                            <div class>
                                <picture>
                                    <img data-lazy="https://osakar.vn/storage/uploads/1717211981-fb4b4b72d34cb6d62206e52855f83b22406a9b6b47d7b279a549eeeb3fce3b3c.png"
                                        title alt="" width="100%" />
                                </picture>
                            </div>
                            <div class>
                                <picture>
                                    <img data-lazy="https://osakar.vn/storage/uploads/1717211981-36b0f2d89bacc0fa66b4c2457b0fd8ffb9854394e149d61b921af09e98fc26de.png"
                                        title alt="" width="100%" />
                                </picture>
                            </div>
                            <div class>
                                <picture>
                                    <img data-lazy="https://osakar.vn/storage/uploads/1717211981-fce9ad659d40ce35b9501f5a287ea0035ae00a15b2427510bbdede0c0b9764b8.png"
                                        title alt="" width="100%" />
                                </picture>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="top-main-control js-aos" data-aos="fade-left" data-aos-delay="100" data-aos-duration="300">
                <div class="myThumbSlider" data-showitem="5">
                    <!-- icon màu sắc -->
                    <div class="item-myThumb">
                        <img src="https://osakar.vn/storage/uploads/1717211898-7991363a7187adb035e2c8984c6a3d03dbc134aa5292d3b987bb5dbcc1da4e42.png"
                            alt="màu vàng">
                    </div>
                    <div class="item-myThumb">
                        <img src="https://osakar.vn/storage/uploads/1717211898-353cf9e5aba5d389ba0c447deb11a6d52b45bc0db712f29a40aaa2e23ba3b2ef.png"
                            alt="màu vàng">
                    </div>
                    <div class="item-myThumb">
                        <img src="https://osakar.vn/storage/uploads/1717211898-217796d70190d1e52a70a345cc5ede4dae8eebd8ca5397f622ff6e85facd5d65.png"
                            alt="màu vàng">
                    </div>
                    <div class="item-myThumb">
                        <img src="https://osakar.vn/storage/uploads/1717211898-59192bf6d0338bda821ef2e8117bef597182c166574690c434912cb925c1fb84.png"
                            alt="màu vàng">
                    </div>
                    <div class="item-myThumb">
                        <img src="https://osakar.vn/storage/uploads/1717211898-e8b370ba6dda5f836cb351ae497f08392ebbc47524a5d1e70b89c5e3ddbfba33.png"
                            alt="màu vàng">
                    </div>
                    <div class="item-myThumb">
                        <img src="https://osakar.vn/storage/uploads/1717211898-f2cabd6157cef9a4010f340583f51d1cf4888117cf054d1d009dd44ce249d6cd.png"
                            alt="màu vàng">
                    </div>
                    <div class="item-myThumb">
                        <img src="https://osakar.vn/storage/uploads/1717211899-fcd4507cb7e00e988260d1fae66d373abc629c17c2b268d7149d34dd24b050ef.png"
                            alt="màu vàng">
                    </div>
                    <div class="item-myThumb">
                        <img src="https://osakar.vn/storage/uploads/1717211899-220533ac9b885651a8f708a8f3b6424295ca99c8e4760b4a91b87bcb0c425623.png"
                            alt="màu vàng">
                    </div>
                    <div class="item-myThumb">
                        <img src="https://osakar.vn/storage/uploads/1717211899-690dc2457c4487b0d2d2f96b74c88156b7ce4b997d705ac006f3a39365aeba99.png"
                            alt="màu vàng">
                    </div>
                    <div class="item-myThumb">
                        <img src="https://osakar.vn/storage/uploads/1717211899-c1ae0c26b45dce783771b98ea08ed153ad50c6adf91f485e0ed1e13a5720b48e.png"
                            alt="màu vàng">
                    </div>
                    <div class="item-myThumb">
                        <img src="https://osakar.vn/storage/uploads/1717211899-d87d55f1181572208c484da279fb78aa97017df62eb798da8893ac8e273e7e7c.png"
                            alt="màu vàng">
                    </div>
                    <div class="item-myThumb">
                        <img src="https://osakar.vn/storage/uploads/1717211899-4510e6e0865b74b3a2bc2595eb222cb851c99ae5f9e124e5a8bda297e216f13a.png"
                            alt="màu vàng">
                    </div>
                    <div class="item-myThumb">
                        <img src="https://osakar.vn/storage/uploads/1717211899-8956c7f7478aabea71230d50e1bc53ad37075b701bc1367120dcf0b2b5e5ab9d.png"
                            alt="màu vàng">
                    </div>
                    <div class="item-myThumb">
                        <img src="https://osakar.vn/storage/uploads/1717211899-9e6c36e8d6c34faf669f2009d7036adcf272c975bad568879653b36669e5f523.png"
                            alt="màu vàng">
                    </div>
                    <div class="item-myThumb">
                        <img src="https://osakar.vn/storage/uploads/1717211899-50f53c49b6c34f1b305f9e3d87dca4635d5f07982ad67f12b76fa206825e5109.png"
                            alt="màu vàng">
                    </div>
                    <div class="item-myThumb">
                        <img src="https://osakar.vn/storage/uploads/1717211899-625fc66b7049668675917d7ed010eebaff99e5d3a2b57fc89966fe573f843443.png"
                            alt="màu vàng">
                    </div>
                    <div class="item-myThumb">
                        <img src="https://osakar.vn/storage/uploads/1717211899-f804bef4d5a34cd9372b179c63989257893fdb24cb0ffaa227ede22bd6d972f0.png"
                            alt="màu vàng">
                    </div>
                    <div class="item-myThumb">
                        <img src="https://osakar.vn/storage/uploads/1717211899-8bd6a192ba392957e30f04cc03ef7eb15c1f76206da40f3b2a0539b48b04a7d6.png"
                            alt="màu vàng">
                    </div>

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
                        <div class="banner-info-item js-aos" data-aos="fade-right" data-aos-delay="0"
                            data-aos-duration="300">
                            <h2 class="banner-info-name">{{$product->describe_input_1}}</h2>
                            <p class="banner-info-desc">{{$product->describe_textarea_1}}</p>
                        </div>
                        <!-- Mô tả 2 -->
                        <div class="banner-info-item js-aos" data-aos="fade-right" data-aos-delay="200"
                            data-aos-duration="300">
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
                                    <img data-src="{{$value->images}}" type="image/webp"
                                        alt="Xe máy điện VinFast Evo200 thiết kế sang trọng" width="100%" class="img-lazy" />
                                @endforeach
                            @endif
                        </picture>
                    </div>
                </div>
                <div class="banner-info-right">
                    <div class="banner-info-group">
                        <!-- Mô tả 3 -->
                        <div class="banner-info-item js-aos" data-aos="fade-left" data-aos-delay="0"
                            data-aos-duration="300">
                            <h2 class="banner-info-name">{{$product->describe_input_3}}</h2>
                            <p class="banner-info-desc">{{$product->describe_textarea_3}}</p>
                        </div>
                        <!-- Mô tả 4 -->
                        <div class="banner-info-item js-aos" data-aos="fade-left" data-aos-delay="200"
                            data-aos-duration="300">
                            <h2 class="banner-info-name">{{$product->describe_input_4}}</h2>
                            <p class="banner-info-desc">{{$product->describe_textarea_4}}</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <?php   

        if (count($images360) !== 0) {
        ?>
        <section class="page-block-image page-block-image-360 product-360-views" id="pdp-img-360">
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

        <?php
}


         ?>



        <section class="parts-bike section" id="pdp-parts-bike">

            <div class="breaking-wrap">
                <div class="parts-bike__head_text">
                    <h2>
                        {{$product->vehicle_detail_photos_title}}
                    </h2>
                    <p>
                        {{$product->vehicle_detail_photos_desc}}
                    </p>
                </div>
            </div>
            <div class="parts-bike__container">
                <!-- Ảnh chi tiết xe -->
                <div class="parts-bike__list parts-bike__list__owl owl-carousel owl-theme">
                    @if(!empty($vehicle_detail_photos))
                        @foreach($vehicle_detail_photos as $value)
                            <div class="parts-bike__item js-aos container" data-aos="fade-left" data-aos-delay="0"
                                data-aos-duration="300">
                                <picture class="image-story">
                                    <source class="img-srcset" data-srcset="{{ $value->images }}" type="image/webp" />
                                    <img data-src="{{ $value->images }}" title="Evo200"
                                        alt="Hệ thống đèn LED và đèn pha projector của xe máy điện VinFast Evo200" width="100%"
                                        class="img-lazy" />
                                </picture>
                            </div>
                        @endforeach
                    @endif
                </div>
            </div>
        </section>
        <section class="parts-bike section" id="pdp-parts-bike">
            <div class="parts-bike__head_text text-center block_center">
                <h2>
                    {{$product->actual_photo_title}}
                </h2>
                <p>
                    {{$product->actual_photo_desc}}
                </p>
            </div>
            <div class="parts-bike__container padding-container">
                <!-- Ảnh thực tế -->
                <div class="parts-bike__list parts-bike__list__gallarey">
                    @if(!empty($actual_photo))
                        @foreach($actual_photo as $value)
                            <div class="parts-bike__item js-aos aos-init aos-animate" data-aos="fade-left" data-aos-delay="0"
                                data-aos-duration="300">
                                <picture>
                                    <source class="img-srcset" data-srcset="{{$value->images}}" type="image/webp"
                                        srcset="{{$value->images}}">
                                    <img data-src="{{$value->images}}" title="Evo200"
                                        alt="Hệ thống đèn LED và đèn pha projector của xe máy điện VinFast Evo200" width="100%"
                                        class="img-lazy" src="{{$value->images}}">
                                </picture>

                            </div>
                        @endforeach
                    @endif


                </div>
            </div>
        </section>
        <section class="page-block battery-technology section" id="pdp-battery-technology">
            <div class="battery-technology__container">
                <div class="battery-technology__item js-aos" data-aos="fade-left" data-aos-delay="0"
                    data-aos-duration="300">
                    <!-- Ảnh Đại diện -->
                    @if(!empty($product->block_detail_image))
                        <img data-src="{{$product->block_detail_image}}" title="Evo200" alt="{{$product->product_name}}"
                            width="100%" class="img-lazy" />
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
                            <a href class="add-to-cart-v3s btn-pdp btn btn-primary effect-apollo"
                                data-pid="VF-ZFG-ESNA5LHH-REQ"><span>Mua Ngay</span></a>
                        </div>
                        <h6 class="breaking-top__title-vat">Giá đã bao gồm VAT, 01 bộ sạc 400W và không bao gồm
                            pin.</h6>
                    </div>
                    <div class="breaking-top__img breaking-slick">
                        <!-- Ảnh đại diện -->
                        @if(!empty($color_image))
                            @foreach($color_image as $value)
                                <div class>
                                    <picture>
                                        <img data-lazy="{{$value->images}}" title alt="" width="100%" />
                                    </picture>
                                </div>
                            @endforeach
                        @endif
                    </div>
                    <div class="breaking-slick__button-next"></div>
                    <div class="breaking-slick__button-prev"></div>
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
                        <div class="tabdongcoPackages" id="tabdongcoPackages" role="tabpanel"
                            aria-labelledby="battery-tab">
                            <div class="tab-pane-info breaking-battery-tab d-flex justify-content-between">

                                {!! $product->engine !!}


                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="page-block-image" style="clear: both">
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
            height: '100vh',
        });
    }
</script>

@include('/web/skinpart/formemail')

@endsection