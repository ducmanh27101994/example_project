<div class="ggr_form_contact">
    <div class="container">
        <div class="ggr_wrapper_box_form">
            <div class="ggr_head">
                <h2>Đăng ký nhận thông tin</h2>
                <p>Đăng ký nhận thông tin chương trình khuyến mãi, dịch vụ Osakar</p>
            </div>
            <form action="{{route('admin.contact.submit')}}" method="post">
                @csrf
                <div class="ggr_form">
                    <div class="ggr_form_input">
                        <input type="email" class="form-control my-text-input" id="email" placeholder="Nhập email của bạn" name="email" required />
                        <button type="submit" class="btn btn-button btn-reg-notion">
                            Đăng ký
                        </button>
                    </div>
                </div>
            </form>
            <div class="ggr_note">
                <p>Bằng cách đăng ký, Quý khách xác nhận đã đọc, hiểu và đồng ý với <a style="color: #000" href="/dieu-khoan-chinh-sach"><strong>Chính sách Quyền riêng
                        tư</strong></a> của Osakar</p>
            </div>
        </div>
    </div>
</div>