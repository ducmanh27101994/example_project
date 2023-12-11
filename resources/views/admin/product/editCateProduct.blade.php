@extends('/template/index')

@section('content')
    <form method="post" action="{{route('admin.edit.submit.cate.product', ['id' => $editCate->id])}}">
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
                                                   href="{{route('admin.list.cate.product')}}">
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
                                                                <input
                                                                    value="{{!empty(old('name')) ? old('name') : $editCate->name}}"
                                                                    name="category_title" type="text" id="txtname"
                                                                    class="inputbox error" minlength="2" required
                                                                    aria-required="true" aria-invalid="true"
                                                                    style="width:350px;">
                                                                <a href="#" class="tooltip">
                                                                    <img src="{{ asset('images/help-icon.png') }}">
                                                                    <span><b>Tiêu đề danh mục tin</b><br>
                                                                    Nhập tiêu đề của danh mục tin tức, độ dài tiêu đề không quá 150 ký tự
                                                                </span>
                                                                </a>
                                                                @if($errors->has('name'))
                                                                    <p class="text-danger"
                                                                       style="margin-top: 10px;">{{ $errors->first('name') }}</p>
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
                                                                       @if($editCate->status == 'active')
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


@endsection
