@extends('/template/index')

@section('content')

    <div id="page-wrapper">


        <div class="widget">

            <div class="widget-title">


                <div class="widget-title">
                    <h4><i class="icon-reorder">
                            Quản lý menu chính</i></h4>
                    <div class="ui-widget-content ui-corner-top ui-corner-bottom">
                        <div id="toolbox">

                            <div style="float: right; margin-right: 10px;" class="toolbox-content">

                                <table class="toolbar">
                                    <tbody>
                                    <tr>

                                        <td align="center">
                                            <a id="lnkadd" class="toolbar" href="{{route('admin.indexCreateMenu')}}">
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

                                            <th class="title">Tiêu đề
                                            </th>
                                            <th width="8%" class="title">Trạng thái
                                            </th>
                                            <th width="10%" nowrap="nowrap" class="title">Ngày cập nhật
                                            </th>
                                            <th width="80"></th>
                                        </tr>
                                        </thead>

                                        <?php showMenus($menu) ?>


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


    <?php

    function showMenus($menuChils, $parent_id = 0, $char = '')
    {

        foreach ($menuChils as $key => $item){
            if ($item->parent_id == $parent_id) {
                echo '<tbody>';
                echo '<tr class="row0">';
                echo '<td><a id="LinkButton1">'.$char. $item->menu_title .'</a></td>';
                echo '<td align="center"><a id="LinkButton2" >'. $item->status .'</a></td>';
                echo '<td align="center">'. $item->updated_at .'</td>';
                echo '<td align="center"><a id="LinkButton4" href="'. route('admin.editMenu', $item->id) .'"><img src="https://vntravelsimple.com/templates/admin/images/iconedit_c.png"></a></td>';
                echo '</tr>';
                echo '</tbody>';
                showMenus($menuChils, $item->id, $char. '--- ');
            }
        }
    }

    ?>
@endsection
