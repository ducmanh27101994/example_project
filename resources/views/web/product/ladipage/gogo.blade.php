@extends('/web/index')
@section('content')


<link rel="stylesheet" href="{{ asset('home/css/pdp-page-xmd.css') }}" />
<link rel="stylesheet" href="{{ asset('home/css/ladiframe.css') }}" />
<link rel="stylesheet" href="{{ asset('home/css/style_ladi.css') }}" />

<main>
    <section class="hero-section">
        <div class="hero-main">
            <div class="hero-background"
                style="background: url({{ asset('home/images/gogo/gogo_banner.png') }}) center / cover no-repeat;">
            </div>
        </div>
    </section>

    <div class="buy-wrapper-box">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                    <div class="title d-flex align-items-center" style="height: 100%">
                        <h1>GOGO FIONA - ĐÓN ĐẦU THỜI ĐẠI</h1>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                    <div class="breaking-technology section" id="pdp-breaking-technology">
                        <div class="breaking-wrap" style="padding: 0">
                            <div class="breaking-top d-flex justify-content-end">
                                <div class="breaking-top__title-btn" style="margin-top: 0">
                                    <span class="">18.000.000 VNĐ</span>
                                    <a href="#" class="add-to-cart-v3s btn-pdp btn btn-primary effect-apollo"
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
                <div class="story-item container">
                    <figure class="image-story image-story--smart-1">
                        <img src="{{ asset('home/images/gogo/tn_1.png') }}" alt="tn_1">
                    </figure>

                </div>
                <div class="story-item container">
                    <figure class="image-story image-story--smart-2">
                        <img src="{{ asset('home/images/gogo/tn_2.png') }}" alt="tn_2">
                    </figure>

                </div>
                <div class="story-item container">
                    <figure class="image-story image-story--smart-3">
                        <img src="{{ asset('home/images/gogo/tn_3.png') }}" alt="tn_3">
                    </figure>

                </div>
            </div>

            <button class="story-prev" data-story-prev="" disabled=""></button>
            <button class="story-next" data-story-next=""></button>
        </div>
        <div class="group-wrapper-func">
            <div class="d-flex align-items-center justify-content-between">
                <div class="func-item">
                    <span>Giảm xóc</span>
                    <h3>Đài Loan</h3>
                </div>
                <div class="func-item">
                    <span>Đèn led</span>
                    <h3>Toàn xe</h3>
                </div>
                <div class="func-item">
                    <span>Mặt đồng hồ</span>
                    <h3>Led mở rộng</h3>
                </div>
                <div class="func-item">
                    <span>Chiều cao xe</span>
                    <h3>1045 mm</h3>
                </div>
                <div class="func-item">
                    <span>Mở khoá</span>
                    <h3>Smartkey</h3>
                </div>
            </div>
        </div>

    </section>

    <section class="section section-feature">
        <div class="feature-bot-top-1 d-flex align-items-center">
            <div class="feature-box-top-1-left-image">
                <div class="image">
                    <img src="{{ asset('home/images/gogo/feature1_1.png') }}" alt="feature1_1">
                </div>
            </div>
            <div class="feature-box-top-1-left-content">
                <div class="feature-box-top-1-left-box-content">
                    <h3>HỆ THỐNG PHANH E-ABS</h3>
                    <p>Nispa Vera đã kết hợp nhiều sắc thái màu sắc vào bảng điều khiển, ghế ngồi và thân xe, nổi bật
                        bằng các điểm nhấn mạ crôm, mang lại vẻ ngoài vừa êm dịu vừa uyển chuyển khi di chuyển.</p>
                </div>
            </div>
        </div>
        <div class="feature-bot-top-1 d-flex align-items-center flex-roate">
            <div class="feature-box-top-1-left-image feature-box-top-2-left-image-style">
                <div class="image">
                    <img src="{{ asset('home/images/gogo/feature1_2.png') }}" alt="feature1_2">
                </div>
            </div>
            <div class="feature-box-top-1-left-content feature-box-top-2-left-content-style">
                <div class="feature-box-top-1-left-box-content">
                    <h3>CỤM ĐÈN NỔI BẬT</h3>
                    <p>Nispa Vera đã kết hợp nhiều sắc thái màu sắc vào bảng điều khiển, ghế ngồi và thân xe, nổi bật
                        bằng các điểm nhấn mạ crôm, mang lại vẻ ngoài vừa êm dịu vừa uyển chuyển khi di chuyển.</p>
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

        <div class="breaking-experience-tabs breaking-technology-bot">
            <ul class="nav nav-tabs" id="myTab" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" id="tabexperience1" data-toggle="tab" href="javascript:void(0)"
                        role="tab" aria-controls="home" aria-selected="true">DỪNG LẠI NHANH CHÓNG, ĐẢM BẢO AN TOÀN
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="tabexperience2" data-toggle="tab" href="javascript:void(0)" role="tab"
                        aria-controls="profile" aria-selected="false">CAN ĐẢM GIỮA NHỮNG CƠN MƯA
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="tabexperience3" data-toggle="tab" href="javascript:void(0)" role="tab"
                        aria-controls="profile" aria-selected="false">ÁP SUẤT LỐP
                    </a>
                </li>
            </ul>
            <div class="tab-content">
                <div class="tab-pane show active tabexperience1" id="tabexperience1" role="tabpanel"
                    aria-labelledby="tabexperience1">
                    <div class="tab-pane-info d-flex justify-content-center">

                        <div class="block-tabs text-center">
                            <p>Phanh đĩa trước và sau cung cấp hiệu suất phanh hiệu quả và ổn định. Tăng tốc và cấu trúc
                                mô-men xoắn linh hoạt, giúp xe dễ dàng xử lý cấp độ tăng tốc và giảm tốc một cách mượt
                                mà</p>

                            <img class="mx-auto" src="{{ asset('home/images/gogo/image-exp-tabs.png') }}"
                                alt="image-exp-tabs">
                        </div>

                    </div>
                </div>
                <div class="tab-pane tabexperience2" id="tabexperience2" role="tabpanel"
                    aria-labelledby="tabexperience2">
                    <div class="breaking-battery-tab d-flex justify-content-between">
                        <div class="block-tabs text-center">
                            <h3 class="pin-subtitle">CAN ĐẢM GIỮA NHỮNG CƠN MƯA</h3>

                        </div>
                    </div>
                </div>
                <div class="tab-pane tabexperience3" id="tabexperience3" role="tabpanel"
                    aria-labelledby="tabexperience3">
                    <div class="breaking-battery-tab d-flex justify-content-between">
                        <div class="block-tabs text-center">
                            <h3 class="pin-subtitle">ÁP SUẤT LỐP</h3>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

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

    <section class="section section-color">

        <div class="head_color_title">
            <h2>Đa dạng màu sắc</h2>
            <p>Mỗi màu sắc đều mang lại một phong cách riêng biệt cho người lái, thể hiện được cá tính và sở thích của
                họ.</p>
        </div>

        <div class="top-main-img">
            <div class="mySliderTop">
                <div class>
                    <picture>
                        <source srcset="{{ asset('home/images/color_image_heidi.png') }}" type="image/webp" />
                        <img data-lazy="{{ asset('home/images/color_image_heidi.png') }}" title
                            alt="Xe máy điện VinFast Evo200 màu vàng" width="100%" />
                    </picture>
                </div>
                <div class>
                    <picture>
                        <source data-lazy-srcset="{{ asset('home/images/color_image_heidi.png') }}" type="image/webp" />
                        <img data-lazy-src="{{ asset('home/images/color_image_heidi.png') }}"
                            alt="Xe máy điện VinFast Evo200 màu đen" width="100%" />
                    </picture>
                </div>
                <div class>
                    <picture>
                        <source data-lazy-srcset="{{ asset('home/images/color_image_heidi.png') }}" type="image/webp" />
                        <img data-lazy-src="{{ asset('home/images/color_image_heidi.png') }}"
                            alt="Xe máy điện VinFast Evo200 màu đỏ" width="100%" />
                    </picture>
                </div>
                <div class>
                    <picture>
                        <source data-lazy-srcset="{{ asset('home/images/color_image_heidi.png') }}" type="image/webp" />
                        <img data-lazy-src="{{ asset('home/images/color_image_heidi.png') }}"
                            alt="Xe máy điện VinFast Evo200 màu xanh" width="100%" />
                    </picture>
                </div>
                <div class>
                    <picture>
                        <source data-lazy-srcset="{{ asset('home/images/color_image_heidi.png') }}" type="image/webp" />
                        <img data-lazy-src="{{ asset('home/images/color_image_heidi.png') }}"
                            alt="Xe máy điện VinFast Evo200 màu trắng" width="100%" />
                    </picture>
                </div>
            </div>
        </div>
        <div class="top-main-control js-aos" data-aos="fade-left" data-aos-delay="100" data-aos-duration="300">
            <div class="myThumbSlider" data-showitem="7">
                <div class="item-myThumb">
                    <img src="https://shop.vinfastauto.com/on/demandware.static/-/Sites-app_vinfast_vn-Library/default/dwddfc1849/images/PDP-XMD/color/evo-yellow.png"
                        alt="màu vàng">
                </div>
                <div class="item-myThumb">
                    <img src="https://shop.vinfastauto.com/on/demandware.static/-/Sites-app_vinfast_vn-Library/default/dw5b7d4ede/images/PDP-XMD/color/evo-black.png"
                        alt="màu đen">
                </div>
                <div class="item-myThumb">
                    <img src="https://shop.vinfastauto.com/on/demandware.static/-/Sites-app_vinfast_vn-Library/default/dwda679f8f/images/PDP-XMD/color/evo-red.png"
                        alt="màu đỏ">
                </div>
                <div class="item-myThumb">
                    <img src="https://shop.vinfastauto.com/on/demandware.static/-/Sites-app_vinfast_vn-Library/default/dw4c44a070/images/PDP-XMD/color/evo-blue.png"
                        alt="màu xanh">
                </div>
                <div class="item-myThumb">
                    <img src="https://shop.vinfastauto.com/on/demandware.static/-/Sites-app_vinfast_vn-Library/default/dwd52b0fb5/images/PDP-XMD/color/evo-white.png"
                        alt="màu trắng">
                </div>
            </div>
            <div class="box-control-nav">
                <div class="btn-arrow button-prev"></div>
                <div class="btn-arrow button-next"></div>
            </div>
        </div>
    </section>

    <section class="page-block-image page-block-image-360 product-360-views product-360-views-gogo" id="pdp-img-360"
        style="background: #1B1B1E;">
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

    <section class="section section-page-block-upgrade" style="background: #1B1B1E;">
        <div class="row">
            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                <div class="page-block-upgrade-text">
                    <div class=block-wrapper>
                        <h2>Nâng cấp chính bạn</h2>
                        <p>Mỗi màu sắc đều mang lại một phong cách riêng biệt cho người lái, thể hiện được cá tính và sở
                            thích của họ.</p>
                        <button type="button" class="btn btn-button">
                            <a href="#">
                                Tìm hiểu ngay
                            </a>
                        </button>
                    </div>
                </div>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                <img style="border-radius: 0" src="{{ asset('home/images/gogo/upgrade.png') }}" alt="upgrade">
            </div>
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
                        aria-controls="home" aria-selected="true">CỐP RỘNG BAO LA
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="tienich2" data-toggle="tab" href="javascript:void(0)" role="tab"
                        aria-controls="profile" aria-selected="false">CỔNG SẠC USB
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="tienich3" data-toggle="tab" href="javascript:void(0)" role="tab"
                        aria-controls="profile" aria-selected="false">Móc treo đồ
                    </a>
                </li>
            </ul>
            <div class="tab-content">
                <div class="tab-pane show active tienich1" id="tienich1" role="tabpanel" aria-labelledby="tienich1">
                    <div class="tab-pane-info d-flex justify-content-center">

                        <div class="row" style="width: 100%">
                            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6" style="padding: 0">
                                <img class="img" src="{{ asset('home/images/gogo/tienich_1.png') }}" alt="tienich_1">
                            </div>
                            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6" style="padding: 0">
                                <div class="tabs-ck-editor d-flex align-items-center">
                                    <div>
                                        <h2>Cốp rộng bao la</h2>
                                        <ul>
                                            <li>Để đồ thả ga với dung tích 20</li>
                                            <li>Tăng tính tiện lợi</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="tab-pane tienich2" id="tienich2" role="tabpanel" aria-labelledby="tienich2">
                    <div class="breaking-battery-tab d-flex justify-content-between">
                        <div class="row" style="width: 100%">
                            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6" style="padding: 0">
                                <img class="img" src="{{ asset('home/images/gogo/tienich_2.png') }}" alt="tienich_1">
                            </div>
                            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6" style="padding: 0">
                                <div class="tabs-ck-editor d-flex align-items-center">
                                    <div>
                                        <h2>Cổng sạc USB</h2>
                                        <ul>
                                            <li>Phía trước tiện lợi</li>
                                            <li>Móc treo đồ dạng gập tiện lợi</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane tienich3" id="tienich3" role="tabpanel" aria-labelledby="tienich3">
                    <div class="breaking-battery-tab d-flex justify-content-between">
                        <div class="row" style="width: 100%">
                            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6" style="padding: 0">
                                <img class="img" src="{{ asset('home/images/gogo/tienich_3.png') }}" alt="tienich_1">
                            </div>
                            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6" style="padding: 0">
                                <div class="tabs-ck-editor d-flex align-items-center">
                                    <div>
                                        <h2>Móc treo đồ</h2>
                                        <ul>
                                            <li>Móc treo đồ dạng gập tiện lợi</li>
                                            <li>Móc treo đồ dạng gập tiện lợi</li>
                                        </ul>
                                    </div>
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
                        <div class="tab-pane-info d-flex justify-content-between">
                            <ul>
                                <li>
                                    <h3 class="fw-light">Màu sắc</h3>
                                    <span>Đỏ tươi, Trắng ngọc trai,<br>
                                        Xanh tím than, Vàng, Đen Nhám</span>
                                </li>
                                <li>
                                    <h3 class="fw-light">Thời gian sạc tiêu chuẩn</h3>
                                    <span>Sạc 400W - 10h</span>
                                </li>
                                <li>
                                    <h3 class="fw-light">Loại động cơ</h3>
                                    <span>Inhub</span>
                                </li>
                                <li>
                                    <h3 class="fw-light">Công suất danh định</h3>
                                    <span>1500 W</span>
                                </li>
                            </ul>
                            <ul>
                                <li>
                                    <h3 class="fw-light">Giảm xóc</h3>
                                    <span>Ống lồng-giảm chấn thủy lực;<br>
                                        giảm xóc đôi, giảm chấn thủy lực</span>
                                </li>
                                <li>
                                    <h3 class="fw-light">PIN</h3>
                                    <span>01 Pin LFP</span>
                                </li>
                                <li>
                                    <h3 class="fw-light">Dung lượng PIN</h3>
                                    <span>3,5 KWh</span>
                                </li>
                                <li>
                                    <span class="fw-light">Tốc độ tối đa</span>
                                    <span>70 km/h</span>
                                </li>
                            </ul>
                            <ul>
                                <li>
                                    <h3 class="fw-light">Công suất lớn nhất</h3>
                                    <span>2500 W</span>
                                </li>
                                <li>
                                    <h3 class="fw-light">Trọng lượng</h3>
                                    <span>97 kg bao gồm pin LFP</span>
                                </li>
                                <li>
                                    <h3 class="fw-light">Dài x Rộng x Cao</h3>
                                    <span>1804 x 683 x 1127 mm</span>
                                </li>
                                <li>
                                    <h3 class="fw-light">Phanh trước và sau</h3>
                                    <span>Phanh đĩa/cơ</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="tab-pane  tabBatteryPackages" id="tabBatteryPackages" role="tabpanel"
                        aria-labelledby="tabBatteryPackages">
                        <div class="breaking-battery-tab d-flex justify-content-between">
                            <div>
                                <h3 class="pin-subtitle">Gói thuê PIN</h3>
                                <p>Gói cước thuê pin:</p>
                                <ul class="rental-list">
                                    <li>Quãng đường di chuyển trong tháng dưới 2.000 km, cước thuê pin: 350.000
                                        VNĐ/tháng.</li>
                                    <li>Quãng đường di chuyển trong tháng trên 2.000 km trở lên, cước thuê pin: 990.000
                                        VNĐ/tháng.</li>
                                </ul>
                                <div class="rental-note">*Phí đặt cọc thuê pin 2.000.000 VNĐ</div>


                                <p></p>
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
@php
$imageUrls = [asset('home/images/360.png')];
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