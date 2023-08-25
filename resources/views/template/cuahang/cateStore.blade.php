@extends('/template/index')

@section('content')
<div id="page-wrapper">

    <div class="widget">

        <div class="widget-title">


            <div class="widget-title">
                <h4><i class="icon-reorder">Danh mục cửa hàng</i></h4>
                <div class="ui-widget-content ui-corner-top ui-corner-bottom">
                    <div id="toolbox">

                        <div style="float:right;margin-right: 10px;" class="toolbox-content">

                            <table class="toolbar">
                                <tbody>
                                    <tr>


                                        <td align="center">
                                            <a id="lnkadd" class="toolbar" href="javascript:__doPostBack('controls1$ctl00$ctl00$ctl00$lnkadd','')">
                                                <span class="icon-ok-new"></span>
                                                Thêm
                                            </a>
                                        </td>

                                        <td align="center">
                                            <a onclick="return confirm('Bạn có muốn xóa dữ liệu không?');" id="lnkdelete" class="toolbar" href="javascript:__doPostBack('controls1$ctl00$ctl00$ctl00$lnkdelete','')">
                                                <span class="icon-ok-delete"></span>
                                                Xóa
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

                                            <th width="3%" class="title">
                                                <input type="checkbox" id="chkToggle" value="" onclick="selectAll(this)" name="chkToggle">
                                            </th>
                                            <th width="3%" class="title">#</th>
                                            <th class="title">
                                                Tiêu đề
                                            </th>

                                            <th style="width: 80px; text-align: center !important;" class="title">Thứ tự
                                            </th>

                                            <th width="10%" style="text-align:center" class="title">Người tạo
                                            </th>
                                            <th width="150" style="text-align:center" class="title">Thời gian
                                            </th>
                                            <th width="8%" class="title">
                                                Trạng thái
                                            </th>
                                            <th width="120" class="title">

                                            </th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <td colspan="10">
                                                <del class="container">
                                                    <div class="pagination">
                                                        <div class="limit"></div>
                                                        <div class="limit"></div>
                                                    </div>
                                                </del>
                                            </td>
                                        </tr>
                                    </tfoot>

                                    <tbody>
                                        <tr class="row0">
                                            <td align="center">
                                                <input type="checkbox" onclick="isChecked(this.checked);" value="10353" id="cb_" name="cb_">
                                            </td>
                                            <td align="center">1</td>

                                            <td>
                                                <a id="LinkButton1" title="Sửa" href="javascript:__doPostBack('controls1$ctl00$ctl00$ctl00$rpitems$ctl01$LinkButton1','')">Chuyên mục tin</a>
                                            </td>

                                            <td align="center">1</td>


                                            <td>
                                                <p class="sptime"><i class="ico-ucreate" title="Người tạo"></i>admin</p>
                                                <p class="sptime"><i class="ico-uupdate" title="Người cập nhật"></i>admin</p>
                                            </td>
                                            <td align="center">
                                                <p class="sptime"><i class="ico-dcreate" title="Ngày tạo"></i>23/05/2017 14:58</p>
                                                <p class="sptime"><i class="ico-dupdate" title="Ngày cập nhật"></i>27/03/2023 15:04</p>
                                            </td>
                                            <td align="center">
                                                <a id="LinkButton2" title="Thay đổi trạng thái" href="javascript:__doPostBack('controls1$ctl00$ctl00$ctl00$rpitems$ctl01$LinkButton2','')"><img src="https://vntravelsimple.com/templates/admin/images/iconupdate_c.png"></a>
                                            </td>
                                            <td align="center">
                                                <a href="https://vntravelsimple.com/chuyen-muc-tin-81" target="_blank" title="Xem chi tiết"><img src="https://vntravelsimple.com/templates/admin/images/view.png"></a>&nbsp; &nbsp;
                                                <a id="LinkButton3" title="Sửa" href="javascript:__doPostBack('controls1$ctl00$ctl00$ctl00$rpitems$ctl01$LinkButton3','')"><img src="https://vntravelsimple.com/templates/admin/images/iconedit_c.png"></a> &nbsp; &nbsp;
                                                <a onclick="return confirm('Bạn có muốn xóa không?');" id="LinkButton4" title="Xóa" href="javascript:__doPostBack('controls1$ctl00$ctl00$ctl00$rpitems$ctl01$LinkButton4','')"><img src="https://vntravelsimple.com/templates/admin/images/icondelete_c.png"></a>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="clr"></div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <script type="text/javascript">
        function validation() {
            //validation ở đây nha
            return true;
        }
        $.validator.setDefaults({
            submitHandler: function() {
                alert("submitted!");
            }
        });
        $(document).ready(function() {
            //Horizontal Tab


            $('#parentHorizontalTab').easyResponsiveTabs({
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


            $(".divvalidate").validate({
                rules: {
                    controls1$ctl00$ctl00$ctl00$txtname: "required"

                },
                messages: {
                    controls1$ctl00$ctl00$ctl00$txtname: "Please enter your firstname"

                }
            });
        });
    </script>


    <style>
        label.error,
        label.error {
            color: red;
            font-style: italic
        }

        div.error {
            display: none;
        }
    </style>
</div>
@endsection