@extends('frontend.layouts.master')
@section('title', 'Dashboard')
@section('Content')
<div style="padding-top:90px">
    <div class="content-page">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="alert bg-white alert-primary" role="alert">
                        <div class="iq-alert-icon">
                            <i class="ri-alert-line"></i>
                        </div>
                        <div class="iq-alert-text">
@foreach ($notifications as $notification)
    {!!$notification->content!!}
@endforeach
                        </div>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="alert bg-white alert-danger" role="alert">
                        <div class="iq-alert-icon">
                            <i class="ri-alert-line"></i>
                        </div>
                        <a href="#" class="iq-alert-text">Vui lòng bật xác minh 2 bước Google 2FA để bảo vệ tài khoản của bạn.</a>
                    </div>
                </div>


                <div class="col-lg-12 mt-3">
                    <div>
                        <div>
                            <ul class="nav nav-pills mb-1 nav-fill" id="pills-tab-1" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active">All product</a>
                                </li>
                                @foreach ($categories as $category)
                                <li class="nav-item">
                                    <a class="nav-link">{{$category->name}}</a>
                                </li>
                                @endforeach
                            </ul>
                        </div>


                        {{-- forech danh sach san pham --}}
                        <div class="table-responsive">
                            <table class="table table-striped table-hover mb-0">
                                <thead class="table-color-heading" style="background:#0C1965;color:white;">
                                    <tr>
                                        <th>Product</th>
                                        <th class="text-center d-none-600" width="10%">Country</th>
                                        <th class="text-center d-none-600" width="10%">Available</th>
                                        <th class="text-center d-none-600" width="10%">Sold</th>
                                        <th class="text-center d-none-600" width="10%">Price</th>
                                        <th class="text-center d-none-600" width="10%">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($products as $product)
                                    <tr>
                                        <td>
                                            <div class="col-product-name">
                                                <img class="mr-1 py-1 d-none-600" src="https://muafb.net/assets/storage/images/categoryLP4.png">
                                                <div class="name-product">
                                                    <h3>{{$product->name}}</h3>
                                                    <div class="content-mota">{!!$product->description!!}</div>
                                                    <div class="d-none-more-than-601">
                                                        <div class="col-md-12 p-0 mt-2">
                                                            <span class="btn mb-1 btn-sm btn-outline-danger">
                                                                <i class="far fa-money-bill-alt mr-1"></i>
                                                                <b>{{number_format($product->price)}}</b>
                                                            </span>
                                                            <span class="btn mb-1 btn-sm btn-outline-info">
                                                                Còn lại: <b>{{$product->available}}</b>
                                                            </span>
                                                            <span class="btn mb-1 btn-sm btn-outline-info">
                                                                Đã bán: <b>2.137</b>
                                                            </span>
                                                            <span class="btn mb-1 btn-sm btn-outline-warning p-0">{{ $product->country}}</span>
                                                        </div>
                                                        <div class="col-md-12 p-0 mt-2">
                                                            <button class="btn btn-block btn-sm btn-primary" onclick="modalBuy(1, 10000,`C1 - Clone Momo`)">
                                                                <i class="fas fa-shopping-cart mr-1"></i>BUY NOW </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="text-center d-none-600">
                                            {{ $product->country}}
                                        </td>
                                        <td class="text-center d-none-600"><span class="btn mb-1 btn-sm btn-outline-info">
                                                Còn lại: <b>{{$product->available}}</b>
                                            </span></td>
                                        <td class="text-center d-none-600"><span class="btn mb-1 btn-sm btn-outline-info">
                                                Đã bán: <b>2.137</b>
                                            </span></td>
                                        <td class="text-center d-none-600"><span class="btn mb-1 btn-sm btn-outline-danger">
                                                <i class="far fa-money-bill-alt mr-1"></i>
                                                <b>{{number_format($product->price)}}</b>
                                            </span>
                                        </td>
                                        <td class="text-center d-none-600">
                                            <button class="btn btn-block btn-sm btn-primary" onclick="modalBuy(1, 10000,`C1 - Clone Momo`)">
                                                <i class="fas fa-shopping-cart mr-1"></i>BUY NOW </button>
                                        </td>
                                    </tr>
                                    @empty
                                    no product
                                    @endforelse
                                </tbody>
                            </table>
                        </div>

                        {{-- end Prodcut --}}

                        <div class="d-flex justify-content-end align-items-center border-top-table p-3">
                            <a type="button" href="#" class="btn btn-secondary btn-sm"><i class="fas fa-cart-arrow-down mr-1"></i>Order History</a>
                        </div>
                    </div>
                </div>

                <script type="text/javascript">
                    function modalBuy(id, price, name) {
                        $("#modal-id").val(id);
                        $("#price").val(price);
                        $("#name").val(name);
                        $("#amount").val('');
                        $("#modalBuy").modal();
                    }
                    
                    document.getElementById('showDiscountCode').style.display = 'none';
                    
                    function showDiscountCode() {
                        if (document.getElementById('showDiscountCode').style.display == 'none') {
                            document.getElementById('btnshowDiscountCode').className = "btn btn-sm btn-dark";
                            $('#btnshowDiscountCode').html('Huỷ mã giảm giá');
                            document.getElementById('showDiscountCode').style.display = 'block';
                        } else {
                            document.getElementById('btnshowDiscountCode').className = "btn btn-sm btn-danger";
                            $('#btnshowDiscountCode').html('Nhập mã giảm giá');
                            document.getElementById('showDiscountCode').style.display = 'none';
                            document.getElementById('coupon').value = '';
                            totalPayment();
                        }
                    }
                    
                    function totalPayment() {
                        $('#total').html('<i class="fa fa-spinner fa-spin"></i> Đang xử lý...');
                        $.ajax({
                            url: "https://muafb.net/ajaxs/client/totalPayment.php",
                            method: "POST",
                            data: {
                                id: $("#modal-id").val(),
                                amount: $("#amount").val(),
                                coupon: $("#coupon").val(),
                                token: $("#token").val(),
                                store: 'accounts'
                            },
                            success: function(data) {
                                $("#total").html(data);
                            },
                            error: function() {
                                cuteToast({
                                    type: "error",
                                    message: 'Không thể tính kết quả thanh toán',
                                    timer: 5000
                                });
                            }
                        });
                        //$("#total").html(total.toString().replace(/(.)(?=(\d{3})+$)/g, '$1,'));
                    }
                    </script> 


                <div class="modal fade" id="modalBuy" tabindex="-1" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered mw-650px">
                        <div class="modal-content" style="background-image:url('https://muafb.net/resources/images/bg-buy.png');">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Thanh toán đơn hàng</h5>
                                <button type="button" class="close" style="color: red;" data-dismiss="modal" aria-label="Close">
                                    <i class="fas fa-window-close"></i>
                                </button>
                            </div>
                            <div class="modal-body">
                                <div class="form-group mb-3">
                                    <label>Tên sản phẩm:</label>
                                    <input type="text" class="form-control" id="name" readonly />
                                </div>
                                <div class="form-group mb-3">
                                    <label>Số lượng cần mua:</label>
                                    <input type="number" class="form-control form-control-solid" onchange="totalPayment()" onkeyup="totalPayment()" placeholder="Nhập số lượng cần mua" id="amount" />
                                    <input type="hidden" value="" readonly class="form-control" id="modal-id">
                                    <input type="hidden" value="" readonly class="form-control" id="price">
                                    <input class="form-control" type="hidden" id="token" value="50595da07b6e57ee2d572aab8d53bb61">
                                </div>
                                <div class="form-group mb-3" id="showDiscountCode">
                                    <label>Mã giảm giá:</label>
                                    <input type="text" class="form-control" onchange="totalPayment()" onkeyup="totalPayment()" placeholder="Nhập mã giảm giá của bạn" id="coupon" />
                                </div>
                                <div class="mb-3 text-right"><button id="btnshowDiscountCode" onclick="showDiscountCode()" class="btn btn-danger btn-sm">Nhập mã giảm giá</button></div>
                                <div class="mb-3 text-center" style="font-size: 20px;">Tổng tiền cần thanh toán: <b id="total" style="color:red;">0</b></div>
                                <div class="text-center mb-3">
                                    <button type="submit" id="btnBuy" onclick="buyProduct()" class="btn btn-primary btn-block"><i class="fas fa-credit-card mr-1"></i>Thanh toán</span></button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="card card-block card-stretch card-height">
                        <div class="card-header d-flex justify-content-between" style="background: #0C1965;">
                            <div class="header-title">
                                <h5 class="card-title" style="color:white;">ĐƠN HÀNG GẦN ĐÂY</h5>
                            </div>
                        </div>
                        <div class="card-body p-0" style="height:500px;overflow-x:hidden;overflow-y:auto;">
                            <div class="table-responsive">
                                <table class="table table-striped mb-0">
                                    <tbody>
                                        <tr>

                                            <td style="height:20px;">
                                                <lord-icon src="https://cdn.lordicon.com/cllunfud.json" trigger="hover" style="width:30px;height:30px">
                                                </lord-icon> <b style="color: green;">...881</b>
                                                mua <b style="color: red;">1</b>
                                                <b>P7 - Via Phi Cổ XMDT (Green tick) + Limit r...</b>
                                                - <b style="color:blue;">58.000đ</b>
                                            </td>
                                            <td><span class="badge badge-primary">13 phút trước</span>
                                            </td>
                                        </tr>
                                        <tr>

                                            <td style="height:20px;">
                                                <lord-icon src="https://cdn.lordicon.com/cllunfud.json" trigger="hover" style="width:30px;height:30px">
                                                </lord-icon> <b style="color: green;">...123</b>
                                                mua <b style="color: red;">1</b>
                                                <b>P8 - Via Phi Cổ XMDT (Green tick) + Limit 5...</b>
                                                - <b style="color:blue;">63.000đ</b>
                                            </td>
                                            <td><span class="badge badge-primary">29 phút trước</span>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="card card-block card-stretch card-height">
                        <div class="card-header d-flex justify-content-between" style="background: #0C1965;">
                            <div class="header-title">
                                <h5 class="card-title" style="color:white;">NẠP TIỀN GẦN ĐÂY</h5>
                            </div>
                        </div>
                        <div class="card-body p-0" style="height:500px;overflow-x:hidden;overflow-y:auto;">
                            <div class="table-responsive">
                                <table class="table table-striped mb-0">
                                    <tbody>
                                        <tr>
                                            <td style="height:20px;">

                                                <lord-icon src="https://cdn.lordicon.com/ujmqspux.json" trigger="hover" style="width:30px;height:30px">
                                                </lord-icon> <b style="color: green;">... le</b>
                                                thực hiện nạp <b style="color:blue;">31.000đ</b> -
                                                <b style="color:red;">MOMO</b>
                                            </td>
                                            <td><span class="badge badge-primary">57 phút trước</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style="height:20px;">

                                                <lord-icon src="https://cdn.lordicon.com/ujmqspux.json" trigger="hover" style="width:30px;height:30px">
                                                </lord-icon> <b style="color: green;">...881</b>
                                                thực hiện nạp <b style="color:blue;">1.000.000đ</b> -
                                                <b style="color:red;">ACB</b>
                                            </td>
                                            <td><span class="badge badge-primary">1 tiếng trước</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style="height:20px;">

                                                <lord-icon src="https://cdn.lordicon.com/ujmqspux.json" trigger="hover" style="width:30px;height:30px">
                                                </lord-icon> <b style="color: green;">...686</b>
                                                thực hiện nạp <b style="color:blue;">50.000đ</b> -
                                                <b style="color:red;">ACB</b>
                                            </td>
                                            <td><span class="badge badge-primary">7 tiếng trước</span>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
