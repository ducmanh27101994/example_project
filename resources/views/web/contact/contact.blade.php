@extends('/web/index')
@section('content')
<main class="page-content">

    <div class="contact_page">
        <div class="container">
            <div class="row contact_page_row">
                <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                    <div class="logo_form">
                        <img src="{{ asset('home/images/logo_big.png') }}" alt="logo_big">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-8 col-md-8 col-lg-8">
                    <div class="wrapper_input_fields">
                        <form method="post" action="{{route('submit.contact.form')}}">
                            @csrf
                        <div class="group_input">
                            <div class="head_contact_content">
                                <h2>Đăng ký nhận tư vấn trực tiếp</h2>
                                <p>Hãy để lại thông tin và Osakar sẽ liên hệ với bạn trong thời gian sớm nhất.</p>
                            </div>
                            <div class="choose_type">
                                <div class="radio_type">
                                    <label for="alone">Khách hàng cá nhân</label>
                                    <input type="radio" name="customer_type" value="1" id="alone" checked />
                                </div>
                                <div class="radio_type">
                                    <label for="agency">Đại lý</label>
                                    <input type="radio" name="customer_type" value="2" id="agency" />
                                </div>
                            </div>

                            <div class="form_ipnput">
                                <input type="text" required class="form-control input-authen" name="full_name" id="name" placeholder="Họ tên" />
                            </div>
                            <div class="form_ipnput">
                                <input type="number" required class="form-control input-authen" name="phone" id="phone" placeholder="Số điện thoại" />
                            </div>
                            <div class="form_ipnput">
                                <input type="email" required class="form-control input-authen" name="email" id="email" placeholder="Email" />
                            </div>
                            <div class="form_ipnput">
                                <input type="text" required class="form-control input-authen" name="address" id="address" placeholder="Địa chỉ" />
                            </div>
                            <div class="form_ipnput">
                                <textarea style="height: unset;" name="contents" id="content" require class="form-control input-authen" placeholder="Nội dung" rows="4" cols="50"></textarea>
                            </div>
                            <div class="box_btn-button">
                                <button class="btn btn-button btn-login btn_func_query_login" type="submit">
                                    <span class="text">Gửi thông tin</span>
                                </button>
                            </div>
                            <div class="none_account_box_contact">
                                <div class="contact_checkbox">
                                    <input type="checkbox" id="agree" name="agree" class="checkbox agree">
                                    <p>Đăng ký nhận thông tin chương trình khuyến mãi, dịch vụ từ Osakar</p>
                                </div>
                                <div class="hotline_box">
                                    <p>Mọi thắc mắc xin liên hệ Hotline -</p>
                                    <p>0983 933 596</p>
                                </div>
                            </div>
                        </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>

</main>

@endsection
