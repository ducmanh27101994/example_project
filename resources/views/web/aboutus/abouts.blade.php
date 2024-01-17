@extends('/web/index')
@section('content')

    <main class="page-content">
        <h1 style="display: none;">About us</h1>
        <div class="about_us_page">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-md-12">
                        <div class="video_intro">
                            <iframe width="100%" height="570" src="https://www.youtube.com/embed/yJG90zU3_ug"
                                    title="Livestream XE ĐIỆN OSAKAR NISPA VERA MỚI NHẤT ĐANG CÓ TẠI XE ĐẠP 107"
                                    frameborder="0"
                                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                    allowfullscreen></iframe>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="section sec-misstion-wrapper">
                    <div class="parallax-bg">
                        <ul class="nav nav-pills cars-nav bikes-nav tab-buttons" id="pills-tab" role="tablist">
                            <li class="nav-item highend-bike-tab" role="presentation">
                            <span class="highend-bike" id="highend-bike-tab" data-toggle="pill" role="tab"
                                  aria-controls="highend-bike" aria-selected="true">
                                Tầm nhìn & Sứ mệnh
                            </span>
                            </li>
                            <li class="nav-item midend-bike-tab" role="presentation">
                            <span class="midend-bike" id="midend-bike-tab" data-toggle="pill" role="tab"
                                  aria-controls="midend-bike" aria-selected="false">
                                Giá trị cốt lõi
                            </span>
                            </li>
                        </ul>
                        <div class="tab-content" id="pills-tabContent">
                            <div class="highend-bike" id="highend-bike" role="tabpanel"
                                 aria-labelledby="highend-bike-tab">
                                <div class="mission-content">
                                    <div class="mission-head">
                                        <h2>Tầm nhìn & Sứ mệnh</h2>
                                        <p>OSAKAR định hướng phát triển thành một Tập đoàn Công nghệ - Thương mại Dịch
                                            vụ hàng đầu khu vực, không ngừng đổi mới, sáng tạo để kiến tạo hệ sinh thái
                                            các sản phẩm dịch vụ đẳng cấp, góp phần nâng cao chất lượng cuộc sống của
                                            người Việt và nâng tầm vị thế của thương hiệu Việt trên trường quốc tế.</p>
                                    </div>
                                    <div class="row">
                                        @if(!empty($about_us_mission))
                                            @foreach($about_us_mission as $value)
                                                <div class="col-xs-6 col-sm-4 col-md-4 col-lg-4">
                                                    <div class="mission-item">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48"
                                                             viewBox="0 0 48 48" fill="none">
                                                            <path
                                                                d="M24 45.5C12.14 45.5 2.5 35.86 2.5 24C2.5 12.14 12.14 2.5 24 2.5C24.82 2.5 25.5 3.18 25.5 4C25.5 4.82 24.82 5.5 24 5.5C13.8 5.5 5.5 13.8 5.5 24C5.5 34.2 13.8 42.5 24 42.5C34.2 42.5 42.5 34.2 42.5 24C42.5 23.18 43.18 22.5 44 22.5C44.82 22.5 45.5 23.18 45.5 24C45.5 35.86 35.86 45.5 24 45.5Z"
                                                                fill="#5F0D0E"/>
                                                            <path
                                                                d="M30.093 8.21456C29.8712 8.87606 30.0528 9.58859 30.5668 10.0741L32.6751 12.0654L32.1774 14.8773C32.056 15.563 32.3414 16.2428 32.9222 16.6516C33.503 17.0604 34.2585 17.1133 34.8939 16.7897L37.5 15.4621L40.1061 16.7897C40.3825 16.9304 40.6815 17 40.9791 17C41.3657 17 41.7497 16.8826 42.0778 16.6516C42.6586 16.2428 42.944 15.563 42.8226 14.8773L42.3249 12.0654L44.4332 10.0741C44.9472 9.58859 45.1288 8.87606 44.907 8.21456C44.6852 7.55305 44.1062 7.07988 43.3956 6.97978L40.4819 6.56952L39.1788 4.01123C38.8613 3.38743 38.218 3 37.5001 3C36.7822 3 36.1389 3.38743 35.8212 4.01123L34.5182 6.56952L31.6043 6.97978C30.8938 7.07988 30.3148 7.55305 30.093 8.21456ZM35.5872 9.01053C36.0183 8.94983 36.3909 8.68756 36.5837 8.3091L37.5001 6.50994L38.4165 8.3091C38.6093 8.68756 38.9819 8.94983 39.4129 9.01053L41.4621 9.29905L39.9793 10.6996C39.6674 10.9942 39.5251 11.4186 39.5987 11.8346L39.9486 13.812L38.1159 12.8783C37.7304 12.6819 37.2697 12.6819 36.8843 12.8783L35.0515 13.812L35.4015 11.8346C35.4751 11.4186 35.3328 10.9942 35.0209 10.6996L33.5381 9.29905L35.5872 9.01053Z"
                                                                fill="#ED2025"/>
                                                            <path
                                                                d="M22.859 32.0016V20.5616L20.159 22.2216V19.2216L22.859 17.6016H25.639V32.0016H22.859Z"
                                                                fill="#ED2025"/>
                                                        </svg>
                                                        {!! $value->detail !!}
                                                    </div>
                                                </div>
                                            @endforeach
                                        @endif

                                    </div>
                                </div>
                            </div>
                            <div class="midend-bike" id="midend-bike" role="tabpanel" aria-labelledby="midend-bike-tab">
                                <div class="mission-content">
                                    <div class="mission-head">
                                        <h2>Giá trị cốt lõi</h2>
                                    </div>
                                </div>
                                <div class="about-topics">
                                    <div class="about-topic">
                                        <img class="typography-about-topic-img"
                                             src="{{ asset('home/images/ic_baohanhvikh.png') }}"/>
                                        <h4 class="typography-about-topic-headline">Chính sách bảo hành vì khách
                                            hàng</h4>
                                        <p class="typography-about-topic-intro">Bảo hành dành riêng cho bạn - Cam kết
                                            chất lượng và sự
                                            hài lòng của khách hàng là ưu tiên hàng đầu của chúng tôi.</p>
                                    </div>
                                    <div class="about-topic">
                                        <img class="typography-about-topic-img"
                                             src="{{ asset('home/images/ic_dichvuKHtotnhat.png') }}"/>
                                        <h4 class="typography-about-topic-headline">Dịch vụ khách hàng tốt nhất</h4>
                                        <p class="typography-about-topic-intro">Dịch vụ khách hàng ưu việt - Tận tâm
                                            phục vụ, luôn lắng
                                            nghe và đáp ứng mong muốn của mọi khách hàng.</p>
                                    </div>
                                    <div class="about-topic">
                                        <img class="typography-about-topic-img"
                                             src="{{ asset('home/images/ic_spchatluongVN.png') }}"/>
                                        <h4 class="typography-about-topic-headline">Sản phẩm chất lượng hàng đầu Việt
                                            Nam</h4>
                                        <p class="typography-about-topic-intro">Osakar luôn tự hào mang đến chất lượng
                                            vượt trội và đẳng
                                            cấp kết hợp với sự đa dạng về thiết kế và màu sắc của các mẫu xe.</p>
                                    </div>
                                </div>
                                <div class="text-center">
                                    <a class="cta-link" href="#" target="_blank">Về chúng tôi <img
                                            src="{{ asset('home/images/arrow-circle-right.png') }}"/></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="sec section-history">
                <div class="container">
                    <div class="mission-content">
                        <div class="mission-head">
                            <h2>Lịch sử phát triển</h2>
                        </div>
                        <div class="parallax-bg">
                            <ul class="nav nav-pills cars-nav bikes-nav tab-buttons-slider" id="pills-tab"
                                role="tablist">
                                <li class="nav-item history-one-tab" role="presentation">
                                <span class="history-one" id="history-one-tab" data-toggle="pill" role="tab"
                                      aria-controls="history-one" aria-selected="true">
                                    Quá trình hình thành và phát triển
                                </span>
                                </li>
                                <li class="nav-item history-two-tab" role="presentation">
                                <span class="history-two" id="history-two-tab" data-toggle="pill" role="tab"
                                      aria-controls="history-two" aria-selected="false">
                                    Các cột mốc quan trọng
                                </span>
                                </li>
                            </ul>
                            <div class="tab-content-slider" id="pills-tabContent">
                                <div class="history-one" id="history-one" role="tabpanel"
                                     aria-labelledby="history-one-tab">

                                    <div class="history_content_box">
                                        <div class="image">
                                            @if(!empty($about_us_image))
                                                <img src="{{ $about_us_image->avatar }}" alt="history_1">
                                            @else
                                                <img src="{{ asset('home/images/history_1.png') }}" alt="history_1">
                                            @endif
                                        </div>
                                        <div class="content">
                                            @if(!empty($history_content_box))
                                                {!! $history_content_box->detail !!}
                                            @endif
                                        </div>
                                    </div>

                                </div>
                                <div class="history-two" id="history-two" role="tabpanel"
                                     aria-labelledby="history-two-tab">
                                    <div class="timeline_wrapper_start_box">
                                        <ul class="btn_arrows_show">
                                            <li class="prev"><img src="{{ asset('home/images/slide-arrow-left.png') }}"
                                                                  alt="slide-arrow-left"></li>
                                            <li class="next"><img src="{{ asset('home/images/slide-arrow-right.png') }}"
                                                                  alt="slide-arrow-right"></li>
                                        </ul>
                                        <div class="timeline-ver-slider">

                                            <div class="timeline-item">
                                                <div class="year">
                                                    <span>2004</span>
                                                </div>
                                                <div class="dotted">
                                                    <span></span>
                                                </div>
                                            </div>

                                            <div class="timeline-item">
                                                <div class="year">
                                                    <span>2007</span>
                                                </div>
                                                <div class="dotted">
                                                    <span></span>
                                                </div>
                                            </div>

                                            <div class="timeline-item">
                                                <div class="year">
                                                    <span>2015</span>
                                                </div>
                                                <div class="dotted">
                                                    <span></span>
                                                </div>
                                            </div>

                                            <div class="timeline-item">
                                                <div class="year">
                                                    <span>2018</span>
                                                </div>
                                                <div class="dotted">
                                                    <span></span>
                                                </div>
                                            </div>

                                            <div class="timeline-item">
                                                <div class="year">
                                                    <span>2022</span>
                                                </div>
                                                <div class="dotted">
                                                    <span></span>
                                                </div>
                                            </div>

                                            <div class="timeline-item">
                                                <div class="year">
                                                    <span>2018</span>
                                                </div>
                                                <div class="dotted">
                                                    <span></span>
                                                </div>
                                            </div>

                                            <div class="timeline-item">
                                                <div class="year">
                                                    <span>2022</span>
                                                </div>
                                                <div class="dotted">
                                                    <span></span>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="slider-timeline-for">

                                        <div class="content">
                                            <div class="mota">
                                                <h2>Thành lập công ty</h2>
                                                <p>Ngày 13/2/2004 Công ty TNHH sản xuất phụ tùng xe máy Đức Minh ra đời
                                                    và thâm nhập thị trường với các sản phẩm bao gồm: các chi tiết, bộ
                                                    phận nhựa, đồng hồ, gương, mũ bảo hiểm. Xây dựng công trường lắp ráp
                                                    với diện tích 10.000m2 đặt tại Gia Lâm với nhiều trang thiết bị hiện
                                                    đại</p>
                                            </div>
                                        </div>

                                        <div class="content">
                                            <div class="mota">
                                                <h2>Những viên gạch đầu tiên</h2>
                                                <p>Lắp đặt dây chuyền sản xuất mũ bảo hiểm đạt đúng tiêu chuẩn và khai
                                                    trương Showroom mũ bảo hiểm mang thương hiệu Osakar đầu tiên tại Hà
                                                    Nội.</p>
                                            </div>
                                        </div>

                                        <div class="content">
                                            <div class="mota">
                                                <h2>Những viên gạch đầu tiên</h2>
                                                <p>Lắp đặt dây chuyền sản xuất mũ bảo hiểm đạt đúng tiêu chuẩn và khai
                                                    trương Showroom mũ bảo hiểm mang thương hiệu Osakar đầu tiên tại Hà
                                                    Nội.</p>
                                            </div>
                                        </div>

                                        <div class="content">
                                            <div class="mota">
                                                <h2>Tối ưu sản xuất</h2>
                                                <p>Phát triển thêm 05 mẫu xe máy điện. Mở rộng chuỗi showroom lên đến
                                                    200 và đầu tư thêm một dây chuyền sản xuất xe điện với nhiều trang
                                                    thiết bị hiện đại.
                                                    <br/> Nội địa hoá sản xuất tại Việt Nam lên dến 80%. Hớp tác với tập
                                                    đoàn công nghê Gobao trong việc ứng dụng động cơ, bộ điều khiển, sạc
                                                    vào xe điện Osakar
                                                </p>
                                            </div>
                                        </div>

                                        <div class="content">
                                            <div class="mota">
                                                <h2>Phát triển để dẫn đầu</h2>
                                                <p>Xây chuỗi Showroom lên tới 400 trên khắp cả nước và hơn 600 đại lý
                                                    cấp 2 bán sản phẩm. Tiếp tục xây dựng nhà máy với diện tích 30.000m2
                                                    với công suất 100.000xe/tháng và trở thành thương hiệu xe điện được
                                                    mọi người yêu thích nhất.</p>
                                            </div>
                                        </div>


                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="sec section-sohoa">
                <div class="container">
                    <div class="box-banner-sohoa">
                        <div class="text-content">
                            @if(!empty($box_banner_sohoa))
                                {!! $box_banner_sohoa->detail !!}
                            @endif
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="pbgn-partners-section">
                    <h3 class="typography-section-headline typography-section-headline--reduced text-center">Thương hiệu
                        được cung cấp bởi <span class="d-inline-block">OSAKAR</span></h3>
                    <div class="pbgn-partners owl-carousel owl-theme">
                        @if(!empty($pbgn_partner))
                            @foreach($pbgn_partner as $value)
                                <div class="pbgn-partner"><img
                                        src="{{ $value->image_banner }}"/>
                                </div>
                            @endforeach
                        @endif
                    </div>
                </div>
            </div>
        </div>
        <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
        <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
        <script>
            $(document).ready(function () {
                $('.timeline-ver-slider').slick({
                    slidesToShow: 5,
                    slidesToScroll: 1,
                    asNavFor: '.slider-timeline-for',
                    dots: false,
                    arrows: true,
                    focusOnSelect: true,
                    prevArrow: $('.prev'),
                    nextArrow: $('.next'),
                    responsive: [{
                        breakpoint: 1024,
                        settings: {
                            slidesToShow: 4,
                            slidesToScroll: 3,
                            infinite: true,
                            dots: true
                        }
                    },
                        {
                            breakpoint: 600,
                            settings: {
                                slidesToShow: 3,
                                slidesToScroll: 2
                            }
                        },
                        {
                            breakpoint: 480,
                            settings: {
                                slidesToShow: 2,
                                slidesToScroll: 1
                            }
                        }
                    ]
                });
                $('.slider-timeline-for').slick({
                    slidesToShow: 1,
                    slidesToScroll: 1,
                    arrows: false,
                    fade: true,
                    asNavFor: '.timeline-ver-slider'
                });
            })
        </script>
    </main>

@endsection
