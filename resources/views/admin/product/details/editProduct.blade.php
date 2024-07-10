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
                                                    value="{{$product->product_name}}" id="" class="inputbox"
                                                    placeholder="" style="width:100%;">
                                            </div>
                                        </div>

                                        <div class="block_sp">
                                            <div class="form-group">
                                                <label class="next-label">Tiêu đề nhỏ(slogan)</label>
                                                <input name="product_slogan" type="text"
                                                    value="{{$product->product_slogan}}" id="" class="inputbox"
                                                    placeholder="" style="width:100%;">
                                            </div>
                                        </div>

                                        <div class="block_sp">
                                            <div class="form-group">
                                                <input name="distance_traveled_title" type="text"
                                                    value="{{$product->distance_traveled_title}}" id="" class="inputbox"
                                                    placeholder="Quãng đường di chuyển" style="width:100%;">
                                                <input name="distance_traveled" type="text"
                                                    value="{{$product->distance_traveled}}" id="" class="inputbox"
                                                    placeholder="" style="width:100%;">
                                            </div>
                                        </div>
                                        <div class="block_sp">
                                            <div class="form-group">
                                                <input name="maximum_speed_title" type="text"
                                                    value="{{$product->maximum_speed_title}}" id="" class="inputbox"
                                                    placeholder="Vận tốc lớn nhất" style="width:100%;">
                                                <input name="maximum_speed" type="number"
                                                    value="{{$product->maximum_speed}}" id="" class="inputbox"
                                                    placeholder="" style="width:100%;">
                                            </div>
                                        </div>
                                        <div class="block_sp">
                                            <div class="form-group">
                                                <input name="allowable_weight_to_carry_title" type="text"
                                                    value="{{$product->allowable_weight_to_carry_title  }}" id=""
                                                    class="inputbox" placeholder="Khối lượng cho phép chở"
                                                    style="width:100%;">
                                                <input name="allowable_weight_to_carry" type="text"
                                                    value="{{$product->allowable_weight_to_carry}}" id=""
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
                                                            value="{{$product->describe_input_1}}" id=""
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
                                                            value="{{$product->describe_input_2}}" id=""
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
                                                            value="{{$product->describe_input_3}}" id=""
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
                                                            value="{{$product->describe_input_4}}" id=""
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
                                                        <label class="text-no-bold" data-bind="text: Title">Hình ảnh
                                                            block chi tiết (955x955)</label>
                                                        <input type="file" name="block_detail_image" id="flupload"
                                                            class="btn-change-link pull-right" style="width:180px;">
                                                    </div>
                                                    <div>
                                                        <img style="width: 180px; height: auto"
                                                            src="{{$product->block_detail_image ?? ''}}">
                                                    </div>
                                                </div>


                                                <textarea name="detail" id="detail" cols="50"
                                                    rows="30">{!! html_entity_decode($product->detail) !!} </textarea>
                                            </div>
                                        </div>

                                        <div class="block_sp">
                                            <div class="form-group">
                                                <label class="next-label">Động cơ (4 trang langdingpage)</label>

                                                <div class="block_sp">
                                                    <div class="form-group">
                                                        <label class="text-no-bold" data-bind="text: Title">Hình ảnh
                                                            động cơ (768x823)</label>
                                                        <input type="file" name="block_dongco_image" id="flupload"
                                                            class="btn-change-link pull-right" style="width:180px;">
                                                    </div>
                                                    <div>
                                                        <img style="width: 180px; height: auto"
                                                            src="{{$product->block_dongco_image ?? ''}}">
                                                    </div>
                                                </div>


                                                <textarea name="dongco_content" id="dongco_content" cols="50"
                                                    rows="30">{!! html_entity_decode($product->dongco_content) !!}</textarea>
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
                                                <label class="text-no-bold" data-bind="text: Title">Hình ảnh đại
                                                    diện trang sản phẩm (1230 × 700 px)</label>
                                                <input type="file" name="representative_image_product" id="flupload"
                                                    class="btn-change-link pull-right" style="width:180px;">

                                            </div>
                                            <div>
                                                <img style="width: 180px; height: auto"
                                                    src="{{$product->representative_image_product}}">
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
                                                            <div class="image-360-box image-box imag-id-{{$value->id}}">
                                                                <img id="{{$value->id}}" data-id="{{$value->id}}"
                                                                    class="imag-360"
                                                                    style="width: 160px; height: auto; padding: 7px"
                                                                    src="{{$value->images}}">
                                                                <div class="delete-image" data-id="{{$value->id}}">
                                                                    <img src="{{ asset('/images/icondelete_c.png') }}">
                                                                </div>
                                                            </div>
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
                                                        style="width:100%;">

                                                </div>
                                                <div class="form-group">
                                                    <label class="next-label">Giá so sánh</label>


                                                    <input name="price_comparison" type="number"
                                                        value="{{$product->price_comparison}}" id="txtpriceold"
                                                        class="inputbox" onkeypress=" return isNumberKey(event)"
                                                        placeholder="Giá so sánh với giá thị trường (Không bắt buộc nhập)"
                                                        style="width:100%;">
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
                                                                                                                                                    <option value="{{$value->id}}" @if(
                                                                                                                                                        $value->id ==
                                                                                                                                                        $product->product_portfolio
                                                                                                                                                    ) selected @endif>
                                                                                                                                                        {{$value->name}}
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
                                                    <option value="1" @if("1" == $product->interface_type) selected
                                                    @endif>
                                                        Trang cơ bản
                                                    </option>
                                                    <option value="2" @if("2" == $product->interface_type) selected
                                                    @endif>
                                                        Trang Hot 1 (Phiên bản Heidi)
                                                    </option>
                                                    <option value="3" @if("3" == $product->interface_type) selected
                                                    @endif>
                                                        Trang Hot 2 (Phiên bản gogo)
                                                    </option>
                                                    <option value="4" @if("4" == $product->interface_type) selected
                                                    @endif>
                                                        Trang Hot 3 (Phiên bản nispaviva)
                                                    </option>
                                                    <option value="5" @if("5" == $product->interface_type) selected
                                                    @endif>
                                                        Trang Hot 4 (Phiên bản x3)
                                                    </option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="block_sp">
                                            <div class="form-group">
                                                <p class="ttg">Số thứ tụ</p>
                                                <input id="chkstt" value="{{$product->chkstt}}" name="chkstt"
                                                    class="inputbox" style="width:100%;" type="number" min="0">
                                            </div>
                                        </div>

                                        <div class="block_sp">
                                            <div class="form-group">
                                                <p class="ttg">Trạng thái</p>
                                                <input id="chkstatus" type="checkbox" name="status" @if(
                                                    $product->status
                                                    == 'active'
                                                ) checked="checked" @endif>
                                                Hiển thị<br>
                                            </div>
                                        </div>

                                        <div class="block_sp">
                                            <div class="form-group">
                                                <p class="ttg">Lưu ý</p>
                                                <textarea name="note" id="note" cols="50"
                                                    rows="30">{!! html_entity_decode($product->note) !!} </textarea>
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
                                                <div class="image-box imag-id-{{$value->id}}">
                                                    <img id="{{$value->id}}" data-id="{{$value->id}}" class="imag-360"
                                                        style="width: 160px; height: auto; padding: 7px"
                                                        src="{{$value->images}}">
                                                    <div class="delete-image" data-id="{{$value->id}}">
                                                        <img src="{{ asset('/images/icondelete_c.png') }}">
                                                    </div>
                                                </div>
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

                                    <div class="upload__box">
                                        <div class="upload__btn-box">
                                            <div class="upload__btn">
                                                <div class="spanButtonPlaceholder block-upload-item"
                                                    id="upload-drop-zone"
                                                    style="position: relative; overflow: hidden; direction: ltr;">
                                                    <div class="browse-file"></div>
                                                    <p
                                                        style="color: #065799;font-size: 13px;text-align: justify;font-weight: 700;">
                                                        Chọn hình ảnh từ máy tính để tải lên</p><input
                                                        multiple="multiple" type="file" id="vehicle_detail_photos"
                                                        class="upload__inputfile" name="vehicle_detail_photos[]"
                                                        style="position: absolute; right: 0px; top: 0px; font-family: Arial; font-size: 118px; margin: 0px; padding: 0px; cursor: pointer; opacity: 0;">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="upload__img-wrap">

                                            @if(!empty($vehicle_detail_photos))
                                                @foreach($vehicle_detail_photos as $value)
                                                    <div class="image-box imag-id-{{$value->id}}">
                                                        <img id="{{$value->id}}" data-id="{{$value->id}}" class="imag-360"
                                                            style="width: 160px; height: auto; padding: 7px"
                                                            src="{{$value->images}}">
                                                        <div class="delete-image" data-id="{{$value->id}}">
                                                            <img src="{{ asset('/images/icondelete_c.png') }}">
                                                        </div>
                                                    </div>
                                                @endforeach
                                            @endif
                                        </div>
                                    </div>
                                    <br>
                                    <hr>
                                    <br>

                                    </tr>


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

                                    <div class="upload__box">
                                        <div class="upload__btn-box">
                                            <div class="upload__btn">
                                                <div class="spanButtonPlaceholder block-upload-item"
                                                    id="upload-drop-zone"
                                                    style="position: relative; overflow: hidden; direction: ltr;">
                                                    <div class="browse-file"></div>
                                                    <p
                                                        style="color: #065799;font-size: 13px;text-align: justify;font-weight: 700;">
                                                        Chọn hình ảnh từ máy tính để tải lên</p><input
                                                        multiple="multiple" type="file" id="actual_photo"
                                                        class="upload__inputfile" name="actual_photo[]"
                                                        style="position: absolute; right: 0px; top: 0px; font-family: Arial; font-size: 118px; margin: 0px; padding: 0px; cursor: pointer; opacity: 0;">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="upload__img-wrap">

                                            @if(!empty($actual_photo))
                                                @foreach($actual_photo as $value)
                                                    <div class="image-box imag-id-{{$value->id}}">
                                                        <img id="{{$value->id}}" data-id="{{$value->id}}" class="imag-360"
                                                            style="width: 160px; height: auto; padding: 7px"
                                                            src="{{$value->images}}">
                                                        <div class="delete-image" data-id="{{$value->id}}">
                                                            <img src="{{ asset('/images/icondelete_c.png') }}">
                                                        </div>
                                                    </div>
                                                @endforeach
                                            @endif
                                        </div>
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
                                                        <div class="image-box imag-id-{{$value->id}}">
                                                            <img id="{{$value->id}}" data-id="{{$value->id}}" class="imag-360"
                                                                style="width: 160px; height: auto; padding: 7px"
                                                                src="{{$value->images}}">
                                                            <div class="delete-image" data-id="{{$value->id}}">
                                                                <img src="{{ asset('/images/icondelete_c.png') }}">
                                                            </div>
                                                        </div>
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
                                                        <div class="image-box imag-id-{{$value->id}}">
                                                            <img id="{{$value->id}}" data-id="{{$value->id}}" class="imag-360"
                                                                style="width: 160px; height: auto; padding: 7px"
                                                                src="{{$value->images}}">
                                                            <div class="delete-image" data-id="{{$value->id}}">
                                                                <img src="{{ asset('/images/icondelete_c.png') }}">
                                                            </div>
                                                        </div>
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
                                                    <option value="1" @if("1" == $product->status_product) selected
                                                    @endif>Còn
                                                        hàng
                                                    </option>
                                                    <option value="2" @if("2" == $product->status_product) selected
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
                                                    @if($product->new_product == 'active') checked="checked" @endif><label
                                                    for="chknew"> Sản phẩm Hot</label>
                                                &nbsp;&nbsp;&nbsp;&nbsp;<br>
                                                <input id="chkhot" type="checkbox" name="selling_products"
                                                    @if($product->selling_products == 'active') checked="checked"
                                                    @endif><label for="chkhot"> Sản phẩm bán chạy</label>
                                                &nbsp;&nbsp;&nbsp;&nbsp;<br>
                                                <input id="chksale" type="checkbox" name="promotional_products"
                                                    @if($product->promotional_products == 'active') checked="checked"
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
                                                        {{ $errors->first('page_title_tag') }}
                                                    </p>
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
                                                        value="{{$product->heidi_title_banner6 ?? ''}}" id=""
                                                        class="inputbox" placeholder="Perfectly Stealth 1"
                                                        style="width:100%;">
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
                                                        value="{{$product->heidi_title_banner7 ?? ''}}" id=""
                                                        class="inputbox" placeholder="Perfectly Stealth 2"
                                                        style="width:100%;">
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
                                                        value="{{$product->heidi_title_banner8 ?? ''}}" id=""
                                                        class="inputbox" placeholder="Perfectly Stealth 3"
                                                        style="width:100%;">
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
                                                        value="{{$product->heidi_title_banner9 ?? ''}}" id=""
                                                        class="inputbox" placeholder="Perfectly Stealth 1"
                                                        style="width:100%;">
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
                                                        value="{{$product->heidi_title_banner10 ?? ''}}}" id=""
                                                        class="inputbox" placeholder="Perfectly Stealth 1"
                                                        style="width:100%;">
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
                                                        value="{{$product->heidi_title_banner11 ?? ''}}" id=""
                                                        class="inputbox" placeholder="Perfectly Stealth 2"
                                                        style="width:100%;">
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
                                                        value="{{$product->heidi_title_banner12 ?? ''}}" id=""
                                                        class="inputbox" placeholder="Perfectly Stealth 3"
                                                        style="width:100%;">
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
                                    <hr>
                                    <div class="col-xs-12">
                                        <h2>Mobile</h2>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="block_sp">
                                            <div class="form-group">
                                                <label class="text-no-bold" data-bind="text: Title">Hình ảnh
                                                    xe(section 1) kt: 550x854</label>
                                                <input type="file" name="heidi_images_banner1_mobile" class="pull-right"
                                                    style="width:180px;">
                                            </div>
                                            <div>
                                                <img style="width: 180px; height: auto"
                                                    src="{{$product->heidi_images_banner1_mobile ?? ''}}">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="block_sp">
                                            <div class="form-group">
                                                <label class="text-no-bold" data-bind="text: Title">Hình ảnh
                                                    xe(section 2) kt: 414x715</label>
                                                <input type="file" name="heidi_images_banner3_mobile" class="pull-right"
                                                    style="width:180px;">
                                            </div>
                                            <div>
                                                <img style="width: 180px; height: auto"
                                                    src="{{$product->heidi_images_banner3_mobile ?? ''}}">
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
                                    <hr>
                                    <div class="col-xs-12">
                                        <h2>Mobile</h2>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="block_sp">
                                            <div class="form-group">
                                                <label class="text-no-bold" data-bind="text: Title">Hình ảnh
                                                    banner(section 1)</label>
                                                <input type="file" name="gogo_images_banner1_mobile" id="" class="pull-right" style="width:180px;">
                                            </div>
                                            <div>
                                                <img style="width: 180px; height: auto"
                                                    src="{{$product->gogo_images_banner1_mobile ?? ''}}">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <div class="form-group" style="padding: 10px 10px;border: 1px solid #d4d4d4;">
                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <!-- nhiều ảnh -->
                                                        <label class="text-no-bold" data-bind="text: Title">Hình
                                                            ảnh gallery Mobile</label>
                                                        <input type="file" name="gogo_images_banner13_mobile[]"
                                                            id="gogo_images_banner13_mobile" class="pull-right"
                                                            style="width:180px;" multiple>
                                                    </div>
                                                    <div>
                                                        @if(!empty($gogo_images_banner13_mobile))
                                                            @foreach($gogo_images_banner13_mobile as $value)
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
                                    <div class="block_sp">
                                        <div class="form-group">
                                            <label class="text-no-bold" data-bind="text: Title">Hình ảnh background màu
                                                sắc</label>
                                            <input type="file" name="nispa_images_banner_color" id="flupload"
                                                class="pull-right" style="width:180px;">
                                        </div>
                                        <div style="display: flex;gap: 10px;white-space: nowrap;overflow-y: hidden;">
                                            <img style="width: 155px; height: auto"
                                                src="{{ $product->nispa_images_banner_color ?? '' }}">
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


                                <hr>

                                <div class="col-sm-12">
                                    <h2>Mobile</h2>
                                </div>

                                <div class="col-sm-4">
                                    <div class="block_sp">
                                        <div class="form-group">
                                            <label class="text-no-bold" data-bind="text: Title">Hình ảnh banner xe
                                                (section 1) kt: 550x854</label>
                                            <input type="file" name="nispa_images_banner1_mobile" class="pull-right"
                                                style="width:180px;">
                                        </div>
                                        <div style="display: flex;gap: 10px;white-space: nowrap;overflow-y: hidden;">
                                            <img style="width: 155px; height: auto"
                                                src="{{ $product->nispa_images_banner1_mobile ?? '' }}">
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
        $(document).ready(function () {
            //Horizontal Tab
            $('#parentHorizontalTabcontent').easyResponsiveTabs({
                type: 'default', //Types: default, vertical, accordion
                width: 'auto', //auto or any width like 600px
                fit: true, // 100% fit in a container
                tabidentify: 'hor_1', // The tab groups identifier
                activate: function (event) { // Callback function if tab is switched
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
            removeFormatAttributes: '',
            on: {
                instanceReady: function () {
                    this.on('notificationShow', function (evt) {
                        if (evt.data.message.indexOf('4.22.1 ') !== -1) {
                            evt.cancel();
                        }
                    });
                }
            }
        });
        CKEDITOR.replace('overview', {
            filebrowserBrowseUrl: '{{ asset('ckfinder/ckfinder.html') }}',
            filebrowserImageBrowseUrl: '{{ asset('ckfinder/ckfinder.html?type=Images') }}',
            filebrowserFlashBrowseUrl: '{{ asset('ckfinder/ckfinder.html?type=Flash') }}',
            filebrowserUploadUrl: '{{ asset('ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files') }}',
            filebrowserImageUploadUrl: '{{ asset('ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images') }}',
            filebrowserFlashUploadUrl: '{{ asset('ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash') }}',
            allowedContent: true,
            removeFormatAttributes: '',
            on: {
                instanceReady: function () {
                    this.on('notificationShow', function (evt) {
                        if (evt.data.message.indexOf('4.22.1 ') !== -1) {
                            evt.cancel();
                        }
                    });
                }
            }
        });
        CKEDITOR.replace('engine', {
            filebrowserBrowseUrl: '{{ asset('ckfinder/ckfinder.html') }}',
            filebrowserImageBrowseUrl: '{{ asset('ckfinder/ckfinder.html?type=Images') }}',
            filebrowserFlashBrowseUrl: '{{ asset('ckfinder/ckfinder.html?type=Flash') }}',
            filebrowserUploadUrl: '{{ asset('ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files') }}',
            filebrowserImageUploadUrl: '{{ asset('ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images') }}',
            filebrowserFlashUploadUrl: '{{ asset('ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash') }}',
            allowedContent: true,
            removeFormatAttributes: '',
            on: {
                instanceReady: function () {
                    this.on('notificationShow', function (evt) {
                        if (evt.data.message.indexOf('4.22.1 ') !== -1) {
                            evt.cancel();
                        }
                    });
                }
            }
        });
        CKEDITOR.replace('chassis', {
            filebrowserBrowseUrl: '{{ asset('ckfinder/ckfinder.html') }}',
            filebrowserImageBrowseUrl: '{{ asset('ckfinder/ckfinder.html?type=Images') }}',
            filebrowserFlashBrowseUrl: '{{ asset('ckfinder/ckfinder.html?type=Flash') }}',
            filebrowserUploadUrl: '{{ asset('ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files') }}',
            filebrowserImageUploadUrl: '{{ asset('ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images') }}',
            filebrowserFlashUploadUrl: '{{ asset('ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash') }}',
            allowedContent: true,
            removeFormatAttributes: '',
            on: {
                instanceReady: function () {
                    this.on('notificationShow', function (evt) {
                        if (evt.data.message.indexOf('4.22.1 ') !== -1) {
                            evt.cancel();
                        }
                    });
                }
            }
        });
        CKEDITOR.replace('gogo_desc_3', {
            filebrowserBrowseUrl: '{{ asset('ckfinder/ckfinder.html') }}',
            filebrowserImageBrowseUrl: '{{ asset('ckfinder/ckfinder.html?type=Images') }}',
            filebrowserFlashBrowseUrl: '{{ asset('ckfinder/ckfinder.html?type=Flash') }}',
            filebrowserUploadUrl: '{{ asset('ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files') }}',
            filebrowserImageUploadUrl: '{{ asset('ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images') }}',
            filebrowserFlashUploadUrl: '{{ asset('ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash') }}',
            allowedContent: true,
            removeFormatAttributes: '',
            on: {
                instanceReady: function () {
                    this.on('notificationShow', function (evt) {
                        if (evt.data.message.indexOf('4.22.1 ') !== -1) {
                            evt.cancel();
                        }
                    });
                }
            }
        });
        CKEDITOR.replace('gogo_desc_banner9', {
            filebrowserBrowseUrl: '{{ asset('ckfinder/ckfinder.html') }}',
            filebrowserImageBrowseUrl: '{{ asset('ckfinder/ckfinder.html?type=Images') }}',
            filebrowserFlashBrowseUrl: '{{ asset('ckfinder/ckfinder.html?type=Flash') }}',
            filebrowserUploadUrl: '{{ asset('ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files') }}',
            filebrowserImageUploadUrl: '{{ asset('ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images') }}',
            filebrowserFlashUploadUrl: '{{ asset('ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash') }}',
            allowedContent: true,
            removeFormatAttributes: '',
            on: {
                instanceReady: function () {
                    this.on('notificationShow', function (evt) {
                        if (evt.data.message.indexOf('4.22.1 ') !== -1) {
                            evt.cancel();
                        }
                    });
                }
            }
        });
        CKEDITOR.replace('gogo_desc_banner10', {
            filebrowserBrowseUrl: '{{ asset('ckfinder/ckfinder.html') }}',
            filebrowserImageBrowseUrl: '{{ asset('ckfinder/ckfinder.html?type=Images') }}',
            filebrowserFlashBrowseUrl: '{{ asset('ckfinder/ckfinder.html?type=Flash') }}',
            filebrowserUploadUrl: '{{ asset('ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files') }}',
            filebrowserImageUploadUrl: '{{ asset('ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images') }}',
            filebrowserFlashUploadUrl: '{{ asset('ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash') }}',
            allowedContent: true,
            removeFormatAttributes: '',
            on: {
                instanceReady: function () {
                    this.on('notificationShow', function (evt) {
                        if (evt.data.message.indexOf('4.22.1 ') !== -1) {
                            evt.cancel();
                        }
                    });
                }
            }
        });
        CKEDITOR.replace('gogo_desc_banner11', {
            filebrowserBrowseUrl: '{{ asset('ckfinder/ckfinder.html') }}',
            filebrowserImageBrowseUrl: '{{ asset('ckfinder/ckfinder.html?type=Images') }}',
            filebrowserFlashBrowseUrl: '{{ asset('ckfinder/ckfinder.html?type=Flash') }}',
            filebrowserUploadUrl: '{{ asset('ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files') }}',
            filebrowserImageUploadUrl: '{{ asset('ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images') }}',
            filebrowserFlashUploadUrl: '{{ asset('ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash') }}',
            allowedContent: true,
            removeFormatAttributes: '',
            on: {
                instanceReady: function () {
                    this.on('notificationShow', function (evt) {
                        if (evt.data.message.indexOf('4.22.1 ') !== -1) {
                            evt.cancel();
                        }
                    });
                }
            }
        });
        CKEDITOR.replace('viva_desc_banner4', {
            filebrowserBrowseUrl: '{{ asset('ckfinder/ckfinder.html') }}',
            filebrowserImageBrowseUrl: '{{ asset('ckfinder/ckfinder.html?type=Images') }}',
            filebrowserFlashBrowseUrl: '{{ asset('ckfinder/ckfinder.html?type=Flash') }}',
            filebrowserUploadUrl: '{{ asset('ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files') }}',
            filebrowserImageUploadUrl: '{{ asset('ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images') }}',
            filebrowserFlashUploadUrl: '{{ asset('ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash') }}',
            allowedContent: true,
            removeFormatAttributes: '',
            on: {
                instanceReady: function () {
                    this.on('notificationShow', function (evt) {
                        if (evt.data.message.indexOf('4.22.1 ') !== -1) {
                            evt.cancel();
                        }
                    });
                }
            }
        });
        CKEDITOR.replace('viva_desc_banner5', {
            filebrowserBrowseUrl: '{{ asset('ckfinder/ckfinder.html') }}',
            filebrowserImageBrowseUrl: '{{ asset('ckfinder/ckfinder.html?type=Images') }}',
            filebrowserFlashBrowseUrl: '{{ asset('ckfinder/ckfinder.html?type=Flash') }}',
            filebrowserUploadUrl: '{{ asset('ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files') }}',
            filebrowserImageUploadUrl: '{{ asset('ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images') }}',
            filebrowserFlashUploadUrl: '{{ asset('ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash') }}',
            allowedContent: true,
            removeFormatAttributes: '',
            on: {
                instanceReady: function () {
                    this.on('notificationShow', function (evt) {
                        if (evt.data.message.indexOf('4.22.1 ') !== -1) {
                            evt.cancel();
                        }
                    });
                }
            }
        });
        CKEDITOR.replace('viva_desc_banner6', {
            filebrowserBrowseUrl: '{{ asset('ckfinder/ckfinder.html') }}',
            filebrowserImageBrowseUrl: '{{ asset('ckfinder/ckfinder.html?type=Images') }}',
            filebrowserFlashBrowseUrl: '{{ asset('ckfinder/ckfinder.html?type=Flash') }}',
            filebrowserUploadUrl: '{{ asset('ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files') }}',
            filebrowserImageUploadUrl: '{{ asset('ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images') }}',
            filebrowserFlashUploadUrl: '{{ asset('ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash') }}',
            allowedContent: true,
            removeFormatAttributes: '',
            on: {
                instanceReady: function () {
                    this.on('notificationShow', function (evt) {
                        if (evt.data.message.indexOf('4.22.1 ') !== -1) {
                            evt.cancel();
                        }
                    });
                }
            }
        });
        CKEDITOR.replace('nispa_desc_4', {
            filebrowserBrowseUrl: '{{ asset('ckfinder/ckfinder.html') }}',
            filebrowserImageBrowseUrl: '{{ asset('ckfinder/ckfinder.html?type=Images') }}',
            filebrowserFlashBrowseUrl: '{{ asset('ckfinder/ckfinder.html?type=Flash') }}',
            filebrowserUploadUrl: '{{ asset('ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files') }}',
            filebrowserImageUploadUrl: '{{ asset('ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images') }}',
            filebrowserFlashUploadUrl: '{{ asset('ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash') }}',
            allowedContent: true,
            removeFormatAttributes: '',
            on: {
                instanceReady: function () {
                    this.on('notificationShow', function (evt) {
                        if (evt.data.message.indexOf('4.22.1 ') !== -1) {
                            evt.cancel();
                        }
                    });
                }
            }
        });
        CKEDITOR.replace('nispa_desc_3', {
            filebrowserBrowseUrl: '{{ asset('ckfinder/ckfinder.html') }}',
            filebrowserImageBrowseUrl: '{{ asset('ckfinder/ckfinder.html?type=Images') }}',
            filebrowserFlashBrowseUrl: '{{ asset('ckfinder/ckfinder.html?type=Flash') }}',
            filebrowserUploadUrl: '{{ asset('ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files') }}',
            filebrowserImageUploadUrl: '{{ asset('ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images') }}',
            filebrowserFlashUploadUrl: '{{ asset('ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash') }}',
            allowedContent: true,
            removeFormatAttributes: '',
            on: {
                instanceReady: function () {
                    this.on('notificationShow', function (evt) {
                        if (evt.data.message.indexOf('4.22.1 ') !== -1) {
                            evt.cancel();
                        }
                    });
                }
            }
        });
        CKEDITOR.replace('dongco_content', {
            filebrowserBrowseUrl: '{{ asset('ckfinder/ckfinder.html') }}',
            filebrowserImageBrowseUrl: '{{ asset('ckfinder/ckfinder.html?type=Images') }}',
            filebrowserFlashBrowseUrl: '{{ asset('ckfinder/ckfinder.html?type=Flash') }}',
            filebrowserUploadUrl: '{{ asset('ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files') }}',
            filebrowserImageUploadUrl: '{{ asset('ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images') }}',
            filebrowserFlashUploadUrl: '{{ asset('ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash') }}',
            allowedContent: true,
            removeFormatAttributes: '',
            on: {
                instanceReady: function () {
                    this.on('notificationShow', function (evt) {
                        if (evt.data.message.indexOf('4.22.1 ') !== -1) {
                            evt.cancel();
                        }
                    });
                }
            }
        });
        CKEDITOR.replace('note', {
            filebrowserBrowseUrl: '{{ asset('ckfinder/ckfinder.html') }}',
            filebrowserImageBrowseUrl: '{{ asset('ckfinder/ckfinder.html?type=Images') }}',
            filebrowserFlashBrowseUrl: '{{ asset('ckfinder/ckfinder.html?type=Flash') }}',
            filebrowserUploadUrl: '{{ asset('ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files') }}',
            filebrowserImageUploadUrl: '{{ asset('ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images') }}',
            filebrowserFlashUploadUrl: '{{ asset('ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash') }}',
            allowedContent: true,
            removeFormatAttributes: '',
            on: {
                instanceReady: function () {
                    this.on('notificationShow', function (evt) {
                        if (evt.data.message.indexOf('4.22.1 ') !== -1) {
                            evt.cancel();
                        }
                    });
                }
            }
        });
        CKEDITOR.replace('describe_textarea_1', {
            filebrowserBrowseUrl: '{{ asset('ckfinder/ckfinder.html') }}',
            filebrowserImageBrowseUrl: '{{ asset('ckfinder/ckfinder.html?type=Images') }}',
            filebrowserFlashBrowseUrl: '{{ asset('ckfinder/ckfinder.html?type=Flash') }}',
            filebrowserUploadUrl: '{{ asset('ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files') }}',
            filebrowserImageUploadUrl: '{{ asset('ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images') }}',
            filebrowserFlashUploadUrl: '{{ asset('ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash') }}',
            allowedContent: true,
            removeFormatAttributes: '',
            on: {
                instanceReady: function () {
                    this.on('notificationShow', function (evt) {
                        if (evt.data.message.indexOf('4.22.1 ') !== -1) {
                            evt.cancel();
                        }
                    });
                }
            }
        });
        CKEDITOR.replace('describe_textarea_2', {
            filebrowserBrowseUrl: '{{ asset('ckfinder/ckfinder.html') }}',
            filebrowserImageBrowseUrl: '{{ asset('ckfinder/ckfinder.html?type=Images') }}',
            filebrowserFlashBrowseUrl: '{{ asset('ckfinder/ckfinder.html?type=Flash') }}',
            filebrowserUploadUrl: '{{ asset('ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files') }}',
            filebrowserImageUploadUrl: '{{ asset('ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images') }}',
            filebrowserFlashUploadUrl: '{{ asset('ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash') }}',
            allowedContent: true,
            removeFormatAttributes: '',
            on: {
                instanceReady: function () {
                    this.on('notificationShow', function (evt) {
                        if (evt.data.message.indexOf('4.22.1 ') !== -1) {
                            evt.cancel();
                        }
                    });
                }
            }
        });
        CKEDITOR.replace('describe_textarea_3', {
            filebrowserBrowseUrl: '{{ asset('ckfinder/ckfinder.html') }}',
            filebrowserImageBrowseUrl: '{{ asset('ckfinder/ckfinder.html?type=Images') }}',
            filebrowserFlashBrowseUrl: '{{ asset('ckfinder/ckfinder.html?type=Flash') }}',
            filebrowserUploadUrl: '{{ asset('ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files') }}',
            filebrowserImageUploadUrl: '{{ asset('ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images') }}',
            filebrowserFlashUploadUrl: '{{ asset('ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash') }}',
            allowedContent: true,
            removeFormatAttributes: '',
            on: {
                instanceReady: function () {
                    this.on('notificationShow', function (evt) {
                        if (evt.data.message.indexOf('4.22.1 ') !== -1) {
                            evt.cancel();
                        }
                    });
                }
            }
        });
        CKEDITOR.replace('describe_textarea_4', {
            filebrowserBrowseUrl: '{{ asset('ckfinder/ckfinder.html') }}',
            filebrowserImageBrowseUrl: '{{ asset('ckfinder/ckfinder.html?type=Images') }}',
            filebrowserFlashBrowseUrl: '{{ asset('ckfinder/ckfinder.html?type=Flash') }}',
            filebrowserUploadUrl: '{{ asset('ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files') }}',
            filebrowserImageUploadUrl: '{{ asset('ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images') }}',
            filebrowserFlashUploadUrl: '{{ asset('ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash') }}',
            allowedContent: true,
            removeFormatAttributes: '',
            on: {
                instanceReady: function () {
                    this.on('notificationShow', function (evt) {
                        if (evt.data.message.indexOf('4.22.1 ') !== -1) {
                            evt.cancel();
                        }
                    });
                }
            }
        });
    </script>

    <style>
        .upload__btn-box {
            margin-bottom: 10px;
        }

        .upload__img-wrap {
            display: flex;
            flex-wrap: wrap;
            margin: 0 -10px;
        }

        .upload__img-box {
            width: 200px;
            padding: 0 10px;
            margin-bottom: 12px;
        }

        .upload__img-close {
            width: 24px;
            height: 24px;
            border-radius: 50%;
            background-color: rgba(0, 0, 0, 0.5);
            position: absolute;
            top: 10px;
            right: 10px;
            text-align: center;
            line-height: 24px;
            z-index: 1;
            cursor: pointer;
        }

        .upload__img-close:after {
            content: "✖";
            font-size: 14px;
            color: white;
        }

        .img-bg {
            background-repeat: no-repeat;
            background-position: center;
            background-size: cover;
            position: relative;
            padding-bottom: 100%;
        }
    </style>
    <script>
        $(document).ready(function () {
            ImgUpload();
        });

        function ImgUpload() {
            var imgWrap = "";
            var imgArray = [];

            $('.upload__inputfile').each(function () {
                $(this).on('change', function (e) {
                    imgWrap = $(this).closest('.upload__box').find('.upload__img-wrap');
                    var maxLength = $(this).attr('data-max_length');

                    var files = e.target.files;
                    var filesArr = Array.prototype.slice.call(files);
                    var iterator = 0;
                    filesArr.forEach(function (f, index) {

                        if (!f.type.match('image.*')) {
                            return;
                        }

                        if (imgArray.length >= maxLength) {
                            return false;
                        } else {
                            imgArray.push({ file: f, customVariable: '' });
                            console.log(imgArray);
                            var reader = new FileReader();
                            reader.onload = function (e) {
                                var html = "<div class='upload__img-box'><input type='text' class='img-name' name='name_image' placeholder='Enter image name'><div style='background-image: url(" + e.target.result + ")' data-number='" + $(".upload__img-close").length + "' data-file='" + f.name + "' class='img-bg'><div class='upload__img-close'></div></div></div>";
                                imgWrap.append(html);
                                iterator++;
                            }
                            reader.readAsDataURL(f);
                        }
                    });
                });
            });

            $('body').on('click', ".upload__img-close", function (e) {
                var file = $(this).parent().data("file");
                for (var i = 0; i < imgArray.length; i++) {
                    if (imgArray[i].file.name === file) {
                        imgArray.splice(i, 1);
                        console.log(imgArray);
                        break;
                    }
                }
                $(this).parent().parent().remove();

                updateInputValue();
            });

            $('body').on('blur', ".img-name", function () {
                var index = $(this).closest('.upload__img-box').index();
                imgArray[index].customVariable = $(this).val();
            });

        }

        function updateInputValue() {
            var input = $('#vehicle_detail_photos');
            var newFiles = [];
            imgArray.forEach(function (item) {
                newFiles.push(item.file);
            });
            input.val('').prop('files', newFiles);
        }

    </script>


    </div>
</form>
@endsection