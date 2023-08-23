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
        Tên công ti
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
                    <a href=""><i class="fa fa-fw fa-power-off"></i>Thoát</a>
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
            <li><a href="/"><i class="fa fa-fw fa-home"></i>Home</a></li>
            <li><a data-toggle="collapse" data-target="#pnsetting" href="javascript:void(0)" title="Cấu hình"><i class="fa fa-fw fa-gear"></i>Cấu hình<i class="fa fa-fw fa-caret-down"></i></a>
                <ul id="pnsetting" class="collapse ">
                    <li><a href="#" title="Cấu hình chung"><i class="fa fa-fw fa fa-caret-right"></i>Cấu hình chung</a>
                    </li>
                    <li><a href="#" title="Banner &amp; Hình nền"><i class="fa fa-fw fa fa-caret-right"></i>Banner &amp;
                            Logo - Chân trang</a></li>
                    <li><a href="#" title="Cấu hình email hệ thống"><i class="fa fa-fw fa fa-caret-right"></i>Cấu hình
                            email hệ thống</a></li>
                    <li style="display:none"><a href="#" title="Cấu hình nội dung email"><i class="fa fa-fw fa fa-caret-right"></i>Cấu hình
                            nội dung email</a></li>
                    <li style="display:none"><a href="#" title="Cấu hình vận chuyển"><i class="fa fa-fw fa fa-caret-right"></i>Cấu hình vận
                            chuyển</a></li>
                    <li style="display:none"><a href="#" title="Cấu hình thanh toán"><i class="fa fa-fw fa fa-caret-right"></i>Cấu hình thanh
                            toán</a></li>
                    <li><a href="#" title="Cấu hình ngôn ngữ"><i class="fa fa-fw fa fa-caret-right"></i>Cấu hình ngôn
                            ngữ</a></li>
                    <li style="display:none"><a href="#" title="Quản lý tỉnh thành"><i class="fa fa-fw fa fa-caret-right"></i>Quản lý tỉnh
                            thành</a></li>
                    <li style="display:none"><a href="#" title="Quản lý quận huyện"><i class="fa fa-fw fa fa-caret-right"></i>Quản lý quận
                            huyện</a></li>
                </ul>
            </li>
            <li><a data-toggle="collapse" data-target="#pnmenu" href="javascript:void(0)" title="Menu"><i class="fa fa-fw fa-align-justify"></i>Menu<i class="fa fa-fw fa-caret-down"></i></a>
                <ul id="pnmenu" class="collapse ">
                    <li><a href="#" title="Menu chính"><i class="fa fa-fw fa fa-caret-right"></i>Menu chính</a></li>
                    <li><a href="#" title="Menu trên"><i class="fa fa-fw fa fa-caret-right"></i>Menu trên cùng</a></li>
                    <li><a href="#" title="Menu dưới"><i class="fa fa-fw fa fa-caret-right"></i>Menu dưới cùng</a></li>
                    <li ><a href="#" title="Menu nội dung"><i class="fa fa-fw fa fa-caret-right"></i>Menu nội dung</a>
                    </li>
                </ul>
            </li>

            <li><a data-toggle="collapse" data-target="#pnproduct" href="javascript:void(0)" title="Sản phẩm"><i class="fa fa-fw fa-list-alt"></i>Sản phẩm<i class="fa fa-fw fa-caret-down"></i></a>
                <ul id="pnproduct" class="collapse ">
                    <li><a href="#" title="Danh mục sản phẩm"><i class="fa fa-fw fa fa-caret-right"></i>Danh mục sản
                            phẩm</a></li>
                    <li><a href="#" title="Danh sách sản phẩm"><i class="fa fa-fw fa fa-caret-right"></i>Danh sách sản
                            phẩm</a></li>
                    <li style="display:none"><a href="#" title="Nhóm sản phẩm"><i class="fa fa-fw fa fa-caret-right"></i>Nhóm sản phẩm</a>
                    </li>
                    <li style="display:none"><a href="#" title="Nhà sản xuất"><i class="fa fa-fw fa fa-caret-right"></i>Nhà sản xuất</a></li>
                    <li style="display:none"><a href="#" title="Thuộc tính sản phẩm"><i class="fa fa-fw fa fa-caret-right"></i>Thuộc tính sản
                            phẩm</a></li>
                    <li style="display:none"><a href="#" title="Quản lý kho hàng"><i class="fa fa-fw fa fa-caret-right"></i>Quản lý kho
                            hàng</a></li>
                    <li><a href="#" title="Quản lý khoảng giá"><i class="fa fa-fw fa fa-caret-right"></i>Quản lý khoảng
                            giá</a></li>
                    <li style="display:none"><a href="#" title="Quản lý đơn hàng"><i class="fa fa-fw fa fa-caret-right"></i>Quản lý đơn
                            hàng</a></li>
                    <li style="display:none"><a href="#" title="Mã khuyến mại sản phẩm"><i class="fa fa-fw fa fa-caret-right"></i>Mã khuyến
                            mại</a></li>
                    <li style="display:none"><a href="#" title="Nhập, xuất danh sách sản phẩm"><i class="fa fa-fw fa fa-caret-right"></i>Nhập, xuất danh sách sản phẩm</a></li>
                    <li><a href="#" title="Cấu hình sản phẩm"><i class="fa fa-fw fa fa-caret-right"></i>Cấu hình sản
                            phẩm</a></li>
                </ul>
            </li>

            <li><a data-toggle="collapse" data-target="#pnnews" href="javascript:void(0)" title="Tin tức"><i class="fa fa-fw fa-file"></i>Tin tức<i class="fa fa-fw fa-caret-down"></i></a>
                <ul id="pnnews" class="collapse ">
                    <li><a href="#" title="Danh mục tin"><i class="fa fa-fw fa fa-caret-right"></i>Danh mục tin</a></li>
                    <li style="display:none"><a href="#" title="Nhóm tin"><i class="fa fa-fw fa fa-caret-right"></i>Nhóm tin</a></li>
                    <li><a href="#" title="Danh sách tin"><i class="fa fa-fw fa fa-caret-right"></i>Danh sách tin</a>
                    </li>
                    <li><a href="#" title="Cấu hình tin"><i class="fa fa-fw fa fa-caret-right"></i>Cấu hình tin</a></li>
                </ul>
            </li>
            <li><a data-toggle="collapse" data-target="#pncontent" href="javascript:void(0)" title="Bài viết"><i class="fa fa-fw fa-folder-o"></i>Trang nội dung<i class="fa fa-fw fa-caret-down"></i></a>
                <ul id="pncontent" class="collapse ">
                    <li style="display:none"><a href="#" title="Danh mục trang nội dung"><i class="fa fa-fw fa fa-caret-right"></i>Danh mục
                            trang nội dung</a></li>
                    <li><a href="#" title=">Danh sách trang nội dung"><i class="fa fa-fw fa fa-caret-right"></i>Danh
                            sách trang nội dung</a></li>
                </ul>
            </li>
            <li style="display:none"><a data-toggle="collapse" data-target="#pnservices" href="javascript:void(0)" title="Dịch vụ"><i class="fa fa-object-group"></i>Dịch vụ<i class="fa fa-fw fa-caret-down"></i></a>
                <ul id="pnservices" class="collapse ">
                    <li><a href="#" title="Danh mục dịch vụ"><i class="fa fa-fw fa fa-caret-right"></i>Danh mục dịch
                            vụ</a></li>
                    <li><a href="#" title="Danh sách dịch vụ"><i class="fa fa-fw fa fa-caret-right"></i>Danh sách dịch
                            vụ</a></li>
                </ul>
            </li>
            <li style="display:none"><a data-toggle="collapse" data-target="#pnvideo" href="javascript:void(0)" title="Thư viện video"><i class="fa fa-fw fa-video-camera"></i>Thư viện video<i class="fa fa-fw fa-caret-down"></i></a>
                <ul id="pnvideo" class="collapse ">
                    <li><a href="#" title="Danh mục video"><i class="fa fa-fw fa fa-caret-right"></i>Danh mục video</a>
                    </li>
                    <li><a href="#" title="Danh sách video"><i class="fa fa-fw fa fa-caret-right"></i>Danh sách
                            video</a></li>

                </ul>
            </li>
            <li style="display:none"><a data-toggle="collapse" data-target="#pnalbum" href="javascript:void(0)" title="Thư viện hình"><i class="fa fa-fw fa-file-image-o"></i>Thư viện hình<i class="fa fa-fw fa-caret-down"></i></a>
                <ul id="pnalbum" class="collapse ">

                    <li style="display:none"><a href="#" title="Danh mục ảnh"><i class="fa fa-fw fa fa-caret-right"></i>Danh mục ảnh</a></li>
                    <li style="display:none"><a href="#" title="Danh sách ảnh"><i class="fa fa-fw fa fa-caret-right"></i>Danh sách ảnh</a>
                    </li>
                </ul>
            </li>
            <li style="display:none"><a data-toggle="collapse" data-target="#pnfile" href="javascript:void(0)" title="Thư viện tài liệu"><i class="fa fa-fw fa-file-archive-o"></i>Thư viện tài liệu<i class="fa fa-fw fa-caret-down"></i></a>
                <ul id="pnfile" class="collapse ">

                    <li style="display:none"><a href="#" title="Danh mục tài liệu"><i class="fa fa-fw fa fa-caret-right"></i>Danh mục tài
                            liệu</a></li>
                    <li style="display:none"><a href="#" title="Danh sách tài liệu"><i class="fa fa-fw fa fa-caret-right"></i>Danh sách tài
                            liệu</a></li>
                </ul>
            </li>
            <li><a data-toggle="collapse" data-target="#pnprojects" href="javascript:void(0)" title="Dự án"><i class="fa fa-fw fa-file-archive-o"></i>Dự án<i class="fa fa-fw fa-caret-down"></i></a>
                <ul id="pnprojects" class="collapse ">

                    <li style="display:none"><a href="#" title="Danh mục dự án"><i class="fa fa-fw fa fa-caret-right"></i>Danh mục dự án</a>
                    </li>
                    <li><a href="#" title="Danh sách dự án"><i class="fa fa-fw fa fa-caret-right"></i>Danh sách dự
                            án</a></li>
                </ul>
            </li>
            <li style="display:none"><a data-toggle="collapse" data-target="#pnfaq" href="javascript:void(0)" title="Hỏi đáp"><i class="fa fa-fw fa-question-circle"></i>Hỏi đáp<i class="fa fa-fw fa-caret-down"></i></a>
                <ul id="pnfaq" class="collapse ">

                    <li><a href="#" title="Danh mục hỏi đáp"><i class="fa fa-fw fa fa-caret-right"></i>Danh mục hỏi
                            đáp</a></li>
                    <li><a href="#" title="Danh sách hỏi đáp"><i class="fa fa-fw fa fa-caret-right"></i>Danh sách hỏi
                            đáp</a></li>
                </ul>
            </li>
            <li><a data-toggle="collapse" data-target="#pncustomer_reviews" href="javascript:void(0)" title="Ý kiến khách hàng"><i class="fa fa-fw fa-comments-o"></i>Ý kiến khách hàng<i class="fa fa-fw fa-caret-down"></i></a>
                <ul id="pncustomer_reviews" class="collapse  ">
                    <li style="display:none"><a href="#" title="Ý kiến khách hàng"><i class="fa fa-fw fa fa-caret-right"></i>Danh mục ý kiến
                            khách hàng</a></li>
                    <li><a href="#" title="Hotline"><i class="fa fa-fw fa fa-caret-right"></i>Danh sách ý kiến khách
                            hàng</a></li>
                </ul>
            </li>
            <li><a data-toggle="collapse" data-target="#pncontacts" href="javascript:void(0)" title="Liên hệ"><i class="fa fa-fw fa-support"></i>Liên hệ<i class="fa fa-fw fa-caret-down"></i></a>
                <ul id="pncontacts" class="collapse ">
                    <li><a href="#" title="Danh sách liên hệ"><i class="fa fa-fw fa fa-caret-right"></i>Danh sách liên
                            hệ</a></li>
                    <li><a href="#" title="Thông tin liên hệ &amp; bản đồ"><i class="fa fa-fw fa fa-caret-right"></i>Thông tin liên hệ &amp; bản đồ</a></li>
                </ul>
            </li>
            <li style="display:none"><a data-toggle="collapse" data-target="#pncomment" href="javascript:void(0)" title="Liên hệ"><i class="fa fa-fw fa-support"></i>Bình luận<i class="fa fa-fw fa-caret-down"></i></a>
                <ul id="pncomment" class="collapse ">
                    <li style="display:none"><a href="#" title="Danh sách bình luận"><i class="fa fa-fw fa fa-caret-right"></i>Danh sách bình
                            luận</a></li>
                    <li style="display:none"><a href="#" title="Cấu hình"><i class="fa fa-fw fa fa-caret-right"></i>Cấu hình</a></li>
                </ul>
            </li>
            <li style="display:none"><a href="#"><i class="fa  fa-user"></i>Thành viên</a></li>
            <li><a data-toggle="collapse" data-target="#pnintegrated" href="javascript:void(0)" title="Tích hợp"><i class="fa fa-tasks"></i>Tích hợp<i class="fa fa-fw fa-caret-down"></i></a>
                <ul id="pnintegrated" class="collapse ">
                    <li><a href="#" title="Tích hợp SEO"><i class="fa fa-fw fa fa-caret-right"></i>Tích hợp SEO</a></li>
                    <li><a href="#" title="Tích hợp Google Analytics"><i class="fa fa-fw fa fa-caret-right"></i>Tích hợp
                            Google Analytics</a></li>
                    <li><a href="#" title="Tích hợp Google Master Tool"><i class="fa fa-fw fa fa-caret-right"></i>Tích
                            hợp Google Master Tool</a></li>
                    <li><a href="#" title="Chuyển hướng 301"><i class="fa fa-fw fa fa-caret-right"></i>Chuyển hướng
                            301</a></li>
                    <li><a href="#" title="Tích hợp Facebook"><i class="fa fa-fw fa fa-caret-right"></i>Tích hợp
                            Facebook Fanpage</a></li>
                    <li><a href="#" title="Tích hợp Livechat"><i class="fa fa-fw fa fa-caret-right"></i>Tích hợp
                            Livechat</a></li>
                    <li><a href="#" title="Tích hợp mạng xã hội"><i class="fa fa-fw fa fa-caret-right"></i>Tích hợp mạng
                            xã hội</a></li>
                    <li><a href="#" title="Nội dung trang lỗi"><i class="fa fa-fw fa fa-caret-right"></i>Nội dung trang
                            lỗi</a></li>
                </ul>
            </li>
            <li><a data-toggle="collapse" data-target="#pnutilities" href="javascript:void(0)" title="Tiện ích"><i class="fa fa-fw fa-globe"></i>Tiện ích<i class="fa fa-fw fa-caret-down"></i></a>
                <ul id="pnutilities" class="collapse ">
                    <li style="display:none"><a href="#" title="Hỗ trợ trực tuyến"><i class="fa fa-fw fa fa-caret-right"></i>Hỗ trợ trực
                            tuyến</a></li>
                    <li style="display:none"><a href="#" title="Đăng ký nhận khuyến mại"><i class="fa fa-fw fa fa-caret-right"></i>Đăng ký
                            email</a></li>

                    <li><a href="#" title="Quản lý quảng cáo"><i class="fa fa-fw fa fa-caret-right"></i>Quản lý quảng
                            cáo</a></li>
                    <li style="display:none"><a href="#" title="Quản lý liên kết"><i class="fa fa-fw fa fa-caret-right"></i>Quản lý liên
                            kết</a></li>

                    <li><a href="#" title="Nội dung độc lập"><i class="fa fa-fw fa fa-caret-right"></i>Nội dung độc
                            lập</a></li>
                </ul>
            </li>


            <li><a data-toggle="collapse" data-target="#pnaccounts" href="javascript:void(0)" title="Tài khoản"><i class="fa fa-fw fa-users"></i>Tài khoản<i class="fa fa-fw fa-caret-down"></i></a>
                <ul id="pnaccounts" class="collapse ">
                    <li><a href="#" title="Danh sách tài khoản"><i class="fa fa-fw fa fa-caret-right"></i>Danh sách tài
                            khoản</a></li>
                    <li><a href="#" title="Định nghĩa quyền"><i class="fa fa-fw fa fa-caret-right"></i>Định nghĩa
                            quyền</a></li>
                    <li><a href="#" title="Lịch sử truy cập"><i class="fa fa-fw fa fa-caret-right"></i>Lịch sử truy
                            cập</a></li>
                </ul>
            </li>
            <li><a href="https://vntravelsimple.com/admin/?mod=report"><i class="fa fa-bar-chart"></i>Báo
                    cáo</a></li>

        </ul>
    </div>
    <!-- /.navbar-collapse -->
</nav>