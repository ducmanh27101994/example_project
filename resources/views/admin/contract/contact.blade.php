@extends('/template/index')

@section('content')
    <div id="page-wrapper">


        <div class="widget">
            <div class="widget-title">


                <div class="widget-title">
                    <h4><i class="icon-reorder">
                            Quản lý liên hệ</i></h4>
                    <div class="ui-widget-content ui-corner-top ui-corner-bottom">
                        <div id="toolbox">

                            <div style="float: right; margin-right: 10px;" class="toolbox-content">

                                <table class="toolbar">
                                    <tbody>
                                    <tr>


                                    </tr>
                                    </tbody>
                                </table>

                            </div>
                        </div>
                    </div>
                </div>


                <div class="widget-body">
                </div>
            </div>

            <div id="element-box">
                <div class="m">
                    <div id="adminForm1">
                        <div id="pnlist">

                            <div class="row-fluid">
                                <div class="span3">
                                    <div style="margin-top: 4px; font-size: 12px; font-style: italic;">
                                        Tổng số liên hệ: <span style="color: #A52A2A;">{{count($contact) > 0 ? $contact->total() : 0}}</span>

                                    </div>

                                </div>
                                <form method="get" action="{{route('admin.indexContact')}}">
                                    @csrf
                                <div class="span9">
                                    <div class="pagination pagination-small pagination-right">
                                        <input name="full_name" type="text"
                                               id="txtkeysearch" class="inputbox-top" style="width:150px;" value="{{ request()->get('full_name') }}" placeholder="Tên">
                                        <input name="email" type="text"
                                               id="txtkeysearch" class="inputbox-top" style="width:150px;" value="{{ request()->get('email') }}" placeholder="Email">
                                        <input name="phone" type="text"
                                               id="txtkeysearch" class="inputbox-top" style="width:150px;" value="{{ request()->get('phone') }}" placeholder="Số điện thoại">

                                        <select name="status" id="ddlstatus"
                                                class="inputbox-top-select" style="width:130px;">
                                            <option selected="selected" value="-1">Tất cả trạng thái</option>
                                            <option value="process" {{request()->get('status') == 'process' ? 'selected' : ''}}>Đã xử lý</option>
                                            <option value="no_process" {{request()->get('status') == 'no_process' ? 'selected' : ''}}>Chưa xử lý</option>

                                        </select>

                                        <input type="submit" name="controls1$ctl00$ctl00$ctl00$btnsearch"
                                               value="Tìm kiếm" id="btnsearch" class="buton-css">
                                        <a type="button" href="{{route('admin.indexContact')}}">Xóa</a>
                                    </div>

                                </div>
                               </form>
                            </div>
                            <div class="page-items">

                            </div>

                            <table cellpadding="1" summary="" class="adminlist">
                                <thead>
                                <tr>

                                    <th width="2%" class="title">#</th>

                                    <th class="title">Họ Tên
                                    </th>
                                    <th width="200" class="title">Email
                                    </th>
                                    <th width="200" class="title">Số điện thoại
                                    </th>
                                    <th style="text-align: center;" width="10%" nowrap="nowrap" class="title">Ngày gửi
                                    </th>
                                    <th width="8%" class="title">Trạng thái
                                    </th>
                                    <th style="width: 100px;"></th>

                                </tr>
                                </thead>
                                @if (empty($contact))
                                    <tr>
                                        <td colspan="20" class="text-danger" style="text-align: center">Không có
                                            dữ
                                            liệu
                                        </td>
                                    </tr>
                                @else
                                    @foreach($contact as $key => $value)
                                        <tbody>
                                        <tr class="row0">

                                            <td align="center">{{++$key}}</td>

                                            <td>
                                                <a id="LinkButton1" title="Sửa"
                                                   href="">{{$value->full_name}}</a>
                                            </td>
                                            <td align="left">{{$value->email}}</td>
                                            <td align="left">{{$value->phone}}</td>
                                            <td align="center">{{$value->created_at}}</td>
                                            <td align="center">
                                                <a id="LinkButton2" title="Thay đổi trạng thái"
                                                   href="javascript:__doPostBack('controls1$ctl00$ctl00$ctl00$rpitems$ctl01$LinkButton2','')">{{$value->status}}</a>
                                            </td>
                                            <td align="center">
                                                <a id="LinkButton4" title="Xem chi tiết "
                                                   href="{{route('admin.editContact', $value->id)}}"><img
                                                        src="https://vntravelsimple.com/templates/admin/images/view.png"></a>
                                            </td>

                                        </tr>
                                        </tbody>
                                    @endforeach
                                @endif



                            </table>

                            {{ $contact->links() }}

                        </div>


                    </div>
                    <div class="clr"></div>
                </div>
            </div>
        </div>


    </div>
@endsection
