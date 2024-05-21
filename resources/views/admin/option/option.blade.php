@extends('/template/index')

@section('content')
<div id="page-wrapper">
    <div class="widget">

        <div class="widget-title">

            <div class="widget-title">
                <h4><i class="icon-reorder">
                        Cập nhật hiển thị</i></h4>
            </div>


            <div class="widget-body">
                <div id="element-box">

                    <div class="m">
                        <div id="adminForm1">

                            <div id="pndetail">


                                <div id="parentHorizontalTab" class="divvalidate" style="display: block; width: 100%; margin: 0px;">
                                    <ul class="resp-tabs-list hor_1">
                                        <li class="resp-tab-item hor_1 resp-tab-active" aria-controls="hor_1_tab_item-0" role="tab" style="background-color: white; border-color: rgb(193, 193, 193);">Các mục cấu hình
                                        </li>
                                    </ul>
                                    <div class="resp-tabs-container hor_1" style="border-color: rgb(193, 193, 193);">
                                        <h2 class="resp-accordion hor_1 resp-tab-active" role="tab" aria-controls="hor_1_tab_item-0" style="background: none; border-color: rgb(193, 193, 193);"><span class="resp-arrow"></span>Thông tin chung</h2>
                                        <div class="resp-tab-content hor_1 resp-tab-content-active" aria-labelledby="hor_1_tab_item-0" style="display:block">
                                            <table cellspacing="1" width="100%" class="admintable admintablem">
                                                <tbody>

                                                    <tr>
                                                        <td width="150" class="key" valign="top">
                                                            <label for="txtuser">Danh sách cấu hình</label>
                                                        </td>
                                                        <td>

                                                            <ul>

                                                                @if(!empty($configOption))
                                                                @foreach($configOption as $value)
                                                                <li>
                                                                    <input type="checkbox" name="{{$value->slug}}" id="{{$value->slug}}" @if($value->status == 'active') checked @endif >{{$value->name}}
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
</div>


<script>
    $(document).ready(function() {
        $('input[type="checkbox"]').on('change', function() {
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
                success: function(response) {
                    // Xử lý thành công nếu cần
                    console.log(response);
                    window.location.reload();
                },
                error: function(error) {
                    // Xử lý lỗi nếu có
                    console.log(error);
                }
            });
        });
    });
</script>
@endsection