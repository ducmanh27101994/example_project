@extends('/web/index')
@section('content')

<link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/css/select2.min.css" rel="stylesheet" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/js/select2.min.js"></script>

<main>
    <h1 class="hidden">Cửa Hàng - Osakar.vn</h1>
    <div class="banner_store_top">
        <div class="container">
            <div class="banner-image row">
                <div class="col-xs-12 col-md-6 col-sm-6 col-lg-6">
                    <div class="text_box_image">
                        <h2>Mạng Lưới</h2>
                        <p>Hệ thống cửa hàng đại lý của Osakar sẵn sàng phục vụ Quý khách hàng tại hơn</p>

                        @if(!empty($store_counter))
                            @foreach($store_counter as $value)

                                {!! $value->detail !!}


                            @endforeach
                        @endif

                        <!-- <div class="pbgn-badges">
                            <div class="pbgn-badge">
                                <div class="pbgn-badge-value counter">63</div>
                                <div class="pbgn-badge-label">Tỉnh thành</div>
                            </div>
                            <div class="pbgn-badge">
                                <div class="pbgn-badge-value "><span>+</span><span class="counter">100</span></div>
                                <div class="pbgn-badge-label">Đại lý</div>
                            </div>
                        </div> -->
                    </div>
                </div>
                <div class="col-xs-12 col-md-6 col-sm-6 col-lg-6">
                    <img src="{{ asset('home/images/image-background_store.png') }}" alt="image-background_store">
                </div>
            </div>
        </div>
    </div>
    <div class="sec_nearby_store">
        <div class="box">
            <a href="javascript:void(0)" id="nearbyStoreLink">
                <img src="{{ asset('home/images/position.png') }}" title="position" />
                <span>Tìm cửa hàng gần nhất</span>
                <img src="{{ asset('home/images/arrow-right.png') }}" title="arrow-right" />
            </a>
        </div>
    </div>
    <div class="grid_item_list_store">

        <div class="container">
            <div class="regions_wrapper">

                <!-- <div class="regions_wrapper_area hidden">
                    <div class="regions_wrapper_area_item @if($flag == 1) active @endif ">
                        <a href="{{route('list.store', 'mien-bac')}}" title="Miền bắc">Miền bắc</a>
                    </div>
                    <div class="regions_wrapper_area_item @if($flag == 2) active @endif">
                        <a href="{{route('list.store', 'mien-trung')}}" title="Miền Trung">Miền Trung</a>
                    </div>
                    <div class="regions_wrapper_area_item @if($flag == 3) active @endif">
                        <a href="{{route('list.store', 'mien-nam')}}" title="Miền Nam">Miền Nam</a>
                    </div>
                </div>
                @php
                $checkFlag = NULL;
                if ($flag == 1) {
                $checkFlag = 'mien-bac';
                } elseif ($flag == 2) {
                $checkFlag = 'mien-trung';
                } elseif ($flag == 3) {
                $checkFlag = 'mien-nam';
                }
                @endphp
                <div class="regions_wrapper_area hidden">
                    <select id="regionDropdown" onchange="navigateToRegion()">
                        <option value="/list-store/mien-bac">Đang lọc theo: @if($flag == 1) Miền Bắc @endif @if($flag ==
                            2) Miền Trung @endif @if($flag == 3) Miền Nam @endif</option>
                        <option value="/list-store/mien-bac">Miền Bắc</option>
                        <option value="/list-store/mien-trung">Miền Trung</option>
                        <option value="/list-store/mien-nam">Miền Nam</option>
                    </select>
                </div> -->
                <div id="formSearch">
                    <div class="regions_wrapper_province">
                        <div class="province_select place_style_box">
                            <select class="form-control-select" style="width: 200px" name="province" id="province">
                                <option value="">Chọn Tỉnh/Thành</option>
                            </select>
                            <script>
                                $(document).ready(function () {
                                    $('#province').select2({
                                        placeholder: 'Chọn Tỉnh/Thành',
                                        allowClear: false, // Cho phép xóa lựa chọn hiện tại
                                        minimumResultsForSearch: 0 // Hiển thị ô tìm kiếm
                                    });
                                });
                            </script>
                        </div>
                        <div class="district_select place_style_box">
                            <select class="form-control-select" name="district" id="district">
                                <option>Chọn Quận/Huyện</option>
                            </select>
                            <script>
                                $(document).ready(function () {
                                    $('#district').select2({
                                        allowClear: false, // Cho phép xóa lựa chọn hiện tại
                                        minimumResultsForSearch: 0 // Hiển thị ô tìm kiếm
                                    });
                                });
                            </script>
                        </div>
                        <button id="button" class="btn btn-search">
                            <i class="fa fa-search"></i>
                        </button>
                    </div>
                </div>
            </div>
            <div class="row">
                @if(!empty($listStore))
                    @foreach($listStore as $value)
                        <div class="col-xs-6 col-sm-4 col-md-4 col-lg-4">
                            <div class="item_store">
                                <div class="image">
                                    <img src="{{ asset('home/images/store.png') }}" alt="store">
                                </div>
                                <div class="content">
                                    <div class="title">
                                        <h2>{{$value->title_store}}</h2>
                                    </div>
                                    <div class="descreption">
                                        <p>
                                            <img src="{{ asset('home/images/location.png') }}" alt="location">
                                            <span>{{$value->address}}</span>
                                        </p>
                                        <p>
                                            <a href="tel:{{$value->page_title_tag}}" title="{{$value->page_title_tag}}">
                                                <img src="{{ asset('home/images/mobile.png') }}" alt="mobile">
                                                <span>{{$value->page_title_tag}}</span>
                                            </a>
                                        </p>
                                        <p>
                                            <a target="_blank" href="{{$value->facebook}}" title="Fanpage Facebook">

                                                <img src="{{ asset('home/images/fb.png') }}" alt="material-symbols_directions">
                                                <span>Fanpage Facebook</span>

                                            </a>
                                        </p>
                                    </div>
                                </div>
                                <div class="ridect_map-wrapper">
                                    <a target="_blank" href="{{$value->path}}" title="Osakar Hà Nội - Xe điện Thành Công">
                                        <p>
                                            <img src="{{ asset('home/images/material-symbols_directions.png') }}"
                                                alt="material-symbols_directions">
                                            <span>Chỉ đường trên Google Map</span>
                                        </p>
                                    </a>

                                </div>
                            </div>
                        </div>
                    @endforeach
                @endif
                {{$listStore->links()}}
            </div>
        </div>
    </div>
    <div data-v-7e7da536="" class="gdpr gdpr_cookie">
        <div data-v-7e7da536="" class="gdpr-container">
            <p data-v-7e7da536="" class="gdpr-message">Chúng tôi sử dụng cookie để phục vụ tốt hơn.</p>
            <div data-v-7e7da536="" class="gdpr-actions">
                <button data-v-7e7da536="" class="gdpr-action gdpr-action--reject">Từ chối</button>
                <button data-v-7e7da536="" class="gdpr-action gdpr-action--accept">Chấp nhận</button>
            </div>
        </div>
    </div>
    <input type="hidden" id="hidden_link_province">
    <input type="hidden" id="hidden_link_district">
    <script>
        $(document).ready(function () {
            var provinceDropdown = $('#province');
            var districtDropdown = $('#district');
            // Load provinces into the province dropdown on page load
            $.ajax({
                url: 'https://vapi.vnappmob.com/api/province/',
                method: 'GET',
                dataType: 'json',
                success: function (data) {
                    $.each(data, function (index, province) {
                        for (var i = 0; i < province.length; i++) {
                            provinceDropdown.append('<option value="' + province[i]
                                .province_id + '">' + province[i].province_name +
                                '</option>');
                        }
                    });
                }
            });

            // Handle province dropdown change event
            provinceDropdown.on('change', function () {
                var selectedProvinceCode = $(this).val();
                $("#hidden_link_province").val($('#province option:selected').text())
                setCookie("location_id", $('#province option:selected').val(), 3600);
                // Load districts based on the selected province
                $.ajax({
                    url: 'https://vapi.vnappmob.com/api/province/district/' + selectedProvinceCode || getUrlParameter('id'),
                    method: 'GET',
                    dataType: 'json',
                    success: function (result) {
                        districtDropdown.empty();
                        districtDropdown.append('<option value="-1">Chọn Quận/Huyện</option>');
                        $.each(result, function (index, district) {
                            for (var i = 0; i < district.length; i++) {
                                districtDropdown.append('<option value="' + district[i]
                                    .district_name + '">' + district[i]
                                        .district_name + '</option>');
                            }
                        });
                    }
                });
            });

            districtDropdown.on('change', function () {
                $("#hidden_link_district").val($('#district option:selected').val())
            });

            $('.btn-search').on('click', function () {

                if ($("#hidden_link_district").val().length === 0) {
                    window.location.href = '/list-store/mien-bac?province=' + $("#hidden_link_province").val() + '&id=' + getCookie('location_id')
                } else {
                    window.location.href = '/list-store/mien-bac?province=' + $("#hidden_link_province").val() + '&id=' + getCookie('location_id') + '&district=' + $("#hidden_link_district").val()
                }
            });

            var provinceParam = getUrlParameter('province');
            var districtParam = getUrlParameter('district');

            if (provinceParam.length > 0) {
                $('#select2-province-container').text(provinceParam);
                $("#hidden_link_province").val(provinceParam)
            }

            if (districtParam.length > 0) {
                $('#select2-district-container').text(districtParam);
            }

            if (getCookie('location_id').length > 0) {

                var textDefault = districtParam.length === '' ? 'Chọn Quận/Huyện' : districtParam

                $.ajax({
                    url: 'https://vapi.vnappmob.com/api/province/district/' + getCookie('location_id'),
                    method: 'GET',
                    dataType: 'json',
                    success: function (result) {
                        districtDropdown.append('<option value="-1">' + textDefault + '</option>');
                        $.each(result, function (index, district) {
                            for (var i = 0; i < district.length; i++) {
                                districtDropdown.append('<option value="' + district[i]
                                    .district_name + '">' + district[i]
                                        .district_name + '</option>');
                            }
                        });
                    }
                });
            }

        });

        function getUrlParameter(name) {
            name = name.replace(/[\[]/, '\\[').replace(/[\]]/, '\\]');
            var regex = new RegExp('[\\?&]' + name + '=([^&#]*)');
            var results = regex.exec(location.search);
            return results === null ? '' : decodeURIComponent(results[1].replace(/\+/g, ' '));
        }

    </script>


    <script>
        function navigateToRegion() {
            var dropdown = document.getElementById("regionDropdown");
            var selectedValue = dropdown.options[dropdown.selectedIndex].value;
            window.location.href = selectedValue;
        }
    </script>
    <style>
        .select2-search--dropdown::after {
            content: "\f002";
            width: 15px;
            position: absolute;
            bottom: 0;
            display: inline-block;
            text-rendering: auto;
            -webkit-font-smoothing: antialiased;
            top: 9px;
            right: 8px;
            font-family: 'FontAwesome';
            font-size: 13px;
            color: gray;
        }

        .select2-results__option {
            font-size: 14px;
        }

        .select2-container--default .select2-selection--single .select2-selection__rendered,
        .select2-container--default .select2-selection--single .select2-selection__placeholder {
            font-size: 14px;
            color: #000;
        }
    </style>
</main>

@endsection