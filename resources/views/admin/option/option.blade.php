@extends('/template/index')

@section('content')
    <div class="widget">

        <div class="widget-title">

            <div class="widget-title">
                <h4><i class="icon-reorder">
                        Cập nhật quyền truy cập</i></h4>
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
                                        <a onclick="return validation();" id="lnkupdate" class="toolbar"
                                           href="javascript:__doPostBack('controls1$ctl00$ctl00$ctl00$lnkupdate','')">
                                            <span class="icon-ok-update"></span>
                                            Cập nhật
                                        </a>
                                    </td>
                                    <td align="center">
                                        <a id="lnkclose" class="toolbar"
                                           href="javascript:__doPostBack('controls1$ctl00$ctl00$ctl00$lnkclose','')">
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


            <div class="widget-body">
                <div id="element-box">

                    <div class="m">
                        <div id="adminForm1">

                            <div id="pndetail">


                                <div id="parentHorizontalTab" class="divvalidate"
                                     style="display: block; width: 100%; margin: 0px;">
                                    <ul class="resp-tabs-list hor_1">
                                        <li class="resp-tab-item hor_1 resp-tab-active" aria-controls="hor_1_tab_item-0"
                                            role="tab"
                                            style="background-color: white; border-color: rgb(193, 193, 193);">Thông tin
                                            chung
                                        </li>
                                    </ul>
                                    <div class="resp-tabs-container hor_1" style="border-color: rgb(193, 193, 193);">
                                        <h2 class="resp-accordion hor_1 resp-tab-active" role="tab"
                                            aria-controls="hor_1_tab_item-0"
                                            style="background: none; border-color: rgb(193, 193, 193);"><span
                                                class="resp-arrow"></span>Thông tin chung</h2>
                                        <div class="resp-tab-content hor_1 resp-tab-content-active"
                                             aria-labelledby="hor_1_tab_item-0" style="display:block">
                                            <table cellspacing="1" width="100%" class="admintable admintablem">
                                                <tbody>

                                                <tr>
                                                    <td width="150" class="key" valign="top">
                                                        <label for="txtuser">Danh sách quyền</label>
                                                    </td>
                                                    <td>


                                                        <ul>

                                                            @if(!empty($configOption))
                                                                @foreach($configOption as $value)
                                                                    <li>
                                                                        <input
                                                                            type="checkbox"
                                                                            name="{{$value->slug}}"
                                                                            id="{{$value->slug}}"
                                                                            @if($value->status == 'active') checked @endif >{{$value->name}}
                                                                    </li>
                                                                @endforeach
                                                            @endif
                                                        </ul>


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

    <script>
        $(document).ready(function () {
            $('input[type="checkbox"]').on('change', function () {
                var isChecked = $(this).prop('checked');
                var slug = $(this).attr('id');
                console.log(isChecked)
                console.log(slug)
                var csrfToken = $('meta[name="csrf-token"]').attr('content');
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': csrfToken
                    }
                });

                $.ajax({
                    url: '/admin/update-status',
                    method: 'POST',
                    data: {
                        slug: slug,
                        status: isChecked ? 'active' : 'inactive'
                    },
                    success: function (response) {
                        // Xử lý thành công nếu cần
                        console.log(response);
                    },
                    error: function (error) {
                        // Xử lý lỗi nếu có
                        console.log(error);
                    }
                });
            });
        });
    </script>
@endsection
