@extends('/template/index')

@section('content')

<div id="page-wrapper">


    <div class="widget">

        <div class="widget-title">


            <div class="widget-title">
                <h4><i class="icon-reorder">
                        Thêm menu</i></h4>
                <div class="ui-widget-content ui-corner-top ui-corner-bottom">
                    <div id="toolbox">

                        <div style="float: right; margin-right: 10px;" class="toolbox-content">

                            <table class="toolbar">
                                <tbody>
                                    <tr>


                                        <td align="center">

                                        </td>

                                        <td align="center">

                                        </td>
                                        <td align="center">
                                            <a onclick="return validation();" id="lnkupdate" class="toolbar" href="javascript:__doPostBack('controls1$ctl00$ctl00$ctl00$lnkupdate','')">
                                                <span class="icon-ok-update"></span>
                                                Cập nhật
                                            </a>
                                        </td>
                                        <td align="center">
                                            <a id="lnkclose" class="toolbar" href="javascript:__doPostBack('controls1$ctl00$ctl00$ctl00$lnkclose','')">
                                                <span class="icon-ok-close"></span>
                                                Đóng
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
                <div id="element-box">

                    <div class="m">
                        <div id="adminForm1">

                            <div id="pndetail">


                                <div id="parentHorizontalTab" class="divvalidate" style="display: block; width: 100%; margin: 0px;">
                                    <ul class="resp-tabs-list hor_1">
                                        <li class="resp-tab-item hor_1 resp-tab-active" aria-controls="hor_1_tab_item-0" role="tab" style="background-color: white; border-color: rgb(193, 193, 193);">Thông tin chung</li>
                                        <li class="resp-tab-item hor_1" aria-controls="hor_1_tab_item-1" role="tab" style="background-color: rgb(245, 245, 245);">Thông tin thêm</li>
                                    </ul>
                                    <div class="resp-tabs-container hor_1" style="border-color: rgb(193, 193, 193);">
                                        <h2 class="resp-accordion hor_1 resp-tab-active" role="tab" aria-controls="hor_1_tab_item-0" style="background: none; border-color: rgb(193, 193, 193);"><span class="resp-arrow"></span>Thông tin chung</h2>
                                        <div class="resp-tab-content hor_1 resp-tab-content-active" aria-labelledby="hor_1_tab_item-0" style="display:block">
                                            <table cellspacing="1" width="100%" class="admintable">
                                                <tbody>

                                                    <tr>
                                                        <td width="150" class="key">
                                                            <label for="txtuser">Thuộc menu</label>
                                                        </td>
                                                        <td>
                                                            <select name="controls1$ctl00$ctl00$ctl00$ddlcate" id="ddlcate" class="inputbox" style="width:450px;">
                                                                <option value="-1">Menu chính</option>
                                                                <option value="10420">Trang chủ</option>
                                                                <option value="10421">Về chúng tôi</option>
                                                                <option value="10427">Sản phẩm</option>
                                                                <option value="10455">..sub-menu-1</option>
                                                                <option value="10457">....sub-menu-3</option>
                                                                <option value="10456">..sub-menu-2</option>
                                                                <option value="10458">....sub-menu-4</option>
                                                                <option value="10430">Tin tức</option>

                                                            </select>
                                                            <a href="#" class="tooltip">
                                                                <img src="{{ asset('images/help-icon.png') }}">
                                                                <span><b>Chọn menu</b><br>
                                                                    Chọn menu này là menu chính hay là menu con của 1 mục nào đó
                                                                </span>
                                                            </a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td width="150" class="key">
                                                            <label for="txtuser">Tiêu đề</label>
                                                        </td>
                                                        <td>
                                                            <input name="controls1$ctl00$ctl00$ctl00$txtname" type="text" id="txtname" class="inputbox" style="width:450px;">
                                                            <a href="#" class="tooltip">
                                                                <img src="{{ asset('images/help-icon.png') }}">
                                                                <span><b>Tiêu đề</b><br>
                                                                    Tiêu đề của menu VD: Trang chủ, Sản phẩm, Liên hệ...
                                                                </span>
                                                            </a>
                                                        </td>
                                                    </tr>


                                                    <tr>
                                                        <td valign="top" class="key">
                                                            <label for="txtphone">Liên kết </label>
                                                        </td>
                                                        <td>
                                                            <ul>
                                                                <li><span style="display: none; width: 140px;">
                                                                        <input id="rdlinkinput" type="radio" name="controls1$ctl00$ctl00$ctl00$link" value="rdlinkinput" checked="checked"><label for="rdlinkinput"> Nhập liên kết</label></span><input name="controls1$ctl00$ctl00$ctl00$txtlink" type="text" id="txtlink" class="inputbox" style="width:450px;">
                                                                    <a href="#" class="tooltip">
                                                                        <img src="{{ asset('images/help-icon.png') }}">
                                                                        <span><b>Liên kết</b><br>
                                                                            Lấy liên kết từ tin tức,bài viết, sản phẩm,...
                                                                        </span>
                                                                    </a>
                                                                    <br>
                                                                    <br>
                                                                </li>
                                                                <li style="display:none;"><span style="display:none; width: 140px;">
                                                                        <input id="rdlinkfrommodule" type="radio" name="controls1$ctl00$ctl00$ctl00$link" value="rdlinkfrommodule"><label for="rdlinkfrommodule"> Chọn từ module </label>
                                                                    </span>
                                                                    <br>
                                                                    <br>
                                                                </li>
                                                                <li><span style="display: inline-block; width: 140px;">
                                                                        <input id="rdlinkfromcate" type="radio" name="controls1$ctl00$ctl00$ctl00$link" value="rdlinkfromcate"><label for="rdlinkfromcate"> Chọn từ danh mục </label>
                                                                    </span>
                                                                    <select name="controls1$ctl00$ctl00$ctl00$ddllinkfromcate" id="ddllinkfromcate" disabled="disabled" class="aspNetDisabled inputbox" style="width:200px;">
                                                                        <option selected="selected" value="MPR">Danh mục sản phẩm</option>
                                                                        <option value="MNW">Danh mục tin tức</option>
                                                                        <option value="CNT">Danh mục bài viết</option>
                                                                        <option value="HPS">Danh mục dịch vụ</option>
                                                                        <option value="MVD">Danh mục video</option>
                                                                        <option value="FAQ">Danh mục hỏi đáp</option>
                                                                        <option value="REM">Danh mục tuyển dụng</option>

                                                                    </select>
                                                                    <a href="#" class="tooltip">
                                                                        <img src="{{ asset('images/help-icon.png') }}">
                                                                        <span><b>Chọn từ danh mục</b><br>
                                                                            Click chọn 1 trong số các danh mục hiển thị bên dưới
                                                                        </span>
                                                                    </a>
                                                                    <div class="linklist"></div>
                                                                </li>
                                                            </ul>
                                                        </td>
                                                    </tr>


                                                    <tr>
                                                        <td class="key">
                                                            <label for="listnhom">Thứ tự</label>
                                                        </td>
                                                        <td>
                                                            <input name="controls1$ctl00$ctl00$ctl00$txtorder" type="text" value="1" id="txtorder" class="inputbox" onkeypress=" return isNumberKey(event)" style="width:130px;">
                                                            <a href="#" class="tooltip">
                                                                <img src="{{ asset('images/help-icon.png') }}">
                                                                <span><b>Thứ tự</b><br>
                                                                    Thứ tự hiển thị của menu (VD: 1,2,3...)
                                                                </span>
                                                            </a>

                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td class="key">
                                                            <label for="listnhom">Trạng thái</label>
                                                        </td>
                                                        <td>
                                                            <input id="chkstatus" type="checkbox" name="controls1$ctl00$ctl00$ctl00$chkstatus" checked="checked"><label for="chkstatus"> Hiển thị</label>

                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="key">
                                                            <label for="listnhom">Ngày tạo</label>
                                                        </td>
                                                        <td>
                                                            08/23/2023 02:58:08 PM
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        <h2 class="resp-accordion hor_1" role="tab" aria-controls="hor_1_tab_item-1" style="background-color: rgb(245, 245, 245); border-color: rgb(193, 193, 193);"><span class="resp-arrow"></span>Thông tin thêm</h2>
                                        <div class="resp-tab-content hor_1" aria-labelledby="hor_1_tab_item-1" style="border-color: rgb(193, 193, 193);">
                                            <table cellspacing="1" width="100%" class="admintable">
                                                <tbody>

                                                    <tr>
                                                        <td width="150" class="key">
                                                            <label for="txtuser">Ảnh đại diện</label>
                                                        </td>
                                                        <td>
                                                            <input type="file" name="controls1$ctl00$ctl00$ctl00$flicon" id="flicon">
                                                            <a href="#" class="tooltip">
                                                                <img src="{{ asset('images/help-icon.png') }}">
                                                                <span><b>Ảnh đại diện</b><br>
                                                                    Ảnh đại diện cho menu
                                                                </span>
                                                            </a>
                                                            <br>


                                                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td width="150" class="key">
                                                            <label for="txtuser">Mô tả</label>
                                                        </td>
                                                        <td>
                                                            <textarea name="controls1$ctl00$ctl00$ctl00$txtdesc" rows="5" cols="70" id="txtdesc" class="inputbox"></textarea>
                                                            <a href="#" class="tooltip">
                                                                <img src="{{ asset('images/help-icon.png') }}">
                                                                <span><b>Mô tả</b><br>
                                                                    Thông tin mô tả ngắn cho menu
                                                                </span>
                                                            </a>

                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                                <input type="hidden" value="" id="hndId" name="hndId">

                            </div>



                        </div>
                        <div class="clr"></div>
                    </div>

                </div>
            </div>

        </div>
    </div>
</div>

@endsection