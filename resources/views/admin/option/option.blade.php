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
                                        <a onclick="return validation();" id="lnkupdate" class="toolbar" href="javascript:__doPostBack('controls1$ctl00$ctl00$ctl00$lnkupdate','')">
                                            <span class="icon-ok-update"></span>
                                            Cập nhật
                                        </a>
                                    </td>
                                    <td align="center">
                                        <a id="lnkclose" class="toolbar" href="javascript:__doPostBack('controls1$ctl00$ctl00$ctl00$lnkclose','')">
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


                            <div id="parentHorizontalTab" class="divvalidate" style="display: block; width: 100%; margin: 0px;">
                                <ul class="resp-tabs-list hor_1">
                                    <li class="resp-tab-item hor_1 resp-tab-active" aria-controls="hor_1_tab_item-0" role="tab" style="background-color: white; border-color: rgb(193, 193, 193);">Thông tin chung</li>
                                </ul>
                                <div class="resp-tabs-container hor_1" style="border-color: rgb(193, 193, 193);">
                                    <h2 class="resp-accordion hor_1 resp-tab-active" role="tab" aria-controls="hor_1_tab_item-0" style="background: none; border-color: rgb(193, 193, 193);"><span class="resp-arrow"></span>Thông tin chung</h2>
                                    <div class="resp-tab-content hor_1 resp-tab-content-active" aria-labelledby="hor_1_tab_item-0" style="display:block">
                                        <table cellspacing="1" width="100%" class="admintable admintablem">
                                            <tbody>


                                                <tr>
                                                    <td width="150" class="key">
                                                        <label for="txtuser">Tên quyền truy cập</label>
                                                    </td>
                                                    <td>
                                                        <input name="controls1$ctl00$ctl00$ctl00$txtname" type="text" value="Quản lý hệ thống" id="txtname" class="inputbox" style="width:305px;">
                                                    </td>
                                                </tr>
                                           
                                                <tr>
                                                    <td width="150" class="key" valign="top">
                                                        <label for="txtuser">Danh sách quyền</label>
                                                    </td>
                                                    <td>
                                                        <ul>
                                                            <li><input type="checkbox" name="chkrole" id="chkrole" value="1" checked="checked"> Cấu hình website
                                                                <ul>
                                                                    <li><input type="checkbox" name="chkrole" id="Checkbox86" value="11" checked="checked"> Cấu hình chung</li>
                                                                    <li><input type="checkbox" name="chkrole" id="Checkbox87" value="12" checked="checked"> Banner &amp; logo - Chân trang</li>
                                                                    <li><input type="checkbox" name="chkrole" id="Checkbox88" value="13" checked="checked"> Cấu hình email hệ thống</li>
                                                                    <li><input type="checkbox" name="chkrole" id="Checkbox89" value="14"> Cấu hình nội dung email</li>
                                                                    <li><input type="checkbox" name="chkrole" id="Checkbox91" value="15"> Cấu hình vận chuyển</li>
                                                                    <li><input type="checkbox" name="chkrole" id="Checkbox90" value="16"> Cấu hình thanh toán</li>
                                                                    <li><input type="checkbox" name="chkrole" id="Checkbox71" value="17" checked="checked"> Quản lý ngôn ngữ</li>
                                                                    <li><input type="checkbox" name="chkrole" id="Checkbox107" value="18"> Quản lý tỉnh thành/quận huyện</li>
                                                                </ul>
                                                            </li>
                                                            <li><input type="checkbox" name="chkrole" id="chkrole" value="2" checked="checked"> Quản lý menu
                                                                <ul>
                                                                    <li><input type="checkbox" name="chkrole" id="Checkbox92" value="900" checked="checked"> Quản lý menu chính</li>
                                                                    <li><input type="checkbox" name="chkrole" id="Checkbox93" value="901" checked="checked"> Quản lý menu trên cùng</li>
                                                                    <li><input type="checkbox" name="chkrole" id="Checkbox94" value="902"> Quản lý menu dưới cùng</li>
                                                                    <li><input type="checkbox" name="chkrole" id="Checkbox95" value="903" checked="checked"> Quản lý menu nội dung</li>
                                                                </ul>
                                                            </li>

                                                            <li id="linews"><input type="checkbox" name="chkrole" id="Checkbox15" value="21" checked="checked"> Tin tức
                                                                <ul>
                                                                    <li><input type="checkbox" name="chkrole" id="Checkbox16" value="211" checked="checked"> Danh mục tin tức
                                                                        <ul>
                                                                            <li>
                                                                                <input type="checkbox" name="chkrole" id="Checkbox17" value="2111" checked="checked"> Thêm &nbsp;&nbsp;&nbsp;
                                                                                <input type="checkbox" name="chkrole" id="Checkbox18" value="2112" checked="checked"> Sửa &nbsp;&nbsp;&nbsp;
                                                                                <input type="checkbox" name="chkrole" id="Checkbox19" value="2113" checked="checked"> Xóa &nbsp;&nbsp;&nbsp;
                                                                            </li>
                                                                        </ul>
                                                                    </li>
                                                                    <li><input type="checkbox" name="chkrole" id="Checkbox5" value="214"> Nhóm tin
                                                                        <ul>
                                                                            <li>
                                                                                <input type="checkbox" name="chkrole" id="Checkbox7" value="2141" checked="checked"> Thêm &nbsp;&nbsp;&nbsp;
                                                                                <input type="checkbox" name="chkrole" id="Checkbox13" value="2142" checked="checked"> Sửa &nbsp;&nbsp;&nbsp;
                                                                                <input type="checkbox" name="chkrole" id="Checkbox14" value="2143" checked="checked"> Xóa &nbsp;&nbsp;&nbsp;
                                                                            </li>
                                                                        </ul>
                                                                    </li>
                                                                    <li><input type="checkbox" name="chkrole" id="Checkbox20" value="212" checked="checked"> Danh sách tin tức
                                                                        <ul>
                                                                            <li>
                                                                                <input type="checkbox" name="chkrole" id="Checkbox21" value="2121" checked="checked"> Thêm &nbsp;&nbsp;&nbsp;
                                                                                <input type="checkbox" name="chkrole" id="Checkbox22" value="2122" checked="checked"> Sửa &nbsp;&nbsp;&nbsp;
                                                                                <input type="checkbox" name="chkrole" id="Checkbox23" value="2123" checked="checked"> Xóa &nbsp;&nbsp;&nbsp;
                                                                            </li>
                                                                        </ul>
                                                                    </li>
                                                                    <li><input type="checkbox" name="chkrole" id="Checkbox84" value="213" checked="checked"> Cấu hình tin tức</li>
                                                                </ul>
                                                            </li>
                                                            <li id="liartical"><input type="checkbox" name="chkrole" id="Checkbox24" value="22" checked="checked"> Trang nội dung
                                                                <ul>
                                                                    <li><input type="checkbox" name="chkrole" id="Checkbox25" value="221" checked="checked"> Danh mục trang nội dung
                                                                        <ul>
                                                                            <li>
                                                                                <input type="checkbox" name="chkrole" id="Checkbox26" value="2211" checked="checked"> Thêm &nbsp;&nbsp;&nbsp;
                                                                                <input type="checkbox" name="chkrole" id="Checkbox27" value="2212" checked="checked"> Sửa &nbsp;&nbsp;&nbsp;
                                                                                <input type="checkbox" name="chkrole" id="Checkbox28" value="2213" checked="checked"> Xóa &nbsp;&nbsp;&nbsp;
                                                                            </li>
                                                                        </ul>
                                                                    </li>
                                                                    <li><input type="checkbox" name="chkrole" id="Checkbox29" value="222" checked="checked"> Danh sách trang nội dung
                                                                        <ul>
                                                                            <li>
                                                                                <input type="checkbox" name="chkrole" id="Checkbox30" value="2221" checked="checked"> Thêm &nbsp;&nbsp;&nbsp;
                                                                                <input type="checkbox" name="chkrole" id="Checkbox31" value="2222" checked="checked"> Sửa &nbsp;&nbsp;&nbsp;
                                                                                <input type="checkbox" name="chkrole" id="Checkbox32" value="2223" checked="checked"> Xóa &nbsp;&nbsp;&nbsp;
                                                                            </li>
                                                                        </ul>
                                                                    </li>
                                                                </ul>
                                                            </li>
                                                            <li id="liservice"><input type="checkbox" name="chkrole" id="Checkbox33" value="23" checked="checked"> Dịch vụ
                                                                <ul>
                                                                    <li><input type="checkbox" name="chkrole" id="Checkbox34" value="231" checked="checked"> Danh mục dịch vụ
                                                                        <ul>
                                                                            <li>
                                                                                <input type="checkbox" name="chkrole" id="Checkbox35" value="2311" checked="checked"> Thêm &nbsp;&nbsp;&nbsp;
                                                                                <input type="checkbox" name="chkrole" id="Checkbox36" value="2312" checked="checked"> Sửa &nbsp;&nbsp;&nbsp;
                                                                                <input type="checkbox" name="chkrole" id="Checkbox37" value="2313" checked="checked"> Xóa &nbsp;&nbsp;&nbsp;
                                                                            </li>
                                                                        </ul>
                                                                    </li>
                                                                    <li><input type="checkbox" name="chkrole" id="Checkbox38" value="232" checked="checked"> Danh sách dịch vụ
                                                                        <ul>
                                                                            <li>
                                                                                <input type="checkbox" name="chkrole" id="Checkbox39" value="2321" checked="checked"> Thêm &nbsp;&nbsp;&nbsp;
                                                                                <input type="checkbox" name="chkrole" id="Checkbox40" value="2322" checked="checked"> Sửa &nbsp;&nbsp;&nbsp;
                                                                                <input type="checkbox" name="chkrole" id="Checkbox41" value="2323" checked="checked"> Xóa &nbsp;&nbsp;&nbsp;
                                                                            </li>
                                                                        </ul>
                                                                    </li>
                                                                </ul>
                                                            </li>

                                                            <li id="lialbum"><input type="checkbox" name="chkrole" id="Checkbox51" value="25" checked="checked"> Thư viện hình
                                                                <ul>
                                                                    <li><input type="checkbox" name="chkrole" id="Checkbox52" value="251"> Danh mục hình
                                                                        <ul>
                                                                            <li>
                                                                                <input type="checkbox" name="chkrole" id="Checkbox53" value="2511"> Thêm &nbsp;&nbsp;&nbsp;
                                                                                <input type="checkbox" name="chkrole" id="Checkbox54" value="2512"> Sửa &nbsp;&nbsp;&nbsp;
                                                                                <input type="checkbox" name="chkrole" id="Checkbox55" value="2513"> Xóa &nbsp;&nbsp;&nbsp;
                                                                            </li>
                                                                        </ul>
                                                                    </li>
                                                                    <li><input type="checkbox" name="chkrole" id="Checkbox56" value="252" checked="checked"> Danh sách hình
                                                                        <ul>
                                                                            <li>
                                                                                <input type="checkbox" name="chkrole" id="Checkbox57" value="2521" checked="checked"> Thêm &nbsp;&nbsp;&nbsp;
                                                                                <input type="checkbox" name="chkrole" id="Checkbox58" value="2522" checked="checked"> Sửa &nbsp;&nbsp;&nbsp;
                                                                                <input type="checkbox" name="chkrole" id="Checkbox59" value="2523" checked="checked"> Xóa &nbsp;&nbsp;&nbsp;
                                                                            </li>
                                                                        </ul>
                                                                    </li>
                                                                </ul>
                                                            </li>

                                                            <li id="liproject"><input type="checkbox" name="chkrole" id="Checkbox108" value="27"> Dự án
                                                                <ul>
                                                                    <li><input type="checkbox" name="chkrole" id="Checkbox109" value="271"> Danh mục dự án
                                                                        <ul>
                                                                            <li>
                                                                                <input type="checkbox" name="chkrole" id="Checkbox110" value="2711"> Thêm &nbsp;&nbsp;&nbsp;
                                                                                <input type="checkbox" name="chkrole" id="Checkbox111" value="2712"> Sửa &nbsp;&nbsp;&nbsp;
                                                                                <input type="checkbox" name="chkrole" id="Checkbox112" value="2713"> Xóa &nbsp;&nbsp;&nbsp;
                                                                            </li>
                                                                        </ul>
                                                                    </li>
                                                                    <li><input type="checkbox" name="chkrole" id="Checkbox113" value="272"> Danh sách dự án
                                                                        <ul>
                                                                            <li>
                                                                                <input type="checkbox" name="chkrole" id="Checkbox114" value="2721"> Thêm &nbsp;&nbsp;&nbsp;
                                                                                <input type="checkbox" name="chkrole" id="Checkbox115" value="2722"> Sửa &nbsp;&nbsp;&nbsp;
                                                                                <input type="checkbox" name="chkrole" id="Checkbox116" value="2723"> Xóa &nbsp;&nbsp;&nbsp;
                                                                            </li>
                                                                        </ul>
                                                                    </li>
                                                                </ul>
                                                            </li>


                                                            <li id="ltcontact"><input type="checkbox" name="chkrole" id="Checkbox80" value="29" checked="checked"> Liên hệ
                                                                <ul>
                                                                    <li><input type="checkbox" name="chkrole" id="Checkbox81" value="291" checked="checked"> Quản lý danh sách liên hệ</li>
                                                                    <li><input type="checkbox" name="chkrole" id="Checkbox82" value="292" checked="checked"> Cấu hình &amp; bản đồ</li>
                                                                </ul>
                                                            </li>

                                                            <li><input type="checkbox" name="chkrole" id="Checkbox106" value="104" checked="checked"> Thành viên</li>
                                                            <li><input type="checkbox" name="chkrole" id="Checkbox72" value="105"> Báo cáo</li>
                                                            <li><input type="checkbox" name="chkrole" id="chkrole" value="100" checked="checked"> Tích hợp
                                                                <ul>
                                                                    <li><input type="checkbox" name="chkrole" id="Checkbox96" value="1001" checked="checked"> Tích hợp SEO</li>
                                                                    <li><input type="checkbox" name="chkrole" id="Checkbox97" value="1002" checked="checked"> Tích hợp Facebook Fanpage</li>
                                                                    <li><input type="checkbox" name="chkrole" id="Checkbox98" value="1003"> Tích hợp Livechat</li>
                                                                    <li><input type="checkbox" name="chkrole" id="Checkbox99" value="1004"> Tích hợp Google Analytic</li>
                                                                    <li><input type="checkbox" name="chkrole" id="Checkbox100" value="1005" checked="checked"> Tích hợp mạng xã hội</li>
                                                                </ul>
                                                            </li>
                                                            <li><input type="checkbox" name="chkrole" id="chkrole" value="101" checked="checked"> Tiện ích
                                                                <ul>
                                                                    <li><input type="checkbox" name="chkrole" id="Checkbox101" value="1011" checked="checked"> Hỗ trợ trực tuyến</li>
                                                                    <li><input type="checkbox" name="chkrole" id="Checkbox102" value="1012"> Đăng ký email</li>
                                                                    <li><input type="checkbox" name="chkrole" id="Checkbox103" value="1013" checked="checked"> Quản lý quảng cáo</li>
                                                                    <li><input type="checkbox" name="chkrole" id="Checkbox104" value="1014"> Quản lý liên kết</li>
                                                                    <li><input type="checkbox" name="chkrole" id="Checkbox105" value="1015" checked="checked"> Nội dung độc lập</li>
                                                                </ul>
                                                            </li>
                                                            <li><input type="checkbox" name="chkrole" id="chkrole" value="102" checked="checked"> Tài khoản
                                                                <ul>
                                                                    <li><input type="checkbox" name="chkrole" id="chkrole" value="1021" checked="checked"> Quản lý tài khoản
                                                                        <ul>
                                                                            <li>
                                                                                <input type="checkbox" name="chkrole" id="chkrole" value="10211" checked="checked"> Thêm &nbsp;&nbsp;&nbsp;
                                                                                <input type="checkbox" name="chkrole" id="chkrole" value="10212" checked="checked"> Sửa &nbsp;&nbsp;&nbsp;
                                                                                <input type="checkbox" name="chkrole" id="chkrole" value="10213" checked="checked"> Xóa &nbsp;&nbsp;&nbsp;
                                                                            </li>
                                                                        </ul>
                                                                    </li>
                                                                    <li><input type="checkbox" name="chkrole" id="chkrole" value="1022" checked="checked"> Quản lý quyền
                                                                        <ul>
                                                                            <li>
                                                                                <input type="checkbox" name="chkrole" id="chkrole" value="10221" checked="checked"> Thêm &nbsp;&nbsp;&nbsp;
                                                                                <input type="checkbox" name="chkrole" id="chkrole" value="10222" checked="checked"> Sửa &nbsp;&nbsp;&nbsp;
                                                                                <input type="checkbox" name="chkrole" id="chkrole" value="10223" checked="checked"> Xóa &nbsp;&nbsp;&nbsp;
                                                                            </li>
                                                                        </ul>
                                                                    </li>
                                                                    <li><input type="checkbox" name="chkrole" id="chkrole" value="1023" checked="checked"> Truy cập log</li>
                                                                </ul>
                                                            </li>
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
@endsection