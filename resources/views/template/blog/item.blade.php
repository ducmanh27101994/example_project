@extends('/template/index')

@section('content')
<div id="page-wrapper">
    <script>
        $(function() {
            $("#txt_updatetime").datepicker({
                dateFormat: 'dd/mm/yy'
            });

        });
    </script>
    <div class="widget-title">
        <h4><i class="icon-reorder-items">
                Danh sách tin tức</i></h4>
        <div class="ui-corner-top ui-corner-bottom">
            <div id="toolbox">
                <div style="float: right; margin-right: 10px;" class="toolbox-content">
                    <table class="toolbar">
                        <tbody>
                            <tr>
                                <td align="center">

                                </td>
                                <td align="center">
                                    <a id="lnkupdatepriceandorder" class="toolbar" href="javascript:__doPostBack('controls1$ctl00$ctl00$ctl00$lnkupdatepriceandorder','')">
                                        <span class="icon-ok-update"></span>
                                        Cập nhật thứ tự
                                    </a>
                                </td>
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
    <div id="element-box">
        <div class="m">
            <div id="adminForm1">
                <div id="pnlist">
                    <div class="row-fluid">
                        <div class="span3">
                            <div style="margin-top: 4px; font-size: 12px; font-style: italic;">
                                Tổng số tin tức: <span style="color: #A52A2A;">1</span>

                            </div>
                        </div>
                        <div class="span9">
                            <div class="pagination pagination-small pagination-right">
                                <input name="controls1$ctl00$ctl00$ctl00$txtkeysearch" type="text" id="txtkeysearch" class="inputbox-top" style="width:150px;">
                                <select name="controls1$ctl00$ctl00$ctl00$ddlcatesearch" id="ddlcatesearch" class="inputbox-top-select" style="width:150px;">
                                    <option selected="selected" value="-1">Tất cả</option>
                                    <option value="10353">Chuyên mục tin</option>

                                </select>
                                <select name="controls1$ctl00$ctl00$ctl00$ddlstatus" id="ddlstatus" class="inputbox-top-select" style="width:130px;">
                                    <option selected="selected" value="-1">Tất cả trạng thái</option>
                                    <option value="1">Hiển thị</option>
                                    <option value="0">Ẩn</option>

                                </select>
                                <select name="controls1$ctl00$ctl00$ctl00$ddlorder" id="ddlorder" class="inputbox-top-select" style="width:110px;">
                                    <option selected="selected" value="0">SX.Ngày tạo</option>
                                    <option value="1">SX.Ngày cập nhật</option>
                                    <option value="2">SX.Tiêu đề</option>
                                    <option value="3">SX.Thứ tự</option>
                                    <option value="4">SX.Lượt xem</option>

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
                                <th width="20" class="title">
                                    <input type="checkbox" id="chkToggle" value="" onclick="selectAll(this)" name="chkToggle">
                                </th>
                                <th width="80" class="title">Hình ảnh
                                </th>

                                <th class="title">Tiêu đề tin
                                </th>
                                <th style="width: 80px; text-align: center !important;" class="title">Thứ tự
                                </th>
                                <th style="width: 80px;" class="title">Lượt xem
                                </th>

                                <th width="10%" style="text-align: center" class="title">Người tạo
                                </th>
                                <th width="140" style="text-align: center" class="title">Thời gian
                                </th>
                                <th width="80" class="title">Trạng thái
                                </th>
                                <th style="width: 120px;" class="title"></th>

                            </tr>
                        </thead>

                        <tbody>
                            <tr class="row0">
                                <td align="center">
                                    <input type="checkbox" onclick="isChecked(this.checked);" value="4489" id="cb_" name="cb_">
                                </td>
                                <td align="center">
                                    <a id="LinkButton3" title="Sửa" href="javascript:__doPostBack('controls1$ctl00$ctl00$ctl00$rpitems$ctl01$LinkButton3','')"><img height="40" style="max-width:300px" src="https://vntravelsimple.com/uploads/news/banner.jpg"></a>
                                </td>
                                <td>
                                    <a id="LinkButton1" title="Sửa" href="javascript:__doPostBack('controls1$ctl00$ctl00$ctl00$rpitems$ctl01$LinkButton1','')">dfs</a>
                                </td>
                                <td align="center">
                                    <input type="text" name="txtorder_4489" value="1" class="txtiporder">
                                </td>
                                <td align="center">25
                                </td>
                                <td>
                                    <p class="sptime"><i class="ico-ucreate" title="Người tạo"></i>admin</p>
                                    <p class="sptime"><i class="ico-uupdate" title="Người cập nhật"></i>...</p>
                                </td>
                                <td align="center">
                                    <p class="sptime"><i class="ico-dcreate" title="Ngày tạo"></i>16/03/2023 21:03</p>
                                    <p class="sptime"><i class="ico-dupdate" title="Ngày cập nhật"></i>...</p>
                                </td>

                                <td align="center">
                                    <a id="LinkButton2" title="Thay đổi trạng thái" href="javascript:__doPostBack('controls1$ctl00$ctl00$ctl00$rpitems$ctl01$LinkButton2','')"><img src="{{ asset('images/iconupdate_c.png') }}"></a>
                                </td>
                                <td align="center">
                                    <a href="" target="_blank" title="Xem chi tiết">
                                        <img src="{{ asset('images/View.png') }}"></a>&nbsp; &nbsp;
                                    <a id="LinkButton4" title="Sửa" href="javascript:__doPostBack('controls1$ctl00$ctl00$ctl00$rpitems$ctl01$LinkButton4','')"><img src="{{ asset('images/iconedit_c.png') }}"></a>
                                    &nbsp; &nbsp;
                                    <a onclick="return confirm('Bạn có muốn xóa không?');" id="LinkButton5" title="Xóa" href="javascript:__doPostBack('controls1$ctl00$ctl00$ctl00$rpitems$ctl01$LinkButton5','')"><img src="{{ asset('images/icondelete_c.png') }}"></a>

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
@endsection