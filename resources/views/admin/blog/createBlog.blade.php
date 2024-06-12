@extends('/template/index')

@section('content')
    <form method="post" action="{{route('admin.submit.createBlog')}}" enctype='multipart/form-data'>
        @csrf
        <div id="page-wrapper">
            <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
            <script>
                $(function () {
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
                                        <button type="submit" id="lnkupdate" class="toolbar"
                                        >
                                            <span class="icon-ok-update"></span>
                                            Tạo mới
                                        </button>
                                    </td>
                                    <td align="center">
                                        <a id="lnkclose" class="toolbar"
                                           href="{{route('admin.indexListBlog')}}">
                                            <span class="icon-ok-close"></span>
                                            Quay về
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
                                    <li class="resp-tab-item hor_1 resp-tab-active" aria-controls="hor_1_tab_item-0"
                                        role="tab"
                                        style="background-color: rgb(255, 255, 255); border-color: rgb(193, 193, 193);">
                                        Thông tin chung
                                    </li>
                                    <li class="resp-tab-item hor_1" aria-controls="hor_1_tab_item-1" role="tab"
                                        style="background-color: rgb(245, 245, 245);">Cấu hình SEO
                                    </li>
                                </ul>
                                <div class="resp-tabs-container hor_1" style="border-color: rgb(193, 193, 193);">

                                    <h2 class="resp-accordion hor_1 resp-tab-active" role="tab"
                                        aria-controls="hor_1_tab_item-0"
                                        style="background: none; border-color: rgb(193, 193, 193);"><span
                                            class="resp-arrow"></span>Thông tin chung</h2>
                                    <div class="resp-tab-content hor_1 resp-tab-content-active"
                                         aria-labelledby="hor_1_tab_item-0" style="display:block">
                                        <div class="row">
                                            <div class="col-sm-8">
                                                <div class="block_sp">
                                                    <div class="form-group">
                                                        <label class="next-label">Tiêu đề tin</label> <a href="#"
                                                                                                         class="tooltip">
                                                            <img src="{{ asset('images/help-icon.png') }}">
                                                            <span><b>Tiêu đề tin</b><br>
                                                        Nhập tiêu đề tin, độ dài tiêu đề không quá 150 ký tự
                                                    </span>
                                                        </a>
                                                        <input name="news_headlines" type="text"
                                                               id="txtnewsname" class="inputbox"
                                                               placeholder="Nhập tiêu đề tin" style="width:100%;"
                                                               value="{{old('news_headlines')}}">
                                                        @if($errors->has('news_headlines'))
                                                            <p class="text-danger"
                                                               style="margin-top: 10px;">{{ $errors->first('news_headlines') }}</p>
                                                        @endif
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="next-label">Mô tả</label>
                                                        <textarea name="describe" rows="2"
                                                                  cols="20" id="describe" class="inputbox "
                                                                  style="height:80px;width:100%;">{{old('describe')}}</textarea>

                                                    </div>
                                                    <div class="form-group">
                                                        <label class="next-label">Chi tiết</label>
                                                        <textarea name="detail" id="detail" cols="50"
                                                                  rows="30">{{old('detail')}}</textarea>

                                                    </div>
                                                </div>


                                                <div class="block_sp hidden">
                                                    <p class="ttg">Tag liên quan</p>
                                                    <div class="form-group">
                                                        <label class="next-label" data-bind="text:Title">Danh sách tag
                                                            liên
                                                            quan</label><a href="#" class="tooltip">
                                                            <img src="{{ asset('images/help-icon.png') }}">
                                                            <span><b>Tag liên quan</b><br>
                                                        Các từ khóa liên quan đến tin cách nhau bởi dấu phảy (,)
                                                    </span>
                                                        </a>
                                                        <input type="hidden" id="idtem" value="-1">
                                                        <input name="tagtemp" type="hidden" id="tagtemp" value="">
                                                        <input class="form-control" id="taglist" name="taglist" value=""
                                                               placeholder="Nhập tag, Phân cách bằng dấu phẩy (,)"
                                                               style="display: none;">
                                                        <div class="bootstrap-tagsinput">
                                                            <p class="tagl" style="display: inline-block">

                                                            </p>
                                                            <input name="controls1$ctl00$ctl00$ctl00$txt_tag"
                                                                   type="text"
                                                                   id="txt_tag" class="inputbox"
                                                                   placeholder="Nhập tag, Phân cách bằng dấu phẩy (,)">
                                                        </div>
                                                        <p style="padding: 10px 0px; color: #9fafba">Chọn thêm các tag
                                                            đã có
                                                            sẵn.</p>
                                                        <div class="tags text-no-bold">
                                                            <div class="input-group">
                                                                <ul>

                                                                    <li>
                                                                        <label class="item tag-color-1 selecttag">Thiết
                                                                            kế
                                                                            nội thất văn phòng</label>
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
                                                        <label class="text-no-bold" data-bind="text:Title"
                                                               style="font-weight:bold">Hình ảnh đại diện (908 x 406 pixel)</label>
                                                        <input type="file" name="representative_image"
                                                               id="flupload" class="btn-change-link pull-right"
                                                               style="width:180px;">
                                                    </div>
                                                    <div class="center">


                                                    </div>
                                                    <p style="color:#c3cfd8" class="center">Sử dụng nút <strong>Chọn
                                                            hình</strong> để thêm hình.</p>
                                                </div>
                                                <div class="block_sp">
                                                    <p class="ttg">Danh mục tin <a href="#" class="tooltip">
                                                            <img src="{{ asset('images/help-icon.png') }}">
                                                            <span><b>Danh mục tin</b><br>
                                                        Lưa chọn danh mục tin
                                                    </span>
                                                        </a></p>
                                                    <div class="form-group">

                                                        <select name="category_id" id="ddlcate"
                                                                class="inputbox" style="width:100%;">
                                                            <?php showCategory($category); ?>

                                                        </select>
                                                    </div>
                                                    <div class="form-group hidden">
                                                        <label class="next-label">Nhóm tin</label>
                                                        <div class="listgr">
                                                            <ul>

                                                                <li><input type="checkbox" name="chkgr" value="10362">
                                                                    Nhóm
                                                                    tin 1
                                                                </li>


                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>


                                                <div class="block_sp">
                                                    <p class="ttg">Tin trang danh mục sản phẩm </p>
                                                    <div class="form-group">


                                                        <select name="category_blogproduct" id="ddlblogproduct"
                                                                class="inputbox" style="width:100%;">
                                                            <option value="1">Không hiển thị</option>
                                                            <option value="2">Thông minh đạt tiêu chuẩn</option>
                                                            <option value="3">Dễ dàng hơn bao giờ hết</option>
                                                            <option value="4">Yêu thích chuyến đi</option>

                                                        </select>


                                                    </div>
                                                </div>
                                                <div class="block_sp" style="height: 150px; overflow-x: auto;">
                                                    <div class="form-group">
                                                        <p class="ttg">Sản phẩm đề xuất</p>
                                                        @if(!empty($listProduct))
                                                            @foreach($listProduct as $value)
                                                                <input id="chknews" type="checkbox"
                                                                       name="recommended_products[]"
                                                                       checked="checked" value="{{$value->id}}">{{$value->product_name}}<br>
                                                            @endforeach
                                                        @endif
                                                    </div>
                                                </div>
                                                <div class="block_sp">
                                                    <div class="form-group">
                                                        <p class="ttg">Tin mới</p>
                                                        <input id="chknewshot" type="checkbox"
                                                               name="chknewshot"
                                                        > Tin mới<br>
                                                    </div>
                                                </div>
                                                <div class="block_sp">
                                                    <div class="form-group">
                                                        <p class="ttg">Trạng thái</p>
                                                        <input id="chkstatus" type="checkbox"
                                                               name="status"
                                                               checked="checked"> Hiển thị<br>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>


                                    </div>


                                    <h2 class="resp-accordion hor_1" role="tab" aria-controls="hor_1_tab_item-1"
                                        style="background-color: rgb(245, 245, 245); border-color: rgb(193, 193, 193);">
                                        <span class="resp-arrow"></span>Cấu hình SEO</h2>
                                    <div class="resp-tab-content hor_1" aria-labelledby="hor_1_tab_item-1"
                                         style="border-color: rgb(193, 193, 193);">

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
                                                    <input name="page_title_tag" type="text"
                                                           id="txttitleweb" class="inputbox" style="width:460px;"
                                                           value="{{old('page_title_tag')}}">
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
                                                        <span
                                                            class="next-input-add-on next-input__add-on--before">{{ url()->to('/') . '/' }}</span>

                                                        <input name="path" type="text"
                                                               id="txturl" class="txtpa" style="width:335px;"
                                                               value="{{old('path')}}" readonly>
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
                                                <textarea name="keyword_tags" rows="5"
                                                          cols="70" id="txtkeyword" class="inputbox"
                                                          style="height:80px;">{{old('keyword_tags')}}</textarea>
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
                                                <textarea name="description_card" rows="5"
                                                          cols="70" id="txtmetadesc" class="inputbox"
                                                          style="height:80px;">{{old('description_card')}}</textarea>
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
                        activate: function (event) { // Callback function if tab is switched
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
    </form>

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
        CKEDITOR.replace('describe', {
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
    <?php

    function showCategory($category, $parent_id = 0, $char = '')
    {
        foreach ($category as $key => $item) {
            if ($item->parent_id == $parent_id) {
                echo '<option value="' . $item->id . '">' . $char . $item->category_title . '</option>';
                showCategory($category, $item->id, $char . '--- ');
            }
        }
    }

    ?>

@endsection
