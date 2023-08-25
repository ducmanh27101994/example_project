@extends('/template/index')

@section('content')
<div id="page-wrapper">
    <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
    <script>
        $(function() {
            $("#txt_updatetime").datepicker({
                dateFormat: 'dd/mm/yy'
            });

        });
    </script>
    <div class="widget-title">

        <h4><i class="icon-reorder-items">
                Thêm cửa hàng</i></h4>
        <div class="ui-corner-top ui-corner-bottom">
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

                                </td>

                                <td align="center">

                                </td>
                                <td align="center">
                                    <a id="lnkupdate" class="toolbar" href="javascript:__doPostBack('controls1$ctl00$ctl00$ctl00$lnkupdate','')">
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
    <div id="element-box">
        <div class="m">
            <div id="adminForm1">

                <div id="pndetail">

                    <span class="detail_error">
                    </span>
                    <div id="parentHorizontalTabcontent" style="display: block; width: 100%; margin: 0px;">
                        <ul class="resp-tabs-list hor_1">
                            <li class="resp-tab-item hor_1 resp-tab-active" aria-controls="hor_1_tab_item-0" role="tab" style="background-color: rgb(255, 255, 255); border-color: rgb(193, 193, 193);">Thông cửa hàng chung</li>
                            <li class="resp-tab-item hor_1" aria-controls="hor_1_tab_item-1" role="tab" style="background-color: rgb(245, 245, 245);">Cấu hình SEO</li>
                        </ul>
                        <div class="resp-tabs-container hor_1" style="border-color: rgb(193, 193, 193);">

                            <h2 class="resp-accordion hor_1 resp-tab-active" role="tab" aria-controls="hor_1_tab_item-0" style="background: none; border-color: rgb(193, 193, 193);"><span class="resp-arrow"></span>Thông cửa hàng chung</h2>
                            <div class="resp-tab-content hor_1 resp-tab-content-active" aria-labelledby="hor_1_tab_item-0" style="display:block">
                                <div class="row">
                                    <div class="col-sm-8">
                                        <div class="block_sp">
                                            <div class="form-group">
                                                <label class="next-label">Tiêu đề cửa hàng</label> <a href="#" class="tooltip">
                                                    <img src="{{ asset('images/help-icon.png') }}">
                                                    <span><b>Tiêu đề cửa hàng</b><br>
                                                        Nhập tiêu đề cửa hàng, độ dài tiêu đề không quá 150 ký tự
                                                    </span>
                                                </a>
                                                <input name="controls1$ctl00$ctl00$ctl00$txtnewsname" type="text" id="txtnewsname" class="inputbox" placeholder="Nhập tiêu đề cửa hàng" style="width:100%;">
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <label class="next-label">Tọa độ latitude</label> <a href="#" class="tooltip">
                                                            <img src="{{ asset('images/help-icon.png') }}">
                                                            <span><b>Tọa độ vĩ độ latitude</b><br>
                                                                Lấy tọa độ vĩ độ latitude trên google maps
                                                            </span>
                                                        </a>
                                                        <input name="controls1$ctl00$ctl00$ctl00$txtnewsname" type="text" id="txtnewsname" class="inputbox" placeholder="Nhập vĩ độ  latitude" style="width:100%;">
                                                    </div>
                                                </div>
                                                <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <label class="next-label">Tọa độ longitude</label> <a href="#" class="tooltip">
                                                            <img src="{{ asset('images/help-icon.png') }}">
                                                            <span><b>Tọa độ kinh độ longitude</b><br>
                                                                Lấy tọa độ kinh độ longitude trên google maps
                                                            </span>
                                                        </a>
                                                        <input name="controls1$ctl00$ctl00$ctl00$txtnewsname" type="text" id="txtnewsname" class="inputbox" placeholder="Nhập kinh độ longitude" style="width:100%;">
                                                    </div>
                                                </div>


                                            </div>
                                            <div class="form-group">
                                                <label class="next-label">Mô tả</label>
                                                <textarea name="controls1$ctl00$ctl00$ctl00$txtdesc" rows="2" cols="20" id="txtdesc" class="inputbox " style="height:80px;width:100%;"></textarea>
                                            </div>

                                        </div>
                                    </div>

                                    <div class="col-sm-4">
                                        <div class="block_sp">
                                            <div class="form-group">
                                                <label class="text-no-bold" data-bind="text:Title" style="font-weight:bold">Hình ảnh đại diện</label>
                                                <input type="file" name="controls1$ctl00$ctl00$ctl00$flupload" id="flupload" class="btn-change-link pull-right" style="width:180px;">
                                            </div>
                                            <div class="center">


                                            </div>
                                            <p style="color:#c3cfd8" class="center">Sử dụng nút <strong>Chọn hình</strong> để thêm hình.</p>
                                        </div>
                                        <div class="block_sp">
                                            <p class="ttg">Danh mục cửa hàng <a href="#" class="tooltip">
                                                    <img src="{{ asset('images/help-icon.png') }}">
                                                    <span><b>Danh mục cửa hàng</b><br>
                                                        Lưa chọn danh mục cửa hàng
                                                    </span>
                                                </a></p>
                                            <div class="form-group">

                                                <select name="controls1$ctl00$ctl00$ctl00$ddlcate" id="ddlcate" class="inputbox" style="width:100%;">
                                                    <option selected="selected" value="10353">Chuyên mục cửa hàng</option>

                                                </select>
                                            </div>
                                            <div class="form-group hidden">
                                                <label class="next-label">Nhóm cửa hàng</label>
                                                <div class="listgr">
                                                    <ul>

                                                        <li><input type="checkbox" name="chkgr" value="10362"> Nhóm cửa hàng 1</li>


                                                    </ul>
                                                </div>
                                            </div>
                                        </div>


                                        <div class="block_sp">
                                            <p class="ttg">Ngày đăng <a href="#" class="tooltip">
                                                    <img src="{{ asset('images/help-icon.png') }}">
                                                    <span><b>Cập nhật ngày đăng</b><br>
                                                        Thay đổi ngày đăng cửa hàng, ngày phải theo định dạng ngày/tháng/năm (20/10/2014)
                                                    </span>
                                                </a></p>
                                            <div class="form-group">

                                                <input name="controls1$ctl00$ctl00$ctl00$txt_updatetime" type="text" value="25/08/2023" id="txt_updatetime" class="inputbox hasDatepicker" style="width:92px;">
                                                &nbsp;
                                                lúc &nbsp;<select name="controls1$ctl00$ctl00$ctl00$ddlhour" id="ddlhour" class="inputbox">
                                                    <option value="0">0</option>
                                                    <option value="1">1</option>
                                                    <option value="2">2</option>
                                                    <option value="3">3</option>
                                                    <option value="4">4</option>
                                                    <option value="5">5</option>
                                                    <option value="6">6</option>
                                                    <option value="7">7</option>
                                                    <option value="8">8</option>
                                                    <option value="9">9</option>
                                                    <option selected="selected" value="10">10</option>
                                                    <option value="11">11</option>
                                                    <option value="12">12</option>
                                                    <option value="13">13</option>
                                                    <option value="14">14</option>
                                                    <option value="15">15</option>
                                                    <option value="16">16</option>
                                                    <option value="17">17</option>
                                                    <option value="18">18</option>
                                                    <option value="19">19</option>
                                                    <option value="20">20</option>
                                                    <option value="21">21</option>
                                                    <option value="22">22</option>
                                                    <option value="23">23</option>

                                                </select>
                                                giờ&nbsp;&nbsp;
                                                <select name="controls1$ctl00$ctl00$ctl00$ddlminute" id="ddlminute" class="inputbox">
                                                    <option value="0">0</option>
                                                    <option value="1">1</option>
                                                    <option value="2">2</option>
                                                    <option value="3">3</option>
                                                    <option value="4">4</option>
                                                    <option value="5">5</option>
                                                    <option value="6">6</option>
                                                    <option value="7">7</option>
                                                    <option value="8">8</option>
                                                    <option value="9">9</option>
                                                    <option value="10">10</option>
                                                    <option value="11">11</option>
                                                    <option value="12">12</option>
                                                    <option value="13">13</option>
                                                    <option value="14">14</option>
                                                    <option value="15">15</option>
                                                    <option value="16">16</option>
                                                    <option value="17">17</option>
                                                    <option value="18">18</option>
                                                    <option value="19">19</option>
                                                    <option value="20">20</option>
                                                    <option value="21">21</option>
                                                    <option value="22">22</option>
                                                    <option value="23">23</option>
                                                    <option value="24">24</option>
                                                    <option value="25">25</option>
                                                    <option value="26">26</option>
                                                    <option value="27">27</option>
                                                    <option value="28">28</option>
                                                    <option value="29">29</option>
                                                    <option value="30">30</option>
                                                    <option value="31">31</option>
                                                    <option value="32">32</option>
                                                    <option value="33">33</option>
                                                    <option value="34">34</option>
                                                    <option value="35">35</option>
                                                    <option value="36">36</option>
                                                    <option selected="selected" value="37">37</option>
                                                    <option value="38">38</option>
                                                    <option value="39">39</option>
                                                    <option value="40">40</option>
                                                    <option value="41">41</option>
                                                    <option value="42">42</option>
                                                    <option value="43">43</option>
                                                    <option value="44">44</option>
                                                    <option value="45">45</option>
                                                    <option value="46">46</option>
                                                    <option value="47">47</option>
                                                    <option value="48">48</option>
                                                    <option value="49">49</option>
                                                    <option value="50">50</option>
                                                    <option value="51">51</option>
                                                    <option value="52">52</option>
                                                    <option value="53">53</option>
                                                    <option value="54">54</option>
                                                    <option value="55">55</option>
                                                    <option value="56">56</option>
                                                    <option value="57">57</option>
                                                    <option value="58">58</option>
                                                    <option value="59">59</option>

                                                </select>
                                                phút


                                            </div>
                                        </div>
                                        <div class="block_sp">
                                            <div class="form-group">
                                                <p class="ttg">Trạng thái</p>
                                                <input id="chkstatus" type="checkbox" name="controls1$ctl00$ctl00$ctl00$chkstatus" checked="checked"> Hiển thị<br>
                                            </div>
                                        </div>
                                    </div>
                                </div>





                            </div>


                            <h2 class="resp-accordion hor_1" role="tab" aria-controls="hor_1_tab_item-1" style="background-color: rgb(245, 245, 245); border-color: rgb(193, 193, 193);"><span class="resp-arrow"></span>Cấu hình SEO</h2>
                            <div class="resp-tab-content hor_1" aria-labelledby="hor_1_tab_item-1" style="border-color: rgb(193, 193, 193);">

                                <p>
                                </p>
                                <table class="admintable">
                                    <tbody>
                                        <tr>
                                            <td valign="top">Tối ưu SEO</td>
                                            <td>
                                                <div>
                                                    <span class="page-title-seo">Thiết kế website</span>
                                                    <div class="page-description-seo ws-nm"><span>https://vntravelsimple.com/</span></div>
                                                    <div class="page-url-seo ws-nm">

                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td width="150" class="key">
                                                <label for="txttitle">Thẻ tiêu đề trang</label>
                                            </td>
                                            <td>
                                                <input name="controls1$ctl00$ctl00$ctl00$txttitleweb" type="text" id="txttitleweb" class="inputbox" style="width:460px;">
                                                <a href="#" class="tooltip">
                                                    <img src="{{ asset('images/help-icon.png') }}">
                                                    <span><b>Tiêu đề trang</b><br>
                                                        Nội dung được hiển thị dưới dạng tiêu đề trong kết quả tìm kiếm và trên trình duyệt của người dùng. <br><i>(Tiêu đề nên để dưới 70 ký tự)</i>
                                                    </span>
                                                </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td width="150" class="key">
                                                <label for="txttitle">Đường dẫn</label>

                                            </td>
                                            <td>
                                                <div class="next-input--stylized">
                                                    <span class="next-input-add-on next-input__add-on--before">https://vntravelsimple.com/</span>

                                                    <input name="controls1$ctl00$ctl00$ctl00$txturl" type="text" id="txturl" class="txtpa" style="width:335px;">
                                                </div>
                                                <a href="#" class="tooltip">
                                                    <img src="{{ asset('images/help-icon.png') }}">
                                                    <span><b>Đường dẫn</b><br>
                                                        Đường dẫn tới sản phẩm
                                                    </span>
                                                </a>

                                            </td>
                                        </tr>
                                        <tr>
                                            <td width="150" class="key">
                                                <label for="txtkeyword">Thẻ từ khóa</label>
                                            </td>
                                            <td>
                                                <textarea name="controls1$ctl00$ctl00$ctl00$txtkeyword" rows="5" cols="70" id="txtkeyword" class="inputbox" style="height:80px;"></textarea>
                                                <a href="#" class="tooltip">
                                                    <img src="{{ asset('images/help-icon.png') }}">
                                                    <span><b>Thẻ từ khóa</b><br>
                                                        Mô tả các từ khóa chính của website
                                                    </span>
                                                </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="key">
                                                <label for="txtdesciption">Thẻ mô tả</label>
                                            </td>
                                            <td>
                                                <textarea name="controls1$ctl00$ctl00$ctl00$txtmetadesc" rows="5" cols="70" id="txtmetadesc" class="inputbox" style="height:80px;"></textarea>
                                                <a href="#" class="tooltip">
                                                    <img src="{{ asset('images/help-icon.png') }}">
                                                    <span><b>Thẻ mô tả</b><br>
                                                        Cung cấp một mô tả ngắn của trang. Trong vài trường hợp, mô tả này được sử dụng như một phần của đoạn trích được hiển thị trong kết quả tìm kiếm. <br><i>(Mô tả nên để dưới 160 ký tự)</i>
                                                    </span>
                                                </a>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                                <p></p>

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
<script type="text/javascript">
    $(document).ready(function() {
        //Horizontal Tab
        $('#parentHorizontalTabcontent').easyResponsiveTabs({
            type: 'default', //Types: default, vertical, accordion
            width: 'auto', //auto or any width like 600px
            fit: true, // 100% fit in a container
            tabidentify: 'hor_1', // The tab groups identifier
            activate: function(event) { // Callback function if tab is switched
                var $tab = $(this);
                var $info = $('#nested-tabInfo');
                var $name = $('span', $info);
                $name.text($tab.text());
                $info.show();
            }
        });

        // Child Tab
        $('#ChildVerticalTab_1').easyResponsiveTabs({
            type: 'vertical',
            width: 'auto',
            fit: true,
            tabidentify: 'ver_1', // The tab groups identifier
            activetab_bg: '#fff', // background color for active tabs in this group
            inactive_bg: '#F5F5F5', // background color for inactive tabs in this group
            active_border_color: '#c1c1c1', // border color for active tabs heads in this group
            active_content_border_color: '#5AB1D0' // border color for active tabs contect in this group so that it matches the tab head border
        });

        //Vertical Tab
        $('#parentVerticalTab').easyResponsiveTabs({
            type: 'vertical', //Types: default, vertical, accordion
            width: 'auto', //auto or any width like 600px
            fit: true, // 100% fit in a container
            closed: 'accordion', // Start closed if in accordion view
            tabidentify: 'hor_1', // The tab groups identifier
            activate: function(event) { // Callback function if tab is switched
                var $tab = $(this);
                var $info = $('#nested-tabInfo2');
                var $name = $('span', $info);
                $name.text($tab.text());
                $info.show();
            }
        });

        $("#txt_updatetime").datepicker({
            changeMonth: true,
            changeYear: true,
            dateFormat: 'dd/mm/yy'
        });
    });
</script>
@endsection