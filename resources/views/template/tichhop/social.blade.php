@extends('/template/index')

@section('content')
<div id="page-wrapper">

    <div class="widget">
        <div class="widget-title">


            <div class="widget-title">
                <h4><i class="icon-reorder">
                        Tích hợp các mạng xã hội</i></h4>
                <div class="ui-widget-content ui-corner-top ui-corner-bottom">
                    <div id="toolbox">

                        <div style="float: right; margin-right: 10px;" class="toolbox-content">

                            <table class="toolbar">
                                <tbody>
                                    <tr>



                                        <td align="center">
                                            <a id="lnkupdate" class="toolbar" href="javascript:__doPostBack('controls1$ctl00$ctl00$ctl00$lnkupdate','')">
                                                <span class="icon-ok-update"></span>
                                                Cập nhật
                                            </a>
                                        </td>

                                    </tr>
                                </tbody>
                            </table>

                        </div>
                    </div>
                </div>
            </div>

            <p style="color: #16757c; margin: 0; font-size: 11px; padding: 12px 15px 0px 15px; font-style: italic;">
            </p>
            <div style="width: 100%; display: block; margin: 0px;" id="parentHorizontalTab" class="divvalidate" novalidate="novalidate">

                <ul class="resp-tabs-list hor_1">
                    <li class="resp-tab-item hor_1 resp-tab-active" aria-controls="hor_1_tab_item-0" role="tab" style="background-color: white; border-color: rgb(193, 193, 193);">Tích hợp các mạng xã hội</li>
                </ul>
                <div class="resp-tabs-container hor_1" style="border-color: rgb(193, 193, 193);">
                    <h2 class="resp-accordion hor_1 resp-tab-active" role="tab" aria-controls="hor_1_tab_item-0" style="background: none; border-color: rgb(193, 193, 193);"><span class="resp-arrow"></span>Tích hợp các mạng xã hội</h2>
                    <div class="resp-tab-content hor_1 resp-tab-content-active" aria-labelledby="hor_1_tab_item-0" style="display:block">
                        <p>
                        </p>
                        <table cellspacing="1" class="admintable">
                            <tbody>

                                <tr>
                                    <td width="150" class="key" style="width:250px">
                                        <label for="txttitle">Facebook</label>
                                    </td>
                                    <td>
                                        <input name="controls1$ctl00$ctl00$ctl00$txtlinkfacebook" type="text" value="https://www.facebook.com/" id="txtlinkfacebook" class="inputbox" style="width:450px;">
                                        <a href="#" class="tooltip">
                                            <img src="{{ asset('images/help-icon.png') }}">
                                            <span><b>Link Facebook</b><br>
                                                Đường link dẫn đến trang fanpage của bạn...
                                            </span>
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td width="150" class="key" style="width:250px">
                                        <label for="txttitle">Google +</label>
                                    </td>
                                    <td>
                                        <input name="controls1$ctl00$ctl00$ctl00$txtlinkgoogle" type="text" value=" https://plus.google.com" id="txtlinkgoogle" class="inputbox" style="width:450px;">
                                        <a href="#" class="tooltip">
                                            <img src="{{ asset('images/help-icon.png') }}">
                                            <span><b>Link Google</b><br>
                                                Đường link dẫn đến trang Google + của bạn...
                                            </span>
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td width="150" class="key" style="width:250px">
                                        <label for="txttitle">Twitter</label>
                                    </td>
                                    <td>
                                        <input name="controls1$ctl00$ctl00$ctl00$txttwitter" type="text" value="https://twitter.com/" id="txttwitter" class="inputbox" style="width:450px;">
                                        <a href="#" class="tooltip">
                                            <img src="{{ asset('images/help-icon.png') }}">
                                            <span><b>Link Twitter</b><br>
                                                Đường link dẫn đến trang Twitter của bạn...
                                            </span>
                                        </a>
                                    </td>
                                </tr>

                                <tr>
                                    <td width="150" class="key" style="width:250px">
                                        <label for="txttitle">Youtube</label>
                                    </td>
                                    <td>
                                        <input name="controls1$ctl00$ctl00$ctl00$txtyoutube" type="text" value="https://www.youtube.com/" id="txtyoutube" class="inputbox" style="width:450px;">
                                        <a href="#" class="tooltip">
                                            <img src="{{ asset('images/help-icon.png') }}">
                                            <span><b>Link Youtube</b><br>
                                                Đường link dẫn đến trang Youtube của bạn...
                                            </span>
                                        </a>
                                    </td>
                                </tr>

                                <tr>
                                    <td width="150" class="key" style="width:250px">
                                        <label for="txttitle">Intagram</label>
                                    </td>
                                    <td>
                                        <input name="controls1$ctl00$ctl00$ctl00$txtintagram" type="text" id="txtintagram" class="inputbox" style="width:450px;">
                                        <a href="#" class="tooltip">
                                            <img src="{{ asset('images/help-icon.png') }}">
                                            <span><b>Link Intagram</b><br>
                                                Đường link dẫn đến trang Intagram của bạn...
                                            </span>
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td width="150" class="key" style="width:250px">
                                        <label for="txttitle">Linkedin</label>
                                    </td>
                                    <td>
                                        <input name="controls1$ctl00$ctl00$ctl00$txtlinkedin" type="text" id="txtlinkedin" class="inputbox" style="width:450px;">
                                        <a href="#" class="tooltip">
                                            <img src="{{ asset('images/help-icon.png') }}">
                                            <span><b>Link linkedin</b><br>
                                                Đường link dẫn đến trang linkedin của bạn...
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
        </div>
    </div>
</div>
@endsection