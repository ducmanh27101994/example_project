@extends('/template/index')

@section('content')

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
                                            <a onclick="return validation();" id="update" class="toolbar" href="javascript:__doPostBack('update','')">
                                                <span class="icon-ok-update"></span>
                                                Cập nhật
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

                <div style="width: 100%; display: block; margin: 0px;" id="parentHorizontalTab" class="divvalidate" novalidate="novalidate">
                    <ul class="resp-tabs-list hor_1">
                        <li class="resp-tab-item hor_1 resp-tab-active" aria-controls="hor_1_tab_item-0" role="tab" style="background-color: white; border-color: rgb(193, 193, 193);">Thông tin chung</li>

                    </ul>
                    <div class="resp-tabs-container hor_1" style="border-color: rgb(193, 193, 193);">
                        <h2 class="resp-accordion hor_1 resp-tab-active" role="tab" aria-controls="hor_1_tab_item-0" style="background: none; border-color: rgb(193, 193, 193);"><span class="resp-arrow"></span>Thông tin chung</h2>
                        <div class="resp-tab-content hor_1 resp-tab-content-active" aria-labelledby="hor_1_tab_item-0" style="display:block">
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

                                            <input type="file" name="flupload" id="flupload" class="upload-file">

                                            <br>
                                            <img height="100" style="max-width:600px" src="https://vntravelsimple.com/uploads/banners/logo-viet-nam-travel-simple-cat-nho.png">
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

                                            <input type="file" name="flbackground" id="flbackground" class="upload-file">

                                            <br>
                                            <img height="100" style="max-width:600px" src="https://vntravelsimple.com/uploads/banners/48-logo-viet-nam-travel-simple-cat-nho.png">
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

                                            <input type="file" name="flfavicon" id="flfavicon" class="upload-file">

                                            <br>
                                            <img height="30" style="max-width:600px" src="https://vntravelsimple.com/uploads/banners/48-logo-viet-nam-travel-simple-cat-nho.png">

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
                                            <textarea name="txtcontent" rows="2" cols="20" id="txtcontent"></textarea>
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

@endsection