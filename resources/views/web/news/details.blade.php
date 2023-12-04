@extends('/web/index')
@section('content')
    <link rel="stylesheet" href="{{ asset('home/css/news.css') }}">
    <main>
        <div class="section-news-details">
            <div class="container">
                <article class="single-article">
                    <header class="single-article-header">
                        <img alt="" class="single-article-banner"
                             src="@if(!empty($blog->representative_image)){{$blog->representative_image}}@endif">
                        <div class="single-article-meta">
                            @php
                                $timestamp = $blog->created_at;
                                $formattedDate = \Carbon\Carbon::parse($timestamp)->isoFormat('MMMM DD, YYYY');
                            @endphp
                            <time datetime="2023-11-29">{{$formattedDate}}</time>
                            <div class="single-article-share">
                                <a class="share-icon share-icon--twitter"
                                   href="https://twitter.com/intent/tweet?url=https://www.gogoro.com/news/sidbi/"
                                   target="_blank"></a>
                                <a class="share-icon share-icon--fb"
                                   href="http://www.facebook.com/sharer.php?u=https://www.gogoro.com/news/sidbi/"
                                   target="_blank"></a>
                            </div>
                        </div>
                        <h1 class="single-article-title">@if(!empty($blog->news_headlines)){!! $blog->news_headlines !!}@endif</h1>
                    </header>
                    <div class="single-article-body">
                        @if(!empty($blog->detail)){!! $blog->detail !!}@endif
                    </div>

                </article>
            </div>
            <div class="container">
                <section class="section-related-products row">
                    <h4 class="typography-article-section-title">Xe điện được đề xuất</h4>
                    <div class="products-items--related owl-carousel owl-theme">
                        <div class="bike-item">
                            <a href="#" class="bike-img">
                                <img class src="{{ asset('home/images/item3.png') }}" alt="Xe máy điện Theon"/>
                            </a>
                            <div class="bike-item-content">
                                <h2 class="bike-name">Vento </h2>
                                <div class="bike-info">
                                    <div class="bike-info-item">
                                        <span class="col-12 pl-0 title">Quãng đường</span>
                                        <span class="col-12 subtitle">Lên tới 110 km/ 1 lần
                                        sạc</span>
                                    </div>
                                    <div class="bike-info-item">
                                        <span class="col-12 pl-0 title">Tốc độ</span>
                                        <span class="col-12 subtitle">Lên tới 80 km/h</span>
                                    </div>
                                </div>
                                <div class="bike-price">Giá bán lẻ đề xuất
                                    <p class="bike-price-sold">
                                        <span class="new_price">56.350.000 VNĐ</span>
                                        <span class="old_price">56.350.000 VNĐ</span>
                                    </p>
                                </div>
                                <div class="d-flex flex-wrap justify-content-between">
                                    <a href="#" class="view-detail col-lg-6">Xem chi tiết</a>
                                </div>
                            </div>
                        </div>
                        <div class="bike-item">
                            <a href="#" class="bike-img">
                                <img class src="{{ asset('home/images/item3.png') }}" alt="Xe máy điện Theon"/>
                            </a>
                            <div class="bike-item-content">
                                <h2 class="bike-name">Vento </h2>
                                <div class="bike-info">
                                    <div class="bike-info-item">
                                        <span class="col-12 pl-0 title">Quãng đường</span>
                                        <span class="col-12 subtitle">Lên tới 110 km/ 1 lần
                                        sạc</span>
                                    </div>
                                    <div class="bike-info-item">
                                        <span class="col-12 pl-0 title">Tốc độ</span>
                                        <span class="col-12 subtitle">Lên tới 80 km/h</span>
                                    </div>
                                </div>
                                <div class="bike-price">Giá bán lẻ đề xuất
                                    <p class="bike-price-sold">
                                        <span class="new_price">56.350.000 VNĐ</span>
                                        <span class="old_price">56.350.000 VNĐ</span>
                                    </p>
                                </div>
                                <div class="d-flex flex-wrap justify-content-between">
                                    <a href="#" class="view-detail col-lg-6">Xem chi tiết</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
            <section class="section-related-article">
                <div class="container">
                    <h4 class="typography-article-section-title">Tin tức khác</h4>
                    <div class="article-items article-items--related owl-carousel owl-theme">
                        @if(!empty($list_blog))
                            @foreach($list_blog as $value)
                                <article class="article-item">
                                    <a class="article-item-image-wrapper" href="{{route('page.blog',$value->slug)}}">
                                        <img alt=""
                                             src="{{ $value->representative_image }}">
                                    </a>
                                    <div class="article-item-meta">
                                        @php
                                            $timestamp = $value->created_at;
                                            $formattedDate = \Carbon\Carbon::parse($timestamp)->isoFormat('MMMM DD, YYYY');
                                        @endphp
                                        <time datetime="2023-11-29" class="article-item-date typography-article-time">
                                            {{$formattedDate}}
                                        </time>
                                        <span class="article-item-badge">{{ $value->category_title }}</span>
                                    </div>
                                    <a class="article-item-link" href="{{route('page.blog',$value->slug)}}">
                                        <h3 class="typography-article-title"> {!! $value->news_headlines !!}  </h3>
                                    </a>
                                    <p class="typography-article-summary">{!! $value->describe !!}</p>
                                </article>
                            @endforeach
                        @endif
                    </div>
                </div>
            </section>
        </div>
        <style>
            .article-items--related {
                margin-right: -15px;
                margin-left: -15px;
            }

            .article-item {
                margin: 0 15px;
            }

            .section-related-products {
                border-top: 1px solid #CCCDD0;
                padding-top: 36px;
                padding-bottom: 64px;
            }

            .section-related-products .typography-article-section-title {
                margin-bottom: 10px;
            }

            .products-items--related .owl-stage-outer {
                padding: 15px 0;
            }

            .bike-item {
                box-shadow: 0px 0px 20px 0px rgba(191, 191, 191, 0.25);
                border-radius: 12px;
                padding: 16px;
                display: flex;
                align-items: center;
                gap: 20px;
                background: #fff;
                margin: 0 15px;
            }

            .bike-item-content .bike-name {
                font-size: 16px;
                font-style: normal;
                font-weight: 600;
                line-height: 24px;
                letter-spacing: 0.16px;
                color: #1A202C;
                margin-bottom: 20px;
            }

            .bike-item-content .bike-info {
                display: flex;
                align-items: center;
                justify-content: space-between;
            }

            .bike-item-content .bike-info .bike-info-item {
                font-size: 12px;
                font-style: normal;
                font-weight: 600;
                line-height: 18px;
                color: #80838A;
                margin-bottom: 20px;
            }

            .bike-item-content .bike-info .bike-info-item .title {
                display: block;
            }

            .bike-item-content .bike-info .bike-info-item .subtitle {
                font-size: 12px;
                font-style: normal;
                font-weight: 400;
                line-height: 18px;
                color: #1A202C
            }

            .bike-item-content .bike-price {
                font-size: 12px;
                font-style: normal;
                font-weight: 600;
                line-height: 18px;
                color: #80838A;
                margin-bottom: 20px;
            }

            .bike-item-content .bike-price .bike-price-sold .new_price {
                font-size: 16px;
                font-style: normal;
                font-weight: 600;
                line-height: 24px;
                letter-spacing: 0.16px;
                color: #FC0700;
                margin-right: 10px;
            }

            .bike-item-content .bike-price .bike-price-sold .old_price {
                color: #1A202C;
                text-decoration: line-through;
            }

            .view-detail {
                border-radius: 60px;
                background: #343944;
                width: 100%;
                font-size: 14px;
                font-style: normal;
                font-weight: 500;
                line-height: 20px;
                padding: 12px 20px;
                color: #fff;
                text-align: center;
            }
        </style>
    </main>
@endsection
