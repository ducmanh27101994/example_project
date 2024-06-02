@extends('/web/index')
@section('content')


<link rel="stylesheet" href="{{ asset('home/css/pdp-page-xmd.css') }}" />
<link rel="stylesheet" href="{{ asset('home/css/ladiframe.css') }}" />
<link rel="stylesheet" href="{{ asset('home/css/style_ladi.css') }}" />

<main>
    <section class="hero-section">
        <div class="hero-main">
            <div class="hero-background"
                style="background: url({{ asset('home/images/sec_1_banner.png') }}) center / cover no-repeat;"></div>
        </div>
    </section>

    <section class="section section-break-a progressive-image">
        <div class="break-a-duration"></div>
        <div class="animation-layer">
            <div class="break-spotlight">

            </div>
            <div class="break-scooter">
                <p class="heidi_text_head_line_top">
                    <img src="{{ asset('home/images/HEIDI.png') }}" alt="HEIDI">
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

    <section class="section section-color">

        <div class="head_color_title">
            <h2>Đa dạng màu sắc</h2>
            <p>Mỗi màu sắc đều mang lại một phong cách riêng biệt cho người lái, thể hiện được cá tính và sở thích của
                họ.</p>
        </div>

        <div class="container">
            <div class="row">
                <div class="top-main-img col-xs-12" style="overflow: hidden;">
                    <div class="myThumbSlider">
                        <div class>
                            <picture>
                                
                                <img data-lazy="{{ asset('home/images/color_image_heidi.png') }}" title
                                    alt="Xe máy điện VinFast Evo200 màu vàng" width="100%" />
                            </picture>
                        </div>
                        <div class>
                            <picture>
                                
                                <img data-lazy-src="{{ asset('home/images/color_image_heidi.png') }}"
                                    alt="Xe máy điện VinFast Evo200 màu đen" width="100%" />
                            </picture>
                        </div>
                        <div class>
                            <picture>
                                
                                <img data-lazy-src="{{ asset('home/images/color_image_heidi.png') }}"
                                    alt="Xe máy điện VinFast Evo200 màu đỏ" width="100%" />
                            </picture>
                        </div>
                        <div class>
                            <picture>
                                
                                <img data-lazy-src="{{ asset('home/images/color_image_heidi.png') }}"
                                    alt="Xe máy điện VinFast Evo200 màu xanh" width="100%" />
                            </picture>
                        </div>
                        <div class>
                            <picture>
                                
                                <img data-lazy-src="{{ asset('home/images/color_image_heidi.png') }}"
                                    alt="Xe máy điện VinFast Evo200 màu trắng" width="100%" />
                            </picture>
                        </div>
                        <div class>
                            <picture>
                                
                                <img data-lazy="{{ asset('home/images/color_image_heidi.png') }}" title
                                    alt="Xe máy điện VinFast Evo200 màu vàng" width="100%" />
                            </picture>
                        </div>
                        <div class>
                            <picture>
                                
                                <img data-lazy-src="{{ asset('home/images/color_image_heidi.png') }}"
                                    alt="Xe máy điện VinFast Evo200 màu đen" width="100%" />
                            </picture>
                        </div>
                        <div class>
                            <picture>
                                
                                <img data-lazy-src="{{ asset('home/images/color_image_heidi.png') }}"
                                    alt="Xe máy điện VinFast Evo200 màu đỏ" width="100%" />
                            </picture>
                        </div>
                        <div class>
                            <picture>
                                
                                <img data-lazy-src="{{ asset('home/images/color_image_heidi.png') }}"
                                    alt="Xe máy điện VinFast Evo200 màu xanh" width="100%" />
                            </picture>
                        </div>
                        <div class>
                            <picture>
                                
                                <img data-lazy-src="{{ asset('home/images/color_image_heidi.png') }}"
                                    alt="Xe máy điện VinFast Evo200 màu trắng" width="100%" />
                            </picture>
                        </div>
                        <div class>
                            <picture>
                                
                                <img data-lazy="{{ asset('home/images/color_image_heidi.png') }}" title
                                    alt="Xe máy điện VinFast Evo200 màu vàng" width="100%" />
                            </picture>
                        </div>
                        <div class>
                            <picture>
                                
                                <img data-lazy-src="{{ asset('home/images/color_image_heidi.png') }}"
                                    alt="Xe máy điện VinFast Evo200 màu đen" width="100%" />
                            </picture>
                        </div>
                        <div class>
                            <picture>
                                
                                <img data-lazy-src="{{ asset('home/images/color_image_heidi.png') }}"
                                    alt="Xe máy điện VinFast Evo200 màu đỏ" width="100%" />
                            </picture>
                        </div>
                        <div class>
                            <picture>
                                
                                <img data-lazy-src="{{ asset('home/images/color_image_heidi.png') }}"
                                    alt="Xe máy điện VinFast Evo200 màu xanh" width="100%" />
                            </picture>
                        </div>
                        <div class>
                            <picture>
                                
                                <img data-lazy-src="{{ asset('home/images/color_image_heidi.png') }}"
                                    alt="Xe máy điện VinFast Evo200 màu trắng" width="100%" />
                            </picture>
                        </div>
                        <div class>
                            <picture>
                                
                                <img data-lazy="{{ asset('home/images/color_image_heidi.png') }}" title
                                    alt="Xe máy điện VinFast Evo200 màu vàng" width="100%" />
                            </picture>
                        </div>
                        <div class>
                            <picture>
                                
                                <img data-lazy-src="{{ asset('home/images/color_image_heidi.png') }}"
                                    alt="Xe máy điện VinFast Evo200 màu đen" width="100%" />
                            </picture>
                        </div>
                        <div class>
                            <picture>
                                
                                <img data-lazy-src="{{ asset('home/images/color_image_heidi.png') }}"
                                    alt="Xe máy điện VinFast Evo200 màu đỏ" width="100%" />
                            </picture>
                        </div>
                        <div class>
                            <picture>
                                
                                <img data-lazy-src="{{ asset('home/images/color_image_heidi.png') }}"
                                    alt="Xe máy điện VinFast Evo200 màu xanh" width="100%" />
                            </picture>
                        </div>
                        <div class>
                            <picture>
                                
                                <img data-lazy-src="{{ asset('home/images/color_image_heidi.png') }}"
                                    alt="Xe máy điện VinFast Evo200 màu trắng" width="100%" />
                            </picture>
                        </div>
                    </div>
                    <div style="clear: left"></div>
                </div>
            </div>
        </div>
        <div style="clear: left"></div>
        <div class="container" style="overflow: hidden;">
            <div class="mySliderTop" style="max-width: 900px;margin:auto; overflow: hidden;" style="margin-top: 20px">
                <div class="myThumbSlider" style="overflow: hidden;" data-showitem="17">
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
                        <img src="https://shop.vinfastauto.com/on/demandware.static/-/Sites-app_vinfast_vn-Library/default/dw5b7d4ede/images/PDP-XMD/color/evo-black.png"
                            alt="màu đen">
                    </div>
                    <div class="item-myThumb">
                        <img src="https://shop.vinfastauto.com/on/demandware.static/-/Sites-app_vinfast_vn-Library/default/dwda679f8f/images/PDP-XMD/color/evo-red.png"
                            alt="màu đỏ">
                    </div>

                    <div class="item-myThumb">
                        <img src="https://shop.vinfastauto.com/on/demandware.static/-/Sites-app_vinfast_vn-Library/default/dwda679f8f/images/PDP-XMD/color/evo-red.png"
                            alt="màu đỏ">
                    </div>

                    <div class="item-myThumb">
                        <img src="https://shop.vinfastauto.com/on/demandware.static/-/Sites-app_vinfast_vn-Library/default/dwda679f8f/images/PDP-XMD/color/evo-red.png"
                            alt="màu đỏ">
                    </div>

                    <div class="item-myThumb">
                        <img src="https://shop.vinfastauto.com/on/demandware.static/-/Sites-app_vinfast_vn-Library/default/dwda679f8f/images/PDP-XMD/color/evo-red.png"
                            alt="màu đỏ">
                    </div>

                    <div class="item-myThumb">
                        <img src="https://shop.vinfastauto.com/on/demandware.static/-/Sites-app_vinfast_vn-Library/default/dwda679f8f/images/PDP-XMD/color/evo-red.png"
                            alt="màu đỏ">
                    </div>

                    <div class="item-myThumb">
                        <img src="https://shop.vinfastauto.com/on/demandware.static/-/Sites-app_vinfast_vn-Library/default/dwda679f8f/images/PDP-XMD/color/evo-red.png"
                            alt="màu đỏ">
                    </div>

                    <div class="item-myThumb">
                        <img src="https://shop.vinfastauto.com/on/demandware.static/-/Sites-app_vinfast_vn-Library/default/dwda679f8f/images/PDP-XMD/color/evo-red.png"
                            alt="màu đỏ">
                    </div>

                    <div class="item-myThumb">
                        <img src="https://shop.vinfastauto.com/on/demandware.static/-/Sites-app_vinfast_vn-Library/default/dwda679f8f/images/PDP-XMD/color/evo-red.png"
                            alt="màu đỏ">
                    </div>

                    <div class="item-myThumb">
                        <img src="https://shop.vinfastauto.com/on/demandware.static/-/Sites-app_vinfast_vn-Library/default/dwda679f8f/images/PDP-XMD/color/evo-red.png"
                            alt="màu đỏ">
                    </div>
                </div>
                <div class="box-control-nav">
                    <div class="btn-arrow button-prev"></div>
                    <div class="btn-arrow button-next"></div>
                </div>
                <div style="clear: left"></div>
            </div>
            <div style="clear: left"></div>
        </div>

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
                    <p class="section-description">Every surface has been poured-over, polished, and crafted to elevate
                        you beyond the everyday. Built for the few who are constantly seeking more.</p>
                </div>
            </div>

            <div class="design-topics">
                <div class="design-topic">
                    <div class="design-topic__image aos-init aos-animate" data-aos="fade-up" data-aos-duration="2000">
                        <div class="image-design image-design--dashboard"></div>
                    </div>
                    <div class="design-topic__content aos-init aos-animate" data-aos="fade-up-left"
                        data-aos-duration="2000">
                        <div>
                            <h4 class="subhead">Màn hình LED đa sắc</h4>
                            <p>Bằng cách đồng bộ thiết kế bề mặt màn hình màu đen, khiến người dùng tập trung hơn vào
                                màn hình hiển thị với đầy đủ màu sắc tuyệt vời, tạo nên một trải nghiệm độc đáo và hấp
                                dẫn..</p>
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
                            <h4 class="subhead">SOS Mode <br /> Tính năng cứu hộ hiện đại</h4>
                            <p>Bằng cách đồng bộ thiết kế bề mặt màn hình màu đen, khiến người dùng tập trung hơn vào
                                màn hình hiển thị với đầy đủ màu sắc tuyệt vời, tạo nên một trải nghiệm độc đáo và hấp
                                dẫn..</p>
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
                            <h4 class="subhead">Bàn đạp trợ lực khi lên dốc</h4>
                            <p>Bằng cách đồng bộ thiết kế bề mặt màn hình màu đen, khiến người dùng tập trung hơn vào
                                màn hình hiển thị với đầy đủ màu sắc tuyệt vời, tạo nên một trải nghiệm độc đáo và hấp
                                dẫn..</p>
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
                            <h4 class="subhead">Thẻ NFC <br /> Một chạm mở khoá</h4>
                            <p>Bằng cách đồng bộ thiết kế bề mặt màn hình màu đen, khiến người dùng tập trung hơn vào
                                màn hình hiển thị với đầy đủ màu sắc tuyệt vời, tạo nên một trải nghiệm độc đáo và hấp
                                dẫn..</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>

    <section class="page-block-image page-block-image-360" id="pdp-img-360" style="background: #1B1B1E;">
        <div class="breaking-wrap">
            <div class="wrap_image">
                <img src="{{ asset('home/images/360.png') }}" alt="img360">
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

    <section class="section section-performance progressive-image">
        <div class="performance-gallery">
            <div class="performance performance--caliper">
                <div class="performance-bg performance-bg--caliper"></div>
                <div class="performance-content">
                    <div class="section-content">
                        <div class="performance-content-sizer">
                            <h4 class="subhead">Bàn đạp trợ lực khi lên dốc</h4>
                            <p>Bằng cách đồng bộ thiết kế bề mặt màn hình màu đen, khiến người dùng tập trung hơn vào
                                màn hình hiển thị với đầy đủ màu sắc tuyệt vời, tạo nên một trải nghiệm độc đáo và hấp
                                dẫn.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="performance performance--f-suspension">
                <div class="performance-bg performance-bg--f-suspension"></div>
                <div class="performance-content">
                    <div class="section-content">
                        <div class="performance-content-sizer">
                            <h4 class="subhead">Phanh đĩa đảm bảo an toàn</h4>
                            <p>Bằng cách đồng bộ thiết kế bề mặt màn hình màu đen, khiến người dùng tập trung hơn vào
                                màn hình hiển thị với đầy đủ màu sắc tuyệt vời, tạo nên một trải nghiệm độc đáo và hấp
                                dẫn.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="performance performance--r-suspension">
                <div class="performance-bg performance-bg--r-suspension"></div>
                <div class="performance-content">
                    <div class="section-content">
                        <div class="performance-content-sizer">
                            <h4 class="subhead">Giảm xóc êm ái</h4>
                            <p>Bằng cách đồng bộ thiết kế bề mặt màn hình màu đen, khiến người dùng tập trung hơn vào
                                màn hình hiển thị với đầy đủ màu sắc tuyệt vời, tạo nên một trải nghiệm độc đáo và hấp
                                dẫn.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section section-gallarey">
        <img src="{{ asset('home/images/section8_gallarey.png') }}" alt="section8_gallarey">
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
                    <div class="tab-pane fade show active tabInfoProduct" id="tabInfoProduct" role="tabpanel"
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
                    <div class="tab-pane fade tabBatteryPackages" id="tabBatteryPackages" role="tabpanel"
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

@endsection