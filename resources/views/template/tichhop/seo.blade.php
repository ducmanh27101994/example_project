@extends('/template/index')

@section('content')
<div id="page-wrapper">

    <div class="widget">
        <div class="widget-title">


            <div class="widget-title">
                <h4><i class="icon-reorder">
                        Tích hợp SEO</i></h4>
                <div class="ui-widget-content ui-corner-top ui-corner-bottom">
                    <div id="toolbox">

                        <div style="float: right; margin-right: 10px;" class="toolbox-content">

                            <table class="toolbar">
                                <tbody>
                                    <tr>

                                        <td align="center">
                                            <a onclick="return validation();" id="update" class="toolbar" href="javascript:__doPostBack('controls1$ctl00$ctl00$ctl00$update','')">
                                                <span class="icon-ok-update"></span>
                                                Cập nhật
                                            </a>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>

                        </div>
                    </div>
                </div>
            </div>


            <div class="widget-body">
                <div style="width: 100%; display: block; margin: 0px;" id="parentHorizontalTab" class="divvalidate" novalidate="novalidate">
                    <ul class="resp-tabs-list hor_1">
                        <li class="resp-tab-item hor_1 resp-tab-active" aria-controls="hor_1_tab_item-0" role="tab" style="background-color: white; border-color: rgb(193, 193, 193);">Hỗ trợ SEO</li>
                        <li class="resp-tab-item hor_1" aria-controls="hor_1_tab_item-1" role="tab" style="background-color: rgb(245, 245, 245);">File robots.txt</li>
                        <li class="resp-tab-item hor_1" aria-controls="hor_1_tab_item-2" role="tab" style="background-color: rgb(245, 245, 245);">File sitemaps.xml</li>
                        <li class="resp-tab-item hor_1" aria-controls="hor_1_tab_item-3" role="tab" style="background-color: rgb(245, 245, 245);">RSS</li>
                    </ul>
                    <div class="resp-tabs-container hor_1" style="border-color: rgb(193, 193, 193);">
                        <h2 class="resp-accordion hor_1 resp-tab-active" role="tab" aria-controls="hor_1_tab_item-0" style="background: none; border-color: rgb(193, 193, 193);"><span class="resp-arrow"></span>Hỗ trợ SEO</h2>
                        <div class="resp-tab-content hor_1 resp-tab-content-active" aria-labelledby="hor_1_tab_item-0" style="display:block">
                            <p>
                            </p>
                            <table cellspacing="1" class="admintable">
                                <tbody>
                                    <tr>
                                        <td width="150" class="key">
                                            <label for="txttitle">Thẻ tiêu đề website</label>
                                        </td>
                                        <td>
                                            <input name="controls1$ctl00$ctl00$ctl00$txttitleweb" type="text" value="Thiết kế website" id="txttitleweb" class="inputbox" style="width:364px;">
                                            <a href="#" class="tooltip">
                                                <img src="{{ asset('images/help-icon.png') }}">
                                                <span><b>Tiêu đề website</b><br>
                                                    Nội dung được hiển thị dưới dạng tiêu đề trong kết quả tìm kiếm và trên trình duyệt của người dùng.<br>
                                                    <i>Tiêu đề tối đa 70 ký tự</i>
                                                </span>
                                            </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td width="150" class="key">
                                            <label for="txtkeyword">Thẻ từ khóa</label>
                                        </td>
                                        <td>
                                            <textarea name="controls1$ctl00$ctl00$ctl00$txtkeyword" rows="5" cols="55" id="txtkeyword" class="inputbox"></textarea>
                                            <a href="#" class="tooltip">
                                                <img src="{{ asset('images/help-icon.png') }}">
                                                <span><b>Thẻ từ khóa</b><br>
                                                    Danh sách các từ khóa chính của website, các từ khóa cách nhau bởi dấu ","
                                                </span>
                                            </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="key">
                                            <label for="txtdesciption">Thẻ mô tả</label>
                                        </td>
                                        <td>
                                            <textarea name="controls1$ctl00$ctl00$ctl00$txtdesc" rows="5" cols="55" id="txtdesc" class="inputbox"></textarea>
                                            <a href="#" class="tooltip">
                                                <img src="{{ asset('images/help-icon.png') }}">
                                                <span><b>Thẻ mô tả</b><br>
                                                    Cung cấp một mô tả ngắn của trang. Trong vài trường hợp, mô tả này được sử dụng như một phần của đoạn trích được hiển thị trong kết quả tìm kiếm.
                                                </span>
                                            </a>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <p></p>
                        </div>
                        <h2 class="resp-accordion hor_1" role="tab" aria-controls="hor_1_tab_item-1" style="background-color: rgb(245, 245, 245); border-color: rgb(193, 193, 193);"><span class="resp-arrow"></span>File robots.txt</h2>
                        <div class="resp-tab-content hor_1" aria-labelledby="hor_1_tab_item-1" style="border-color: rgb(193, 193, 193);">
                            <p>
                            </p>
                            <table cellspacing="1" class="admintable">
                                <tbody>
                                    <tr>
                                        <td class="key" style="width:200px">
                                            <label for="txtphone">Đường dẫn tới file robot</label>
                                        </td>
                                        <td>
                                            <p><a href="https://vntravelsimple.com/robots.txt">https://vntravelsimple.com/robots.txt</a></p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="key">
                                            <label for="txtphone">Nội dung file robots.txt</label> <a href="#" class="tooltip">
                                                <img src="{{ asset('images/help-icon.png') }}">
                                                <span><b>Nội dung file</b><br>
                                                    Nhập nội dung file robots.txt tại đây
                                                </span>
                                            </a>
                                        </td>
                                        <td>
                                            <textarea name="controls1$ctl00$ctl00$ctl00$txtrobot" rows="5" cols="100" id="txtrobot" class="inputbox">User-agent: *
Disallow: /admin</textarea>

                                        </td>
                                    </tr>

                                </tbody>
                            </table>
                            <p></p>
                        </div>
                        <h2 class="resp-accordion hor_1" role="tab" aria-controls="hor_1_tab_item-2" style="background-color: rgb(245, 245, 245); border-color: rgb(193, 193, 193);"><span class="resp-arrow"></span>File sitemaps.xml</h2>
                        <div class="resp-tab-content hor_1" aria-labelledby="hor_1_tab_item-2" style="border-color: rgb(193, 193, 193);">
                            <p>
                            </p>
                            <table cellspacing="1" class="admintable">
                                <tbody>
                                    <tr>
                                        <td class="key" style="width:200px">
                                            <label for="txtphone">Đường dẫn tới sitemap</label>
                                        </td>
                                        <td>
                                            <p><a href="https://vntravelsimple.com/sitemap.xml">https://vntravelsimple.com/sitemap.xml</a></p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="key">
                                            <label for="txtphone">Nội dung file sitemap.xml</label> <a href="#" class="tooltip">
                                                <img src="{{ asset('images/help-icon.png') }}">
                                                <span><b>Nội dung file</b><br>
                                                    Nhập nội dung file sitemap tại đây<br>
                                                    Để trống nếu lấy sitemap mặc định từ hệ thống
                                                </span>
                                            </a>
                                        </td>
                                        <td>
                                            <textarea name="controls1$ctl00$ctl00$ctl00$txtsitemap" rows="15" cols="100" id="txtsitemap" class="inputbox"></textarea>

                                        </td>
                                    </tr>

                                </tbody>
                            </table>
                            <p></p>
                        </div>
                        <h2 class="resp-accordion hor_1" role="tab" aria-controls="hor_1_tab_item-3" style="background-color: rgb(245, 245, 245); border-color: rgb(193, 193, 193);"><span class="resp-arrow"></span>RSS</h2>
                        <div class="resp-tab-content hor_1" aria-labelledby="hor_1_tab_item-3" style="border-color: rgb(193, 193, 193);">
                            <p>
                            </p>
                            <table cellspacing="1" class="admintable">
                                <tbody>
                                    <tr>
                                        <td class="key" style="width:200px">
                                            <label for="txtphone">Đường dẫn tới RSS</label>
                                        </td>
                                        <td>
                                            <p><a href="https://vntravelsimple.com/feed">https://vntravelsimple.com/feed</a></p>
                                        </td>
                                    </tr>


                                </tbody>
                            </table>
                            <p></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script type="text/javascript">
        function validation() {
            //validation ở đây nha
            return true;
        }
        $.validator.setDefaults({
            submitHandler: function() {
                alert("submitted!");
            }
        });
        $(document).ready(function() {
            //Horizontal Tab


            $('#parentHorizontalTab').easyResponsiveTabs({
                type: 'default', //Types: default, vertical, accordion
                width: 'auto', //auto or any width like 600px
                fit: true, // 100% fit in a container
                tabidentify: 'hor_1', // The tab groups identifier
                activate: function(event) { // Callback function if tab is switched
                    var $tab = $(this);
                    var $info = $('#nested-tabInfo');
                    var $name = $('span', $info);
                    $name.text($tab.text());
                    $info.show();
                }
            });

            // Child Tab
            $('#ChildVerticalTab_1').easyResponsiveTabs({
                type: 'vertical',
                width: 'auto',
                fit: true,
                tabidentify: 'ver_1', // The tab groups identifier
                activetab_bg: '#fff', // background color for active tabs in this group
                inactive_bg: '#F5F5F5', // background color for inactive tabs in this group
                active_border_color: '#c1c1c1', // border color for active tabs heads in this group
                active_content_border_color: '#5AB1D0' // border color for active tabs contect in this group so that it matches the tab head border
            });

            //Vertical Tab
            $('#parentVerticalTab').easyResponsiveTabs({
                type: 'vertical', //Types: default, vertical, accordion
                width: 'auto', //auto or any width like 600px
                fit: true, // 100% fit in a container
                closed: 'accordion', // Start closed if in accordion view
                tabidentify: 'hor_1', // The tab groups identifier
                activate: function(event) { // Callback function if tab is switched
                    var $tab = $(this);
                    var $info = $('#nested-tabInfo2');
                    var $name = $('span', $info);
                    $name.text($tab.text());
                    $info.show();
                }
            });


            $(".divvalidate").validate({
                rules: {
                    controls1$ctl00$ctl00$ctl00$txtname: "required"

                },
                messages: {
                    controls1$ctl00$ctl00$ctl00$txtname: "Please enter your firstname"

                }
            });
        });
    </script>


    <style>
        label.error,
        label.error {
            color: red;
            font-style: italic;
        }

        div.error {
            display: none;
        }
    </style>

</div>
@endsection