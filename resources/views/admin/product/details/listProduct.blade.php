@extends('/template/index')

@section('content')
    <div id="page-wrapper">
        <div class="widget-title">
            <h4><i class="icon-reorder-items">
                    Danh sách sản phẩm</i></h4>
            <div class="ui-widget-content ui-corner-top ui-corner-bottom">
                <div id="toolbox">
                    <div style="float: right; margin-right: 10px;" class="toolbox-content">
                        <table class="toolbar">
                            <tbody>
                            <tr>
                                <td align="center">
                                    <a id="lnkadd" class="toolbar" href="{{route('admin.create.product')}}">
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
                @if(session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                @endif
                <div id="adminForm1">
                    <div id="pnlist">

                        <div class="row-fluid">
                            <div class="span3">
                                <div style="margin-top: 4px; font-size: 12px; font-style: italic;">
                                    Tổng số sản phẩm: <span style="color: #A52A2A;">@if(!empty($product))
                                            {{count($product)}}
                                        @else
                                            0
                                        @endif</span>

                                </div>

                            </div>
                            {{--                        <div class="span9">--}}
                            {{--                            <div class="pagination pagination-small pagination-right">--}}
                            {{--                                <input name="controls1$ctl00$ctl00$ctl00$txtkeysearch" type="text" id="txtkeysearch" class="inputbox-top" style="width:150px;"><select name="controls1$ctl00$ctl00$ctl00$ddlcatesearch" id="ddlcatesearch" class="inputbox-top-select" style="width:150px;">--}}
                            {{--                                    <option selected="selected" value="-1">Tất cả</option>--}}
                            {{--                                    <option value="11575">ĐẦM BẦU</option>--}}
                            {{--                                    <option value="11576">..ĐẦM CÔNG SỞ</option>--}}
                            {{--                                    <option value="11591">..ĐẦM FREESIZE</option>--}}
                            {{--                                    <option value="11593">..ĐẦM DỰ TIỆC</option>--}}
                            {{--                                    <option value="11603">..ĐẦM BÉ BÚ SAU SINH</option>--}}
                            {{--                                    <option value="12564">..ĐẦM CASUAL</option>--}}
                            {{--                                    <option value="11596">ĐỒ BỘ BẦU</option>--}}
                            {{--                                    <option value="12558">ÁO BẦU</option>--}}
                            {{--                                    <option value="12569">..ÁO SƠ MI</option>--}}
                            {{--                                    <option value="12557">QUẦN BẦU</option>--}}
                            {{--                                    <option value="12562">..QUẦN BẦU MẶC VÁY</option>--}}
                            {{--                                    <option value="12571">..QUẦN DÀI</option>--}}
                            {{--                                    <option value="12573">..QUẦN LỬNG VÀ SHORT</option>--}}
                            {{--                                    <option value="11597">ĐỒ LÓT BẦU</option>--}}

                            {{--                                </select>--}}
                            {{--                                <select name="controls1$ctl00$ctl00$ctl00$ddlstatus" id="ddlstatus" class="inputbox-top-select" style="width:130px;">--}}
                            {{--                                    <option selected="selected" value="-1">Tất cả trạng thái</option>--}}
                            {{--                                    <option value="1">Hiển thị</option>--}}
                            {{--                                    <option value="0">Ẩn</option>--}}

                            {{--                                </select>--}}
                            {{--                                <select name="controls1$ctl00$ctl00$ctl00$ddlorder" id="ddlorder" class="inputbox-top-select" style="width:110px;">--}}
                            {{--                                    <option selected="selected" value="0">SX.Ngày tạo</option>--}}
                            {{--                                    <option value="1">SX.Ngày cập nhật</option>--}}
                            {{--                                    <option value="2">SX.Tiêu đề</option>--}}
                            {{--                                    <option value="3">SX.Thứ tự</option>--}}
                            {{--                                    <option value="4">SX.Lượt xem</option>--}}
                            {{--                                    <option value="5">SX.Giá</option>--}}

                            {{--                                </select>--}}
                            {{--                                <select name="controls1$ctl00$ctl00$ctl00$ddlordertype" id="ddlordertype" class="inputbox-top-select" style="width:110px;">--}}
                            {{--                                    <option selected="selected" value="0">Giảm dần</option>--}}
                            {{--                                    <option value="1">Tăng dần</option>--}}

                            {{--                                </select>--}}
                            {{--                                <input type="submit" name="controls1$ctl00$ctl00$ctl00$btnsearch" value="Tìm kiếm" id="btnsearch" class="buton-css">--}}
                            {{--                            </div>--}}
                            {{--                            <div style="clear: both;"></div>--}}
                            {{--                        </div>--}}
                        </div>

                        <table cellpadding="1" summary="" class="adminlist">
                            <thead>
                            <tr>
                                <th width="80" class="title">Hình ảnh
                                </th>

                                <th class="title">Sản phẩm
                                </th>
                                <th style="width: 120px;" class="title">Đơn giá
                                </th>

                                <th  style="text-align:center" class="title">Thời gian
                                </th>
                                <th width="80" style="text-align:center" class="title">Trạng thái
                                </th>
                                <th style="width: 120px;" class="title"></th>

                            </tr>
                            </thead>

                            <tbody>
                            @if(!empty($product))
                                @foreach($product as $value)
                                    <tr class="row0">
                                        <td align="center">
                                            <img height="40" style="max-width:300px"
                                                 src="{{$value->representative_image}}">
                                        </td>
                                        <td>
                                            <a id="LinkButton1" title="Sửa"
                                               href="">{{$value->product_name}}</a>
                                            <p>Mã SP: {{$value->product_code}}</p>
                                        </td>
                                        <td>
                                            <input type="text" name="txtnewprice_1361" title="Giá mới" value="{{number_format($value->product_price)}}"
                                                   class="txtiporder txtipnewp" readonly><br>
                                            <input type="text" name="txtoldprice_1361" title="Giá cũ" value="{{number_format($value->price_comparison)}}"
                                                   class="txtiporder txtipoldp" readonly>
                                        </td>

                                        <td>
                                            <p class="sptime"><i class="ico-dcreate" title="Ngày tạo"></i>{{$value->created_at}}
                                            </p>
                                        </td>
                                        <td align="center">
                                            {{$value->status}}
                                        </td>
                                        <td align="center">

                                            <a href="{{route('admin.edit.product', $value->id)}}"
                                               style="display:inline-block"
                                               title="Chỉnh sửa"><img
                                                    src="{{ asset('/images/iconedit_c.png') }}"></a>&nbsp;
                                            &nbsp;

                                            <a href="{{route('product.destroy', $value->id)}}"
                                               style="display:inline-block"
                                               title="Xóa"><img
                                                    src="{{ asset('/images/icondelete_c.png') }}" onclick="return confirm('Bạn có chắc chắn muốn xóa sản phẩm này?')"></a>&nbsp;
                                            &nbsp;


                                        </td>
                                    </tr>
                                @endforeach
                            @endif
                            </tbody>


                        </table>


                    </div>


                </div>
                <div class="clr"></div>
            </div>
        </div>

        <div class="modal-backdrop md2" style="display:none">
            <div id="ex2" class="modal">
                <div class="modal-header ">
                    <a href="#" rel="modal:close" class="close">X</a>
                    <h4 class="modal-title">Xuất ra file excel</h4>
                </div>

                <div class="modal-body">
                    <div class="">
                        <label class="next-label">Chọn sản phẩm cần xuất ra file excel</label>
                        <select name="controls1$ctl00$ctl00$ctl00$ddlexport" id="ddlexport" class="inputbox"
                                style="width:100%;">
                            <option value="0">Sản phẩm trên trang hiện tại</option>
                            <option value="1">Sản phẩm trong danh mục</option>
                            <option value="2">Tất cả sản phẩm</option>

                        </select>
                        <br><br>
                        <select name="controls1$ctl00$ctl00$ctl00$ddlcateexport" id="ddlcateexport" class="inputbox"
                                style="width:100%;">
                            <option value="11575">ĐẦM BẦU</option>
                            <option value="11576">..ĐẦM CÔNG SỞ</option>
                            <option value="11591">..ĐẦM FREESIZE</option>
                            <option value="11593">..ĐẦM DỰ TIỆC</option>
                            <option value="11603">..ĐẦM BÉ BÚ SAU SINH</option>
                            <option value="12564">..ĐẦM CASUAL</option>
                            <option value="11596">ĐỒ BỘ BẦU</option>
                            <option value="12558">ÁO BẦU</option>
                            <option value="12569">..ÁO SƠ MI</option>
                            <option value="12557">QUẦN BẦU</option>
                            <option value="12562">..QUẦN BẦU MẶC VÁY</option>
                            <option value="12571">..QUẦN DÀI</option>
                            <option value="12573">..QUẦN LỬNG VÀ SHORT</option>
                            <option value="11597">ĐỒ LÓT BẦU</option>

                        </select>
                    </div>
                </div>
                <div class="modal-footer">
                    <a href="#" rel="modal:close" class="btn btn-default bnthuy">Hủy</a>
                    <a id="lnkexport" class="btn btn-primary"
                       href="javascript:__doPostBack('controls1$ctl00$ctl00$ctl00$lnkexport','')">Xuất ra excel</a>
                </div>

            </div>
        </div>
        <div class="modal-backdrop md3" style="display:none">
            <div id="ex3" class="modal">
                <div class="modal-header ">
                    <a href="#" rel="modal:close" class="close">X</a>
                    <h4 class="modal-title">Nhập sản phẩm từ file excel</h4>
                </div>

                <div class="modal-body">
                    <div class="">

                        <label class="next-label">Chọn danh mục chứa sản phẩm</label>
                        <select name="controls1$ctl00$ctl00$ctl00$ddlcateimport" id="ddlcateimport" class="inputbox"
                                style="width:100%;">
                            <option value="11575">ĐẦM BẦU</option>
                            <option value="11576">..ĐẦM CÔNG SỞ</option>
                            <option value="11591">..ĐẦM FREESIZE</option>
                            <option value="11593">..ĐẦM DỰ TIỆC</option>
                            <option value="11603">..ĐẦM BÉ BÚ SAU SINH</option>
                            <option value="12564">..ĐẦM CASUAL</option>
                            <option value="11596">ĐỒ BỘ BẦU</option>
                            <option value="12558">ÁO BẦU</option>
                            <option value="12569">..ÁO SƠ MI</option>
                            <option value="12557">QUẦN BẦU</option>
                            <option value="12562">..QUẦN BẦU MẶC VÁY</option>
                            <option value="12571">..QUẦN DÀI</option>
                            <option value="12573">..QUẦN LỬNG VÀ SHORT</option>
                            <option value="11597">ĐỒ LÓT BẦU</option>

                        </select>
                        <br><br>
                        <label class="next-label">Chọn file excel</label>
                        <input type="file" name="controls1$ctl00$ctl00$ctl00$flexcel" id="flexcel">
                        <span
                            style="display:block;color:#333;font-size:11px;margin-top:10px;background:#f0f0f0;padding:10px">Các sản phẩm phân biệt nhau bằng ID sản phẩm. Nếu cùng ID sản phẩm thì hệ thống sẽ tự cập nhật thông tin từ file excel, nếu ID sản phẩm trong file excel chưa có hoặc để trống thì hệ thống sẽ tự thêm sản phẩm vào danh mục đã được chọn bên trên.<br> File excel up lên phải theo cấu trúc của mẫu excel <a
                                target="_blank" href="/uploads/files/temp/temp.xls">tại đây</a></span>
                    </div>
                </div>
                <div class="modal-footer">
                    <a href="#" rel="modal:close" class="btn btn-default bnthuy">Hủy</a>
                    <a id="lnkimport" class="btn btn-primary"
                       href="javascript:__doPostBack('controls1$ctl00$ctl00$ctl00$lnkimport','')">Cập nhật</a>
                </div>

            </div>
        </div>


        <script type="text/javascript">
            $(document).ready(function () {
                //We are binding onchange event using jQuery built-in change event
                $('#ddlSubject').change(function () {
                    //get selected value and check if subject is selected else show alert box
                    var SelectedValue = $("#ddlSubject").val();
                    if (SelectedValue > 0) {
                        //get selected text and set to label
                        var SelectedText = $("#ddlSubject option:selected").text();
                        lblSelectedText.innerHTML = SelectedText;
                        //set selected value to label
                        lblSelectedValue.innerHTML = SelectedValue;
                    } else {
                        //reset label values and show alert
                        lblSelectedText.innerHTML = "";
                        lblSelectedValue.innerHTML = "";
                        alert("Please select valid subject.");
                    }
                });
            });
            $('#ddlexport').change(function () {
                var t = $(this).val();
                if (t == 1)
                    $("#ddlcateexport").show();
                else
                    $("#ddlcateexport").hide();
            })
            $(document).on("click", '.xuat', function () {
                $(".md2").show();
                $("#ex2").show();
            })
            $(document).on("click", '.nhap', function () {
                $(".md3").show();
                $("#ex3").show();
            })
            $(document).on("click", '.nhanban', function () {
                $(".md1").show();
                $("#ex1").show();
            })
            $(document).on("click", '.close', function () {
                $(".modal-backdrop").hide();
                $("#ex1").hide();
                $("#ex2").hide();
                $("#ex3").hide();
            })
            $(document).on("click", '.bnthuy', function () {
                $(".modal-backdrop").hide();
                $("#ex1").hide();
                $("#ex2").hide();
                $("#ex3").hide();
            })

            $(document).on("click", '.deltabprd', function () {
                var num = $("#hdnumtmp").val();
                if (num <= 1) {
                    alert("Bạn không được xóa");
                    return;
                }
                if (confirm("Bạn có muốn xóa không?")) {
                    var id = $(this).parents('.record').attr('id');
                    var stt = parseInt(num) - 1;
                    $("#hdnumtmp").val(stt);
                    $("#" + id).remove();
                }
            })

        </script>
        <style>
            table.admintable td table td {
                padding: 0px;
            }

            .modal-backdrop {
                background: rgba(0, 0, 0, 0.5);
            }

            #ddlcateexport {
                display: none;
            }
        </style>
    </div>
@endsection
