@extends('/web/index')
@section('content')
@php
    include_once (app_path() . '/helpers.php');
@endphp
<main class="page-content">

    <section class="section-hero section-hero-slider owl-carousel owl-theme hidden-xs">
        @if(!empty($slide_banner))
            @foreach($slide_banner as $value)
                <div class="slider_item">
                    <a href="{{ $value->link }}" title={!! $value->title !!}>
                    <img src="{{ $value->image_banner }}" />
                    <div class="hero-copy hero-copy-slider" style="background-color: transparent">
                        {!! $value->desc !!}
                    </div>
                    </a>
                </div>
            @endforeach
        @endif
    </section>

    <section class="section-hero section-hero-slider owl-carousel owl-theme hidden-md hidden-sm hidden-lg">
        @if(!empty($slide_banner))
            @foreach($slide_banner as $value)
                <div class="slider_item">
                    <a href="{{ $value->link }}" title={!! $value->title !!}>
                    <img src="{{ $value->image_banner_mobile }}" />
                    <div class="hero-copy hero-copy-slider" style="background-color: transparent">
                        {!! $value->desc !!}
                    </div>
                    </a>
                </div>
            @endforeach
        @endif
    </section>

    <div class="swiper homeSwiper">
        <div class="homepage-swiper-wrapper ">

            <div class="cars bikes">
                <div id="block-newhome-escooter">
                    <div class="container">
                        <div class="parallax-bg">
                            <ul class="nav nav-pills cars-nav bikes-nav tab-buttons" id="pills-tab" role="tablist">
                                @if(!empty($listCategory))
                                    @foreach($listCategory as $value)
                                        <li class="nav-item highend-bike-tab" role="presentation">
                                            <span class="{{slugify($value->name)}}" id="{{slugify($value->name)}}"
                                                data-toggle="pill" role="tab" aria-controls="{{slugify($value->name)}}"
                                                aria-selected="true">
                                                {{$value->name}}
                                            </span>
                                        </li>
                                    @endforeach
                                @endif


                            </ul>
                            <div class="tab-content" id="pills-tabContent">
                                @if(!empty($data))
                                    @foreach($data as $key => $item)
                                        <div class="{{slugify($key)}}" id="{{slugify($key)}}" role="tabpanel"
                                            aria-labelledby="{{slugify($key)}}-tab">
                                            <div class="swiper-bike escooter-swiper">
                                                <div class="swiper-wrapper owl-carousel owl-theme">
                                                    @if(!empty($item))
                                                        @foreach($item as $value)
                                                            <div class="bike-item">
                                                                <a href="{{route('details.basic', $value->path)}}" class="bike-img">
                                                                    <img class src="{{$value->representative_image}}"
                                                                        alt="Xe máy điện Vento" />
                                                                </a>
                                                                <div class="bike-item-content">
                                                                    <h2 class="bike-name">{{$value->product_name}} </h2>
                                                                    <div class="bike-info">
                                                                        <div class="bike-info-item">
                                                                            <span class="col-12 pl-0 title">Quãng đường</span>
                                                                            <span class="col-12 subtitle">Lên tới
                                                                                {{$value->distance_traveled}} km/ 1 lần
                                                                                sạc</span>
                                                                        </div>
                                                                        <div class="bike-info-item">
                                                                            <span class="col-12 pl-0 title">Tốc độ</span>
                                                                            <span class="col-12 subtitle">Lên tới
                                                                                {{$value->maximum_speed}} km/h</span>
                                                                        </div>
                                                                    </div>
                                                                    <div class="bike-price">Giá bán lẻ đề xuất
                                                                        <p class="bike-price-sold">
                                                                            <span
                                                                                class="new_price">{{number_format($value->product_price)}}
                                                                                VNĐ</span>
                                                                                <?php
                                                                                if(number_format($value->price_comparison) != 0) {
                                                                                    <span
                                                                                class="old_price">{{number_format($value->price_comparison)}}
                                                                                VNĐ</span>
                                                                                }
                                                                                ?>
                                                                            
                                                                        </p>
                                                                    </div>
                                                                    <div class="d-flex flex-wrap justify-content-between">
                                                                        <a href="{{route('create.build', $value->id)}}"
                                                                            class="deposit-buy-now col-lg-6">Mua
                                                                            ngay</a>
                                                                        <a href="{{route('details.basic', $value->path)}}"
                                                                            class="view-detail col-lg-6">Xem chi tiết</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        @endforeach
                                                    @endif

                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                @endif

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section class="section section-experience">
        <div class="section-content" data-component-list="SectionIntro">
            <div class="container">
                <p class="typography-section-intro">
                    Lướt phong cách, đậm cá tính với đa dạng màu sắc phù hợp với mọi lứa tuổi</p>
                <div class="grid">

                    @if(!empty($homepage_popular_left))
                        @foreach($homepage_popular_left as $value)
                            <div class="grid-item grid-item--tile grid-item--experience-flodrive span-12 span-md-6"
                                data-component-list="GridItem">
                                <a href="{!! $value->link !!}" title="{!! $value->title !!}">
                                    <div class="image-flodrive-loop" data-component-list="FadeInOut">
                                        <figure class="image-flodrive-loop image-flodrive-loop--solid"
                                            style="background-image: url({!! $value->avatar !!}"></figure>
                                        <figure class="image-flodrive-loop image-flodrive-loop--transparent"
                                            style="background-image: url({!! $value->avatar !!})"></figure>
                                    </div>
                                    <h3 class="grid-item-eyebrow" data-aos="fade-up" data-aos-duration='1500'>{!! $value->title !!}
                                    </h3>
                                    <div class="row">
                                        <div class="col-lg-11">
                                            <div class="grid-item-copy" data-aos="fade-up" data-aos-duration='2000'>
                                                {!! $value->detail !!}</div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        @endforeach
                    @endif



                    @if(!empty($homepage_popular_right))
                        @foreach($homepage_popular_right as $value)
                            <div class="grid-item grid-item--tile grid-item--experience-mix span-12 span-md-6"
                                data-component-list="GridItem" style="background-image: url({!! $value->avatar !!}">
                                <a href="{!! $value->link !!}" title="{!! $value->title !!}">
                                <h3 class="grid-item-eyebrow" data-aos="fade-up" data-aos-duration='1500'>
                                    {!! $value->title !!}</h3>
                                <div class="row">
                                    <div class="col-lg-11">
                                        <div class="grid-item-copy" data-aos="fade-up" data-aos-duration='2000'>
                                            {!! $value->detail !!}</div>
                                    </div>
                                </div>
                                </a>
                            </div>
                        @endforeach
                    @endif

                    @if(!empty($homepage_popular_bottom))
                        @foreach($homepage_popular_bottom as $value)
                            <div class="grid-item grid-item--tile grid-item--experience-dimension span-12"
                                data-component-list="GridItem" style="background-image: url({!! $value->avatar !!}">
                                <a href="{!! $value->link !!}" title="{!! $value->title !!}">

                                <h3 class="grid-item-eyebrow" data-aos="fade-up" data-aos-duration='1500'>
                                    {!! $value->title !!}</h3>
                                <div class="row">
                                    <div class="col-md-7 col-lg-6">
                                        <div class="grid-item-copy" data-aos="fade-up" data-aos-duration='2000'>
                                            {!! $value->detail !!}</div>
                                    </div>
                                </div>
                                </a>    
                            </div>
                        @endforeach
                    @endif

                </div>
            </div>
        </div>
    </section>


    <section class="section section-pbgn section--limit-width">
        @if(!empty($homepage_counter))
            @foreach($homepage_counter as $value)
                <!-- <h2 class="typography-section-headline typography-section-headline--enhanced">Trong 20 năm phát triển, <span
                                                                        style="color: #ED2025;">OSAKAR</span> đã nhanh chóng đạt
                                                                    <br /> được những con số ấn tượng
                                                                </h2> -->

                <h2 class="typography-section-headline typography-section-headline--enhanced">{!! $value->title !!}
                </h2>

                {!! $value->detail !!}

                <!-- <div class="pbgn-badges">
                                                                    <div class="pbgn-badge">
                                                                        <div class="pbgn-badge-value counter">63</div>
                                                                        <div class="pbgn-badge-label">Tỉnh thành</div>
                                                                    </div>
                                                                    <div class="pbgn-badge">
                                                                        <div class="pbgn-badge-value"><span class="counter">100</span><span>+</span></div>
                                                                        <div class="pbgn-badge-label">Đại lý</div>
                                                                    </div>
                                                                    <div class="pbgn-badge">
                                                                        <div class="pbgn-badge-value"><span class="counter">20</span><sup>+</sup>
                                                                        </div>
                                                                        <div class="pbgn-badge-label">Mẫu xe</div>
                                                                    </div>
                                                                </div> -->

                <figure class="image-avengers" style="background: center / contain no-repeat url({!! $value->avatar !!});">
                </figure>

            @endforeach
        @endif

        <div class="pbgn-partners-section">
            <h3 class="typography-section-headline typography-section-headline--reduced">Đối tác của <span
                    class="d-inline-block">OSAKAR</span></h3>
            <div class="pbgn-partners owl-carousel owl-theme">
                @if(!empty($pbgn_partner))
                    @foreach($pbgn_partner as $value)
                        <div class="pbgn-partner"><img src="{{ $value->image_banner }}" /></div>
                    @endforeach
                @endif
            </div>
        </div>

    </section>
    <section class="section section-about">
        <div class="container">
            <div class="image-about-container owl-carousel owl-theme">
                @if(!empty($img_slider))
                    @foreach($img_slider as $value)
                        <div class="item">
                            <img src="{{ $value->image_banner }}" alt="img_slider">
                        </div>
                    @endforeach
                @endif
            </div>

            <div class="about-topics">
                @if(!empty($about_us_gt_cl))
                    @foreach($about_us_gt_cl as $value)
                        <div class="about-topic" data-aos="fade-up" data-aos-duration='2000'>
                            <a href="{!! $value->link !!}" title="{!! $value->link !!}" style="color: #323237">
                            <img class="typography-about-topic-img" src="{!! $value->avatar !!}" alt="{!! $value->title !!}" />
                            <h4 class="typography-about-topic-headline">{!! $value->title !!}</h4>
                            <div class="typography-about-topic-intro"> {!! $value->detail !!}</div>
                            </a>
                        </div>
                    @endforeach
                @endif
            </div>

            <div class="text-center">
                <a class="cta-link typewriter" href="/about-us" target="_blank">Về OSAKAR <img
                        src="{{ asset('home/images/arrow-circle-right.png') }}" /></a>
            </div>
        </div>
    </section>
    <section class="section section-gallery" data-component-list="Gallery">
        <div class="gallery-items">
            @if(!empty($gallery_items))
                @foreach($gallery_items as $value)
                    <div data-modal-trigger="gallery-modal" class="gallery-item">
                        <figure class="image-gallery image-gallery--1"
                            style="background-image: url({{ $value->image_banner }})"></figure>
                    </div>
                @endforeach
            @endif
        </div>
    </section>
    <section class="section section-impact" data-component-list="ImpactController">
        <input type="radio" name="impact-toggle" id="impact-toggle-swap" class="impact-toggle hidden" checked="">

        <div class="impact-slides">
            @if(!empty($home_page_co2))
                @foreach($home_page_co2 as $value)
                    <div class="impact-slide impact-slide--co2">
                        <div class="impact-copy">
                            <h4 class="typography-impact-eyebrow">{!! $value->title !!}</h4>
                            {!! $value->detail !!}
                        </div>
                    </div>
                @endforeach
            @endif
        </div>

        <div class="impact-slide-triggers" style="display: none">
            <label class="impact-slide-trigger"></label>
        </div>
    </section>
    <div data-v-7e7da536="" class="gdpr gdpr_cookie">
        <div data-v-7e7da536="" class="gdpr-container">
            <p data-v-7e7da536="" class="gdpr-message">Chúng tôi sử dụng cookie để phục vụ tốt hơn.</p>
            <div data-v-7e7da536="" class="gdpr-actions">
                <button data-v-7e7da536="" class="gdpr-action gdpr-action--reject">Từ chối</button>
                <button data-v-7e7da536="" class="gdpr-action gdpr-action--accept">Chấp nhận</button>
            </div>
        </div>
    </div>
</main>
@include('/web/skinpart/formemail')
<style>
    .hero-copy {
        position: absolute;
        z-index: 2;
        color: #fff;
        inset: 0;
        margin: auto;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center
    }
</style>

@endsection