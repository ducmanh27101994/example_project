@extends('/template/index')

@section('content')
    <form method="post" action="{{route('admin.submit.generalConfig')}}">
        @csrf
    <div id="page-wrapper">

        <div class="widget">
            <div class="widget-title">


                <div class="widget-title">
                    <h4><i class="icon-reorder">
                            Cấu hình chung</i></h4>
                    <div class="ui-widget-content ui-corner-top ui-corner-bottom">
                        <div id="toolbox">

                            <div style="float: right; margin-right: 10px;" class="toolbox-content">

                                <table class="toolbar">
                                    <tbody>
                                    <tr>

                                        <td align="center">
                                            <button type="submit" onclick="return validation();" id="update" class="toolbar">
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

                    <div style="width: 100%; display: block; margin: 0px;" id="parentHorizontalTab" class="divvalidate" novalidate="novalidate">
                        <ul class="resp-tabs-list hor_1">
                            <li class="resp-tab-item hor_1 resp-tab-active" aria-controls="hor_1_tab_item-0" role="tab" style="background-color: white; border-color: rgb(193, 193, 193);">Cấu hình chung</li>

                        </ul>
                        <div class="resp-tabs-container hor_1" style="border-color: rgb(193, 193, 193);">
                            <h2 class="resp-accordion hor_1 resp-tab-active" role="tab" aria-controls="hor_1_tab_item-0" style="background: none white; border-color: rgb(193, 193, 193);"><span class="resp-arrow"></span>Cấu hình chung</h2>
                            <div class="resp-tab-content hor_1 resp-tab-content-active" aria-labelledby="hor_1_tab_item-0" style="display:block">
                                <p>
                                </p>
                                <table class="admintable">
                                    <tbody>

                                    <tr>
                                        <td width="150" class="key">
                                            <label for="txttitle">Tên công ty/cá nhân</label>
                                        </td>
                                        <td>
                                            <input  name="company_name" type="text"   value="{{!empty(old('company_name')) ? old('company_name') : $table_config->company_name}}" id="txtcompanyname" class="inputbox" style="width:364px;">
                                            <a href="#" class="tooltip">
                                                <img src="{{ asset('images/help-icon.png') }}">
                                                <span><b>Tên công ty/cá nhân</b><br>
                                                    Thông tin tên công ty hoặc cá nhân
                                                </span>
                                            </a>
                                            @if($errors->has('company_name'))
                                                <p class="text-danger" style="margin-top: 10px;">{{ $errors->first('company_name') }}</p>
                                            @endif
                                        </td>
                                    </tr>
                                    <tr>
                                        <td width="150" class="key">
                                            <label for="txttitle">Slogan</label>
                                        </td>
                                        <td>
                                            <input value="{{!empty(old('slogan')) ? old('slogan') : $table_config->slogan}}" name="slogan" type="text" id="txtslogan" class="inputbox" style="width:364px;">
                                            <a href="#" class="tooltip">
                                                <img src="{{ asset('images/help-icon.png') }}">
                                                <span><b>Slogan</b><br>
                                                    Câu khẩu hiệu của công ty
                                                </span>
                                            </a>
                                            @if($errors->has('slogan'))
                                                <p class="text-danger" style="margin-top: 10px;">{{ $errors->first('slogan') }}</p>
                                            @endif
                                        </td>
                                    </tr>
                                    <tr>
                                        <td width="150" class="key">
                                            <label for="txttitle">Số điện thoại</label>
                                        </td>
                                        <td>
                                            <input value="{{!empty(old('company_phone')) ? old('company_phone') : $table_config->company_phone}}" name="company_phone" type="text" id="txtphone" class="inputbox" style="width:364px;">
                                            <a href="#" class="tooltip">
                                                <img src="{{ asset('images/help-icon.png') }}">
                                                <span><b>Số điện thoại</b><br>
                                                    Số điện thoại di động, điện thoại bàn hay hotline của công ty
                                                </span>
                                            </a>
                                            @if($errors->has('company_phone'))
                                                <p class="text-danger" style="margin-top: 10px;">{{ $errors->first('company_phone') }}</p>
                                            @endif
                                        </td>
                                    </tr>

                                    <tr>
                                        <td width="150" class="key">
                                            <label for="txttitle">Email quản trị</label>
                                        </td>
                                        <td>
                                            <input value="{{!empty(old('company_email')) ? old('company_email') : $table_config->company_email}}" name="company_email" type="text" id="txt_emailqt" class="inputbox" style="width:364px;">
                                            <a href="#" class="tooltip">
                                                <img src="{{ asset('images/help-icon.png') }}">
                                                <span><b>Email quản trị</b><br>
                                                    Tất cả các liên hệ hay đơn đặt hàng của khách hàng sẽ được gửi vào email quản trị
                                                </span>
                                            </a>
                                            @if($errors->has('company_email'))
                                                <p class="text-danger" style="margin-top: 10px;">{{ $errors->first('company_email') }}</p>
                                            @endif
                                        </td>
                                    </tr>
                                    <tr>
                                        <td width="150" class="key">
                                            <label for="txttitle">Địa chỉ</label>
                                        </td>
                                        <td>
                                            <input name="company_address" type="text" value="{{!empty(old('company_address')) ? old('company_address') : $table_config->company_address}}" id="txtaddress" class="inputbox" style="width:500px;">
                                            <a href="#" class="tooltip">
                                                <img src="{{ asset('images/help-icon.png') }}">
                                                <span><b>Địa chỉ</b><br>
                                                    Địa chỉ công ty / cá nhân
                                                </span>
                                            </a>
                                            @if($errors->has('company_address'))
                                                <p class="text-danger" style="margin-top: 10px;">{{ $errors->first('company_address') }}</p>
                                            @endif
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
                $(".divvalidate").validate({
                    rules: {
                        txtname: "required"

                    },
                    messages: {
                        txtname: "Please enter your firstname"

                    }
                });
            });
        </script>


        <style>
            label.error,
            label.error {
                color: red;
                font-style: italic;
            }

            div.error {
                display: none;
            }
        </style>

    </div>
    </form>
@endsection
