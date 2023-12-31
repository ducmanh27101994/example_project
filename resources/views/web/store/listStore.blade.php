@extends('/web/index')
@section('content')

    <main class="page-content">
        <h1 class="hidden">Cửa Hàng - Osakar.vn</h1>
        <div class="banner_store_top">
            <div class="container">
                <div class="banner-image">
                    <img src="{{ asset('home/images/banner_top_store.png') }}" title="banner_top_store"/>
                </div>
            </div>
        </div>
        <div class="sec_nearby_store">
            <div class="box">
                <a href="javascript:void(0)" id="nearbyStoreLink">
                    <img src="{{ asset('home/images/position.png') }}" title="position"/>
                    <span>Tìm cửa hàng gần nhất</span>
                    <img src="{{ asset('home/images/arrow-right.png') }}" title="arrow-right"/>
                </a>
            </div>
        </div>
        <div class="grid_item_list_store">

            <div class="container">
                <div class="regions_wrapper">

                    <div class="regions_wrapper_area">
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
                    <form action="{{route('list.store', $checkFlag)}}" method="get" id="formSearch">
                        @csrf
                        <div class="regions_wrapper_province">
                            <div class="province_select place_style_box">
                                <select class="form-control-select" name="province" id="province">
                                    <option>Chọn Tỉnh/Thành Phố</option>
                                </select>
                            </div>
                            <div class="district_select place_style_box">
                                <select class="form-control-select" name="district" id="district" onchange="submitForm()">
                                    <option>Chọn Quận/Huyện</option>
                                </select>
                            </div>
                        </div>
                    </form>
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
                                        </div>
                                    </div>
                                    <div class="ridect_map-wrapper">
                                        <a target="_blank" href="{{$value->path}}"
                                           title="Osakar Hà Nội - Xe điện Thành Công">
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
                                provinceDropdown.append('<option value="' + province[i].province_id + '">' + province[i].province_name + '</option>');
                            }
                        });
                    }
                });

                // Handle province dropdown change event
                provinceDropdown.on('change', function () {
                    var selectedProvinceCode = $(this).val();
                    // Load districts based on the selected province
                    $.ajax({
                        url: 'https://vapi.vnappmob.com/api/province/district/' + selectedProvinceCode,
                        method: 'GET',
                        dataType: 'json',
                        success: function (result) {
                            districtDropdown.empty();
                            $.each(result, function (index, district) {
                                for (var i = 0; i < district.length; i++) {
                                    districtDropdown.append('<option value="' + district[i].district_name + '">' + district[i].district_name + '</option>');
                                }
                            });
                        }
                    });
                });
            });
        </script>


        <script>
            function submitForm() {
                document.getElementById("formSearch").submit();
            }
        </script>
    </main>

@endsection
