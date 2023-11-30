@extends('/web/index')
@section('content')

<main class="page-content">
    <h1 style="display: none;">About us</h1>
    <div class="about_us_page">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-md-12">
                    <div class="video_intro">
                        <iframe width="100%" height="570" src="https://www.youtube.com/embed/l44-kmEcKI4" title="Livestream XE ĐIỆN OSAKAR NISPA VERA MỚI NHẤT ĐANG CÓ TẠI XE ĐẠP 107" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="section sec-misstion-wrapper">
                <div class="parallax-bg">
                    <ul class="nav nav-pills cars-nav bikes-nav tab-buttons" id="pills-tab" role="tablist">
                        <li class="nav-item highend-bike-tab" role="presentation">
                            <span class="highend-bike" id="highend-bike-tab" data-toggle="pill" role="tab" aria-controls="highend-bike" aria-selected="true">
                                Tầm nhìn & Sứ mệnh
                            </span>
                        </li>
                        <li class="nav-item midend-bike-tab" role="presentation">
                            <span class="midend-bike" id="midend-bike-tab" data-toggle="pill" role="tab" aria-controls="midend-bike" aria-selected="false">
                                Giá trị cốt lõi
                            </span>
                        </li>
                    </ul>
                    <div class="tab-content" id="pills-tabContent">
                        <div class="highend-bike" id="highend-bike" role="tabpanel" aria-labelledby="highend-bike-tab">
                            <div class="mission-content">
                                <div class="mission-head">
                                    <h2>Tầm nhìn & Sứ mệnh</h2>
                                    <p>OSAKAR định hướng phát triển thành một Tập đoàn Công nghệ - Thương mại Dịch vụ hàng đầu khu vực, không ngừng đổi mới, sáng tạo để kiến tạo hệ sinh thái các sản phẩm dịch vụ đẳng cấp, góp phần nâng cao chất lượng cuộc sống của người Việt và nâng tầm vị thế của thương hiệu Việt trên trường quốc tế.</p>
                                </div>
                                <div class="row">
                                    <div class="col-xs-6 col-sm-4 col-md-4 col-lg-4">
                                        <div class="mission-item">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 48 48" fill="none">
                                                <path d="M24 45.5C12.14 45.5 2.5 35.86 2.5 24C2.5 12.14 12.14 2.5 24 2.5C24.82 2.5 25.5 3.18 25.5 4C25.5 4.82 24.82 5.5 24 5.5C13.8 5.5 5.5 13.8 5.5 24C5.5 34.2 13.8 42.5 24 42.5C34.2 42.5 42.5 34.2 42.5 24C42.5 23.18 43.18 22.5 44 22.5C44.82 22.5 45.5 23.18 45.5 24C45.5 35.86 35.86 45.5 24 45.5Z" fill="#5F0D0E" />
                                                <path d="M30.093 8.21456C29.8712 8.87606 30.0528 9.58859 30.5668 10.0741L32.6751 12.0654L32.1774 14.8773C32.056 15.563 32.3414 16.2428 32.9222 16.6516C33.503 17.0604 34.2585 17.1133 34.8939 16.7897L37.5 15.4621L40.1061 16.7897C40.3825 16.9304 40.6815 17 40.9791 17C41.3657 17 41.7497 16.8826 42.0778 16.6516C42.6586 16.2428 42.944 15.563 42.8226 14.8773L42.3249 12.0654L44.4332 10.0741C44.9472 9.58859 45.1288 8.87606 44.907 8.21456C44.6852 7.55305 44.1062 7.07988 43.3956 6.97978L40.4819 6.56952L39.1788 4.01123C38.8613 3.38743 38.218 3 37.5001 3C36.7822 3 36.1389 3.38743 35.8212 4.01123L34.5182 6.56952L31.6043 6.97978C30.8938 7.07988 30.3148 7.55305 30.093 8.21456ZM35.5872 9.01053C36.0183 8.94983 36.3909 8.68756 36.5837 8.3091L37.5001 6.50994L38.4165 8.3091C38.6093 8.68756 38.9819 8.94983 39.4129 9.01053L41.4621 9.29905L39.9793 10.6996C39.6674 10.9942 39.5251 11.4186 39.5987 11.8346L39.9486 13.812L38.1159 12.8783C37.7304 12.6819 37.2697 12.6819 36.8843 12.8783L35.0515 13.812L35.4015 11.8346C35.4751 11.4186 35.3328 10.9942 35.0209 10.6996L33.5381 9.29905L35.5872 9.01053Z" fill="#ED2025" />
                                                <path d="M22.859 32.0016V20.5616L20.159 22.2216V19.2216L22.859 17.6016H25.639V32.0016H22.859Z" fill="#ED2025" />
                                            </svg>
                                            <p>Sản phẩm mang lại sự tiện lợi</p>
                                        </div>
                                    </div>
                                    <div class="col-xs-6 col-sm-4 col-md-4 col-lg-4">
                                        <div class="mission-item">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 48 48" fill="none">
                                                <path d="M24 45.5C12.14 45.5 2.5 35.86 2.5 24C2.5 12.14 12.14 2.5 24 2.5C24.82 2.5 25.5 3.18 25.5 4C25.5 4.82 24.82 5.5 24 5.5C13.8 5.5 5.5 13.8 5.5 24C5.5 34.2 13.8 42.5 24 42.5C34.2 42.5 42.5 34.2 42.5 24C42.5 23.18 43.18 22.5 44 22.5C44.82 22.5 45.5 23.18 45.5 24C45.5 35.86 35.86 45.5 24 45.5Z" fill="#5F0D0E" />
                                                <path d="M30.093 8.21456C29.8712 8.87606 30.0528 9.58859 30.5668 10.0741L32.6751 12.0654L32.1774 14.8773C32.056 15.563 32.3414 16.2428 32.9222 16.6516C33.503 17.0604 34.2585 17.1133 34.8939 16.7897L37.5 15.4621L40.1061 16.7897C40.3825 16.9304 40.6815 17 40.9791 17C41.3657 17 41.7497 16.8826 42.0778 16.6516C42.6586 16.2428 42.944 15.563 42.8226 14.8773L42.3249 12.0654L44.4332 10.0741C44.9472 9.58859 45.1288 8.87606 44.907 8.21456C44.6852 7.55305 44.1062 7.07988 43.3956 6.97978L40.4819 6.56952L39.1788 4.01123C38.8613 3.38743 38.218 3 37.5001 3C36.7822 3 36.1389 3.38743 35.8212 4.01123L34.5182 6.56952L31.6043 6.97978C30.8938 7.07988 30.3148 7.55305 30.093 8.21456ZM35.5872 9.01053C36.0183 8.94983 36.3909 8.68756 36.5837 8.3091L37.5001 6.50994L38.4165 8.3091C38.6093 8.68756 38.9819 8.94983 39.4129 9.01053L41.4621 9.29905L39.9793 10.6996C39.6674 10.9942 39.5251 11.4186 39.5987 11.8346L39.9486 13.812L38.1159 12.8783C37.7304 12.6819 37.2697 12.6819 36.8843 12.8783L35.0515 13.812L35.4015 11.8346C35.4751 11.4186 35.3328 10.9942 35.0209 10.6996L33.5381 9.29905L35.5872 9.01053Z" fill="#ED2025" />
                                                <path d="M18.4648 31.9808V29.6208L24.5048 24.2608C24.9582 23.8608 25.2782 23.4841 25.4648 23.1308C25.6515 22.7775 25.7448 22.4475 25.7448 22.1408C25.7448 21.7008 25.6548 21.3108 25.4748 20.9708C25.2948 20.6241 25.0415 20.3541 24.7148 20.1608C24.3882 19.9608 24.0048 19.8608 23.5648 19.8608C23.1048 19.8608 22.6982 19.9675 22.3448 20.1808C21.9982 20.3875 21.7282 20.6641 21.5348 21.0108C21.3415 21.3508 21.2515 21.7208 21.2648 22.1208H18.4648C18.4648 21.1341 18.6815 20.2808 19.1148 19.5608C19.5482 18.8408 20.1515 18.2841 20.9248 17.8908C21.6982 17.4975 22.5982 17.3008 23.6248 17.3008C24.5648 17.3008 25.4048 17.5075 26.1448 17.9208C26.8915 18.3275 27.4782 18.8975 27.9048 19.6308C28.3315 20.3641 28.5448 21.2141 28.5448 22.1808C28.5448 22.8941 28.4448 23.4875 28.2448 23.9608C28.0448 24.4275 27.7482 24.8608 27.3548 25.2608C26.9615 25.6541 26.4782 26.1008 25.9048 26.6008L22.0048 30.0208L21.7848 29.4208H28.5448V31.9808H18.4648Z" fill="#ED2025" />
                                            </svg>
                                            <p>Phù hợp với mọi lứa tuổi, mọi môi trường sống</p>
                                        </div>
                                    </div>
                                    <div class="col-xs-6 col-sm-4 col-md-4 col-lg-4">
                                        <div class="mission-item">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 48 48" fill="none">
                                                <path d="M24 45.5C12.14 45.5 2.5 35.86 2.5 24C2.5 12.14 12.14 2.5 24 2.5C24.82 2.5 25.5 3.18 25.5 4C25.5 4.82 24.82 5.5 24 5.5C13.8 5.5 5.5 13.8 5.5 24C5.5 34.2 13.8 42.5 24 42.5C34.2 42.5 42.5 34.2 42.5 24C42.5 23.18 43.18 22.5 44 22.5C44.82 22.5 45.5 23.18 45.5 24C45.5 35.86 35.86 45.5 24 45.5Z" fill="#5F0D0E" />
                                                <path d="M30.093 8.21456C29.8712 8.87606 30.0528 9.58859 30.5668 10.0741L32.6751 12.0654L32.1774 14.8773C32.056 15.563 32.3414 16.2428 32.9222 16.6516C33.503 17.0604 34.2585 17.1133 34.8939 16.7897L37.5 15.4621L40.1061 16.7897C40.3825 16.9304 40.6815 17 40.9791 17C41.3657 17 41.7497 16.8826 42.0778 16.6516C42.6586 16.2428 42.944 15.563 42.8226 14.8773L42.3249 12.0654L44.4332 10.0741C44.9472 9.58859 45.1288 8.87606 44.907 8.21456C44.6852 7.55305 44.1062 7.07988 43.3956 6.97978L40.4819 6.56952L39.1788 4.01123C38.8613 3.38743 38.218 3 37.5001 3C36.7822 3 36.1389 3.38743 35.8212 4.01123L34.5182 6.56952L31.6043 6.97978C30.8938 7.07988 30.3148 7.55305 30.093 8.21456ZM35.5872 9.01053C36.0183 8.94983 36.3909 8.68756 36.5837 8.3091L37.5001 6.50994L38.4165 8.3091C38.6093 8.68756 38.9819 8.94983 39.4129 9.01053L41.4621 9.29905L39.9793 10.6996C39.6674 10.9942 39.5251 11.4186 39.5987 11.8346L39.9486 13.812L38.1159 12.8783C37.7304 12.6819 37.2697 12.6819 36.8843 12.8783L35.0515 13.812L35.4015 11.8346C35.4751 11.4186 35.3328 10.9942 35.0209 10.6996L33.5381 9.29905L35.5872 9.01053Z" fill="#ED2025" />
                                                <path d="M23.1918 32.2616C22.4718 32.2616 21.7851 32.1183 21.1318 31.8316C20.4785 31.5383 19.9085 31.1283 19.4218 30.6016C18.9418 30.0749 18.5985 29.4549 18.3918 28.7416L21.0318 28.0416C21.1718 28.5683 21.4451 28.9783 21.8518 29.2716C22.2651 29.5583 22.7118 29.7016 23.1918 29.7016C23.6051 29.7016 23.9818 29.6016 24.3218 29.4016C24.6685 29.2016 24.9418 28.9316 25.1418 28.5916C25.3485 28.2516 25.4518 27.8749 25.4518 27.4616C25.4518 26.8416 25.2385 26.3116 24.8118 25.8716C24.3918 25.4249 23.8518 25.2016 23.1918 25.2016C22.9918 25.2016 22.7985 25.2316 22.6118 25.2916C22.4251 25.3449 22.2451 25.4216 22.0718 25.5216L20.8518 23.3816L25.4318 19.5816L25.6318 20.1616H18.9518V17.6016H27.9518V20.1616L24.3918 23.6016L24.3718 22.8416C25.1985 22.9683 25.8951 23.2583 26.4618 23.7116C27.0351 24.1583 27.4685 24.7116 27.7618 25.3716C28.0618 26.0249 28.2118 26.7216 28.2118 27.4616C28.2118 28.3683 27.9818 29.1849 27.5218 29.9116C27.0618 30.6316 26.4518 31.2049 25.6918 31.6316C24.9318 32.0516 24.0985 32.2616 23.1918 32.2616Z" fill="#ED2025" />
                                            </svg>
                                            <p>Dẫn đầu về chất lượng sản phẩm</p>
                                        </div>
                                    </div>
                                    <div class="col-xs-6 col-sm-4 col-md-4 col-lg-4">
                                        <div class="mission-item">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 48 48" fill="none">
                                                <path d="M24 45.5C12.14 45.5 2.5 35.86 2.5 24C2.5 12.14 12.14 2.5 24 2.5C24.82 2.5 25.5 3.18 25.5 4C25.5 4.82 24.82 5.5 24 5.5C13.8 5.5 5.5 13.8 5.5 24C5.5 34.2 13.8 42.5 24 42.5C34.2 42.5 42.5 34.2 42.5 24C42.5 23.18 43.18 22.5 44 22.5C44.82 22.5 45.5 23.18 45.5 24C45.5 35.86 35.86 45.5 24 45.5Z" fill="#5F0D0E" />
                                                <path d="M30.093 8.21456C29.8712 8.87606 30.0528 9.58859 30.5668 10.0741L32.6751 12.0654L32.1774 14.8773C32.056 15.563 32.3414 16.2428 32.9222 16.6516C33.503 17.0604 34.2585 17.1133 34.8939 16.7897L37.5 15.4621L40.1061 16.7897C40.3825 16.9304 40.6815 17 40.9791 17C41.3657 17 41.7497 16.8826 42.0778 16.6516C42.6586 16.2428 42.944 15.563 42.8226 14.8773L42.3249 12.0654L44.4332 10.0741C44.9472 9.58859 45.1288 8.87606 44.907 8.21456C44.6852 7.55305 44.1062 7.07988 43.3956 6.97978L40.4819 6.56952L39.1788 4.01123C38.8613 3.38743 38.218 3 37.5001 3C36.7822 3 36.1389 3.38743 35.8212 4.01123L34.5182 6.56952L31.6043 6.97978C30.8938 7.07988 30.3148 7.55305 30.093 8.21456ZM35.5872 9.01053C36.0183 8.94983 36.3909 8.68756 36.5837 8.3091L37.5001 6.50994L38.4165 8.3091C38.6093 8.68756 38.9819 8.94983 39.4129 9.01053L41.4621 9.29905L39.9793 10.6996C39.6674 10.9942 39.5251 11.4186 39.5987 11.8346L39.9486 13.812L38.1159 12.8783C37.7304 12.6819 37.2697 12.6819 36.8843 12.8783L35.0515 13.812L35.4015 11.8346C35.4751 11.4186 35.3328 10.9942 35.0209 10.6996L33.5381 9.29905L35.5872 9.01053Z" fill="#ED2025" />
                                                <path d="M24.6077 32.0016V29.7616H18.3477V27.2216L22.8877 17.6016H26.0077L21.4677 27.2216H24.6077V23.6216H27.3677V27.2216H28.6477V29.7616H27.3677V32.0016H24.6077Z" fill="#ED2025" />
                                            </svg>
                                            <p>Kiến tạo hệ sinh thái các sản phẩm dịch vụ đẳng cấp</p>
                                        </div>
                                    </div>
                                    <div class="col-xs-6 col-sm-4 col-md-4 col-lg-4">
                                        <div class="mission-item">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 48 48" fill="none">
                                                <path d="M24 45.5C12.14 45.5 2.5 35.86 2.5 24C2.5 12.14 12.14 2.5 24 2.5C24.82 2.5 25.5 3.18 25.5 4C25.5 4.82 24.82 5.5 24 5.5C13.8 5.5 5.5 13.8 5.5 24C5.5 34.2 13.8 42.5 24 42.5C34.2 42.5 42.5 34.2 42.5 24C42.5 23.18 43.18 22.5 44 22.5C44.82 22.5 45.5 23.18 45.5 24C45.5 35.86 35.86 45.5 24 45.5Z" fill="#5F0D0E" />
                                                <path d="M30.093 8.21456C29.8712 8.87606 30.0528 9.58859 30.5668 10.0741L32.6751 12.0654L32.1774 14.8773C32.056 15.563 32.3414 16.2428 32.9222 16.6516C33.503 17.0604 34.2585 17.1133 34.8939 16.7897L37.5 15.4621L40.1061 16.7897C40.3825 16.9304 40.6815 17 40.9791 17C41.3657 17 41.7497 16.8826 42.0778 16.6516C42.6586 16.2428 42.944 15.563 42.8226 14.8773L42.3249 12.0654L44.4332 10.0741C44.9472 9.58859 45.1288 8.87606 44.907 8.21456C44.6852 7.55305 44.1062 7.07988 43.3956 6.97978L40.4819 6.56952L39.1788 4.01123C38.8613 3.38743 38.218 3 37.5001 3C36.7822 3 36.1389 3.38743 35.8212 4.01123L34.5182 6.56952L31.6043 6.97978C30.8938 7.07988 30.3148 7.55305 30.093 8.21456ZM35.5872 9.01053C36.0183 8.94983 36.3909 8.68756 36.5837 8.3091L37.5001 6.50994L38.4165 8.3091C38.6093 8.68756 38.9819 8.94983 39.4129 9.01053L41.4621 9.29905L39.9793 10.6996C39.6674 10.9942 39.5251 11.4186 39.5987 11.8346L39.9486 13.812L38.1159 12.8783C37.7304 12.6819 37.2697 12.6819 36.8843 12.8783L35.0515 13.812L35.4015 11.8346C35.4751 11.4186 35.3328 10.9942 35.0209 10.6996L33.5381 9.29905L35.5872 9.01053Z" fill="#ED2025" />
                                                <path d="M23.2913 32.3016C22.5647 32.3016 21.8813 32.1516 21.2413 31.8516C20.608 31.5516 20.0613 31.1349 19.6013 30.6016C19.1413 30.0683 18.8113 29.4483 18.6113 28.7416L21.2313 28.0416C21.318 28.3816 21.4713 28.6749 21.6913 28.9216C21.918 29.1683 22.178 29.3616 22.4713 29.5016C22.7713 29.6349 23.078 29.7016 23.3913 29.7016C23.8047 29.7016 24.1813 29.6016 24.5213 29.4016C24.868 29.2016 25.1413 28.9316 25.3413 28.5916C25.548 28.2516 25.6513 27.8749 25.6513 27.4616C25.6513 27.0483 25.548 26.6716 25.3413 26.3316C25.1413 25.9916 24.868 25.7216 24.5213 25.5216C24.1813 25.3216 23.8047 25.2216 23.3913 25.2216C22.8847 25.2216 22.4713 25.3083 22.1513 25.4816C21.8313 25.6483 21.5913 25.8083 21.4313 25.9616L19.1313 25.2616L19.5713 17.6016H27.4313V20.1416H21.0713L22.0313 19.2416L21.7313 24.1816L21.2713 23.6216C21.6313 23.3283 22.0413 23.1149 22.5013 22.9816C22.9613 22.8483 23.3913 22.7816 23.7913 22.7816C24.698 22.7816 25.4947 22.9849 26.1813 23.3916C26.8747 23.7916 27.4147 24.3449 27.8013 25.0516C28.1947 25.7516 28.3913 26.5549 28.3913 27.4616C28.3913 28.3683 28.1547 29.1883 27.6813 29.9216C27.208 30.6483 26.5847 31.2283 25.8113 31.6616C25.038 32.0883 24.198 32.3016 23.2913 32.3016Z" fill="#ED2025" />
                                            </svg>
                                            <p>Hướng tới giải pháp về công nghệ để nâng cao chất lượng cuộc sống của người Việt</p>
                                        </div>
                                    </div>
                                    <div class="col-xs-6 col-sm-4 col-md-4 col-lg-4">
                                        <div class="mission-item">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 48 48" fill="none">
                                                <path d="M24 45.5C12.14 45.5 2.5 35.86 2.5 24C2.5 12.14 12.14 2.5 24 2.5C24.82 2.5 25.5 3.18 25.5 4C25.5 4.82 24.82 5.5 24 5.5C13.8 5.5 5.5 13.8 5.5 24C5.5 34.2 13.8 42.5 24 42.5C34.2 42.5 42.5 34.2 42.5 24C42.5 23.18 43.18 22.5 44 22.5C44.82 22.5 45.5 23.18 45.5 24C45.5 35.86 35.86 45.5 24 45.5Z" fill="#5F0D0E" />
                                                <path d="M30.093 8.21456C29.8712 8.87606 30.0528 9.58859 30.5668 10.0741L32.6751 12.0654L32.1774 14.8773C32.056 15.563 32.3414 16.2428 32.9222 16.6516C33.503 17.0604 34.2585 17.1133 34.8939 16.7897L37.5 15.4621L40.1061 16.7897C40.3825 16.9304 40.6815 17 40.9791 17C41.3657 17 41.7497 16.8826 42.0778 16.6516C42.6586 16.2428 42.944 15.563 42.8226 14.8773L42.3249 12.0654L44.4332 10.0741C44.9472 9.58859 45.1288 8.87606 44.907 8.21456C44.6852 7.55305 44.1062 7.07988 43.3956 6.97978L40.4819 6.56952L39.1788 4.01123C38.8613 3.38743 38.218 3 37.5001 3C36.7822 3 36.1389 3.38743 35.8212 4.01123L34.5182 6.56952L31.6043 6.97978C30.8938 7.07988 30.3148 7.55305 30.093 8.21456ZM35.5872 9.01053C36.0183 8.94983 36.3909 8.68756 36.5837 8.3091L37.5001 6.50994L38.4165 8.3091C38.6093 8.68756 38.9819 8.94983 39.4129 9.01053L41.4621 9.29905L39.9793 10.6996C39.6674 10.9942 39.5251 11.4186 39.5987 11.8346L39.9486 13.812L38.1159 12.8783C37.7304 12.6819 37.2697 12.6819 36.8843 12.8783L35.0515 13.812L35.4015 11.8346C35.4751 11.4186 35.3328 10.9942 35.0209 10.6996L33.5381 9.29905L35.5872 9.01053Z" fill="#ED2025" />
                                                <path d="M23.6993 32.3003C22.746 32.3003 21.8893 32.077 21.1293 31.6303C20.376 31.1836 19.7793 30.5636 19.3393 29.7703C18.8993 28.9703 18.6793 28.047 18.6793 27.0003V22.8203C18.6793 21.687 18.8993 20.7103 19.3393 19.8903C19.7793 19.0636 20.3993 18.4303 21.1993 17.9903C21.9993 17.5436 22.9393 17.3203 24.0193 17.3203C24.7193 17.3203 25.386 17.4236 26.0193 17.6303C26.6526 17.837 27.2326 18.187 27.7593 18.6803L25.8193 20.6203C25.5793 20.3803 25.3026 20.1936 24.9893 20.0603C24.676 19.927 24.3526 19.8603 24.0193 19.8603C23.4993 19.8603 23.046 19.9836 22.6593 20.2303C22.2793 20.4703 21.9826 20.787 21.7693 21.1803C21.5626 21.567 21.4593 21.9803 21.4593 22.4203V24.5603L20.9993 24.0603C21.4126 23.6403 21.8893 23.3203 22.4293 23.1003C22.976 22.8736 23.5393 22.7603 24.1193 22.7603C25.026 22.7603 25.8226 22.9636 26.5093 23.3703C27.2026 23.777 27.7426 24.3336 28.1293 25.0403C28.5226 25.747 28.7193 26.5536 28.7193 27.4603C28.7193 28.367 28.4893 29.187 28.0293 29.9203C27.5693 30.647 26.9593 31.227 26.1993 31.6603C25.4393 32.087 24.606 32.3003 23.6993 32.3003ZM23.6993 29.7003C24.1126 29.7003 24.4893 29.6003 24.8293 29.4003C25.176 29.2003 25.4493 28.9303 25.6493 28.5903C25.856 28.2503 25.9593 27.8736 25.9593 27.4603C25.9593 27.047 25.8593 26.6703 25.6593 26.3303C25.4593 25.9836 25.1893 25.7103 24.8493 25.5103C24.5093 25.3036 24.1326 25.2003 23.7193 25.2003C23.306 25.2003 22.926 25.3036 22.5793 25.5103C22.2393 25.7103 21.966 25.9836 21.7593 26.3303C21.5593 26.6703 21.4593 27.047 21.4593 27.4603C21.4593 27.8603 21.5593 28.2303 21.7593 28.5703C21.9593 28.9103 22.2293 29.1836 22.5693 29.3903C22.9093 29.597 23.286 29.7003 23.6993 29.7003Z" fill="#ED2025" />
                                            </svg>
                                            <p>Phấn đấu nâng tầm vị thế thương hiệu Việt</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="midend-bike" id="midend-bike" role="tabpanel" aria-labelledby="midend-bike-tab">
                            <div class="mission-content">
                                <div class="mission-head">
                                    <h2>Giá trị cốt lõi</h2>
                                </div>
                            </div>
                            <div class="about-topics">
                                <div class="about-topic">
                                    <img class="typography-about-topic-img" src="{{ asset('home/images/ic_baohanhvikh.png') }}" />
                                    <h4 class="typography-about-topic-headline">Chính sách bảo hành vì khách hàng</h4>
                                    <p class="typography-about-topic-intro">Bảo hành dành riêng cho bạn - Cam kết chất lượng và sự
                                        hài lòng của khách hàng là ưu tiên hàng đầu của chúng tôi.</p>
                                </div>
                                <div class="about-topic">
                                    <img class="typography-about-topic-img" src="{{ asset('home/images/ic_dichvuKHtotnhat.png') }}" />
                                    <h4 class="typography-about-topic-headline">Dịch vụ khách hàng tốt nhất</h4>
                                    <p class="typography-about-topic-intro">Dịch vụ khách hàng ưu việt - Tận tâm phục vụ, luôn lắng
                                        nghe và đáp ứng mong muốn của mọi khách hàng.</p>
                                </div>
                                <div class="about-topic">
                                    <img class="typography-about-topic-img" src="{{ asset('home/images/ic_spchatluongVN.png') }}" />
                                    <h4 class="typography-about-topic-headline">Sản phẩm chất lượng hàng đầu Việt Nam</h4>
                                    <p class="typography-about-topic-intro">Osakar luôn tự hào mang đến chất lượng vượt trội và đẳng
                                        cấp kết hợp với sự đa dạng về thiết kế và màu sắc của các mẫu xe.</p>
                                </div>
                            </div>
                            <div class="text-center">
                                <a class="cta-link" href="#" target="_blank">Về chúng tôi <img src="{{ asset('home/images/arrow-circle-right.png') }}" /></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="sec section-history">
            <div class="container">
                <div class="mission-content">
                    <div class="mission-head">
                        <h2>Lịch sử phát triển</h2>
                    </div>
                    <div class="parallax-bg">
                        <ul class="nav nav-pills cars-nav bikes-nav tab-buttons-slider" id="pills-tab" role="tablist">
                            <li class="nav-item history-one-tab" role="presentation">
                                <span class="history-one" id="history-one-tab" data-toggle="pill" role="tab" aria-controls="history-one" aria-selected="true">
                                    Quá trình hình thành và phát triển
                                </span>
                            </li>
                            <li class="nav-item history-two-tab" role="presentation">
                                <span class="history-two" id="history-two-tab" data-toggle="pill" role="tab" aria-controls="history-two" aria-selected="false">
                                    Các cột mốc quan trọng
                                </span>
                            </li>
                        </ul>
                        <div class="tab-content-slider" id="pills-tabContent">
                            <div class="history-one" id="history-one" role="tabpanel" aria-labelledby="history-one-tab">

                                <div class="history_content_box">
                                    <div class="image">
                                        <img src="{{ asset('home/images/history_1.png') }}" alt="history_1">
                                    </div>
                                    <div class="content">
                                        <p>Thành lập vào năm 2015, OSAKAR đã nhanh chóng phát triển thành nhà sản xuất xe máy điện, tạo được tiếng vang và nổi tiếng trong nước. Là một công ty công nghệ và đổi mới OSAKAR cam kết cách mạng hoá việc đi lại trong đô thị bằng các phương tiện điện nhẹ và thông minh, có phong cách giá cả phải chăng, thân thiện với môi trường.</p>
                                    </div>
                                </div>

                            </div>
                            <div class="history-two" id="history-two" role="tabpanel" aria-labelledby="history-two-tab">
                                <div class="timeline_wrapper_start_box">
                                    <ul class="btn_arrows_show">
                                        <li class="prev"><img src="{{ asset('home/images/slide-arrow-left.png') }}" alt="slide-arrow-left"></li>
                                        <li class="next"><img src="{{ asset('home/images/slide-arrow-right.png') }}" alt="slide-arrow-right"></li>
                                    </ul>
                                    <div class="timeline-ver-slider">

                                        <div class="timeline-item">
                                            <div class="year">
                                                <span>2004</span>
                                            </div>
                                            <div class="dotted">
                                                <span></span>
                                            </div>
                                        </div>

                                        <div class="timeline-item">
                                            <div class="year">
                                                <span>2007</span>
                                            </div>
                                            <div class="dotted">
                                                <span></span>
                                            </div>
                                        </div>

                                        <div class="timeline-item">
                                            <div class="year">
                                                <span>2015</span>
                                            </div>
                                            <div class="dotted">
                                                <span></span>
                                            </div>
                                        </div>

                                        <div class="timeline-item">
                                            <div class="year">
                                                <span>2018</span>
                                            </div>
                                            <div class="dotted">
                                                <span></span>
                                            </div>
                                        </div>

                                        <div class="timeline-item">
                                            <div class="year">
                                                <span>2022</span>
                                            </div>
                                            <div class="dotted">
                                                <span></span>
                                            </div>
                                        </div>

                                        <div class="timeline-item">
                                            <div class="year">
                                                <span>2018</span>
                                            </div>
                                            <div class="dotted">
                                                <span></span>
                                            </div>
                                        </div>

                                        <div class="timeline-item">
                                            <div class="year">
                                                <span>2022</span>
                                            </div>
                                            <div class="dotted">
                                                <span></span>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <div class="slider-timeline-for">

                                    <div class="content">
                                        <div class="mota">
                                            <h2>Thành lập công ty</h2>
                                            <p>Ngày 13/2/2004 Công ty TNHH sản xuất phụ tùng xe máy Đức Minh ra đời và thâm nhập thị trường với các sản phẩm bao gồm: các chi tiết, bộ phận nhựa, đồng hồ, gương, mũ bảo hiểm. Xây dựng công trường lắp ráp với diện tích 10.000m2 đặt tại Gia Lâm với nhiều trang thiết bị hiện đại</p>
                                        </div>
                                    </div>

                                    <div class="content">
                                        <div class="mota">
                                            <h2>Những viên gạch đầu tiên</h2>
                                            <p>Lắp đặt dây chuyền sản xuất mũ bảo hiểm đạt đúng tiêu chuẩn và khai trương Showroom mũ bảo hiểm mang thương hiệu Osakar đầu tiên tại Hà Nội.</p>
                                        </div>
                                    </div>

                                    <div class="content">
                                        <div class="mota">
                                            <h2>Những viên gạch đầu tiên</h2>
                                            <p>Lắp đặt dây chuyền sản xuất mũ bảo hiểm đạt đúng tiêu chuẩn và khai trương Showroom mũ bảo hiểm mang thương hiệu Osakar đầu tiên tại Hà Nội.</p>
                                        </div>
                                    </div>

                                    <div class="content">
                                        <div class="mota">
                                            <h2>Tối ưu sản xuất</h2>
                                            <p>Phát triển thêm 05 mẫu xe máy điện. Mở rộng chuỗi showroom lên đến 200 và đầu tư thêm một dây chuyền sản xuất xe điện với nhiều trang thiết bị hiện đại.
                                                <br /> Nội địa hoá sản xuất tại Việt Nam lên dến 80%. Hớp tác với tập đoàn công nghê Gobao trong việc ứng dụng động cơ, bộ điều khiển, sạc vào xe điện Osakar
                                            </p>
                                        </div>
                                    </div>

                                    <div class="content">
                                        <div class="mota">
                                            <h2>Phát triển để dẫn đầu</h2>
                                            <p>Xây chuỗi Showroom lên tới 400 trên khắp cả nước và hơn 600 đại lý cấp 2 bán sản phẩm. Tiếp tục xây dựng nhà máy với diện tích 30.000m2 với công suất 100.000xe/tháng và trở thành thương hiệu xe điện được mọi người yêu thích nhất.</p>
                                        </div>
                                    </div>


                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="sec section-sohoa">
            <div class="container">
                <div class="box-banner-sohoa">
                    <div class="text-content">
                        <h2> Số hoá để tạo ra sự
                            <br /> thay đổi tích cực
                        </h2>
                        <p>Chúng tôi đang phát triển các công nghệ tiên tiến trong môi trường tương lai, đáp ứng nhu cầu đi lại, và đô thị hoá môi trường xanh tạo lối sống đô thị bền vững.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="pbgn-partners-section">
                <h3 class="typography-section-headline typography-section-headline--reduced text-center">Thương hiệu được cung cấp bởi <span class="d-inline-block">OSAKAR</span></h3>
                <div class="pbgn-partners owl-carousel owl-theme">
                    <div class="pbgn-partner"><img src="https://tuoimakeup.com/storage/uploads/1701151929-e1a33ddb472d017b3b90223dfb9d060a46e53b974618f027c12fdaa993afaade.png" /></div>
                    <div class="pbgn-partner"><img src="https://tuoimakeup.com/storage/uploads/1701151938-5850bd000a5b8e2cbec907436074ce06168b5a8793bd1845dd34b42890356ca3.png" /></div>
                    <div class="pbgn-partner"><img src="https://tuoimakeup.com/storage/uploads/1701151947-0d8445f806c4c2cff52ac9f10d44ba6c1f7726a22c606883eb2d980aaccc395d.png" /></div>
                </div>
            </div>
        </div>
    </div>
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
    <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <script>
        $(document).ready(function() {
            $('.timeline-ver-slider').slick({
                slidesToShow: 5,
                slidesToScroll: 1,
                asNavFor: '.slider-timeline-for',
                dots: false,
                arrows: true,
                focusOnSelect: true,
                prevArrow: $('.prev'),
                nextArrow: $('.next'),
                responsive: [{
                        breakpoint: 1024,
                        settings: {
                            slidesToShow: 4,
                            slidesToScroll: 3,
                            infinite: true,
                            dots: true
                        }
                    },
                    {
                        breakpoint: 600,
                        settings: {
                            slidesToShow: 3,
                            slidesToScroll: 2
                        }
                    },
                    {
                        breakpoint: 480,
                        settings: {
                            slidesToShow: 2,
                            slidesToScroll: 1
                        }
                    }
                ]
            });
            $('.slider-timeline-for').slick({
                slidesToShow: 1,
                slidesToScroll: 1,
                arrows: false,
                fade: true,
                asNavFor: '.timeline-ver-slider'
            });
        })
    </script>
</main>

@endsection