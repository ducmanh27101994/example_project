@extends('/web/index')
@section('content')
    <main class="page-content">

        <div class="page-input-form login">
            <div class="wrapper_input_fields">
                <h2>Đăng Ký</h2>
                @if ($errors->any())
                    <div>
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li class="min-8-character">
                                    <span style="color: red; font-size: 12px">{{ $error }}</span>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <form action="{{route('submit.register.customer')}}" method="post">
                    @csrf
                    <div class="group_input">
                        <div class="form_ipnput">
                            <input type="text" class="form-control input-authen" name="full_name"
                                   id="username_account" placeholder="Họ và tên" required/>
                        </div>
                        <div class="form_ipnput">
                            <input type="email" class="form-control input-authen" name="email" id="name_account"
                                   placeholder="Email" required/>
                        </div>
                        <div class="form_ipnput">
                            <input type="password" class="form-control input-authen" name="password" id="pwd_account"
                                   placeholder="Mật khẩu" required/>
                            <div class="icon">
                                <i class="fa fa-eye"></i>
                            </div>
                        </div>

                        <div class="form_ipnput">
                            <input type="password" class="form-control input-authen" name="password_confirmation"
                                   id="pwd_confirm_account" placeholder="Nhập lại mật khẩu" required/>
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
                            <button class="btn btn-button btn-login" type="submit">
                                <span class="text">Đăng ký</span>
                            </button>
                        </div>
                        <div class="none_account_box">
                            <p>
                                <span>Bạn đã có tài khoản?</span><a href="/account/login"><strong> Đăng
                                        nhập</strong></a>
                            </p>
                        </div>
                    </div>
                </form>
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
