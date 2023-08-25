@extends('/template/index')

@section('content')
<div id="page-wrapper">

    <div class="widget">
        <div class="widget-title">


            <div class="widget-title">
                <h4><i class="icon-reorder">
                        Quản lý nội dung độc lập</i></h4>
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
                                            <th class="title">Tiêu đề
                                            </th>

                                            <th style="text-align:center;" width="8%" class="title">Thứ tự
                                            </th>
                                            <th style="text-align:center;" width="8%" class="title">Trạng thái
                                            </th>
                                            <th style="text-align:center;" width="120px" class="title">Ngày tạo
                                            </th>
                                            <th width="110"></th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                        <tr class="row0">

                                            <td align="center">
                                                <input type="checkbox" onclick="isChecked(this.checked);" value="3363" id="cb_" name="cb_">
                                            </td>
                                            <td align="center">1</td>
                                            <td>
                                                <a id="LinkButton1" title="Sửa" href="javascript:__doPostBack('controls1$ctl00$ctl00$ctl00$rpitems$ctl01$LinkButton1','')">DK</a>
                                            </td>
                                            <td style="text-align:center;">
                                                1
                                            </td>
                                            <td style="text-align:center;">
                                                <a id="LinkButton2" title="Thay đổi trạng thái" href="javascript:__doPostBack('controls1$ctl00$ctl00$ctl00$rpitems$ctl01$LinkButton2','')"><img src="https://vntravelsimple.com/templates/admin/images/iconupdate_c.png"></a>
                                            </td>
                                            <td align="center">01/04/2023 10:55</td>
                                            <td align="center">
                                                <a id="LinkButton3" title="Sửa" href="javascript:__doPostBack('controls1$ctl00$ctl00$ctl00$rpitems$ctl01$LinkButton3','')"><img src="https://vntravelsimple.com/templates/admin/images/iconedit_c.png"></a>
                                                &nbsp; &nbsp;
                                                <a onclick="return confirm('Bạn có muốn xóa không?');" id="LinkButton4" title="Xóa" href="javascript:__doPostBack('controls1$ctl00$ctl00$ctl00$rpitems$ctl01$LinkButton4','')"><img src="https://vntravelsimple.com/templates/admin/images/icondelete_c.png"></a>
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