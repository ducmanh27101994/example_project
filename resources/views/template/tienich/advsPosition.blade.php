@extends('/template/index')

@section('content')

<div id="page-wrapper">

    <div class="widget">

        <div class="widget-title">

            <div class="widget-title">
                <h4><i class="icon-reorder">
                        Quản lý vị trí quảng cáo</i></h4>
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



                                <table cellpadding="1" summary="" class="adminlist">
                                    <thead>
                                        <tr>

                                            <th width="3%" class="title">
                                                <input type="checkbox" id="chkToggle" value="" onclick="selectAll(this)" name="chkToggle">
                                            </th>
                                            <th width="2%" class="title">#</th>
                                            <th class="title">Vị trí quảng cáo
                                            </th>
                                            <th style="text-align: center;" width="12%" class="title">Mã quảng cáo
                                            </th>
                                            <th style="text-align: center;" width="8%" class="title">Thứ tự
                                            </th>
                                            <th width="8%" class="title">Trạng thái
                                            </th>
                                            <th width="8%" class="title"></th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <td colspan="10">
                                                <del class="container">
                                                    <div class="pagination">
                                                        <div class="limit"></div>
                                                        <div class="limit"></div>
                                                    </div>
                                                </del>
                                            </td>
                                        </tr>
                                    </tfoot>

                                    <tbody>
                                        <tr class="row0">
                                            <td align="center">
                                                <input type="checkbox" onclick="isChecked(this.checked);" value="10482" id="cb_" name="cb_">
                                            </td>
                                            <td align="center">1</td>

                                            <td>
                                                <a id="LinkButton1" title="Sửa" href="javascript:__doPostBack('controls1$ctl00$ctl00$ctl00$rpitems$ctl01$LinkButton1','')">Quảng cáo slide trang chủ</a>
                                            </td>
                                            <td align="center">ADV-slider</td>
                                            <td align="center">1</td>
                                            <td align="center">
                                                <a id="LinkButton2" title="Thay đổi trạng thái" href="javascript:__doPostBack('controls1$ctl00$ctl00$ctl00$rpitems$ctl01$LinkButton2','')"><img src="https://vntravelsimple.com/templates/admin/images/iconupdate_c.png"></a>
                                            </td>
                                            <td align="center">
                                                <a id="LinkButton3" title="Sửa" href="javascript:__doPostBack('controls1$ctl00$ctl00$ctl00$rpitems$ctl01$LinkButton3','')"><img src="https://vntravelsimple.com/templates/admin/images/iconedit_c.png"></a>
                                                &nbsp; &nbsp;
                                                <a id="LinkButton4" title="Xóa" href="javascript:__doPostBack('controls1$ctl00$ctl00$ctl00$rpitems$ctl01$LinkButton4','')"><img src="https://vntravelsimple.com/templates/admin/images/icondelete_c.png"></a>
                                            </td>


                                        </tr>
                                    </tbody>

                                    <tbody>
                                        <tr class="row0">
                                            <td align="center">
                                                <input type="checkbox" onclick="isChecked(this.checked);" value="10483" id="cb_" name="cb_">
                                            </td>
                                            <td align="center">2</td>

                                            <td>
                                                <a id="LinkButton1" title="Sửa" href="javascript:__doPostBack('controls1$ctl00$ctl00$ctl00$rpitems$ctl02$LinkButton1','')">Quản lý icon trang chủ</a>
                                            </td>
                                            <td align="center">ADV-Icon</td>
                                            <td align="center">1</td>
                                            <td align="center">
                                                <a id="LinkButton2" title="Thay đổi trạng thái" href="javascript:__doPostBack('controls1$ctl00$ctl00$ctl00$rpitems$ctl02$LinkButton2','')"><img src="https://vntravelsimple.com/templates/admin/images/iconupdate_c.png"></a>
                                            </td>
                                            <td align="center">
                                                <a id="LinkButton3" title="Sửa" href="javascript:__doPostBack('controls1$ctl00$ctl00$ctl00$rpitems$ctl02$LinkButton3','')"><img src="https://vntravelsimple.com/templates/admin/images/iconedit_c.png"></a>
                                                &nbsp; &nbsp;
                                                <a id="LinkButton4" title="Xóa" href="javascript:__doPostBack('controls1$ctl00$ctl00$ctl00$rpitems$ctl02$LinkButton4','')"><img src="https://vntravelsimple.com/templates/admin/images/icondelete_c.png"></a>
                                            </td>


                                        </tr>
                                    </tbody>

                                </table>


                            </div>



                        </div>
                        <div class="clr"></div>
                    </div>
                    <div class="m">
                        <div id="adminForm1">

                            <div id="pndetail">

                                <div style="width: 100%; display: block; margin: 0px;padding: 15px 0" id="parentHorizontalTab" class="divvalidate" novalidate="novalidate">
                                    <ul class="resp-tabs-list hor_1">
                                        <li class="resp-tab-item hor_1 resp-tab-active" aria-controls="hor_1_tab_item-0" role="tab" style="background-color: white; border-color: rgb(193, 193, 193);">Vị trí quảng cáo</li>
                                    </ul>
                                    <div class="resp-tabs-container hor_1" style="border-color: rgb(193, 193, 193);">
                                        <h2 class="resp-accordion hor_1 resp-tab-active" role="tab" aria-controls="hor_1_tab_item-0" style="background: none; border-color: rgb(193, 193, 193);"><span class="resp-arrow"></span>Vị trí quảng cáo</h2>
                                        <div class="resp-tab-content hor_1 resp-tab-content-active" aria-labelledby="hor_1_tab_item-0" style="display:block">
                                            <p>
                                                <span class="detail_error">
                                                </span>
                                            </p>
                                            <table cellspacing="1" class="admintable">
                                                <tbody>
                                                    <tr>
                                                        <td width="150" class="key">
                                                            <label for="txtuser">Tiêu đề</label>
                                                        </td>
                                                        <td>
                                                            <input name="controls1$ctl00$ctl00$ctl00$txtname" type="text" id="txtname" class="inputbox error" minlength="2" required="" aria-required="true" aria-invalid="true" style="width:364px;">
                                                            <a href="#" class="tooltip">
                                                                <img src="{{ asset('images/help-icon.png') }}">
                                                                <span><b>Tiêu đề</b><br>
                                                                    Nhập tên vị trí của quảng cáo vd: quảng cáo trang chủ, ...
                                                                </span>
                                                            </a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td width="150" class="key">
                                                            <label for="txtuser">Mã quảng cáo</label>
                                                        </td>
                                                        <td>
                                                            <input name="controls1$ctl00$ctl00$ctl00$txt_code" type="text" value="ADV-" id="txt_code" class="inputbox" style="width:150px;">
                                                            <a href="#" class="tooltip">
                                                                <img src="{{ asset('images/help-icon.png') }}">
                                                                <span><b>Mã quảng cáo</b><br>
                                                                    Mã quảng cáo phân biệt giữa các vị trí
                                                                </span>
                                                            </a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td width="150" class="key">
                                                            <label for="txtuser">Mô tả</label>
                                                        </td>
                                                        <td>
                                                            <textarea name="controls1$ctl00$ctl00$ctl00$txt_mota" rows="2" cols="20" id="txt_mota" class="inputbox" style="height:80px;width:500px;"></textarea>
                                                            <a href="#" class="tooltip">
                                                                <img src="{{ asset('images/help-icon.png') }}">
                                                                <span><b>Mô tả quảng cáo</b><br>
                                                                    Mô tả ngắn gọn cho vị trí quảng cáo
                                                                </span>
                                                            </a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="key">
                                                            <label for="listnhom">Thứ tự</label>
                                                        </td>
                                                        <td>
                                                            <input name="controls1$ctl00$ctl00$ctl00$txtorder" type="text" value="1" id="txtorder" class="input-order">
                                                            <a href="#" class="tooltip">
                                                                <img src="{{ asset('images/help-icon.png') }}">
                                                                <span><b>Thứ tự</b><br>
                                                                    Lựa chọn thứ tự hiện thị của vị trí quảng cáo
                                                                </span>
                                                            </a>
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td class="key">
                                                            <label for="listnhom">Trạng thái</label>
                                                        </td>
                                                        <td>
                                                            <input id="chkstatus" type="checkbox" name="controls1$ctl00$ctl00$ctl00$chkstatus"><label for="chkstatus"> Hiển thị</label>

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
                        <div class="clr"></div>
                    </div>
                </div>
            </div>

        </div>
    </div>

</div>

@endsection