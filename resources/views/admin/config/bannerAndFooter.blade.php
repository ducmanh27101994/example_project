@extends('/template/index')

@section('content')
    <form method="post" action="{{route('admin.submit.bannerAndFooter')}}" enctype='multipart/form-data'>
        @csrf
        <div id="page-wrapper">

            <div class="widget">
                <div class="widget-title">


                    <div class="widget-title">
                        <h4><i class="icon-reorder">
                                Banner &amp; Logo - Chân trang</i></h4>
                        <div class="ui-widget-content ui-corner-top ui-corner-bottom">
                            <div id="toolbox">

                                <div style="float: right; margin-right: 10px;" class="toolbox-content">

                                    <table class="toolbar">
                                        <tbody>
                                        <tr>

                                            <td align="center">
                                                <button type="submit" id="update" class="toolbar">
                                                    <span class="icon-ok-update"></span>
                                                    Cập nhật
                                                </button>
                                            </td>
                                        </tr>
                                        </tbody>
                                    </table>

                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="widget-body">

                        <div style="width: 100%; display: block; margin: 0px;" id="parentHorizontalTab"
                             class="divvalidate" novalidate="novalidate">
                            <ul class="resp-tabs-list hor_1">
                                <li class="resp-tab-item hor_1 resp-tab-active" aria-controls="hor_1_tab_item-0"
                                    role="tab" style="background-color: white; border-color: rgb(193, 193, 193);">Thông
                                    tin chung
                                </li>

                            </ul>
                            <div class="resp-tabs-container hor_1" style="border-color: rgb(193, 193, 193);">
                                <h2 class="resp-accordion hor_1 resp-tab-active" role="tab"
                                    aria-controls="hor_1_tab_item-0"
                                    style="background: none; border-color: rgb(193, 193, 193);"><span
                                        class="resp-arrow"></span>Thông tin chung</h2>
                                <div class="resp-tab-content hor_1 resp-tab-content-active"
                                     aria-labelledby="hor_1_tab_item-0" style="display:block">
                                    <p>
                                    </p>
                                    <table width="100%" cellspacing="1" class="admintable">
                                        <tbody>
                                        <tr>
                                            <td valign="top" style="width: 200px !important;" class="key">
                                                <label for="txtphone">Hình ảnh banner</label>
                                                <a href="#" class="tooltip">
                                                    <img src="{{ asset('images/help-icon.png') }}">
                                                    <span><b>Hình ảnh icon left</b><br>
                                                    Hình ảnh banner, logo. Chọn hình ảnh định dạng file .gif, .jpg, .png
                                                </span>
                                                </a>
                                            </td>
                                            <td>

                                                <input type="file" name="banner_images" id="flupload"
                                                       class="upload-file" value="{{!empty(old('banner_images')) ? old('banner_images') : $configImages->banner_images}}">

                                                <br>
                                                <img height="100" style="max-width:600px"
                                                     @if(empty($configImages->banner_images))
                                                     src="https://vntravelsimple.com/uploads/banners/logo-viet-nam-travel-simple-cat-nho.png"
                                                     @else
                                                     src="{{$configImages->banner_images}}"
                                                    @endif

                                                >
                                            </td>
                                        </tr>
                                        <tr>
                                            <td valign="top" style="width: 200px !important;" class="key">
                                                <label for="txtphone">Hình ảnh icon right</label>
                                                <a href="#" class="tooltip">
                                                    <img src="{{ asset('images/help-icon.png') }}">
                                                    <span><b>Hình ảnh icon right</b><br>
                                                    Chọn hình ảnh định dạng file .gif, .jpg, .jpeg, .png
                                                </span>
                                                </a>
                                            </td>
                                            <td>

                                                <input type="file" name="image_icon_right" id="flbackground"
                                                       class="upload-file" value="{{!empty(old('image_icon_right')) ? old('image_icon_right') : $configImages->image_icon_right}}">

                                                <br>
                                                <img height="100" style="max-width:600px"
                                                     @if(empty($configImages->image_icon_right))
                                                     src="https://vntravelsimple.com/uploads/banners/logo-viet-nam-travel-simple-cat-nho.png"
                                                     @else
                                                     src="{{$configImages->image_icon_right}}"
                                                    @endif
                                                >
                                            </td>
                                        </tr>
                                        <tr>
                                            <td valign="top" style="width: 200px !important;" class="key">
                                                <label for="txtphone">Hình ảnh favicon</label>
                                                <a href="#" class="tooltip">
                                                    <img src="{{ asset('images/help-icon.png') }}">
                                                    <span><b>Hình ảnh favicon</b><br>
                                                    Hình ảnh favicon hiển thị trên thanh tiêu đề. Chọn hình ảnh định dạng file .gif, .jpg, .jpeg, .png
                                                </span>
                                                </a>
                                            </td>
                                            <td>

                                                <input type="file" name="favicon_image" id="flfavicon"
                                                       class="upload-file" value="{{!empty(old('favicon_image')) ? old('favicon_image') : $configImages->favicon_image}}">

                                                <br>
                                                <img height="30" style="max-width:600px"
                                                     @if(empty($configImages->favicon_image))
                                                     src="https://vntravelsimple.com/uploads/banners/logo-viet-nam-travel-simple-cat-nho.png"
                                                     @else
                                                     src="{{$configImages->favicon_image}}"
                                                    @endif
                                                >

                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="key" valign="top">
                                                <label for="txtphone">Nội dung chân trang</label>
                                                <a href="#" class="tooltip">
                                                    <img src="{{ asset('images/help-icon.png') }}">
                                                    <span><b>Nội dung chân trang</b><br>
                                                    Nội dung hiển thị ở phía cuối của website
                                                </span>
                                                </a>
                                            </td>
                                            <td>
                                                <textarea name="footer_content" id="footer_content" cols="50"
                                                          rows="30">{{$configImages->footer_content}}</textarea>
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
            </div>
        </div>
    </form>

    <script>
        CKEDITOR.replace('footer_content', {
            filebrowserBrowseUrl: '{{ asset('ckfinder/ckfinder.html') }}',
            filebrowserImageBrowseUrl: '{{ asset('ckfinder/ckfinder.html?type=Images') }}',
            filebrowserFlashBrowseUrl: '{{ asset('ckfinder/ckfinder.html?type=Flash') }}',
            filebrowserUploadUrl: '{{ asset('ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files') }}',
            filebrowserImageUploadUrl: '{{ asset('ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images') }}',
            filebrowserFlashUploadUrl: '{{ asset('ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash') }}'
            allowedContent: true
        });
    </script>
@endsection
