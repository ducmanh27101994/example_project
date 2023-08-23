@extends('/template/index')

@section('content')

<div id="page-wrapper">

    <figure class="block-summary clearfix">
        <div class="rowh">
            <div id="divproduct" class="col-lg-3 col-md-6 col-sm-6">
                <a href="/admin/?mod=prod&amp;c=items" title="" class="nth1 trans-hover">
                    <div class="icon"></div>
                    <div class="info">
                        <span>
                            2</span>
                        <small>Tổng số sản phẩm</small>
                    </div>
                </a>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
                <a href="/admin/?mod=news&amp;c=items" title="" class="nth2 trans-hover">
                    <div class="icon"></div>
                    <div class="info">
                        <span>
                            1</span>
                        <small>Tổng số tin tức</small>
                    </div>
                </a>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
                <a href="/admin/?mod=report" title="" class="nth3 trans-hover">
                    <div class="icon"></div>
                    <div class="info">
                        <span>
                            4516</span>
                        <small>Tổng truy cập</small>
                    </div>
                </a>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
                <a href="/admin/?mod=contacts&amp;c=items" title="" class="nth4 trans-hover">
                    <div class="icon"></div>
                    <div class="info">
                        <span>
                            4</span>
                        <small>Liên hệ mới</small>
                    </div>
                </a>
            </div>
        </div>
    </figure>
    <div id="element-box-home">

        <div id="cpanel">
            <div>
                <div class="icon">
                    <a href="https://vntravelsimple.com/admin/?mod=settings&amp;c=support" target="_blank">
                        <img src="https://vntravelsimple.com/templates/admin/images/header/ico_guide.png" alt="Hướng dẫn quản trị">
                        <span>Hướng dẫn quản trị</span>
                    </a>
                </div>
            </div>
            <div>
                <div class="icon">
                    <a href="https://vntravelsimple.com/admin/?mod=settings&amp;c=websetting">
                        <img src="https://vntravelsimple.com/templates/admin/images/header/icon-48-config.png" alt="Global Configuration">
                        <span>Cấu hình chung</span>
                    </a>
                </div>
            </div>
            <div>
                <div class="icon">
                    <a href="https://vntravelsimple.com/admin/?mod=menus&amp;c=mainmenu">
                        <img src="https://vntravelsimple.com/templates/admin/images/header/icon-48-menumgr.png" alt="Quản lý menu">
                        <span>Quản lý menu</span>
                    </a>
                </div>
            </div>

            <div>
                <div class="icon">
                    <a href="https://vntravelsimple.com/admin/?mod=news&amp;c=cates">
                        <img src="https://vntravelsimple.com/templates/admin/images/header/icon-48-category.png" alt="Article Manager">
                        <span>Quản lý danh mục tin</span>
                    </a>
                </div>
            </div>

            <div>
                <div class="icon">
                    <a href="https://vntravelsimple.com/admin/?mod=news&amp;c=items">
                        <img src="https://vntravelsimple.com/templates/admin/images/header/ico_newsmn.png" alt="Section Manager">
                        <span>Quản lý danh sách tin</span>
                    </a>
                </div>
            </div>





            <div style="display:none">
                <div class="icon">
                    <a href="https://vntravelsimple.com/admin/?mod=content&amp;c=cate">
                        <img src="https://vntravelsimple.com/templates/admin/images/header/icon-48-content.png" alt="Danh mục trang nội dung">
                        <span>Danh mục trang nội dung</span>
                    </a>
                </div>
            </div>
            <div>
                <div class="icon">
                    <a href="https://vntravelsimple.com/admin/?mod=content&amp;c=items">
                        <img src="https://vntravelsimple.com/templates/admin/images/header/icon-48-article.png" alt="Danh sách trang nội dung">
                        <span>Danh sách trang nội dung</span>
                    </a>
                </div>
            </div>

            <div>
                <div class="icon">
                    <a href="https://vntravelsimple.com/admin/?mod=prod&amp;c=cate">
                        <img src="https://vntravelsimple.com/templates/admin/images/header/icon-48-section.png" alt="Danh mục sản phẩm">
                        <span>Danh mục sản phẩm</span>
                    </a>
                </div>
            </div>
            <div>
                <div class="icon">
                    <a href="https://vntravelsimple.com/admin/?mod=prod&amp;c=items">
                        <img src="https://vntravelsimple.com/templates/admin/images/header/icon-48-generic.png" alt="Danh sách sản phẩm">
                        <span>Danh sách sản phẩm</span>
                    </a>
                </div>
            </div>


            <div>
                <div class="icon">
                    <a href="https://vntravelsimple.com/admin/?mod=contacts&amp;c=items">
                        <img src="https://vntravelsimple.com/templates/admin/images/header/ico_contactmn.png" alt="Danh sách liên hệ">
                        <span>Danh sách liên hệ</span>
                    </a>
                </div>
            </div>


            <div>
                <div class="icon">
                    <a href="https://vntravelsimple.com/admin/?mod=accounts&amp;c=items">
                        <img src="https://vntravelsimple.com/templates/admin/images/header/icon-48-user.png" alt="Add New Article">
                        <span>Quản lý tài khoản</span>
                    </a>
                </div>
            </div>
            <div>
                <div class="icon">
                    <a href="https://vntravelsimple.com/admin/?mod=integrated&amp;c=seo">
                        <img src="https://vntravelsimple.com/templates/admin/images/header/icon-seo.png" alt="SEO">
                        <span>Tối ưu SEO</span>
                    </a>
                </div>
            </div>
            <div>
                <div class="icon">
                    <a href="https://vntravelsimple.com/admin/?mod=utilities&amp;c=advs">
                        <img src="https://vntravelsimple.com/templates/admin/images/header/ico_advmn.png" alt="Quản lý quảng cáo">
                        <span>Quản lý quảng cáo</span>
                    </a>
                </div>
            </div>
            <div style="display:none">
                <div class="icon">
                    <a href="https://vntravelsimple.com/admin/?mod=utilities&amp;c=supports">
                        <img src="https://vntravelsimple.com/templates/admin/images/header/ico_homemn.png" alt="Hỗ trợ trực tuyến">
                        <span>Hỗ trợ trực tuyến</span>
                    </a>
                </div>
            </div>

            <div>
                <div class="icon">
                    <a href="https://vntravelsimple.com/admin/?mod=integrated&amp;c=social">
                        <img src="https://vntravelsimple.com/templates/admin/images/header/icon-social.png" alt="Mạng xã hội">
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