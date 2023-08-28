@extends('/template/index')

@section('content')
    <div id="page-wrapper">


        <div class="widget">

            <div class="widget-title">


                <div class="widget-title">
                    <h4><i class="icon-reorder">
                            Quản lý quảng cáo</i></h4>
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

                    <div id="element-box">

                        <div class="m">
                            <div id="adminForm1">
                                <div id="pnlist">

                                    <table cellpadding="1" summary="" class="adminlist">
                                        <thead>
                                        <tr>

                                            <th width="3%" class="title">#</th>
                                            <th width="100" class="title">Hình ảnh
                                            </th>
                                            <th class="title">Tiêu đề
                                            </th>
                                            <th style="text-align:center;" width="8%" class="title">Trạng thái
                                            </th>
                                            <th width="120px" style="text-align: center;" class="title">Ngày tạo
                                            </th>
                                            <th width="80"></th>
                                        </tr>
                                        </thead>
                                        @if (empty($banner))
                                            <tr>
                                                <td colspan="20" class="text-danger" style="text-align: center">Không có
                                                    dữ
                                                    liệu
                                                </td>
                                            </tr>
                                        @else
                                            @foreach($banner as $key => $item)
                                                <tbody>
                                                <tr class="row0">

                                                    <td align="center">{{++$key}}</td>
                                                    <td align="center"><img height="50" style="max-width:300px"
                                                                            src="{{$item->image_banner}}">
                                                    </td>
                                                    <td>
                                                        <a id="LinkButton1" title="Sửa"
                                                           >{{$item->title}}</a>
                                                    </td>

                                                    <td align="center">
                                                        <a id="LinkButton2" title="Thay đổi trạng thái"
                                                           href="javascript:__doPostBack('controls1$ctl00$ctl00$ctl00$rpitems$ctl01$LinkButton2','')">{{$item->status}}</a>
                                                    </td>
                                                    <td align="center">{{$item->created_at}}</td>
                                                    <td align="center">
                                                        <a id="LinkButton3" title="Sửa"
                                                           href="{{route('admin.editBannerAds', $item->id)}}"><img
                                                                src="https://vntravelsimple.com/templates/admin/images/iconedit_c.png"></a>
                                                        &nbsp; &nbsp;
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
