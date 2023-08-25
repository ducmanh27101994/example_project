@extends('/template/index')

@section('content')
<div id="page-wrapper">


    <div class="widget">

        <div class="widget-title">


            <div class="widget-title">
                <h4><i class="icon-reorder">
                        Quản lý quảng cáo</i></h4>
                <div class="ui-widget-content ui-corner-top ui-corner-bottom">
                    <div id="toolbox">

                        <div style="float: right; margin-right: 10px;" class="toolbox-content">

                            <table class="toolbar">
                                <tbody>
                                    <tr>


                                        <td align="center">
                                            <a id="lnkadd" class="toolbar" href="javascript:__doPostBack('controls1$ctl00$ctl00$ctl00$lnkadd','')">
                                                <span class="icon-ok-new"></span>
                                                Thêm
                                            </a>
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

                <div id="element-box">

                    <div class="m">
                        <div id="adminForm1">
                            <div id="pnlist">

                                <div class="row-fluid">
                                    <div class="span3">
                                        <div style="margin-top: 4px; font-size: 12px; font-style: italic;">
                                            Tổng số quảng cáo: <span style="color: #A52A2A;">4</span>

                                        </div>
                                        <div style="clear: both;"></div>
                                    </div>
                                    <div class="span9">
                                        <div class="pagination pagination-small pagination-right">
                                            <input name="controls1$ctl00$ctl00$ctl00$txtkeysearch" type="text" id="txtkeysearch" class="inputbox-top" style="width:150px;">
                                            <select name="controls1$ctl00$ctl00$ctl00$ddlcatesearch" id="ddlcatesearch" class="inputbox-top-select">
                                                <option selected="selected" value="-1">-- Chọn vị trí quảng cáo --</option>
                                                <option value="10482">Quảng cáo slide trang chủ</option>
                                                <option value="10483">Quản lý icon trang chủ</option>

                                            </select>
                                            <input type="submit" name="controls1$ctl00$ctl00$ctl00$btnsearch" value="Tìm kiếm" id="btnsearch" class="buton-css">
                                        </div>
                                        <div style="clear: both;"></div>
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
                                            <th width="3%" class="title">#</th>
                                            <th width="100" class="title">Hình ảnh
                                            </th>
                                            <th class="title">Tiêu đề
                                            </th>

                                            <th width="200" class="title">Liên kết
                                            </th>
                                            <th style="text-align:center;" width="8%" class="title">Thứ tự
                                            </th>
                                            <th style="text-align:center;" width="8%" class="title">Trạng thái
                                            </th>
                                            <th width="120px" style="text-align: center;" class="title">Ngày tạo
                                            </th>
                                            <th width="80"></th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                        <tr class="row0">
                                            <td align="center">
                                                <input type="checkbox" onclick="isChecked(this.checked);" value="3334" id="cb_" name="cb_">
                                            </td>
                                            <td align="center">1</td>
                                            <td align="center"><img height="50" style="max-width:300px" src="https://vntravelsimple.com/uploads/qc/viet-nam-travel-simple-2.jpg"></td>
                                            <td>
                                                <a id="LinkButton1" title="Sửa" href="javascript:__doPostBack('controls1$ctl00$ctl00$ctl00$rpitems$ctl01$LinkButton1','')">slide</a>
                                            </td>
                                            <td align="left"></td>
                                            <td align="center">0</td>
                                            <td align="center">
                                                <a id="LinkButton2" title="Thay đổi trạng thái" href="javascript:__doPostBack('controls1$ctl00$ctl00$ctl00$rpitems$ctl01$LinkButton2','')"><img src="https://vntravelsimple.com/templates/admin/images/iconupdate_c.png"></a>
                                            </td>
                                            <td align="center">01/04/2023 11:25</td>
                                            <td align="center">
                                                <a id="LinkButton3" title="Sửa" href="javascript:__doPostBack('controls1$ctl00$ctl00$ctl00$rpitems$ctl01$LinkButton3','')"><img src="https://vntravelsimple.com/templates/admin/images/iconedit_c.png"></a>
                                                &nbsp; &nbsp;
                                                <a onclick="return confirm('Bạn có muốn xóa không?');" id="LinkButton4" title="Xóa" href="javascript:__doPostBack('controls1$ctl00$ctl00$ctl00$rpitems$ctl01$LinkButton4','')"><img src="https://vntravelsimple.com/templates/admin/images/icondelete_c.png"></a>
                                            </td>
                                        </tr>
                                    </tbody>

                                    <tbody>
                                        <tr class="row0">
                                            <td align="center">
                                                <input type="checkbox" onclick="isChecked(this.checked);" value="3335" id="cb_" name="cb_">
                                            </td>
                                            <td align="center">2</td>
                                            <td align="center"><img height="50" style="max-width:300px" src="https://vntravelsimple.com/uploads/qc/16-icon1.png"></td>
                                            <td>
                                                <a id="LinkButton1" title="Sửa" href="javascript:__doPostBack('controls1$ctl00$ctl00$ctl00$rpitems$ctl02$LinkButton1','')">Find authentic experiences</a>
                                            </td>
                                            <td align="left"></td>
                                            <td align="center">0</td>
                                            <td align="center">
                                                <a id="LinkButton2" title="Thay đổi trạng thái" href="javascript:__doPostBack('controls1$ctl00$ctl00$ctl00$rpitems$ctl02$LinkButton2','')"><img src="https://vntravelsimple.com/templates/admin/images/iconupdate_c.png"></a>
                                            </td>
                                            <td align="center">17/03/2023 11:24</td>
                                            <td align="center">
                                                <a id="LinkButton3" title="Sửa" href="javascript:__doPostBack('controls1$ctl00$ctl00$ctl00$rpitems$ctl02$LinkButton3','')"><img src="https://vntravelsimple.com/templates/admin/images/iconedit_c.png"></a>
                                                &nbsp; &nbsp;
                                                <a onclick="return confirm('Bạn có muốn xóa không?');" id="LinkButton4" title="Xóa" href="javascript:__doPostBack('controls1$ctl00$ctl00$ctl00$rpitems$ctl02$LinkButton4','')"><img src="https://vntravelsimple.com/templates/admin/images/icondelete_c.png"></a>
                                            </td>
                                        </tr>
                                    </tbody>

                                    <tbody>
                                        <tr class="row0">
                                            <td align="center">
                                                <input type="checkbox" onclick="isChecked(this.checked);" value="3336" id="cb_" name="cb_">
                                            </td>
                                            <td align="center">3</td>
                                            <td align="center"><img height="50" style="max-width:300px" src="https://vntravelsimple.com/uploads/qc/icon2.png"></td>
                                            <td>
                                                <a id="LinkButton1" title="Sửa" href="javascript:__doPostBack('controls1$ctl00$ctl00$ctl00$rpitems$ctl03$LinkButton1','')">Book with Flexilibity</a>
                                            </td>
                                            <td align="left"></td>
                                            <td align="center">0</td>
                                            <td align="center">
                                                <a id="LinkButton2" title="Thay đổi trạng thái" href="javascript:__doPostBack('controls1$ctl00$ctl00$ctl00$rpitems$ctl03$LinkButton2','')"><img src="https://vntravelsimple.com/templates/admin/images/iconupdate_c.png"></a>
                                            </td>
                                            <td align="center">17/03/2023 11:24</td>
                                            <td align="center">
                                                <a id="LinkButton3" title="Sửa" href="javascript:__doPostBack('controls1$ctl00$ctl00$ctl00$rpitems$ctl03$LinkButton3','')"><img src="https://vntravelsimple.com/templates/admin/images/iconedit_c.png"></a>
                                                &nbsp; &nbsp;
                                                <a onclick="return confirm('Bạn có muốn xóa không?');" id="LinkButton4" title="Xóa" href="javascript:__doPostBack('controls1$ctl00$ctl00$ctl00$rpitems$ctl03$LinkButton4','')"><img src="https://vntravelsimple.com/templates/admin/images/icondelete_c.png"></a>
                                            </td>
                                        </tr>
                                    </tbody>

                                    <tbody>
                                        <tr class="row0">
                                            <td align="center">
                                                <input type="checkbox" onclick="isChecked(this.checked);" value="3337" id="cb_" name="cb_">
                                            </td>
                                            <td align="center">4</td>
                                            <td align="center"><img height="50" style="max-width:300px" src="https://vntravelsimple.com/uploads/qc/icon3.png"></td>
                                            <td>
                                                <a id="LinkButton1" title="Sửa" href="javascript:__doPostBack('controls1$ctl00$ctl00$ctl00$rpitems$ctl04$LinkButton1','')">Explore the prossibility</a>
                                            </td>
                                            <td align="left"></td>
                                            <td align="center">0</td>
                                            <td align="center">
                                                <a id="LinkButton2" title="Thay đổi trạng thái" href="javascript:__doPostBack('controls1$ctl00$ctl00$ctl00$rpitems$ctl04$LinkButton2','')"><img src="https://vntravelsimple.com/templates/admin/images/iconupdate_c.png"></a>
                                            </td>
                                            <td align="center">17/03/2023 11:24</td>
                                            <td align="center">
                                                <a id="LinkButton3" title="Sửa" href="javascript:__doPostBack('controls1$ctl00$ctl00$ctl00$rpitems$ctl04$LinkButton3','')"><img src="https://vntravelsimple.com/templates/admin/images/iconedit_c.png"></a>
                                                &nbsp; &nbsp;
                                                <a onclick="return confirm('Bạn có muốn xóa không?');" id="LinkButton4" title="Xóa" href="javascript:__doPostBack('controls1$ctl00$ctl00$ctl00$rpitems$ctl04$LinkButton4','')"><img src="https://vntravelsimple.com/templates/admin/images/icondelete_c.png"></a>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
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