@extends('/web/index')
@section('content')
<link rel="stylesheet" href="{{ asset('home/css/global.css') }}" />

<link rel="stylesheet" media="screen and (min-width: 992px)"
    href="https://fonts.googleapis.com/css2?family=Mulish:ital,wght@0,300;0,400;0,600;0,700;0,800;0,900;1,300;1,400;1,600;1,700;1,900&display=swap" />

<link rel="stylesheet" href="{{ asset('home/css/cartBike.css') }}" />
<link rel="stylesheet" href="{{ asset('home/css/commonUI.css') }}" />

<link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />


<div class="page v3s" data-action="CartBike-Show" data-querystring>
    <h1 class="d-none">Mua xe m&aacute;y điện Osakar - C&oacute; hỗ trợ trả g&oacute;p - Thanh to&aacute;n dễ
        d&agrave;ng, nhanh ch&oacute;ng</h1>

    <div class="cart " id="bookingModal">
        <div class="cart-bike" role="document">
            <div class="cart-bike-content">
                <div class="tab-left">

                    <header id="header" class="v3s-header">
                        <div class="v3s-header--bottom">
                            <div class="d-flex align-items-center justify-content-between custom-group-user-mobile">
                                <div class="v3s-header-mobile--left d-flex align-items-center justify-content-start">
                                    <div class="logo">
                                        <?php $url = $table_config_images->image_icon_right ?>
                                        <img style="width: 50px" class="light-theme"
                                            src="<?= !empty($url) ? $url : '' ?>" alt="Osakar" loading="lazy">
                                        </a>
                                        <a class="d-block d-lg-none" href="/">
                                            <img style="width: 50px" class="dark-theme"
                                                src="<?= !empty($url) ? $url : '' ?>" alt="Osakar" loading="lazy">
                                            <img style="width: 50px" class="light-theme"
                                                src="<?= !empty($url) ? $url : '' ?>" alt="Osakar" loading="lazy">
                                        </a>
                                    </div>

                                    <div id="block-megamainmenu" class="block-megamainmenu d-none d-lg-block">
                                        <ul class="mega_menu_header mega-main-menu">

                                            <li>
                                                <a class="we-mega-menu-li" title=""
                                                    href="/about-us" target="">Giới
                                                    thiệu</a>
                                            </li>

                                        </ul>
                                    </div>
                                    <ul class="mega_menu_header mega-main-menu">
                                        <ul class="menu mega-submenu mega_menu_header mega-main-menu">
                                            <li class="block-megamainmenu desktop-hover">
                                                <a class="we-mega-menu-li"></a>
                                            </li>
                                        </ul>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="modal" tabindex="-1" role="dialog" id="megaMenuModal" data-backdrop="static"
                            data-keyboard="false">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header d-none d-lg-block">
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">
                                                <svg width="24" height="25" viewBox="0 0 24 25" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M19 5.5L5 19.5" stroke="black" stroke-width="1.6"
                                                        stroke-linecap="round" stroke-linejoin="round"></path>
                                                    <path d="M5 5.5L19 19.5" stroke="black" stroke-width="1.6"
                                                        stroke-linecap="round" stroke-linejoin="round"></path>
                                                </svg>
                                            </span>
                                        </button>
                                    </div>
                                    <div class="modal-body" id="mega-submenu">
                                        <div class="d-none d-lg-block">
                                            <div class="submenu-block mega-submenu__utilities">
                                                <h5>Tiện ích</h5>
                                                <ul>

                                                    @if(!empty($table_menu))
                                                        @foreach($table_menu as $value)
                                                            <a href="{{$value->menu_router}}">
                                                                <p>{{$value->menu_title}}</p>
                                                            </a>
                                                            </li>
                                                        @endforeach
                                                    @endif
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="d-block d-lg-none display-mobile">
                                            <ul>
                                                <li><a href="/about-us">Giới thiệu</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </header>

                    <div class="content-asset content-asset-scroll" style="padding-top: 80px;">

                        <div class="content-asset">
                            <nav class="vf-bike-order__product-list">
                                <div class="bike-slider swiper-container" id="colorImage">
                                    <ul class="vf-bike-order__container swiper-wrapper">
                                        @if(!empty($color_image))
                                            @foreach($color_image as $key => $value)
                                                <li data-id="color_image" data-name="evo2000" data-pid="{{$value->id}}"
                                                    class="add-to-cart-v3s swiper-slide">
                                                    <figure><img src="{{$value->images}}" alt="">
                                                        <figcaption></figcaption>
                                                    </figure>
                                                </li>
                                            @endforeach
                                        @endif
                                    </ul>
                                    <div class="swiper-button-next"></div>
                                    <div class="swiper-button-prev"></div>
                                </div>
                            </nav>
                        </div>

                    </div>
                    <div class="tab-left-box" style="padding-top: 200px;">
                        <div class="v3s-product__img">
                            <h5 data-modelid="{{$product->product_name ?? 0}}"
                                class="v3s-product--name text-center text-nowrap">{{$product->product_name ?? 0}}
                            </h5>
                            <div class="v3s-product-item-0">
                                <div class="product-container">
                                    <img class="product-item-REQ" alt="{{$product->product_name ?? 0}}"
                                        title="{{$product->product_name ?? 0}}"
                                        src="{{$product->representative_image_product}}">
                                </div>
                                <div class="tab-bike-left-info show-pc">
                                    <ul class="bike-info-list">
                                        <li class="bike-info-item">
                                            <p class="bike-info-item-no"> Tốc độ tối đa </p>
                                            <div class="bike-info-item-description">
                                                {{$product->maximum_speed ?? 0}}
                                                <div>
                                                    <p class="bike-info-item-label">km/h</p>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="bike-info-item">
                                            <p class="bike-info-item-no"> Qu&atilde;ng đường đi được 1 lần sạc </p>
                                            <div class="bike-info-item-description">
                                                khoảng {{$product->distance_traveled ?? 0}}
                                                <div>
                                                    <p class="bike-info-item-label">km</p>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="tab-right ">
                    <header id="header" class="v3s-header hidden-md hidden-lg">
                        <div class="v3s-header--bottom">
                            <div class="d-flex align-items-center justify-content-between custom-group-user-mobile">
                                <div class="v3s-header-mobile--left d-flex align-items-center justify-content-start">
                                    <div class="logo">
                                        <?php $url = $table_config_images->image_icon_right ?>
                                        <img style="width: 50px" class="light-theme"
                                            src="<?= !empty($url) ? $url : '' ?>" alt="Osakar" loading="lazy">
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </header>
                    <div class="tab-right-head">
                        <ul class="tab-right-step clear-initial-trail">
                            <li id="select-car-step" class="form-step active ">
                                <h2>Lựa chọn xe</h2>
                            </li>
                            <li id="customer-informations-step" class="form-step ">
                                <h2>Nhập th&ocirc;ng tin</h2>
                            </li>
                            <li id="payment-informations-step" class="form-step ">
                                <h2>Thanh to&aacute;n</h2>
                            </li>
                        </ul>
                        <p class="sub-title ">Xin mời Qu&yacute; kh&aacute;ch lựa chọn m&agrave;u xe, dịch vụ (nếu
                            c&oacute;).</p>
                    </div>
                    <div class="infoBike-sp show-sp">
                        <div class="content-asset">

                            <div class="content-asset">
                                <nav class="vf-bike-order__product-list">
                                    <div class="bike-slider swiper-container">
                                        <ul class="vf-bike-order__container swiper-wrapper">

                                            @if(!empty($color_image))
                                                @foreach($color_image as $key => $value)

                                                    <li data-id="color_image" data-name="evo2000" data-pid="{{$value->id}}"
                                                        class="add-to-cart-v3s swiper-slide">
                                                        <figure><img src="{{$value->images}}" alt="{{$value->id}}">
                                                            <figcaption></figcaption>
                                                        </figure>
                                                    </li>

                                                @endforeach
                                            @endif



                                        </ul>
                                        <div class="swiper-button-next"></div>
                                        <div class="swiper-button-prev"></div>
                                    </div>
                                </nav>
                            </div>

                        </div>
                        <div class="tab-left-box">
                            <div class="v3s-product__img">
                                <h5 data-modelid="{{$product->product_name ?? 0}}"
                                    class="v3s-product--name text-center text-nowrap">{{$product->product_name ?? 0}}
                                </h5>
                                <div class="v3s-product-item-0">
                                    <div class="product-container">
                                        <img class="product-item-REQ" alt="{{$product->product_name ?? 0}}"
                                            title="{{$product->product_name ?? 0}}"
                                            src="{{$product->representative_image_product}}" >
                                    </div>
                                    <div class="tab-bike-left-info show-pc">
                                        <ul class="bike-info-list">
                                            <li class="bike-info-item">
                                                <p class="bike-info-item-no"> Tốc độ tối đa </p>
                                                <div class="bike-info-item-description">
                                                    {{$product->maximum_speed ?? 0}}
                                                    <div>
                                                        <p class="bike-info-item-label">km/h</p>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="bike-info-item">
                                                <p class="bike-info-item-no"> Qu&atilde;ng đường đi được 1 lần sạc
                                                </p>
                                                <div class="bike-info-item-description">
                                                    khoảng {{$product->distance_traveled ?? 0}}
                                                    <div>
                                                        <p class="bike-info-item-label">km</p>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="bike-info-item">
                                                <p class="bike-info-item-no"> Pin LFP </p>
                                                <div class="bike-info-item-description">
                                                    01
                                                    <div>
                                                        <p class="bike-info-item-label">Pin <br />LFP</p>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-right-box">
                        <div class="select-car-step "
                            text-title="Xin mời Qu&yacute; kh&aacute;ch lựa chọn m&agrave;u xe, dịch vụ (nếu c&oacute;).">
                            <div class="html-slot-container">
                            </div>
                            <div class="properties v3s-product--color pb-2"
                                data-model="{{$product->product_name ?? 0}}" data-name="Evo200">
                                <div class="d-flex justify-content-between align-items-center mb-4">
                                    <h3 class="font-18">Chọn m&agrave;u xe</h3>
                                    <span class="v3s-product--color-name"></span>
                                </div>
                                <ul class="colorItemList bike slides">
                                    @if(!empty($color_image))
                                        @foreach($color_image as $key => $value)
                                            <li class="slide-item" data-name="{{$product->product_name ?? 0}}" data-item="REQ"
                                                data-pid="{{$value->id}}">
                                                <img src="{{$value->images}}" alt="{{$product->product_name ?? 0}}">
                                            </li>
                                        @endforeach
                                    @endif

                                </ul>
                            </div>
                            <div class="order-bill">
                                <ul class="order-bill-items">
                                    <li class="d-flex justify-content-between align-items-center border-b-none">
                                        <span>Số tiền thanh toán (tạm tính)</span> <span id="payment-sum"
                                            class="payment-sum finance-item--price-after-savings"><span
                                                class="value">{{number_format($product->product_price ?? 0)}}</span>
                                            VNĐ</span>
                                    </li>
                                </ul>
                            </div>
                            <div class="tab-right-bottom border-0">
                                <button id="next-step-infor" class="button-next-step effect-apollo " type="button"
                                    disabled>tiếp
                                    theo
                                </button>
                            </div>
                        </div>
                        <div class="customer-informations-step tab-right-panel d-none" id="tab-info-client"
                            text-title="H&atilde;y nhập th&ocirc;ng tin chủ xe v&agrave; chọn showroom m&agrave; Qu&yacute; kh&aacute;ch muốn nhận xe.">
                            <form
                                method="POST" name="dwfrm_billing" id="dwfrm_billing">
                                <div class="vf-form">
                                    <input type="hidden" name="campaign" value>
                                    <div class="group-customer">
                                        <fieldset class="billing-address billing-address-block">
                                            <input type="hidden" name="dwfrm_billing_addressFields_VF__StoreCode"
                                                value="null" maxlength="2147483647" pattern="[^>()=.\\/]+" />
                                            <input type="hidden"
                                                name="dwfrm_billing_addressFields_VF__StoreCode__Selected" value="null"
                                                maxlength="2147483647" pattern="[^>()=.\\/]+" />
                                            <input type="hidden"
                                                name="dwfrm_billing_addressFields_VF__StoreExpectedDeliveryDate" value
                                                maxlength="2147483647"
                                                pattern="([12]\d{3}-(0[1-9]|1[0-2])-(0[1-9]|[12]\d|3[01]))" />
                                            <h3 class="col-12 group-title">Th&ocirc;ng tin Kh&aacute;ch h&agrave;ng
                                            </h3>
                                            <div class="col-12 row group-select-customer group-radio">
                                                <label class="col-auto small-header">Chủ sở hữu xe l&agrave;</label>
                                                <div class="group-input col-6 col-md-auto">
                                                    <input name="dwfrm_billing_addressFields_customerType"
                                                        value="personal" id="personal" type="radio" required
                                                        aria-required="true" checked />
                                                    <label for="personal">C&aacute; nh&acirc;n</label>
                                                </div>
                                                <div class="group-input col-6 col-md-auto">
                                                    <input name="dwfrm_billing_addressFields_customerType"
                                                        value="corporate" id="corporate" type="radio" required
                                                        aria-required="true" />
                                                    <label for="corporate">Doanh nghiệp</label>
                                                </div>
                                            </div>
                                            <div class="col-12 group-personal mb-4">
                                                <div class="form-label-group has-icon custom-required root_numText">
                                                    <input type="text" class="billingLastName js_numText"
                                                        id="billingLastName" placeholder="Nhập t&ecirc;n" value
                                                        data-missing-error="Vui l&ograve;ng nhập họ v&agrave; t&ecirc;n"
                                                        data-parse-error="Trường kh&ocirc;ng được chứa k&yacute; tự đặc biệt"
                                                        autocomplete="family-name" data-internal-account="false"
                                                        name="dwfrm_billing_addressFields_lastName" required
                                                        aria-required="true" value maxLength="80"
                                                        pattern="[^>()=.\\/]+">
                                                    <div class="icon">
                                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <path
                                                                d="M12 12C14.21 12 16 10.21 16 8C16 5.79 14.21 4 12 4C9.79 4 8 5.79 8 8C8 10.21 9.79 12 12 12ZM12 14C9.33 14 4 15.34 4 18V20H20V18C20 15.34 14.67 14 12 14Z"
                                                                fill="#8A8A8A" />
                                                        </svg>
                                                    </div>
                                                    <div class="num_text">
                                                        <span class="num">0</span> /
                                                        <span class="max_num">80</span>
                                                    </div>
                                                    <label class="label required">Họ v&agrave; t&ecirc;n</label>
                                                    <input type="hidden" value="Mr"
                                                        name="dwfrm_billing_addressFields_firstName" required
                                                        aria-required="true" value maxLength="50">
                                                </div>
                                                <div class="invalid-feedback"></div>
                                            </div>
                                            <div class="col-12 group-corporate mb-4">
                                                <div class="form-label-group has-icon root_numText custom-required">
                                                    <input type="text" class="billingLastName js_numText"
                                                        id="billingCompanyName" placeholder="Nhập t&ecirc;n" value
                                                        data-missing-error="Vui l&ograve;ng nhập t&ecirc;n Doanh Nghiệp."
                                                        data-parse-error="Trường kh&ocirc;ng được chứa k&yacute; tự đặc biệt"
                                                        autocomplete="family-name"
                                                        name="dwfrm_billing_addressFields_companyName" value
                                                        maxLength="80" pattern="[^~`!@#$^*_=>?'\[\]{}]+">
                                                    <div class="icon">
                                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <path
                                                                d="M12 12C14.21 12 16 10.21 16 8C16 5.79 14.21 4 12 4C9.79 4 8 5.79 8 8C8 10.21 9.79 12 12 12ZM12 14C9.33 14 4 15.34 4 18V20H20V18C20 15.34 14.67 14 12 14Z"
                                                                fill="#8A8A8A" />
                                                        </svg>
                                                    </div>
                                                    <div class="num_text">
                                                        <span class="num">0</span> /
                                                        <span class="max_num">80</span>
                                                    </div>
                                                    <label class="label required">T&ecirc;n doanh nghiệp</label>
                                                </div>
                                                <div class="invalid-feedback"></div>
                                            </div>
                                            <div class="col-12 group-personal mb-4">
                                                <div class="form-label-group has-icon custom-required">
                                                    <input type="text" placeholder="CMND/CCCD" id="identifyId"
                                                        class="identity" data-type="1.0" autocomplete="billing-address2"
                                                        data-missing-error="Vui l&ograve;ng nhập số thẻ / hộ chiếu nhận dạng."
                                                        data-parse-error="Số CMND/CCCD của Qu&yacute; kh&aacute;ch chưa đ&uacute;ng. Vui l&ograve;ng kiểm tra lại."
                                                        value name="dwfrm_billing_addressFields_address2" value
                                                        maxLength="12" minLength="8" pattern="^[a-zA-Z0-9]+">
                                                    <div class="icon">
                                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <path
                                                                d="M19 19H5V5H19V19ZM19 3H5C4.46957 3 3.96086 3.21071 3.58579 3.58579C3.21071 3.96086 3 4.46957 3 5V19C3 19.5304 3.21071 20.0391 3.58579 20.4142C3.96086 20.7893 4.46957 21 5 21H19C19.5304 21 20.0391 20.7893 20.4142 20.4142C20.7893 20.0391 21 19.5304 21 19V5C21 4.46957 20.7893 3.96086 20.4142 3.58579C20.0391 3.21071 19.5304 3 19 3ZM16.5 16.25C16.5 14.75 13.5 14 12 14C10.5 14 7.5 14.75 7.5 16.25V17H16.5V16.25ZM12 12.25C12.5967 12.25 13.169 12.0129 13.591 11.591C14.0129 11.169 14.25 10.5967 14.25 10C14.25 9.40326 14.0129 8.83097 13.591 8.40901C13.169 7.98705 12.5967 7.75 12 7.75C11.4033 7.75 10.831 7.98705 10.409 8.40901C9.98705 8.83097 9.75 9.40326 9.75 10C9.75 10.5967 9.98705 11.169 10.409 11.591C10.831 12.0129 11.4033 12.25 12 12.25Z"
                                                                fill="#8A8A8A" />
                                                        </svg>
                                                    </div>
                                                    <label class="label required">CMND/CCCD</label>
                                                </div>
                                                <div class="invalid-feedback"></div>
                                            </div>
                                            <div class="col-12 group-corporate mb-4">
                                                <div class="form-label-group has-icon custom-required">
                                                    <input type="text" placeholder="Số đăng k&yacute; kinh doanh"
                                                        maxlength="14" class="identity" id="taxCode" data-type="4.0"
                                                        pattern="^([0-9]{10})(|)(-[0-9]{3}|)$"
                                                        autocomplete="billing-address2"
                                                        data-missing-error="Vui l&ograve;ng nhập số đăng k&yacute; kinh doanh/ m&atilde; số thuế."
                                                        data-parse-error="Số đăng k&yacute; kinh doanh của Qu&yacute; kh&aacute;ch chưa đ&uacute;ng. Vui l&ograve;ng kiểm tra lại."
                                                        value name="dwfrm_billing_addressFields_taxCode">
                                                    <div class="icon">
                                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <path
                                                                d="M19 19H5V5H19V19ZM19 3H5C4.46957 3 3.96086 3.21071 3.58579 3.58579C3.21071 3.96086 3 4.46957 3 5V19C3 19.5304 3.21071 20.0391 3.58579 20.4142C3.96086 20.7893 4.46957 21 5 21H19C19.5304 21 20.0391 20.7893 20.4142 20.4142C20.7893 20.0391 21 19.5304 21 19V5C21 4.46957 20.7893 3.96086 20.4142 3.58579C20.0391 3.21071 19.5304 3 19 3ZM16.5 16.25C16.5 14.75 13.5 14 12 14C10.5 14 7.5 14.75 7.5 16.25V17H16.5V16.25ZM12 12.25C12.5967 12.25 13.169 12.0129 13.591 11.591C14.0129 11.169 14.25 10.5967 14.25 10C14.25 9.40326 14.0129 8.83097 13.591 8.40901C13.169 7.98705 12.5967 7.75 12 7.75C11.4033 7.75 10.831 7.98705 10.409 8.40901C9.98705 8.83097 9.75 9.40326 9.75 10C9.75 10.5967 9.98705 11.169 10.409 11.591C10.831 12.0129 11.4033 12.25 12 12.25Z"
                                                                fill="#8A8A8A" />
                                                        </svg>
                                                    </div>
                                                    <label class="label required">Số đăng k&yacute; kinh
                                                        doanh</label>
                                                </div>
                                                <div class="invalid-feedback"></div>
                                            </div>
                                            <div class="col-12 mb-4">
                                                <div class="form-label-group has-icon custom-required">
                                                    <input type="tel" class id="phoneNumber"
                                                        placeholder="Nhập số điện thoại"
                                                        data-missing-error="Vui l&ograve;ng nhập số điện thoại."
                                                        data-parse-error="Số điện thoại của Qu&yacute; kh&aacute;ch chưa đ&uacute;ng. Vui l&ograve;ng kiểm tra lại."
                                                        value aria-describedby="phoneInvalidMessage"
                                                        name="dwfrm_billing_contactInfoFields_phone" required
                                                        aria-required="true" value maxLength="15" minLength="9"
                                                        pattern="^((\+?84)|0)((3([2-9]))|(5([25689]))|(7([0|6-9]))|(8([1-9]))|(9([0-9])))([0-9]{7})$">
                                                    <div class="icon">
                                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <path
                                                                d="M17 19H7V5H17V19ZM17 1H7C5.89 1 5 1.89 5 3V21C5 21.5304 5.21071 22.0391 5.58579 22.4142C5.96086 22.7893 6.46957 23 7 23H17C17.5304 23 18.0391 22.7893 18.4142 22.4142C18.7893 22.0391 19 21.5304 19 21V3C19 2.46957 18.7893 1.96086 18.4142 1.58579C18.0391 1.21071 17.5304 1 17 1Z"
                                                                fill="#8A8A8A" />
                                                        </svg>
                                                    </div>
                                                    <label class="label required">Số điện thoại</label>
                                                </div>
                                                <div class="invalid-feedback" id="phoneInvalidMessage"></div>
                                            </div>
                                            <div class="col-12 mb-4">
                                                <div class="form-label-group has-icon">
                                                    <input type="text" class="form-control email" id="email"
                                                        placeholder="Email"
                                                        data-missing-error="Vui l&ograve;ng nhập email."
                                                        data-parse-error="Định dạng Email của Qu&yacute; kh&aacute;ch chưa đ&uacute;ng. Vui l&ograve;ng kiểm tra lại."
                                                        value name="dwfrm_billing_contactInfoFields_email" required
                                                        aria-required="true" value maxLength="50"
                                                        pattern="^([A-Za-z0-9_\-\.])+\@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,20}))$"
                                                        aria-describedby="emailInvalidMessage" />
                                                    <div class="icon">
                                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <path
                                                                d="M20 8L12 13L4 8V6L12 11L20 6V8ZM20 4H4C2.89 4 2 4.89 2 6V18C2 18.5304 2.21071 19.0391 2.58579 19.4142C2.96086 19.7893 3.46957 20 4 20H20C20.5304 20 21.0391 19.7893 21.4142 19.4142C21.7893 19.0391 22 18.5304 22 18V6C22 5.46957 21.7893 4.96086 21.4142 4.58579C21.0391 4.21071 20.5304 4 20 4Z"
                                                                fill="#8A8A8A" />
                                                        </svg>
                                                    </div>
                                                    <label class="label required" for="email">Email</label>
                                                    <div class="check-email"></div>
                                                </div>
                                                <div class="invalid-feedback" id="emailInvalidMessage"></div>
                                            </div>
                                            <div class="col-12">
                                                <div class="rf-note">
                                                    <p>Lưu &yacute;:</p>
                                                    <ul>
                                                        <li>Để hưởng ưu đ&atilde;i, bạn cần đ&aacute;p ứng đủ
                                                            c&aacute;c điều kiện của chương tr&igrave;nh.
                                                        </li>
                                                        <li class="see-detail">Chính sách chương trình có thể thay
                                                            đổi mà không cần thông báo trước, chi tiết xem <a
                                                                class="referral-file"
                                                                href="https://osakar.com.vn/dieu-khoan-chinh-sach"
                                                                target="popup">tại đây</a>. Hoặc liên hệ <a
                                                                href="tel:1900232389">hotline <span
                                                                    class="text-nowrap">1900 23 23 89</span></a>.
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <h3 class="col-12 group-title">Showroom nhận xe</h3>

                                            <div class="col-12 p-0 d-none">
                                                <div class="receive form-group custom-control custom-checkbox">
                                                    <input type="checkbox" checked class="custom-control-input"
                                                        id="chkAgree2" name="chkAgree2">
                                                    <label class="custom-control-label" for="chkAgree2">
                                                        T&ocirc;i đ&atilde; đọc, hiểu r&otilde; v&agrave; x&aacute;c
                                                        nhận đồng &yacute; với to&agrave;n bộ nội dung
                                                        <a class="color-2EA2EB" target="&quot;_blank&quot;"
                                                            href="https://osakar.com.vn/dieu-khoan-chinh-sach">
                                                            Điều khoản </a>
                                                        trong Thỏa Thuận Đặt Cọc tr&ecirc;n cũng như Ch&iacute;nh
                                                        S&aacute;ch Ưu Đ&atilde;i &aacute;p dụng tại thời điểm đặt
                                                        mua xe &ocirc; t&ocirc; n&agrave;y tr&ecirc;n Osakar.
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-12 p-0 d-none">
                                                <div class="receive form-group custom-control custom-checkbox mb-0">
                                                    <input type="checkbox" checked class="custom-control-input"
                                                        id="chkAgree3" name="chkAgree3">
                                                    <label class="custom-control-label" for="chkAgree3">
                                                        T&ocirc;i đồng &yacute; với c&aacute;c
                                                        <a class="color-2EA2EB" target="_blank"
                                                            href="/vn_vi/dieu-khoan-phap-ly.html?&dieu-kien-dieu-khoan">
                                                            Điều kiện &amp; Điều khoản </a>
                                                        của Osakar
                                                    </label>
                                                </div>
                                            </div>
                                            <fieldset class="d-none address-selector-block">
                                                <div class="form-group">
                                                    <select id="billingAddressSelector" name="addressSelector"
                                                        class="addressSelector form-control">
                                                        <option value="new" data-first-name data-last-name data-address1
                                                            data-address2 data-city data-state-code data-country-code
                                                            data-postal-code data-phone>
                                                            Địa chỉ mới
                                                        </option>
                                                    </select>
                                                    <div class="invalid-feedback"></div>
                                                </div>
                                            </fieldset>
                                        </fieldset>
                                        <div class="properties select-group mb-0">
                                            {{-- <div class="box-select select-store">--}}
                                                {{-- <div class="form-label-group has-icon">--}}
                                                    {{-- <select--}} {{--
                                                        class="select2-search select2-label-placeholder select2-empty"
                                                        --}} {{-- id="storeCity" placeholder>--}}
                                                        {{-- <option value selected disabled></option>--}}
                                                        {{-- </select>--}}
                                                        {{-- <div class="icon">--}}
                                                            {{-- <svg width="19" height="18" viewBox="0 0 19 18"
                                                                fill="none" --}} {{--
                                                                xmlns="http://www.w3.org/2000/svg">--}}
                                                                {{--
                                                                <path fill-rule="evenodd" clip-rule="evenodd" --}} {{--
                                                                    d="M14 0H10H0V2V4V6V18H14V6H16H17V18H19V6V4H17H16V2V0H14ZM10 4V2H14V4H10ZM4 14H2V16H4V14ZM10 14H12V16H10V14ZM8 14H6V16H8V14ZM2 10H4V12H2V10ZM12 10H10V12H12V10ZM6 10H8V12H6V10ZM4 6H2V8H4V6ZM10 6H12V8H10V6ZM8 6H6V8H8V6Z"
                                                                    --}} {{-- fill="#8A8A8A" />--}}
                                                                {{--
                                                            </svg>--}}
                                                            {{-- </div>--}}
                                                        {{-- <label class="select-label required">Tỉnh
                                                            th&agrave;nh</label>--}}
                                                        {{-- <div class="invalid-feedback text-left" --}} {{--
                                                            id="storeCityInvalidMessage"></div>--}}
                                                        {{-- </div>--}}
                                                {{-- </div>--}}
                                            {{-- <div class="box-select select-center">--}}
                                                {{-- <div class="form-label-group has-icon">--}}
                                                    {{-- <select--}} {{--
                                                        class="select2-search select2-label-placeholder select2-empty"
                                                        --}} {{-- id="storeDistrict" placeholder>--}}
                                                        {{-- <option value selected></option>--}}
                                                        {{-- </select>--}}
                                                        {{-- <div class="icon">--}}
                                                            {{-- <svg width="19" height="18" viewBox="0 0 19 18"
                                                                fill="none" --}} {{--
                                                                xmlns="http://www.w3.org/2000/svg">--}}
                                                                {{--
                                                                <path fill-rule="evenodd" clip-rule="evenodd" --}} {{--
                                                                    d="M14 0H10H0V2V4V6V18H14V6H16H17V18H19V6V4H17H16V2V0H14ZM10 4V2H14V4H10ZM4 14H2V16H4V14ZM10 14H12V16H10V14ZM8 14H6V16H8V14ZM2 10H4V12H2V10ZM12 10H10V12H12V10ZM6 10H8V12H6V10ZM4 6H2V8H4V6ZM10 6H12V8H10V6ZM8 6H6V8H8V6Z"
                                                                    --}} {{-- fill="#8A8A8A" />--}}
                                                                {{--
                                                            </svg>--}}
                                                            {{-- </div>--}}
                                                        {{-- <label class="select-label required">Quận/Huyện</label>--}}
                                                        {{-- <div class="invalid-feedback"></div>--}}
                                                        {{-- </div>--}}
                                                {{-- <div class="col">--}}
                                                    {{-- <div class="invalid-feedback text-left" --}} {{--
                                                        id="storeDistrictInvalidMessage"></div>--}}
                                                    {{-- <span class="d-none">Vui l&ograve;ng chọn
                                                        Quận/Huyện.</span>--}}
                                                    {{-- </div>--}}
                                                {{-- </div>--}}
                                            <div class="box-select last">
                                                <div class="form-label-group has-icon">
                                                    <select
                                                        class="select2-search select2-label-placeholder select2-empty"
                                                        id="storeList" data-store-selected="false"
                                                        style="padding-left: 10px;">
                                                        @if(!empty($listStore))
                                                            @foreach($listStore as $value)
                                                                <option value="{{$value->id}}">{{$value->title_store}}</option>
                                                            @endforeach
                                                        @endif
                                                    </select>

                                                </div>

                                            </div>
                                            <div class="box-select">
                                                <div class="form-label-group has-icon">
                                                    <input name="employee" id="employee"
                                                        placeholder="M&atilde; nh&acirc;n vi&ecirc;n tư vấn" type="text"
                                                        value maxlength="7" />
                                                    <div class="icon">
                                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <path
                                                                d="M20.2503 4.49951H3.75025C3.35255 4.49991 2.97125 4.65807 2.69003 4.93929C2.40881 5.22051 2.25065 5.60181 2.25025 5.99951V20.8896C2.24926 21.1757 2.33022 21.4561 2.48357 21.6976C2.63691 21.9391 2.85622 22.1317 3.11555 22.2525C3.37488 22.3733 3.66338 22.4173 3.94693 22.3793C4.23049 22.3413 4.49722 22.2229 4.7156 22.0381L7.69291 19.5347L20.2503 19.4995C20.648 19.4991 21.0293 19.341 21.3105 19.0597C21.5917 18.7785 21.7499 18.3972 21.7503 17.9995V5.99951C21.7499 5.60181 21.5917 5.22051 21.3105 4.93929C21.0293 4.65807 20.648 4.49991 20.2503 4.49951ZM7.50016 13.1253C7.27766 13.1253 7.06015 13.0593 6.87514 12.9357C6.69014 12.812 6.54594 12.6363 6.46079 12.4308C6.37565 12.2252 6.35337 11.999 6.39678 11.7808C6.44018 11.5626 6.54733 11.3621 6.70466 11.2048C6.862 11.0474 7.06245 10.9403 7.28068 10.8969C7.49891 10.8535 7.72511 10.8757 7.93068 10.9609C8.13624 11.046 8.31195 11.1902 8.43556 11.3752C8.55918 11.5603 8.62516 11.7778 8.62516 12.0003C8.62516 12.2986 8.50663 12.5848 8.29565 12.7958C8.08468 13.0067 7.79853 13.1253 7.50016 13.1253ZM12.0002 13.1253C11.7777 13.1253 11.5601 13.0593 11.3751 12.9357C11.1901 12.812 11.0459 12.6363 10.9608 12.4308C10.8756 12.2252 10.8534 11.999 10.8968 11.7808C10.9402 11.5626 11.0473 11.3621 11.2047 11.2048C11.362 11.0474 11.5625 10.9403 11.7807 10.8969C11.9989 10.8535 12.2251 10.8757 12.4307 10.9609C12.6362 11.046 12.8119 11.1902 12.9356 11.3752C13.0592 11.5603 13.1252 11.7778 13.1252 12.0003C13.1252 12.2986 13.0066 12.5848 12.7957 12.7958C12.5847 13.0067 12.2985 13.1253 12.0002 13.1253ZM16.5002 13.1253C16.2777 13.1253 16.0601 13.0593 15.8751 12.9357C15.6901 12.812 15.5459 12.6363 15.4608 12.4308C15.3756 12.2252 15.3534 11.999 15.3968 11.7808C15.4402 11.5626 15.5473 11.3621 15.7047 11.2048C15.862 11.0474 16.0625 10.9403 16.2807 10.8969C16.4989 10.8535 16.7251 10.8757 16.9307 10.9609C17.1362 11.046 17.3119 11.1902 17.4356 11.3752C17.5592 11.5603 17.6252 11.7778 17.6252 12.0003C17.6252 12.2986 17.5066 12.5848 17.2957 12.7958C17.0847 13.0067 16.7985 13.1253 16.5002 13.1253Z"
                                                                fill="#8A8A8A" />
                                                        </svg>
                                                    </div>
                                                    <label class="label">M&atilde; nh&acirc;n vi&ecirc;n tư
                                                        vấn</label>
                                                </div>
                                                <div data-technical-error="Đ&atilde; c&oacute; lỗi xảy ra"
                                                    data-regex-invalid="Chỉ nhập M&atilde; c&aacute;n bộ nh&acirc;n vi&ecirc;n tư vấn b&aacute;n h&agrave;ng."
                                                    class="invalid-feedback text-left" id="employeeMessage">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                            <div class="order-bill">
                                <ul class="order-bill-items">
                                    <li class="border-price"></li>
                                    <li class="d-flex justify-content-between align-items-center">
                                        <span>Gi&aacute; xe</span>
                                        <span class="payment-sum finance-item--price-before-savings"><span
                                                class="value">{{number_format($product->product_price ?? 0)}}</span>
                                            VNĐ</span>
                                    </li>
                                    <li class="border-price"></li>
                                    <li class="d-flex justify-content-between align-items-start border-b-none">
                                        <span>Số tiền thanh toán (tạm t&iacute;nh)<br /> <span class="note ">Chưa có
                                                chi phí dịch vụ pin.</span></span>
                                        <span class="payment-sum finance-item--price-after-savings"><span
                                                class="value">{{number_format($product->product_price ?? 0)}}</span>
                                            VNĐ</span>
                                    </li>
                                </ul>
                            </div>
                            <div class="tab-right-bottom border-0">
                                <button id="next-step-success" class="button-next-step effect-apollo "
                                    type="button">tiếp
                                    theo
                                </button>
                            </div>
                        </div>
                        <div class="payment-informations-step d-none" id="payment-informations"
                            text-title="Chọn h&igrave;nh thức v&agrave; ho&agrave;n th&agrave;nh thanh to&aacute;n đơn h&agrave;ng.">
                            <div class="block-deposit-info  bg-white">
                                <div class="payment-info">
                                    <h3 class="group-title font-18">Th&ocirc;ng tin đơn h&agrave;ng</h3>
                                    <div class="payment-info_item">
                                        <p class="bike-name"></p>
                                        <p class="bike-color"></p>
                                    </div>
                                    <div class="payment-info_item" text-personal="Chủ xe"
                                        text-company="T&ecirc;n doanh nghiệp">
                                        <p class="title-owner">Chủ xe</p>
                                        <p class="bike-owner"></p>
                                    </div>
                                    <div class="payment-info_item">
                                        <p>Số điện thoại</p>
                                        <p class="phone"></p>
                                    </div>
                                    <div class="payment-info_item" text-personal="Số CMND/ CCCD"
                                        text-company="Số đăng k&yacute; kinh doanh">
                                        <p class="title-identify">Số CMND/ CCCD</p>
                                        <p class="identify"></p>
                                    </div>
                                    <div class="payment-info_item item_email">
                                        <p>Địa chỉ email</p>
                                        <p class="email"></p>
                                        <p class="email-announcement"
                                            text-email="Osakar sẽ tạo t&agrave;i khoản với địa chỉ email n&agrave;y.">
                                        </p>
                                    </div>
                                    <div class="payment-info_item">
                                        <p>Showroom</p>
                                        <p class="showroom">
                                            <span>Osakar Showroom, Hà Nội</span>
                                            <a class="map" href target="_blank">(Xem bản đồ)</a>
                                        </p>
                                    </div>
                                    <div class="payment-info_item">
                                        <p>M&atilde; nh&acirc;n vi&ecirc;n tư vấn</p>
                                        <p class="employee"></p>
                                    </div>
                                </div>


                                <div class="order-bill">
                                    <ul class="order-bill-items">
                                        <li class="border-price"></li>
                                        <li class="d-flex justify-content-between align-items-center">
                                            <span>Gi&aacute; xe</span>
                                            <span class="payment-sum finance-item--price-before-savings"><span
                                                    class="value">{{number_format($product->product_price ?? 0)}}</span>
                                                VNĐ</span>
                                        </li>
                                        <li class="border-price"></li>
                                        <li class="d-flex justify-content-between align-items-start border-b-none">
                                            <span>Số tiền thanh toán (tạm t&iacute;nh)<br /> </span>
                                            <span class="payment-sum finance-item--price-after-savings"><span
                                                    class="value">{{number_format($product->product_price ?? 0)}}</span>
                                                VNĐ</span>
                                        </li>
                                    </ul>
                                </div>
                                <button id="ajaxButton" class="button-payment  effect-apollo" type="button">THANH
                                    TO&Aacute;N
                                </button>
                            </div>
                        </div>
                        <div class="modal fade" id="popupWarning">
                            <div class="modal-dialog popup-warning">
                                <div class="modal-content">
                                    <p class="title">Quý khách chưa chọn gói trả góp</p>
                                    <p class="content">Quý khách có muốn tiếp tục chọn gói trả góp không?</p>
                                    <div class="group-button">
                                        <button type class="regret">không</button>
                                        <button type class="agree">tiếp tục</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<input type="hidden" id="id_product" value="{{$product->id}}">
<input type="hidden" id="name_product" value="{{$product->name}}">
<input type="hidden" id="image_product" value="">
<input type="hidden" id="color_product" value="">
<input type="hidden" id="price_product" value="{{$product->price_product}}">

<script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
<script>
    $('.swiper-wrapper').slick({
        infinite: true,
        slidesToShow: 13,
        slidesToScroll: 13,
        vertical: true,
        autoplay: true,
        arrows: true,
        prevArrow: $('.prev'),
        nextArrow: $('.next'),
        responsive: [
            {
                breakpoint: 1024,
                settings: {
                    slidesToShow: 4,
                    slidesToScroll: 2,
                    infinite: false,
                    vertical: false,
                }
            },
            {
                breakpoint: 600,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 2,
                    initialSlide: 2,
                    vertical: false,
                }
            },
            {
                breakpoint: 480,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 2,
                    vertical: false,
                }
            }
        ]
    });

    $(".vf-bike-order__container li").on("click", function () {
        var src = $(this).find('img').attr('src');
        var id = $(this).data('pid');
        var name = $(this).data('name');
        var _oid = $(this).data('id');
        $('.product-item-REQ').attr('src', src);
        $(".colorItemList .slide-item").each(function () {
            var color_id = $(this).data('pid');

            if (id === color_id) {
                $(this).addClass('active');
            } else {
                $(this).removeClass('active');
            }
            $('#id_product').val(_oid);
            $('#name_product').val(name);
            $('#image_product').val(src);
            $('#color_product').val(id);
            $('#price_product').val($('#payment-sum').text());
        });
        $('#next-step-infor').removeAttr('disabled')
    });

    $("#next-step-infor").on("click", function () {
        $('.select-car-step').addClass('d-none')
        $('.customer-informations-step').removeClass('d-none')
        $('.sub-title ').text('Hãy nhập thông tin chủ xe và chọn showroom mà Quý khách muốn nhận xe.')
        $('#select-car-step').removeClass('active')
        $('#customer-informations-step').addClass('active')
    });

    $('#next-step-success').on("click", function () {
        $('.select-car-step').addClass('d-none')
        $('#customer-informations-step').removeClass('active')
        $('#payment-informations-step').addClass('active')
        $('#tab-info-client').addClass('d-none')
        $('.sub-title ').text('Hãy kiểm tra lại thông tin của quý khách.')
        $('#payment-informations').removeClass('d-none')
    });

</script>
<style>
    .slides {
        position: unset;
    }

    header,
    footer,
    .ggr-nav-container {
        display: none;
    }
</style>

<script type="text/javascript">
    $(document).ready(function () {
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        $('#ajaxButton').click(function () {
            var color_product = $('#color_product').val();
            var chu_so_huu = document.querySelector('input[name="dwfrm_billing_addressFields_customerType"]:checked').value;
            var id = {{ $product->id }};

            if ($('#billingLastName').val().trim() == '') {
                return alert("Tên không được để trống");
            }
            if ($('#identifyId').val().trim() == '') {
                return alert("CMND không được để trống");
            }
            if ($('#phoneNumber').val().trim() == '') {
                return alert("SĐT không được để trống");
            }
            if ($('#email').val().trim() == '') {
                return alert("Email không được để trống");
            }
            if (chu_so_huu == 'corporate') {
                if ($('#billingCompanyName').val().trim() == '') {
                    return alert("Tên doanh nghiệp không được để trống");
                }
                if ($('#taxCode').val().trim() == '') {
                    return alert("Số đăng ký kinh doanh không được để trống");
                }
            }

            var data = {
                id_product: id,
                color_product: color_product,
                price_product: $('#price_product').val(),
                chu_so_huu: chu_so_huu,
                billingLastName: $('#billingLastName').val(),
                billingCompanyName: $('#billingCompanyName').val(),
                identifyId: $('#identifyId').val(),
                taxCode: $('#taxCode').val(),
                phoneNumber: $('#phoneNumber').val(),
                email: $('#email').val(),
                employee: $('#employee').val(),
                storeList: $('#storeList').val(),
            };

            console.log(data);

            $.ajax({
                url: '{{ route('create.order') }}',
                type: 'POST',
                data: data,
                success: function (response) {
                    alert("Tạo Đơn Hàng Thành công");
                    setTimeout(function () {
                        window.location.href = '/';
                    }, 2000);
                },
                error: function (xhr, status, error) {
                    alert('Có lỗi xảy ra: ' + error);
                }
            });
        });
    });
</script>
@endsection