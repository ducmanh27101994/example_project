@extends('/template/index')

@section('content')

<div id="page-wrapper">

    <div class="widget">

        <div class="widget-title">

            <div class="widget-title">
                <h4><i class="icon-reorder">
                        Thêm tài khoản</i></h4>
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
                                    </ul>
                                    <div class="resp-tabs-container hor_1" style="border-color: rgb(193, 193, 193);">
                                        <h2 class="resp-accordion hor_1 resp-tab-active" role="tab" aria-controls="hor_1_tab_item-0" style="background: none; border-color: rgb(193, 193, 193);"><span class="resp-arrow"></span>Thông tin chung</h2>
                                        <div class="resp-tab-content hor_1 resp-tab-content-active" aria-labelledby="hor_1_tab_item-0" style="display:block">

                                            <table cellspacing="1" class="admintable">
                                                <tbody>
                                                    <tr>
                                                        <td width="150" class="key">
                                                            <label for="txtuser">Tài khoản</label>
                                                        </td>
                                                        <td>
                                                            <input name="controls1$ctl00$ctl00$ctl00$txtusername" type="text" id="txtusername" class="inputbox" style="width:250px;">
                                                            <a href="#" class="tooltip">
                                                                <img src="{{ asset('images/help-icon.png') }}">
                                                                <span><b>Tài khoản</b><br>
                                                                    Tài khoản viết liền và không dấu (VD: admin,quantri,...)
                                                                </span>
                                                            </a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="key">
                                                            <label for="txtpass">Vai trò</label>
                                                        </td>
                                                        <td>
                                                            <select name="controls1$ctl00$ctl00$ctl00$ddlroles" id="ddlroles" class="inputbox">
                                                                <option selected="selected" value="8206">Quản lý hệ thống</option>
                                                                <option value="8207">Biên tập viên/ Nhân viên</option>

                                                            </select>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="key">
                                                            <label for="txtpass">Mật khẩu</label>
                                                        </td>
                                                        <td>
                                                            <input name="controls1$ctl00$ctl00$ctl00$txtpass" type="password" id="txtpass" class="inputbox" style="width:250px;">
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="key">
                                                            <label for="txtrepass">Nhắc lại mật khẩu</label>
                                                        </td>
                                                        <td>
                                                            <input name="controls1$ctl00$ctl00$ctl00$txtrepass" type="password" id="txtrepass" class="inputbox" style="width:250px;">
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="key">
                                                            <label for="txthoten">Họ và tên</label>
                                                        </td>
                                                        <td>
                                                            <input name="controls1$ctl00$ctl00$ctl00$txtname" type="text" id="txtname" class="inputbox" style="width:250px;">
                                                            <a href="#" class="tooltip">
                                                                <img src="{{ asset('images/help-icon.png') }}">
                                                                <span><b>Họ và tên</b><br>
                                                                    Họ tên của người quản trị
                                                                </span>
                                                            </a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="key">
                                                            <label for="txthoten">Điện thoại</label>
                                                        </td>
                                                        <td>
                                                            <input name="controls1$ctl00$ctl00$ctl00$txtphone" type="text" id="txtphone" class="inputbox" style="width:250px;">

                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="key">
                                                            <label for="txthoten">Email</label>
                                                        </td>
                                                        <td>
                                                            <input name="controls1$ctl00$ctl00$ctl00$txtmail" type="text" id="txtmail" class="inputbox" style="width:250px;">
                                                            <a href="#" class="tooltip">
                                                                <img src="{{ asset('images/help-icon.png') }}">
                                                                <span><b>Email</b><br>
                                                                    Email dùng để reset lại mật khẩu trong trường hợp quên mật khẩu
                                                                </span>
                                                            </a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="key">
                                                            <label for="txthoten">Địa chỉ</label>
                                                        </td>
                                                        <td>
                                                            <input name="controls1$ctl00$ctl00$ctl00$txtaddress" type="text" id="txtaddress" class="inputbox" style="width:450px;">

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