@extends('/template/index')

@section('content')

    <form action="{{route('admin.submit.indexCreateMenu')}}" method="post">
        @csrf
        <div id="page-wrapper">


            <div class="widget">

                <div class="widget-title">


                    <div class="widget-title">
                        <h4><i class="icon-reorder">
                                Thêm menu</i></h4>
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
                                                <button type="submit" id="lnkupdate" class="toolbar"
                                                        href="">
                                                    <span class="icon-ok-update"></span>
                                                    Tạo menu
                                                </button>
                                            </td>
                                            <td align="center">
                                                <a id="lnkclose" class="toolbar"
                                                   href="{{route('admin.indexListMenu')}}">
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


                                        <div id="parentHorizontalTab" class="divvalidate"
                                             style="display: block; width: 100%; margin: 0px;">
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
                                                    <table cellspacing="1" width="100%" class="admintable">
                                                        <tbody>

                                                        <tr>
                                                            <td width="150" class="key">
                                                                <label for="txtuser">Thuộc menu</label>
                                                            </td>
                                                            <td>
                                                                <select name="parent_id"
                                                                        id="ddlcate" class="inputbox"
                                                                        style="width:450px;">
                                                                    <option value="0">Menu chính</option>
                                                                <?php showMenus($menu) ?>
                                                                </select>
                                                                <a href="#" class="tooltip">
                                                                    <img src="{{ asset('images/help-icon.png') }}">
                                                                    <span><b>Chọn menu</b><br>
                                                                    Chọn menu này là menu chính hay là menu con của 1 mục nào đó
                                                                </span>
                                                                </a>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td width="150" class="key">
                                                                <label for="txtuser">Tiêu đề</label>
                                                            </td>
                                                            <td>
                                                                <input name="menu_title"
                                                                       type="text" id="txtname" class="inputbox"
                                                                       style="width:450px;"
                                                                       value="{{old('menu_title')}}">
                                                                <a href="#" class="tooltip">
                                                                    <img src="{{ asset('images/help-icon.png') }}">
                                                                    <span><b>Tiêu đề</b><br>
                                                                    Tiêu đề của menu VD: Trang chủ, Sản phẩm, Liên hệ...
                                                                </span>
                                                                </a>
                                                                @if($errors->has('menu_title'))
                                                                    <p class="text-danger"
                                                                       style="margin-top: 10px;">{{ $errors->first('menu_title') }}</p>
                                                                @endif
                                                            </td>
                                                        </tr>


                                                        <tr>
                                                            <td valign="top" class="key">
                                                                <label for="txtphone">Liên kết </label>
                                                            </td>
                                                            <td>
                                                                <ul>
                                                                    <li><span style="display: none; width: 140px;">

                                                                        <label
                                                                            for="rdlinkinput"> Nhập liên kết</label></span>
                                                                        <input
                                                                            name="menu_router"
                                                                            type="text" id="txtlink" class="inputbox"
                                                                            style="width:450px;"
                                                                            value="{{old('menu_router')}}">
                                                                        <a href="#" class="tooltip">
                                                                            <img
                                                                                src="{{ asset('images/help-icon.png') }}">
                                                                            <span><b>Liên kết</b><br>
                                                                            Lấy liên kết từ tin tức,bài viết, sản phẩm,...
                                                                        </span>
                                                                        </a>
                                                                        @if($errors->has('menu_router'))
                                                                            <p class="text-danger"
                                                                               style="margin-top: 10px;">{{ $errors->first('menu_router') }}</p>
                                                                        @endif
                                                                        <br>
                                                                        <br>
                                                                    </li>

                                                                </ul>
                                                            </td>
                                                        </tr>

                                                        <tr>
                                                            <td class="key">
                                                                <label for="listnhom">Trạng thái</label>
                                                            </td>
                                                            <td>
                                                                <input id="chkstatus" type="checkbox"
                                                                       name="status"
                                                                       checked="checked"><label for="chkstatus"> Hiển
                                                                    thị</label>

                                                            </td>
                                                        </tr>
                                                        </tbody>
                                                    </table>
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
        </div>
    </form>


    <?php

    function showMenus($menuChils, $parent_id = 0, $char = '')
    {
        foreach ($menuChils as $key => $item){
            if ($item->parent_id == $parent_id) {
                echo '<option value="'.$item->id.'">'. $char .$item->menu_title.'</option>';
                showMenus($menuChils, $item->id, $char. '--- ');
            }
        }
    }

    ?>
@endsection


