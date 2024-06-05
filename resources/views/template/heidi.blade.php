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
                style="background: url(https://osakar.vn/storage/uploads/1715874621-ddaa71295c99dda7a1a45eedb027bff59facebcff52ffa1f44f53ae797f73b27.png) center / cover no-repeat;"></div>
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
                    <img src="https://osakar.vn/storage/uploads/1715874621-424053bfe0f1d307846abd65aa7475231d5641ea7f673d3eef86b1969ffefff5.png" alt="HEIDI">
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
                background-image: url('https://osakar.vn/storage/uploads/1715874768-251ee24220451e26ecc60eb9ebe6899e0273b75f352cf402fb591fbd3b38c74e.png');
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
                    background: url('https://osakar.vn/storage/uploads/1715874938-37890d61c8fea9eda1a8dabf0060e0d24f813926d818b8e27b9edd965064035c.png') center bottom / auto 100% no-repeat;
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
        style="background: #000 url(https://osakar.vn/storage/uploads/1715874623-6f058e9658ce7310db923254f15184a281613cfecc7004fd81e807cdb857b30e.png) no-repeat;">

        <div class="head_color_title">
            <h2>Đa dạng màu sắc</h2>
            <p>Mỗi màu sắc đều mang lại một phong cách riêng biệt cho người lái, thể hifện được cá tính và sở thích
                của
                họ.</p>
        </div>

        <!-- load icon màu sắc và hình ảnh -->
        <div class="top-main-img">
            <div class="myThumbSlider">
                                                            <div class>
                            <picture>
                                <img data-lazy="https://osakar.vn/storage/uploads/1715582590-fb170507e416ce0017971f85e74b19f3c09ce1ea9aa3710573a1f685f4ee5d96.jpg" title alt="Xe máy điện VinFast Evo200 màu vàng"
                                    width="100%" />
                            </picture>
                        </div>
                                            <div class>
                            <picture>
                                <img data-lazy="https://osakar.vn/storage/uploads/1715582590-d1435f04f0c7a7160b66bc1bc4d35d51a288dbbc0f427c3e25cbb73d6eb06cca.jpg" title alt="Xe máy điện VinFast Evo200 màu vàng"
                                    width="100%" />
                            </picture>
                        </div>
                                            <div class>
                            <picture>
                                <img data-lazy="https://osakar.vn/storage/uploads/1715582590-b158b436a47f99f12fecb92fed187767e4baeae17110eb9e801aec448b081a29.jpg" title alt="Xe máy điện VinFast Evo200 màu vàng"
                                    width="100%" />
                            </picture>
                        </div>
                                            <div class>
                            <picture>
                                <img data-lazy="https://osakar.vn/storage/uploads/1715582590-bc472bb78237ce78cfdd47d0182d70a4130ede94622d9c07ab6991310fb4d171.jpg" title alt="Xe máy điện VinFast Evo200 màu vàng"
                                    width="100%" />
                            </picture>
                        </div>
                                            <div class>
                            <picture>
                                <img data-lazy="https://osakar.vn/storage/uploads/1715582590-9ea1dce5cf9182b1ad54dda767bd0054885b5f3165721b767fe049ec1f7f7b73.jpg" title alt="Xe máy điện VinFast Evo200 màu vàng"
                                    width="100%" />
                            </picture>
                        </div>
                                            <div class>
                            <picture>
                                <img data-lazy="https://osakar.vn/storage/uploads/1715582590-e11e467b9a90a0866c5aee38132bf2e6428ca237b399951609c417cfa1207824.jpg" title alt="Xe máy điện VinFast Evo200 màu vàng"
                                    width="100%" />
                            </picture>
                        </div>
                                            <div class>
                            <picture>
                                <img data-lazy="https://osakar.vn/storage/uploads/1715582590-fd96a861eeac2b3544d395f2730c3f96a9eb7fb60e72d1da708d2882529747fb.jpg" title alt="Xe máy điện VinFast Evo200 màu vàng"
                                    width="100%" />
                            </picture>
                        </div>
                                            <div class>
                            <picture>
                                <img data-lazy="https://osakar.vn/storage/uploads/1715582591-96cb50c2c13f89d59cae20e3f3ea97c8db4a01609f24037f35ea55599ac10252.jpg" title alt="Xe máy điện VinFast Evo200 màu vàng"
                                    width="100%" />
                            </picture>
                        </div>
                                            <div class>
                            <picture>
                                <img data-lazy="https://osakar.vn/storage/uploads/1715582591-b757f990e442b53d7af79eaf253c7496c63e253b93c130245c0d08bffc89872e.jpg" title alt="Xe máy điện VinFast Evo200 màu vàng"
                                    width="100%" />
                            </picture>
                        </div>
                                            <div class>
                            <picture>
                                <img data-lazy="https://osakar.vn/storage/uploads/1715582591-d589a1ca0df42fd291f83c451b3253a973b09afda4424c69dc28b0278e03de61.jpg" title alt="Xe máy điện VinFast Evo200 màu vàng"
                                    width="100%" />
                            </picture>
                        </div>
                                            <div class>
                            <picture>
                                <img data-lazy="https://osakar.vn/storage/uploads/1715582591-09875a65796eefcf8bb4170fc25c23931e2080bb8091eaaeb453cf7e0ec1ce1d.jpg" title alt="Xe máy điện VinFast Evo200 màu vàng"
                                    width="100%" />
                            </picture>
                        </div>
                                            <div class>
                            <picture>
                                <img data-lazy="https://osakar.vn/storage/uploads/1715582591-d56ab173439da8bed6346e0e0a7447268172a4cedaf4cf18b2158aec153a422e.jpg" title alt="Xe máy điện VinFast Evo200 màu vàng"
                                    width="100%" />
                            </picture>
                        </div>
                                            <div class>
                            <picture>
                                <img data-lazy="https://osakar.vn/storage/uploads/1715582591-045c89beeeb27482275e06117c3864129983bc3d55486db334ab8fd31a3800cd.jpg" title alt="Xe máy điện VinFast Evo200 màu vàng"
                                    width="100%" />
                            </picture>
                        </div>
                                            <div class>
                            <picture>
                                <img data-lazy="https://osakar.vn/storage/uploads/1715582591-920011ad1debd4f22f49ae0131f2d21710cc35a8c9f1af81b0f50879e56024e3.jpg" title alt="Xe máy điện VinFast Evo200 màu vàng"
                                    width="100%" />
                            </picture>
                        </div>
                                            <div class>
                            <picture>
                                <img data-lazy="https://osakar.vn/storage/uploads/1715582591-9362ed54a7122a5eb46fd19dfca471b6f3306512b0ecabf47c78b59636f206fb.jpg" title alt="Xe máy điện VinFast Evo200 màu vàng"
                                    width="100%" />
                            </picture>
                        </div>
                                            <div class>
                            <picture>
                                <img data-lazy="https://osakar.vn/storage/uploads/1715582593-25bdfb3c66d707a2c108866962c31c8bb40b6cd481d2c04c75dc6b56e71fa9b0.jpg" title alt="Xe máy điện VinFast Evo200 màu vàng"
                                    width="100%" />
                            </picture>
                        </div>
                                            <div class>
                            <picture>
                                <img data-lazy="https://osakar.vn/storage/uploads/1715582593-d37b758870748596428c501de703bf9371ace6506cff7d6475c253ea3368833c.jpg" title alt="Xe máy điện VinFast Evo200 màu vàng"
                                    width="100%" />
                            </picture>
                        </div>
                                            <div class>
                            <picture>
                                <img data-lazy="https://osakar.vn/storage/uploads/1715582593-507c46529159edfe6f022152d40405de9757057bca968d39e9d124a7e6610f1e.jpg" title alt="Xe máy điện VinFast Evo200 màu vàng"
                                    width="100%" />
                            </picture>
                        </div>
                                                </div>
        </div>
        <div class="top-main-control" style="">
            <div class="mySliderTop" data-showitem="8">
                                                            <div class="item-myThumb">
                            <img src="https://osakar.vn/storage/uploads/1715582487-0a0e5a3867f9045bd8dbe0ca8315831f1d6547ca27991fee5788946d11a0593f.jpg" alt="màu vàng">
                        </div>
                                            <div class="item-myThumb">
                            <img src="https://osakar.vn/storage/uploads/1715582487-c15a209d892a9ae2c34d24becfca92556b033aebf3b31782811447317e2aa687.jpg" alt="màu vàng">
                        </div>
                                            <div class="item-myThumb">
                            <img src="https://osakar.vn/storage/uploads/1715582487-09505f8057936f54ed9f2855cb4af4fed2748955660f6d8a115f2961690b98e1.jpg" alt="màu vàng">
                        </div>
                                            <div class="item-myThumb">
                            <img src="https://osakar.vn/storage/uploads/1715582487-b369e273dab466aae143e347dad627e2c5eece1b6e02fcd94ce2b5a40f07f9f0.jpg" alt="màu vàng">
                        </div>
                                            <div class="item-myThumb">
                            <img src="https://osakar.vn/storage/uploads/1715582487-458eac9c3f9ae757d462679e32b5ae8fd89ced133e00b8e4ae8b58a52ef56643.jpg" alt="màu vàng">
                        </div>
                                            <div class="item-myThumb">
                            <img src="https://osakar.vn/storage/uploads/1715582489-fb4a067e1a82717d34c0e3f2cc8a9fe647df6f8d5c880f266152cf884919bd3b.jpg" alt="màu vàng">
                        </div>
                                            <div class="item-myThumb">
                            <img src="https://osakar.vn/storage/uploads/1715582489-96e72f41e426d5408af43784cdc72b12ae3243c13a8103535fbc2fb6d49d3ec2.jpg" alt="màu vàng">
                        </div>
                                            <div class="item-myThumb">
                            <img src="https://osakar.vn/storage/uploads/1715582489-f0348a85483f9420a2c7cb64f76e6d13c9fb6f388b343255534f7f339e8a0930.jpg" alt="màu vàng">
                        </div>
                                            <div class="item-myThumb">
                            <img src="https://osakar.vn/storage/uploads/1715582489-32914bba21aa74fa310c0eb44a1c8f53a87c02f03aaac1e8cdd23565554ed402.jpg" alt="màu vàng">
                        </div>
                                            <div class="item-myThumb">
                            <img src="https://osakar.vn/storage/uploads/1715582489-25350ddbd484ee33afc73a66085ad04f48444397309ce9a549c5edfa77a84a09.jpg" alt="màu vàng">
                        </div>
                                            <div class="item-myThumb">
                            <img src="https://osakar.vn/storage/uploads/1715582489-56ec275971d54cc5043e67a0e501735ff8535d3e82063ba3ea9462771455f11e.jpg" alt="màu vàng">
                        </div>
                                            <div class="item-myThumb">
                            <img src="https://osakar.vn/storage/uploads/1715582489-313b0942c9d258ae39bae23016516e0f1b8dcce3759af372e7106b27c166a0f0.jpg" alt="màu vàng">
                        </div>
                                            <div class="item-myThumb">
                            <img src="https://osakar.vn/storage/uploads/1715582489-a4844f00d141e04f49dbf2f262bbab7edd108f4fa633b2314186d9a8166884f4.jpg" alt="màu vàng">
                        </div>
                                            <div class="item-myThumb">
                            <img src="https://osakar.vn/storage/uploads/1715582491-8b7a574bf1580ecb028c47c34dff5d04aff8b6f7327756919074a628d58a838e.jpg" alt="màu vàng">
                        </div>
                                            <div class="item-myThumb">
                            <img src="https://osakar.vn/storage/uploads/1715582491-a134f07fec97a5d35b4b5ed5f51d215adca97e34c26dff548fa9539e8a23520a.jpg" alt="màu vàng">
                        </div>
                                            <div class="item-myThumb">
                            <img src="https://osakar.vn/storage/uploads/1715582491-e512438b70f51fab5221566b382a177d3a3a2aee3c6acd61f327cff438abe564.jpg" alt="màu vàng">
                        </div>
                                            <div class="item-myThumb">
                            <img src="https://osakar.vn/storage/uploads/1715582491-9002526a4bb4316875c47d7dd3a3f1dac4bdf36e883c07f44f669c2edf326a7a.jpg" alt="màu vàng">
                        </div>
                                            <div class="item-myThumb">
                            <img src="https://osakar.vn/storage/uploads/1715582491-f8a246a1cae2b3aa13837c0c59b2a05ded03f63fa4886808c52a6c429d732579.jpg" alt="màu vàng">
                        </div>
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
                            <h4 class="subhead">Màn hình LED đa sắc</h4>
                            <p>Màn hình LED chất lượng cao giúp đem lại hiệu quả hiển thị rõ ràng hơn khi di chuyển ngoài trời nắng. Thiết kế tối màu với dải đèn LED chạy đuổi khi mở khoá, tạo điểm nhấn ấn tượng đặc biệt ngay khi khởi động.</p>
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
                            <h4 class="subhead">Tính năng cứu hộ SOS Mode</h4>
                            <p>Cứu hộ khẩn cấp khi xe gặp các vấn đề về tay ga, xe vẫn di chuyển với vận tốc 20km/h đến nơi sửa chữa, an tâm hơn khi vận hành.</p>
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
                            <h4 class="subhead">Bàn đạp trợ lực tiện lợi</h4>
                            <p>Thiết kế  ở vị trí cân đối và tiện lợi, dễ dàng hơn khi lên dốc hay xe yếu điện, hết điện. Phù hợp với học sinh.</p>
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
                            <h4 class="subhead">Thẻ NFC &lt;br /&gt;  Một chạm mở khoá</h4>
                            <p>Tích hợp thẻ từ NFC 1 chạm giúp tắt/mở khoá tiện lợi chỉ trong 1s, có thể cất gọn vào ví, phù hợp các tín đồ công nghệ.</p>
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
                            <img src="https://osakar.vn/home/images/dongcoxanh.png" alt="dongcoxanh">
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
                        </div>
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
                        background-image: url(https://osakar.vn/storage/uploads/1715874772-f51dfd79d9ec081195fa36e174d7a9f47690f7342335782833f05c7846c77bf4.png);
                    }

                    /* Hình ảnh 1 */
                    .performance-bg--caliper::before {
                        background-image: url(https://osakar.vn/storage/uploads/1715874770-fd2afe7af9ebf9245b80e64c55eb03feda02f5abcf1ff372a95a5f8bd89f000b.png);
                    }
                </style>
                <div class="performance-content">
                    <!-- nội dung từng phần -->
                    <div class="section-content">
                        <div class="performance-content-sizer">
                            <h4 class="subhead">Bàn đạp trợ lực khi lên dốc}}</h4>
                            <p>Thiết kế  ở vị trí cân đối và tiện lợi, dễ dàng hơn khi lên dốc hay xe yếu điện, hết điện. Phù hợp với học sinh.
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
                        background-image: url(https://osakar.vn/storage/uploads/1715874774-fdaf2b52235811afb8540ebc18c90c8a9bc58202fb40c12122dc6983ba1b3b71.png);
                    }

                    /* Hình ảnh 1 */
                    .performance-bg--f-suspension::before {
                        background-image: url(https://osakar.vn/storage/uploads/1715874772-466a2820837cc88668568fe4c7552cd47daf719fcc5af166af148ff3bcae1eee.png);
                    }
                </style>
                <div class="performance-content">
                    <!-- nội dung từng phần -->
                    <div class="section-content">
                        <div class="performance-content-sizer">
                            <h4 class="subhead">Phanh đĩa an toàn</h4>
                            <p>Hệ thống phanh E-ABS tăng khả năng chống trơn trượt, chống hao mòn tối đa, đảm bảo an toàn trong mọi địa hình.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="performance performance--r-suspension">
                <div class="performance-bg performance-bg--r-suspension"></div>
                <style>
                    /* Hình ảnh 2 */
                    .performance-bg--r-suspension {
                        background-image: url(https://osakar.vn/storage/uploads/1715874776-fd2eb7a04a26409dcb2f305e3f2c691540005615dffde01be06825f7b6570888.png);
                    }

                    /* Hình ảnh 1 */
                    .performance-bg--r-suspension::before {
                        background-image: url(https://osakar.vn/storage/uploads/1715874776-edfa9e132d8316894555b9323e98e1de632e52f8b2021a0914a848929cf8eb39.png);
                    }
                </style>
                <div class="performance-content">
                    <!-- nội dung từng phần -->
                    <div class="section-content">
                        <div class="performance-content-sizer">
                            <h4 class="subhead">Giảm xóc êm ái</h4>
                            <p>Giảm xóc Eagle chất lượng cao, nhún đều, cho trải nghiệm vận hành êm ái trong mọi địa hình</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section section-gallarey">
        <img src="https://osakar.vn/storage/uploads/1715874631-bd1410cedd7c0f520134b0d231723fd35a70b8e1a92dda446d90cdbffbfe0fea.png" alt="section8_gallarey">
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
                    <div class="tab-pane show active tabInfoProduct" id="tabInfoProduct" role="tabpanel"
                        aria-labelledby="tabInfoProduct">
                        <div class="breaking-battery-tab d-flex justify-content-between" style="margin-top: 30px">
                                <ul>
	<li>
	<h3 class="fw-light">Hệ Thống Treo (kiểu treo trước)</h3>
	<span>L&ograve; xo/ Trụ thủy lực</span></li>
	<li>
	<h3 class="fw-light">Hệ Thống Treo(kiểu treo sau)</h3>
	<span>L&ograve; xo/ Trụ thủy Lực</span></li>
	<li>
	<h3 class="fw-light">Kiểu Phanh Trước(dẫn động/ điều khiển)</h3>
	<span>Đĩa/thủy lực/Bằng tay</span></li>
	<li>
	<h3 class="fw-light">Kiểu Phanh Sau (dẫn động/ điều khiển)</h3>
	<span>Tang trống/cơ kh&iacute;/ Bằng tay</span></li>
	<li>
	<h3 class="fw-light">Ph&acirc;n Bổ B&aacute;nh Sau</h3>
	<span>55kg</span></li>
	<li>
	<h3 class="fw-light">B&aacute;nh Trước(Cỡ, tải trọng,tốc độ ,&aacute;p suất)</h3>
	<span>3.00-10; 42J; 250 KPA</span></li>
	<li>
	<h3 class="fw-light">B&aacute;nh Sau(Cỡ, tải trọng,tốc độ ,&aacute;p suất)</h3>
	<span>3.00; 42J; 250 KPA</span></li>
	<li>
	<h3 class="fw-light">Loại Lốp</h3>
	<span>Lốp kh&ocirc;ng săm</span></li>
	<li>
	<h3 class="fw-light">Đường k&iacute;nh v&agrave;nh ( trước/sau)</h3>
	<span>90cm</span></li>
</ul>
                        </div>
                    </div>
                    <div class="tab-pane tabBatteryPackages" id="tabBatteryPackages" role="tabpanel"
                        aria-labelledby="tabBatteryPackages">
                        <div class="breaking-battery-tab d-flex justify-content-between" style="margin-top: 30px">
                                <ul>
	<li>
	<h3 class="fw-light">M&agrave;u sắc</h3>
	<span>Đỏ tươi, Trắng ngọc trai,<br />
	Xanh t&iacute;m than, V&agrave;ng, Đen Nh&aacute;m</span></li>
	<li>
	<h3 class="fw-light">Thời gian sạc ti&ecirc;u chuẩn</h3>
	<span>Sạc 400W - 10h</span></li>
	<li>
	<h3 class="fw-light">Loại động cơ</h3>
	<span>Inhub</span></li>
	<li>
	<h3 class="fw-light">C&ocirc;ng suất danh định</h3>
	<span>1500 W</span></li>
</ul>

<ul>
	<li>
	<h3 class="fw-light">M&agrave;u sắc</h3>
	<span>Đỏ tươi, Trắng ngọc trai,<br />
	Xanh t&iacute;m than, V&agrave;ng, Đen Nh&aacute;m</span></li>
	<li>
	<h3 class="fw-light">Thời gian sạc ti&ecirc;u chuẩn</h3>
	<span>Sạc 400W - 10h</span></li>
	<li>
	<h3 class="fw-light">Loại động cơ</h3>
	<span>Inhub</span></li>
	<li>
	<h3 class="fw-light">C&ocirc;ng suất danh định</h3>
	<span>1500 W</span></li>
</ul>

<ul>
	<li>
	<h3 class="fw-light">M&agrave;u sắc</h3>
	<span>Đỏ tươi, Trắng ngọc trai,<br />
	Xanh t&iacute;m than, V&agrave;ng, Đen Nh&aacute;m</span></li>
	<li>
	<h3 class="fw-light">Thời gian sạc ti&ecirc;u chuẩn</h3>
	<span>Sạc 400W - 10h</span></li>
	<li>
	<h3 class="fw-light">Loại động cơ</h3>
	<span>Inhub</span></li>
	<li>
	<h3 class="fw-light">C&ocirc;ng suất danh định</h3>
	<span>1500 W</span></li>
	<li>&nbsp;</li>
</ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="node_text">
                <p> *Độ dài quãng đường đi được và tốc độ tối đa đạt được trong phần giới thiệu này được thử nghiệm
                    trong điều kiện tiêu chuẩn của OSAKAR, các yếu tố khác có thể làm ảnh hưởng đến quãng đường thực
                    tế,
                    ví dụ như tải trọng, nhiệt độ, tốc độ gió, điều kiện đường và thói quen di chuyển. Đồng thời
                    dung
                    lượng tối đa của ắc quy sẽ bị giảm sau một thời gian sử dụng do đặc tính của nó.
                    *OSAKAR có quyền thay đổi hoặc sửa đổi bất kỳ thông số kỹ thuật nào mà không cần thông báo
                    trước.
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
                                <img src="https://osakar.vn/home/images/shop.png" alt="shop">HỆ THỐNG CỬA HÀNG</a></p>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                    <div class="menu_item_fixed_policy">
                        <p><a href="#" title="ĐIỀU KHOẢN PHÁP LÝ"><img
                                    src="https://osakar.vn/home/images/akar-icons_question.png" alt="akar-icons_question">
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