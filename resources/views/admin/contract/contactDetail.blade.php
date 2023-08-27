@extends('/template/index')

@section('content')
    <form method="post" action="{{route('admin.submit.editContact', ['id' => $contact->id])}}">
        @csrf
        <div id="page-wrapper">


            <div class="widget">
                <div class="widget-title">


                    <div class="widget-title">
                        <h4><i class="icon-reorder">
                                Cập nhật liên hệ</i></h4>
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
                                                <button  id="lnkupdate" class="toolbar">
                                                    <span class="icon-ok-update"></span>
                                                    Cập nhật
                                                </button>
                                            </td>
                                            <td align="center">
                                                <a id="lnkclose" class="toolbar"
                                                   href="{{route('admin.indexContact')}}">
                                                    <span class="icon-ok-close"></span>
                                                    Quay lại
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
                    </div>
                </div>

                <div id="element-box">
                    <div class="m">
                        <div id="adminForm1">

                            <div id="pndetail">

                                <div style="width: 100%; display: block; margin: 0px;" id="parentHorizontalTabcontent"
                                     class="divvalidate">
                                    <ul class="resp-tabs-list hor_1">
                                        <li class="resp-tab-item hor_1 resp-tab-active" aria-controls="hor_1_tab_item-0"
                                            role="tab"
                                            style="background-color: white; border-color: rgb(193, 193, 193);">Thông tin
                                            liên hệ
                                        </li>
                                    </ul>
                                    <div class="resp-tabs-container hor_1" style="border-color: rgb(193, 193, 193);">
                                        <h2 class="resp-accordion hor_1 resp-tab-active" role="tab"
                                            aria-controls="hor_1_tab_item-0"
                                            style="background: none; border-color: rgb(193, 193, 193);"><span
                                                class="resp-arrow"></span>Thông tin liên hệ</h2>
                                        <div class="resp-tab-content hor_1 resp-tab-content-active"
                                             aria-labelledby="hor_1_tab_item-0" style="display:block">
                                            <p>
                                            </p>
                                            <table cellspacing="1" class="admintable">
                                                <tbody>
                                                <tr>
                                                    <td width="150" class="key">
                                                        <label for="txtuser">Họ tên</label>
                                                    </td>
                                                    <td>
                                                        <input value="{{$contact->full_name}}"
                                                               name="controls1$ctl00$ctl00$ctl00$ltname" type="text"
                                                               id="ltname" disabled="disabled"
                                                               class="aspNetDisabled inputbox" style="width:200px;">
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="key">
                                                        <label for="txtphone">Email</label>
                                                    </td>
                                                    <td>
                                                        <input name="controls1$ctl00$ctl00$ctl00$ltemail" type="text"
                                                               value="{{$contact->email}}" id="ltemail"
                                                               disabled="disabled" class="aspNetDisabled inputbox"
                                                               style="width:200px;">
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="key">
                                                        <label for="txtphone">Số điện thoại</label>
                                                    </td>
                                                    <td>
                                                        <input value="{{$contact->phone}}" name="controls1$ctl00$ctl00$ctl00$ltphone" type="text"
                                                               id="ltphone" disabled="disabled"
                                                               class="aspNetDisabled inputbox" style="width:200px;">
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td class="key">
                                                        <label for="listnhom">Trạng thái</label>
                                                    </td>
                                                    <td>
                                                        <input id="chkstatus" type="checkbox"
                                                               name="status"
                                                               @if($contact->status == 'process')
                                                               checked="checked"
                                                            @endif
                                                        ><label
                                                            for="chkstatus">Đã xử lý</label>

                                                    </td>
                                                </tr>
                                                </tbody>
                                            </table>
                                            <p></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="clr"></div>
                    </div>
                </div>
            </div>


        </div>
    </form>
@endsection
