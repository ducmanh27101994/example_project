@extends('/template/index')

@section('content')

    <div id="page-wrapper">

      
        
        <div id="element-box-home">

            <div id="cpanel">
                <div>
                    <div class="icon">
                        <a href="/admin/generalConfig">
                            <img src="{{asset('images/icon-48-config.png')}}" alt="Global Configuration">
                            <span>Cấu hình chung</span>
                        </a>
                    </div>
                </div>
                <div>
                    <div class="icon">
                        <a href="/admin/listMenu">
                            <img src="{{asset('images/icon-48-menumgr.png')}}" alt="Quản lý menu">
                            <span>Quản lý menu</span>
                        </a>
                    </div>
                </div>

                <div>
                    <div class="icon">
                        <a href="/admin/listCategory">
                            <img src="{{asset('images/icon-48-category.png')}}" alt="Article Manager">
                            <span>Quản lý danh mục tin</span>
                        </a>
                    </div>
                </div>

                <div>
                    <div class="icon">
                        <a href="/admin/listBlog">
                            <img src="{{asset('images/ico_newsmn.png')}}" alt="Section Manager">
                            <span>Quản lý danh sách tin</span>
                        </a>
                    </div>
                </div>
                <div>
                    <div class="icon">
                        <a href="https://vntravelsimple.com/admin/?mod=content&amp;c=items">
                            <img src="{{asset('images/icon-48-article.png')}}" alt="Danh sách trang nội dung">
                            <span>Danh sách trang nội dung</span>
                        </a>
                    </div>
                </div>

                <div>
                    <div class="icon">
                        <a href="/admin/indexListCateProduct">
                            <img src="{{asset('images/icon-48-section.png')}}" alt="Danh mục sản phẩm">
                            <span>Danh mục sản phẩm</span>
                        </a>
                    </div>
                </div>
                <div>
                    <div class="icon">
                        <a href="/admin/listItemProduct">
                            <img src="{{asset('images/icon-48-generic.png')}}" alt="Danh sách sản phẩm">
                            <span>Danh sách sản phẩm</span>
                        </a>
                    </div>
                </div>


                <div>
                    <div class="icon">
                        <a href="/admin/indexContact">
                            <img src="{{asset('images/ico_contactmn.png')}}" alt="Danh sách liên hệ">
                            <span>Danh sách liên hệ</span>
                        </a>
                    </div>
                </div>


                <div>
                    <div class="icon">
                        <a href="/admin/account">
                            <img src="{{asset('images/icon-48-user.png')}}" alt="Add New Article">
                            <span>Quản lý tài khoản</span>
                        </a>
                    </div>
                </div>
                <div>
                    <div class="icon">
                        <a href="/admin/indexSeo">
                            <img src="{{asset('images/icon-seo.png')}}" alt="SEO">
                            <span>Tối ưu SEO</span>
                        </a>
                    </div>
                </div>
                <div>
                    <div class="icon">
                        <a href="/admin/indexBannerAds">
                            <img src="{{asset('images/ico_advmn.png')}}" alt="Quản lý quảng cáo">
                            <span>Quản lý quảng cáo</span>
                        </a>
                    </div>
                </div>
                <div>
                    <div class="icon">
                        <a href="/admin/indexSocial">
                            <img src="{{asset('images/icon-social.png')}}" alt="Mạng xã hội">
                            <span>Mạng xã hội</span>
                        </a>
                    </div>
                </div>

            </div>
            <div style="clear: both;"></div>
        </div>

        <div id="element-box-right">
            <section class="web-info" style="background:#fba026">
                <h3 style="color:#fff;font-size:14px">Hướng dẫn quản trị website tự động

                </h3>
                <div class="bla">
                    <input type="text" id="txtkey" class="inputbox" placeholder="Nhập nội dung cần chỉnh sửa, chỉ cần nhập 3 đến 5 từ" style="width:100%">
                    <p style="color:#fff;font-size:11px;margin-top:5px">Nhập nội dung ở bất kỳ phần nào trên website
                        vào ô trên sau đó nhấn nút <b>"Enter"</b>, hệ thống sẽ tự tìm và đưa ra hướng dẫn quản trị
                        nội dung đó cho bạn</p>
                    <ul class="guideresult">

                    </ul>
                </div>
            </section>

            <section class="web-info">
                <h3>Có thể bạn quan tâm

                </h3>
                <ul>

                    <li></li>


                </ul>
            </section>


            <div style="clear: both;"></div>
        </div>
        <div style="clear: both;"></div>


    </div>

@endsection
