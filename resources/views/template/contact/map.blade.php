@extends('/template/index')

@section('content')
    <form method="post" action="">
        @csrf
        <div id="page-wrapper">

            <div class="widget">
                <div class="widget-title">


                    <div class="widget-title">
                        <h4><i class="icon-reorder">
                                Bản đồ</i></h4>
                        <div class="ui-widget-content ui-corner-top ui-corner-bottom">
                            <div id="toolbox">

                                <div style="float: right; margin-right: 10px;" class="toolbox-content">

                                    <table class="toolbar">
                                        <tbody>
                                        <tr>

                                            <td align="center">
                                                <button id="update" class="toolbar">
                                                    <span class="icon-ok-update"></span>
                                                    Cập nhật
                                                </button>
                                            </td>
                                        </tr>
                                        </tbody>
                                    </table>

                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="widget-body">

                        <div style="width: 100%; display: block; margin: 0px;" id="parentHorizontalTab"
                             class="divvalidate" novalidate="novalidate">
                            <ul class="resp-tabs-list hor_1">

                                <li class="resp-tab-item hor_1 resp-tab-active" aria-controls="hor_1_tab_item-1"
                                    role="tab" style="background-color: white; border-color: rgb(193, 193, 193);">Bản đồ
                                </li>

                            </ul>
                            <div class="resp-tabs-container hor_1" style="border-color: rgb(193, 193, 193);">

                                <h2 class="resp-accordion hor_1 resp-tab-active" role="tab"
                                    aria-controls="hor_1_tab_item-1"
                                    style="background-color: white; border-color: rgb(193, 193, 193);"><span
                                        class="resp-arrow"></span>Bản đồ</h2>
                                <div class="resp-tab-content hor_1 resp-tab-content-active"
                                     aria-labelledby="hor_1_tab_item-1" style="display:block">
                                    <textarea name="txt_bando" rows="2" cols="20" id="txt_bando"></textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
@endsection
