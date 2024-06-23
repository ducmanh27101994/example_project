<nav data-v-31312d37="" class="ggr-nav ggr-nav--dark ggr-nav--static-bg page-header">
    <style data-v-31312d37="">
        :root {
            --nav-header-bg-color: var(--color-dark-black);
            --nav-list-bg-color: #202023;
            --nav-sm-list-bg-color: var(--color-dark-black);
            --nav-link-color: var(--color-white);
            --nav-secondary-text-color: var(--color-gray);
            --nav-series-bg-color: #202023;
            --nav-model-menu-bg-color: var(--color-opacity-charcoal);
            --nav-series-icon-text-active-color: #ffffff;
            --nav-series-icon-text-inactive-color: #4d4d52;
            --nav-expanded-bg-color: rgba(50, 50, 55, 0.8);
            --ggr-nav-support-bg-color: rgba(255, 255, 255, .05);
            --ggr-nav-support-hover-bg-color: rgba(255, 255, 255, .1);
            --ggr-nav-support-desc-color: #b9bcbf;
        }
    </style>
    <!---->
    <input data-v-31312d37="" type="checkbox" id="nav-menustate" class="nav-menustate gc-hide">
    <div data-v-31312d37="" class="ggr-nav-container"
        style="transform: translateY(0px); background-color: rgb(18, 18, 21);">
        <div data-v-31312d37="" class="ggr-header-bg"></div>
        <div data-v-31312d37="" class="ggr-header-container">
            <div data-v-31312d37="" class="gc-container">
                <ul data-v-31312d37="" class="ggr-header">
                    
                    @if(isset($table_config_images->image_icon_right))
                    <?php $url = $table_config_images->image_icon_right ?>
                    @endif
                    <li data-v-31312d37="" class="ggr-header-item logo-item">
                        <a data-v-0cc9144e="" data-v-31312d37="" href="/" class="nav-logo nav-logo--dark"><img
                                src="<?= !empty($url) ? $url : '' ?>" alt=""></a>
                    </li>
                    <li data-v-31312d37="" class="ggr-header-item menuicon-item">
                        <label data-v-67f16422="" data-v-31312d37="" for="nav-menustate" class="nav-menuicon"><span
                                data-v-67f16422="" class="nav-menuicon-bread nav-menuicon-bread--top"><span
                                    data-v-67f16422=""
                                    class="nav-menuicon-crust nav-menuicon-crust--top"></span></span><span
                                data-v-67f16422="" class="nav-menuicon-bread nav-menuicon-bread--middle"><span
                                    data-v-67f16422=""
                                    class="nav-menuicon-crust nav-menuicon-crust--middle"></span></span><span
                                data-v-67f16422="" class="nav-menuicon-bread nav-menuicon-bread--bottom"><span
                                    data-v-67f16422=""
                                    class="nav-menuicon-crust nav-menuicon-crust--bottom"></span></span>
                        </label>
                    </li>
                </ul>
            </div>
        </div>
        <div data-v-31312d37="" class="ggr-nav-list-container">
            <div data-v-31312d37="" class="gc-container">
                <ul data-v-31312d37="" class="ggr-nav-list">
                    @if(isset($table_config_images->image_icon_right))
                    <?php $url = $table_config_images->image_icon_right ?>
                    @endif
                    <li data-v-31312d37="" class="ggr-nav-item ggr-nav-item--logo gc-desktop-visible"><a
                            data-v-0cc9144e="" data-v-31312d37="" href="/" class="nav-logo nav-logo--dark"
                            style="background-image: url('<?= !empty($url) ? $url : '' ?>');">OSAKAR - XE ĐIỆN</a>
                    </li>
                    @if(!empty($table_menu))
                    @foreach($table_menu as $value)
                    <li data-v-fae6e7a2="" data-v-31312d37="" class="ggr-nav-item"><a data-v-fae6e7a2=""
                            href="{{$value->menu_router}}" class="ggr-nav-link nav-list__link--dark"><span
                                data-v-fae6e7a2="">{{$value->menu_title}}</span></a>
                    </li>
                    @endforeach
                    @endif

                    <li data-v-fae6e7a2="" data-v-31312d37=""
                        class="ggr-nav-item ggr-nav-item--divider gc-desktop-visible"></li>

                    @if(\Illuminate\Support\Facades\Session::has('customer'))
                    <li data-v-fae6e7a2="" data-v-31312d37="" class="ggr-nav-item ggr-nav-item--secondary"><a
                            data-v-fae6e7a2="" href="{{route('submit.logout.customer')}}"
                            class="ggr-nav-link nav-list__link--dark btn btn-button btn-style-acc"><span
                                data-v-fae6e7a2="">Đăng xuất</span><!----></a>
                    </li>
                    @endif
                    

                    <li data-v-fae6e7a2="" data-v-31312d37="" class="ggr-nav-item ggr-nav-item--secondary">

                                <a class="flag_link eng" data-lang="en"><img src="{{ asset('home/images/EN.png') }}"
                                        alt="EN"></a>

                                <a class="flag_link vi" data-lang="vi"><img src="{{ asset('home/images/VN.png') }}"
                                        alt="VN"></a>


                         
                    </li>
                    <!---->
                </ul>
            </div>
        </div>
    </div>
    <div data-v-31312d37="" class="vue-portal-target"></div>
</nav>