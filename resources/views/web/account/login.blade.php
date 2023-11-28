@extends('/web/index')
@section('content')
<main class="page-content">

    <div class="page-input-form login">
        <div class="wrapper_input_fields">
            <h2>Đăng Nhập</h2>

            <form method="post" action="{{route('submit.login.customer')}}">
                @csrf
                <div class="group_input">
                    <div class="form_ipnput">
                        <input type="email" required class="form-control input-authen" name="email" id="email" placeholder="Email" />
                    </div>
                    <div class="form_ipnput">
                        <input type="password" required class="form-control input-authen" name="password" id="password" placeholder="Mật khẩu" />
                        <div class="icon">
                            <i class="fa fa-eye"></i>
                        </div>
                    </div>
                    <div class="forget_pass show">
                        <span>Quên mật khẩu?</span>
                    </div>
                    <div class="box_btn-button">
                        <button class="btn btn-button btn-login btn_func_query_login" type="submit">
                            <span class="text">Đăng nhập</span>
                        </button>
                    </div>
                    <div class="none_account_box">
                        <p>
                            <span>Bạn chưa có tài khoản?</span><a href="/account/register"><strong> Đăng ký</strong></a>
                        </p>
                    </div>
                </div>

            </form>
        </div>
        <div class="mask" role="dialog"></div>
        <div class="modal_form wrapper_input_fields" role="alert">
            <button class="close" role="button">X</button>
            <div class="modal_form_content">
                <div class="logo_form">
                    <img src="{{ asset('home/images/logo_big.png') }}" alt="logo_big">
                </div>
                <div class="content">
                    <h2>
                        Quên mật khẩu
                    </h2>
                    <p>Bạn vui lòng nhập Email/Số điện thoại để yêu cầu đặt lại mật khẩu. Osakar sẽ gửi xác nhận tới bạn.</p>
                    <div class="form_popup">
                        <div class="group_input">
                            <div class="form_ipnput">
                                <input type="text" class="form-control input-authen" name="name_account" id="name_account" placeholder="Email hoặc số điện thoại" />
                            </div>
                            <div class="box_btn-button">
                                <button class="btn btn-button btn-login btn_func_query_forgot" type="button">
                                    <span class="text">Đặt lại mật khẩu</span>
                                </button>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>


    <style>
        .show {

            cursor: pointer;
        }

        .show:hover {
            color: #c0392b;
        }

        .close {
            position: absolute;
            top: 0;
            right: 0;
            width: 35px;
            height: 30px;
            color: #fff;
            cursor: pointer;
            border: 0;
        }

        .mask {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(52, 73, 94, 0.8);
            z-index: 50;
            visibility: hidden;

            opacity: 0;

            transition: 0.7s;
        }

        .modal_form {
            position: fixed;
            max-width: 436px;
            width: 100%;
            background: #fff;
            z-index: 100;
            visibility: hidden;
            opacity: 0;
            transition: 0.5s ease-out;
            border-radius: 16px;
            padding: 48px 36px 12px;
        }

        .active {
            visibility: visible;
            opacity: 1;
        }

        .active+.modal {
            visibility: visible;
            opacity: 1;
            transform: translateY(0);
        }

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
