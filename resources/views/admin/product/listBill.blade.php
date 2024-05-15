@extends('/template/index')
@section('content')
    <div id="page-wrapper">
        <div class="widget-title">
            <h4><i class="icon-reorder-items">
                    Danh sách đơn hàng</i></h4>
            <div class="ui-widget-content ui-corner-top ui-corner-bottom">
                <div id="toolbox">
                    <div style="float: right; margin-right: 10px;" class="toolbox-content">
                        <table class="toolbar">
                            <tbody>

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

                            </div>

                        </div>

                        <table cellpadding="1" summary="" class="adminlist">
                            <thead>
                            <tr>
                                <th class="title">Mã đơn hàng</th>
                                <th class="title">Tên sản phẩm</th>
                                <th class="title">Hình ảnh màu xe</th>
                                <th class="title">Chủ sở hữu xe</th>
                                <th class="title">Họ và tên</th>
                                <th class="title">Tên doanh nghiệp</th>
                                <th class="title">CMND/CCCD</th>
                                <th class="title">Số đăng ký kinh doanh</th>
                                <th class="title">Số điện thoại</th>
                                <th class="title">Email</th>
                                <th class="title">Showroom nhận xe</th>
                                <th class="title">Mã nhân viên giới thiệu</th>
                                <th class="title">Tổng số tiền</th>
                            </tr>
                            </thead>

                            <tbody>
                            @if(!empty($result))
                                @foreach($result as $value)
                                    <tr>
                                        <td align="center">{{$value->id ?? ''}}</td>
                                        <td align="center">{{$value->product_name ?? ''}}</td>
                                        <td align="center"><img width="200px" height="auto" src="{{$value->images ?? ''}}"></td>
                                        <td align="center">{{ $value->chu_so_huu == 'personal' ? 'Cá nhân' : 'Doanh nghiệp'}}</td>
                                        <td align="center">{{$value->billingLastName ?? ''}}</td>
                                        <td align="center">{{$value->billingCompanyName ?? ''}}</td>
                                        <td align="center">{{$value->identifyId ?? ''}}</td>
                                        <td align="center">{{$value->taxCode ?? ''}}</td>
                                        <td align="center">{{$value->phoneNumber ?? ''}}</td>
                                        <td align="center">{{$value->email ?? ''}}</td>
                                        <td align="center">{{$value->title_store ?? ''}}</td>
                                        <td align="center">{{$value->employee ?? ''}}</td>
                                        <td align="center">{{$value->price_product ?? ''}}</td>
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
