@extends('/web/index')
@section('content')
<main class="page-content">
    <nav class="family-nav" data-component-list="FamilyNav FamilyNavMenu" style="display: none">
        <div class="family-nav-wrapper" style="display: none">
            <ul class="family-nav-items">
                <li class="family-nav-item">
                    <a class="family-nav-link " href="#" data-family-menu-target="">
                        <figure id="family-nav-image-2-series"
                            class="family-nav-image family-nav-image--2-series family-nav-image--2-series-en"></figure>
                        <h4 class="family-nav-label" role="text">Gogoro 2 Series</h4>
                        <span class="family-nav-new">Hot</span>
                    </a>
                </li>
                <li class="family-nav-item">
                    <a class="family-nav-link" href="#" data-family-menu-target="viva-xl">
                        <figure id="family-nav-image-viva-xl"
                            class="family-nav-image family-nav-image--viva-xl family-nav-image--viva-xl-en"></figure>
                        <h4 class="family-nav-label" role="text">Gogoro VIVA XL</h4>
                        <span class="family-nav-new">Hot</span>
                    </a>
                </li>
                <li class="family-nav-item">
                    <a class="family-nav-link" href="#" data-family-menu-target="viva-mix">
                        <figure id="family-nav-image-viva-mix"
                            class="family-nav-image family-nav-image--viva-mix family-nav-image--viva-mix-en"></figure>
                        <h4 class="family-nav-label" role="text">Gogoro VIVA MIX</h4>
                        <span class="family-nav-new">Hot</span>
                    </a>
                </li>
                <li class="family-nav-item">
                    <a class="family-nav-link " href="#" data-family-menu-target="">
                        <figure id="family-nav-image-viva"
                            class="family-nav-image family-nav-image--viva family-nav-image--viva-en"></figure>
                        <h4 class="family-nav-label" role="text">Gogoro VIVA</h4>
                        <span class="family-nav-new">Hot</span>
                    </a>
                </li>
                <li class="family-nav-item">
                    <a class="family-nav-link " href="#" data-family-menu-target="">
                        <figure id="family-nav-image-s1"
                            class="family-nav-image family-nav-image--s1 family-nav-image--s1-en"></figure>
                        <h4 class="family-nav-label" role="text">Gogoro S1</h4>
                        <span class="family-nav-new">Hot</span>
                    </a>
                </li>
            </ul>
        </div>
    </nav>
    <div class="family-nav-menus">
        <div class="family-nav-menu" data-family-menu-key="viva-xl" style="left: 1045.5px;">
            <div class="family-nav-menu-inner-container">
                <div class="family-nav-menu-name">VIVA XL</div>
                <div class="family-nav-menu-items">
                    <a class="family-nav-menu-item-link" href="/smartscooter/viva/xl/superfast/"
                        data-component-list="Hoverable" data-hover-toggle-class="family-nav-image--viva-xl-superfast"
                        data-hover-target="#family-nav-image-viva-xl">
                        <figure class="family-nav-image family-nav-image--viva-xl-superfast"></figure>
                        <h4 class="family-nav-label" role="text">SUPERFAST</h4>
                        <span class="family-nav-new">New</span>
                    </a>
                    <a class="family-nav-menu-item-link" href="/smartscooter/viva/xl/" data-component-list="Hoverable"
                        data-hover-toggle-class="family-nav-image--viva-xl-standard"
                        data-hover-target="#family-nav-image-viva-xl">
                        <figure class="family-nav-image family-nav-image--viva-xl-standard"></figure>
                        <h4 class="family-nav-label" role="text">STANDARD</h4>

                    </a>
                </div>
                <button type="button" class="family-nav-menu-close"></button>
            </div>
        </div>
        <div class="family-nav-menu" data-family-menu-key="viva-mix" style="left: 1233.5px;">
            <div class="family-nav-menu-inner-container">
                <div class="family-nav-menu-name">VIVA MIX</div>
                <div class="family-nav-menu-items">
                    <a class="family-nav-menu-item-link" href="/smartscooter/viva/mix/superfast/"
                        data-component-list="Hoverable" data-hover-toggle-class="family-nav-image--viva-mix-superfast"
                        data-hover-target="#family-nav-image-viva-mix">
                        <figure class="family-nav-image family-nav-image--viva-mix-superfast"></figure>
                        <h4 class="family-nav-label" role="text">SUPERFAST</h4>

                    </a>
                    <a class="family-nav-menu-item-link" href="/smartscooter/viva/mix/purplesoul/"
                        data-component-list="Hoverable" data-hover-toggle-class="family-nav-image--viva-mix-purplesoul"
                        data-hover-target="#family-nav-image-viva-mix">
                        <figure class="family-nav-image family-nav-image--viva-mix-purplesoul"></figure>
                        <h4 class="family-nav-label" role="text">PURPLE SOUL</h4>

                    </a>
                    <a class="family-nav-menu-item-link" href="/smartscooter/viva/mix/" data-component-list="Hoverable"
                        data-hover-toggle-class="family-nav-image--viva-mix-standard"
                        data-hover-target="#family-nav-image-viva-mix">
                        <figure class="family-nav-image family-nav-image--viva-mix-standard"></figure>
                        <h4 class="family-nav-label" role="text">STANDARD</h4>

                    </a>
                </div>
                <button type="button" class="family-nav-menu-close"></button>
            </div>
        </div>
    </div>

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
                <div class="regions_wrapper_area hidden-xs">
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
                        <option  {{ request()->is('category-product/' . $value->id) ? 'selected' : '' }}  value="{{route('category.product.detail', $value->id)}}">{{$value->name}}</option>
                        @endforeach
                        @endif
                    </select>
                </div>
            </div>
            <div class="family-items">
                @if(!empty($products))
                @foreach($products as $value)
                <div class="family-item family-item--supersport ">
                    <div class="family-item-copy">
                        <h4 class="typography-eyebrow">Osakar</h4>
                        <h3 class="typography-tagline">{{$value->product_name}}</h3>
                        <a class="cta-link" href="{{route('details.basic', $value->path)}}">Xem chi tiết</a>
                    </div>
                    <figure class="image-family image-family--supersport"
                        style="background-image: url('{{$value->representative_image}}')"></figure>
                    <a href="{{route('create.build', $value->id)}}" class="deposit-buy-now ">Mua ngay</a>
                </div>
                @endforeach
                @endif
                {{ $products->links() }}

            </div>

        </div>
    </section>

    <section class="section section-stories" data-component-list="Stories"
        style="touch-action: pan-y; user-select: none; -webkit-user-drag: none; -webkit-tap-highlight-color: rgba(0, 0, 0, 0);">
        <div class="container">
            <div class="row">
                <div class="col-lg-11 col-xl-9 col-xxl-8">
                    <h3 class="typography-stories-headline">Smart comes standard.</h3>
                    <p class="typography-stories-intro">Everything integrated to bring you greater security,
                        personalization, and control – with automatic updates that keep getting smarter all the time.
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
                    </div>
                </div>
                @endforeach
                @endif


            </div>


        </div>
    </section>

    <section class="section section-stories" data-component-list="Stories"
        style="touch-action: pan-y; user-select: none; -webkit-user-drag: none; -webkit-tap-highlight-color: rgba(0, 0, 0, 0);">
        <div id="container" class="container">
            <div class="row">
                <div class="col-lg-11 col-xl-9 col-xxl-8">
                    <h3 class="typography-stories-headline">Easy as ever.</h3>
                    <p class="typography-stories-intro">Everyday riding essentials that simply work better. No more
                        waiting to fill up, fumbling for keys, or struggling to park.</p>
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
                    </div>
                </div>
                @endforeach
                @endif

            </div>


        </div>
    </section>

    <section class="section section-stories" data-component-list="Stories"
        style="touch-action: pan-y; user-select: none; -webkit-user-drag: none; -webkit-tap-highlight-color: rgba(0, 0, 0, 0);">
        <div class="container">
            <div class="row">
                <div class="col-lg-11 col-xl-9 col-xxl-8">
                    <h3 class="typography-stories-headline">Love the ride.</h3>
                    <p class="typography-stories-intro">Incredible motor efficiency and performance delivers
                        uncompromising range and exhilarating speed. Enjoy smoother, safer, more exciting rides.
                        Everyday.</p>
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
