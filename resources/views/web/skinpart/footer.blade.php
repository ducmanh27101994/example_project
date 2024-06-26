<footer data-v-194808ca="" class="ggr-footer">
    <div data-v-194808ca="" class="gc-container">
        <div class="information_group_footer">
            <div class="row">
                <div class="col-sm-8 col-md-6 col-lg-6">
                    <div class="wrapper_information_company">
                        <div class="logo_footer">
                            <img src="{{ asset('home/images/logo.png') }}" alt="logo">
                        </div>
                        <div class="text_infor">
                            @if(isset($table_config_images->footer_content))
                                {!! $table_config_images->footer_content !!}
                            @endif
                        </div>
                        <div class="social">
                            <div class="item_social">
                                <a href="{!! $social->facebook !!}">
                                    <img src="{{ asset('home/images/fb.png') }}" alt=""> <span>facebook</span>
                                </a>
                            </div>
                            <div class="item_social">
                                <a href="{!! $social->youtube !!}"><img src="{{ asset('home/images/ytb.png') }}" alt="">
                                    <span>youtube</span></a>
                            </div>
                            <div class="item_social">
                                <a href="{!! $social->twitter !!}"><img src="{{ asset('home/images/tiktok.png') }}" alt="">
                                    <span>tiktok</span></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-8 col-md-6 col-lg-6">
                    <div class="row">
                        <div class="col-sm-4 col-md-4 col-lg-4">
                            <div class="menu_footer">
                                <h3>Danh mục sản phẩm</h3>
                                <ul>

                                    @if(!empty($category_footer))
                                        @foreach($category_footer as $key => $value)
                                            <li><a href="{{route('category.product.detail', $value->id)}}" title="{{$value->name}}">{{$value->name}}</a></li>
                                        @endforeach
                                    @endif
                                </ul>
                            </div>
                        </div>
                        <div class="col-sm-4 col-md-4 col-lg-4">
                            <div class="menu_footer">
                                <h3>Hỗ trợ</h3>
                                <ul>
                                    <li><a href="/dieu-khoan-chinh-sach" title="Chính sách bảo hành">Chính sách bảo
                                            hành</a>
                                    </li>
                                    <li><a href="/dieu-khoan-chinh-sach" title="Chính sách bảo mật">Chính sách bảo
                                            mật</a></li>
                                    <li><a href="/dieu-khoan-chinh-sach" title="Chính sách bảo mật">Chính sách và điều
                                            khoản Cookie</a></li>
                                    <li><a href="/dieu-khoan-chinh-sach" title="Chính sách bảo mật">Phương thức thanh
                                            toán</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-sm-4 col-md-4 col-lg-4">
                            <div class="menu_footer">
                                <h3>Liên hệ</h3>
                                <ul>
                                    <li>Cá nhân</li>
                                    <li>Đại lý</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div data-v-194808ca="" class="ggr-footer-flex">
            <div data-v-194808ca="" class="legal">
                <div data-v-194808ca="" class="legal-copyright">© 2022 - Bản quyền của Công ty TNHH SẢN XUẤT PHỤ TÙNG XE
                    MÁY ĐỨC MINH</span></div>

            </div><a data-v-194808ca="" href="/" class="locale"><span data-v-194808ca="">BCT</span></a>
        </div>
    </div>
</footer>