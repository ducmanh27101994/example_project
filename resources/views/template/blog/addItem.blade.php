@extends('/template/index')

@section('content')
<div id="page-wrapper">
    <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
    <script>
        $(function() {
            $("#txt_updatetime").datepicker({
                dateFormat: 'dd/mm/yy'
            });

        });
    </script>
    <div class="widget-title">

        <h4><i class="icon-reorder-items">
                Thêm tin tức</i></h4>
        <div class="ui-corner-top ui-corner-bottom">
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

                                </td>

                                <td align="center">

                                </td>
                                <td align="center">
                                    <a id="lnkupdate" class="toolbar" href="javascript:__doPostBack('controls1$ctl00$ctl00$ctl00$lnkupdate','')">
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
    <div id="element-box">
        <div class="m">
            <div id="adminForm1">

                <div id="pndetail">

                    <span class="detail_error">
                    </span>
                    <div id="parentHorizontalTabcontent" style="display: block; width: 100%; margin: 0px;">
                        <ul class="resp-tabs-list hor_1">
                            <li class="resp-tab-item hor_1 resp-tab-active" aria-controls="hor_1_tab_item-0" role="tab" style="background-color: rgb(255, 255, 255); border-color: rgb(193, 193, 193);">Thông tin chung</li>
                            <li class="resp-tab-item hor_1" aria-controls="hor_1_tab_item-1" role="tab" style="background-color: rgb(245, 245, 245);">Cấu hình SEO</li>
                        </ul>
                        <div class="resp-tabs-container hor_1" style="border-color: rgb(193, 193, 193);">

                            <h2 class="resp-accordion hor_1 resp-tab-active" role="tab" aria-controls="hor_1_tab_item-0" style="background: none; border-color: rgb(193, 193, 193);"><span class="resp-arrow"></span>Thông tin chung</h2>
                            <div class="resp-tab-content hor_1 resp-tab-content-active" aria-labelledby="hor_1_tab_item-0" style="display:block">
                                <div class="row">
                                    <div class="col-sm-8">
                                        <div class="block_sp">
                                            <div class="form-group">
                                                <label class="next-label">Tiêu đề tin</label> <a href="#" class="tooltip">
                                                    <img src="{{ asset('images/help-icon.png') }}">
                                                    <span><b>Tiêu đề tin</b><br>
                                                        Nhập tiêu đề tin, độ dài tiêu đề không quá 150 ký tự
                                                    </span>
                                                </a>
                                                <input name="controls1$ctl00$ctl00$ctl00$txtnewsname" type="text" id="txtnewsname" class="inputbox" placeholder="Nhập tiêu đề tin" style="width:100%;">
                                            </div>
                                            <div class="form-group">
                                                <label class="next-label">Mô tả</label>
                                                <textarea name="controls1$ctl00$ctl00$ctl00$txtdesc" rows="2" cols="20" id="txtdesc" class="inputbox " style="height:80px;width:100%;"></textarea>

                                            </div>
                                            <div class="form-group">
                                                <label class="next-label">Chi tiết</label>
                                                <textarea name="controls1$ctl00$ctl00$ctl00$txtcontent" rows="2" cols="20" id="txtcontent" style="height: 400px; visibility: hidden; display: none;"></textarea><span id="cke_txtcontent" class="cke_skin_kama cke_1 cke_editor_txtcontent" dir="ltr" title="" lang="vi" tabindex="0" role="application" aria-labelledby="cke_txtcontent_arialbl"><span id="cke_txtcontent_arialbl" class="cke_voice_label">Bộ soạn thảo</span><span class="cke_browser_webkit" role="presentation"><span class="cke_wrapper cke_ltr" role="presentation">
                                                            <table class="cke_editor" border="0" cellspacing="0" cellpadding="0" role="presentation">
                                                                <tbody>
                                                                    <tr role="presentation">
                                                                        <td id="cke_top_txtcontent" class="cke_top" role="presentation">
                                                                            <div class="cke_toolbox" role="group" aria-labelledby="cke_6" onmousedown="return false;"><span id="cke_6" class="cke_voice_label">Thanh công cụ</span><span id="cke_7" class="cke_toolbar" aria-labelledby="cke_7_label" role="toolbar"><span id="cke_7_label" class="cke_voice_label">Tài liệu</span><span class="cke_toolbar_start"></span><span class="cke_toolgroup" role="presentation"><span class="cke_button"><a id="cke_8" class="cke_off cke_button_source" "="" href=" javascript:void('Mã HTML')" title="Mã HTML" tabindex="-1" hidefocus="true" role="button" aria-labelledby="cke_8_label" onkeydown="return CKEDITOR.tools.callFunction(4, event);" onfocus="return CKEDITOR.tools.callFunction(5, event);" onclick="CKEDITOR.tools.callFunction(6, this); return false;"><span class="cke_icon">&nbsp;</span><span id="cke_8_label" class="cke_label">Mã HTML</span></a></span><span class="cke_separator" role="separator"></span><span class="cke_button"><a id="cke_9" class="cke_off cke_button_save" "="" href=" javascript:void('Lưu')" title="Lưu" tabindex="-1" hidefocus="true" role="button" aria-labelledby="cke_9_label" onkeydown="return CKEDITOR.tools.callFunction(7, event);" onfocus="return CKEDITOR.tools.callFunction(8, event);" onclick="CKEDITOR.tools.callFunction(9, this); return false;"><span class="cke_icon">&nbsp;</span><span id="cke_9_label" class="cke_label">Lưu</span></a></span><span class="cke_button"><a id="cke_10" class="cke_off cke_button_newpage" "="" href=" javascript:void('Trang mới')" title="Trang mới" tabindex="-1" hidefocus="true" role="button" aria-labelledby="cke_10_label" onkeydown="return CKEDITOR.tools.callFunction(10, event);" onfocus="return CKEDITOR.tools.callFunction(11, event);" onclick="CKEDITOR.tools.callFunction(12, this); return false;"><span class="cke_icon">&nbsp;</span><span id="cke_10_label" class="cke_label">Trang mới</span></a></span><span class="cke_button"><a id="cke_11" class="cke_off cke_button_preview" "="" href=" javascript:void('Xem trước')" title="Xem trước" tabindex="-1" hidefocus="true" role="button" aria-labelledby="cke_11_label" onkeydown="return CKEDITOR.tools.callFunction(13, event);" onfocus="return CKEDITOR.tools.callFunction(14, event);" onclick="CKEDITOR.tools.callFunction(15, this); return false;"><span class="cke_icon">&nbsp;</span><span id="cke_11_label" class="cke_label">Xem trước</span></a></span><span class="cke_button"><a id="cke_12" class="cke_off cke_button_print" "="" href=" javascript:void('In')" title="In" tabindex="-1" hidefocus="true" role="button" aria-labelledby="cke_12_label" onkeydown="return CKEDITOR.tools.callFunction(16, event);" onfocus="return CKEDITOR.tools.callFunction(17, event);" onclick="CKEDITOR.tools.callFunction(18, this); return false;"><span class="cke_icon">&nbsp;</span><span id="cke_12_label" class="cke_label">In</span></a></span><span class="cke_separator" role="separator"></span><span class="cke_button"><a id="cke_13" class="cke_off cke_button_templates" "="" href=" javascript:void('Mẫu dựng sẵn')" title="Mẫu dựng sẵn" tabindex="-1" hidefocus="true" role="button" aria-labelledby="cke_13_label" onkeydown="return CKEDITOR.tools.callFunction(19, event);" onfocus="return CKEDITOR.tools.callFunction(20, event);" onclick="CKEDITOR.tools.callFunction(21, this); return false;"><span class="cke_icon">&nbsp;</span><span id="cke_13_label" class="cke_label">Mẫu dựng sẵn</span></a></span></span><span class="cke_toolbar_end"></span></span><span id="cke_14" class="cke_toolbar" aria-labelledby="cke_14_label" role="toolbar"><span id="cke_14_label" class="cke_voice_label">Clipboard/Undo</span><span class="cke_toolbar_start"></span><span class="cke_toolgroup" role="presentation"><span class="cke_button"><a id="cke_15" class="cke_button_cut cke_disabled" "="" href=" javascript:void('Cắt')" title="Cắt" tabindex="-1" hidefocus="true" role="button" aria-labelledby="cke_15_label" onkeydown="return CKEDITOR.tools.callFunction(22, event);" onfocus="return CKEDITOR.tools.callFunction(23, event);" onclick="CKEDITOR.tools.callFunction(24, this); return false;" aria-disabled="true"><span class="cke_icon">&nbsp;</span><span id="cke_15_label" class="cke_label">Cắt</span></a></span><span class="cke_button"><a id="cke_16" class="cke_button_copy cke_disabled" "="" href=" javascript:void('Sao chép')" title="Sao chép" tabindex="-1" hidefocus="true" role="button" aria-labelledby="cke_16_label" onkeydown="return CKEDITOR.tools.callFunction(25, event);" onfocus="return CKEDITOR.tools.callFunction(26, event);" onclick="CKEDITOR.tools.callFunction(27, this); return false;" aria-disabled="true"><span class="cke_icon">&nbsp;</span><span id="cke_16_label" class="cke_label">Sao chép</span></a></span><span class="cke_button"><a id="cke_17" class="cke_off cke_button_paste" "="" href=" javascript:void('Dán')" title="Dán" tabindex="-1" hidefocus="true" role="button" aria-labelledby="cke_17_label" onkeydown="return CKEDITOR.tools.callFunction(28, event);" onfocus="return CKEDITOR.tools.callFunction(29, event);" onclick="CKEDITOR.tools.callFunction(30, this); return false;"><span class="cke_icon">&nbsp;</span><span id="cke_17_label" class="cke_label">Dán</span></a></span><span class="cke_button"><a id="cke_18" class="cke_off cke_button_pastetext" "="" href=" javascript:void('Dán theo định dạng văn bản thuần')" title="Dán theo định dạng văn bản thuần" tabindex="-1" hidefocus="true" role="button" aria-labelledby="cke_18_label" onkeydown="return CKEDITOR.tools.callFunction(31, event);" onfocus="return CKEDITOR.tools.callFunction(32, event);" onclick="CKEDITOR.tools.callFunction(33, this); return false;"><span class="cke_icon">&nbsp;</span><span id="cke_18_label" class="cke_label">Dán theo định dạng văn bản thuần</span></a></span><span class="cke_button"><a id="cke_19" class="cke_off cke_button_pastefromword" "="" href=" javascript:void('Dán với định dạng Word')" title="Dán với định dạng Word" tabindex="-1" hidefocus="true" role="button" aria-labelledby="cke_19_label" onkeydown="return CKEDITOR.tools.callFunction(34, event);" onfocus="return CKEDITOR.tools.callFunction(35, event);" onclick="CKEDITOR.tools.callFunction(36, this); return false;"><span class="cke_icon">&nbsp;</span><span id="cke_19_label" class="cke_label">Dán với định dạng Word</span></a></span><span class="cke_separator" role="separator"></span><span class="cke_button"><a id="cke_20" class="cke_button_undo cke_disabled" "="" href=" javascript:void('Khôi phục thao tác')" title="Khôi phục thao tác" tabindex="-1" hidefocus="true" role="button" aria-labelledby="cke_20_label" onkeydown="return CKEDITOR.tools.callFunction(37, event);" onfocus="return CKEDITOR.tools.callFunction(38, event);" onclick="CKEDITOR.tools.callFunction(39, this); return false;" aria-disabled="true"><span class="cke_icon">&nbsp;</span><span id="cke_20_label" class="cke_label">Khôi phục thao tác</span></a></span><span class="cke_button"><a id="cke_21" class="cke_button_redo cke_disabled" "="" href=" javascript:void('Làm lại thao tác')" title="Làm lại thao tác" tabindex="-1" hidefocus="true" role="button" aria-labelledby="cke_21_label" onkeydown="return CKEDITOR.tools.callFunction(40, event);" onfocus="return CKEDITOR.tools.callFunction(41, event);" onclick="CKEDITOR.tools.callFunction(42, this); return false;" aria-disabled="true"><span class="cke_icon">&nbsp;</span><span id="cke_21_label" class="cke_label">Làm lại thao tác</span></a></span></span><span class="cke_toolbar_end"></span></span><span id="cke_22" class="cke_toolbar" aria-labelledby="cke_22_label" role="toolbar"><span id="cke_22_label" class="cke_voice_label">Chỉnh sửa</span><span class="cke_toolbar_start"></span><span class="cke_toolgroup" role="presentation"><span class="cke_button"><a id="cke_23" class="cke_off cke_button_find" "="" href=" javascript:void('Tìm kiếm')" title="Tìm kiếm" tabindex="-1" hidefocus="true" role="button" aria-labelledby="cke_23_label" onkeydown="return CKEDITOR.tools.callFunction(43, event);" onfocus="return CKEDITOR.tools.callFunction(44, event);" onclick="CKEDITOR.tools.callFunction(45, this); return false;"><span class="cke_icon">&nbsp;</span><span id="cke_23_label" class="cke_label">Tìm kiếm</span></a></span><span class="cke_button"><a id="cke_24" class="cke_off cke_button_replace" "="" href=" javascript:void('Thay thế')" title="Thay thế" tabindex="-1" hidefocus="true" role="button" aria-labelledby="cke_24_label" onkeydown="return CKEDITOR.tools.callFunction(46, event);" onfocus="return CKEDITOR.tools.callFunction(47, event);" onclick="CKEDITOR.tools.callFunction(48, this); return false;"><span class="cke_icon">&nbsp;</span><span id="cke_24_label" class="cke_label">Thay thế</span></a></span><span class="cke_separator" role="separator"></span><span class="cke_button"><a id="cke_25" class="cke_off cke_button_selectAll" "="" href=" javascript:void('Chọn tất cả')" title="Chọn tất cả" tabindex="-1" hidefocus="true" role="button" aria-labelledby="cke_25_label" onkeydown="return CKEDITOR.tools.callFunction(49, event);" onfocus="return CKEDITOR.tools.callFunction(50, event);" onclick="CKEDITOR.tools.callFunction(51, this); return false;"><span class="cke_icon">&nbsp;</span><span id="cke_25_label" class="cke_label">Chọn tất cả</span></a></span><span class="cke_separator" role="separator"></span><span class="cke_button"><a id="cke_26" class="cke_off cke_button_checkspell" "="" href=" javascript:void('Kiểm tra chính tả')" title="Kiểm tra chính tả" tabindex="-1" hidefocus="true" role="button" aria-labelledby="cke_26_label" onkeydown="return CKEDITOR.tools.callFunction(52, event);" onfocus="return CKEDITOR.tools.callFunction(53, event);" onclick="CKEDITOR.tools.callFunction(54, this); return false;"><span class="cke_icon">&nbsp;</span><span id="cke_26_label" class="cke_label">Kiểm tra chính tả</span></a></span><span class="cke_button"><a id="cke_27" class="cke_off cke_button_scayt" "="" href=" javascript:void('Kiểm tra chính tả ngay khi gõ chữ (SCAYT)')" title="Kiểm tra chính tả ngay khi gõ chữ (SCAYT)" tabindex="-1" hidefocus="true" role="button" aria-labelledby="cke_27_label" aria-haspopup="true" onkeydown="return CKEDITOR.tools.callFunction(55, event);" onfocus="return CKEDITOR.tools.callFunction(56, event);" onclick="CKEDITOR.tools.callFunction(57, this); return false;"><span class="cke_icon">&nbsp;</span><span id="cke_27_label" class="cke_label">Kiểm tra chính tả ngay khi gõ chữ (SCAYT)</span><span class="cke_buttonarrow">&nbsp;</span></a></span></span><span class="cke_toolbar_end"></span></span><span id="cke_28" class="cke_toolbar" aria-labelledby="cke_28_label" role="toolbar"><span id="cke_28_label" class="cke_voice_label">Bảng biểu</span><span class="cke_toolbar_start"></span><span class="cke_toolgroup" role="presentation"><span class="cke_button"><a id="cke_29" class="cke_off cke_button_form" "="" href=" javascript:void('Biểu mẫu')" title="Biểu mẫu" tabindex="-1" hidefocus="true" role="button" aria-labelledby="cke_29_label" onkeydown="return CKEDITOR.tools.callFunction(58, event);" onfocus="return CKEDITOR.tools.callFunction(59, event);" onclick="CKEDITOR.tools.callFunction(60, this); return false;"><span class="cke_icon">&nbsp;</span><span id="cke_29_label" class="cke_label">Biểu mẫu</span></a></span><span class="cke_button"><a id="cke_30" class="cke_off cke_button_checkbox" "="" href=" javascript:void('Nút kiểm')" title="Nút kiểm" tabindex="-1" hidefocus="true" role="button" aria-labelledby="cke_30_label" onkeydown="return CKEDITOR.tools.callFunction(61, event);" onfocus="return CKEDITOR.tools.callFunction(62, event);" onclick="CKEDITOR.tools.callFunction(63, this); return false;"><span class="cke_icon">&nbsp;</span><span id="cke_30_label" class="cke_label">Nút kiểm</span></a></span><span class="cke_button"><a id="cke_31" class="cke_off cke_button_radio" "="" href=" javascript:void('Nút chọn')" title="Nút chọn" tabindex="-1" hidefocus="true" role="button" aria-labelledby="cke_31_label" onkeydown="return CKEDITOR.tools.callFunction(64, event);" onfocus="return CKEDITOR.tools.callFunction(65, event);" onclick="CKEDITOR.tools.callFunction(66, this); return false;"><span class="cke_icon">&nbsp;</span><span id="cke_31_label" class="cke_label">Nút chọn</span></a></span><span class="cke_button"><a id="cke_32" class="cke_off cke_button_textfield" "="" href=" javascript:void('Trường văn bản')" title="Trường văn bản" tabindex="-1" hidefocus="true" role="button" aria-labelledby="cke_32_label" onkeydown="return CKEDITOR.tools.callFunction(67, event);" onfocus="return CKEDITOR.tools.callFunction(68, event);" onclick="CKEDITOR.tools.callFunction(69, this); return false;"><span class="cke_icon">&nbsp;</span><span id="cke_32_label" class="cke_label">Trường văn bản</span></a></span><span class="cke_button"><a id="cke_33" class="cke_off cke_button_textarea" "="" href=" javascript:void('Vùng văn bản')" title="Vùng văn bản" tabindex="-1" hidefocus="true" role="button" aria-labelledby="cke_33_label" onkeydown="return CKEDITOR.tools.callFunction(70, event);" onfocus="return CKEDITOR.tools.callFunction(71, event);" onclick="CKEDITOR.tools.callFunction(72, this); return false;"><span class="cke_icon">&nbsp;</span><span id="cke_33_label" class="cke_label">Vùng văn bản</span></a></span><span class="cke_button"><a id="cke_34" class="cke_off cke_button_select" "="" href=" javascript:void('Ô chọn')" title="Ô chọn" tabindex="-1" hidefocus="true" role="button" aria-labelledby="cke_34_label" onkeydown="return CKEDITOR.tools.callFunction(73, event);" onfocus="return CKEDITOR.tools.callFunction(74, event);" onclick="CKEDITOR.tools.callFunction(75, this); return false;"><span class="cke_icon">&nbsp;</span><span id="cke_34_label" class="cke_label">Ô chọn</span></a></span><span class="cke_button"><a id="cke_35" class="cke_off cke_button_button" "="" href=" javascript:void('Nút')" title="Nút" tabindex="-1" hidefocus="true" role="button" aria-labelledby="cke_35_label" onkeydown="return CKEDITOR.tools.callFunction(76, event);" onfocus="return CKEDITOR.tools.callFunction(77, event);" onclick="CKEDITOR.tools.callFunction(78, this); return false;"><span class="cke_icon">&nbsp;</span><span id="cke_35_label" class="cke_label">Nút</span></a></span><span class="cke_button"><a id="cke_36" class="cke_off cke_button_imagebutton" "="" href=" javascript:void('Nút hình ảnh')" title="Nút hình ảnh" tabindex="-1" hidefocus="true" role="button" aria-labelledby="cke_36_label" onkeydown="return CKEDITOR.tools.callFunction(79, event);" onfocus="return CKEDITOR.tools.callFunction(80, event);" onclick="CKEDITOR.tools.callFunction(81, this); return false;"><span class="cke_icon">&nbsp;</span><span id="cke_36_label" class="cke_label">Nút hình ảnh</span></a></span><span class="cke_button"><a id="cke_37" class="cke_off cke_button_hiddenfield" "="" href=" javascript:void('Trường ẩn')" title="Trường ẩn" tabindex="-1" hidefocus="true" role="button" aria-labelledby="cke_37_label" onkeydown="return CKEDITOR.tools.callFunction(82, event);" onfocus="return CKEDITOR.tools.callFunction(83, event);" onclick="CKEDITOR.tools.callFunction(84, this); return false;"><span class="cke_icon">&nbsp;</span><span id="cke_37_label" class="cke_label">Trường ẩn</span></a></span></span><span class="cke_toolbar_end"></span></span>
                                                                                <div class="cke_break"></div><span id="cke_38" class="cke_toolbar" aria-labelledby="cke_38_label" role="toolbar"><span id="cke_38_label" class="cke_voice_label">Kiểu cơ bản</span><span class="cke_toolbar_start"></span><span class="cke_toolgroup" role="presentation"><span class="cke_button"><a id="cke_39" class="cke_off cke_button_bold" "="" href=" javascript:void('Đậm')" title="Đậm" tabindex="-1" hidefocus="true" role="button" aria-labelledby="cke_39_label" onkeydown="return CKEDITOR.tools.callFunction(85, event);" onfocus="return CKEDITOR.tools.callFunction(86, event);" onclick="CKEDITOR.tools.callFunction(87, this); return false;"><span class="cke_icon">&nbsp;</span><span id="cke_39_label" class="cke_label">Đậm</span></a></span><span class="cke_button"><a id="cke_40" class="cke_off cke_button_italic" "="" href=" javascript:void('Nghiêng')" title="Nghiêng" tabindex="-1" hidefocus="true" role="button" aria-labelledby="cke_40_label" onkeydown="return CKEDITOR.tools.callFunction(88, event);" onfocus="return CKEDITOR.tools.callFunction(89, event);" onclick="CKEDITOR.tools.callFunction(90, this); return false;"><span class="cke_icon">&nbsp;</span><span id="cke_40_label" class="cke_label">Nghiêng</span></a></span><span class="cke_button"><a id="cke_41" class="cke_off cke_button_underline" "="" href=" javascript:void('Gạch chân')" title="Gạch chân" tabindex="-1" hidefocus="true" role="button" aria-labelledby="cke_41_label" onkeydown="return CKEDITOR.tools.callFunction(91, event);" onfocus="return CKEDITOR.tools.callFunction(92, event);" onclick="CKEDITOR.tools.callFunction(93, this); return false;"><span class="cke_icon">&nbsp;</span><span id="cke_41_label" class="cke_label">Gạch chân</span></a></span><span class="cke_button"><a id="cke_42" class="cke_off cke_button_strike" "="" href=" javascript:void('Gạch xuyên ngang')" title="Gạch xuyên ngang" tabindex="-1" hidefocus="true" role="button" aria-labelledby="cke_42_label" onkeydown="return CKEDITOR.tools.callFunction(94, event);" onfocus="return CKEDITOR.tools.callFunction(95, event);" onclick="CKEDITOR.tools.callFunction(96, this); return false;"><span class="cke_icon">&nbsp;</span><span id="cke_42_label" class="cke_label">Gạch xuyên ngang</span></a></span><span class="cke_button"><a id="cke_43" class="cke_off cke_button_subscript" "="" href=" javascript:void('Chỉ số dưới')" title="Chỉ số dưới" tabindex="-1" hidefocus="true" role="button" aria-labelledby="cke_43_label" onkeydown="return CKEDITOR.tools.callFunction(97, event);" onfocus="return CKEDITOR.tools.callFunction(98, event);" onclick="CKEDITOR.tools.callFunction(99, this); return false;"><span class="cke_icon">&nbsp;</span><span id="cke_43_label" class="cke_label">Chỉ số dưới</span></a></span><span class="cke_button"><a id="cke_44" class="cke_off cke_button_superscript" "="" href=" javascript:void('Chỉ số trên')" title="Chỉ số trên" tabindex="-1" hidefocus="true" role="button" aria-labelledby="cke_44_label" onkeydown="return CKEDITOR.tools.callFunction(100, event);" onfocus="return CKEDITOR.tools.callFunction(101, event);" onclick="CKEDITOR.tools.callFunction(102, this); return false;"><span class="cke_icon">&nbsp;</span><span id="cke_44_label" class="cke_label">Chỉ số trên</span></a></span><span class="cke_separator" role="separator"></span><span class="cke_button"><a id="cke_45" class="cke_off cke_button_removeFormat" "="" href=" javascript:void('Xoá định dạng')" title="Xoá định dạng" tabindex="-1" hidefocus="true" role="button" aria-labelledby="cke_45_label" onkeydown="return CKEDITOR.tools.callFunction(103, event);" onfocus="return CKEDITOR.tools.callFunction(104, event);" onclick="CKEDITOR.tools.callFunction(105, this); return false;"><span class="cke_icon">&nbsp;</span><span id="cke_45_label" class="cke_label">Xoá định dạng</span></a></span></span><span class="cke_toolbar_end"></span></span><span id="cke_46" class="cke_toolbar" aria-labelledby="cke_46_label" role="toolbar"><span id="cke_46_label" class="cke_voice_label">Đoạn</span><span class="cke_toolbar_start"></span><span class="cke_toolgroup" role="presentation"><span class="cke_button"><a id="cke_47" class="cke_off cke_button_numberedlist" "="" href=" javascript:void('Chèn/Xoá Danh sách có thứ tự')" title="Chèn/Xoá Danh sách có thứ tự" tabindex="-1" hidefocus="true" role="button" aria-labelledby="cke_47_label" onkeydown="return CKEDITOR.tools.callFunction(106, event);" onfocus="return CKEDITOR.tools.callFunction(107, event);" onclick="CKEDITOR.tools.callFunction(108, this); return false;"><span class="cke_icon">&nbsp;</span><span id="cke_47_label" class="cke_label">Chèn/Xoá Danh sách có thứ tự</span></a></span><span class="cke_button"><a id="cke_48" class="cke_off cke_button_bulletedlist" "="" href=" javascript:void('Chèn/Xoá Danh sách không thứ tự')" title="Chèn/Xoá Danh sách không thứ tự" tabindex="-1" hidefocus="true" role="button" aria-labelledby="cke_48_label" onkeydown="return CKEDITOR.tools.callFunction(109, event);" onfocus="return CKEDITOR.tools.callFunction(110, event);" onclick="CKEDITOR.tools.callFunction(111, this); return false;"><span class="cke_icon">&nbsp;</span><span id="cke_48_label" class="cke_label">Chèn/Xoá Danh sách không thứ tự</span></a></span><span class="cke_separator" role="separator"></span><span class="cke_button"><a id="cke_49" class="cke_button_outdent cke_disabled" "="" href=" javascript:void('Dịch ra ngoài')" title="Dịch ra ngoài" tabindex="-1" hidefocus="true" role="button" aria-labelledby="cke_49_label" onkeydown="return CKEDITOR.tools.callFunction(112, event);" onfocus="return CKEDITOR.tools.callFunction(113, event);" onclick="CKEDITOR.tools.callFunction(114, this); return false;" aria-disabled="true"><span class="cke_icon">&nbsp;</span><span id="cke_49_label" class="cke_label">Dịch ra ngoài</span></a></span><span class="cke_button"><a id="cke_50" class="cke_off cke_button_indent" "="" href=" javascript:void('Dịch vào trong')" title="Dịch vào trong" tabindex="-1" hidefocus="true" role="button" aria-labelledby="cke_50_label" onkeydown="return CKEDITOR.tools.callFunction(115, event);" onfocus="return CKEDITOR.tools.callFunction(116, event);" onclick="CKEDITOR.tools.callFunction(117, this); return false;"><span class="cke_icon">&nbsp;</span><span id="cke_50_label" class="cke_label">Dịch vào trong</span></a></span><span class="cke_separator" role="separator"></span><span class="cke_button"><a id="cke_51" class="cke_off cke_button_blockquote" "="" href=" javascript:void('Khối trích dẫn')" title="Khối trích dẫn" tabindex="-1" hidefocus="true" role="button" aria-labelledby="cke_51_label" onkeydown="return CKEDITOR.tools.callFunction(118, event);" onfocus="return CKEDITOR.tools.callFunction(119, event);" onclick="CKEDITOR.tools.callFunction(120, this); return false;"><span class="cke_icon">&nbsp;</span><span id="cke_51_label" class="cke_label">Khối trích dẫn</span></a></span><span class="cke_button"><a id="cke_52" class="cke_off cke_button_creatediv" "="" href=" javascript:void('Tạo khối các thành phần')" title="Tạo khối các thành phần" tabindex="-1" hidefocus="true" role="button" aria-labelledby="cke_52_label" onkeydown="return CKEDITOR.tools.callFunction(121, event);" onfocus="return CKEDITOR.tools.callFunction(122, event);" onclick="CKEDITOR.tools.callFunction(123, this); return false;"><span class="cke_icon">&nbsp;</span><span id="cke_52_label" class="cke_label">Tạo khối các thành phần</span></a></span><span class="cke_separator" role="separator"></span><span class="cke_button"><a id="cke_53" class="cke_off cke_button_justifyleft" "="" href=" javascript:void('Canh trái')" title="Canh trái" tabindex="-1" hidefocus="true" role="button" aria-labelledby="cke_53_label" onkeydown="return CKEDITOR.tools.callFunction(124, event);" onfocus="return CKEDITOR.tools.callFunction(125, event);" onclick="CKEDITOR.tools.callFunction(126, this); return false;"><span class="cke_icon">&nbsp;</span><span id="cke_53_label" class="cke_label">Canh trái</span></a></span><span class="cke_button"><a id="cke_54" class="cke_off cke_button_justifycenter" "="" href=" javascript:void('Canh giữa')" title="Canh giữa" tabindex="-1" hidefocus="true" role="button" aria-labelledby="cke_54_label" onkeydown="return CKEDITOR.tools.callFunction(127, event);" onfocus="return CKEDITOR.tools.callFunction(128, event);" onclick="CKEDITOR.tools.callFunction(129, this); return false;"><span class="cke_icon">&nbsp;</span><span id="cke_54_label" class="cke_label">Canh giữa</span></a></span><span class="cke_button"><a id="cke_55" class="cke_off cke_button_justifyright" "="" href=" javascript:void('Canh phải')" title="Canh phải" tabindex="-1" hidefocus="true" role="button" aria-labelledby="cke_55_label" onkeydown="return CKEDITOR.tools.callFunction(130, event);" onfocus="return CKEDITOR.tools.callFunction(131, event);" onclick="CKEDITOR.tools.callFunction(132, this); return false;"><span class="cke_icon">&nbsp;</span><span id="cke_55_label" class="cke_label">Canh phải</span></a></span><span class="cke_button"><a id="cke_56" class="cke_off cke_button_justifyblock" "="" href=" javascript:void('Canh đều')" title="Canh đều" tabindex="-1" hidefocus="true" role="button" aria-labelledby="cke_56_label" onkeydown="return CKEDITOR.tools.callFunction(133, event);" onfocus="return CKEDITOR.tools.callFunction(134, event);" onclick="CKEDITOR.tools.callFunction(135, this); return false;"><span class="cke_icon">&nbsp;</span><span id="cke_56_label" class="cke_label">Canh đều</span></a></span><span class="cke_separator" role="separator"></span><span class="cke_button"><a id="cke_57" class="cke_off cke_button_bidiltr" "="" href=" javascript:void('Văn bản hướng từ trái sang phải')" title="Văn bản hướng từ trái sang phải" tabindex="-1" hidefocus="true" role="button" aria-labelledby="cke_57_label" onkeydown="return CKEDITOR.tools.callFunction(136, event);" onfocus="return CKEDITOR.tools.callFunction(137, event);" onclick="CKEDITOR.tools.callFunction(138, this); return false;"><span class="cke_icon">&nbsp;</span><span id="cke_57_label" class="cke_label">Văn bản hướng từ trái sang phải</span></a></span><span class="cke_button"><a id="cke_58" class="cke_off cke_button_bidirtl" "="" href=" javascript:void('Văn bản hướng từ phải sang trái')" title="Văn bản hướng từ phải sang trái" tabindex="-1" hidefocus="true" role="button" aria-labelledby="cke_58_label" onkeydown="return CKEDITOR.tools.callFunction(139, event);" onfocus="return CKEDITOR.tools.callFunction(140, event);" onclick="CKEDITOR.tools.callFunction(141, this); return false;"><span class="cke_icon">&nbsp;</span><span id="cke_58_label" class="cke_label">Văn bản hướng từ phải sang trái</span></a></span></span><span class="cke_toolbar_end"></span></span><span id="cke_59" class="cke_toolbar" aria-labelledby="cke_59_label" role="toolbar"><span id="cke_59_label" class="cke_voice_label">Liên kết</span><span class="cke_toolbar_start"></span><span class="cke_toolgroup" role="presentation"><span class="cke_button"><a id="cke_60" class="cke_off cke_button_link" "="" href=" javascript:void('Chèn/Sửa liên kết')" title="Chèn/Sửa liên kết" tabindex="-1" hidefocus="true" role="button" aria-labelledby="cke_60_label" onkeydown="return CKEDITOR.tools.callFunction(142, event);" onfocus="return CKEDITOR.tools.callFunction(143, event);" onclick="CKEDITOR.tools.callFunction(144, this); return false;"><span class="cke_icon">&nbsp;</span><span id="cke_60_label" class="cke_label">Chèn/Sửa liên kết</span></a></span><span class="cke_button"><a id="cke_61" class="cke_button_unlink cke_disabled" "="" href=" javascript:void('Xoá liên kết')" title="Xoá liên kết" tabindex="-1" hidefocus="true" role="button" aria-labelledby="cke_61_label" onkeydown="return CKEDITOR.tools.callFunction(145, event);" onfocus="return CKEDITOR.tools.callFunction(146, event);" onclick="CKEDITOR.tools.callFunction(147, this); return false;" aria-disabled="true"><span class="cke_icon">&nbsp;</span><span id="cke_61_label" class="cke_label">Xoá liên kết</span></a></span><span class="cke_button"><a id="cke_62" class="cke_off cke_button_anchor" "="" href=" javascript:void('Chèn/Sửa điểm neo')" title="Chèn/Sửa điểm neo" tabindex="-1" hidefocus="true" role="button" aria-labelledby="cke_62_label" onkeydown="return CKEDITOR.tools.callFunction(148, event);" onfocus="return CKEDITOR.tools.callFunction(149, event);" onclick="CKEDITOR.tools.callFunction(150, this); return false;"><span class="cke_icon">&nbsp;</span><span id="cke_62_label" class="cke_label">Chèn/Sửa điểm neo</span></a></span></span><span class="cke_toolbar_end"></span></span><span id="cke_63" class="cke_toolbar" aria-labelledby="cke_63_label" role="toolbar"><span id="cke_63_label" class="cke_voice_label">Chèn</span><span class="cke_toolbar_start"></span><span class="cke_toolgroup" role="presentation"><span class="cke_button"><a id="cke_64" class="cke_off cke_button_image" "="" href=" javascript:void('Hình ảnh')" title="Hình ảnh" tabindex="-1" hidefocus="true" role="button" aria-labelledby="cke_64_label" onkeydown="return CKEDITOR.tools.callFunction(151, event);" onfocus="return CKEDITOR.tools.callFunction(152, event);" onclick="CKEDITOR.tools.callFunction(153, this); return false;"><span class="cke_icon">&nbsp;</span><span id="cke_64_label" class="cke_label">Hình ảnh</span></a></span><span class="cke_button"><a id="cke_65" class="cke_off cke_button_flash" "="" href=" javascript:void('Flash')" title="Flash" tabindex="-1" hidefocus="true" role="button" aria-labelledby="cke_65_label" onkeydown="return CKEDITOR.tools.callFunction(154, event);" onfocus="return CKEDITOR.tools.callFunction(155, event);" onclick="CKEDITOR.tools.callFunction(156, this); return false;"><span class="cke_icon">&nbsp;</span><span id="cke_65_label" class="cke_label">Flash</span></a></span><span class="cke_button"><a id="cke_66" class="cke_off cke_button_table" "="" href=" javascript:void('Bảng')" title="Bảng" tabindex="-1" hidefocus="true" role="button" aria-labelledby="cke_66_label" onkeydown="return CKEDITOR.tools.callFunction(157, event);" onfocus="return CKEDITOR.tools.callFunction(158, event);" onclick="CKEDITOR.tools.callFunction(159, this); return false;"><span class="cke_icon">&nbsp;</span><span id="cke_66_label" class="cke_label">Bảng</span></a></span><span class="cke_button"><a id="cke_67" class="cke_off cke_button_horizontalrule" "="" href=" javascript:void('Chèn đường phân cách ngang')" title="Chèn đường phân cách ngang" tabindex="-1" hidefocus="true" role="button" aria-labelledby="cke_67_label" onkeydown="return CKEDITOR.tools.callFunction(160, event);" onfocus="return CKEDITOR.tools.callFunction(161, event);" onclick="CKEDITOR.tools.callFunction(162, this); return false;"><span class="cke_icon">&nbsp;</span><span id="cke_67_label" class="cke_label">Chèn đường phân cách ngang</span></a></span><span class="cke_button"><a id="cke_68" class="cke_off cke_button_smiley" "="" href=" javascript:void('Hình biểu lộ cảm xúc (mặt cười)')" title="Hình biểu lộ cảm xúc (mặt cười)" tabindex="-1" hidefocus="true" role="button" aria-labelledby="cke_68_label" onkeydown="return CKEDITOR.tools.callFunction(163, event);" onfocus="return CKEDITOR.tools.callFunction(164, event);" onclick="CKEDITOR.tools.callFunction(165, this); return false;"><span class="cke_icon">&nbsp;</span><span id="cke_68_label" class="cke_label">Hình biểu lộ cảm xúc (mặt cười)</span></a></span><span class="cke_button"><a id="cke_69" class="cke_off cke_button_specialchar" "="" href=" javascript:void('Chèn ký tự đặc biệt')" title="Chèn ký tự đặc biệt" tabindex="-1" hidefocus="true" role="button" aria-labelledby="cke_69_label" onkeydown="return CKEDITOR.tools.callFunction(166, event);" onfocus="return CKEDITOR.tools.callFunction(167, event);" onclick="CKEDITOR.tools.callFunction(168, this); return false;"><span class="cke_icon">&nbsp;</span><span id="cke_69_label" class="cke_label">Chèn ký tự đặc biệt</span></a></span><span class="cke_button"><a id="cke_70" class="cke_off cke_button_pagebreak" "="" href=" javascript:void('Chèn ngắt trang')" title="Chèn ngắt trang" tabindex="-1" hidefocus="true" role="button" aria-labelledby="cke_70_label" onkeydown="return CKEDITOR.tools.callFunction(169, event);" onfocus="return CKEDITOR.tools.callFunction(170, event);" onclick="CKEDITOR.tools.callFunction(171, this); return false;"><span class="cke_icon">&nbsp;</span><span id="cke_70_label" class="cke_label">Chèn ngắt trang</span></a></span><span class="cke_button"><a id="cke_71" class="cke_off cke_button_iframe" "="" href=" javascript:void('Iframe')" title="Iframe" tabindex="-1" hidefocus="true" role="button" aria-labelledby="cke_71_label" onkeydown="return CKEDITOR.tools.callFunction(172, event);" onfocus="return CKEDITOR.tools.callFunction(173, event);" onclick="CKEDITOR.tools.callFunction(174, this); return false;"><span class="cke_icon">&nbsp;</span><span id="cke_71_label" class="cke_label">Iframe</span></a></span></span><span class="cke_toolbar_end"></span></span>
                                                                                <div class="cke_break"></div><span id="cke_73" class="cke_toolbar" aria-labelledby="cke_73_label" role="toolbar"><span id="cke_73_label" class="cke_voice_label">Kiểu</span><span class="cke_toolbar_start"></span><span class="cke_rcombo" role="presentation"><span id="cke_72" class="cke_styles cke_off" role="presentation"><span id="cke_72_label" class="cke_label">Kiểu</span><a hidefocus="true" title="Phong cách định dạng" tabindex="-1" href="javascript:void('Kiểu')" role="button" aria-labelledby="cke_72_label" aria-describedby="cke_72_text" aria-haspopup="true" onkeydown="CKEDITOR.tools.callFunction( 176, event, this );" onfocus="return CKEDITOR.tools.callFunction(177, event);" onclick="CKEDITOR.tools.callFunction(175, this); return false;"><span><span id="cke_72_text" class="cke_text cke_inline_label">Kiểu</span></span><span class="cke_openbutton"><span class="cke_icon"></span></span></a></span></span><span class="cke_rcombo" role="presentation"><span id="cke_74" class="cke_format cke_off" role="presentation"><span id="cke_74_label" class="cke_label">Định dạng</span><a hidefocus="true" title="Định dạng" tabindex="-1" href="javascript:void('Định dạng')" role="button" aria-labelledby="cke_74_label" aria-describedby="cke_74_text" aria-haspopup="true" onkeydown="CKEDITOR.tools.callFunction( 179, event, this );" onfocus="return CKEDITOR.tools.callFunction(180, event);" onclick="CKEDITOR.tools.callFunction(178, this); return false;"><span><span id="cke_74_text" class="cke_text cke_inline_label">Định dạng</span></span><span class="cke_openbutton"><span class="cke_icon"></span></span></a></span></span><span class="cke_rcombo" role="presentation"><span id="cke_75" class="cke_font cke_off" role="presentation"><span id="cke_75_label" class="cke_label">Phông</span><a hidefocus="true" title="Phông" tabindex="-1" href="javascript:void('Phông')" role="button" aria-labelledby="cke_75_label" aria-describedby="cke_75_text" aria-haspopup="true" onkeydown="CKEDITOR.tools.callFunction( 182, event, this );" onfocus="return CKEDITOR.tools.callFunction(183, event);" onclick="CKEDITOR.tools.callFunction(181, this); return false;"><span><span id="cke_75_text" class="cke_text cke_inline_label">Phông</span></span><span class="cke_openbutton"><span class="cke_icon"></span></span></a></span></span><span class="cke_rcombo" role="presentation"><span id="cke_76" class="cke_fontSize cke_off" role="presentation"><span id="cke_76_label" class="cke_label">Cỡ chữ</span><a hidefocus="true" title="Cỡ chữ" tabindex="-1" href="javascript:void('Cỡ chữ')" role="button" aria-labelledby="cke_76_label" aria-describedby="cke_76_text" aria-haspopup="true" onkeydown="CKEDITOR.tools.callFunction( 185, event, this );" onfocus="return CKEDITOR.tools.callFunction(186, event);" onclick="CKEDITOR.tools.callFunction(184, this); return false;"><span><span id="cke_76_text" class="cke_text cke_inline_label">Cỡ chữ</span></span><span class="cke_openbutton"><span class="cke_icon"></span></span></a></span></span><span class="cke_toolbar_end"></span></span><span id="cke_77" class="cke_toolbar" aria-labelledby="cke_77_label" role="toolbar"><span id="cke_77_label" class="cke_voice_label">Màu sắc</span><span class="cke_toolbar_start"></span><span class="cke_toolgroup" role="presentation"><span class="cke_button"><a id="cke_78" class="cke_off cke_button_textcolor" "="" href=" javascript:void('Màu chữ')" title="Màu chữ" tabindex="-1" hidefocus="true" role="button" aria-labelledby="cke_78_label" aria-haspopup="true" onkeydown="return CKEDITOR.tools.callFunction(187, event);" onfocus="return CKEDITOR.tools.callFunction(188, event);" onclick="CKEDITOR.tools.callFunction(189, this); return false;"><span class="cke_icon">&nbsp;</span><span id="cke_78_label" class="cke_label">Màu chữ</span><span class="cke_buttonarrow">&nbsp;</span></a></span><span class="cke_button"><a id="cke_79" class="cke_off cke_button_bgcolor" "="" href=" javascript:void('Màu nền')" title="Màu nền" tabindex="-1" hidefocus="true" role="button" aria-labelledby="cke_79_label" aria-haspopup="true" onkeydown="return CKEDITOR.tools.callFunction(190, event);" onfocus="return CKEDITOR.tools.callFunction(191, event);" onclick="CKEDITOR.tools.callFunction(192, this); return false;"><span class="cke_icon">&nbsp;</span><span id="cke_79_label" class="cke_label">Màu nền</span><span class="cke_buttonarrow">&nbsp;</span></a></span></span><span class="cke_toolbar_end"></span></span><span id="cke_80" class="cke_toolbar" aria-labelledby="cke_80_label" role="toolbar"><span id="cke_80_label" class="cke_voice_label">Công cụ</span><span class="cke_toolbar_start"></span><span class="cke_toolgroup" role="presentation"><span class="cke_button"><a id="cke_81" class="cke_off cke_button_maximize" "="" href=" javascript:void('Phóng to tối đa')" title="Phóng to tối đa" tabindex="-1" hidefocus="true" role="button" aria-labelledby="cke_81_label" onkeydown="return CKEDITOR.tools.callFunction(193, event);" onfocus="return CKEDITOR.tools.callFunction(194, event);" onclick="CKEDITOR.tools.callFunction(195, this); return false;"><span class="cke_icon">&nbsp;</span><span id="cke_81_label" class="cke_label">Phóng to tối đa</span></a></span><span class="cke_button"><a id="cke_82" class="cke_off cke_button_showblocks" "="" href=" javascript:void('Hiển thị các khối')" title="Hiển thị các khối" tabindex="-1" hidefocus="true" role="button" aria-labelledby="cke_82_label" onkeydown="return CKEDITOR.tools.callFunction(196, event);" onfocus="return CKEDITOR.tools.callFunction(197, event);" onclick="CKEDITOR.tools.callFunction(198, this); return false;"><span class="cke_icon">&nbsp;</span><span id="cke_82_label" class="cke_label">Hiển thị các khối</span></a></span><span class="cke_separator" role="separator"></span><span class="cke_button"><a id="cke_83" class="cke_off cke_button_about" "="" href=" javascript:void('Thông tin về CKEditor')" title="Thông tin về CKEditor" tabindex="-1" hidefocus="true" role="button" aria-labelledby="cke_83_label" onkeydown="return CKEDITOR.tools.callFunction(199, event);" onfocus="return CKEDITOR.tools.callFunction(200, event);" onclick="CKEDITOR.tools.callFunction(201, this); return false;"><span class="cke_icon">&nbsp;</span><span id="cke_83_label" class="cke_label">Thông tin về CKEditor</span></a></span></span><span class="cke_toolbar_end"></span></span>
                                                                            </div><a title="Thu gọn thanh công cụ" id="cke_84" tabindex="-1" class="cke_toolbox_collapser" onclick="CKEDITOR.tools.callFunction(202)"><span>▲</span></a>
                                                                        </td>
                                                                    </tr>
                                                                    <tr role="presentation">
                                                                        <td id="cke_contents_txtcontent" class="cke_contents" style="height:400px" role="presentation"><span id="cke_88" class="cke_voice_label">Nhấn ALT + 0 để được giúp đỡ</span><iframe style="width:100%;height:100%" frameborder="0" aria-describedby="cke_88" title="Trình soạn thảo phong phú, txtcontent" src="" tabindex="-1" allowtransparency="true"></iframe></td>
                                                                    </tr>
                                                                    <tr role="presentation">
                                                                        <td id="cke_bottom_txtcontent" class="cke_bottom" role="presentation">
                                                                            <div class="cke_resizer cke_resizer_ltr" title="Kéo rê để thay đổi kích cỡ" onmousedown="CKEDITOR.tools.callFunction(3, event)"></div><span id="cke_path_txtcontent_label" class="cke_voice_label">Nhãn thành phần</span>
                                                                            <div id="cke_path_txtcontent" class="cke_path" role="group" aria-labelledby="cke_path_txtcontent_label"><span class="cke_empty">&nbsp;</span></div>
                                                                        </td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                            <style>
                                                                .cke_skin_kama {
                                                                    visibility: hidden;
                                                                }
                                                            </style>
                                                        </span></span></span>
                                            </div>
                                        </div>


                                        <div class="block_sp hidden">
                                            <p class="ttg">Tag liên quan</p>
                                            <div class="form-group">
                                                <label class="next-label" data-bind="text:Title">Danh sách tag liên quan</label><a href="#" class="tooltip">
                                                    <img src="{{ asset('images/help-icon.png') }}">
                                                    <span><b>Tag liên quan</b><br>
                                                        Các từ khóa liên quan đến tin cách nhau bởi dấu phảy (,)
                                                    </span>
                                                </a>
                                                <input type="hidden" id="idtem" value="-1">
                                                <input name="tagtemp" type="hidden" id="tagtemp" value="">
                                                <input class="form-control" id="taglist" name="taglist" value="" placeholder="Nhập tag, Phân cách bằng dấu phẩy (,)" style="display: none;">
                                                <div class="bootstrap-tagsinput">
                                                    <p class="tagl" style="display: inline-block">

                                                    </p>
                                                    <input name="controls1$ctl00$ctl00$ctl00$txt_tag" type="text" id="txt_tag" class="inputbox" placeholder="Nhập tag, Phân cách bằng dấu phẩy (,)">
                                                </div>
                                                <p style="padding: 10px 0px; color: #9fafba">Chọn thêm các tag đã có sẵn.</p>
                                                <div class="tags text-no-bold">
                                                    <div class="input-group">
                                                        <ul>

                                                            <li>
                                                                <label class="item tag-color-1 selecttag">Thiết kế nội thất văn phòng</label>
                                                            </li>


                                                        </ul>

                                                    </div>

                                                </div>
                                            </div>


                                        </div>
                                    </div>

                                    <div class="col-sm-4">
                                        <div class="block_sp">
                                            <div class="form-group">
                                                <label class="text-no-bold" data-bind="text:Title" style="font-weight:bold">Hình ảnh đại diện</label>
                                                <input type="file" name="controls1$ctl00$ctl00$ctl00$flupload" id="flupload" class="btn-change-link pull-right" style="width:180px;">
                                            </div>
                                            <div class="center">


                                            </div>
                                            <p style="color:#c3cfd8" class="center">Sử dụng nút <strong>Chọn hình</strong> để thêm hình.</p>
                                        </div>
                                        <div class="block_sp">
                                            <p class="ttg">Danh mục tin <a href="#" class="tooltip">
                                                    <img src="{{ asset('images/help-icon.png') }}">
                                                    <span><b>Danh mục tin</b><br>
                                                        Lưa chọn danh mục tin
                                                    </span>
                                                </a></p>
                                            <div class="form-group">

                                                <select name="controls1$ctl00$ctl00$ctl00$ddlcate" id="ddlcate" class="inputbox" style="width:100%;">
                                                    <option selected="selected" value="10353">Chuyên mục tin</option>

                                                </select>
                                            </div>
                                            <div class="form-group hidden">
                                                <label class="next-label">Nhóm tin</label>
                                                <div class="listgr">
                                                    <ul>

                                                        <li><input type="checkbox" name="chkgr" value="10362"> Nhóm tin 1</li>


                                                    </ul>
                                                </div>
                                            </div>
                                        </div>


                                        <div class="block_sp">
                                            <p class="ttg">Ngày đăng <a href="#" class="tooltip">
                                                    <img src="{{ asset('images/help-icon.png') }}">
                                                    <span><b>Cập nhật ngày đăng</b><br>
                                                        Thay đổi ngày đăng tin, ngày phải theo định dạng ngày/tháng/năm (20/10/2014)
                                                    </span>
                                                </a></p>
                                            <div class="form-group">

                                                <input name="controls1$ctl00$ctl00$ctl00$txt_updatetime" type="text" value="25/08/2023" id="txt_updatetime" class="inputbox hasDatepicker" style="width:92px;">
                                                &nbsp;
                                                lúc &nbsp;<select name="controls1$ctl00$ctl00$ctl00$ddlhour" id="ddlhour" class="inputbox">
                                                    <option value="0">0</option>
                                                    <option value="1">1</option>
                                                    <option value="2">2</option>
                                                    <option value="3">3</option>
                                                    <option value="4">4</option>
                                                    <option value="5">5</option>
                                                    <option value="6">6</option>
                                                    <option value="7">7</option>
                                                    <option value="8">8</option>
                                                    <option value="9">9</option>
                                                    <option selected="selected" value="10">10</option>
                                                    <option value="11">11</option>
                                                    <option value="12">12</option>
                                                    <option value="13">13</option>
                                                    <option value="14">14</option>
                                                    <option value="15">15</option>
                                                    <option value="16">16</option>
                                                    <option value="17">17</option>
                                                    <option value="18">18</option>
                                                    <option value="19">19</option>
                                                    <option value="20">20</option>
                                                    <option value="21">21</option>
                                                    <option value="22">22</option>
                                                    <option value="23">23</option>

                                                </select>
                                                giờ&nbsp;&nbsp;
                                                <select name="controls1$ctl00$ctl00$ctl00$ddlminute" id="ddlminute" class="inputbox">
                                                    <option value="0">0</option>
                                                    <option value="1">1</option>
                                                    <option value="2">2</option>
                                                    <option value="3">3</option>
                                                    <option value="4">4</option>
                                                    <option value="5">5</option>
                                                    <option value="6">6</option>
                                                    <option value="7">7</option>
                                                    <option value="8">8</option>
                                                    <option value="9">9</option>
                                                    <option value="10">10</option>
                                                    <option value="11">11</option>
                                                    <option value="12">12</option>
                                                    <option value="13">13</option>
                                                    <option value="14">14</option>
                                                    <option value="15">15</option>
                                                    <option value="16">16</option>
                                                    <option value="17">17</option>
                                                    <option value="18">18</option>
                                                    <option value="19">19</option>
                                                    <option value="20">20</option>
                                                    <option value="21">21</option>
                                                    <option value="22">22</option>
                                                    <option value="23">23</option>
                                                    <option value="24">24</option>
                                                    <option value="25">25</option>
                                                    <option value="26">26</option>
                                                    <option value="27">27</option>
                                                    <option value="28">28</option>
                                                    <option value="29">29</option>
                                                    <option value="30">30</option>
                                                    <option value="31">31</option>
                                                    <option value="32">32</option>
                                                    <option value="33">33</option>
                                                    <option value="34">34</option>
                                                    <option value="35">35</option>
                                                    <option value="36">36</option>
                                                    <option selected="selected" value="37">37</option>
                                                    <option value="38">38</option>
                                                    <option value="39">39</option>
                                                    <option value="40">40</option>
                                                    <option value="41">41</option>
                                                    <option value="42">42</option>
                                                    <option value="43">43</option>
                                                    <option value="44">44</option>
                                                    <option value="45">45</option>
                                                    <option value="46">46</option>
                                                    <option value="47">47</option>
                                                    <option value="48">48</option>
                                                    <option value="49">49</option>
                                                    <option value="50">50</option>
                                                    <option value="51">51</option>
                                                    <option value="52">52</option>
                                                    <option value="53">53</option>
                                                    <option value="54">54</option>
                                                    <option value="55">55</option>
                                                    <option value="56">56</option>
                                                    <option value="57">57</option>
                                                    <option value="58">58</option>
                                                    <option value="59">59</option>

                                                </select>
                                                phút


                                            </div>
                                        </div>


                                        <div class="block_sp">
                                            <p class="ttg">Thứ tự <a href="#" class="tooltip">
                                                    <img src="{{ asset('images/help-icon.png') }}">
                                                    <span><b>Thứ tự</b><br>
                                                        Thứ tự hiện thị của tin trong 1 danh mục
                                                    </span>
                                                </a></p>
                                            <div class="form-group">
                                                <input name="controls1$ctl00$ctl00$ctl00$txtorder" type="text" value="1" id="txtorder" class="inputbox" onkeypress=" return isNumberKey(event)" style="width:100%;">
                                            </div>
                                        </div>
                                        <div class="block_sp">
                                            <div class="form-group">


                                                <div class="form-group">
                                                    <p class="ttg">Tùy chọn tin</p>
                                                    <input id="chknew" type="checkbox" name="controls1$ctl00$ctl00$ctl00$chknew"><label for="chknew"> </label> Tin mới
                                                    &nbsp; &nbsp;
                                                    <input id="chkhot" type="checkbox" name="controls1$ctl00$ctl00$ctl00$chkhot"><label for="chkhot"> </label> Tin nổi bật
                                                </div>
                                            </div>
                                        </div>
                                        <div class="block_sp">
                                            <div class="form-group">
                                                <p class="ttg">Trạng thái</p>
                                                <input id="chkstatus" type="checkbox" name="controls1$ctl00$ctl00$ctl00$chkstatus" checked="checked"> Hiển thị<br>
                                            </div>
                                        </div>
                                    </div>
                                </div>





                            </div>


                            <h2 class="resp-accordion hor_1" role="tab" aria-controls="hor_1_tab_item-1" style="background-color: rgb(245, 245, 245); border-color: rgb(193, 193, 193);"><span class="resp-arrow"></span>Cấu hình SEO</h2>
                            <div class="resp-tab-content hor_1" aria-labelledby="hor_1_tab_item-1" style="border-color: rgb(193, 193, 193);">

                                <p>
                                </p>
                                <table class="admintable">
                                    <tbody>
                                        <tr>
                                            <td valign="top">Tối ưu SEO</td>
                                            <td>
                                                <div>
                                                    <span class="page-title-seo">Thiết kế website</span>
                                                    <div class="page-description-seo ws-nm"><span>https://vntravelsimple.com/</span></div>
                                                    <div class="page-url-seo ws-nm">

                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td width="150" class="key">
                                                <label for="txttitle">Thẻ tiêu đề trang</label>
                                            </td>
                                            <td>
                                                <input name="controls1$ctl00$ctl00$ctl00$txttitleweb" type="text" id="txttitleweb" class="inputbox" style="width:460px;">
                                                <a href="#" class="tooltip">
                                                    <img src="{{ asset('images/help-icon.png') }}">
                                                    <span><b>Tiêu đề trang</b><br>
                                                        Nội dung được hiển thị dưới dạng tiêu đề trong kết quả tìm kiếm và trên trình duyệt của người dùng. <br><i>(Tiêu đề nên để dưới 70 ký tự)</i>
                                                    </span>
                                                </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td width="150" class="key">
                                                <label for="txttitle">Đường dẫn</label>

                                            </td>
                                            <td>
                                                <div class="next-input--stylized">
                                                    <span class="next-input-add-on next-input__add-on--before">https://vntravelsimple.com/</span>

                                                    <input name="controls1$ctl00$ctl00$ctl00$txturl" type="text" id="txturl" class="txtpa" style="width:335px;">
                                                </div>
                                                <a href="#" class="tooltip">
                                                    <img src="{{ asset('images/help-icon.png') }}">
                                                    <span><b>Đường dẫn</b><br>
                                                        Đường dẫn tới sản phẩm
                                                    </span>
                                                </a>

                                            </td>
                                        </tr>
                                        <tr>
                                            <td width="150" class="key">
                                                <label for="txtkeyword">Thẻ từ khóa</label>
                                            </td>
                                            <td>
                                                <textarea name="controls1$ctl00$ctl00$ctl00$txtkeyword" rows="5" cols="70" id="txtkeyword" class="inputbox" style="height:80px;"></textarea>
                                                <a href="#" class="tooltip">
                                                    <img src="{{ asset('images/help-icon.png') }}">
                                                    <span><b>Thẻ từ khóa</b><br>
                                                        Mô tả các từ khóa chính của website
                                                    </span>
                                                </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="key">
                                                <label for="txtdesciption">Thẻ mô tả</label>
                                            </td>
                                            <td>
                                                <textarea name="controls1$ctl00$ctl00$ctl00$txtmetadesc" rows="5" cols="70" id="txtmetadesc" class="inputbox" style="height:80px;"></textarea>
                                                <a href="#" class="tooltip">
                                                    <img src="{{ asset('images/help-icon.png') }}">
                                                    <span><b>Thẻ mô tả</b><br>
                                                        Cung cấp một mô tả ngắn của trang. Trong vài trường hợp, mô tả này được sử dụng như một phần của đoạn trích được hiển thị trong kết quả tìm kiếm. <br><i>(Mô tả nên để dưới 160 ký tự)</i>
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
                    <input type="hidden" value="" id="hndId" name="hndId">
                </div>
            </div>
            <div class="clr"></div>
        </div>
    </div>
    <script type="text/javascript">
        $(document).ready(function() {
            //Horizontal Tab
            $('#parentHorizontalTabcontent').easyResponsiveTabs({
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

            // Child Tab
            $('#ChildVerticalTab_1').easyResponsiveTabs({
                type: 'vertical',
                width: 'auto',
                fit: true,
                tabidentify: 'ver_1', // The tab groups identifier
                activetab_bg: '#fff', // background color for active tabs in this group
                inactive_bg: '#F5F5F5', // background color for inactive tabs in this group
                active_border_color: '#c1c1c1', // border color for active tabs heads in this group
                active_content_border_color: '#5AB1D0' // border color for active tabs contect in this group so that it matches the tab head border
            });

            //Vertical Tab
            $('#parentVerticalTab').easyResponsiveTabs({
                type: 'vertical', //Types: default, vertical, accordion
                width: 'auto', //auto or any width like 600px
                fit: true, // 100% fit in a container
                closed: 'accordion', // Start closed if in accordion view
                tabidentify: 'hor_1', // The tab groups identifier
                activate: function(event) { // Callback function if tab is switched
                    var $tab = $(this);
                    var $info = $('#nested-tabInfo2');
                    var $name = $('span', $info);
                    $name.text($tab.text());
                    $info.show();
                }
            });

            $("#txt_updatetime").datepicker({
                changeMonth: true,
                changeYear: true,
                dateFormat: 'dd/mm/yy'
            });
        });
    </script>
</div>
@endsection