@extends('/template/index')

@section('content')
    <form method="post" action="{{route('admin.submit.editStaticPage', ['id' => $staticPage->id])}}" enctype="multipart/form-data">
        @csrf
        <div id="page-wrapper">

            <div class="widget">
                <div class="widget-title">


                    <div class="widget-title">
                        <h4><i class="icon-reorder">
                                Cập nhật nội dung độc lập</i></h4>
                        <div class="ui-widget-content ui-corner-top ui-corner-bottom">
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
                                                <button type="submit" id="lnkupdate" class="toolbar">
                                                    <span class="icon-ok-update"></span>
                                                    Cập nhật
                                                </button>
                                            </td>
                                            <td align="center">
                                                <a id="lnkclose" class="toolbar"
                                                   href="{{route('admin.createStaticPage')}}">
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


                    <div class="widget-body">
                        <div id="element-box">
                            <div class="m">
                                <div id="adminForm1">

                                    <div id="pndetail">

                                        <div style="width: 100%; display: block; margin: 0px;" id="parentHorizontalTab"
                                             class="divvalidate" novalidate="novalidate">
                                            <ul class="resp-tabs-list hor_1">
                                                <li class="resp-tab-item hor_1 resp-tab-active"
                                                    aria-controls="hor_1_tab_item-0" role="tab"
                                                    style="background-color: white; border-color: rgb(193, 193, 193);">
                                                    Thông
                                                    tin chung
                                                </li>
                                            </ul>
                                            <div class="resp-tabs-container hor_1"
                                                 style="border-color: rgb(193, 193, 193);">
                                                <h2 class="resp-accordion hor_1 resp-tab-active" role="tab"
                                                    aria-controls="hor_1_tab_item-0"
                                                    style="background: none; border-color: rgb(193, 193, 193);"><span
                                                        class="resp-arrow"></span>Thông tin chung</h2>
                                                <div class="resp-tab-content hor_1 resp-tab-content-active"
                                                     aria-labelledby="hor_1_tab_item-0" style="display:block">
                                                    <p>
                                                    </p>
                                                    <table cellspacing="1" class="admintable">
                                                        <tbody>
                                                        <tr>
                                                            <td width="150" class="key">
                                                                <label for="txtuser">Tiêu đề</label>
                                                            </td>
                                                            <td>
                                                                <input name="title"
                                                                       type="text" value="{{!empty(old('title')) ? old('title') : $staticPage->title}}" id="txtname"
                                                                       class="inputbox"
                                                                       style="width:250px;" >
                                                                <a href="#" class="tooltip">
                                                                    <img src="{{ asset('images/help-icon.png') }}">
                                                                    <span><b>Tiêu đề</b><br>
                                                                    Đặt tên cho nội dung này
                                                                </span>
                                                                </a>
                                                                @if($errors->has('title'))
                                                                    <p class="text-danger"
                                                                       style="margin-top: 10px;">{{ $errors->first('title') }}</p>
                                                                @endif
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td width="150" class="key">
                                                                <label for="txtuser">Vị trí</label>
                                                            </td>
                                                            <td>
                                                                <input name="location"
                                                                       type="text" value="{{!empty(old('location')) ? old('location') : $staticPage->location}}" id="txt_vitri"
                                                                       class="aspNetDisabled inputbox"
                                                                       style="width:250px;">
                                                                <a href="#" class="tooltip">
                                                                    <img src="{{ asset('images/help-icon.png') }}">
                                                                    <span><b>Vị trí</b><br>
                                                                    Vị trí này dùng để phân biệt cho nội dung
                                                                </span>
                                                                </a>
                                                                @if($errors->has('location'))
                                                                    <p class="text-danger"
                                                                       style="margin-top: 10px;">{{ $errors->first('location') }}</p>
                                                                @endif
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td class="key">

                                                                <label for="txtphone">Chi tiết</label>
                                                            </td>
                                                            <td>
                                                            <textarea name="detail"
                                                                      rows="2" cols="20" id="txtcontent">{{!empty(old('detail')) ? old('detail') : $staticPage->detail}}</textarea>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td class="key">
                                                                <label for="txtphone">Ảnh đại diện</label>
                                                            </td>
                                                            <td>

                                                                <br>
                                                                <input type="file"
                                                                       name="avatar"
                                                                       id="flupload" title="Ảnh đại diện"
                                                                       class="upload-file" >
                                                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                                <img src="{{$staticPage->avatar}}">
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td width="150" class="key">
                                                                <label for="txtuser">Link liên kết</label>
                                                            </td>
                                                            <td>
                                                                <input name="link"
                                                                       type="text" id="txt_link" class="inputbox"
                                                                       style="width:350px;" value="{{!empty(old('link')) ? old('link') : $staticPage->link}}">
                                                                <a href="#" class="tooltip">
                                                                    <img src="{{ asset('images/help-icon.png') }}">
                                                                    <span><b>Link liên kết</b><br>
                                                                    Đặt link đích đến cho bài viết
                                                                </span>
                                                                </a>
                                                                @if($errors->has('link'))
                                                                    <p class="text-danger"
                                                                       style="margin-top: 10px;">{{ $errors->first('link') }}</p>
                                                                @endif
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td class="key">
                                                                <label for="listnhom">Trạng thái</label>
                                                            </td>
                                                            <td>
                                                                <input id="chkstatus" type="checkbox"
                                                                       name="status"
                                                                       @if($staticPage->status == 'active')
                                                                       checked="checked"
                                                                    @endif
                                                                ><label for="chkstatus"> Hiển
                                                                    thị</label>

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
        CKEDITOR.replace('detail', {
            filebrowserBrowseUrl: '{{ asset('ckfinder/ckfinder.html') }}',
            filebrowserImageBrowseUrl: '{{ asset('ckfinder/ckfinder.html?type=Images') }}',
            filebrowserFlashBrowseUrl: '{{ asset('ckfinder/ckfinder.html?type=Flash') }}',
            filebrowserUploadUrl: '{{ asset('ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files') }}',
            filebrowserImageUploadUrl: '{{ asset('ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images') }}',
            filebrowserFlashUploadUrl: '{{ asset('ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash') }}',
            allowedContent: true
       });
    </script>
@endsection
