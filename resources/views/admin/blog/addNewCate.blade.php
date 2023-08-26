@extends('/template/index')

@section('content')
    <form method="post" action="{{route('admin.submit.indexCreateCategory')}}">
        @csrf
        <div id="page-wrapper">

            <div class="widget">

                <div class="widget-title">


                    <div class="widget-title">
                        <h4><i class="icon-reorder">Thêm danh mục tin tức</i></h4>
                        <div class="ui-widget-content ui-corner-top ui-corner-bottom">
                            <div id="toolbox">

                                <div style="float:right;margin-right: 10px;" class="toolbox-content">

                                    <table class="toolbar">
                                        <tbody>
                                        <tr>


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
                                                <a id="lnkclose" class="toolbar"
                                                   href="{{route('admin.indexListCategory')}}">
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

                                        <span class="detail_error"></span>
                                        <div style="width: 100%; display: block; margin: 0px;" id="parentHorizontalTab"
                                             class="divvalidate" novalidate="novalidate">
                                            <ul class="resp-tabs-list hor_1">
                                                <li class="resp-tab-item hor_1 resp-tab-active"
                                                    aria-controls="hor_1_tab_item-0" role="tab"
                                                    style="background-color: white; border-color: rgb(193, 193, 193);">
                                                    Thông tin chung
                                                </li>

                                                <li class="resp-tab-item hor_1" aria-controls="hor_1_tab_item-3"
                                                    role="tab" style="background-color: rgb(245, 245, 245);">Thiết lập
                                                    SEO
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
                                                                <label for="txtuser">Tiêu đề (<span
                                                                        class="requirecss">*</span>)</label>
                                                            </td>
                                                            <td>
                                                                <input value="{{old('category_title')}}"
                                                                       name="category_title" type="text" id="txtname"
                                                                       class="inputbox error" minlength="2" required=""
                                                                       aria-required="true" aria-invalid="true"
                                                                       style="width:350px;">
                                                                <a href="#" class="tooltip">
                                                                    <img src="{{ asset('images/help-icon.png') }}">
                                                                    <span><b>Tiêu đề danh mục tin</b><br>
                                                                    Nhập tiêu đề của danh mục tin tức, độ dài tiêu đề không quá 150 ký tự
                                                                </span>
                                                                </a>
                                                                @if($errors->has('category_title'))
                                                                    <p class="text-danger"
                                                                       style="margin-top: 10px;">{{ $errors->first('category_title') }}</p>
                                                                @endif
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td width="150" class="key">
                                                                <label for="txtuser">Thuộc danh mục (<span
                                                                        class="requirecss">*</span>)</label>
                                                            </td>
                                                            <td>
                                                                <select name="parent_id"
                                                                        id="ddlcate" class="inputbox"
                                                                        style="width:350px;">
                                                                    <option value="0">Danh mục chính</option>
                                                                   <?php showCategory($category) ?>

                                                                </select>
                                                                <a href="#" class="tooltip">
                                                                    <img src="{{ asset('images/help-icon.png') }}">
                                                                    <span><b>Thuộc danh mục</b><br>
                                                                    Lựa chọn danh mục cha
                                                                </span>
                                                                </a>
                                                            </td>
                                                        </tr>

                                                        <tr>
                                                            <td class="key">
                                                                <label for="listnhom">Trạng thái</label>
                                                            </td>
                                                            <td>
                                                                <input id="chkstatus" type="checkbox" name="status"
                                                                       checked="checked"><label for="chkstatus"> Hiển
                                                                    thị</label>

                                                            </td>
                                                        </tr>


                                                        </tbody>
                                                    </table>
                                                    <p></p>

                                                </div>

                                                <h2 class="resp-accordion hor_1" role="tab"
                                                    aria-controls="hor_1_tab_item-3"
                                                    style="background-color: rgb(245, 245, 245); border-color: rgb(193, 193, 193);">
                                                    <span class="resp-arrow"></span>Thiết lập SEO</h2>
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
                                                                    <span class="page-title-seo">Thẻ tiêu đề trang</span>
                                                                    <div class="page-description-seo ws-nm">
                                                                        <span>{{ url()->to('/') . '/' }}</span></div>
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
                                                                       id="txttitleweb" class="inputbox"
                                                                       style="width:460px;"
                                                                       value="{{old('page_title_tag')}}">
                                                                <a href="#" class="tooltip">
                                                                    <img src="{{ asset('images/help-icon.png') }}">
                                                                    <span><b>Tiêu đề trang</b><br>
                                                                    Nội dung được hiển thị dưới dạng tiêu đề trong kết quả tìm kiếm và trên trình duyệt của người dùng. <br><i>(Tiêu đề nên để dưới 70 ký tự)</i>
                                                                </span>
                                                                </a>
                                                                @if($errors->has('page_title_tag'))
                                                                    <p class="text-danger"
                                                                       style="margin-top: 10px;">{{ $errors->first('page_title_tag') }}</p>
                                                                @endif
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

                                                                    <input value="{{old('path')}}" name="path"
                                                                           type="text" id="txturl" class="txtpa"
                                                                           style="width:335px;">
                                                                </div>
                                                                <a href="#" class="tooltip">
                                                                    <img src="{{ asset('images/help-icon.png') }}">
                                                                    <span><b>Đường dẫn</b><br>
                                                                    Đường dẫn tới danh mục tin
                                                                </span>
                                                                </a>
                                                                @if($errors->has('path'))
                                                                    <p class="text-danger"
                                                                       style="margin-top: 10px;">{{ $errors->first('path') }}</p>
                                                                @endif
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td width="150" class="key">
                                                                <label for="txtkeyword">Thẻ từ khóa</label>
                                                            </td>
                                                            <td>
                                                                <textarea name="keyword_tags" rows="5" cols="70"
                                                                          id="txtkeyword" class="inputbox"
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
                                                                <textarea name="description_card" rows="5" cols="70"
                                                                          id="txtdesc" class="inputbox"
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
                    </div>

                </div>
            </div>
            <script type="text/javascript">
                function validation() {
                    //validation ở đây nha
                    return true;
                }

                $.validator.setDefaults({
                    submitHandler: function () {
                        alert("submitted!");
                    }
                });
                $(document).ready(function () {
                    //Horizontal Tab


                    $('#parentHorizontalTab').easyResponsiveTabs({
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


                    $(".divvalidate").validate({
                        rules: {
                            controls1$ctl00$ctl00$ctl00$txtname: "required"

                        },
                        messages: {
                            controls1$ctl00$ctl00$ctl00$txtname: "Please enter your firstname"

                        }
                    });
                });
            </script>


            <style>
                label.error,
                label.error {
                    color: red;
                    font-style: italic
                }

                div.error {
                    display: none;
                }
            </style>
        </div>
    </form>

    <?php

    function showCategory($category, $parent_id = 0, $char = '')
    {
        foreach ($category as $key => $item){
            if ($item->parent_id == $parent_id) {
                echo '<option value="'.$item->id.'">'. $char .$item->category_title.'</option>';
                showCategory($category, $item->id, $char. '--- ');
            }
        }
    }

    ?>
@endsection
