@extends('/web/index')
@section('content')

<main class="page-content page-policy">
    <h1 style="display: none;">Điều khoản pháp lý</h1>
    <div class="banner_policy">
        <div class="wrap_image">
            <img src="{{ asset('home/images/policy.png') }}" alt="policy">
        </div>
    </div>
    <div class="policy-wrap-content">
        <div class="container">
            <div class="content-wrap">
                <div class="head">
                    <h2>ĐIều khoản, pháp lý</h2>
                </div>
                <div class="arrconrational_block">

                    @if(!empty($chinh_sach_bao_hanh))
                        @foreach($chinh_sach_bao_hanh as $value)
                            <div class="arrco_block-element_single">
                                <div class="arrco_title">
                                    <span class="text_left">{!! $value->title !!}</span>
                                    <span class="icon">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="38" height="38" viewBox="0 0 38 38"
                                            fill="none">
                                            <path
                                                d="M19.0013 3.1665C10.2771 3.1665 3.16797 10.2757 3.16797 18.9998C3.16797 27.724 10.2771 34.8332 19.0013 34.8332C27.7255 34.8332 34.8346 27.724 34.8346 18.9998C34.8346 10.2757 27.7255 3.1665 19.0013 3.1665ZM25.4296 17.844L19.8405 23.4332C19.603 23.6707 19.3021 23.7815 19.0013 23.7815C18.7005 23.7815 18.3996 23.6707 18.1621 23.4332L12.573 17.844C12.1138 17.3848 12.1138 16.6248 12.573 16.1657C13.0321 15.7065 13.7921 15.7065 14.2513 16.1657L19.0013 20.9157L23.7513 16.1657C24.2105 15.7065 24.9705 15.7065 25.4296 16.1657C25.8888 16.6248 25.8888 17.369 25.4296 17.844Z"
                                                fill="#343944" />
                                        </svg>
                                    </span>
                                </div>
                                <div class="arrco_content_block">
                                    <div class="entry">
                                        <!-- <div class="title_content">
                                            <h3>Chính sách bảo hành</h3>
                                        </div>
                                        <div class="text">
                                            <p><strong style="font-size: 17px">1. Phạm vi bảo hành</strong></p>
                                            <p>Các phụ tùng được Công ty áp dụng bảo hành được chỉ định rõ sau đây.</p>
                                            <br>
                                            <strong>CÁC SẢN PHẨM ĐƯỢC ÁP DỤNG BẢO HÀNH:</strong>
                                            <br>
                                            <div class="table_list">
                                                <table style="width:100%">
                                                    <thead>
                                                        <tr>
                                                            <th width="50">STT</th>
                                                            <th>Tên sản phụ tùng</th>
                                                            <th>Điều kiện bảo hành</th>
                                                            <th width="250">Thời gian bảo hành</th>
                                                            <th>Nội dung bảo hành</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <th>1</th>
                                                            <th>Khung và càng sau</th>
                                                            <th>Lỗi do nhà sản xuất. <br> Không có dấu hiệu va chạm giao thông
                                                            </th>
                                                            <th>36 tháng</th>
                                                            <th>Bảo hành sửa chữa, vì không thể thay đổi số khung.</th>
                                                        </tr>
                                                        <tr>
                                                            <th>2</th>
                                                            <th>Bộ phanh dầu</th>
                                                            <th>Lỗi do nhà sản xuất, Nguyên vẹn, không có dấu hiệu va chạm giao
                                                                thông, hoặc tự tháo lắp
                                                            </th>
                                                            <th>12 tháng</th>
                                                            <th>Sửa chữa hoặc 1 đổi 1 với loại có chất lượng tương đương</th>
                                                        </tr>
                                                        <tr>
                                                            <th>3</th>
                                                            <th>Bộ giảm xóc</th>
                                                            <th>Lỗi do nhà sản xuất, nguyên vẹn, không có dấu hiệu va chạm giao
                                                                thông, hoặc tự tháo lắp</th>
                                                            <th>12 tháng</th>
                                                            <th>Sửa chữa hoặc 1 đổi 1 với loại có chất lượng tương đương (riêng
                                                                phớt
                                                                dầu
                                                                bù tại chỗ).</th>
                                                        </tr>
                                                        <tr>
                                                            <th>4</th>
                                                            <th>Vành trước</th>
                                                            <th>Lỗi do nhà sản xuất, hở
                                                                khí, không đồng tâm, "không có dấu hiệu va chạm giao thông."
                                                            </th>
                                                            <th>24 tháng</th>
                                                            <th>Đổi mới</th>
                                                        </tr>
                                                        <tr>
                                                            <th>5</th>
                                                            <th>Động cơ liền vành sau</th>
                                                            <th>Còn nguyên vẹn, dây và rắc điện đầy đủ dây và rắc điện, không có
                                                                dấu hiệu tháo lắp cậy phá.</th>
                                                            <th>24 tháng</th>
                                                            <th>Sửa chữa, vì lý do không thể thay đổi số động cơ.</th>
                                                        </tr>
                                                        <tr>
                                                            <th>6</th>
                                                            <th>Bộ sạc</th>
                                                            <th>Còn nguyên tem, dây và rắc điện, không có dấu hiệu tháo lắp cắt
                                                                nối.</th>
                                                            <th>24 tháng</th>
                                                            <th>Sửa chữa hoặc 1 đổi 1 với loại có chất lượng tương đương</th>
                                                        </tr>
                                                        <tr>
                                                            <th>7</th>
                                                            <th>Bộ điều khiển</th>
                                                            <th>Còn nguyên tem, dây và rắc điện, không có dấu hiệu tháo lắp cắt
                                                                nối.</th>
                                                            <th>24 tháng</th>
                                                            <th>Trước 5 tháng đổi mới, còn lại Sửa chữa hoặc 1 đổi 1 với loại có
                                                                chất lượng tương
                                                                đương.
                                                            </th>
                                                        </tr>
                                                        <tr>
                                                            <th>8</th>
                                                            <th>Bộ đèn pha, đèn hậu, xi nhan.</th>
                                                            <th>Còn nguyên tem, dây và rắc điện, không biến dạng, gẫy vỡ, rạn
                                                                nứt.</th>
                                                            <th>12 tháng</th>
                                                            <th>Sửa chữa hoặc 1 đổi 1 với loại có chất lượng tương đương ( không
                                                                BH bóng sợi đốt)</th>
                                                        </tr>
                                                        <tr>
                                                            <th>9</th>
                                                            <th>Bộ khóa điện</th>
                                                            <th>Còn nguyên tem, dây và rắc điện, không biến dạng, gẫy vỡ, đủ 2
                                                                chìa khóa.</th>
                                                            <th>12 tháng</th>
                                                            <th>Trước 3 tháng đổi mới, còn lại sửa chữa hoặc 1 đổi 1 với loại có
                                                                chất lượng tương đương.</th>
                                                        </tr>
                                                        <tr>
                                                            <th>10</th>
                                                            <th>Bộ tay ga</th>
                                                            <th>Còn nguyên tem, dây và rắc điện không có dấu hiệu cắt nối, không
                                                                trầy xước.</th>
                                                            <th>12 tháng</th>
                                                            <th>Sửa chữa hoặc 1 đổi 1 với loại có chất lượng tương đương.</th>
                                                        </tr>
                                                        <tr>
                                                            <th>11</th>
                                                            <th>Bộ công tắc</th>
                                                            <th>Còn nguyên vẹn nguyên tem, dây và rắc điện không có dấu hiệu cắt
                                                                nối, không tháo lắp.</th>
                                                            <th>12 tháng</th>
                                                            <th>Sửa chữa hoặc 1 đổi 1 với loại có chất lượng tương đương.</th>
                                                        </tr>
                                                        <tr>
                                                            <th>12</th>
                                                            <th>Bộ đổi nguồn</th>
                                                            <th>Còn nguyên vẹn nguyên tem, đầy đủ dây và rắc điện, không có dấu
                                                                hiệu cắt nối, tháo lắp.</th>
                                                            <th>12 tháng</th>
                                                            <th>Sửa chữa hoặc 1 đổi 1 với loại có chất lượng tương đương.</th>
                                                        </tr>
                                                        <tr>
                                                            <th>13</th>
                                                            <th>Bộ chống trộm</th>
                                                            <th>Còn nguyên vẹn, nguyên tem, đầy đủ dây và rắc điện, không có dấu
                                                                hiệu tháo lắp, đủ 2 chìa khóa.</th>
                                                            <th>6 tháng</th>
                                                            <th>Sửa chữa hoặc 1 đổi 1 với loại có chất lượng tương đương.</th>
                                                        </tr>
                                                        <tr>
                                                            <th>14</th>
                                                            <th>Bộ đồng hồ</th>
                                                            <th>Còn nguyên vẹn, nguyên tem, đầy đủ dây và rắc điện, không có dấu
                                                                hiệu tháo lắp, không biến dạng, nứt vỡ.</th>
                                                            <th>12 tháng</th>
                                                            <th>Sửa chữa hoặc 1 đổi 1 với loại có chất lượng tương đương.</th>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>

                                            <br>
                                            <p><strong style="font-size: 17px">2. Những trường hợp không thuộc phạm vi bảo
                                                    hành</strong></p>
                                            <div class="luuy">
                                                <p>* Sau khi mua hàng những bộ phận hao mòn và tiêu hao tự nhiên (xem thêm ở
                                                    Hướng dẫn sử dụng) sẽ không thuộc gói ba bảo hành.</p>
                                                <p>* Các trường hợp hư hỏng do không làm theo yêu cầu hướng dẫn trong Hướng dẫn
                                                    sử dụng xe hoặc Các trường hợp hư hỏng do bảo dưỡng không đúng cách tại các
                                                    cửa hàng, dịch vụ không chuyên nghiệp.</p>
                                                <p>* Các trường hợp hư hỏng do sử dụng vượt quá giới hạn thông số kỹ thuật do
                                                    công ty quy định.</p>
                                                <p>• Các trường thiệt hại, hư hỏng do tự ý sửa chữa không phải do kỹ thuật viên
                                                    hệ thống đại lý của OSAKAR.</p>
                                                <p>* Các trường hợp hư do không sử dụng linh kiện chính hãng của OSAKAR.</p>
                                                <p>* Các trường hợp hư hỏng do thay đổi theo thời gian (mất màu tự nhiên, lớp mạ
                                                    rỉ sét, v.v.).</p>
                                                <p>* Sự xuống cấp của các bộ phận (cao su, v.v.) và dầu mỡ do để lâu ngày.</p>
                                                <p>* Các vấn đề gây ra bởi các yếu tố bên ngoài như hành động ác ý, cố ý gây tổn
                                                    hại.</p>
                                                <p>Các vấn đề do khói bụi than, thuốc, dược phẩm, phân chim và xói mòn do có
                                                    thành phần muối, mưa axit.
                                                </p>
                                                <p>• Thiệt hại trong các trường hợp bất khả kháng (động đất, bão, hỏa hoạn, lũ
                                                    lụt, v.v.)
                                                </p>
                                                <p>* Hư hỏng do các yếu tố không đảm bảo chất lượng khác.</p>
                                                <p>* Không có hóa đơn, biên lai hoặc các chứng từ chứng minh đã mua xe OSAKAR
                                                    chính hãng.</p>
                                                <p>* Bộ sạc, bộ điều khiển, v.v. có nhãn hiệu bị rách sẽ không được bảo hành và
                                                    chìa khóa bị gãy bên trong.</p>
                                                <p>* Pin ắc quy bị chai, phồng, ngâm nước, hư hỏng do nguyên nhân bên ngoài, tất
                                                    cả pin và phụ kiện đều không phải được đổi trả.</p>
                                            </div>
                                        </div> -->
                                        {!! $value->detail !!}
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    @endif


                    <div class="arrco_block-element_single">
                        <div class="arrco_title">
                            <span class="text_left">Chính sách bảo mật thông tin</span>
                            <span class="icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="38" height="38" viewBox="0 0 38 38"
                                    fill="none">
                                    <path
                                        d="M19.0013 3.1665C10.2771 3.1665 3.16797 10.2757 3.16797 18.9998C3.16797 27.724 10.2771 34.8332 19.0013 34.8332C27.7255 34.8332 34.8346 27.724 34.8346 18.9998C34.8346 10.2757 27.7255 3.1665 19.0013 3.1665ZM25.4296 17.844L19.8405 23.4332C19.603 23.6707 19.3021 23.7815 19.0013 23.7815C18.7005 23.7815 18.3996 23.6707 18.1621 23.4332L12.573 17.844C12.1138 17.3848 12.1138 16.6248 12.573 16.1657C13.0321 15.7065 13.7921 15.7065 14.2513 16.1657L19.0013 20.9157L23.7513 16.1657C24.2105 15.7065 24.9705 15.7065 25.4296 16.1657C25.8888 16.6248 25.8888 17.369 25.4296 17.844Z"
                                        fill="#343944" />
                                </svg>
                            </span>
                        </div>
                        <div class="arrco_content_block">
                            <div class="entry">
                                <div class="title_content">
                                    <h3>Chính sách bảo mật thông tin</h3>
                                </div>
                                <div class="text">
                                    <p>OSAKAR luôn ưu tiên tuyệt đối việc bảo vệ thông tin cá nhân và các quyền lợi hợp
                                        pháp của khách hàng.</p>
                                    <br>
                                    <p><strong>Cam kết của OSAKAR</strong></p>
                                    <br>
                                    <p>OSAKAR cam kết tôn trọng thông tin cá nhân của tất cả khách hàng và nhận thức rõ
                                        ràng khách hàng mong muốn biết cách chúng tôi thu thập, quản lý và lưu trữ thông
                                        tin cá nhân của họ.</p>
                                    <p>Chính vì điều này, tại OSAKAR, chúng tôi chỉ thu thập thông tin cá nhân cần thiết
                                        và duy nhất khi được sự cho phép của khách hàng. Chúng tôi cam kết chỉ sử dụng
                                        những thông tin này cho các mục đích đã quy định rõ trong Chính sách Bảo mật
                                        Thông tin, như được đề cập chi tiết bên dưới. Chúng tôi cam kết không bao giờ
                                        chia sẻ thông tin cá nhân này với bất kỳ bên thứ ba nào mà không có sự đồng ý rõ
                                        ràng từ phía khách hàng.</p>
                                    <br>
                                    <p><strong>Chính sách bảo mật thông tin</strong></p>
                                    <br>
                                    <p><strong>1. Phạm vi áp dụng</strong></p>
                                    <p>Chính sách này áp dụng cho toàn bộ Dịch vụ của OSAKAR, bao gồm tất cả thiết bị,
                                        trang web và ứng dụng trực tuyến của OSAKAR mà đề cập hoặc liên kết đến Chính
                                        sách Bảo mật thông tin cá nhân này. Chính sách này có hiệu lực khi khách hàng
                                        truy cập vào website, sử dụng Dịch vụ trên trang web của OSAKAR, và tại bất kỳ
                                        thời điểm nào khách hàng sử dụng Dịch vụ trên trang web do OSAKAR cung cấp. Việc
                                        tiếp cận và sử dụng các Dịch vụ này đồng nghĩa với khách hàng mặc định đồng ý và
                                        tuân thủ các điều khoản cụ thể được quy định trong chính sách này.</p>
                                    <br>
                                    <p><strong>2. Thông tin OSAKAR thu thập</strong></p>
                                    <p>Tại OSAKAR, chúng tôi thu thập thông tin của khách hàng theo nhiều cách:</p>
                                    <p>* Thông tin khách hàng trực tiếp cung cấp cho OSAKAR</p>
                                    <p>* Thông tin OSAKAR thu thập về việc khách hàng sử dụng Dịch vụ của Chúng tôi</p>
                                    <p>* Thông tin chúng tôi thu được từ các nguồn của bên thứ ba</p>
                                    <p>Chúng tôi cũng có thể tìm kiếm sự đồng ý của Khách hàng để thu thập những thông
                                        tin khác không được mô tả trong Chính sách bảo mật thông tin này.</p>
                                    <br>
                                    <p><strong>3. Sử dụng thông tin khách hàng</strong></p>
                                    <p>Những thông tin mà chúng tôi thu thập của khách hàng chủ yếu để phục vụ cho mục
                                        đích hỗ trợ, duy trì mối liên hệ với khách hàng như:</p>
                                    <p>* Duy trì liên lạc với Khách hàng, giải đáp các thắc mắc của Khách hàng liên quan
                                        đến Sản phẩm và Dịch vụ của OSAKAR</p>
                                    <p>* Thiết lập các chương trình hỗ trợ khách hàng thân thiết hoặc các chương trình
                                        xúc tiến thương mại khác.</p>
                                    <p>* Nâng cao chất lượng Sản phẩm và Dịch vụ của OSAKAR và/hoặc các Sản phẩm và Dịch
                                        vụ của các Công ty liên kết của OSAKAR ("Đơn vị trực thuộc").</p>
                                    <p>* Thông báo đến Khách hàng các Thông tin khuyến mại, quảng cáo hoặc cho các mục
                                        đích tiếp thị trực tiếp, xúc tiến thương mại khác khi có sự đồng ý trước của
                                        Khách hàng.</p>
                                    <p>* Gửi thư ngỏ, đơn đặt hàng, thư cảm ơn.</p>
                                    <p>* Hỗ trợ khi Khách hàng mua xe và/hoặc sử dụng Sản phẩm, Dịch vụ của OSAKAR.</p>
                                    <p>* Xử lý các vấn đề liên quan đến việc sử dụng Sản phẩm và Dịch vụ của Khách hàng
                                        hoặc giao dịch giữa OSAKAR và Khách hàng.</p>
                                    <p>* Đánh giá và phân tích thị trường, khách hàng, Sản phẩm, Dịch vụ của OSAKAR.</p>
                                    <br>
                                    <p><strong>4. Chia sẻ thông tin khách hàng</strong></p>
                                    <p>Các thông tin cá nhân của Khách hàng mà OSAKAR thu thập có thể được chia sẻ trong
                                        nội bộ doanh nghiệp của chúng tôi, nhưng chỉ cho những người cần thông tin đó để
                                        cung cấp thêm Dịch vụ hoặc để hỗ trợ các yêu cầu của Khách hàng.</p>
                                    <p>Ngoài ra, trong phạm vi cần thiết để cung cấp các Sản phẩm và Dịch vụ của OSAKAR
                                        với chất lượng tốt nhất, các thông tin này cũng có thể được tiết lộ với các tổ
                                        chức/doanh nghiệp sau:</p>
                                    <p>* Nhà cung cấp dịch vụ - Những công ty được tin tưởng lựa chọn để cung cấp các
                                        dịch vụ cho chúng tôi hoặc thay mặt chúng tôi. Bao gồm nhưng không giới hạn ở
                                        các công ty giúp chúng tôi ở khâu sửa chữa, trung tâm liên hệ khách hàng, hoạt
                                        động chăm sóc khách hàng, quảng cáo, thực hiện khảo sát sự hài lòng của khách
                                        hàng, lập hóa đơn hoặc thay mặt chúng tôi gửi email. Những nhà cung cấp này cũng
                                        cam kết bảo vệ thông tin cá nhân của bạn.</p>
                                    <p>* Các chi nhánh – toàn thể các công ty của OSAKAR</p>
                                    <p>* Đối tác kinh doanh - Những công ty được tin cậy có thể cung cấp thông tin về
                                        các sản phẩm và dịch vụ mà bạn có thể căn.</p>
                                    <p>* Thi hành luật - Khi chúng tôi được yêu cầu cung cấp thông tin để bảo vệ OSAKAR
                                        hoặc người dùng của OSAKAR.</p>
                                    <p>* Các bên khác được Khách hàng đồng ý hoặc theo chỉ dẫn của Khách hàng: Ngoài nội
                                        dung công khai được quy định trong Chính sách bảo mật này, chúng tôi có thể chia
                                        sẻ thông tin về Khách hàng với các bên thứ ba khi Khách hàng đồng ý riêng hoặc
                                        yêu cầu việc chia sẻ đó.</p>
                                    <p>* Các bên khác có liên quan đến giao dịch của Công ty: Chúng tôi có thể tiết lộ
                                        thông tin của Khách hàng cho một bên thứ ba như là một phần của việc sáp nhập
                                        hoặc chuyển nhượng, mua lại hoặc bán hoặc trong trường hợp phá sản.</p>
                                    <br>
                                    <p><strong>5. Bảo mật thông tin khách hàng</strong></p>
                                    <p>OSAKAR sử dụng các biện pháp bảo vệ vật lý và kỹ thuật để đảm bảo an toàn thông
                                        tin cá nhân của Khách hàng mà chúng tôi thu thập. Tuy nhiên, Khách hàng cần nhận
                                        thức rằng không có trang web, đường truyền internet, hệ thống máy tính hoặc kết
                                        nối không dây nào là hoàn toàn bảo mật.</p>
                                    <br>
                                    <p><strong>6. Thời gian lưu trữ thông tin khách hàng</strong></p>
                                    <p>Thông tin của Khách hàng mà OSAKAR thu thập sẽ được lưu giữ chỉ trong thời gian
                                        cần thiết để phục vụ các mục đích đã được quy định trong Mục 3 của Chính sách
                                        này. Chúng tôi cam kết xóa hoặc hủy thông tin của Khách hàng khi không còn cần
                                        thiết.</p>
                                    <br>
                                    <p><strong>7. Quyền lợi của khách hàng</strong></p>
                                    <p>Khách hàng khi cung cấp thông tin cho OSAKAR được đảm bảo các quyền bảo mật thông
                                        tin theo cam kết trong Chính sách này.</p>
                                    <br>
                                    <p><strong>8. Trách nhiệm của khách hàng</strong></p>
                                    <p>Khi truy cập và sử dụng Dịch vụ trên website của OSAKAR, Khách hàng đã đồng ý với
                                        các điều khoản trong Chính sách bảo mật thông tin của chúng tôi. Dưới đây là cam
                                        kết mà Khách hàng cần tuân thủ khi cung cấp thông tin cho OSAKAR:</p>
                                    <p>Cung cấp thông tin chính xác và hợp pháp cho OSAKAR khi được yêu cầu và đồng ý
                                        cung cấp. Khách hàng chịu trách nhiệm hoàn toàn nếu thông tin cung cấp không
                                        chính xác, không hợp pháp, gây gián đoạn hoặc không thể thực hiện Dịch vụ, giao
                                        dịch giữa OSAKAR và Khách hàng, hoặc giữa OSAKAR và bên thứ ba.</p>
                                    <p>Không sử dụng bất kỳ chương trình, công cụ hoặc hình thức nào để can thiệp vào hệ
                                        thống, làm thay đổi cấu trúc dữ liệu của Dịch vụ, giao diện của website OSAKAR
                                        hoặc các tính năng hiện có trên website.</p>
                                    <p>Không phát tán, truyền bá hoặc cổ vũ cho bất kỳ hoạt động nào nhằm can thiệp, phá
                                        hoại hoặc xâm nhập vào dữ liệu của hệ thống website OSAKAR.</p>
                                    <p>Không đăng tải hoặc truyền bá nội dung vi phạm pháp luật hoặc đạo đức xã hội trên
                                        website của OSAKAR.</p>
                                    <p><strong>Mọi vi phạm sẽ bị xử lý theo quy định của pháp luật.</strong></p>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="arrco_block-element_single">
                        <div class="arrco_title">
                            <span class="text_left">Chính sạch sử dụng Cookie</span>
                            <span class="icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="38" height="38" viewBox="0 0 38 38"
                                    fill="none">
                                    <path
                                        d="M19.0013 3.1665C10.2771 3.1665 3.16797 10.2757 3.16797 18.9998C3.16797 27.724 10.2771 34.8332 19.0013 34.8332C27.7255 34.8332 34.8346 27.724 34.8346 18.9998C34.8346 10.2757 27.7255 3.1665 19.0013 3.1665ZM25.4296 17.844L19.8405 23.4332C19.603 23.6707 19.3021 23.7815 19.0013 23.7815C18.7005 23.7815 18.3996 23.6707 18.1621 23.4332L12.573 17.844C12.1138 17.3848 12.1138 16.6248 12.573 16.1657C13.0321 15.7065 13.7921 15.7065 14.2513 16.1657L19.0013 20.9157L23.7513 16.1657C24.2105 15.7065 24.9705 15.7065 25.4296 16.1657C25.8888 16.6248 25.8888 17.369 25.4296 17.844Z"
                                        fill="#343944" />
                                </svg>
                            </span>
                        </div>
                        <div class="arrco_content_block">
                            <div class="entry">
                                <div class="title_content">
                                    <h3>Chính sách và điều khoản Cookie</h3>
                                </div>
                                <div class="text">
                                    <p><strong>1. Cookie là gì?</strong></p>
                                    <p>Cookie là những tập tin nhỏ lưu trữ thông tin trên máy tính, TV, điện thoại di
                                        động hoặc thiết bị khác của Khách hàng. Chúng cho phép thực thể đặt cookie trên
                                        thiết bị của bạn nhận ra bạn trên các trang web, dịch vụ, thiết bị, và phiên
                                        duyệt web khác nhau. Cookie phục vụ cho nhiều mục đích hữu ích.</p>
                                    <p>OSAKAR sử dụng các cookie để nhận diện người dùng quay lại và tiện ích thông tin
                                        liên quan của họ, giúp Khách hàng tránh việc phải nhập thông tin nhiều lần. Các
                                        cookie cũng hỗ trợ OSAKAR trong việc hiểu lưu lượng truy cập trên website, từ đó
                                        cải thiện trải nghiệm sử dụng và tối ưu hóa website cho Khách hàng.</p>
                                    <br>
                                    <p><strong>2. Cách điều chỉnh cài đặt Cookie</strong></p>
                                    <p>Khi Khách hàng sử dụng trình duyệt web để truy cập Dịch vụ, hầu hết các trình
                                        duyệt cho phép chấp nhận tất cả cookie, từ chối tất cả cookie hoặc cảnh báo
                                        trước khi cookie được lưu trữ. Vui lòng kiểm tra menu trợ giúp trong trình duyệt
                                        web của bạn để biết cách điều chỉnh tùy chọn cookie.</p>
                                    <br>
                                    <p><strong>3. Lưu ý khi vô hiệu hóa Cookie</strong></p>
                                    <p>Nếu Khách hàng chặn hoặc xóa cookie, OSAKAR có thể không thể khôi phục các tùy
                                        chọn hoặc cài đặt tùy chỉnh mà Khách hàng đã thiết lập trước đó, dẫn đến hạn chế
                                        khả năng cá nhân hóa trải nghiệm trực tuyến của Khách hàng.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="arrco_block-element_single">
                        <div class="arrco_title">
                            <span class="text_left">Phương thức thanh toán</span>
                            <span class="icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="38" height="38" viewBox="0 0 38 38"
                                    fill="none">
                                    <path
                                        d="M19.0013 3.1665C10.2771 3.1665 3.16797 10.2757 3.16797 18.9998C3.16797 27.724 10.2771 34.8332 19.0013 34.8332C27.7255 34.8332 34.8346 27.724 34.8346 18.9998C34.8346 10.2757 27.7255 3.1665 19.0013 3.1665ZM25.4296 17.844L19.8405 23.4332C19.603 23.6707 19.3021 23.7815 19.0013 23.7815C18.7005 23.7815 18.3996 23.6707 18.1621 23.4332L12.573 17.844C12.1138 17.3848 12.1138 16.6248 12.573 16.1657C13.0321 15.7065 13.7921 15.7065 14.2513 16.1657L19.0013 20.9157L23.7513 16.1657C24.2105 15.7065 24.9705 15.7065 25.4296 16.1657C25.8888 16.6248 25.8888 17.369 25.4296 17.844Z"
                                        fill="#343944" />
                                </svg>
                            </span>
                        </div>
                        <div class="arrco_content_block">
                            <div class="entry">
                                <div class="title_content">
                                    <h3>Phương thức thanh toán</h3>
                                </div>
                                <div class="text">
                                    <p>Quý khách sau khi chọn sản phẩm, tiến hành đặt hàng và chọn cửa hàng gần nhất của
                                        OSAKAR để nhận xe. Thông tin sẽ được gửi về cửa hàng theo yêu cầu, đại diện của
                                        hàng sẽ liên hệ với quý khách để tiến hành thủ tục thanh toán và bàn giao xe tại
                                        cửa hàng. Giá bán sẽ là giá niêm yết theo trên website khi khách đặt hàng +
                                        Chương trình khuyến mãi của từng cửa hàng (nếu có). Giá bán chưa bao gồm thuế
                                        VAT, chi phí đăng ký biển số, và các loại phí khác (nếu có) theo quy định pháp
                                        luật. Tùy theo từng Tỉnh/Thành, Quận/Huyện chi phí đăng ký sẽ khác nhau.</p>
                                    <p>Chính vì vậy, khi tới cửa hàng làm thủ tục nhận xe quý khách có thể lựa chọn một
                                        trong các phương thức thanh toán dưới đây tùy theo chính sách của từng cửa hàng:
                                    </p>
                                    <p>- Tiền mặt</p>
                                    <p>- Thanh toán qua thẻ Credit/Debit</p>
                                    <p>- Thanh toán trả góp</p>
                                    <p>- Thanh toán qua ví điện tử</p>
                                    <br>
                                    <p><strong>1. Thanh Toán Tiền Mặt</strong></p>
                                    <p>Quý khách chọn hình thức thanh toán bằng tiền mặt sẽ thanh toán trực tiếp với cửa
                                        hàng khi quý khách làm thủ tục thanh toán và nhận xe.</p>
                                    <br>
                                    <p><strong>2. Thanh Toán Qua Thẻ Credit/Debit</strong></p>
                                    <p>Phương thức thanh toán qua Thẻ Credit/Debit sẽ phụ thuộc vào từng cửa hàng. Quý
                                        khách vui lòng liên hệ hoặc trao đổi với cửa hàng nhận xe trước khi thanh toán.
                                    </p>
                                    <br>
                                    <p><strong>3. Thanh Toán Trả Góp</strong></p>
                                    <p>Hiện tại, tùy theo từng cửa hàng sẽ có hình thức thanh toán trả góp khác nhau.
                                        Chính vì vậy, Quý khách hàng nếu có nhu cầu trả góp vui lòng liên hệ trước với
                                        cửa hàng để có thể nhận được tư vấn cụ thể nhất</p>
                                    <br>
                                    <p><strong>4. Thanh Toán Qua Ví Điện Tử</strong></p>
                                    <p>Quý khách chọn hình thức thanh toán qua ví điện tử như MoMo, Zalo Pay,...có thể
                                        yêu cầu trực tiếp với từng cửa hàng.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>

@endsection