@extends('/web/index')
@section('content')
<main class="page-content">

    <div class="page-input-form login">
        <div class="wrapper_input_fields">
            <h2>Đăng Nhập</h2>
            <div class="group_input">
                <div class="form_ipnput">
                    <input type="text" class="form-control input-authen" name="name_account" id="name_account" placeholder="Email hoặc số điện thoại" />
                </div>
                <div class="form_ipnput">
                    <input type="text" class="form-control input-authen" name="name_account" id="name_account" placeholder="Mật khẩu" />
                </div>
                <div class="forget_pass">
                    <span>Quên mật khẩu?</span>
                </div>
                <div class="box_btn-button">
                    <button class="btn btn-button btn-login" type="button">
                        <span class="text">Đăng nhập</span>
                    </button>
                </div>
                <div class="none_account_box">
                    <p>
                        <span>Bạn chưa có tài khoản?</span><strong> Đăng ký</strong>
                    </p>
                </div>
            </div>
        </div>
    </div>

    <style>
        body {
            overflow: hidden;
        }

        footer {
            display: none;
        }

        ::-webkit-scrollbar {
            display: none;
        }
    </style>

</main>

@endsection