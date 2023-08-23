@extends('/template/index')

@section('content')

<div id="page-wrapper">


    <div class="widget">

        <div class="widget-title">


            <div class="widget-title">
                <h4><i class="icon-reorder">
                        Quản lý menu chính</i></h4>
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
                                            <th width="3%" class="title">#</th>

                                            <th class="title">Tiêu đề
                                            </th>

                                            <th align="center" width="8%" class="title">Thứ tự
                                            </th>
                                            <th width="8%" class="title">Trạng thái
                                            </th>
                                            <th width="10%" nowrap="nowrap" class="title">Ngày cập nhật
                                            </th>
                                            <th width="80"></th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                        <tr class="row0">

                                            <td align="center">
                                                <input type="checkbox" onclick="isChecked(this.checked);" value="10420" id="cb_" name="cb_">
                                            </td>
                                            <td align="center">1</td>
                                            <td>
                                                <a id="LinkButton1" title="Sửa" href="javascript:__doPostBack('controls1$ctl00$ctl00$ctl00$rpitems$ctl01$LinkButton1','')">Trang chủ</a>
                                            </td>

                                            <td align="center">1</td>
                                            <td align="center">
                                                <a id="LinkButton2" title="Thay đổi trạng thái" href="javascript:__doPostBack('controls1$ctl00$ctl00$ctl00$rpitems$ctl01$LinkButton2','')"><img src="https://vntravelsimple.com/templates/admin/images/iconupdate_c.png"></a>
                                            </td>
                                            <td align="center">17/11/2018 11:26:54</td>

                                            <td align="center">
                                                <a id="LinkButton4" title="Sửa" href="javascript:__doPostBack('controls1$ctl00$ctl00$ctl00$rpitems$ctl01$LinkButton4','')"><img src="https://vntravelsimple.com/templates/admin/images/iconedit_c.png"></a>
                                                &nbsp; &nbsp;
                                                <a onclick="return confirm('Bạn có muốn xóa không?');" id="LinkButton5" title="Xóa" href="javascript:__doPostBack('controls1$ctl00$ctl00$ctl00$rpitems$ctl01$LinkButton5','')"><img src="https://vntravelsimple.com/templates/admin/images/icondelete_c.png"></a>
                                            </td>

                                        </tr>
                                    </tbody>

                                    <tbody>
                                        <tr class="row1">

                                            <td align="center">
                                                <input type="checkbox" onclick="isChecked(this.checked);" value="10421" id="cb_" name="cb_">
                                            </td>
                                            <td align="center">2</td>
                                            <td>
                                                <a id="LinkButton1" title="Sửa" href="javascript:__doPostBack('controls1$ctl00$ctl00$ctl00$rpitems$ctl02$LinkButton1','')">Về chúng tôi</a>
                                            </td>

                                            <td align="center">1</td>
                                            <td align="center">
                                                <a id="LinkButton2" title="Thay đổi trạng thái" href="javascript:__doPostBack('controls1$ctl00$ctl00$ctl00$rpitems$ctl02$LinkButton2','')"><img src="https://vntravelsimple.com/templates/admin/images/iconupdate_c.png"></a>
                                            </td>
                                            <td align="center">17/11/2018 11:27:10</td>

                                            <td align="center">
                                                <a id="LinkButton4" title="Sửa" href="javascript:__doPostBack('controls1$ctl00$ctl00$ctl00$rpitems$ctl02$LinkButton4','')"><img src="https://vntravelsimple.com/templates/admin/images/iconedit_c.png"></a>
                                                &nbsp; &nbsp;
                                                <a onclick="return confirm('Bạn có muốn xóa không?');" id="LinkButton5" title="Xóa" href="javascript:__doPostBack('controls1$ctl00$ctl00$ctl00$rpitems$ctl02$LinkButton5','')"><img src="https://vntravelsimple.com/templates/admin/images/icondelete_c.png"></a>
                                            </td>

                                        </tr>
                                    </tbody>

                                    <tbody>
                                        <tr class="row0">

                                            <td align="center">
                                                <input type="checkbox" onclick="isChecked(this.checked);" value="10427" id="cb_" name="cb_">
                                            </td>
                                            <td align="center">3</td>
                                            <td>
                                                <a id="LinkButton1" title="Sửa" href="javascript:__doPostBack('controls1$ctl00$ctl00$ctl00$rpitems$ctl03$LinkButton1','')">Sản phẩm</a>
                                            </td>

                                            <td align="center">2</td>
                                            <td align="center">
                                                <a id="LinkButton2" title="Thay đổi trạng thái" href="javascript:__doPostBack('controls1$ctl00$ctl00$ctl00$rpitems$ctl03$LinkButton2','')"><img src="https://vntravelsimple.com/templates/admin/images/iconupdate_c.png"></a>
                                            </td>
                                            <td align="center">29/11/2018 15:14:03</td>

                                            <td align="center">
                                                <a id="LinkButton4" title="Sửa" href="javascript:__doPostBack('controls1$ctl00$ctl00$ctl00$rpitems$ctl03$LinkButton4','')"><img src="https://vntravelsimple.com/templates/admin/images/iconedit_c.png"></a>
                                                &nbsp; &nbsp;
                                                <a onclick="return confirm('Bạn có muốn xóa không?');" id="LinkButton5" title="Xóa" href="javascript:__doPostBack('controls1$ctl00$ctl00$ctl00$rpitems$ctl03$LinkButton5','')"><img src="https://vntravelsimple.com/templates/admin/images/icondelete_c.png"></a>
                                            </td>

                                        </tr>
                                    </tbody>

                                    <tbody>
                                        <tr class="row1">

                                            <td align="center">
                                                <input type="checkbox" onclick="isChecked(this.checked);" value="10455" id="cb_" name="cb_">
                                            </td>
                                            <td align="center">4</td>
                                            <td>
                                                ......<a id="LinkButton1" title="Sửa" href="javascript:__doPostBack('controls1$ctl00$ctl00$ctl00$rpitems$ctl04$LinkButton1','')">sub-menu-1</a>
                                            </td>

                                            <td align="center">1</td>
                                            <td align="center">
                                                <a id="LinkButton2" title="Thay đổi trạng thái" href="javascript:__doPostBack('controls1$ctl00$ctl00$ctl00$rpitems$ctl04$LinkButton2','')"><img src="https://vntravelsimple.com/templates/admin/images/iconupdate_c.png"></a>
                                            </td>
                                            <td align="center">16/07/2019 09:49:29</td>

                                            <td align="center">
                                                <a id="LinkButton4" title="Sửa" href="javascript:__doPostBack('controls1$ctl00$ctl00$ctl00$rpitems$ctl04$LinkButton4','')"><img src="https://vntravelsimple.com/templates/admin/images/iconedit_c.png"></a>
                                                &nbsp; &nbsp;
                                                <a onclick="return confirm('Bạn có muốn xóa không?');" id="LinkButton5" title="Xóa" href="javascript:__doPostBack('controls1$ctl00$ctl00$ctl00$rpitems$ctl04$LinkButton5','')"><img src="https://vntravelsimple.com/templates/admin/images/icondelete_c.png"></a>
                                            </td>

                                        </tr>
                                    </tbody>

                                    <tbody>
                                        <tr class="row0">

                                            <td align="center">
                                                <input type="checkbox" onclick="isChecked(this.checked);" value="10457" id="cb_" name="cb_">
                                            </td>
                                            <td align="center">5</td>
                                            <td>
                                                .........<a id="LinkButton1" title="Sửa" href="javascript:__doPostBack('controls1$ctl00$ctl00$ctl00$rpitems$ctl05$LinkButton1','')">sub-menu-3</a>
                                            </td>

                                            <td align="center">1</td>
                                            <td align="center">
                                                <a id="LinkButton2" title="Thay đổi trạng thái" href="javascript:__doPostBack('controls1$ctl00$ctl00$ctl00$rpitems$ctl05$LinkButton2','')"><img src="https://vntravelsimple.com/templates/admin/images/iconupdate_c.png"></a>
                                            </td>
                                            <td align="center">16/07/2019 09:49:48</td>

                                            <td align="center">
                                                <a id="LinkButton4" title="Sửa" href="javascript:__doPostBack('controls1$ctl00$ctl00$ctl00$rpitems$ctl05$LinkButton4','')"><img src="https://vntravelsimple.com/templates/admin/images/iconedit_c.png"></a>
                                                &nbsp; &nbsp;
                                                <a onclick="return confirm('Bạn có muốn xóa không?');" id="LinkButton5" title="Xóa" href="javascript:__doPostBack('controls1$ctl00$ctl00$ctl00$rpitems$ctl05$LinkButton5','')"><img src="https://vntravelsimple.com/templates/admin/images/icondelete_c.png"></a>
                                            </td>

                                        </tr>
                                    </tbody>

                                    <tbody>
                                        <tr class="row1">

                                            <td align="center">
                                                <input type="checkbox" onclick="isChecked(this.checked);" value="10456" id="cb_" name="cb_">
                                            </td>
                                            <td align="center">6</td>
                                            <td>
                                                ......<a id="LinkButton1" title="Sửa" href="javascript:__doPostBack('controls1$ctl00$ctl00$ctl00$rpitems$ctl06$LinkButton1','')">sub-menu-2</a>
                                            </td>

                                            <td align="center">1</td>
                                            <td align="center">
                                                <a id="LinkButton2" title="Thay đổi trạng thái" href="javascript:__doPostBack('controls1$ctl00$ctl00$ctl00$rpitems$ctl06$LinkButton2','')"><img src="https://vntravelsimple.com/templates/admin/images/iconupdate_c.png"></a>
                                            </td>
                                            <td align="center">16/07/2019 09:49:41</td>

                                            <td align="center">
                                                <a id="LinkButton4" title="Sửa" href="javascript:__doPostBack('controls1$ctl00$ctl00$ctl00$rpitems$ctl06$LinkButton4','')"><img src="https://vntravelsimple.com/templates/admin/images/iconedit_c.png"></a>
                                                &nbsp; &nbsp;
                                                <a onclick="return confirm('Bạn có muốn xóa không?');" id="LinkButton5" title="Xóa" href="javascript:__doPostBack('controls1$ctl00$ctl00$ctl00$rpitems$ctl06$LinkButton5','')"><img src="https://vntravelsimple.com/templates/admin/images/icondelete_c.png"></a>
                                            </td>

                                        </tr>
                                    </tbody>

                                    <tbody>
                                        <tr class="row0">

                                            <td align="center">
                                                <input type="checkbox" onclick="isChecked(this.checked);" value="10458" id="cb_" name="cb_">
                                            </td>
                                            <td align="center">7</td>
                                            <td>
                                                .........<a id="LinkButton1" title="Sửa" href="javascript:__doPostBack('controls1$ctl00$ctl00$ctl00$rpitems$ctl07$LinkButton1','')">sub-menu-4</a>
                                            </td>

                                            <td align="center">1</td>
                                            <td align="center">
                                                <a id="LinkButton2" title="Thay đổi trạng thái" href="javascript:__doPostBack('controls1$ctl00$ctl00$ctl00$rpitems$ctl07$LinkButton2','')"><img src="https://vntravelsimple.com/templates/admin/images/iconupdate_c.png"></a>
                                            </td>
                                            <td align="center">16/07/2019 09:49:58</td>

                                            <td align="center">
                                                <a id="LinkButton4" title="Sửa" href="javascript:__doPostBack('controls1$ctl00$ctl00$ctl00$rpitems$ctl07$LinkButton4','')"><img src="https://vntravelsimple.com/templates/admin/images/iconedit_c.png"></a>
                                                &nbsp; &nbsp;
                                                <a onclick="return confirm('Bạn có muốn xóa không?');" id="LinkButton5" title="Xóa" href="javascript:__doPostBack('controls1$ctl00$ctl00$ctl00$rpitems$ctl07$LinkButton5','')"><img src="https://vntravelsimple.com/templates/admin/images/icondelete_c.png"></a>
                                            </td>

                                        </tr>
                                    </tbody>

                                    <tbody>
                                        <tr class="row1">

                                            <td align="center">
                                                <input type="checkbox" onclick="isChecked(this.checked);" value="10430" id="cb_" name="cb_">
                                            </td>
                                            <td align="center">8</td>
                                            <td>
                                                <a id="LinkButton1" title="Sửa" href="javascript:__doPostBack('controls1$ctl00$ctl00$ctl00$rpitems$ctl08$LinkButton1','')">Tin tức</a>
                                            </td>

                                            <td align="center">2</td>
                                            <td align="center">
                                                <a id="LinkButton2" title="Thay đổi trạng thái" href="javascript:__doPostBack('controls1$ctl00$ctl00$ctl00$rpitems$ctl08$LinkButton2','')"><img src="https://vntravelsimple.com/templates/admin/images/iconupdate_c.png"></a>
                                            </td>
                                            <td align="center">28/11/2018 11:05:48</td>

                                            <td align="center">
                                                <a id="LinkButton4" title="Sửa" href="javascript:__doPostBack('controls1$ctl00$ctl00$ctl00$rpitems$ctl08$LinkButton4','')"><img src="https://vntravelsimple.com/templates/admin/images/iconedit_c.png"></a>
                                                &nbsp; &nbsp;
                                                <a onclick="return confirm('Bạn có muốn xóa không?');" id="LinkButton5" title="Xóa" href="javascript:__doPostBack('controls1$ctl00$ctl00$ctl00$rpitems$ctl08$LinkButton5','')"><img src="https://vntravelsimple.com/templates/admin/images/icondelete_c.png"></a>
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