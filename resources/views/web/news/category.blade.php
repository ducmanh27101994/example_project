@extends('/web/index')
@section('content')
    <link rel="stylesheet" href="{{ asset('home/css/news.css') }}">
    <main>
        <h1 class="hidden">Tin tức - Osakar.vn</h1>
        <div class="feature-article">

            @if(!empty($list_blog_one_hot_news))
                <div class="fa-container">
                    <div class="fa-image-container">
                        <img src="{{ $list_blog_one_hot_news->representative_image }}">
                    </div>
                    <div class="fa-copy">
                        <div class="container fa-copy-container">
                            @php
                                $timestamp = $list_blog_one_hot_news->created_at;
                                $formattedDate = \Carbon\Carbon::parse($timestamp)->isoFormat('MMMM DD, YYYY');
                            @endphp
                            <time datetime="{{$formattedDate}}" class="article-item-date typography-article-time">
                                {{$formattedDate}}
                            </time>
                            <h3 class="typography-article-title-enhanced">{!! $list_blog_one_hot_news->news_headlines !!}</h3>
                            <div class="typography-article-summary">{!! $list_blog_one_hot_news->describe !!}
                            </div>
                            <a class="cta-link" href="{{route('page.blog',$list_blog_one_hot_news->slug)}}">Xem thêm</a>
                        </div>
                    </div>
                </div>
            @endif


        </div>

        <section class="section-news">
            <div class="container">
                <h2 class="typography-page-headline">Tin tức</h2>
                <div class="article-category-links">
                    <input type="checkbox" name="story-collection-toggle" id="story-collection-toggle"
                           class="story-collection-toggle d-none">
                    <a class="article-category-link {{ request()->is('category-news') ? 'article-category-link--active' : '' }}"
                       href="{{ route('page.category') }}">Tất cả</a>

                    @if(!empty($listCategory))
                        @foreach($listCategory as $value)
                            <a class="article-category-link {{ request()->is('category-list/' . $value->id) ? 'article-category-link--active' : '' }}"
                               href="{{ route('page.category.list', $value->id) }}">{{ $value->category_title }}</a>
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
                                    <time datetime="{{$formattedDate}}"
                                          class="article-item-date typography-article-time">
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
                    <div class="pagination">
                        {{ $list_blog->links() }}
                    </div>

                </div>
                <div class="text-center">
                    <a class="cta-link cta-link--block" href="{{route('page.category')}}">Xem tất cả </a>
                </div>
            </div>
        </section>
        @include('/web/skinpart/formemail')
    </main>

@endsection
