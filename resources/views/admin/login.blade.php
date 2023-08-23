@extends('/template/index')
@section('content')
    <link rel="stylesheet" href="{{ asset('css/login.css') }}" type="text/css"/>
    <div class="page-container login-container">

        <!-- Page content -->
        <div class="page-content">

            <!-- Main content -->
            <div class="content-wrapper">

                <!-- Content area -->
                <div class="content">
                    <div id="particles-js"></div>
                    <!-- Advanced login -->
                    <form method="post" action="{{route("admin.submit.login")}}">
                        @csrf
                        <div id="form-login">
                            <div class="panel panel-body login-form">
                                <div class="text-center">
                                    <h5 class="tta">Đăng nhập hệ thống</h5>
                                    <small class="display-block">
                                    </small>
                                </div>

                                <div class="form-group has-feedback has-feedback-left">
                                    <input name="email" type="text" id="txtuser" class="form-control @if($errors->has('email'))is-invalid @endif"
                                           placeholder="Email" value="{{old('email')}}"/>
                                    <div class="form-control-feedback">
                                        <i class="icon-user text-muted"></i>
                                    </div>
                                    @if($errors->has('email'))
                                        <p class="text-danger" style="margin-top: 10px;">{{ $errors->first('email') }}</p>
                                    @endif
                                </div>

                                <div class="form-group has-feedback has-feedback-left">
                                    <input name="password" type="password" id="txtpass"
                                           class="form-control @if($errors->has('email'))is-invalid @endif" placeholder="Mật khẩu" value="{{old('password')}}"/>
                                    <div class="form-control-feedback">
                                        <i class="icon-lock2 text-muted"></i>
                                    </div>
                                    @if($errors->has('password'))
                                        <p class="text-danger" style="margin-top: 10px;">{{ $errors->first('password') }}</p>
                                    @endif
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

                                    <input type="submit" name="controls1$ctl00$btnlogin" value="Đăng nhập" id="btnlogin"
                                           class="btn btnorange btn-block bt-login"/>
                                </div>

                                <p class="mess"></p>


                            </div>
                        </div>
                    </form>

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
