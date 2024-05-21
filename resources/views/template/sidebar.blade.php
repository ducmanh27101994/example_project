<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>


    </div>
    <div class="companyname">
        Osakar.vn
    </div>
    <!-- Top Menu Items -->
    <ul class="nav navbar-right top-nav">
        <li class="">
            <a href="/" target="_blank">Xem Website</a>

        </li>
        <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i>Xin chào:
                admin<b class="caret"></b></a>
            <ul class="dropdown-menu">
                <li>
                    <a href=""><i class="fa fa-fw fa-user"></i>Tài khoản</a>
                </li>
                <li>
                    <a href="{{route('admin.submit.logout')}}"><i class="fa fa-fw fa-power-off"></i>Thoát</a>
                </li>
            </ul>
        </li>
        <li class="dlang">

        </li>

    </ul>

    <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
    <div class="collapse navbar-collapse navbar-ex1-collapse">
        <script type="text/javascript">
            ddaccordion.init({
                headerclass: "submenuheader",
                contentclass: "submenu",
                revealtype: "click",
                mouseoverdelay: 200,
                collapseprev: true,
                defaultexpanded: [0],
                onemustopen: false,
                animatedefault: false,
                persiststate: false,
                toggleclass: ["", ""],
                animatespeed: "fast",
                oninit: function(headers, expandedindices) {
                    //do nothing
                },
                onopenclose: function(header, index, state, isuseractivated) {
                    //do nothing
                }
            })
        </script>
        <style type="text/css">
            .submenu {
                display: none
            }
        </style>
        <ul class="nav navbar-nav side-nav" style="height: 963px;">
            <li><a href="{{route('admin.dashboard')}}"><i class="fa fa-fw fa-home"></i>Home</a></li>
            <li><a data-toggle="collapse" data-target="#pnsetting" href="javascript:void(0)" title="Cấu hình"><i class="fa fa-fw fa-gear"></i>Cấu hình<i class="fa fa-fw fa-caret-down"></i></a>
                <ul id="pnsetting" class="collapse ">
                    <li><a href="{{route('admin.generalConfig')}}" title="Cấu hình chung"><i class="fa fa-fw fa fa-caret-right"></i>Cấu hình chung</a>
                    </li>
                    <li><a href="{{route('admin.bannerAndFooter')}}" title="Banner &amp; Hình nền"><i class="fa fa-fw fa fa-caret-right"></i>Banner &amp;
                            Logo - Chân trang</a></li>
                    <li><a href="#" title="Cấu hình email hệ thống"><i class="fa fa-fw fa fa-caret-right"></i>Cấu hình
                            email hệ thống</a></li>
                    <li style="display:none"><a href="#" title="Cấu hình nội dung email"><i class="fa fa-fw fa fa-caret-right"></i>Cấu hình
                            nội dung email</a></li>
                    <li style="display:none"><a href="#" title="Cấu hình vận chuyển"><i class="fa fa-fw fa fa-caret-right"></i>Cấu hình vận
                            chuyển</a></li>
                    <li style="display:none"><a href="#" title="Cấu hình thanh toán"><i class="fa fa-fw fa fa-caret-right"></i>Cấu hình thanh
                            toán</a></li>
                    <li><a href="{{route('admin.config.option')}}" title=""><i class="fa fa-fw fa fa-caret-right"></i>Cấu hình hiển thị
                            </a></li>

                    <li style="display:none"><a href="#" title="Quản lý tỉnh thành"><i class="fa fa-fw fa fa-caret-right"></i>Quản lý tỉnh
                            thành</a></li>
                    <li style="display:none"><a href="#" title="Quản lý quận huyện"><i class="fa fa-fw fa fa-caret-right"></i>Quản lý quận
                            huyện</a></li>
                </ul>
            </li>
            <li><a data-toggle="collapse" data-target="#pnmenu" href="javascript:void(0)" title="Menu"><i class="fa fa-fw fa-align-justify"></i>Menu<i class="fa fa-fw fa-caret-down"></i></a>
                <ul id="pnmenu" class="collapse ">
                    <li><a href="{{route('admin.indexCreateMenu')}}" title="Menu chính"><i class="fa fa-fw fa fa-caret-right"></i>Tạo menu</a></li>
                    <li><a href="{{route('admin.indexListMenu')}}" title="Menu trên"><i class="fa fa-fw fa fa-caret-right"></i>Danh sách menu</a></li>
            </li>
        </ul>
        </li>

        <li><a data-toggle="collapse" data-target="#pnproduct" href="javascript:void(0)" title="Sản phẩm"><i class="fa fa-fw fa-list-alt"></i>Sản phẩm<i class="fa fa-fw fa-caret-down"></i></a>
            <ul id="pnproduct" class="collapse ">
                <li><a href="{{route('admin.list.cate.product')}}" title="Danh mục sản phẩm"><i class="fa fa-fw fa fa-caret-right"></i>Danh mục sản phẩm</a></li>
                <li><a href="{{route('admin.list.product')}}" title="Danh sách sản phẩm"><i class="fa fa-fw fa fa-caret-right"></i>Danh sách sản
                        phẩm</a></li>
                <li style="display:none"><a href="#" title="Nhóm sản phẩm"><i class="fa fa-fw fa fa-caret-right"></i>Nhóm sản phẩm</a>
                </li>
                <li style="display:none"><a href="#" title="Nhà sản xuất"><i class="fa fa-fw fa fa-caret-right"></i>Nhà sản xuất</a></li>
                <li style="display:none"><a href="#" title="Thuộc tính sản phẩm"><i class="fa fa-fw fa fa-caret-right"></i>Thuộc tính sản
                        phẩm</a></li>
                <li style="display:none"><a href="#" title="Quản lý kho hàng"><i class="fa fa-fw fa fa-caret-right"></i>Quản lý kho
                        hàng</a></li>

                <li ><a href="{{route('index.bill')}}" title="Quản lý đơn hàng"><i class="fa fa-fw fa fa-caret-right"></i>Quản lý đơn
                        hàng</a></li>

                <li style="display:none"><a href="#" title="Nhập, xuất danh sách sản phẩm"><i class="fa fa-fw fa fa-caret-right"></i>Nhập, xuất danh sách sản phẩm</a></li>

            </ul>
        </li>

        <li><a data-toggle="collapse" data-target="#pnnews" href="javascript:void(0)" title="Tin tức"><i class="fa fa-fw fa-file"></i>Tin tức<i class="fa fa-fw fa-caret-down"></i></a>
            <ul id="pnnews" class="collapse ">
                <li><a href="{{route('admin.indexListCategory')}}" title="Danh mục tin"><i class="fa fa-fw fa fa-caret-right"></i>Danh mục tin</a></li>
                <li style="display:none"><a href="#" title="Nhóm tin"><i class="fa fa-fw fa fa-caret-right"></i>Nhóm tin</a></li>
                <li><a href="{{route('admin.indexListBlog')}}" title="Danh sách tin"><i class="fa fa-fw fa fa-caret-right"></i>Danh sách tin</a>
                </li>
            </ul>
        </li>
        <li><a data-toggle="collapse" data-target="#pncuahang" href="javascript:void(0)" title="Hỏi đáp"><i class="fa fa-fw fa-map"></i>Cửa hàng<i class="fa fa-fw fa-caret-down"></i></a>
            <ul id="pncuahang" class="collapse ">
                <li><a href="{{route('admin.indexStore')}}" title="Danh sách hỏi đáp"><i class="fa fa-fw fa fa-caret-right"></i>Danh sách cửa hàng</a></li>
            </ul>
        </li>
        <li><a data-toggle="collapse" data-target="#pncontacts" href="javascript:void(0)" title="Liên hệ"><i class="fa fa-fw fa-support"></i>Liên hệ<i class="fa fa-fw fa-caret-down"></i></a>
            <ul id="pncontacts" class="collapse ">
                <li><a href="{{route('admin.indexContact')}}" title="Danh sách liên hệ"><i class="fa fa-fw fa fa-caret-right"></i>Danh sách liên
                        hệ</a></li>
                <li><a href="{{route('admin.indexMap')}}" title="Thông tin liên hệ &amp; bản đồ"><i class="fa fa-fw fa fa-caret-right"></i>Bản đồ</a></li>
            </ul>
        </li>
        <li><a data-toggle="collapse" data-target="#pnintegrated" href="javascript:void(0)" title="Tích hợp"><i class="fa fa-tasks"></i>Tích hợp<i class="fa fa-fw fa-caret-down"></i></a>
            <ul id="pnintegrated" class="collapse ">
                <li><a href="{{route('admin.indexSeo')}}" title="Tích hợp SEO"><i class="fa fa-fw fa fa-caret-right"></i>Tích hợp SEO</a></li>
                <li><a href="{{route('admin.indexAnalytics')}}" title="Tích hợp Google Analytics"><i class="fa fa-fw fa fa-caret-right"></i>Tích hợp
                        Google Analytics</a></li>
                <li><a href="{{route('admin.indexMastertools')}}" title="Tích hợp Google Master Tool"><i class="fa fa-fw fa fa-caret-right"></i>Tích
                        hợp Google Master Tool</a></li>
                <li><a href="{{route('admin.indexFanpage')}}" title="Tích hợp Facebook"><i class="fa fa-fw fa fa-caret-right"></i>Tích hợp
                        Facebook Fanpage</a></li>
                <li><a href="{{route('admin.indexLiveChat')}}" title="Tích hợp Livechat"><i class="fa fa-fw fa fa-caret-right"></i>Tích hợp
                        Livechat</a></li>
                <li><a href="{{route('admin.indexSocial')}}" title="Tích hợp mạng xã hội"><i class="fa fa-fw fa fa-caret-right"></i>Tích hợp mạng
                        xã hội</a></li>
                <li><a href="{{route('admin.indexAfterBody')}}" title="Tích hợp mạng xã hội"><i class="fa fa-fw fa fa-caret-right"></i>Tích hợp script trước body</a></li>
                <li><a href="{{route('admin.indexBeforeBody')}}" title="Nội dung trang lỗi"><i class="fa fa-fw fa fa-caret-right"></i>Tích hợp script sau body</a></li>
            </ul>
        </li>
        <li><a data-toggle="collapse" data-target="#pnutilities" href="javascript:void(0)" title="Tiện ích"><i class="fa fa-fw fa-globe"></i>Tiện ích<i class="fa fa-fw fa-caret-down"></i></a>
            <ul id="pnutilities" class="collapse ">
                <li><a href="{{route('admin.indexBannerAds')}}" title="Quản lý quảng cáo"><i class="fa fa-fw fa fa-caret-right"></i>Quản lý quảng
                        cáo</a></li>

                <li><a href="{{route('admin.indexStaticPage')}}" title="Nội dung độc lập"><i class="fa fa-fw fa fa-caret-right"></i>Nội dung độc
                        lập</a></li>
            </ul>
        </li>

        <li><a data-toggle="collapse" data-target="#pnaccounts" href="javascript:void(0)" title="Tài khoản"><i class="fa fa-fw fa-users"></i>Tài khoản<i class="fa fa-fw fa-caret-down"></i></a>
            <ul id="pnaccounts" class="collapse ">
                <li><a href="{{route('admin.account')}}" title="Danh sách tài khoản"><i class="fa fa-fw fa fa-caret-right"></i>Danh sách tài
                        khoản</a></li>
            </ul>
        </li>

        </ul>
    </div>
    <!-- /.navbar-collapse -->
</nav>
