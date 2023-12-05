@extends('/template/index')

@section('content')
<form method="post" action="{{route('admin.submitStore')}}" enctype="multipart/form-data">
    @csrf
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
                    Thêm cửa hàng</i></h4>
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
                                        <button id="lnkupdate" class="toolbar" type="submit">
                                            <span class="icon-ok-update"></span>
                                            Cập nhật
                                        </button>
                                    </td>
                                    <td align="center">
                                        <a id="lnkclose" class="toolbar" href="{{route('admin.indexStore')}}">
                                            <span class="icon-ok-close"></span>
                                            Quay lại
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
                                <li class="resp-tab-item hor_1 resp-tab-active" aria-controls="hor_1_tab_item-0" role="tab" style="background-color: rgb(255, 255, 255); border-color: rgb(193, 193, 193);">
                                    Thông cửa hàng chung
                                </li>
                                <li class="resp-tab-item hor_1" aria-controls="hor_1_tab_item-1" role="tab" style="background-color: rgb(245, 245, 245);">Cấu hình SEO
                                </li>
                            </ul>
                            <div class="resp-tabs-container hor_1" style="border-color: rgb(193, 193, 193);">

                                <h2 class="resp-accordion hor_1 resp-tab-active" role="tab" aria-controls="hor_1_tab_item-0" style="background: none; border-color: rgb(193, 193, 193);"><span class="resp-arrow"></span>Thông cửa hàng chung</h2>
                                <div class="resp-tab-content hor_1 resp-tab-content-active" aria-labelledby="hor_1_tab_item-0" style="display:block">
                                    <div class="row">
                                        <div class="col-sm-8">
                                            <div class="block_sp">
                                                <div class="form-group">
                                                    <label class="next-label">Tiêu đề cửa hàng</label> <a href="#" class="tooltip">
                                                        <img src="{{ asset('images/help-icon.png') }}">
                                                        <span><b>Tiêu đề cửa hàng</b><br>
                                                            Nhập tiêu đề cửa hàng, độ dài tiêu đề không quá 150 ký tự
                                                        </span>
                                                    </a>
                                                    <input name="title_store" type="text" id="txtnewsname" class="inputbox" placeholder="Nhập tiêu đề cửa hàng" style="width:100%;" value="{{old('title_store')}}">
                                                    @if($errors->has('title_store'))
                                                    <p class="text-danger" style="margin-top: 10px;">{{ $errors->first('title_store') }}</p>
                                                    @endif
                                                </div>
                                                <div class="row">
                                                    <div class="col-sm-6 hidden">
                                                        <div class="form-group">
                                                            <label class="next-label">Tọa độ latitude</label> <a href="#" class="tooltip">
                                                                <img src="{{ asset('images/help-icon.png') }}">
                                                                <span><b>Tọa độ vĩ độ latitude</b><br>
                                                                    Lấy tọa độ vĩ độ latitude trên google maps
                                                                </span>
                                                            </a>
                                                            <input name="latitude" type="text" id="txtnewsname" class="inputbox" placeholder="Nhập vĩ độ  latitude" style="width:100%;" value="{{old('latitude')}}">
                                                            @if($errors->has('latitude'))
                                                            <p class="text-danger" style="margin-top: 10px;">{{ $errors->first('latitude') }}</p>
                                                            @endif
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-6 hidden">
                                                        <div class="form-group">
                                                            <label class="next-label">Tọa độ longitude</label> <a href="#" class="tooltip">
                                                                <img src="{{ asset('images/help-icon.png') }}">
                                                                <span><b>Tọa độ kinh độ longitude</b><br>
                                                                    Lấy tọa độ kinh độ longitude trên google maps
                                                                </span>
                                                            </a>
                                                            <input name="longitude" type="text" id="txtnewsname" class="inputbox" placeholder="Nhập kinh độ longitude" style="width:100%;" value="{{old('longitude')}}">
                                                            @if($errors->has('longitude'))
                                                            <p class="text-danger" style="margin-top: 10px;">{{ $errors->first('longitude') }}</p>
                                                            @endif
                                                        </div>
                                                    </div>


                                                </div>
                                                <div class="form-group">
                                                    <label class="next-label">Số điện thoại</label>
                                                    <input name="desc" rows="2" cols="20" id="txtdesc" class="inputbox " style="width:100%;" value="{{old('desc')}}" />
                                                </div>
                                                <div class="form-group">
                                                    <label class="next-label">Link google map</label>
                                                    <input name="maplink" rows="2" cols="20" id="txtmaplink" class="inputbox " style="width:100%;" value="" />
                                                </div>
                                                <div class="block_sp">
                                                    <div class="form-group">
                                                        <p class="ttg">Trạng thái</p>
                                                        <input id="chkstatus" type="checkbox" name="status" checked="checked"> Hiển thị<br>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-sm-4">
                                            <div class="block_sp">
                                                <div class="form-group">
                                                    <label class="text-no-bold" data-bind="text:Title" style="font-weight:bold">Hình ảnh đại diện</label>
                                                    <input type="file" name="image_store" id="flupload" class="btn-change-link pull-right" style="width:180px;">
                                                </div>
                                                <div class="center">


                                                </div>
                                                <p style="color:#c3cfd8" class="center">Sử dụng nút <strong>Chọn
                                                        hình</strong> để thêm hình.</p>
                                            </div>
                                            <div class="block_sp">
                                                <p class="ttg">Khu vực</p>
                                                <div class="form-group">

                                                    <select name="address" id="ddlcate" class="inputbox" style="width:100%;">
                                                        <option value="An bắc">Miền bắc
                                                        <option value="An trung">Miền trung
                                                        <option value="An nam">Miền nam
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="block_sp">
                                                <p class="ttg">Tỉnh, thành phố cửa hàng<a href="#" class="tooltip">
                                                        <img src="{{ asset('images/help-icon.png') }}">
                                                        <span><b>Tỉnh, thành phố cửa hàng</b><br>
                                                            Lưa chọn tỉnh, thành phố cửa hàng
                                                        </span>
                                                    </a></p>
                                                <div class="form-group">

                                                    <select name="address" id="ddlcate" class="inputbox" style="width:100%;">
                                                        <option value="An Giang">An Giang


                                                    </select>
                                                </div>
                                            </div>

                                            <div class="block_sp">
                                                <p class="ttg">Quận huyện</p>
                                                <div class="form-group">

                                                    <select name="address" id="ddlcate" class="inputbox" style="width:100%;">
                                                        <option value="An Giang">An Giang

                                                    </select>
                                                </div>
                                                <div class="form-group hidden">
                                                    <label class="next-label">Nhóm cửa hàng</label>
                                                    <div class="listgr">
                                                        <ul>

                                                            <li><input type="checkbox" name="chkgr" value="10362"> Nhóm
                                                                cửa hàng 1
                                                            </li>


                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>


                                        </div>
                                    </div>


                                </div>


                                <h2 class="resp-accordion hor_1" role="tab" aria-controls="hor_1_tab_item-1" style="background-color: rgb(245, 245, 245); border-color: rgb(193, 193, 193);">
                                    <span class="resp-arrow"></span>Cấu hình SEO
                                </h2>
                                <div class="resp-tab-content hor_1" aria-labelledby="hor_1_tab_item-1" style="border-color: rgb(193, 193, 193);">

                                    <p>
                                    </p>
                                    <table class="admintable">
                                        <tbody>
                                            <tr>
                                                <td valign="top">Tối ưu SEO</td>
                                                <td>
                                                    <div>
                                                        <span class="page-title-seo">Thẻ tiêu đề trang</span>
                                                        <div class="page-description-seo ws-nm">
                                                            <span>{{ url()->to('/') . '/' }}</span>
                                                        </div>
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
                                                    <input name="page_title_tag" type="text" id="txttitleweb" class="inputbox" style="width:460px;" value="{{old('page_title_tag')}}">
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
                                                        <span class="next-input-add-on next-input__add-on--before">{{ url()->to('/') . '/' }}</span>

                                                        <input name="path" type="text" id="txturl" class="txtpa" style="width:335px;" value="{{old('path')}}">
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
                                                    <textarea name="keyword_tags" rows="5" cols="70" id="txtkeyword" class="inputbox" style="height:80px;">{{old('keyword_tags')}}</textarea>
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
                                                    <textarea name="description_card" rows="5" cols="70" id="txtmetadesc" class="inputbox" style="height:80px;">{{old('description_card')}}</textarea>
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
    </div>
</form>
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
@endsection