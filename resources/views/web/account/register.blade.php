@extends('/web/index')
@section('content')
<main class="page-content">

    <div class="page-input-form login">
        <div class="wrapper_input_fields">
            <h2>Đăng Ký</h2>
            <div class="group_input">
                <div class="form_ipnput">
                    <input type="text" class="form-control input-authen" name="username_account" id="username_account" placeholder="Họ và tên" />
                </div>
                <div class="form_ipnput">
                    <input type="text" class="form-control input-authen" name="name_account" id="name_account" placeholder="Email hoặc số điện thoại" />
                </div>
                <div class="form_ipnput">
                    <input type="password" class="form-control input-authen" name="pwd_account" id="pwd_account" placeholder="Mật khẩu" />
                    <div class="icon">
                        <i class="fa fa-eye"></i>
                    </div>
                </div>

                <div class="form_ipnput">
                    <input type="password" class="form-control input-authen" name="pwd_confirm_account" id="pwd_confirm_account" placeholder="Nhập lại mật khẩu" />
                    <div class="icon">
                        <i class="fa fa-eye"></i>
                    </div>
                </div>

                <div class="condition_pwd">
                    <h3>Mật khẩu bao gồm</h3>
                    <ul>
                        <li class="min-8-character">
                            <i class="fa fa-chevron-circle-down" aria-hidden="true"></i>
                            <span>Ít nhất 8 ký tự</span>
                        </li>
                        <li class="one-number--special">
                            <i class="fa fa-chevron-circle-down" aria-hidden="true"></i>
                            <span>Ít nhất 1 số hoặc ký tự đặc biệt</span>
                        </li>
                    </ul>
                    <p class="policy">
                        Bằng việc bấm nút Đăng ký bên dưới, tôi xác nhận đã đọc
                        và đồng ý với các <span style="color: #ED2025">Điều kiện và Điều khoản</span> của Osakar
                    </p>
                </div>

                <div class="box_btn-button">
                    <button class="btn btn-button btn-login" type="button">
                        <span class="text">Đăng ký</span>
                    </button>
                </div>
                <div class="none_account_box">
                    <p>
                        <span>Bạn đã có tài khoản?</span><a href="/account/login"><strong> Đăng nhập</strong></a>
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