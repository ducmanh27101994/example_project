@extends('/web/index')
@section('content')
<main class="page-content">
    <nav class="family-nav" data-component-list="FamilyNav FamilyNavMenu">
        <div class="family-nav-wrapper">
            <ul class="family-nav-items">


                @if(!empty($products_hot))
                    @foreach($products_hot as $value)
                        <li class="family-nav-item">
                            <a class="family-nav-link " href="{{route('details.basic', $value->path)}}"
                                data-family-menu-target="">
                                <figure id="family-nav-image-2-series"
                                    class="family-nav-image family-nav-image--2-series family-nav-image--2-series-en"
                                    style="background-image: url('{{$value->representative_image}}')"></figure>
                                <h4 class="family-nav-label" role="text">{{$value->product_name}}</h4>
                                <span class="family-nav-new">Hot</span>
                            </a>
                        </li>
                    @endforeach
                @endif


            </ul>
        </div>
    </nav>

    <section class="section section-hero">
        <div class="hero-copy-position">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-9 col-md-10">
                        <div class="hero-copy">
                            <h4 class="typography-eyebrow">Xe điện thông minh Osakar</h4>
                            <h3 class="typography-hero-headline">Một vẻ đẹp thời thượng.</h3>
                            <p class="typography-intro-super">Sự đổi mới và thiết kế độc đáo giúp xe di chuyển linh
                                hoạt, dễ dàng trên mọi cung đường. Trải nghiệm vận hành êm ái, cảm giác an toàn. Chào
                                mừng bạn đến với bản nâng cấp của xe máy điện.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section section-family">
        <div class="container">
            <div class="regions_wrapper">
                <div class="regions_wrapper_area owl-carousel hidden-xs">
                    @if(!empty($category))
                        @foreach($category as $key => $value)
                            <div
                                class="regions_wrapper_area_item {{ request()->is('category-product/' . $value->id) ? 'active' : '' }} @if($key == 0) {{ request()->is('category-product') ? 'active' : '' }} @endif">
                                <a href="{{route('category.product.detail', $value->id)}}"
                                    title="{{$value->name}}">{{$value->name}}</a>
                            </div>
                        @endforeach
                    @endif
                </div>

                <div class="regions_wrapper_area hidden-sm hidden-lg hidden-md">
                    <select id="regionDropdown" onchange="navigateToRegion()">
                        @if(!empty($category))
                            @foreach($category as $key => $value)
                                <option {{ request()->is('category-product/' . $value->id) ? 'selected' : '' }}
                                    value="{{route('category.product.detail', $value->id)}}">{{$value->name}}</option>
                            @endforeach
                        @endif
                    </select>
                </div>
            </div>
            @if(!empty($products))
                    <div class="family-items">
                        @foreach($products as $value)
                                    <div class="family-item family-item--supersport ">
                                        <div class="family-item-copy">
                                            <h4 class="typography-eyebrow">Osakar

                                                <?php
                            if ($value->interface_type != 1) {
                                                                ?>
                                                <span class="hot">Hot</span>
                                                <?php
                            }
                                                        ?>


                                            </h4>
                                            <h3 class="typography-tagline">{{$value->product_name}}</h3>
                                            <a class="cta-link from-left-and-back" href="{{route('details.basic', $value->path)}}">Xem chi
                                                tiết</a>
                                        </div>
                                        <figure class="image-family image-family--supersport"
                                            style="background-image: url('{{$value->representative_image}}')"></figure>
                                        <a href="{{route('create.build', $value->id)}}" class="deposit-buy-now ">Mua ngay</a>
                                    </div>
                        @endforeach
                    </div>
                    <div class="navigation_page">
                        {{ $products->links() }}
                    </div>
            @endif

        </div>
    </section>

    <section class="section section-stories" data-component-list="Stories"
        style="touch-action: pan-y; user-select: none; -webkit-user-drag: none; -webkit-tap-highlight-color: rgba(0, 0, 0, 0);">
        <div class="container">
            <div class="row">
                <div class="col-lg-11 col-xl-9 col-xxl-8">
                    <h3 class="typography-stories-headline">Yêu thích chuyến đi.</h3>
                    <p class="typography-stories-intro">Sự đổi mới và thiết kế độc đáo giúp xe di chuyển linh hoạt, dễ dàng trên mọi cung đường. Trải nghiệm vận hành êm ái, cảm giác an toàn. Chào mừng bạn đến với bản nâng cấp của xe máy điện...
                    </p>
                </div>
            </div>
        </div>


        <div class="story-items">
            <div data-story-track="" class="story-items-track owl-carousel owl-theme">
                @if(!empty($blog1))
                    @foreach($blog1 as $value)
                        <div class="story-item container">
                            <img src="{{$value->representative_image}}">
                            <div class="story-item-copy">
                                <h4 class="typography-story-headline">{{$value->news_headlines}}</h4>
                                <p class="typography-story-intro">{!! $value->describe !!}</p>
                                <a class="cta-link typewriter" href="{{route('page.blog',$value->slug)}}" target="_blank">ĐỌC THÊM TIN TỨC <img
                        src="{{ asset('home/images/arrow-circle-right.png') }}" /></a>
                            </div>
                        </div>
                    @endforeach
                @endif


            </div>


        </div>
    </section>

    <section class="section section-stories " data-component-list="Stories"
        style="touch-action: pan-y; user-select: none; -webkit-user-drag: none; -webkit-tap-highlight-color: rgba(0, 0, 0, 0);">
        <div id="container" class="container">
            <div class="row">
                <div class="col-lg-11 col-xl-9 col-xxl-8">
                    <h3 class="typography-stories-headline">Thông minh đạt tiêu chuẩn.</h3>
                    <p class="typography-stories-intro">Sự đổi mới và thiết kế độc đáo giúp xe di chuyển linh hoạt, dễ dàng trên mọi cung đường. Trải nghiệm vận hành êm ái, cảm giác an toàn. Chào mừng bạn đến với bản nâng cấp của xe máy điện...</p>
                </div>
            </div>
        </div>


        <div class="story-items">
            <div data-story-track="" class="story-items-track owl-carousel owl-theme">
                @if(!empty($blog2))
                    @foreach($blog2 as $value)
                        <div class="story-item container">
                            <img src="{{$value->representative_image}}">
                            <div class="story-item-copy">
                                <h4 class="typography-story-headline">{{$value->news_headlines}}</h4>
                                <p class="typography-story-intro">{!! $value->describe !!}</p>
                                <a class="cta-link typewriter" href="{{route('page.blog',$value->slug)}}" target="_blank">ĐỌC THÊM TIN TỨC <img
                        src="{{ asset('home/images/arrow-circle-right.png') }}" /></a>
                            </div>
                        </div>
                    @endforeach
                @endif

            </div>


        </div>
    </section>

    <section class="section section-stories " data-component-list="Stories"
        style="touch-action: pan-y; user-select: none; -webkit-user-drag: none; -webkit-tap-highlight-color: rgba(0, 0, 0, 0);">
        <div class="container">
            <div class="row">
                <div class="col-lg-11 col-xl-9 col-xxl-8">
                    <h3 class="typography-stories-headline">Dễ dàng hơn bao giờ hết.</h3>
                    <p class="typography-stories-intro">Sự đổi mới và thiết kế độc đáo giúp xe di chuyển linh hoạt, dễ dàng trên mọi cung đường. Trải nghiệm vận hành êm ái, cảm giác an toàn. Chào mừng bạn đến với bản nâng cấp của xe máy điện...</p>
                </div>
            </div>
        </div>


        <div class="story-items">
            <div data-story-track="" class="story-items-track owl-carousel owl-theme">
                @if(!empty($blog3))
                    @foreach($blog3 as $value)
                        <div class="story-item container">
                            <img src="{{$value->representative_image}}">
                            <div class="story-item-copy">
                                <h4 class="typography-story-headline">{{$value->news_headlines}}</h4>
                                <p class="typography-story-intro">{!! $value->describe !!}</p>
                                <a class="cta-link typewriter" href="{{route('page.blog',$value->slug)}}" target="_blank">ĐỌC THÊM TIN TỨC <img
                        src="{{ asset('home/images/arrow-circle-right.png') }}" /></a>
                            </div>
                        </div>
                    @endforeach
                @endif
            </div>


        </div>
    </section>
    <link rel="stylesheet" href="{{ asset('home/css/cate-product.css') }}">
    <script>
        function navigateToRegion() {
            var dropdown = document.getElementById("regionDropdown");
            var selectedValue = dropdown.options[dropdown.selectedIndex].value;
            window.location.href = selectedValue;
        }
    </script>
</main>
@include('/web/skinpart/formemail')

@endsection