@extends('/template/index')

@section('content')
    <div id="page-wrapper">
        <script>
            $(function () {
                $("#txt_updatetime").datepicker({
                    dateFormat: 'dd/mm/yy'
                });

            });
        </script>
        <div class="widget-title">
            <h4><i class="icon-reorder-items">
                    Danh sách của hàng</i></h4>
            <div class="ui-corner-top ui-corner-bottom">
                <div id="toolbox">
                    <div style="float: right; margin-right: 10px;" class="toolbox-content">
                        <table class="toolbar">
                            <tbody>
                            <tr>

                                <td align="center">
                                    <a id="lnkadd" class="toolbar" href="{{route('admin.createStore')}}">
                                        <span class="icon-ok-new"></span>
                                        Thêm
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
                    <div id="pnlist">
                        <div class="row-fluid">
                            <div class="span3">
                                <div style="margin-top: 4px; font-size: 12px; font-style: italic;">
                                    Tổng số cửa hàng: <span
                                        style="color: #A52A2A;">{{count($store) > 0 ? $store->total() : 0}}</span>

                                </div>
                            </div>
                           <form method="get" action="{{route('admin.indexStore')}}">
                                <div class="span9">
                                   <div class="pagination pagination-small pagination-right">
                                        <input name="title_store" type="text"
                                             id="txtkeysearch"
                                              class="inputbox-top" style="width:150px;padding-left: 10px" placeholder="Tìm kiếm cửa hàng" value="{{ request()->get('title_store') }}">
                                       <input type="submit" name="controls1$ctl00$ctl00$ctl00$btnsearch"
                                               value="Tìm kiếm"
                                              id="btnsearch" class="buton-css">
                                   </div>

                                </div>
                           </form>
                        </div>
                        <div class="page-items">

                        </div>

                        <table cellpadding="1" summary="" class="adminlist">
                            <thead>
                            <tr>
                                <th width="20" class="title">
                                    #
                                </th>
{{--                                <th width="80" class="title">Hình ảnh--}}
{{--                                </th>--}}
                                <th class="title">Tên cửa hàng
                                </th>
                                <th class="title">Tỉnh, thành phố
                                </th>
                                <th width="140" style="text-align: center" class="title">Thời gian tạo
                                </th>
{{--                                <th width="80" class="title">Trạng thái--}}
{{--                                </th>--}}
{{--                                <th style="width: 120px;" class="title"></th>--}}

                            </tr>
                            </thead>
                            @if (empty($store))
                                <tr>
                                    <td colspan="20" class="text-danger" style="text-align: center">Không có
                                        dữ
                                        liệu
                                    </td>
                                </tr>
                            @else
                                @foreach($store as $key => $value)
                                    <tbody>
                                    <tr class="row0">
                                        <td align="center">{{++$key}}</td>

                                        <td>
                                            <a id="LinkButton1" title="Sửa"
                                               href="javascript:__doPostBack('controls1$ctl00$ctl00$ctl00$rpitems$ctl01$LinkButton1','')">{{$value->title_store}}</a>
                                        </td>

                                        <td>
                                            <p class="sptime"><i class="ico-ucreate"
                                                                 title="Người tạo"></i>{{$value->address}}</p>

                                        </td>
                                        <td align="center">
                                            <p class="sptime">{{$value->created_at}}
                                            </p>
                                        </td>

                                        <td align="center">
                                            <a id="LinkButton4" title="Sửa"
                                               href="{{route('admin.editStore', $value->id)}}"><img
                                                    src="{{ asset('images/iconedit_c.png') }}"></a>

                                        </td>
                                    </tr>
                                    </tbody>
                                @endforeach
                            @endif

                        </table>
                        <div class="page-items">

                        </div>
                    </div>
                </div>
                <div class="clr"></div>
            </div>
        </div>
    </div>
@endsection
