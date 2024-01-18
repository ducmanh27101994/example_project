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
                    Danh sách tin tức</i></h4>
            <div class="ui-corner-top ui-corner-bottom">
                <div id="toolbox">
                    <div style="float: right; margin-right: 10px;" class="toolbox-content">
                        <table class="toolbar">
                            <tbody>
                            <tr>
                                <td align="center">

                                </td>
                                <td align="center">
                                    <a id="lnkadd" class="toolbar"
                                       href="{{route('admin.createBlog')}}">
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
                                    Tổng số tin tức: <span style="color: #A52A2A;">{{count($blogs) > 0 ? $blogs->total() : 0}}</span>

                                </div>
                            </div>
                            <form method="get" action="{{route('admin.indexListBlog')}}">
                                <div class="span9">
                                    <div class="pagination pagination-small pagination-right">
                                        <input name="news_headlines" type="text"
                                               id="txtkeysearch"
                                               class="inputbox-top" style="width:150px;" value="{{ request()->get('news_headlines') }}" placeholder="Tiêu đề">
                                        <select name="category" id="ddlcatesearch"
                                                class="inputbox-top-select" style="width:150px;">
                                            <option selected="selected" value="-1">Tất cả</option>
                                            @foreach($category as $value)
                                                <option {{request()->get('category') == "$value->id" ? 'selected' : ''}} value="{{$value->id}}">{{$value->category_title}}</option>
                                            @endforeach

                                        </select>
                                        <select name="status" id="ddlstatus"
                                                class="inputbox-top-select" style="width:130px;">
                                            <option selected="selected" value="-1">Tất cả trạng thái</option>
                                            <option value="active" {{request()->get('status') == 'active' ? 'selected' : ''}}>Active</option>
                                            <option value="block" {{request()->get('status') == 'block' ? 'selected' : ''}}>Block</option>
                                        </select>

                                        <input type="submit" name="controls1$ctl00$ctl00$ctl00$btnsearch"
                                               value="Tìm kiếm"
                                               id="btnsearch" class="buton-css">
                                        <a type="button" href="{{route('admin.indexListBlog')}}">Xóa</a>
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
                                <th width="80" class="title">Hình ảnh
                                </th>

                                <th class="title">Tiêu đề tin
                                </th>

                                <th width="10%" style="text-align: center" class="title">Người tạo
                                </th>
                                <th width="140" style="text-align: center" class="title">Thời gian
                                </th>
                                <th width="80" class="title">Trạng thái
                                </th>
                                <th style="width: 120px;" class="title"></th>

                            </tr>
                            </thead>


                            @if (empty($blogs))
                                <tr>
                                    <td colspan="20" class="text-danger" style="text-align: center">Không có
                                        dữ
                                        liệu
                                    </td>
                                </tr>
                            @else
                                @foreach($blogs as $key => $blog)
                                    <tbody>
                                    <tr class="row0">
                                        <td align="center">{{++$key}}</td>
                                        <td align="center">
                                            <a id="LinkButton3" title="Sửa"
                                               href=""><img
                                                    height="40" style="max-width:300px"
                                                    src="{{$blog->representative_image}}"></a>
                                        </td>
                                        <td>
                                            <a id="LinkButton1" title="Sửa"
                                               href="">{{$blog->news_headlines}}</a>
                                        </td>
                                        <td align="center">{{$blog->created_by}}
                                        </td>
                                        <td>
                                            <p class="sptime"><i class="ico-ucreate"
                                                                 title="Người tạo"></i>{{$blog->updated_at}}</p>
                                        </td>
                                        <td align="center">
                                            <p class="sptime"><i class="ico-dcreate"
                                                                 title="Ngày tạo"></i>{{$blog->status}}
                                            </p>

                                        </td>

                                        <td align="center">
                                            <a href="" target="_blank" title="Xóa">
                                                <img src="{{ asset('images/icondelete_c.png') }}"></a>  
                                            <a id="LinkButton4" title="Sửa"
                                               href="{{route('admin.editBlog', $blog->id)}}"><img
                                                    src="{{ asset('images/iconedit_c.png') }}"></a>
                                            &nbsp; &nbsp;

                                        </td>
                                    </tr>
                                    </tbody>
                                @endforeach
                            @endif
                        </table>


                        {{ $blogs->links() }}

                    </div>
                </div>
                <div class="clr"></div>
            </div>
        </div>
    </div>
@endsection
