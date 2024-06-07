@extends('/template/index')

@section('content')
<form method="post" action="{{route('admin.submit.editBannerAds', ['id' => $banner->id])}}"
    enctype="multipart/form-data">
    @csrf
    <div id="page-wrapper">

        <div class="widget">

            <div class="widget-title">

                <div class="widget-title">
                    <h4><i class="icon-reorder">
                            Quản lý vị trí quảng cáo</i></h4>
                    <div class="ui-widget-content ui-corner-top ui-corner-bottom">
                        <div id="toolbox">

                            <div style="float: right; margin-right: 10px;" class="toolbox-content">

                                <table class="toolbar">
                                    <tbody>
                                        <tr>


                                            <td align="center">
                                                <button type="submit" id="lnkadd" class="toolbar">
                                                    <span class="icon-ok-new"></span>
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
                    <div id="element-box">
                        <div class="m">
                            <div id="adminForm1">

                                <div id="pndetail">

                                    <div style="width: 100%; display: block; margin: 0px;padding: 15px 0"
                                        id="parentHorizontalTab" class="divvalidate" novalidate="novalidate">
                                        <ul class="resp-tabs-list hor_1">
                                            <li class="resp-tab-item hor_1 resp-tab-active"
                                                aria-controls="hor_1_tab_item-0" role="tab"
                                                style="background-color: white; border-color: rgb(193, 193, 193);">
                                                Vị
                                                trí quảng cáo
                                            </li>
                                        </ul>
                                        <div class="resp-tabs-container hor_1"
                                            style="border-color: rgb(193, 193, 193);">
                                            <h2 class="resp-accordion hor_1 resp-tab-active" role="tab"
                                                aria-controls="hor_1_tab_item-0"
                                                style="background: none; border-color: rgb(193, 193, 193);"><span
                                                    class="resp-arrow"></span>Vị trí quảng cáo</h2>
                                            <div class="resp-tab-content hor_1 resp-tab-content-active"
                                                aria-labelledby="hor_1_tab_item-0" style="display:block">
                                                <p>
                                                    <span class="detail_error">
                                                    </span>
                                                </p>
                                                <table cellspacing="1" class="admintable">
                                                    <tbody>
                                                        <tr>
                                                            <td width="150" class="key">
                                                                <label for="txtuser">Tiêu đề</label>
                                                            </td>
                                                            <td>
                                                                <input name="title" type="text" id="txtname"
                                                                    class="inputbox error" minlength="2" required=""
                                                                    aria-required="true" aria-invalid="true"
                                                                    style="width:364px;"
                                                                    value="{{!empty(old('title')) ? old('title') : $banner->title}}">
                                                                <a href="#" class="tooltip">
                                                                    <img src="{{ asset('images/help-icon.png') }}">
                                                                    <span><b>Tiêu đề</b><br>
                                                                        Nhập tên vị trí của quảng cáo vd: quảng cáo
                                                                        trang chủ, ...
                                                                    </span>
                                                                </a>
                                                                @if($errors->has('title'))
                                                                    <p class="text-danger" style="margin-top: 10px;">
                                                                        {{ $errors->first('title') }}
                                                                    </p>
                                                                @endif
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td width="150" class="key">
                                                                <label for="txtuser">Mã quảng cáo</label>
                                                            </td>
                                                            <td>
                                                                <input name="code_ads" type="text" id="txt_code"
                                                                    class="inputbox" style="width:150px;"
                                                                    value="{{!empty(old('code_ads')) ? old('code_ads') : $banner->code_ads}}">
                                                                <a href="#" class="tooltip">
                                                                    <img src="{{ asset('images/help-icon.png') }}">
                                                                    <span><b>Mã quảng cáo</b><br>
                                                                        Mã quảng cáo phân biệt giữa các vị trí
                                                                    </span>
                                                                </a>
                                                                @if($errors->has('code_ads'))
                                                                    <p class="text-danger" style="margin-top: 10px;">
                                                                        {{ $errors->first('code_ads') }}
                                                                    </p>
                                                                @endif
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td width="150" class="key">
                                                                <label for="txtuser">Mô tả</label>
                                                            </td>
                                                            <td>
                                                                <textarea name="desc" id="desc" rows="2" cols="50"
                                                                    id="txt_mota" class="inputbox"
                                                                    style="height:80px;width:500px;">{!! $banner->desc !!}</textarea>
                                                                <a href="#" class="tooltip">
                                                                    <img src="{{ asset('images/help-icon.png') }}">
                                                                    <span><b>Mô tả quảng cáo</b><br>
                                                                        Mô tả ngắn gọn cho vị trí quảng cáo
                                                                    </span>
                                                                </a>
                                                            </td>
                                                        </tr>

                                                        <tr>
                                                            <td width="150" class="key">
                                                                <label for="txtuser">Link liên kết</label>
                                                            </td>
                                                            <td>
                                                                <input name="txt_link" type="text" id="txt_link"
                                                                    class="inputbox" style="width:350px;"
                                                                    value="{!! $banner->link !!}">
                                                                <a href="#" class="tooltip">
                                                                    <img src="{{ asset('images/help-icon.png') }}">
                                                                    <span><b>Link liên kết</b><br>
                                                                        Đặt link đích đến cho bài viết
                                                                    </span>
                                                                </a>
                                                            </td>
                                                        </tr>

                                                        <tr>
                                                            <td class="key">
                                                                <label for="txtphone">Ảnh banner</label>
                                                            </td>
                                                            <td>

                                                                <br>
                                                                <input type="file" name="image_banner" id="flupload"
                                                                    title="Ảnh đại diện" class="upload-file">
                                                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                                <img
                                                                    src="{{$banner->image_banner}}" style="width: 150px;display: block;">
                                                            </td>
                                                        </tr>

                                                        <tr>
                                                            <td class="key">
                                                                <label for="txtphone">Ảnh banner mobile trang chủ</label>
                                                            </td>
                                                            <td>

                                                                <br>
                                                                <input type="file" name="image_banner_mobile" id="image_banner_mobile"
                                                                    title="Ảnh đại diện mobile" class="upload-file">
                                                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                                <img
                                                                    src="{{$banner->image_banner_mobile}}" style="width: 150px;display: block;">
                                                            </td>
                                                        </tr>

                                                        <tr>
                                                            <td class="key">
                                                                <label for="listnhom">Trạng thái</label>
                                                            </td>
                                                            <td>
                                                                <input id="chkstatus" type="checkbox" name="status"
                                                                    @if($banner->status == 'active') checked="checked"
                                                                    @endif><label for="chkstatus"> Hiển thị</label>

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
                            <div class="clr"></div>
                        </div>
                    </div>
                </div>

            </div>
        </div>

    </div>
</form>

<script>
    CKEDITOR.replace('desc', {
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
@endsection