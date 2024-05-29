@extends('/template/index')

@section('content')
<form action="{{route('admin.submit.edit.product', $product->id)}}" method="post" enctype='multipart/form-data'>
    @csrf
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
                                        <button id="lnkupdate" class="toolbar" type="submit"
                                            href="javascript:__doPostBack('controls1$ctl00$ctl00$ctl00$lnkupdate','')">
                                            <span class="icon-ok-update"></span>
                                            Cập nhật
                                        </button>
                                    </td>
                                    <td align="center">
                                        <a id="lnkclose" class="toolbar" href="{{route('admin.list.product')}}">
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
                            <li class="resp-tab-item hor_1" aria-controls="hor_1_tab_item-0" role="tab"
                                style="background-color: rgb(245, 245, 245); border-color: rgb(193, 193, 193);">
                                Thông
                                tin chi tiết
                            </li>
                            <li class="resp-tab-item hor_1" aria-controls="hor_1_tab_item-1" role="tab"
                                style="background-color: rgb(245, 245, 245); border-color: rgb(193, 193, 193);">Hình
                                ảnh
                                chi tiết
                            </li>
                            <li class="resp-tab-item hor_1" aria-controls="hor_1_tab_item-4" role="tab"
                                style="background-color: rgb(245, 245, 245); border-color: rgb(193, 193, 193);">Hình
                                ảnh
                                và màu sắc
                            </li>
                            <li class="resp-tab-item hor_1" aria-controls="hor_1_tab_item-2" role="tab"
                                style="background-color: rgb(245, 245, 245); border-color: rgb(193, 193, 193);">
                                Thông
                                tin khác
                            </li>
                            <li class="resp-tab-item hor_1" aria-controls="hor_1_tab_item-3" role="tab"
                                style="background-color: rgb(245, 245, 245); border-color: rgb(193, 193, 193);">Cấu
                                hình
                                SEO
                            </li>
                            <li class="resp-tab-item hor_1 heidi_page" aria-controls="hor_1_tab_item-4" role="tab"
                                style="background-color: rgb(245, 245, 245); border-color: rgb(193, 193, 193);">
                                ladipage hot 1 phiên bản Heidi
                            </li>
                            <li class="resp-tab-item hor_1 heidi_page" aria-controls="hor_1_tab_item-4" role="tab"
                                style="background-color: rgb(245, 245, 245); border-color: rgb(193, 193, 193);">
                                ladipage hot 2 phiên bản Gogo
                            </li>
                            <li class="resp-tab-item hor_1 heidi_page" aria-controls="hor_1_tab_item-4" role="tab"
                                style="background-color: rgb(245, 245, 245); border-color: rgb(193, 193, 193);">
                                ladipage hot 3 phiên bản Nispaviva
                            </li>
                            <li class="resp-tab-item hor_1 heidi_page" aria-controls="hor_1_tab_item-4" role="tab"
                                style="background-color: rgb(245, 245, 245); border-color: rgb(193, 193, 193);">
                                ladipage hot 4 phiên bản X3
                            </li>
                        </ul>
                        <div class="resp-tabs-container hor_1" style="border-color: rgb(193, 193, 193);">
                            <h2 class="resp-accordion hor_1" role="tab" aria-controls="hor_1_tab_item-0"
                                style="background: none rgb(245, 245, 245); border-color: rgb(193, 193, 193);"><span
                                    class="resp-arrow"></span>Thông tin chi tiết</h2>
                            <div class="resp-tab-content hor_1" aria-labelledby="hor_1_tab_item-0">
                                <div class="row">
                                    <div class="col-sm-8">
                                        <div class="block_sp">
                                            <div class="form-group">
                                                <label class="next-label">Tên sản phẩm</label>
                                                <input required name="product_name" type="text"
                                                    value="{{$product->product_name}}" id="txtproductname"
                                                    class="inputbox" placeholder="" style="width:100%;">
                                            </div>
                                        </div>
                                        <div class="block_sp">
                                            <div class="form-group">
                                                <label class="next-label">Quãng đường di chuyển</label>

                                                <input name="distance_traveled" type="text"
                                                    value="{{$product->distance_traveled}}" id="txtproductname"
                                                    class="inputbox" placeholder="" style="width:100%;">
                                            </div>
                                        </div>
                                        <div class="block_sp">
                                            <div class="form-group">
                                                <label class="next-label">Vận tốc lớn nhất</label>

                                                <input name="maximum_speed" type="number"
                                                    value="{{$product->maximum_speed}}" id="txtproductname"
                                                    class="inputbox" placeholder="" style="width:100%;">
                                            </div>
                                        </div>
                                        <div class="block_sp">
                                            <div class="form-group">
                                                <label class="next-label">Khối lượng cho phép chở</label>

                                                <input name="allowable_weight_to_carry" type="number"
                                                    value="{{$product->allowable_weight_to_carry}}" id="txtproductname"
                                                    class="inputbox" placeholder="" style="width:100%;">
                                            </div>
                                        </div>
                                        <div class="block_sp">
                                            <p class="ttg">Mô tả</p>
                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <label class="next-label">Mô tả 1</label>
                                                        <input name="describe_input_1" type="text"
                                                            value="{{$product->describe_input_1}}" id="txtproductname"
                                                            class="inputbox" placeholder="Tiêu đề mô tả 1"
                                                            style="width:100%;">
                                                        <textarea name="describe_textarea_1" rows="5" cols="70"
                                                            id="txtkeyword" class="inputbox"
                                                            style="width: 100%; height:80px;">{{$product->describe_textarea_1}}</textarea>

                                                    </div>
                                                </div>
                                                <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <label class="next-label">Mô tả 2</label>
                                                        <input name="describe_input_2" type="text"
                                                            value="{{$product->describe_input_2}}" id="txtproductname"
                                                            class="inputbox" placeholder="Tiêu đề mô tả 2"
                                                            style="width:100%;">
                                                        <textarea name="describe_textarea_2" rows="5" cols="70"
                                                            id="txtkeyword" class="inputbox"
                                                            style="width: 100%; height:80px;">{{$product->describe_textarea_2}}</textarea>

                                                    </div>
                                                </div>
                                                <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <label class="next-label">Mô tả 3</label>
                                                        <input name="describe_input_3" type="text"
                                                            value="{{$product->describe_input_3}}" id="txtproductname"
                                                            class="inputbox" placeholder="Tiêu đề mô tả 3"
                                                            style="width:100%;">
                                                        <textarea name="describe_textarea_3" rows="5" cols="70"
                                                            id="txtkeyword" class="inputbox"
                                                            style="width: 100%; height:80px;">{{$product->describe_textarea_3}}</textarea>

                                                    </div>
                                                </div>
                                                <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <label class="next-label">Mô tả 4</label>
                                                        <input name="describe_input_4" type="text"
                                                            value="{{$product->describe_input_4}}" id="txtproductname"
                                                            class="inputbox" placeholder="Tiêu đề mô tả 4"
                                                            style="width:100%;">
                                                        <textarea name="describe_textarea_4" rows="5" cols="70"
                                                            id="txtkeyword" class="inputbox"
                                                            style="width: 100%; height:80px;">{{$product->describe_textarea_4}}</textarea>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="block_sp">
                                            <div class="form-group">
                                                <label class="next-label">Chi tiết</label>

                                                <div class="block_sp">
                                                    <div class="form-group">
                                                        <label class="text-no-bold" data-bind="text: Title">Hình ảnh block chi tiết</label>
                                                        <input type="file" name="block_detail_image" id="flupload"
                                                            class="btn-change-link pull-right" style="width:180px;">
                                                    </div>
                                                    <div>
                                                        <img style="width: 180px; height: auto"
                                                            src="{{$product->block_detail_image}}">
                                                    </div>
                                                </div>

                                               
                                                <textarea name="detail" id="detail" cols="50"
                                                    rows="30">{!! html_entity_decode($product->detail) !!} </textarea>
                                            </div>
                                        </div>
                                        <div class="block_sp">
                                            <div class="form-group">
                                                <label class="next-label">Thông số kỹ thuật</label>
                                                <h6>Tổng quan</h6>
                                                <div class="tskt row">
                                                    <div class="col-sm-12">
                                                        <textarea name="overview" id="overview" class="inputbox"
                                                            placeholder="Tên thông số tổng quan"
                                                            style="width:100%;">{!! $product->overview !!}</textarea>
                                                    </div>

                                                </div>
                                                <h6>Khung xe</h6>
                                                <div class="tskt row">
                                                    <div class="col-sm-12">
                                                        <textarea name="chassis" id="chassis" class="inputbox"
                                                            placeholder="Tên thông số khung xe"
                                                            style="width:100%;">{!! $product->chassis !!}</textarea>
                                                    </div>

                                                </div>
                                                <h6>Động cơ</h6>
                                                <div class="tskt row">
                                                    <div class="col-sm-12">
                                                        <textarea name="engine" id="engine" class="inputbox"
                                                            placeholder="Tên thông số dộng cơ"
                                                            style="width:100%;">{!! $product->engine !!}</textarea>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="block_sp">
                                            <div class="form-group">
                                                <label class="text-no-bold" data-bind="text: Title">Hình ảnh đại
                                                    diện (1230 × 700 px)</label>
                                                <input type="file" name="representative_image" id="flupload"
                                                    class="btn-change-link pull-right" style="width:180px;">
                                            </div>
                                            <div>
                                                <img style="width: 180px; height: auto"
                                                    src="{{$product->representative_image}}">
                                            </div>
                                        </div>
                                        <div class="block_sp">
                                            <div class="form-group">
                                                <label class="text-no-bold" data-bind="text: Title">Hình ảnh
                                                    360</label>
                                                <input type="file" name="images360[]" id="images360"
                                                    class="btn-change-link pull-right" style="width:180px;" multiple>
                                            </div>
                                            <div>
                                                <div id="image-preview-5">
                                                    @if(!empty($images360))
                                                    @foreach($images360 as $value)
                                                    <img style="width: 180px; height: auto" src="{{$value->images}}">
                                                    @endforeach
                                                    @endif
                                                </div>


                                            </div>

                                        </div>
                                        <div class="block_sp">
                                            <div class="form-group">
                                                <label class="next-label">Mã sản phẩm</label>

                                                <input name="product_code" type="text"
                                                    value="{{$product->product_code}}" id="txtproductkey"
                                                    class="inputbox" placeholder="" style="width:100%;">
                                            </div>
                                        </div>
                                        <div class="block_sp">
                                            <div class="form-group">
                                                <p class="ttg">Giá sản phẩm</p>

                                                <div class="form-group">
                                                    <label class="next-label">Giá </label>


                                                    <input name="product_price" type="number"
                                                        value="{{$product->product_price}}" id="txtpricenew"
                                                        class="inputbox" onkeypress=" return isNumberKey(event)"
                                                        style="width:100%;" required>

                                                </div>
                                                <div class="form-group">
                                                    <label class="next-label">Giá so sánh</label>


                                                    <input name="price_comparison" type="number"
                                                        value="{{$product->price_comparison}}" id="txtpriceold"
                                                        class="inputbox" onkeypress=" return isNumberKey(event)"
                                                        placeholder="Giá so sánh với giá thị trường (Không bắt buộc nhập)"
                                                        style="width:100%;" required>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="block_sp">
                                            <p class="ttg">Phân loại</p>
                                            <div class="form-group">
                                                <label class="next-label">Danh mục sản phẩm</label>

                                                <select name="product_portfolio" id="ddlcate" class="inputbox"
                                                    style="width:100%;">
                                                    @if(!empty($categoryProduct))
                                                    @foreach($categoryProduct as $value)
                                                    <option value="{{$value->id}}" @if($value->id ==
                                                        $product->product_portfolio) selected @endif>{{$value->name}}
                                                    </option>
                                                    @endforeach
                                                    @endif
                                                </select>
                                            </div>
                                        </div>

                                        <div class="block_sp">
                                            <p class="ttg">Giao diện</p>
                                            <div class="form-group">
                                                <label class="next-label">Loại giao diện (tabs thêm nội dung giao
                                                    diện tương ứng của ladipage xuất hiện bên cạnh cầu hình seo khi
                                                    chọn giao diện)</label>

                                                <select name="interface_type" id="ddlcate_page" class="inputbox"
                                                    style="width:100%;">
                                                    <option value="1" @if("1"==$product->interface_type) selected
                                                        @endif>
                                                        Trang cơ bản
                                                    </option>
                                                    <option value="2" @if("2"==$product->interface_type) selected
                                                        @endif>
                                                        Trang Hot 1 (Phiên bản Heidi)
                                                    </option>
                                                    <option value="3" @if("3"==$product->interface_type) selected
                                                        @endif>
                                                        Trang Hot 2 (Phiên bản gogo)
                                                    </option>
                                                    <option value="4" @if("4"==$product->interface_type) selected
                                                        @endif>
                                                        Trang Hot 3 (Phiên bản nispaviva)
                                                    </option>
                                                    <option value="5" @if("5"==$product->interface_type) selected
                                                        @endif>
                                                        Trang Hot 4 (Phiên bản x3)
                                                    </option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="block_sp">
                                            <div class="form-group">
                                                <p class="ttg">Trạng thái</p>
                                                <input id="chkstatus" type="checkbox" name="status" @if($product->status
                                                == 'active')
                                                checked="checked"
                                                @endif>
                                                Hiển thị<br>
                                            </div>
                                        </div>

                                    </div>
                                </div>


                            </div>
                            <h2 class="resp-accordion hor_1" role="tab" aria-controls="hor_1_tab_item-1"
                                style="background-color: rgb(245, 245, 245); border-color: rgb(193, 193, 193);"><span
                                    class="resp-arrow"></span>Hình ảnh liên quan</h2>
                            <div class="resp-tab-content hor_1" aria-labelledby="hor_1_tab_item-1">

                                <div class="gallarey">
                                    <label for="album">Ảnh slide mô tả tính năng (722 × 783 px)</label>
                                    <div id="uploadfiles" maxcount="16" input="ctl33_ctl00_FileServer2_ctl00"
                                        class="uploadfdfile upload-create-form">
                                        <div class="droptext textUploadNotice"></div>
                                        <div class="thumbnails prdthumbnails"></div>
                                        <div style="display: none" class="divFileProgressContainer">
                                            <div class="progressWrapper" id="divFileProgress"></div>
                                        </div>
                                        <div class="spanButtonPlaceholder block-upload-item" id="upload-drop-zone"
                                            style="position: relative; overflow: hidden; direction: ltr;">
                                            <div class="browse-file"></div>
                                            <p
                                                style="color: #065799;font-size: 13px;text-align: justify;font-weight: 700;">
                                                Chọn hình ảnh từ máy tính để tải lên</p><input multiple="multiple"
                                                type="file" id="feature_description" name="feature_description[]"
                                                style="position: absolute; right: 0px; top: 0px; font-family: Arial; font-size: 118px; margin: 0px; padding: 0px; cursor: pointer; opacity: 0;">
                                        </div>
                                        <div class="divFileProgressContainer1" style="display: none;"></div>
                                        <div class="droptext"></div>
                                    </div>

                                    <div id="image-preview">
                                        @if(!empty($feature_description))
                                        @foreach($feature_description as $value)
                                        <img style="width: 200px;height: auto;object-fit: contain;"
                                            src="{{$value->images}}">
                                        @endforeach
                                        @endif
                                    </div>
                                    <br>
                                    <hr>
                                    <br>

                                </div>

                                <div class="gallarey">
                                    <label for="album">Ảnh chi tiết xe (up nhiều ảnh một lúc, 494 × 636 px)</label>
                                    <input name="vehicle_detail_photos_title" type="text"
                                        value="{{$product->vehicle_detail_photos_title}}"
                                        id="vehicle_detail_photos_title" class="inputbox" placeholder="Tiêu đề mô tả 2"
                                        style="width:100%;">
                                    <textarea name="vehicle_detail_photos_desc" rows="5" cols="70"
                                        id="vehicle_detail_photos_desc" class="inputbox"
                                        style="width: 100%; height:80px;">{{$product->vehicle_detail_photos_desc}}</textarea>
                                    <div id="uploadfiles" maxcount="16" input="ctl33_ctl00_FileServer2_ctl00"
                                        class="uploadfdfile upload-create-form">
                                        <div class="droptext textUploadNotice"></div>
                                        <div class="thumbnails prdthumbnails"></div>
                                        <div style="display: none" class="divFileProgressContainer">
                                            <div class="progressWrapper" id="divFileProgress"></div>
                                        </div>
                                        <div class="spanButtonPlaceholder block-upload-item" id="upload-drop-zone"
                                            style="position: relative; overflow: hidden; direction: ltr;">
                                            <div class="browse-file"></div>
                                            <p
                                                style="color: #065799;font-size: 13px;text-align: justify;font-weight: 700;">
                                                Chọn hình ảnh từ máy tính để tải lên</p><input multiple="multiple"
                                                type="file" id="vehicle_detail_photos" name="vehicle_detail_photos[]"
                                                style="position: absolute; right: 0px; top: 0px; font-family: Arial; font-size: 118px; margin: 0px; padding: 0px; cursor: pointer; opacity: 0;">
                                        </div>
                                        <div class="divFileProgressContainer1" style="display: none;"></div>
                                        <div class="droptext"></div>
                                    </div>
                                    <div id="image-preview-1">
                                        @if(!empty($vehicle_detail_photos))
                                        @foreach($vehicle_detail_photos as $value)
                                        <img style="width: 200px;height: auto;object-fit: contain;"
                                            src="{{$value->images}}">
                                        @endforeach
                                        @endif
                                    </div>
                                    <br>
                                    <hr>
                                    <br>
                                </div>

                                <div class="gallarey">
                                    <label for="album">Ảnh thực tế (up nhiều ảnh một lúc, 346 × 597 px)</label>
                                    <input name="actual_photo_title" type="text"
                                        value="{{$product->actual_photo_title}}" id="actual_photo_title"
                                        class="inputbox" placeholder="Tiêu đề mô tả 2" style="width:100%;">
                                    <textarea name="actual_photo_desc" rows="5" cols="70" id="actual_photo_desc"
                                        class="inputbox"
                                        style="width: 100%; height:80px;">{{$product->actual_photo_desc}}</textarea>
                                    <div id="uploadfiles" maxcount="16" input="ctl33_ctl00_FileServer2_ctl00"
                                        class="uploadfdfile upload-create-form">
                                        <div class="droptext textUploadNotice"></div>
                                        <div class="thumbnails prdthumbnails"></div>
                                        <div style="display: none" class="divFileProgressContainer">
                                            <div class="progressWrapper" id="divFileProgress"></div>
                                        </div>
                                        <div class="spanButtonPlaceholder block-upload-item" id="upload-drop-zone"
                                            style="position: relative; overflow: hidden; direction: ltr;">
                                            <div class="browse-file"></div>
                                            <p
                                                style="color: #065799;font-size: 13px;text-align: justify;font-weight: 700;">
                                                Chọn hình ảnh từ máy tính để tải lên</p><input multiple="multiple"
                                                type="file" id="actual_photo" name="actual_photo[]"
                                                style="position: absolute; right: 0px; top: 0px; font-family: Arial; font-size: 118px; margin: 0px; padding: 0px; cursor: pointer; opacity: 0;">
                                        </div>
                                        <div class="divFileProgressContainer1" style="display: none;"></div>
                                        <div class="droptext"></div>
                                    </div>

                                    <div id="image-preview-2">
                                        @if(!empty($actual_photo))
                                        @foreach($actual_photo as $value)
                                        <img style="width: 200px;height: auto;object-fit: contain;"
                                            src="{{$value->images}}">
                                        @endforeach
                                        @endif
                                    </div>
                                </div>


                            </div>

                            <h2 class="resp-accordion hor_1" role="tab" aria-controls="hor_1_tab_item-4"
                                style="background-color: rgb(245, 245, 245); border-color: rgb(193, 193, 193);"><span
                                    class="resp-arrow"></span>Cấu hình SEO</h2>
                            <div class="resp-tab-content hor_1" aria-labelledby="hor_1_tab_item-4">

                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="block_sp">
                                            <div class="form-group">
                                                <label class="text-no-bold" data-bind="text: Title">Hình ảnh icon
                                                    màu
                                                    sắc</label>
                                                <input type="file" name="icon_images[]" id="icon_images"
                                                    class="btn-change-link pull-right" style="width:180px;" multiple>

                                            </div>
                                            <div id="image-preview-3">
                                                @if(!empty($icon_images))
                                                @foreach($icon_images as $value)
                                                <img style="width: 100px;height: auto;object-fit: contain;"
                                                    src="{{$value->images}}">
                                                @endforeach
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="block_sp">
                                            <div class="form-group">
                                                <label class="text-no-bold" data-bind="text: Title">Hình ảnh màu sắc
                                                    (1230 × 700 px)
                                                    của
                                                    xe</label>
                                                <input type="file" name="color_image[]" id="color_image"
                                                    class="btn-change-link pull-right" style="width:180px;" multiple>
                                            </div>
                                            <div id="image-preview-4">
                                                @if(!empty($color_image))
                                                @foreach($color_image as $value)
                                                <img style="width: 250px;object-fit: contain;" src="{{$value->images}}">
                                                @endforeach
                                                @endif
                                            </div>

                                        </div>
                                    </div>
                                </div>

                            </div>

                            <h2 class="resp-accordion hor_1" role="tab" aria-controls="hor_1_tab_item-2"
                                style="background-color: rgb(245, 245, 245); border-color: rgb(193, 193, 193);"><span
                                    class="resp-arrow"></span>Thông tin khác</h2>
                            <div class="resp-tab-content hor_1" aria-labelledby="hor_1_tab_item-2">
                                <table width="100%" class="admintable">
                                    <tbody>

                                        <tr>
                                            <td class="key" valign="top">
                                                <label for="txtphone">Tình trạng</label>
                                            </td>
                                            <td>
                                                <select name="status_product" id="ddltt" class="inputbox"
                                                    style="width:170px;">
                                                    <option value="1" @if("1"==$product->status_product) selected
                                                        @endif>Còn
                                                        hàng
                                                    </option>
                                                    <option value="2" @if("2"==$product->status_product) selected
                                                        @endif>Hết
                                                        hàng
                                                    </option>

                                                </select>
                                                &nbsp;&nbsp;&nbsp;&nbsp;

                                            </td>
                                        </tr>

                                        <tr>
                                            <td class="key" valign="top">
                                                <label for="txtphone">Tùy chọn</label>
                                            </td>
                                            <td>
                                                <input id="chknew" type="checkbox" name="new_product"
                                                    @if($product->new_product == 'active')
                                                checked="checked"
                                                @endif><label for="chknew"> Sản phẩm Hot</label>
                                                &nbsp;&nbsp;&nbsp;&nbsp;<br>
                                                <input id="chkhot" type="checkbox" name="selling_products"
                                                    @if($product->selling_products == 'active')
                                                checked="checked"
                                                @endif><label for="chkhot"> Sản phẩm bán chạy</label>
                                                &nbsp;&nbsp;&nbsp;&nbsp;<br>
                                                <input id="chksale" type="checkbox" name="promotional_products"
                                                    @if($product->promotional_products == 'active')
                                                checked="checked"
                                                @endif><label for="chksale"> Sản phẩm khuyến mại</label>

                                            </td>
                                        </tr>

                                    </tbody>
                                </table>


                            </div>

                            <h2 class="resp-accordion hor_1" role="tab" aria-controls="hor_1_tab_item-1"
                                style="background-color: rgb(245, 245, 245); border-color: rgb(193, 193, 193);">
                                <span class="resp-arrow"></span>Cấu hình SEO
                            </h2>
                            <div class="resp-tab-content hor_1" aria-labelledby="hor_1_tab_item-3"
                                style="border-color: rgb(193, 193, 193);">

                                <p>
                                </p>
                                <table class="admintable">
                                    <tbody>
                                        <tr>
                                            <td valign="top">Tối ưu SEO</td>
                                            <td>
                                                <div>
                                                    <span class="page-title-seo">{{$product->page_title_tag}}</span>
                                                    <div class="page-description-seo ws-nm">
                                                        <span>{{ url()->to('/') . '/' }}{{$product->path}}</span>
                                                    </div>
                                                    <div class="page-url-seo ws-nm">
                                                        {{$product->description_card}}
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td width="150" class="key">
                                                <label for="txttitle">Thẻ tiêu đề trang</label>
                                            </td>
                                            <td>
                                                <input name="page_title_tag" type="text" id="txttitleweb"
                                                    class="inputbox" style="width:460px;"
                                                    value="{{!empty(old('page_title_tag')) ? old('page_title_tag') : $product->page_title_tag}}">
                                                <a href="#" class="tooltip">
                                                    <img src="{{ asset('images/help-icon.png') }}">
                                                    <span><b>Tiêu đề trang</b><br>
                                                        Nội dung được hiển thị dưới dạng tiêu đề trong kết quả tìm kiếm
                                                        và trên trình duyệt của người dùng. <br><i>(Tiêu đề nên để dưới
                                                            70 ký tự)</i>
                                                    </span>
                                                </a>
                                                @if($errors->has('page_title_tag'))
                                                <p class="text-danger" style="margin-top: 10px;">
                                                    {{ $errors->first('page_title_tag') }}</p>
                                                @endif
                                            </td>
                                        </tr>

                                        <tr>
                                            <td width="150" class="key">
                                                <label for="txtkeyword">Thẻ từ khóa</label>
                                            </td>
                                            <td>
                                                <textarea name="keyword_tags" rows="5" cols="70" id="txtkeyword"
                                                    class="inputbox"
                                                    style="height:80px;">{{!empty(old('keyword_tags')) ? old('keyword_tags') : $product->keyword_tags}}</textarea>
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
                                                <textarea name="description_card" rows="5" cols="70" id="txtdesc"
                                                    class="inputbox"
                                                    style="height:80px;">{{!empty(old('description_card')) ? old('description_card') : $product->description_card}}</textarea>
                                                <a href="#" class="tooltip">
                                                    <img src="{{ asset('images/help-icon.png') }}">
                                                    <span><b>Thẻ mô tả</b><br>
                                                        Cung cấp một mô tả ngắn của trang. Trong vài trường hợp, mô tả
                                                        này được sử dụng như một phần của đoạn trích được hiển thị trong
                                                        kết quả tìm kiếm. <br><i>(Mô tả nên để dưới 160 ký tự)</i>
                                                    </span>
                                                </a>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                                <p></p>

                            </div>

                            <h2 class="resp-accordion hor_1" role="tab" aria-controls="hor_1_tab_item-1"
                                style="background-color: rgb(245, 245, 245); border-color: rgb(193, 193, 193);">
                                <span class="resp-arrow"></span>Heidi
                            </h2>
                            <div class="resp-tab-content hor_1" aria-labelledby="hor_1_tab_item-3"
                                style="border-color: rgb(193, 193, 193);">

                                <div class="row">
                                    <div class="col-sm-4">
                                        <div class="block_sp">
                                            <div class="form-group">
                                                <label class="text-no-bold" data-bind="text: Title">Hình ảnh
                                                    banner(section 1)</label>
                                                <input type="file" name="heidi_images_banner1" id="flupload"
                                                    class="btn-change-link pull-right" style="width:180px;">
                                            </div>
                                            <div>
                                                <img style="width: 180px; height: auto"
                                                    src="{{$product->heidi_images_banner1 ?? ''}}">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="block_sp">
                                            <div class="form-group">
                                                <label class="text-no-bold" data-bind="text: Title">Hình ảnh tên
                                                    xe(section 2)</label>
                                                <input type="file" name="heidi_images_banner2" id="flupload"
                                                    class="pull-right" style="width:180px;">
                                            </div>
                                            <div style="background: #000;">
                                                <img style="width: 180px; height: auto"
                                                    src="{{$product->heidi_images_banner2 ?? ''}}">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="block_sp">
                                            <div class="form-group">
                                                <label class="text-no-bold" data-bind="text: Title">Hình ảnh
                                                    xe(section 2)</label>
                                                <input type="file" name="heidi_images_banner3" id="flupload"
                                                    class="pull-right" style="width:180px;">
                                            </div>
                                            <div>
                                                <img style="width: 180px; height: auto"
                                                    src="{{$product->heidi_images_banner3 ?? ''}}">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="block_sp">
                                            <div class="form-group">
                                                <label class="text-no-bold" data-bind="text: Title">Hình ảnh
                                                    xe(section 3) (kt ảnh: 1440 × 1015 px)</label>
                                                <input type="file" name="heidi_images_banner4" id="flupload"
                                                    class="pull-right" style="width:180px;">
                                            </div>
                                            <div>
                                                <img style="width: 180px; height: auto"
                                                    src="{{$product->heidi_images_banner4 ?? ''}}">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="block_sp">
                                            <div class="form-group">
                                                <label class="text-no-bold" data-bind="text: Title">Hình ảnh xe da
                                                    dạng màu sắc(section 4)</label>
                                                <input type="file" name="heidi_images_banner5" id="flupload"
                                                    class="pull-right" style="width:180px;">
                                            </div>
                                            <div>
                                                <img style="width: 180px; height: auto"
                                                    src="{{$product->heidi_images_banner5 ?? ''}}">
                                            </div>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="col-sm-12 ">
                                        <p class="ttg">Section Perfectly Stealth (kt ảnh: 570 × 386 px)</p>
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <div class="form-group"
                                                    style="padding: 10px 10px;border: 1px solid #d4d4d4;">
                                                    <div class="form-group">
                                                        <label class="text-no-bold" data-bind="text: Title">Hình ảnh
                                                            1</label>
                                                        <input type="file" name="heidi_images_banner6" id="flupload"
                                                            class="pull-right" style="width:180px;">
                                                    </div>
                                                    <div>
                                                        <img style="width: 180px; height: auto"
                                                            src="{{$product->heidi_images_banner6 ?? ''}}">
                                                    </div>
                                                    <label class="next-label">Mô tả 1</label>
                                                    <input name="heidi_title_banner6" type="text"
                                                        value="{{$product->heidi_title_banner6 ?? ''}}"
                                                        id="txtproductname" class="inputbox"
                                                        placeholder="Perfectly Stealth 1" style="width:100%;">
                                                    <textarea name="heidi_desc_banner6" rows="5" cols="70"
                                                        id="txtkeyword" class="inputbox"
                                                        style="width: 100%; height:80px;">{{$product->heidi_desc_banner6 ?? ''}}</textarea>

                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="form-group"
                                                    style="padding: 10px 10px;border: 1px solid #d4d4d4;">
                                                    <div class="form-group">
                                                        <label class="text-no-bold" data-bind="text: Title">Hình ảnh
                                                            2</label>
                                                        <input type="file" name="heidi_title_banner7" id="flupload"
                                                            class="pull-right" style="width:180px;">
                                                    </div>
                                                    <div>
                                                        <img style="width: 180px; height: auto"
                                                            src="{{$product->heidi_images_banner7 ?? ''}}">
                                                    </div>
                                                    <label class="next-label">Mô tả 2</label>
                                                    <input name="heidi_title_banner7" type="text"
                                                        value="{{$product->heidi_title_banner7 ?? ''}}"
                                                        id="txtproductname" class="inputbox"
                                                        placeholder="Perfectly Stealth 2" style="width:100%;">
                                                    <textarea name="heidi_desc_banner7" rows="5" cols="70"
                                                        id="txtkeyword" class="inputbox"
                                                        style="width: 100%; height:80px;">{{$product->heidi_desc_banner7 ?? ''}}</textarea>

                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="form-group"
                                                    style="padding: 10px 10px;border: 1px solid #d4d4d4;">
                                                    <div class="form-group">
                                                        <label class="text-no-bold" data-bind="text: Title">Hình ảnh
                                                            3</label>
                                                        <input type="file" name="heidi_images_banner8" id="flupload"
                                                            class="pull-right" style="width:180px;">
                                                    </div>
                                                    <div>
                                                        <img style="width: 180px; height: auto"
                                                            src="{{$product->heidi_images_banner8 ?? ''}}">
                                                    </div>
                                                    <label class="next-label">Mô tả 3</label>
                                                    <input name="heidi_title_banner8" type="text"
                                                        value="{{$product->heidi_title_banner8 ?? ''}}"
                                                        id="txtproductname" class="inputbox"
                                                        placeholder="Perfectly Stealth 3" style="width:100%;">
                                                    <textarea name="heidi_desc_banner8" rows="5" cols="70"
                                                        id="txtkeyword" class="inputbox"
                                                        style="width: 100%; height:80px;">{{$product->heidi_desc_banner8 ?? ''}}</textarea>

                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="form-group"
                                                    style="padding: 10px 10px;border: 1px solid #d4d4d4;">
                                                    <div class="form-group">
                                                        <label class="text-no-bold" data-bind="text: Title">Hình ảnh
                                                            4</label>
                                                        <input type="file" name="heidi_images_banner9" id="flupload"
                                                            class="pull-right" style="width:180px;">
                                                    </div>
                                                    <div>
                                                        <img style="width: 180px; height: auto"
                                                            src="{{$product->heidi_images_banner9 ?? ''}}">
                                                    </div>
                                                    <label class="next-label">Mô tả 4</label>
                                                    <input name="heidi_title_banner9" type="text"
                                                        value="{{$product->heidi_title_banner9 ?? ''}}"
                                                        id="txtproductname" class="inputbox"
                                                        placeholder="Perfectly Stealth 1" style="width:100%;">
                                                    <textarea name="heidi_desc_banner9" rows="5" cols="70"
                                                        id="txtkeyword" class="inputbox"
                                                        style="width: 100%; height:80px;">{{$product->heidi_desc_banner9 ?? ''}}</textarea>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-12 ">
                                        <p class="ttg">Section chi tiết nổi bật xe (kt ảnh: 2880 × 3346 px)</p>
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <div class="form-group"
                                                    style="padding: 10px 10px;border: 1px solid #d4d4d4;">
                                                    <div class="row">
                                                        <div class="col-sm-6">
                                                            <div class="form-group">
                                                                <label class="text-no-bold" data-bind="text: Title">Hình
                                                                    ảnh 1</label>
                                                                <input type="file" name="heidi_images_banner10"
                                                                    id="flupload" class="pull-right"
                                                                    style="width:180px;">
                                                            </div>
                                                            <div>
                                                                <img style="width: 180px; height: auto"
                                                                    src="{{$product->heidi_images_banner10 ?? ''}}">
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <div class="form-group">
                                                                <label class="text-no-bold" data-bind="text: Title">Hình
                                                                    ảnh 2</label>
                                                                <input type="file" name="heidi_images_banner10_1"
                                                                    id="flupload" class="pull-right"
                                                                    style="width:180px;">
                                                            </div>
                                                            <div>
                                                                <img style="width: 180px; height: auto"
                                                                    src="{{$product->heidi_images_banner10_1 ?? ''}}">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <label class="next-label">Mô tả 1</label>
                                                    <input name="heidi_title_banner10" type="text"
                                                        value="{{$product->heidi_title_banner10 ?? ''}}}"
                                                        id="txtproductname" class="inputbox"
                                                        placeholder="Perfectly Stealth 1" style="width:100%;">
                                                    <textarea name="heidi_desc_banner10" rows="5" cols="70"
                                                        id="txtkeyword" class="inputbox"
                                                        style="width: 100%; height:80px;">{{$product->heidi_desc_banner10 ?? ''}}</textarea>
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="form-group"
                                                    style="padding: 10px 10px;border: 1px solid #d4d4d4;">
                                                    <div class="row">
                                                        <div class="col-sm-6">
                                                            <div class="form-group">
                                                                <label class="text-no-bold" data-bind="text: Title">Hình
                                                                    ảnh 1</label>
                                                                <input type="file" name="heidi_images_banner11"
                                                                    id="flupload" class="pull-right"
                                                                    style="width:180px;">
                                                            </div>
                                                            <div>
                                                                <img style="width: 180px; height: auto"
                                                                    src="{{$product->heidi_images_banner11 ?? ''}}">
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <div class="form-group">
                                                                <label class="text-no-bold" data-bind="text: Title">Hình
                                                                    ảnh 2</label>
                                                                <input type="file" name="heidi_images_banner11_1"
                                                                    id="flupload" class="pull-right"
                                                                    style="width:180px;">
                                                            </div>
                                                            <div>
                                                                <img style="width: 180px; height: auto"
                                                                    src="{{$product->heidi_images_banner11_1 ?? ''}}">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <label class="next-label">Mô tả 2</label>
                                                    <input name="heidi_title_banner11" type="text"
                                                        value="{{$product->heidi_title_banner11 ?? ''}}"
                                                        id="txtproductname" class="inputbox"
                                                        placeholder="Perfectly Stealth 2" style="width:100%;">
                                                    <textarea name="heidi_desc_banner11" rows="5" cols="70"
                                                        id="txtkeyword" class="inputbox"
                                                        style="width: 100%; height:80px;">{{$product->heidi_desc_banner11 ?? ''}}</textarea>
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="form-group"
                                                    style="padding: 10px 10px;border: 1px solid #d4d4d4;">
                                                    <div class="row">
                                                        <div class="col-sm-6">
                                                            <div class="form-group">
                                                                <label class="text-no-bold" data-bind="text: Title">Hình
                                                                    ảnh 1</label>
                                                                <input type="file" name="heidi_images_banner12"
                                                                    id="flupload" class="pull-right"
                                                                    style="width:180px;">
                                                            </div>
                                                            <div>
                                                                <img style="width: 180px; height: auto"
                                                                    src="{{$product->heidi_images_banner12 ?? ''}}">
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <div class="form-group">
                                                                <label class="text-no-bold" data-bind="text: Title">Hình
                                                                    ảnh 2</label>
                                                                <input type="file" name="heidi_images_banner12_1"
                                                                    id="flupload" class="pull-right"
                                                                    style="width:180px;">
                                                            </div>
                                                            <div>
                                                                <img style="width: 180px; height: auto"
                                                                    src="{{$product->heidi_images_banner12_1 ?? ''}}">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <label class="next-label">Mô tả 3</label>
                                                    <input name="heidi_title_banner12" type="text"
                                                        value="{{$product->heidi_title_banner12 ?? ''}}"
                                                        id="txtproductname" class="inputbox"
                                                        placeholder="Perfectly Stealth 3" style="width:100%;">
                                                    <textarea name="heidi_desc_banner12" rows="5" cols="70"
                                                        id="txtkeyword" class="inputbox"
                                                        style="width: 100%; height:80px;">{{$product->heidi_desc_banner12 ?? ''}}</textarea>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="col-sm-12 ">
                                        <p class="ttg">Section gallery</p>
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <div class="form-group"
                                                    style="padding: 10px 10px;border: 1px solid #d4d4d4;">
                                                    <div class="row">
                                                        <div class="col-sm-6">
                                                            <div class="form-group">
                                                                <!-- nhiều ảnh -->
                                                                <label class="text-no-bold" data-bind="text: Title">Hình
                                                                    ảnh gallery</label>
                                                                <input type="file" name="heidi_images_banner13"
                                                                    id="flupload" class="pull-right"
                                                                    style="width:180px;">
                                                            </div>
                                                            <div>
                                                                <img style="width: 180px; height: auto"
                                                                    src="{{$product->heidi_images_banner13 ?? ''}}">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>

                            <h2 class="resp-accordion hor_1" role="tab" aria-controls="hor_1_tab_item-1"
                                style="background-color: rgb(245, 245, 245); border-color: rgb(193, 193, 193);">
                                <span class="resp-arrow"></span>Gogo
                            </h2>
                            <div class="resp-tab-content hor_1" aria-labelledby="hor_1_tab_item-3"
                                style="border-color: rgb(193, 193, 193);">

                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="block_sp">
                                            <div class="form-group">
                                                <label class="text-no-bold" data-bind="text: Title">Tiêu đề, slogan
                                                    xe</label>
                                                <input type="text" name="gogo_slogan" id="" placeholder=""
                                                    value="{{$product->gogo_slogan ?? ''}}" class="form-control"
                                                    style="width:100%;">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="block_sp">
                                            <div class="form-group">
                                                <label class="text-no-bold" data-bind="text: Title">Hình ảnh
                                                    banner(section 1)</label>
                                                <input type="file" name="gogo_images_banner1" id="" class="pull-right"
                                                    style="width:180px;">
                                            </div>
                                            <div>
                                                <img style="width: 180px; height: auto"
                                                    src="{{$product->gogo_images_banner1 ?? ''}}">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="block_sp">
                                            <div class="form-group">
                                                <!-- multi ảnh -->
                                                <label class="text-no-bold" data-bind="text: Title">Hình ảnh tính
                                                    năng(section 2) (kt: 980 × 564 px)</label>
                                                <input type="file" name="gogo_images_banner2_multi[]"
                                                    id="gogo_images_banner2_multi" class="pull-right"
                                                    style="width:180px;" multiple>
                                            </div>
                                            <div id="image-preview-6">
                                                @if(!empty($gogo_images_banner2_multi))
                                                @foreach($gogo_images_banner2_multi as $value)
                                                <img style="width: 155px; height: auto" src="{{ $value->images }}">
                                                @endforeach
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="block_sp">
                                            <div class="form-group">
                                                <label class="text-no-bold" data-bind="text: Title">Thông tin chi
                                                    tiết xe</label>
                                                <input type="file" name="gogo_tinhnang_image[]" id="gogo_tinhnang_image"
                                                    class="pull-right" style="width:180px;" multiple>
                                                <div id="image-preview-7">
                                                    @if(!empty($gogo_tinhnang_image))
                                                    @foreach($gogo_tinhnang_image as $value)
                                                    <img style="width: 155px; height: auto" src="{{ $value->images }}">
                                                    @endforeach
                                                    @endif
                                                </div>
                                            </div>
                                            <div>
                                                <textarea cols="12" name="gogo_desc_3" id="" class="form-control">
                                                        {!! $product->gogo_desc_3 ?? '' !!}
                                                    </textarea>
                                            </div>
                                        </div>
                                    </div>

                                    <hr>

                                    <div class="col-sm-12 ">
                                        <p class="ttg">Section 3 mô tả xe</p>
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <div class="form-group"
                                                    style="padding: 10px 10px;border: 1px solid #d4d4d4;">
                                                    <div class="form-group">
                                                        <input type="file" name="gogo_images_banner4" id="flupload"
                                                            class="pull-right" style="width:180px;">
                                                    </div>
                                                    <div>
                                                        <img style="width: 180px; height: auto"
                                                            src="{{ $product->gogo_images_banner4 ?? '' }}">
                                                    </div>
                                                    <label class="next-label">Mô tả 1</label>
                                                    <input name="gogo_title_banner4" type="text"
                                                        value="{{$product->gogo_title_banner4 ?? ''}}}" id=""
                                                        class="inputbox" placeholder="HỆ THỐNG PHANH E-ABS"
                                                        style="width:100%;">
                                                    <textarea name="gogo_desc_banner4" rows="5" cols="70" id=""
                                                        class="inputbox"
                                                        style="width: 100%; height:80px;">{{$product->gogo_desc_banner4 ?? ''}}</textarea>
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="form-group"
                                                    style="padding: 10px 10px;border: 1px solid #d4d4d4;">
                                                    <div class="form-group">
                                                        <input type="file" name="gogo_images_banner5" id="flupload"
                                                            class="pull-right" style="width:180px;">
                                                    </div>
                                                    <div>
                                                        <img style="width: 180px; height: auto"
                                                            src="{{ $product->gogo_images_banner5 ?? '' }}">
                                                    </div>
                                                    <label class="next-label">Mô tả 2</label>
                                                    <input name="gogo_title_banner5" type="text"
                                                        value="{{$product->gogo_title_banner5 ?? ''}}" id=""
                                                        class="inputbox" placeholder="CỤM ĐÈN NỔI BẬT"
                                                        style="width:100%;">
                                                    <textarea name="gogo_desc_banner5" rows="5" cols="70" id=""
                                                        class="inputbox"
                                                        style="width: 100%; height:80px;">{{$product->gogo_desc_banner5 ?? ''}}</textarea>

                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <hr>

                                    <div class="col-sm-12 ">
                                        <p class="ttg">Section trải nghiệm niềm vui, cảm nhận sự an toàn</p>
                                        <div class="row">
                                            <div class="col-sm-4">
                                                <div class="form-group"
                                                    style="padding: 10px 10px;border: 1px solid #d4d4d4;">
                                                    <div class="form-group">
                                                        <label class="text-no-bold" data-bind="text: Title">tabs
                                                            1</label>
                                                        <input type="file" name="gogo_images_banner6" id="flupload"
                                                            class="pull-right" style="width:180px;">
                                                    </div>
                                                    <div>
                                                        <img style="width: 180px; height: auto"
                                                            src="{{ $product->gogo_images_banner6 ?? '' }}">
                                                    </div>
                                                    <label class="next-label">Mô tả 1</label>
                                                    <input name="gogo_title_banner6" type="text"
                                                        value="{{$product->gogo_title_banner6 ?? ''}}" id=""
                                                        class="inputbox" placeholder="" style="width:100%;">
                                                    <textarea name="gogo_desc_banner6" rows="5" cols="70" id=""
                                                        class="inputbox"
                                                        style="width: 100%; height:80px;">{{$product->gogo_desc_banner6 ?? ''}}</textarea>

                                                </div>
                                            </div>
                                            <div class="col-sm-4">
                                                <div class="form-group"
                                                    style="padding: 10px 10px;border: 1px solid #d4d4d4;">
                                                    <div class="form-group">
                                                        <label class="text-no-bold" data-bind="text: Title">tabs
                                                            2</label>
                                                        <input type="file" name="gogo_images_banner7" id="flupload"
                                                            class="pull-right" style="width:180px;">
                                                    </div>
                                                    <div>
                                                        <img style="width: 180px; height: auto"
                                                            src="{{ $product->gogo_images_banner7 ?? '' }}">
                                                    </div>
                                                    <label class="next-label">Mô tả 2</label>
                                                    <input name="gogo_title_banner7" type="text"
                                                        value="{{$product->gogo_title_banner7 ?? ''}}" id=""
                                                        class="inputbox" placeholder="CAN ĐẢM GIỮA NHỮNG CƠN MƯA"
                                                        style="width:100%;">
                                                    <textarea name="gogo_desc_banner7" rows="5" cols="70" id=""
                                                        class="inputbox"
                                                        style="width: 100%; height:80px;">{{$product->gogo_desc_banner7 ?? ''}}</textarea>

                                                </div>
                                            </div>
                                            <div class="col-sm-4">
                                                <div class="form-group"
                                                    style="padding: 10px 10px;border: 1px solid #d4d4d4;">
                                                    <div class="form-group">
                                                        <label class="text-no-bold" data-bind="text: Title">tabs
                                                            3</label>
                                                        <input type="file" name="gogo_images_banner8" id="flupload"
                                                            class="pull-right" style="width:180px;">
                                                    </div>
                                                    <div>
                                                        <img style="width: 180px; height: auto"
                                                            src="{{ $product->gogo_images_banner8 ?? '' }}">
                                                    </div>
                                                    <label class="next-label">Mô tả 3</label>
                                                    <input name="gogo_title_banner8" type="text"
                                                        value="{{$product->gogo_title_banner8 ?? ''}}" id=""
                                                        class="inputbox" placeholder="ÁP SUẤT LỐP" style="width:100%;">
                                                    <textarea name="gogo_desc_banner8" rows="5" cols="70" id=""
                                                        class="inputbox"
                                                        style="width: 100%; height:80px;">{{$product->gogo_desc_banner8 ?? ''}}</textarea>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <hr>

                                    <div class="col-sm-12 ">
                                        <p class="ttg">Section tiện ích</p>
                                        <div class="row">
                                            <div class="col-sm-4">
                                                <div class="form-group"
                                                    style="padding: 10px 10px;border: 1px solid #d4d4d4;">
                                                    <div class="form-group">
                                                        <label class="text-no-bold" data-bind="text: Title">tabs
                                                            1</label>
                                                        <input type="file" name="gogo_images_banner9" id="flupload"
                                                            class="pull-right" style="width:180px;">
                                                    </div>
                                                    <div>
                                                        <img style="width: 180px; height: auto"
                                                            src="{{ $product->gogo_images_banner9 ?? '' }}">
                                                    </div>
                                                    <label class="next-label">Mô tả 1</label>
                                                    <input name="gogo_title_banner9" type="text"
                                                        value="{{$product->gogo_title_banner9 ?? ''}}" id=""
                                                        class="inputbox" placeholder="CỐP RỘNG BAO LA"
                                                        style="width:100%;">
                                                    <textarea name="gogo_desc_banner9" rows="5" cols="70" id=""
                                                        class="inputbox" style="width: 100%; height:80px;">
                                                            {!! $product->gogo_desc_banner9 ?? '' !!}
                                                        </textarea>

                                                </div>
                                            </div>
                                            <div class="col-sm-4">
                                                <div class="form-group"
                                                    style="padding: 10px 10px;border: 1px solid #d4d4d4;">
                                                    <div class="form-group">
                                                        <label class="text-no-bold" data-bind="text: Title">tabs
                                                            2</label>
                                                        <input type="file" name="gogo_images_banner10" id="flupload"
                                                            class="pull-right" style="width:180px;">
                                                    </div>
                                                    <div>
                                                        <img style="width: 180px; height: auto"
                                                            src="{{ $product->gogo_images_banner10 ?? '' }}">
                                                    </div>
                                                    <label class="next-label">Mô tả 2</label>
                                                    <input name="gogo_title_banner10" type="text"
                                                        value="{{$product->gogo_title_banner10 ?? ''}}" id=""
                                                        class="inputbox" placeholder="CỔNG SẠC USB" style="width:100%;">
                                                    <textarea name="gogo_desc_banner10" rows="5" cols="70" id=""
                                                        class="inputbox" style="width: 100%; height:80px;">
                                                            {!! $product->gogo_desc_banner10 ?? '' !!}
                                                        </textarea>

                                                </div>
                                            </div>
                                            <div class="col-sm-4">
                                                <div class="form-group"
                                                    style="padding: 10px 10px;border: 1px solid #d4d4d4;">
                                                    <div class="form-group">
                                                        <label class="text-no-bold" data-bind="text: Title">tabs
                                                            3</label>
                                                        <input type="file" name="gogo_images_banner11" id="flupload"
                                                            class="pull-right" style="width:180px;">
                                                    </div>
                                                    <div>
                                                        <img style="width: 180px; height: auto"
                                                            src="{{ $product->gogo_images_banner11 ?? '' }}">
                                                    </div>
                                                    <label class="next-label">Mô tả 3</label>
                                                    <input name="gogo_title_banner11" type="text"
                                                        value="{{$product->gogo_title_banner11 ?? ''}}" id=""
                                                        class="inputbox" placeholder="Móc treo đồ" style="width:100%;">
                                                    <textarea name="gogo_desc_banner11" rows="5" cols="70" id=""
                                                        class="inputbox" style="width: 100%; height:80px;">
                                                            {!! $product->gogo_desc_banner11 ?? '' !!}
                                                        </textarea>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <hr>
                                    <div class="col-sm-12 ">
                                        <p class="ttg">Section gallery</p>
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <div class="form-group"
                                                    style="padding: 10px 10px;border: 1px solid #d4d4d4;">
                                                    <div class="row">
                                                        <div class="col-sm-12">
                                                            <div class="form-group">
                                                                <!-- nhiều ảnh -->
                                                                <label class="text-no-bold" data-bind="text: Title">Nâng
                                                                    cấp chính bạn</label>
                                                                <input type="text" name="gogo_title_banner12" id=""
                                                                    value="{{$product->gogo_title_banner12 ?? ''}}"
                                                                    placeholder="Nâng cấp chính bạn"
                                                                    class="form-control pull-right"
                                                                    style="width:100%;margin-bottom: 20px">
                                                                <textarea name="gogo_desc_banner12" id=""
                                                                    class="form-control" style="width:100%;">
                                                                        {!! $product->gogo_desc_banner12 ?? '' !!}
                                                                    </textarea>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-12">
                                                <div class="form-group"
                                                    style="padding: 10px 10px;border: 1px solid #d4d4d4;">
                                                    <div class="row">
                                                        <div class="col-sm-6">
                                                            <div class="form-group">
                                                                <!-- nhiều ảnh -->
                                                                <label class="text-no-bold" data-bind="text: Title">Hình
                                                                    ảnh gallery</label>
                                                                <input type="file" name="gogo_images_banner13[]"
                                                                    id="gogo_images_banner13" class="pull-right"
                                                                    style="width:180px;" multiple>
                                                            </div>
                                                            <div>
                                                                @if(!empty($gogo_images_banner13))
                                                                @foreach($gogo_images_banner13 as $value)
                                                                <img style="width: 180px; height: auto"
                                                                    src="{{ $value->images }}">
                                                                @endforeach
                                                                @endif
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>

                            <h2 class="resp-accordion hor_1" role="tab" aria-controls="hor_1_tab_item-1"
                                style="background-color: rgb(245, 245, 245); border-color: rgb(193, 193, 193);">
                                <span class="resp-arrow"></span>Nispaviva
                            </h2>
                            <div class="resp-tab-content hor_1" aria-labelledby="hor_1_tab_item-3"
                                style="border-color: rgb(193, 193, 193);">

                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="block_sp">
                                            <div class="form-group">
                                                <label class="text-no-bold" data-bind="text: Title">Tiêu đề, slogan
                                                    xe</label>
                                                <input type="text" name="viva_slogan" id=""
                                                    value="{{$product->viva_slogan ?? ''}}" placeholder=""
                                                    class="form-control" style="width:100%;">
                                            </div>
                                        </div>
                                    </div>

                                    <hr>

                                    <div class="col-sm-12 ">
                                        <p class="ttg">video nền section 1</p>
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <div class="form-group"
                                                    style="padding: 10px 10px;border: 1px solid #d4d4d4;">
                                                    <div class="form-group">
                                                        <!-- upload mutil video ngắn  -->
                                                        <label class="text-no-bold" data-bind="text: Title">upload
                                                            video nền</label>
                                                        <input type="file" name="viva_upload_video[]" id="flupload"
                                                            class="pull-right" style="width:180px;" multiple>
                                                    </div>
                                                    <div style="display: flex;align-items: center;gap: 10px;">
                                                        @if(!empty($viva_upload_video))
                                                        @foreach($viva_upload_video as $value)
                                                        <video style="width: 300px;" playsinline preload autoplay muted
                                                            src="{{ $value->images }}"></video>
                                                        @endforeach
                                                        @endif
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <hr>

                                    <div class="col-sm-4">
                                        <div class="block_sp">
                                            <div class="form-group">
                                                <label class="text-no-bold" data-bind="text: Title">Hình ảnh logo
                                                    xe(section 1)</label>
                                                <input type="file" name="viva_images_banner1" id="" class="pull-right"
                                                    style="width:180px;">
                                            </div>
                                            <div style="background: black">
                                                <img style="width: 180px; height: auto"
                                                    src="{{ $product->viva_images_banner1 ?? '' }}">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="block_sp">
                                            <div class="form-group">
                                                <label class="text-no-bold" data-bind="text: Title">Hình ảnh
                                                    (section 2) (kt: 1910 × 1035 px)</label>
                                                <input type="file" name="viva_images_banner2" id="flupload"
                                                    class="pull-right" style="width:180px;">
                                            </div>
                                            <div
                                                style="display: flex;gap: 10px;white-space: nowrap;overflow-y: hidden;">
                                                <img style="width: 155px; height: auto"
                                                    src="{{ $product->viva_images_banner2 ?? '' }}">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="block_sp">
                                            <div class="form-group">
                                                <label class="text-no-bold" data-bind="text: Title">url video
                                                    youtube</label>
                                                <input type="text" name="viva_youtube_banner3" id=""
                                                    class="form-control " style="width:100%;"
                                                    value="{{ $product->viva_youtube_banner3 ?? '' }}">
                                                <br>
                                                <label class="text-no-bold" data-bind="text: Title">ảnh nền section
                                                    video</label>
                                                <input type="file" name="viva_images_banner3" id="flupload"
                                                    class="pull-right" style="width:180px;">
                                            </div>
                                            <div
                                                style="display: flex;gap: 10px;white-space: nowrap;overflow-y: hidden;">
                                                <img style="width: 155px; height: auto"
                                                    src="{{ $product->viva_images_banner3 ?? '' }}">
                                            </div>
                                        </div>
                                    </div>

                                    <hr>

                                    <div class="col-sm-12 ">
                                        <p class="ttg">Section tiện ích</p>
                                        <div class="row">
                                            <div class="col-sm-4">
                                                <div class="form-group"
                                                    style="padding: 10px 10px;border: 1px solid #d4d4d4;">
                                                    <div class="form-group">
                                                        <label class="text-no-bold" data-bind="text: Title">tabs
                                                            1</label>
                                                        <input type="file" name="viva_images_banner4" id="flupload"
                                                            class="pull-right" style="width:180px;">
                                                    </div>
                                                    <div>
                                                        <img style="width: 180px; height: auto"
                                                            src="{{ $product->viva_images_banner4 ?? '' }}">
                                                    </div>
                                                    <label class="next-label">Mô tả 1</label>
                                                    <input name="viva_title_banner4" type="text"
                                                        value="{{$product->viva_title_banner4 ?? ''}}" id=""
                                                        class="inputbox" placeholder="" style="width:100%;">
                                                    <textarea name="viva_desc_banner4" rows="5" cols="70" id=""
                                                        class="inputbox" style="width: 100%; height:80px;">
                                                            {!! $product->viva_desc_banner4 ?? '' !!}
                                                        </textarea>

                                                </div>
                                            </div>
                                            <div class="col-sm-4">
                                                <div class="form-group"
                                                    style="padding: 10px 10px;border: 1px solid #d4d4d4;">
                                                    <div class="form-group">
                                                        <label class="text-no-bold" data-bind="text: Title">tabs
                                                            2</label>
                                                        <input type="file" name="viva_images_banner5" id="flupload"
                                                            class="pull-right" style="width:180px;">
                                                    </div>
                                                    <div>
                                                        <img style="width: 180px; height: auto"
                                                            src="{{ $product->viva_images_banner5 ?? '' }}">
                                                    </div>
                                                    <label class="next-label">Mô tả 2</label>
                                                    <input name="viva_title_banner5" type="text"
                                                        value="{{$product->viva_title_banner5 ?? ''}}" id=""
                                                        class="inputbox" placeholder="" style="width:100%;">
                                                    <textarea name="viva_desc_banner5" rows="5" cols="70" id=""
                                                        class="inputbox" style="width: 100%; height:80px;">
                                                            {!! $product->viva_desc_banner5 ?? '' !!}
                                                        </textarea>

                                                </div>
                                            </div>
                                            <div class="col-sm-4">
                                                <div class="form-group"
                                                    style="padding: 10px 10px;border: 1px solid #d4d4d4;">
                                                    <div class="form-group">
                                                        <label class="text-no-bold" data-bind="text: Title">tabs
                                                            3</label>
                                                        <input type="file" name="viva_images_banner6" id="flupload"
                                                            class="pull-right" style="width:180px;">
                                                    </div>
                                                    <div>
                                                        <img style="width: 180px; height: auto"
                                                            src="{{ $product->viva_images_banner6 ?? '' }}">
                                                    </div>
                                                    <label class="next-label">Mô tả 3</label>
                                                    <input name="viva_title_banner6" type="text"
                                                        value="{{$product->viva_title_banner6 ?? ''}}" id=""
                                                        class="inputbox" placeholder="" style="width:100%;">
                                                    <textarea name="viva_desc_banner6" rows="5" cols="70" id=""
                                                        class="inputbox" style="width: 100%; height:80px;">
                                                            {!! $product->viva_desc_banner6 ?? '' !!}
                                                        </textarea>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <hr>
                                    <div class="col-sm-12 ">
                                        <p class="ttg">Section gallery</p>
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <div class="form-group"
                                                    style="padding: 10px 10px;border: 1px solid #d4d4d4;">
                                                    <div class="row">
                                                        <div class="col-sm-12">
                                                            <div class="form-group">
                                                                <!-- nhiều ảnh -->
                                                                <label class="text-no-bold" data-bind="text: Title">Nâng
                                                                    cấp chính bạn</label>
                                                                <input type="text" name="viva_title_banner7" id=""
                                                                    value="{{$product->viva_title_banner7 ?? ''}}"
                                                                    placeholder="" class="form-control pull-right"
                                                                    style="width:100%;margin-bottom: 20px">
                                                                <textarea name="viva_desc_banner7" id=""
                                                                    class="form-control" style="width:100%;">
                                                                       {!! $product->viva_desc_banner7 ?? '' !!}
                                                                    </textarea>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-12">
                                                <div class="form-group"
                                                    style="padding: 10px 10px;border: 1px solid #d4d4d4;">
                                                    <div class="row">
                                                        <div class="col-sm-6">
                                                            <div class="form-group">
                                                                <!-- nhiều ảnh -->
                                                                <label class="text-no-bold" data-bind="text: Title">Hình
                                                                    ảnh gallery</label>
                                                                <input type="file" name="viva_gallery[]"
                                                                    id="viva_gallery" class="pull-right"
                                                                    style="width:180px;" multiple>
                                                            </div>
                                                            <div id="image-preview-9">
                                                                @if(!empty($viva_gallery))
                                                                @foreach($viva_gallery as $value)
                                                                <img style="width: 180px; height: auto"
                                                                    src="{{ $value->images }}">
                                                                @endforeach
                                                                @endif
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>


                        </div>


                        <h2 class="resp-accordion hor_1" role="tab" aria-controls="hor_1_tab_item-1"
                            style="background-color: rgb(245, 245, 245); border-color: rgb(193, 193, 193);">
                            <span class="resp-arrow"></span>x3
                        </h2>
                        <div class="resp-tab-content hor_1" aria-labelledby="hor_1_tab_item-3"
                            style="border-color: rgb(193, 193, 193);">

                            <div class="row">
                                <div class="col-sm-4">
                                    <div class="block_sp">
                                        <div class="form-group">
                                            <label class="text-no-bold" data-bind="text: Title">Hình ảnh banner xe
                                                (section 1)</label>
                                            <input type="file" name="nispa_images_banner1" id="flupload"
                                                class="pull-right" style="width:180px;">
                                        </div>
                                        <div style="display: flex;gap: 10px;white-space: nowrap;overflow-y: hidden;">
                                            <img style="width: 155px; height: auto"
                                                src="{{ $product->nispa_images_banner1 ?? '' }}">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="block_sp">
                                        <div class="form-group">
                                            <label class="text-no-bold" data-bind="text: Title">url video
                                                youtube</label>
                                            <input type="text" name="nispa_youtube_banner2" id="" class="form-control "
                                                style="width:100%;" value="{{$product->nispa_youtube_banner2 ?? ''}}">
                                            <br>
                                            <label class="text-no-bold" data-bind="text: Title">ảnh nền section
                                                video</label>
                                            <input type="file" name="nispa_images_banner2" id="flupload"
                                                class="pull-right" style="width:180px;">
                                        </div>
                                        <div style="display: flex;gap: 10px;white-space: nowrap;overflow-y: hidden;">
                                            <img style="width: 155px; height: auto"
                                                src="{{ $product->nispa_images_banner2 ?? '' }}">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-4">
                                    <div class="block_sp">
                                        <div class="form-group">
                                            <!-- multi ảnh -->
                                            <label class="text-no-bold" data-bind="text: Title">Hình ảnh tính
                                                năng(section 2) (kt: 980 × 564 px)</label>
                                            <input type="file" name="nispa_tinhnang_image[]" id="nispa_tinhnang_image"
                                                class="pull-right" style="width:180px;" multiple>
                                        </div>
                                        <div style="display: flex;gap: 10px;white-space: nowrap;overflow-y: hidden;"
                                            id="image-preview-11">
                                            @if(!empty($nispa_tinhnang_image))
                                            @foreach($nispa_tinhnang_image as $value)
                                            <img style="width: 155px; height: auto" src="{{ $value->images }}">
                                            @endforeach
                                            @endif
                                        </div>
                                    </div>
                                </div>

                                <hr>
                                <div class="col-sm-12">
                                    <div class="block_sp">
                                        <div class="form-group">
                                            <label class="text-no-bold" data-bind="text: Title">Thông tin chi tiết
                                                xe</label>
                                        </div>
                                        <div>
                                            <textarea name="nispa_desc_3" rows="12" col="12" id="" class="form-control">
                                                        {!! $product->nispa_desc_3 ?? '' !!}
                                                    </textarea>
                                        </div>
                                    </div>
                                </div>
                                <hr>

                                <hr>
                                <div class="col-sm-12">
                                    <div class="block_sp">
                                        <div class="form-group">
                                            <label class="text-no-bold" data-bind="text: Title">Thông tin Công suất
                                                & Thời gian bảo hành</label>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <input type="file" name="nispa_images_4" id="flupload"
                                                    style="width:180px;">
                                                <div
                                                    style="display: flex;gap: 10px;white-space: nowrap;overflow-y: hidden;">
                                                    <img style="width: 155px; height: auto"
                                                        src="{{ $product->nispa_images_4 ?? '' }}">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <textarea name="nispa_desc_4" rows="12" col="12" id=""
                                                    class="form-control">
                                                            {!! $product->nispa_desc_4 ?? '' !!}
                                                        </textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <hr>

                                <div class="col-sm-12 ">
                                    <p class="ttg">Section gallery</p>
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <div class="form-group"
                                                style="padding: 10px 10px;border: 1px solid #d4d4d4;">
                                                <div class="row">
                                                    <div class="col-sm-12">
                                                        <div class="form-group">
                                                            <!-- nhiều ảnh -->
                                                            <label class="text-no-bold" data-bind="text: Title">Nâng
                                                                cấp chính bạn</label>
                                                            <input type="text" name="nispa_title_4" id=""
                                                                value="{{$product->nispa_title_4 ?? ''}}"
                                                                placeholder="Nâng cấp chính bạn"
                                                                class="form-control pull-right"
                                                                style="width:100%;margin-bottom: 20px">
                                                            <textarea name="nispa_desc_5" id="" class="form-control"
                                                                style="width:100%;">
                                                                       {!! $product->nispa_desc_5 ?? '' !!}
                                                                    </textarea>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-12">
                                            <div class="form-group"
                                                style="padding: 10px 10px;border: 1px solid #d4d4d4;">
                                                <div class="row">
                                                    <div class="col-sm-6">
                                                        <div class="form-group">
                                                            <!-- nhiều ảnh -->
                                                            <label class="text-no-bold" data-bind="text: Title">Hình
                                                                ảnh gallery</label>
                                                            <input type="file" name="nispa_gallery[]" id="nispa_gallery"
                                                                class="pull-right" style="width:180px;" multiple>
                                                        </div>
                                                        <div id="image-preview-10">
                                                            @if(!empty($nispa_gallery))
                                                            @foreach($nispa_gallery as $value)
                                                            <img style="width: 180px; height: auto"
                                                                src="{{ $value->images }}">
                                                            @endforeach
                                                            @endif
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
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

<script>
            CKEDITOR.replace('detail', {
                filebrowserBrowseUrl: '{{ asset('ckfinder/ckfinder.html') }}',
                filebrowserImageBrowseUrl: '{{ asset('ckfinder/ckfinder.html?type=Images') }}',
                filebrowserFlashBrowseUrl: '{{ asset('ckfinder/ckfinder.html?type=Flash') }}',
                filebrowserUploadUrl: '{{ asset('ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files') }}',
                filebrowserImageUploadUrl: '{{ asset('ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images') }}',
                filebrowserFlashUploadUrl: '{{ asset('ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash') }}',
                allowedContent: true,
                removeFormatAttributes: ''
            });
            CKEDITOR.replace('overview', {
                filebrowserBrowseUrl: '{{ asset('ckfinder/ckfinder.html') }}',
                filebrowserImageBrowseUrl: '{{ asset('ckfinder/ckfinder.html?type=Images') }}',
                filebrowserFlashBrowseUrl: '{{ asset('ckfinder/ckfinder.html?type=Flash') }}',
                filebrowserUploadUrl: '{{ asset('ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files') }}',
                filebrowserImageUploadUrl: '{{ asset('ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images') }}',
                filebrowserFlashUploadUrl: '{{ asset('ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash') }}',
                allowedContent: true,
                removeFormatAttributes: ''
            });
            CKEDITOR.replace('engine', {
                filebrowserBrowseUrl: '{{ asset('ckfinder/ckfinder.html') }}',
                filebrowserImageBrowseUrl: '{{ asset('ckfinder/ckfinder.html?type=Images') }}',
                filebrowserFlashBrowseUrl: '{{ asset('ckfinder/ckfinder.html?type=Flash') }}',
                filebrowserUploadUrl: '{{ asset('ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files') }}',
                filebrowserImageUploadUrl: '{{ asset('ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images') }}',
                filebrowserFlashUploadUrl: '{{ asset('ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash') }}',
                allowedContent: true,
                removeFormatAttributes: ''
            });
            CKEDITOR.replace('chassis', {
                filebrowserBrowseUrl: '{{ asset('ckfinder/ckfinder.html') }}',
                filebrowserImageBrowseUrl: '{{ asset('ckfinder/ckfinder.html?type=Images') }}',
                filebrowserFlashBrowseUrl: '{{ asset('ckfinder/ckfinder.html?type=Flash') }}',
                filebrowserUploadUrl: '{{ asset('ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files') }}',
                filebrowserImageUploadUrl: '{{ asset('ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images') }}',
                filebrowserFlashUploadUrl: '{{ asset('ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash') }}',
                allowedContent: true,
                removeFormatAttributes: ''
            });
            CKEDITOR.replace('gogo_desc_3', {
                filebrowserBrowseUrl: '{{ asset('ckfinder/ckfinder.html') }}',
                filebrowserImageBrowseUrl: '{{ asset('ckfinder/ckfinder.html?type=Images') }}',
                filebrowserFlashBrowseUrl: '{{ asset('ckfinder/ckfinder.html?type=Flash') }}',
                filebrowserUploadUrl: '{{ asset('ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files') }}',
                filebrowserImageUploadUrl: '{{ asset('ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images') }}',
                filebrowserFlashUploadUrl: '{{ asset('ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash') }}',
                allowedContent: true,
                removeFormatAttributes: ''
            });
            CKEDITOR.replace('gogo_desc_banner9', {
                filebrowserBrowseUrl: '{{ asset('ckfinder/ckfinder.html') }}',
                filebrowserImageBrowseUrl: '{{ asset('ckfinder/ckfinder.html?type=Images') }}',
                filebrowserFlashBrowseUrl: '{{ asset('ckfinder/ckfinder.html?type=Flash') }}',
                filebrowserUploadUrl: '{{ asset('ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files') }}',
                filebrowserImageUploadUrl: '{{ asset('ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images') }}',
                filebrowserFlashUploadUrl: '{{ asset('ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash') }}',
                allowedContent: true,
                removeFormatAttributes: ''
            });
            CKEDITOR.replace('gogo_desc_banner10', {
                filebrowserBrowseUrl: '{{ asset('ckfinder/ckfinder.html') }}',
                filebrowserImageBrowseUrl: '{{ asset('ckfinder/ckfinder.html?type=Images') }}',
                filebrowserFlashBrowseUrl: '{{ asset('ckfinder/ckfinder.html?type=Flash') }}',
                filebrowserUploadUrl: '{{ asset('ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files') }}',
                filebrowserImageUploadUrl: '{{ asset('ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images') }}',
                filebrowserFlashUploadUrl: '{{ asset('ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash') }}',
                allowedContent: true,
                removeFormatAttributes: ''
            });
            CKEDITOR.replace('gogo_desc_banner11', {
                filebrowserBrowseUrl: '{{ asset('ckfinder/ckfinder.html') }}',
                filebrowserImageBrowseUrl: '{{ asset('ckfinder/ckfinder.html?type=Images') }}',
                filebrowserFlashBrowseUrl: '{{ asset('ckfinder/ckfinder.html?type=Flash') }}',
                filebrowserUploadUrl: '{{ asset('ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files') }}',
                filebrowserImageUploadUrl: '{{ asset('ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images') }}',
                filebrowserFlashUploadUrl: '{{ asset('ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash') }}',
                allowedContent: true,
                removeFormatAttributes: ''
            });
            CKEDITOR.replace('viva_desc_banner4', {
                filebrowserBrowseUrl: '{{ asset('ckfinder/ckfinder.html') }}',
                filebrowserImageBrowseUrl: '{{ asset('ckfinder/ckfinder.html?type=Images') }}',
                filebrowserFlashBrowseUrl: '{{ asset('ckfinder/ckfinder.html?type=Flash') }}',
                filebrowserUploadUrl: '{{ asset('ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files') }}',
                filebrowserImageUploadUrl: '{{ asset('ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images') }}',
                filebrowserFlashUploadUrl: '{{ asset('ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash') }}',
                allowedContent: true,
                removeFormatAttributes: ''
            });
            CKEDITOR.replace('viva_desc_banner5', {
                filebrowserBrowseUrl: '{{ asset('ckfinder/ckfinder.html') }}',
                filebrowserImageBrowseUrl: '{{ asset('ckfinder/ckfinder.html?type=Images') }}',
                filebrowserFlashBrowseUrl: '{{ asset('ckfinder/ckfinder.html?type=Flash') }}',
                filebrowserUploadUrl: '{{ asset('ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files') }}',
                filebrowserImageUploadUrl: '{{ asset('ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images') }}',
                filebrowserFlashUploadUrl: '{{ asset('ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash') }}',
                allowedContent: true,
                removeFormatAttributes: ''
            });
            CKEDITOR.replace('viva_desc_banner6', {
                filebrowserBrowseUrl: '{{ asset('ckfinder/ckfinder.html') }}',
                filebrowserImageBrowseUrl: '{{ asset('ckfinder/ckfinder.html?type=Images') }}',
                filebrowserFlashBrowseUrl: '{{ asset('ckfinder/ckfinder.html?type=Flash') }}',
                filebrowserUploadUrl: '{{ asset('ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files') }}',
                filebrowserImageUploadUrl: '{{ asset('ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images') }}',
                filebrowserFlashUploadUrl: '{{ asset('ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash') }}',
                allowedContent: true,
                removeFormatAttributes: ''
            });
            CKEDITOR.replace('nispa_desc_4', {
                filebrowserBrowseUrl: '{{ asset('ckfinder/ckfinder.html') }}',
                filebrowserImageBrowseUrl: '{{ asset('ckfinder/ckfinder.html?type=Images') }}',
                filebrowserFlashBrowseUrl: '{{ asset('ckfinder/ckfinder.html?type=Flash') }}',
                filebrowserUploadUrl: '{{ asset('ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files') }}',
                filebrowserImageUploadUrl: '{{ asset('ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images') }}',
                filebrowserFlashUploadUrl: '{{ asset('ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash') }}',
                allowedContent: true,
                removeFormatAttributes: ''
            });
            CKEDITOR.replace('nispa_desc_3', {
                filebrowserBrowseUrl: '{{ asset('ckfinder/ckfinder.html') }}',
                filebrowserImageBrowseUrl: '{{ asset('ckfinder/ckfinder.html?type=Images') }}',
                filebrowserFlashBrowseUrl: '{{ asset('ckfinder/ckfinder.html?type=Flash') }}',
                filebrowserUploadUrl: '{{ asset('ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files') }}',
                filebrowserImageUploadUrl: '{{ asset('ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images') }}',
                filebrowserFlashUploadUrl: '{{ asset('ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash') }}',
                allowedContent: true,
                removeFormatAttributes: ''
            });
        </script>


    <script>
    document.getElementById('feature_description').addEventListener('change', function(e) {
        var previewContainer = document.getElementById('image-preview');
        previewContainer.innerHTML = ''; // Xóa tất cả các ảnh hiện có

        if (e.target.files.length > 0) {
            for (var i = 0; i < e.target.files.length; i++) {
                var file = e.target.files[i];

                if (file.type.match(/^image\//)) {
                    var reader = new FileReader();

                    reader.onload = function(e) {
                        var img = document.createElement('img');
                        img.src = e.target.result;
                        img.className = 'preview-image';
                        previewContainer.appendChild(img);
                    };

                    reader.readAsDataURL(file);
                } else {
                    alert('Vui lòng chọn một hình ảnh.');
                }
            }
        }
    });
    document.getElementById('vehicle_detail_photos').addEventListener('change', function(e) {
        var previewContainer = document.getElementById('image-preview-1');
        previewContainer.innerHTML = ''; // Xóa tất cả các ảnh hiện có

        if (e.target.files.length > 0) {
            for (var i = 0; i < e.target.files.length; i++) {
                var file = e.target.files[i];

                if (file.type.match(/^image\//)) {
                    var reader = new FileReader();

                    reader.onload = function(e) {
                        var img = document.createElement('img');
                        img.src = e.target.result;
                        img.className = 'preview-image-1';
                        previewContainer.appendChild(img);
                    };

                    reader.readAsDataURL(file);
                } else {
                    alert('Vui lòng chọn một hình ảnh.');
                }
            }
        }
    });
    document.getElementById('actual_photo').addEventListener('change', function(e) {
        var previewContainer = document.getElementById('image-preview-2');
        previewContainer.innerHTML = ''; // Xóa tất cả các ảnh hiện có

        if (e.target.files.length > 0) {
            for (var i = 0; i < e.target.files.length; i++) {
                var file = e.target.files[i];

                if (file.type.match(/^image\//)) {
                    var reader = new FileReader();

                    reader.onload = function(e) {
                        var img = document.createElement('img');
                        img.src = e.target.result;
                        img.className = 'preview-image-2';
                        previewContainer.appendChild(img);
                    };

                    reader.readAsDataURL(file);
                } else {
                    alert('Vui lòng chọn một hình ảnh.');
                }
            }
        }
    });
    document.getElementById('icon_images').addEventListener('change', function(e) {
        var previewContainer = document.getElementById('image-preview-3');
        previewContainer.innerHTML = ''; // Xóa tất cả các ảnh hiện có

        if (e.target.files.length > 0) {
            for (var i = 0; i < e.target.files.length; i++) {
                var file = e.target.files[i];

                if (file.type.match(/^image\//)) {
                    var reader = new FileReader();

                    reader.onload = function(e) {
                        var img = document.createElement('img');
                        img.src = e.target.result;
                        img.className = 'preview-image-3';
                        previewContainer.appendChild(img);
                    };

                    reader.readAsDataURL(file);
                } else {
                    alert('Vui lòng chọn một hình ảnh.');
                }
            }
        }
    });
    document.getElementById('color_image').addEventListener('change', function(e) {
        var previewContainer = document.getElementById('image-preview-4');
        previewContainer.innerHTML = ''; // Xóa tất cả các ảnh hiện có

        if (e.target.files.length > 0) {
            for (var i = 0; i < e.target.files.length; i++) {
                var file = e.target.files[i];

                if (file.type.match(/^image\//)) {
                    var reader = new FileReader();

                    reader.onload = function(e) {
                        var img = document.createElement('img');
                        img.src = e.target.result;
                        img.className = 'preview-image-4';
                        previewContainer.appendChild(img);
                    };

                    reader.readAsDataURL(file);
                } else {
                    alert('Vui lòng chọn một hình ảnh.');
                }
            }
        }
    });
    document.getElementById('images360').addEventListener('change', function(e) {
        var previewContainer = document.getElementById('image-preview-5');
        previewContainer.innerHTML = ''; // Xóa tất cả các ảnh hiện có

        if (e.target.files.length > 0) {
            for (var i = 0; i < e.target.files.length; i++) {
                var file = e.target.files[i];

                if (file.type.match(/^image\//)) {
                    var reader = new FileReader();

                    reader.onload = function(e) {
                        var img = document.createElement('img');
                        img.src = e.target.result;
                        img.className = 'preview-image-5';
                        previewContainer.appendChild(img);
                    };

                    reader.readAsDataURL(file);
                } else {
                    alert('Vui lòng chọn một hình ảnh.');
                }
            }
        }
    });
    document.getElementById('gogo_images_banner2_multi').addEventListener('change', function(e) {
        var previewContainer = document.getElementById('image-preview-6');
        previewContainer.innerHTML = ''; // Xóa tất cả các ảnh hiện có

        if (e.target.files.length > 0) {
            for (var i = 0; i < e.target.files.length; i++) {
                var file = e.target.files[i];

                if (file.type.match(/^image\//)) {
                    var reader = new FileReader();

                    reader.onload = function(e) {
                        var img = document.createElement('img');
                        img.src = e.target.result;
                        img.className = 'preview-image-6';
                        previewContainer.appendChild(img);
                    };

                    reader.readAsDataURL(file);
                } else {
                    alert('Vui lòng chọn một hình ảnh.');
                }
            }
        }
    });
    document.getElementById('gogo_tinhnang_image').addEventListener('change', function(e) {
        var previewContainer = document.getElementById('image-preview-7');
        previewContainer.innerHTML = ''; // Xóa tất cả các ảnh hiện có

        if (e.target.files.length > 0) {
            for (var i = 0; i < e.target.files.length; i++) {
                var file = e.target.files[i];

                if (file.type.match(/^image\//)) {
                    var reader = new FileReader();

                    reader.onload = function(e) {
                        var img = document.createElement('img');
                        img.src = e.target.result;
                        img.className = 'preview-image-7';
                        previewContainer.appendChild(img);
                    };

                    reader.readAsDataURL(file);
                } else {
                    alert('Vui lòng chọn một hình ảnh.');
                }
            }
        }
    });
    document.getElementById('gogo_images_banner13').addEventListener('change', function(e) {
        var previewContainer = document.getElementById('image-preview-8');
        previewContainer.innerHTML = ''; // Xóa tất cả các ảnh hiện có

        if (e.target.files.length > 0) {
            for (var i = 0; i < e.target.files.length; i++) {
                var file = e.target.files[i];

                if (file.type.match(/^image\//)) {
                    var reader = new FileReader();

                    reader.onload = function(e) {
                        var img = document.createElement('img');
                        img.src = e.target.result;
                        img.className = 'preview-image-8';
                        previewContainer.appendChild(img);
                    };

                    reader.readAsDataURL(file);
                } else {
                    alert('Vui lòng chọn một hình ảnh.');
                }
            }
        }
    });
    document.getElementById('viva_gallery').addEventListener('change', function(e) {
        var previewContainer = document.getElementById('image-preview-9');
        previewContainer.innerHTML = '';

        if (e.target.files.length > 0) {
            for (var i = 0; i < e.target.files.length; i++) {
                var file = e.target.files[i];

                if (file.type.match(/^image\//)) {
                    var reader = new FileReader();

                    reader.onload = function(e) {
                        var img = document.createElement('img');
                        img.src = e.target.result;
                        img.className = 'preview-image-9';
                        previewContainer.appendChild(img);
                    };

                    reader.readAsDataURL(file);
                } else {
                    alert('Vui lòng chọn một hình ảnh.');
                }
            }
        }
    });
    document.getElementById('nispa_tinhnang_image').addEventListener('change', function(e) {
        var previewContainer = document.getElementById('image-preview-11');
        previewContainer.innerHTML = ''; // Xóa tất cả các ảnh hiện có

        if (e.target.files.length > 0) {
            for (var i = 0; i < e.target.files.length; i++) {
                var file = e.target.files[i];

                if (file.type.match(/^image\//)) {
                    var reader = new FileReader();

                    reader.onload = function(e) {
                        var img = document.createElement('img');
                        img.src = e.target.result;
                        img.className = 'preview-image-11';
                        previewContainer.appendChild(img);
                    };

                    reader.readAsDataURL(file);
                } else {
                    alert('Vui lòng chọn một hình ảnh.');
                }
            }
        }
    });
    document.getElementById('nispa_gallery').addEventListener('change', function(e) {
        var previewContainer = document.getElementById('image-preview-10');
        previewContainer.innerHTML = ''; // Xóa tất cả các ảnh hiện có

        if (e.target.files.length > 0) {
            for (var i = 0; i < e.target.files.length; i++) {
                var file = e.target.files[i];

                if (file.type.match(/^image\//)) {
                    var reader = new FileReader();

                    reader.onload = function(e) {
                        var img = document.createElement('img');
                        img.src = e.target.result;
                        img.className = 'preview-image-10';
                        previewContainer.appendChild(img);
                    };

                    reader.readAsDataURL(file);
                } else {
                    alert('Vui lòng chọn một hình ảnh.');
                }
            }
        }
    });
    </script>
    <style>
    #image-preview-1,
    #image-preview-2,
    #image-preview-3,
    #image-preview-4,
    #image-preview-5,
    #image-preview-6,
    #image-preview-7,
    #image-preview-8,
    #image-preview-9,
    #image-preview-10,
    #image-preview-11,
    #image-preview {
        display: flex;
        flex-wrap: wrap;
    }

    .preview-image-1,
    .preview-image-2,
    .preview-image-3,
    .preview-image-4,
    .preview-image-5,
    .preview-image-6,
    .preview-image-7,
    .preview-image-8,
    .preview-image-9,
    .preview-image-10,
    .preview-image-11,
    .preview-image {
        max-width: 100px;
        height: auto;
        margin: 5px;
    }

    /* .heidi_page {
                display: none !important
            } */
    </style>


    </div>
</form>
@endsection