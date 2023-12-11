@extends('/template/index')

@section('content')
<div id="page-wrapper">
    <div class="widget-title">
        <h4><i class="icon-reorder-items">
                Danh sách sản phẩm</i></h4>
        <div class="ui-widget-content ui-corner-top ui-corner-bottom">
            <div id="toolbox">
                <div style="float: right; margin-right: 10px;" class="toolbox-content">
                    <table class="toolbar">
                        <tbody>
                            <tr>
                                <td align="center">
                                    <a id="lnkupdatepriceandorder" class="toolbar" href="javascript:__doPostBack('controls1$ctl00$ctl00$ctl00$lnkupdatepriceandorder','')">
                                        <span class="icon-ok-update"></span>
                                        Cập nhật giá, thứ tự
                                    </a>
                                </td>
                                <td align="center">
                                    <a href="#ex2" class="xuat" title="Xuất ra excel"><span class="fa fa-arrow-circle-o-down"></span> Xuất ra excel</a>

                                </td>
                                <td align="center">
                                    <a href="#ex3" class="nhap" title="Nhập từ excel"><span class="fa fa-arrow-circle-up"></span> Nhập từ excel</a>

                                </td>
                                <td align="center">


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
                                Tổng số sản phẩm: <span style="color: #A52A2A;">72</span>

                            </div>

                        </div>
                        <div class="span9">
                            <div class="pagination pagination-small pagination-right">
                                <input name="controls1$ctl00$ctl00$ctl00$txtkeysearch" type="text" id="txtkeysearch" class="inputbox-top" style="width:150px;"><select name="controls1$ctl00$ctl00$ctl00$ddlcatesearch" id="ddlcatesearch" class="inputbox-top-select" style="width:150px;">
                                    <option selected="selected" value="-1">Tất cả</option>
                                    <option value="11575">ĐẦM BẦU</option>
                                    <option value="11576">..ĐẦM CÔNG SỞ</option>
                                    <option value="11591">..ĐẦM FREESIZE</option>
                                    <option value="11593">..ĐẦM DỰ TIỆC</option>
                                    <option value="11603">..ĐẦM BÉ BÚ SAU SINH</option>
                                    <option value="12564">..ĐẦM CASUAL</option>
                                    <option value="11596">ĐỒ BỘ BẦU</option>
                                    <option value="12558">ÁO BẦU</option>
                                    <option value="12569">..ÁO SƠ MI</option>
                                    <option value="12557">QUẦN BẦU</option>
                                    <option value="12562">..QUẦN BẦU MẶC VÁY</option>
                                    <option value="12571">..QUẦN DÀI</option>
                                    <option value="12573">..QUẦN LỬNG VÀ SHORT</option>
                                    <option value="11597">ĐỒ LÓT BẦU</option>

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
                                    <option value="5">SX.Giá</option>

                                </select>
                                <select name="controls1$ctl00$ctl00$ctl00$ddlordertype" id="ddlordertype" class="inputbox-top-select" style="width:110px;">
                                    <option selected="selected" value="0">Giảm dần</option>
                                    <option value="1">Tăng dần</option>

                                </select>
                                <input type="submit" name="controls1$ctl00$ctl00$ctl00$btnsearch" value="Tìm kiếm" id="btnsearch" class="buton-css">
                            </div>
                            <div style="clear: both;"></div>
                        </div>
                    </div>
                    <div class="page-items">
                        <b>1</b> <a href="?mod=prod&amp;c=items&amp;cid=-1&amp;key=&amp;st=-1&amp;order=0&amp;ordertype=0&amp;p=2">2</a> <a href="?mod=prod&amp;c=items&amp;cid=-1&amp;key=&amp;st=-1&amp;order=0&amp;ordertype=0&amp;p=3">3</a> <a href="?mod=prod&amp;c=items&amp;cid=-1&amp;key=&amp;st=-1&amp;order=0&amp;ordertype=0&amp;p=4">4</a> <a href="?mod=prod&amp;c=items&amp;cid=-1&amp;key=&amp;st=-1&amp;order=0&amp;ordertype=0&amp;p=4">Trang cuối</a>
                    </div>

                    <table cellpadding="1" summary="" class="adminlist">
                        <thead>
                            <tr>
                                <th width="20" class="title">
                                    <input type="checkbox" id="chkToggle" value="" onclick="selectAll(this)" name="chkToggle">
                                </th>
                                <th width="80" class="title">Hình ảnh
                                </th>

                                <th class="title">Sản phẩm
                                </th>
                                <th style="width: 120px;" class="title">Đơn giá
                                </th>
                                <th style="width: 70px; text-align: center !important;" class="title">Thứ tự
                                </th>
                                <th style="width: 80px;" class="title">Lượt xem
                                </th>

                                <th width="90" style="text-align:center" class="title">Thao tác
                                </th>
                                <th width="140" style="text-align:center" class="title">Thời gian
                                </th>
                                <th width="80" style="text-align:center" class="title">Trạng thái
                                </th>
                                <th style="width: 120px;" class="title"></th>

                            </tr>
                        </thead>

                        <tbody>
                            <tr class="row0">
                                <td align="center">
                                    <input type="checkbox" onclick="isChecked(this.checked);" value="1361" id="cb_" name="cb_">
                                </td>
                                <td align="center">
                                    <img height="40" style="max-width:300px" src="http://dambaujiwoon.khoweb24h.com/uploads/products/ahihi4.jpg">
                                </td>
                                <td>
                                    <a id="LinkButton1" title="Sửa" href="javascript:__doPostBack('controls1$ctl00$ctl00$ctl00$rpitems$ctl01$LinkButton1','')">Áo lót su đúc</a>
                                    <p>Mã SP: A3</p>
                                </td>
                                <td>
                                    <input type="text" name="txtnewprice_1361" title="Giá mới" value="185000" class="txtiporder txtipnewp"><br>
                                    <input type="text" name="txtoldprice_1361" title="Giá cũ" value="250000" class="txtiporder txtipoldp">
                                </td>


                                <td align="center">
                                    <input type="text" name="txtorder_1361" value="1" class="txtiporder">
                                </td>
                                <td align="center">
                                    153
                                </td>


                                <td>
                                    <p class="sptime"><i class="ico-ucreate" title="Người tạo"></i>admin</p>
                                    <p class="sptime"><i class="ico-uupdate" title="Người cập nhật"></i>admin</p>
                                </td>
                                <td>
                                    <p class="sptime"><i class="ico-dcreate" title="Ngày tạo"></i>17/08/2020 16:18</p>
                                    <p class="sptime"><i class="ico-dupdate" title="Ngày cập nhật"></i>17/08/2020 16:19</p>
                                </td>
                                <td align="center">
                                    <a id="LinkButton2" title="Thay đổi trạng thái" href="javascript:__doPostBack('controls1$ctl00$ctl00$ctl00$rpitems$ctl01$LinkButton2','')"><img src="http://dambaujiwoon.khoweb24h.com/templates/admin/images/iconupdate_c.png"></a>
                                </td>
                                <td align="center">
                                    <a href="http://dambaujiwoon.khoweb24h.com/ao-lot-su-duc" target="_blank" title="Xem chi tiết"><img src="http://dambaujiwoon.khoweb24h.com/templates/admin/images/view.png"></a>&nbsp; &nbsp;
                                    <a href="/admin/?mod=prod&amp;c=pb&amp;id=1361" style="display:inline-block" title="Danh sách phiên bản"><img src="http://dambaujiwoon.khoweb24h.com/templates/admin/images/iconds.png"></a>&nbsp; &nbsp;
                                    <a href="/admin/?mod=prod&amp;c=items&amp;id=1361" style="display:inline-block" title="Chỉnh sửa"><img src="http://dambaujiwoon.khoweb24h.com/templates/admin/images/iconedit_c.png"></a>&nbsp; &nbsp;
                                    <a onclick="return confirm('Bạn có muốn xóa không?');" id="LinkButton5" title="Xóa" href="javascript:__doPostBack('controls1$ctl00$ctl00$ctl00$rpitems$ctl01$LinkButton5','')"><img src="http://dambaujiwoon.khoweb24h.com/templates/admin/images/icondelete_c.png"></a>

                                </td>
                            </tr>
                        </tbody>

                        <tbody>
                            <tr class="row1">
                                <td align="center">
                                    <input type="checkbox" onclick="isChecked(this.checked);" value="1360" id="cb_" name="cb_">
                                </td>
                                <td align="center">
                                    <img height="40" style="max-width:300px" src="http://dambaujiwoon.khoweb24h.com/uploads/products/da-thay-doi-kich-thuoc-2.jpg">
                                </td>
                                <td>
                                    <a id="LinkButton1" title="Sửa" href="javascript:__doPostBack('controls1$ctl00$ctl00$ctl00$rpitems$ctl02$LinkButton1','')">Áo lót bầu rảnh tay</a>
                                    <p>Mã SP: SKU00299</p>
                                </td>
                                <td>
                                    <input type="text" name="txtnewprice_1360" title="Giá mới" value="135000" class="txtiporder txtipnewp"><br>
                                    <input type="text" name="txtoldprice_1360" title="Giá cũ" value="200000" class="txtiporder txtipoldp">
                                </td>


                                <td align="center">
                                    <input type="text" name="txtorder_1360" value="1" class="txtiporder">
                                </td>
                                <td align="center">
                                    113
                                </td>


                                <td>
                                    <p class="sptime"><i class="ico-ucreate" title="Người tạo"></i>admin</p>
                                    <p class="sptime"><i class="ico-uupdate" title="Người cập nhật"></i>...</p>
                                </td>
                                <td>
                                    <p class="sptime"><i class="ico-dcreate" title="Ngày tạo"></i>17/08/2020 16:06</p>
                                    <p class="sptime"><i class="ico-dupdate" title="Ngày cập nhật"></i>...</p>
                                </td>
                                <td align="center">
                                    <a id="LinkButton2" title="Thay đổi trạng thái" href="javascript:__doPostBack('controls1$ctl00$ctl00$ctl00$rpitems$ctl02$LinkButton2','')"><img src="http://dambaujiwoon.khoweb24h.com/templates/admin/images/iconupdate_c.png"></a>
                                </td>
                                <td align="center">

                                    <a href="http://dambaujiwoon.khoweb24h.com/ao-lot-bau-ranh-tay" target="_blank" title="Xem chi tiết"><img src="http://dambaujiwoon.khoweb24h.com/templates/admin/images/view.png"></a>&nbsp; &nbsp;
                                    <a href="/admin/?mod=prod&amp;c=pb&amp;id=1360" style="display:inline-block" title="Danh sách phiên bản"><img src="http://dambaujiwoon.khoweb24h.com/templates/admin/images/iconds.png"></a>&nbsp; &nbsp;
                                    <a href="/admin/?mod=prod&amp;c=items&amp;id=1360" style="display:inline-block" title="Chỉnh sửa"><img src="http://dambaujiwoon.khoweb24h.com/templates/admin/images/iconedit_c.png"></a>&nbsp; &nbsp;
                                    <a onclick="return confirm('Bạn có muốn xóa không?');" id="LinkButton5" title="Xóa" href="javascript:__doPostBack('controls1$ctl00$ctl00$ctl00$rpitems$ctl02$LinkButton5','')"><img src="http://dambaujiwoon.khoweb24h.com/templates/admin/images/icondelete_c.png"></a>

                                </td>
                            </tr>
                        </tbody>

                        <tbody>
                            <tr class="row0">
                                <td align="center">
                                    <input type="checkbox" onclick="isChecked(this.checked);" value="1359" id="cb_" name="cb_">
                                </td>
                                <td align="center">
                                    <img height="40" style="max-width:300px" src="http://dambaujiwoon.khoweb24h.com/uploads/products/dang-ngan-6.jpg">
                                </td>
                                <td>
                                    <a id="LinkButton1" title="Sửa" href="javascript:__doPostBack('controls1$ctl00$ctl00$ctl00$rpitems$ctl03$LinkButton1','')">Đồ bầu cho bé bú</a>
                                    <p>Mã SP: SKU00298</p>
                                </td>
                                <td>
                                    <input type="text" name="txtnewprice_1359" title="Giá mới" value="230000" class="txtiporder txtipnewp"><br>
                                    <input type="text" name="txtoldprice_1359" title="Giá cũ" value="0" class="txtiporder txtipoldp">
                                </td>


                                <td align="center">
                                    <input type="text" name="txtorder_1359" value="1" class="txtiporder">
                                </td>
                                <td align="center">
                                    163
                                </td>


                                <td>
                                    <p class="sptime"><i class="ico-ucreate" title="Người tạo"></i>admin</p>
                                    <p class="sptime"><i class="ico-uupdate" title="Người cập nhật"></i>admin</p>
                                </td>
                                <td>
                                    <p class="sptime"><i class="ico-dcreate" title="Ngày tạo"></i>07/08/2020 16:52</p>
                                    <p class="sptime"><i class="ico-dupdate" title="Ngày cập nhật"></i>19/08/2020 09:24</p>
                                </td>
                                <td align="center">
                                    <a id="LinkButton2" title="Thay đổi trạng thái" href="javascript:__doPostBack('controls1$ctl00$ctl00$ctl00$rpitems$ctl03$LinkButton2','')"><img src="http://dambaujiwoon.khoweb24h.com/templates/admin/images/iconupdate_c.png"></a>
                                </td>
                                <td align="center">
                                    <a href="http://dambaujiwoon.khoweb24h.com/do-bau-cho-be-bu-163" target="_blank" title="Xem chi tiết"><img src="http://dambaujiwoon.khoweb24h.com/templates/admin/images/view.png"></a>&nbsp; &nbsp;
                                    <a href="/admin/?mod=prod&amp;c=pb&amp;id=1359" style="display:inline-block" title="Danh sách phiên bản"><img src="http://dambaujiwoon.khoweb24h.com/templates/admin/images/iconds.png"></a>&nbsp; &nbsp;
                                    <a href="/admin/?mod=prod&amp;c=items&amp;id=1359" style="display:inline-block" title="Chỉnh sửa"><img src="http://dambaujiwoon.khoweb24h.com/templates/admin/images/iconedit_c.png"></a>&nbsp; &nbsp;
                                    <a onclick="return confirm('Bạn có muốn xóa không?');" id="LinkButton5" title="Xóa" href="javascript:__doPostBack('controls1$ctl00$ctl00$ctl00$rpitems$ctl03$LinkButton5','')"><img src="http://dambaujiwoon.khoweb24h.com/templates/admin/images/icondelete_c.png"></a>

                                </td>
                            </tr>
                        </tbody>


                    </table>

                    <div class="page-items">
                        <b>1</b> <a href="?mod=prod&amp;c=items&amp;cid=-1&amp;key=&amp;st=-1&amp;order=0&amp;ordertype=0&amp;p=2">2</a> <a href="?mod=prod&amp;c=items&amp;cid=-1&amp;key=&amp;st=-1&amp;order=0&amp;ordertype=0&amp;p=3">3</a> <a href="?mod=prod&amp;c=items&amp;cid=-1&amp;key=&amp;st=-1&amp;order=0&amp;ordertype=0&amp;p=4">4</a> <a href="?mod=prod&amp;c=items&amp;cid=-1&amp;key=&amp;st=-1&amp;order=0&amp;ordertype=0&amp;p=4">Trang cuối</a>
                    </div>

                </div>


            </div>
            <div class="clr"></div>
        </div>
    </div>

    <div class="modal-backdrop md2" style="display:none">
        <div id="ex2" class="modal">
            <div class="modal-header ">
                <a href="#" rel="modal:close" class="close">X</a>
                <h4 class="modal-title">Xuất ra file excel</h4>
            </div>

            <div class="modal-body">
                <div class="">
                    <label class="next-label">Chọn sản phẩm cần xuất ra file excel</label>
                    <select name="controls1$ctl00$ctl00$ctl00$ddlexport" id="ddlexport" class="inputbox" style="width:100%;">
                        <option value="0">Sản phẩm trên trang hiện tại</option>
                        <option value="1">Sản phẩm trong danh mục</option>
                        <option value="2">Tất cả sản phẩm</option>

                    </select>
                    <br><br>
                    <select name="controls1$ctl00$ctl00$ctl00$ddlcateexport" id="ddlcateexport" class="inputbox" style="width:100%;">
                        <option value="11575">ĐẦM BẦU</option>
                        <option value="11576">..ĐẦM CÔNG SỞ</option>
                        <option value="11591">..ĐẦM FREESIZE</option>
                        <option value="11593">..ĐẦM DỰ TIỆC</option>
                        <option value="11603">..ĐẦM BÉ BÚ SAU SINH</option>
                        <option value="12564">..ĐẦM CASUAL</option>
                        <option value="11596">ĐỒ BỘ BẦU</option>
                        <option value="12558">ÁO BẦU</option>
                        <option value="12569">..ÁO SƠ MI</option>
                        <option value="12557">QUẦN BẦU</option>
                        <option value="12562">..QUẦN BẦU MẶC VÁY</option>
                        <option value="12571">..QUẦN DÀI</option>
                        <option value="12573">..QUẦN LỬNG VÀ SHORT</option>
                        <option value="11597">ĐỒ LÓT BẦU</option>

                    </select>
                </div>
            </div>
            <div class="modal-footer">
                <a href="#" rel="modal:close" class="btn btn-default bnthuy">Hủy</a>
                <a id="lnkexport" class="btn btn-primary" href="javascript:__doPostBack('controls1$ctl00$ctl00$ctl00$lnkexport','')">Xuất ra excel</a>
            </div>

        </div>
    </div>
    <div class="modal-backdrop md3" style="display:none">
        <div id="ex3" class="modal">
            <div class="modal-header ">
                <a href="#" rel="modal:close" class="close">X</a>
                <h4 class="modal-title">Nhập sản phẩm từ file excel</h4>
            </div>

            <div class="modal-body">
                <div class="">

                    <label class="next-label">Chọn danh mục chứa sản phẩm</label>
                    <select name="controls1$ctl00$ctl00$ctl00$ddlcateimport" id="ddlcateimport" class="inputbox" style="width:100%;">
                        <option value="11575">ĐẦM BẦU</option>
                        <option value="11576">..ĐẦM CÔNG SỞ</option>
                        <option value="11591">..ĐẦM FREESIZE</option>
                        <option value="11593">..ĐẦM DỰ TIỆC</option>
                        <option value="11603">..ĐẦM BÉ BÚ SAU SINH</option>
                        <option value="12564">..ĐẦM CASUAL</option>
                        <option value="11596">ĐỒ BỘ BẦU</option>
                        <option value="12558">ÁO BẦU</option>
                        <option value="12569">..ÁO SƠ MI</option>
                        <option value="12557">QUẦN BẦU</option>
                        <option value="12562">..QUẦN BẦU MẶC VÁY</option>
                        <option value="12571">..QUẦN DÀI</option>
                        <option value="12573">..QUẦN LỬNG VÀ SHORT</option>
                        <option value="11597">ĐỒ LÓT BẦU</option>

                    </select>
                    <br><br>
                    <label class="next-label">Chọn file excel</label>
                    <input type="file" name="controls1$ctl00$ctl00$ctl00$flexcel" id="flexcel">
                    <span style="display:block;color:#333;font-size:11px;margin-top:10px;background:#f0f0f0;padding:10px">Các sản phẩm phân biệt nhau bằng ID sản phẩm. Nếu cùng ID sản phẩm thì hệ thống sẽ tự cập nhật thông tin từ file excel, nếu ID sản phẩm trong file excel chưa có hoặc để trống thì hệ thống sẽ tự thêm sản phẩm vào danh mục đã được chọn bên trên.<br> File excel up lên phải theo cấu trúc của mẫu excel <a target="_blank" href="/uploads/files/temp/temp.xls">tại đây</a></span>
                </div>
            </div>
            <div class="modal-footer">
                <a href="#" rel="modal:close" class="btn btn-default bnthuy">Hủy</a>
                <a id="lnkimport" class="btn btn-primary" href="javascript:__doPostBack('controls1$ctl00$ctl00$ctl00$lnkimport','')">Cập nhật</a>
            </div>

        </div>
    </div>


    <script type="text/javascript">
        $(document).ready(function() {
            //We are binding onchange event using jQuery built-in change event
            $('#ddlSubject').change(function() {
                //get selected value and check if subject is selected else show alert box
                var SelectedValue = $("#ddlSubject").val();
                if (SelectedValue > 0) {
                    //get selected text and set to label
                    var SelectedText = $("#ddlSubject option:selected").text();
                    lblSelectedText.innerHTML = SelectedText;
                    //set selected value to label
                    lblSelectedValue.innerHTML = SelectedValue;
                } else {
                    //reset label values and show alert
                    lblSelectedText.innerHTML = "";
                    lblSelectedValue.innerHTML = "";
                    alert("Please select valid subject.");
                }
            });
        });
        $('#ddlexport').change(function() {
            var t = $(this).val();
            if (t == 1)
                $("#ddlcateexport").show();
            else
                $("#ddlcateexport").hide();
        })
        $(document).on("click", '.xuat', function() {
            $(".md2").show();
            $("#ex2").show();
        })
        $(document).on("click", '.nhap', function() {
            $(".md3").show();
            $("#ex3").show();
        })
        $(document).on("click", '.nhanban', function() {
            $(".md1").show();
            $("#ex1").show();
        })
        $(document).on("click", '.close', function() {
            $(".modal-backdrop").hide();
            $("#ex1").hide();
            $("#ex2").hide();
            $("#ex3").hide();
        })
        $(document).on("click", '.bnthuy', function() {
            $(".modal-backdrop").hide();
            $("#ex1").hide();
            $("#ex2").hide();
            $("#ex3").hide();
        })

        $(document).on("click", '.deltabprd', function() {
            var num = $("#hdnumtmp").val();
            if (num <= 1) {
                alert("Bạn không được xóa");
                return;
            }
            if (confirm("Bạn có muốn xóa không?")) {
                var id = $(this).parents('.record').attr('id');
                var stt = parseInt(num) - 1;
                $("#hdnumtmp").val(stt);
                $("#" + id).remove();
            }
        })

    </script>
    <style>
        table.admintable td table td {
            padding: 0px;
        }

        .modal-backdrop {
            background: rgba(0, 0, 0, 0.5);
        }

        #ddlcateexport {
            display: none;
        }
    </style>
</div>
@endsection