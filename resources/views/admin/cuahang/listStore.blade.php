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
{{--                            <form method="get" action="{{route('admin.indexStore')}}">--}}
{{--                                <div class="span9">--}}
{{--                                    <div class="pagination pagination-small pagination-right">--}}
{{--                                        <input name="title_store" type="text"--}}
{{--                                               id="txtkeysearch"--}}
{{--                                               class="inputbox-top" style="width:150px;" value="{{ request()->get('title_store') }}">--}}

{{--                                        <select name="address" id="ddlcate"--}}
{{--                                                class="inputbox-top-select" >--}}
{{--                                            <option value="An Giang">An Giang--}}
{{--                                            <option value="Bà Rịa - Vũng Tàu">Bà Rịa - Vũng Tàu--}}
{{--                                            <option value="Bắc Giang">Bắc Giang--}}
{{--                                            <option value="Bắc Kạn">Bắc Kạn--}}
{{--                                            <option value="Bạc Liêu">Bạc Liêu--}}
{{--                                            <option value="Bắc Ninh">Bắc Ninh--}}
{{--                                            <option value="Bến Tre">Bến Tre--}}
{{--                                            <option value="Bình Định">Bình Định--}}
{{--                                            <option value="Bình Dương">Bình Dương--}}
{{--                                            <option value="Bình Phước">Bình Phước--}}
{{--                                            <option value="Bình Thuận">Bình Thuận--}}
{{--                                            <option value="Bình Thuận">Bình Thuận--}}
{{--                                            <option value="Cà Mau">Cà Mau--}}
{{--                                            <option value="Cao Bằng">Cao Bằng--}}
{{--                                            <option value="Đắk Lắk">Đắk Lắk--}}
{{--                                            <option value="Đắk Nông">Đắk Nông--}}
{{--                                            <option value="Điện Biên">Điện Biên--}}
{{--                                            <option value="Đồng Nai">Đồng Nai--}}
{{--                                            <option value="Đồng Tháp">Đồng Tháp--}}
{{--                                            <option value="Đồng Tháp">Đồng Tháp--}}
{{--                                            <option value="Gia Lai">Gia Lai--}}
{{--                                            <option value="Hà Giang">Hà Giang--}}
{{--                                            <option value="Hà Nam">Hà Nam--}}
{{--                                            <option value="Hà Tĩnh">Hà Tĩnh--}}
{{--                                            <option value="Hải Dương">Hải Dương--}}
{{--                                            <option value="Hậu Giang">Hậu Giang--}}
{{--                                            <option value="Hòa Bình">Hòa Bình--}}
{{--                                            <option value="Hưng Yên">Hưng Yên--}}
{{--                                            <option value="Khánh Hòa">Khánh Hòa--}}
{{--                                            <option value="Kiên Giang">Kiên Giang--}}
{{--                                            <option value="Kon Tum">Kon Tum--}}
{{--                                            <option value="Lai Châu">Lai Châu--}}
{{--                                            <option value="Lâm Đồng">Lâm Đồng--}}
{{--                                            <option value="Lạng Sơn">Lạng Sơn--}}
{{--                                            <option value="Lào Cai">Lào Cai--}}
{{--                                            <option value="Long An">Long An--}}
{{--                                            <option value="Nam Định">Nam Định--}}
{{--                                            <option value="Nghệ An">Nghệ An--}}
{{--                                            <option value="Ninh Bình">Ninh Bình--}}
{{--                                            <option value="Ninh Thuận">Ninh Thuận--}}
{{--                                            <option value="Phú Thọ">Phú Thọ--}}
{{--                                            <option value="Quảng Bình">Quảng Bình--}}
{{--                                            <option value="Quảng Bình">Quảng Bình--}}
{{--                                            <option value="Quảng Ngãi">Quảng Ngãi--}}
{{--                                            <option value="Quảng Ninh">Quảng Ninh--}}
{{--                                            <option value="Quảng Trị">Quảng Trị--}}
{{--                                            <option value="Sóc Trăng">Sóc Trăng--}}
{{--                                            <option value="Sơn La">Sơn La--}}
{{--                                            <option value="Tây Ninh">Tây Ninh--}}
{{--                                            <option value="Thái Bình">Thái Bình--}}
{{--                                            <option value="Thái Nguyên">Thái Nguyên--}}
{{--                                            <option value="Thanh Hóa">Thanh Hóa--}}
{{--                                            <option value="Thừa Thiên Huế">Thừa Thiên Huế--}}
{{--                                            <option value="Tiền Giang">Tiền Giang--}}
{{--                                            <option value="Trà Vinh">Trà Vinh--}}
{{--                                            <option value="Tuyên Quang">Tuyên Quang--}}
{{--                                            <option value="Vĩnh Long">Vĩnh Long--}}
{{--                                            <option value="Vĩnh Phúc">Vĩnh Phúc--}}
{{--                                            <option value="Yên Bái">Yên Bái--}}
{{--                                            <option value="Phú Yên">Phú Yên--}}
{{--                                            <option value="Tp.Cần Thơ">Tp.Cần Thơ--}}
{{--                                            <option value="Tp.Đà Nẵng">Tp.Đà Nẵng--}}
{{--                                            <option value="Tp.Hải Phòng">Tp.Hải Phòng--}}
{{--                                            <option value="Tp.Hà Nội">Tp.Hà Nội--}}
{{--                                            <option value="TP.HCM">TP.HCM--}}

{{--                                        </select>--}}


{{--                                        <select name="status" id="ddlstatus"--}}
{{--                                                class="inputbox-top-select" style="width:130px;">--}}
{{--                                            <option selected="selected" value="-1">Tất cả trạng thái</option>--}}
{{--                                            <option value="active" {{request()->get('status') == 'active' ? 'selected' : ''}}>Active</option>--}}
{{--                                            <option value="block" {{request()->get('status') == 'block' ? 'selected' : ''}}>Block</option>--}}
{{--                                        </select>--}}

{{--                                        <input type="submit" name="controls1$ctl00$ctl00$ctl00$btnsearch"--}}
{{--                                               value="Tìm kiếm"--}}
{{--                                               id="btnsearch" class="buton-css">--}}
{{--                                        <a type="button" href="{{route('admin.indexStore')}}">Xóa</a>--}}
{{--                                    </div>--}}

{{--                                </div>--}}
{{--                            </form>--}}
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
