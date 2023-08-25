@extends('/template/index')

@section('content')
<div id="page-wrapper">



    <div class="widget">
        <div class="widget-title">


            <div class="widget-title">
                <h4><i class="icon-reorder">
                        Quản lý liên hệ</i></h4>
                <div class="ui-widget-content ui-corner-top ui-corner-bottom">
                    <div id="toolbox">

                        <div style="float: right; margin-right: 10px;" class="toolbox-content">

                            <table class="toolbar">
                                <tbody>
                                    <tr>


                                        <td align="center">

                                        </td>

                                        <td align="center">
                                            <a onclick="return confirm('Bạn có muốn xóa dữ liệu không?');" id="lnkdelete" class="toolbar" href="javascript:__doPostBack('controls1$ctl00$ctl00$ctl00$lnkdelete','')">
                                                <span class="icon-ok-delete"></span>
                                                Xóa
                                            </a>
                                        </td>
                                        <td align="center">

                                        </td>
                                        <td align="center">

                                        </td>

                                    </tr>
                                </tbody>
                            </table>

                        </div>
                    </div>
                </div>
            </div>



            <div class="widget-body">
            </div>
        </div>

        <div id="element-box">
            <div class="m">
                <div id="adminForm1">
                    <div id="pnlist">

                        <div class="row-fluid">
                            <div class="span3">
                                <div style="margin-top: 4px; font-size: 12px; font-style: italic;">
                                    Tổng số liên hệ: <span style="color: #A52A2A;">4</span>

                                </div>

                            </div>
                            <div class="span9">
                                <div class="pagination pagination-small pagination-right">
                                    <input name="controls1$ctl00$ctl00$ctl00$txtkeysearch" type="text" id="txtkeysearch" class="inputbox-top" style="width:150px;">
                                    <select name="controls1$ctl00$ctl00$ctl00$ddlstatus" id="ddlstatus" class="inputbox-top-select" style="width:130px;">
                                        <option selected="selected" value="-1">Tất cả trạng thái</option>
                                        <option value="1">Đã duyệt</option>
                                        <option value="0">Chưa duyệt</option>

                                    </select>
                                    <select name="controls1$ctl00$ctl00$ctl00$ddlorder" id="ddlorder" class="inputbox-top-select" style="width:110px;">
                                        <option selected="selected" value="0">SX.Ngày tạo</option>
                                        <option value="1">SX.Họ tên</option>

                                    </select>
                                    <select name="controls1$ctl00$ctl00$ctl00$ddlordertype" id="ddlordertype" class="inputbox-top-select" style="width:110px;">
                                        <option selected="selected" value="0">Giảm dần</option>
                                        <option value="1">Tăng dần</option>

                                    </select>
                                    <input type="submit" name="controls1$ctl00$ctl00$ctl00$btnsearch" value="Tìm kiếm" id="btnsearch" class="buton-css">
                                </div>

                            </div>
                        </div>
                        <div class="page-items">

                        </div>

                        <table cellpadding="1" summary="" class="adminlist">
                            <thead>
                                <tr>
                                    <th width="3%" class="title">
                                        <input type="checkbox" id="chkToggle" value="" onclick="selectAll(this)" name="chkToggle">
                                    </th>
                                    <th width="2%" class="title">#</th>

                                    <th class="title">Họ Tên
                                    </th>
                                    <th width="200" class="title">Email
                                    </th>
                                    <th width="200" class="title">Số điện thoại
                                    </th>
                                    <th style="text-align: center;" width="10%" nowrap="nowrap" class="title">Ngày gửi
                                    </th>
                                    <th width="8%" class="title">Trạng thái
                                    </th>
                                    <th style="width: 100px;"></th>

                                </tr>
                            </thead>

                            <tbody>
                                <tr class="row0">
                                    <td align="center">
                                        <input type="checkbox" onclick="isChecked(this.checked);" value="3341" id="cb_" name="cb_">
                                    </td>
                                    <td align="center">1</td>

                                    <td>
                                        <a id="LinkButton1" title="Sửa" href="javascript:__doPostBack('controls1$ctl00$ctl00$ctl00$rpitems$ctl01$LinkButton1','')">Đăng ký nhận email</a>
                                    </td>
                                    <td align="left">daint9699@gmail.com</td>
                                    <td align="left"></td>
                                    <td align="center">17/03/2023</td>
                                    <td align="center">
                                        <a id="LinkButton2" title="Thay đổi trạng thái" href="javascript:__doPostBack('controls1$ctl00$ctl00$ctl00$rpitems$ctl01$LinkButton2','')"><img src="https://vntravelsimple.com/templates/admin/images/iconclose_c.png"></a>
                                    </td>
                                    <td align="center">
                                        <a id="LinkButton4" title="Xem chi tiết " href="javascript:__doPostBack('controls1$ctl00$ctl00$ctl00$rpitems$ctl01$LinkButton4','')"><img src="https://vntravelsimple.com/templates/admin/images/view.png"></a>
                                    </td>

                                </tr>
                            </tbody>

                            <tbody>
                                <tr class="row0">
                                    <td align="center">
                                        <input type="checkbox" onclick="isChecked(this.checked);" value="3340" id="cb_" name="cb_">
                                    </td>
                                    <td align="center">2</td>

                                    <td>
                                        <a id="LinkButton1" title="Sửa" href="javascript:__doPostBack('controls1$ctl00$ctl00$ctl00$rpitems$ctl02$LinkButton1','')">Đăng ký nhận email</a>
                                    </td>
                                    <td align="left">daint9699@gmail.com</td>
                                    <td align="left"></td>
                                    <td align="center">17/03/2023</td>
                                    <td align="center">
                                        <a id="LinkButton2" title="Thay đổi trạng thái" href="javascript:__doPostBack('controls1$ctl00$ctl00$ctl00$rpitems$ctl02$LinkButton2','')"><img src="https://vntravelsimple.com/templates/admin/images/iconclose_c.png"></a>
                                    </td>
                                    <td align="center">
                                        <a id="LinkButton4" title="Xem chi tiết " href="javascript:__doPostBack('controls1$ctl00$ctl00$ctl00$rpitems$ctl02$LinkButton4','')"><img src="https://vntravelsimple.com/templates/admin/images/view.png"></a>
                                    </td>

                                </tr>
                            </tbody>

                            <tbody>
                                <tr class="row0">
                                    <td align="center">
                                        <input type="checkbox" onclick="isChecked(this.checked);" value="3339" id="cb_" name="cb_">
                                    </td>
                                    <td align="center">3</td>

                                    <td>
                                        <a id="LinkButton1" title="Sửa" href="javascript:__doPostBack('controls1$ctl00$ctl00$ctl00$rpitems$ctl03$LinkButton1','')">Đăng ký nhận email</a>
                                    </td>
                                    <td align="left">daint9699@gmail.com</td>
                                    <td align="left"></td>
                                    <td align="center">17/03/2023</td>
                                    <td align="center">
                                        <a id="LinkButton2" title="Thay đổi trạng thái" href="javascript:__doPostBack('controls1$ctl00$ctl00$ctl00$rpitems$ctl03$LinkButton2','')"><img src="https://vntravelsimple.com/templates/admin/images/iconclose_c.png"></a>
                                    </td>
                                    <td align="center">
                                        <a id="LinkButton4" title="Xem chi tiết " href="javascript:__doPostBack('controls1$ctl00$ctl00$ctl00$rpitems$ctl03$LinkButton4','')"><img src="https://vntravelsimple.com/templates/admin/images/view.png"></a>
                                    </td>

                                </tr>
                            </tbody>

                            <tbody>
                                <tr class="row0">
                                    <td align="center">
                                        <input type="checkbox" onclick="isChecked(this.checked);" value="3338" id="cb_" name="cb_">
                                    </td>
                                    <td align="center">4</td>

                                    <td>
                                        <a id="LinkButton1" title="Sửa" href="javascript:__doPostBack('controls1$ctl00$ctl00$ctl00$rpitems$ctl04$LinkButton1','')">Đăng ký nhận email</a>
                                    </td>
                                    <td align="left">nguyentiendai67utt@gmail.com</td>
                                    <td align="left"></td>
                                    <td align="center">17/03/2023</td>
                                    <td align="center">
                                        <a id="LinkButton2" title="Thay đổi trạng thái" href="javascript:__doPostBack('controls1$ctl00$ctl00$ctl00$rpitems$ctl04$LinkButton2','')"><img src="https://vntravelsimple.com/templates/admin/images/iconclose_c.png"></a>
                                    </td>
                                    <td align="center">
                                        <a id="LinkButton4" title="Xem chi tiết " href="javascript:__doPostBack('controls1$ctl00$ctl00$ctl00$rpitems$ctl04$LinkButton4','')"><img src="https://vntravelsimple.com/templates/admin/images/view.png"></a>
                                    </td>

                                </tr>
                            </tbody>

                        </table>

                        <div class="page-items">

                        </div>

                    </div>




                </div>
                <div class="clr"></div>
            </div>
        </div>
    </div>


</div>
@endsection