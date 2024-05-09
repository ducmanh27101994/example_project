@extends('/template/index')

@section('content')
    <div id="page-wrapper">
        <div class="widget">
            <div class="widget-title">
                <div class="widget-title">
                    <h4><i class="icon-reorder">
                            Quản lý tài khoản</i></h4>
                    <div class="ui-widget-content ui-corner-top ui-corner-bottom">
                        <div id="toolbox">
                            <div style="float: right; margin-right: 10px;" class="toolbox-content">
                                <table class="toolbar">
                                    <tbody>
                                    <tr>
                                        <td align="center">
                                            <a id="lnkadd" class="toolbar"
                                               href="{{route('admin.createAccount')}}">
                                                <span class="icon-ok-new"></span>
                                                Thêm
                                            </a>
                                        </td>

                                        <td align="center">

                                        </td>
                                        <td align="center">

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
                                <div id="pnlist">


                                    <table cellpadding="1" summary="" class="adminlist">
                                        <thead>
                                        <tr>

                                            <th width="3%" class="title">#</th>
                                            <th class="title" width="15%">
                                                Email
                                            </th>
                                            <th class="title">
                                                Họ tên
                                            </th>
                                            <th width="15%" class="title">
                                                Số điện thoại
                                            </th>


                                            <th width="10%" nowrap="nowrap" class="title">
                                                Vai trò
                                            </th>
                                            <th align="center" width="10%" class="title">
                                                Trạng thái
                                            </th>
                                            <th width="10%" nowrap="nowrap" class="title">
                                                Ngày tạo
                                            </th>
                                            <th width="80" nowrap="nowrap" class="title">

                                            </th>
                                        </tr>
                                        </thead>
                                        @if (empty($employees))
                                            <tr>
                                                <td colspan="20" class="text-danger" style="text-align: center">Không có
                                                    dữ
                                                    liệu
                                                </td>
                                            </tr>
                                        @else
                                            @foreach ($employees as $key => $employee)
                                                <tbody>
                                                <tr class="row0">
                                                    <td align="center">{{++$key}}</td>
                                                    <td>
                                                        <a id="LinkButton1" title="Sửa"
                                                        >{{$employee->email}}</a>
                                                    </td>
                                                    <td align="left">{{$employee->full_name}}</td>
                                                    <td align="center">{{$employee->phone}}</td>


                                                    <td align="center">
                                                        @if($employee->role == 1)
                                                            Quản lý hệ thông
                                                        @else
                                                            Biên tập viên/Nhân viên
                                                        @endif
                                                    </td>
                                                    <td align="center">
                                                       {{$employee->status}}
                                                    </td>
                                                    <td align="center">{{$employee->created_at}}</td>
                                                    <td align="center">
                                                        <a id="LinkButton4" title="Sửa"
                                                           href="{{route('admin.editAccount', $employee->id)}}"><img
                                                                src="{{ asset('/images/iconedit_c.png') }}"></a>
                                                    </td>
                                                </tr>
                                                </tbody>
                                            @endforeach
                                        @endif


                                    </table>

                                </div>

                            </div>
                            <div class="clr"></div>

                        </div>

                    </div>
                </div>

            </div>
        </div>
    </div>

@endsection
