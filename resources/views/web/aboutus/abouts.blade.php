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
                            title="Livestream XE ĐIỆN OSAKAR NISPA VERA MỚI NHẤT ĐANG CÓ TẠI XE ĐẠP 107" frameborder="0"
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
                        <div class="highend-bike" id="highend-bike" role="tabpanel" aria-labelledby="highend-bike-tab">
                            <div class="mission-content">
                                <div class="mission-head">

                                    @if(!empty($about_us_tm_sm))
                                        @foreach($about_us_tm_sm as $value)
                                            <h2>{!! $value->title !!}</h2>
                                            <p>{!! $value->detail !!}</p>
                                        @endforeach
                                    @endif

                                </div>
                                <div class="row">
                                    @if(!empty($about_us_mission))
                                        @foreach($about_us_mission as $value)
                                            <div class="col-xs-6 col-sm-4 col-md-4 col-lg-4">
                                                <div class="mission-item">

                                                    <img src="{!! $value->avatar !!}" alt="{!! $value->title !!}">

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

                                @if(!empty($about_us_gt_cl))
                                    @foreach($about_us_gt_cl as $value)
                                        <div class="about-topic">
                                            <img class="typography-about-topic-img"
                                                src="{!! $value->avatar !!}" alt="{!! $value->title !!}" />
                                            <h4 class="typography-about-topic-headline">{!! $value->title !!}</h4>
                                            <div class="typography-about-topic-intro"> {!! $value->detail !!}</div>
                                        </div>
                                    @endforeach
                                @endif

                            </div>
                            <div class="text-center">
                                <a class="cta-link" href="/" target="_blank">Về chúng tôi <img
                                        src="{{ asset('home/images/arrow-circle-right.png') }}" /></a>
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
                        <ul class="nav nav-pills cars-nav bikes-nav tab-buttons-slider" id="pills-tab" role="tablist">
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
                            <div class="history-one" id="history-one" role="tabpanel" aria-labelledby="history-one-tab">

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
                            <div class="history-two" id="history-two" role="tabpanel" aria-labelledby="history-two-tab">
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
                                                <br /> Nội địa hoá sản xuất tại Việt Nam lên dến 80%. Hớp tác với tập
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
                            <div class="pbgn-partner"><img src="{{ $value->image_banner }}" />
                            </div>
                        @endforeach
                    @endif
                </div>
            </div>
        </div>
    </div>
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
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