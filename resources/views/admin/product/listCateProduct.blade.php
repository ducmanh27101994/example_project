@extends('/template/index')

@section('content')
    <div id="page-wrapper">

        <div class="widget">

            <div class="widget-title">


                <div class="widget-title">
                    <h4><i class="icon-reorder">Danh mục sản phẩm</i></h4>
                    <div class="ui-widget-content ui-corner-top ui-corner-bottom">
                        <div id="toolbox">

                            <div style="float:right;margin-right: 10px;" class="toolbox-content">

                                <table class="toolbar">
                                    <tbody>
                                    <tr>
                                        <td align="center">
                                            <a id="lnkadd" class="toolbar"
                                               href="{{route('admin.create.cate.product')}}">
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


                <div class="widget-body">
                    <div id="element-box">
                        <div class="m">
                            <div id="adminForm1">
                                <div id="pnlist">


                                    <table cellpadding="1" summary="" class="adminlist">
                                        <thead>
                                        <tr>
                                            <th class="title">
                                                Tiêu đề
                                            </th>

                                            <th width="150" style="text-align:center" class="title">Thời gian tạo
                                            </th>
                                            <th width="8%" class="title" style="text-align:center">
                                                Trạng thái
                                            </th>
                                            <th width="8%" class="title" style="text-align:center">
                                               Số thứ tự
                                            </th>
                                            <th width="120" class="title" style="text-align:center">

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
                                        <?php showlistCategery($category); ?>

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
                submitHandler: function () {
                    alert("submitted!");
                }
            });
            $(document).ready(function () {
                //Horizontal Tab


                $('#parentHorizontalTab').easyResponsiveTabs({
                    type: 'default', //Types: default, vertical, accordion
                    width: 'auto', //auto or any width like 600px
                    fit: true, // 100% fit in a container
                    tabidentify: 'hor_1', // The tab groups identifier
                    activate: function (event) { // Callback function if tab is switched
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
                    activate: function (event) { // Callback function if tab is switched
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

    <?php

    function showlistCategery($menuChils, $parent_id = 0, $char = '')
    {

        foreach ($menuChils as $key => $item) {
                echo '<tbody>';
                echo '<tr class="row0">';
                echo '<td><a>' . $char . $item->name . '</a></td>';
                echo '<td align="center"><p class="sptime"><i class="ico-dcreate" title="Ngày tạo"></i>' . $item->created_at . '</p></td>';
                echo '<td align="center"><a style="color: #000">' . $item->status . '</a></td>';
                echo '<td align="center"><a style="color: #000">' . $item->chkstt . '</a></td>';
                echo ' <td align="center"><a id="LinkButton3" title="Sửa" href="' . route('admin.edit.cate.product', $item->id) . '"><img src="'.asset('/images/iconedit_c.png').'"></a> &nbsp; &nbsp;<a id="LinkButton4" title="Xóa" href="' . route('product.cate.destroy', $item->id) . '"><img src="'.asset('/images/icondelete_c.png').'"></a></td>';
                echo '</tr>';
                echo '</tbody>';
        }
    }

    ?>
@endsection
