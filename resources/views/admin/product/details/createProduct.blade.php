@extends('/template/index')

@section('content')
<div id="page-wrapper">

    <div class="widget-title">
        <h4><i class="icon-reorder-items">
                Cập nhật sản phẩm</i></h4>
        <div class="ui-widget-content ui-corner-top ui-corner-bottom">
            <div id="toolbox">
                <div style="float: right; margin-right: 10px;" class="toolbox-content">
                    <table class="toolbar">
                        <tbody>
                            <tr>
                                <td align="center">
                                    <a href="#ex1" class="nhanban" title="Nhân bản sản phẩm"><span class="icon-ok-update"></span>Nhân bản sản phẩm</a>

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
                <div id="parentHorizontalTabcontent" style="display: block; width: 100%; margin: 0px;">
                    <ul class="resp-tabs-list hor_1">
                        <li class="resp-tab-item hor_1" aria-controls="hor_1_tab_item-0" role="tab" style="background-color: rgb(245, 245, 245); border-color: rgb(193, 193, 193);">Thông tin chi tiết</li>
                        <li class="resp-tab-item hor_1" aria-controls="hor_1_tab_item-1" role="tab" style="background-color: rgb(245, 245, 245); border-color: rgb(193, 193, 193);">Hình ảnh chi tiết</li>
                        <li class="resp-tab-item hor_1" aria-controls="hor_1_tab_item-4" role="tab" style="background-color: rgb(245, 245, 245); border-color: rgb(193, 193, 193);">Hình ảnh và màu sắc</li>
                        <li class="resp-tab-item hor_1" aria-controls="hor_1_tab_item-2" role="tab" style="background-color: rgb(245, 245, 245); border-color: rgb(193, 193, 193);">Thông tin khác</li>
                        <li class="resp-tab-item hor_1" aria-controls="hor_1_tab_item-3" role="tab" style="background-color: rgb(245, 245, 245); border-color: rgb(193, 193, 193);">Cấu hình SEO</li>
                    </ul>
                    <div class="resp-tabs-container hor_1" style="border-color: rgb(193, 193, 193);">
                        <h2 class="resp-accordion hor_1" role="tab" aria-controls="hor_1_tab_item-0" style="background: none rgb(245, 245, 245); border-color: rgb(193, 193, 193);"><span class="resp-arrow"></span>Thông tin chi tiết</h2>
                        <div class="resp-tab-content hor_1" aria-labelledby="hor_1_tab_item-0">
                            <div class="row">
                                <div class="col-sm-8">
                                    <div class="block_sp">
                                        <div class="form-group">
                                            <label class="next-label">Tên sản phẩm</label>
                                            <input name="controls1$ctl00$ctl00$ctl00$txtproductname" type="text" value="input" id="txtproductname" class="inputbox" placeholder="ví dụ : Iphone 8 , Samsung S8" style="width:100%;">
                                        </div>
                                    </div>
                                    <div class="block_sp">
                                        <div class="form-group">
                                            <label class="next-label">Quãng đường di chuyển</label>

                                            <input name="controls1$ctl00$ctl00$ctl00$txtproductname" type="text" value="input" id="txtproductname" class="inputbox" placeholder="ví dụ : Iphone 8 , Samsung S8" style="width:100%;">
                                        </div>
                                    </div>
                                    <div class="block_sp">
                                        <div class="form-group">
                                            <label class="next-label">Vận tốc lớn nhất</label>

                                            <input name="controls1$ctl00$ctl00$ctl00$txtproductname" type="text" value="input" id="txtproductname" class="inputbox" placeholder="ví dụ : Iphone 8 , Samsung S8" style="width:100%;">
                                        </div>
                                    </div>
                                    <div class="block_sp">
                                        <div class="form-group">
                                            <label class="next-label">Khối lượng cho phép chở</label>

                                            <input name="controls1$ctl00$ctl00$ctl00$txtproductname" type="text" value="input" id="txtproductname" class="inputbox" placeholder="ví dụ : Iphone 8 , Samsung S8" style="width:100%;">
                                        </div>
                                    </div>
                                    <div class="block_sp">
                                        <p class="ttg">Mô tả</p>
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <label class="next-label">Mô tả 1</label>
                                                    <input name="controls1$ctl00$ctl00$ctl00$txtproductname" type="text" value="Quãng đường" id="txtproductname" class="inputbox" placeholder="Tiêu đề mô tả 1" style="width:100%;">
                                                    <textarea name="controls1$ctl00$ctl00$ctl00$txtkeyword" rows="5" cols="70" id="txtkeyword" class="inputbox" style="width: 100%; height:80px;">Chinh phục quãng đường lên tới khoảng 203 km chỉ với một lần sạc (theo điều kiện tiêu chuẩn của VinFast).</textarea>

                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <label class="next-label">Mô tả 2</label>
                                                    <input name="controls1$ctl00$ctl00$ctl00$txtproductname" type="text" value="PIN LFP" id="txtproductname" class="inputbox" placeholder="Tiêu đề mô tả 2" style="width:100%;">
                                                    <textarea name="controls1$ctl00$ctl00$ctl00$txtkeyword" rows="5" cols="70" id="txtkeyword" class="inputbox" style="width: 100%; height:80px;">Công nghệ pin LFP vượt trội với công nghệ pack pin và phần mềm quản lý do VinFast tự nghiên cứu & phát triển đảm bảo pin hoạt động an toàn và ổn định.</textarea>

                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <label class="next-label">Mô tả 3</label>
                                                    <input name="controls1$ctl00$ctl00$ctl00$txtproductname" type="text" value="THIẾT KẾ" id="txtproductname" class="inputbox" placeholder="Tiêu đề mô tả 3" style="width:100%;">
                                                    <textarea name="controls1$ctl00$ctl00$ctl00$txtkeyword" rows="5" cols="70" id="txtkeyword" class="inputbox" style="width: 100%; height:80px;">Trang nhã và hài hòa, thanh thoát đầy tinh tế trong từng đường nét.</textarea>

                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <label class="next-label">Mô tả 4</label>
                                                    <input name="controls1$ctl00$ctl00$ctl00$txtproductname" type="text" value="CHỐNG NƯỚC" id="txtproductname" class="inputbox" placeholder="Tiêu đề mô tả 4" style="width:100%;">
                                                    <textarea name="controls1$ctl00$ctl00$ctl00$txtkeyword" rows="5" cols="70" id="txtkeyword" class="inputbox" style="width: 100%; height:80px;">Tiêu chuẩn chống nước IP67. Động cơ có khả năng chống nước vượt trội ở mức nước ngập sâu 0,5m trong thời gian 30 phút.</textarea>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="block_sp">
                                        <div class="form-group">
                                            <label class="next-label">Chi tiết</label>

                                            <input name="controls1$ctl00$ctl00$ctl00$txtproductname" type="text" value="CKEDITOR" id="txtproductname" class="inputbox" placeholder="ví dụ : Iphone 8 , Samsung S8" style="width:100%;">
                                        </div>
                                    </div>
                                    <div class="block_sp">
                                        <div class="form-group">
                                            <label class="next-label">Thông số kỹ thuật</label>
                                            <h6>Tổng quan</h6>
                                            <div class="tskt row">
                                                <div class="col-sm-6">
                                                    <input name="controls1$ctl00$ctl00$ctl00$txtproductname" type="text" id="txtproductname" class="inputbox" placeholder="Tên thông số tổng quan" style="width:100%;">
                                                </div>
                                                <div class="col-sm-6">
                                                    <input name="controls1$ctl00$ctl00$ctl00$txtproductname" type="text" id="txtproductname" class="inputbox" placeholder="Giá trị tổng quan" style="width:100%;">
                                                </div>
                                            </div>
                                            <h6>Khung xe</h6>
                                            <div class="tskt row">
                                                <div class="col-sm-6">
                                                    <input name="controls1$ctl00$ctl00$ctl00$txtproductname" type="text" id="txtproductname" class="inputbox" placeholder="Tên thông số khung xe" style="width:100%;">
                                                </div>
                                                <div class="col-sm-6">
                                                    <input name="controls1$ctl00$ctl00$ctl00$txtproductname" type="text" id="txtproductname" class="inputbox" placeholder="Giá trị khung xe" style="width:100%;">
                                                </div>
                                            </div>
                                            <h6>Động cơ</h6>
                                            <div class="tskt row">
                                                <div class="col-sm-6">
                                                    <input name="controls1$ctl00$ctl00$ctl00$txtproductname" type="text" id="txtproductname" class="inputbox" placeholder="Tên thông số dộng cơ" style="width:100%;">
                                                </div>
                                                <div class="col-sm-6">
                                                    <input name="controls1$ctl00$ctl00$ctl00$txtproductname" type="text" id="txtproductname" class="inputbox" placeholder="Giá trị dộng cơ" style="width:100%;">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="block_sp">
                                        <div class="form-group">
                                            <label class="text-no-bold" data-bind="text: Title">Hình ảnh đại diện</label>
                                            <input type="file" name="controls1$ctl00$ctl00$ctl00$flupload" id="flupload" class="btn-change-link pull-right" style="width:180px;">

                                        </div>
                                        <div class="center">
                                            <img src="http://dambaujiwoon.khoweb24h.com/uploads/products/ahihi4.jpg" style="max-width:500px;height:80px">

                                        </div>
                                        <p style="color: #c3cfd8" class="center">Sử dụng nút <strong>Chọn hình</strong> để thêm hình.</p>
                                    </div>
                                    <div class="block_sp">
                                        <div class="form-group">
                                            <label class="text-no-bold" data-bind="text: Title">Hình ảnh 360</label>
                                            <input type="file" name="controls1$ctl00$ctl00$ctl00$flupload" id="flupload" class="btn-change-link pull-right" style="width:180px;">

                                        </div>
                                        <div class="center">
                                            <img src="http://dambaujiwoon.khoweb24h.com/uploads/products/ahihi4.jpg" style="max-width:500px;height:80px">

                                        </div>
                                        <p style="color: #c3cfd8" class="center">Sử dụng nút <strong>Chọn hình</strong> để thêm hình.</p>
                                    </div>
                                    <div class="block_sp">
                                        <div class="form-group">
                                            <label class="next-label">Mã sản phẩm</label>

                                            <input name="controls1$ctl00$ctl00$ctl00$txtproductkey" type="text" value="A3" id="txtproductkey" class="inputbox" placeholder="Mã sản phẩm: SKU001" style="width:100%;">
                                        </div>
                                    </div>
                                    <div class="block_sp">
                                        <div class="form-group">
                                            <p class="ttg">Giá sản phẩm</p>

                                            <div class="form-group">
                                                <label class="next-label">Giá </label>


                                                <input name="controls1$ctl00$ctl00$ctl00$txtpricenew" type="text" value="185000" id="txtpricenew" class="inputbox" onkeypress=" return isNumberKey(event)" style="width:100%;">

                                            </div>
                                            <div class="form-group">
                                                <label class="next-label">Giá so sánh</label>


                                                <input name="controls1$ctl00$ctl00$ctl00$txtpriceold" type="text" value="250000" id="txtpriceold" class="inputbox" onkeypress=" return isNumberKey(event)" placeholder="Giá so sánh với giá thị trường (Không bắt buộc nhập)" style="width:100%;">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="block_sp">
                                        <p class="ttg">Phân loại</p>
                                        <div class="form-group">
                                            <label class="next-label">Loại sản phẩm</label>

                                            <select name="controls1$ctl00$ctl00$ctl00$ddlcate" id="ddlcate" class="inputbox" style="width:100%;">
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
                                                <option selected="selected" value="11597">ĐỒ LÓT BẦU</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="block_sp">
                                        <p class="ttg">Giao diện</p>
                                        <div class="form-group">
                                            <label class="next-label">Loại giao diện</label>

                                            <select name="controls1$ctl00$ctl00$ctl00$ddlcate" id="ddlcate" class="inputbox" style="width:100%;">
                                                <option value="11575">Trang cơ bản</option>
                                                <option value="11576">Trang Hot 1</option>
                                                <option value="11591">Trang Hot 2</option>
                                                <option value="11593">Trang Hot 3</option>
                                                <option value="11593">Trang Hot 4</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="block_sp">
                                        <p class="ttg">Tùy chọn</p>
                                        <div class="form-group">
                                            <label class="next-label">Thứ tự</label>

                                            <input name="controls1$ctl00$ctl00$ctl00$txtorder" type="text" value="1" id="txtorder" class="inputbox" onkeypress=" return isNumberKey(event)" style="width:100%;">
                                        </div>
                                        <div class="form-group">
                                            <p class="ttg">Trạng thái</p>
                                            <input id="chkstatus" type="checkbox" name="controls1$ctl00$ctl00$ctl00$chkstatus" checked="checked">
                                            Hiển thị<br>
                                            <input id="chkupdatedate" type="checkbox" name="controls1$ctl00$ctl00$ctl00$chkupdatedate"><label for="chkupdatedate"> Cập nhật ngày đăng </label>
                                        </div>
                                    </div>

                                </div>
                            </div>




                        </div>
                        <h2 class="resp-accordion hor_1" role="tab" aria-controls="hor_1_tab_item-1" style="background-color: rgb(245, 245, 245); border-color: rgb(193, 193, 193);"><span class="resp-arrow"></span>Hình ảnh liên quan</h2>
                        <div class="resp-tab-content hor_1" aria-labelledby="hor_1_tab_item-1">

                            <div class="gallarey">
                                <label for="album">Ảnh slide mô tả tính năng</label>
                                <div id="uploadfiles" maxcount="16" input="ctl33_ctl00_FileServer2_ctl00" class="uploadfdfile upload-create-form">
                                    <div class="droptext textUploadNotice"></div>
                                    <div class="thumbnails prdthumbnails"></div>
                                    <div style="display: none" class="divFileProgressContainer">
                                        <div class="progressWrapper" id="divFileProgress"></div>
                                    </div>
                                    <div class="spanButtonPlaceholder block-upload-item" id="upload-drop-zone" style="position: relative; overflow: hidden; direction: ltr;">
                                        <div class="browse-file"></div>
                                        <p style="color: #065799;font-size: 13px;text-align: justify;font-weight: 700;">Chọn hình ảnh từ máy tính để tải lên</p><input multiple="multiple" type="file" name="file" style="position: absolute; right: 0px; top: 0px; font-family: Arial; font-size: 118px; margin: 0px; padding: 0px; cursor: pointer; opacity: 0;">
                                    </div>
                                    <div class="divFileProgressContainer1" style="display: none;"></div>
                                    <div class="droptext"></div>
                                </div>
                                <div class="prdthumbnails">

                                    <div class="item-upload" id="7456">
                                        <span class="item-upload-name">
                                            <img class="img-responsive" src="http://dambaujiwoon.khoweb24h.com//uploads/products/relative/24-ahihi2.jpg">
                                        </span>
                                        <span class="imt">
                                            <input type="text" placeholder="Tiêu đề ảnh" name="txtalt7456" id="txtalt7456" value="">
                                        </span>
                                        <span data="7456" class="item-upload-del" title="Xóa"></span>
                                    </div>

                                    <div class="item-upload" id="7457">
                                        <span class="item-upload-name">
                                            <img class="img-responsive" src="http://dambaujiwoon.khoweb24h.com//uploads/products/relative/24-ahihi1.jpg">
                                        </span>
                                        <span class="imt">
                                            <input type="text" placeholder="Tiêu đề ảnh" name="txtalt7457" id="txtalt7457" value="">
                                        </span>
                                        <span data="7457" class="item-upload-del" title="Xóa"></span>
                                    </div>

                                    <div class="item-upload" id="7458">
                                        <span class="item-upload-name">
                                            <img class="img-responsive" src="http://dambaujiwoon.khoweb24h.com//uploads/products/relative/24-ahihi3.jpg">
                                        </span>
                                        <span class="imt">
                                            <input type="text" placeholder="Tiêu đề ảnh" name="txtalt7458" id="txtalt7458" value="">
                                        </span>
                                        <span data="7458" class="item-upload-del" title="Xóa"></span>
                                    </div>

                                </div>
                            </div>

                            <div class="gallarey">
                                <label for="album">Ảnh chi tiết xe</label>
                                <div id="uploadfiles" maxcount="16" input="ctl33_ctl00_FileServer2_ctl00" class="uploadfdfile upload-create-form">
                                    <div class="droptext textUploadNotice"></div>
                                    <div class="thumbnails prdthumbnails"></div>
                                    <div style="display: none" class="divFileProgressContainer">
                                        <div class="progressWrapper" id="divFileProgress"></div>
                                    </div>
                                    <div class="spanButtonPlaceholder block-upload-item" id="upload-drop-zone" style="position: relative; overflow: hidden; direction: ltr;">
                                        <div class="browse-file"></div>
                                        <p style="color: #065799;font-size: 13px;text-align: justify;font-weight: 700;">Chọn hình ảnh từ máy tính để tải lên</p><input multiple="multiple" type="file" name="file" style="position: absolute; right: 0px; top: 0px; font-family: Arial; font-size: 118px; margin: 0px; padding: 0px; cursor: pointer; opacity: 0;">
                                    </div>
                                    <div class="divFileProgressContainer1" style="display: none;"></div>
                                    <div class="droptext"></div>
                                </div>
                            </div>

                            <div class="gallarey">
                                <label for="album">Ảnh thực tế</label>
                                <div id="uploadfiles" maxcount="16" input="ctl33_ctl00_FileServer2_ctl00" class="uploadfdfile upload-create-form">
                                    <div class="droptext textUploadNotice"></div>
                                    <div class="thumbnails prdthumbnails"></div>
                                    <div style="display: none" class="divFileProgressContainer">
                                        <div class="progressWrapper" id="divFileProgress"></div>
                                    </div>
                                    <div class="spanButtonPlaceholder block-upload-item" id="upload-drop-zone" style="position: relative; overflow: hidden; direction: ltr;">
                                        <div class="browse-file"></div>
                                        <p style="color: #065799;font-size: 13px;text-align: justify;font-weight: 700;">Chọn hình ảnh từ máy tính để tải lên</p><input multiple="multiple" type="file" name="file" style="position: absolute; right: 0px; top: 0px; font-family: Arial; font-size: 118px; margin: 0px; padding: 0px; cursor: pointer; opacity: 0;">
                                    </div>
                                    <div class="divFileProgressContainer1" style="display: none;"></div>
                                    <div class="droptext"></div>
                                </div>
                            </div>


                        </div>

                        <h2 class="resp-accordion hor_1" role="tab" aria-controls="hor_1_tab_item-4" style="background-color: rgb(245, 245, 245); border-color: rgb(193, 193, 193);"><span class="resp-arrow"></span>Cấu hình SEO</h2>
                        <div class="resp-tab-content hor_1" aria-labelledby="hor_1_tab_item-4">

                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="block_sp">
                                        <div class="form-group">
                                            <label class="text-no-bold" data-bind="text: Title">Hình ảnh icon màu sắc</label>
                                            <input type="file" name="controls1$ctl00$ctl00$ctl00$flupload" id="flupload" class="btn-change-link pull-right" style="width:180px;">

                                        </div>
                                        <div class="center">
                                            <img src="http://dambaujiwoon.khoweb24h.com/uploads/products/ahihi4.jpg" style="max-width:500px;height:80px">

                                        </div>
                                        <p style="color: #c3cfd8" class="center">Sử dụng nút <strong>Chọn hình</strong> để thêm hình.</p>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="block_sp">
                                        <div class="form-group">
                                            <label class="text-no-bold" data-bind="text: Title">Hình ảnh màu sắc của xe</label>
                                            <input type="file" name="controls1$ctl00$ctl00$ctl00$flupload" id="flupload" class="btn-change-link pull-right" style="width:180px;">
                                        </div>
                                        <div class="center">
                                            <img src="http://dambaujiwoon.khoweb24h.com/uploads/products/ahihi4.jpg" style="max-width:500px;height:80px">
                                        </div>
                                        <p style="color: #c3cfd8" class="center">Sử dụng nút <strong>Chọn hình</strong> để thêm hình.</p>
                                    </div>
                                </div>
                            </div>

                        </div>

                        <h2 class="resp-accordion hor_1" role="tab" aria-controls="hor_1_tab_item-2" style="background-color: rgb(245, 245, 245); border-color: rgb(193, 193, 193);"><span class="resp-arrow"></span>Thông tin khác</h2>
                        <div class="resp-tab-content hor_1" aria-labelledby="hor_1_tab_item-2">
                            <table width="100%" class="admintable">
                                <tbody>
                                    <tr id="pnvender" style="display: none">
                                        <td class="key" style="width: 170px" valign="top">
                                            <label for="txtphone">Hãng sản xuất</label>
                                        </td>
                                        <td>
                                            <select name="controls1$ctl00$ctl00$ctl00$ddlvendor" id="ddlvendor" class="inputbox">
                                                <option selected="selected" value="-1">Chọn nhà sản xuất</option>
                                                <option value="11491">THAO FASHION</option>

                                            </select>

                                        </td>
                                    </tr>

                                    <tr style="display: none">
                                        <td class="key" valign="top">
                                            <label for="txtphone">Xuất xứ</label>
                                        </td>
                                        <td>
                                            <input name="controls1$ctl00$ctl00$ctl00$txtxuatxu" type="text" id="txtxuatxu" class="inputbox" style="width:350px;">

                                        </td>
                                    </tr>
                                    <tr style="display: none">
                                        <td class="key" valign="top">
                                            <label for="txtphone">Trọng lượng</label>
                                        </td>
                                        <td>
                                            <input name="controls1$ctl00$ctl00$ctl00$txtweight" type="text" value="0" id="txtweight" class="inputbox" onkeypress=" return isNumberKey(event)">
                                            gram

                                        </td>
                                    </tr>
                                    <tr style="display: none">
                                        <td class="key">
                                            <label for="txtphone">Số lượng</label>
                                        </td>
                                        <td>
                                            <table>
                                                <tbody>
                                                    <tr>
                                                        <td width="200">
                                                            <input name="controls1$ctl00$ctl00$ctl00$txtnumber" type="text" value="1" id="txtnumber" class="inputbox" style="width:100px;">

                                                        </td>
                                                        <td width="100"></td>
                                                        <td></td>
                                                    </tr>
                                                </tbody>
                                            </table>

                                        </td>
                                    </tr>

                                    <tr style="display: none">
                                        <td width="90">
                                            <label for="txtuser">Đơn vị</label>
                                        </td>
                                        <td>
                                            <input name="controls1$ctl00$ctl00$ctl00$txtunit" type="text" id="txtunit" class="inputbox" style="width:100px;">

                                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

                                            <label for="txtphone">Giá đã bao gồm VAT</label>

                                            <input id="chkvat" type="checkbox" name="controls1$ctl00$ctl00$ctl00$chkvat">


                                        </td>
                                    </tr>
                                    <tr style="display: none">
                                        <td class="key" valign="top">
                                            <label for="txtphone">Bảo hành</label>
                                        </td>
                                        <td>
                                            <textarea name="controls1$ctl00$ctl00$ctl00$txtbh" rows="5" cols="50" id="txtbh"></textarea>

                                        </td>
                                    </tr>

                                    <tr>
                                        <td class="key" valign="top">
                                            <label for="txtphone">Tình trạng</label>
                                        </td>
                                        <td>
                                            <select name="controls1$ctl00$ctl00$ctl00$ddltt" id="ddltt" class="inputbox" style="width:170px;">
                                                <option selected="selected" value="1">Còn hàng</option>
                                                <option value="0">Hết hàng</option>

                                            </select>
                                            &nbsp;&nbsp;&nbsp;&nbsp;


                                        </td>
                                    </tr>
                                    <tr style="display: none">
                                        <td class="key" valign="top">
                                            <label for="txtphone">Cho phép đặt hàng</label>
                                        </td>
                                        <td>
                                            <input id="chkacceptbuy" type="checkbox" name="controls1$ctl00$ctl00$ctl00$chkacceptbuy" checked="checked">

                                        </td>
                                    </tr>
                                    <tr style="display: none">
                                        <td class="key" valign="top">
                                            <label for="txtphone">Hot Deal</label>
                                        </td>
                                        <td>
                                            <input id="chkhotdeal" type="checkbox" name="controls1$ctl00$ctl00$ctl00$chkhotdeal">
                                            Sản phẩm chạy Hot Deal

                                        </td>
                                    </tr>
                                    <tr style="display: none">
                                        <td class="key" valign="top">
                                            <label for="txtphone">Kết thúc hotdeal </label>
                                        </td>
                                        <td>
                                            <input name="controls1$ctl00$ctl00$ctl00$txthotdealdate" type="text" value="24/08/2020" id="txthotdealdate" class="inputbox hasDatepicker" placeholder="ngày/tháng/năm" style="width:170px;">
                                            lúc &nbsp;<select name="controls1$ctl00$ctl00$ctl00$ddlhour" id="ddlhour" class="inputbox">
                                                <option selected="selected" value="0">0</option>
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

                                            </select>
                                            giờ&nbsp;&nbsp;
                                            <select name="controls1$ctl00$ctl00$ctl00$ddlminute" id="ddlminute" class="inputbox">
                                                <option selected="selected" value="0">0</option>
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
                                                <option value="37">37</option>
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
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="key" valign="top">
                                            <label for="txtphone">Tùy chọn</label>
                                        </td>
                                        <td>
                                            <input id="chknew" type="checkbox" name="controls1$ctl00$ctl00$ctl00$chknew" checked="checked"><label for="chknew"> Sản phẩm mới</label>
                                            &nbsp;&nbsp;&nbsp;&nbsp;<br>
                                            <input id="chkhot" type="checkbox" name="controls1$ctl00$ctl00$ctl00$chkhot" checked="checked"><label for="chkhot"> Sản phẩm bán chạy</label>
                                            &nbsp;&nbsp;&nbsp;&nbsp;<br>
                                            <input id="chksale" type="checkbox" name="controls1$ctl00$ctl00$ctl00$chksale" checked="checked"><label for="chksale"> Sản phẩm khuyến mại</label>

                                        </td>
                                    </tr>
                                    <tr style="display: none">
                                        <td class="key" valign="top">
                                            <label for="txtphone">Số lượng sản phẩm đã bán</label>
                                        </td>
                                        <td>
                                            <input name="controls1$ctl00$ctl00$ctl00$txtnumprdsale" type="text" value="0" id="txtnumprdsale" class="inputbox">

                                        </td>
                                    </tr>
                                </tbody>
                            </table>


                        </div>

                        <h2 class="resp-accordion hor_1" role="tab" aria-controls="hor_1_tab_item-3" style="background-color: rgb(245, 245, 245); border-color: rgb(193, 193, 193);"><span class="resp-arrow"></span>Cấu hình SEO</h2>
                        <div class="resp-tab-content hor_1" aria-labelledby="hor_1_tab_item-3">

                            <p>
                            </p>
                            <table class="admintable">
                                <tbody>
                                    <tr>
                                        <td valign="top">Tối ưu SEO</td>
                                        <td>
                                            <div>
                                                <span class="page-title-seo">Áo lót su đúc</span>
                                                <div class="page-description-seo ws-nm"><span>http://dambaujiwoon.khoweb24h.com/ao-lot-su-duc</span></div>
                                                <div class="page-url-seo ws-nm">
                                                    Áo lót su đúc, Thiết kế trẻ trung, tinh tế. Chất liệu mềm mát, dễ chịu
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td width="150" class="key">
                                            <label for="txttitle">Thẻ tiêu đề trang</label>
                                        </td>
                                        <td>
                                            <input name="controls1$ctl00$ctl00$ctl00$txttitleweb" type="text" value="Áo lót su đúc" id="txttitleweb" class="inputbox" style="width:460px;">

                                        </td>
                                    </tr>
                                    <tr>
                                        <td width="150" class="key">
                                            <label for="txttitle">Đường dẫn</label>

                                        </td>
                                        <td>
                                            <div class="next-input--stylized">
                                                <span class="next-input-add-on next-input__add-on--before">http://dambaujiwoon.khoweb24h.com/</span>

                                                <input name="controls1$ctl00$ctl00$ctl00$txturl" type="text" value="ao-lot-su-duc" id="txturl" class="txtpa" style="width:335px;">
                                            </div>

                                        </td>
                                    </tr>
                                    <tr>
                                        <td width="150" class="key">
                                            <label for="txtkeyword">Thẻ từ khóa</label>
                                        </td>
                                        <td>
                                            <textarea name="controls1$ctl00$ctl00$ctl00$txtkeyword" rows="5" cols="70" id="txtkeyword" class="inputbox" style="height:80px;">Áo lót su đúc, Ao lot su duc</textarea>

                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="key">
                                            <label for="txtdesciption">Thẻ mô tả</label>
                                        </td>
                                        <td>
                                            <textarea name="controls1$ctl00$ctl00$ctl00$txtmetadesc" rows="5" cols="70" id="txtmetadesc" class="inputbox" style="height:80px;">Áo lót su đúc, Thiết kế trẻ trung, tinh tế. Chất liệu mềm mát, dễ chịu</textarea>

                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <p></p>
                        </div>


                    </div>
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

        });
    </script>


</div>
@endsection