@extends('/template/index')

@section('content')
<link rel="stylesheet" href="{{ asset('css/login.css') }}" type="text/css" />
<div class="page-container login-container">

    <!-- Page content -->
    <div class="page-content">

        <!-- Main content -->
        <div class="content-wrapper">

            <!-- Content area -->
            <div class="content">
                <div id="particles-js"></div>
                <!-- Advanced login -->
                <div id="form-login">
                    <div class="panel panel-body login-form">

                        <div class="text-center">
                            <h5 class="tta">Đăng nhập hệ thống</h5>
                            <small class="display-block">
                            </small>
                        </div>

                        <div class="form-group has-feedback has-feedback-left">
                            <input name="controls1$ctl00$txtuser" type="text" id="txtuser" class="form-control" placeholder="Tài khoản" />
                            <div class="form-control-feedback">
                                <i class="icon-user text-muted"></i>
                            </div>
                        </div>

                        <div class="form-group has-feedback has-feedback-left">
                            <input name="controls1$ctl00$txtpass" type="password" id="txtpass" class="form-control" placeholder="Mật khẩu" />
                            <div class="form-control-feedback">
                                <i class="icon-lock2 text-muted"></i>
                            </div>
                        </div>

                        <div class="form-group login-options">
                            <div class="row">
                                <div class="col-sm-6">
                                    <label class="checkbox-inline hidden">
                                        <input type="checkbox" class="styled" checked="checked">
                                        Remember
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">

                            <input type="submit" name="controls1$ctl00$btnlogin" value="Đăng nhập" id="btnlogin" class="btn btnorange btn-block bt-login" />
                        </div>

                        <p class="mess"></p>



                    </div>
                </div>


                <script src="{{ asset('js/particles.js') }}"></script>
                <script src="{{ asset('js/app1.js') }}"></script>


                <!-- /advanced login -->
                <!-- Footer -->

                <!-- /footer -->

            </div>
            <!-- /content area -->

        </div>
        <!-- /main content -->

    </div>
    <!-- /page content -->

</div>
@endsection