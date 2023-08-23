@extends('/template/index')

@section('content')

<div id="page-wrapper">

    <div class="widget">
        <div class="widget-title">


            <div class="widget-title">
                <h4><i class="icon-reorder">
                        Cấu hình chung</i></h4>
                <div class="ui-widget-content ui-corner-top ui-corner-bottom">
                    <div id="toolbox">

                        <div style="float: right; margin-right: 10px;" class="toolbox-content">

                            <table class="toolbar">
                                <tbody>
                                    <tr>

                                        <td align="center">
                                            <a onclick="return validation();" id="update" class="toolbar" href="javascript:__doPostBack('update','')">
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
                        <li class="resp-tab-item hor_1 resp-tab-active" aria-controls="hor_1_tab_item-0" role="tab" style="background-color: white; border-color: rgb(193, 193, 193);">Cấu hình chung</li>

                    </ul>
                    <div class="resp-tabs-container hor_1" style="border-color: rgb(193, 193, 193);">
                        <h2 class="resp-accordion hor_1 resp-tab-active" role="tab" aria-controls="hor_1_tab_item-0" style="background: none white; border-color: rgb(193, 193, 193);"><span class="resp-arrow"></span>Cấu hình chung</h2>
                        <div class="resp-tab-content hor_1 resp-tab-content-active" aria-labelledby="hor_1_tab_item-0" style="display:block">
                            <p>
                            </p>
                            <table class="admintable">
                                <tbody>

                                    <tr>
                                        <td width="150" class="key">
                                            <label for="txttitle">Tên công ty/cá nhân</label>
                                        </td>
                                        <td>
                                            <input name="txtcompanyname" type="text" value="" id="txtcompanyname" class="inputbox" style="width:364px;">
                                            <a href="#" class="tooltip">
                                                <img src="{{ asset('images/help-icon.png') }}">
                                                <span><b>Tên công ty/cá nhân</b><br>
                                                    Thông tin tên công ty hoặc cá nhân
                                                </span>
                                            </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td width="150" class="key">
                                            <label for="txttitle">Slogan</label>
                                        </td>
                                        <td>
                                            <input name="txtslogan" type="text" id="txtslogan" class="inputbox" style="width:364px;">
                                            <a href="#" class="tooltip">
                                                <img src="{{ asset('images/help-icon.png') }}">
                                                <span><b>Slogan</b><br>
                                                    Câu khẩu hiệu của công ty
                                                </span>
                                            </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td width="150" class="key">
                                            <label for="txttitle">Số điện thoại</label>
                                        </td>
                                        <td>
                                            <input name="txtphone" type="text" value="" id="txtphone" class="inputbox" style="width:364px;">
                                            <a href="#" class="tooltip">
                                                <img src="{{ asset('images/help-icon.png') }}">
                                                <span><b>Số điện thoại</b><br>
                                                    Số điện thoại di động, điện thoại bàn hay hotline của công ty
                                                </span>
                                            </a>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td width="150" class="key">
                                            <label for="txttitle">Email quản trị</label>
                                        </td>
                                        <td>
                                            <input name="txt_emailqt" type="text" value="" id="txt_emailqt" class="inputbox" style="width:364px;">
                                            <a href="#" class="tooltip">
                                                <img src="{{ asset('images/help-icon.png') }}">
                                                <span><b>Email quản trị</b><br>
                                                    Tất cả các liên hệ hay đơn đặt hàng của khách hàng sẽ được gửi vào email quản trị
                                                </span>
                                            </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td width="150" class="key">
                                            <label for="txttitle">Địa chỉ</label>
                                        </td>
                                        <td>
                                            <input name="txtaddress" type="text" value="" id="txtaddress" class="inputbox" style="width:500px;">
                                            <a href="#" class="tooltip">
                                                <img src="{{ asset('images/help-icon.png') }}">
                                                <span><b>Địa chỉ</b><br>
                                                    Địa chỉ công ty / cá nhân
                                                </span>
                                            </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td width="150" class="key">
                                            <label for="txtkeyword">Quốc gia</label>
                                        </td>
                                        <td>
                                            <select name="ddlnational" id="ddlnational" class="inputbox" style="width:150px;">
                                                <option selected="selected" value="1">Việt Nam</option>

                                            </select>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td width="150" class="key">
                                            <label for="txtkeyword">Tỉnh/Thành phố</label>
                                        </td>
                                        <td>
                                            <select name="ddlcity" onchange="" id="ddlcity" class="inputbox" style="width:150px;">
                                                <option selected="selected" value="1">Hà Nội</option>
                                                <option value="2">TP Hồ Chí Minh</option>

                                            </select>
                                            <a href="#" class="tooltip">
                                                <img src="{{ asset('images/help-icon.png') }}">
                                                <span><b>Tỉnh/Thành phố</b><br>
                                                    Được sử dụng để tính mức giá vận chuyển
                                                </span>
                                            </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td width="150" class="key">
                                            <label for="txtkeyword">Quận / Huyện</label>
                                        </td>
                                        <td>
                                            <select name="ddldistrict" id="ddldistrict" class="inputbox" style="width:150px;">
                                                <option selected="selected" value="3">Thanh Xuân</option>
                                                <option value="46">Thanh Xuân Bắc</option>
                                                <option value="47">Thanh Xuân Nam</option>
                                                <option value="48">Thanh Xuân Trung</option>
                                                <option value="49">Thanh Xuân Nam</option>
                                                <option value="50">Thượng Đình</option>
                                                <option value="51">Hạ Đình</option>
                                                <option value="52">Khương Đình</option>
                                                <option value="53">Khương Mai</option>
                                                <option value="54">Khương Trung</option>
                                                <option value="55">Nhân Chính</option>
                                                <option value="56">Phương Liệt</option>
                                                <option value="57">Kim Giang</option>
                                                <option value="5">Đống Đa</option>
                                                <option value="6">Cầu Giấy</option>
                                                <option value="7">Hoàn Kiếm</option>

                                            </select>
                                            <a href="#" class="tooltip">
                                                <img src="{{ asset('images/help-icon.png') }}">
                                                <span><b>Quận / Huyện</b><br>
                                                    Được sử dụng để tính mức giá vận chuyển
                                                </span>
                                            </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td width="150" class="key">
                                            <label for="txtkeyword">Ngôn ngữ mặc định</label>
                                        </td>
                                        <td>
                                            <select name="dd_lang" id="dd_lang" class="inputbox" style="width:150px;">
                                                <option selected="selected" value="VIE">Tiếng Việt</option>
                                                <option value="ENG">Tiếng Anh</option>

                                            </select>
                                            <a href="#" class="tooltip">
                                                <img src="{{ asset('images/help-icon.png') }}">
                                                <span><b>Ngôn ngữ mặc định</b><br>
                                                    Lựa chọn ngôn ngữ mặc định khi vào website
                                                </span>
                                            </a>
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
            $(".divvalidate").validate({
                rules: {
                    txtname: "required"

                },
                messages: {
                    txtname: "Please enter your firstname"

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