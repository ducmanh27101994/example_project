@extends('/web/index')
@section('content')
<link rel="stylesheet" href="{{ asset('home/css/news.css') }}">
<main>
    <h1 class="hidden">Tin tức - Osakar.vn</h1>
    <div class="feature-article">
        <div class="fa-container">
            <div class="fa-image-container">
                <img src="https://gogoro-about-uploads.s3.ap-northeast-1.amazonaws.com/storage/202311/ov2yi84yebyouw2ytfnu20jsj6qv">
            </div>
            <div class="fa-copy">
                <div class="container fa-copy-container">
                    <time datetime="2023-11-07" class="typography-article-time">November 7, 2023</time>
                    <h3 class="typography-article-title-enhanced">Gogoro Unveils Scooter Key in Apple Wallet for its
                        Smartscooters®</h3>
                    <div class="typography-article-summary">Gogoro announces the scooter key in Apple Wallet feature
                        today. Smartscooter® riders can now seamlessly access and start their scooters with iPhone
                        and Apple Watch.
                    </div>
                    <a class="cta-link" href="/news/scooter-key-in-apple-wallet/">READ MORE</a>
                </div>
            </div>
        </div>
    </div>

    <section class="section-news">
        <div class="container">
            <h2 class="typography-page-headline">Tin tức</h2>
            <div class="article-category-links">
                <input type="checkbox" name="story-collection-toggle" id="story-collection-toggle" class="story-collection-toggle d-none">
                <a class="article-category-link {{ request()->is('category-news') ? 'article-category-link--active' : '' }}" href="{{ route('page.category') }}">Tất cả</a>

                @if(!empty($listCategory))
                @foreach($listCategory as $value)
                <a class="article-category-link {{ request()->is('category-list/' . $value->id) ? 'article-category-link--active' : '' }}" href="{{ route('page.category.list', $value->id) }}">{{ $value->category_title }}</a>
                @endforeach
                @endif

            </div>
            <div class="article-items">
                @if(!empty($list_blog))
                @foreach($list_blog as $value)
                <article class="article-item">
                    <a class="article-item-image-wrapper" href="{{route('page.blog',$value->slug)}}">
                        <img alt="" src="{{ $value->representative_image }}">
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
                        <h3 class="typography-article-title"> {!! $value->news_headlines !!} </h3>
                    </a>
                    <div class="typography-article-summary">{!! $value->describe !!}</div>
                </article>
                @endforeach
                @endif
            </div>
            <div class="text-center">
                <a class="cta-link cta-link--block" href="{{route('page.category')}}">Xem tất cả </a>
            </div>
        </div>
    </section>
    @include('/web/skinpart/formemail')
</main>

@endsection