@extends('frontend.layouts.master')
@section('title', 'Bank Transfer')
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
                            <p><strong><u>Hướng dẫn thanh toán</u></strong></p>

                            <p>1. Chọn ngân hàng , nhập số tiền cần nạp&nbsp;rồi&nbsp;ấn&nbsp;tạo đơn.</p>

                            <p>2. Quét mã QR để tự động điền nội dung&nbsp;hoặc bạn tự điền nội dung được cho theo đơn</p>

                            <p>3. Đợi 2 - 5 phút , hệ thống sẽ cập nhật số dư</p>

                            <p>&nbsp;Nếu ngân&nbsp;hàng cập nhật lịch sử&nbsp;chậm thì có thể sẽ cộng tiền lâu hơn vài phút.&nbsp;Sau 10 phút&nbsp;không nhận được tiền thì liên hệ zalo 0962.886.860</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header d-flex justify-content-between">
                            <div class="header-title">
                                <h4 class="card-title">Nạp tiền theo hoá đơn</h4>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-sm-6 col-md-6 col-lg-3 mt-3 mt-lg-0 mb-3">
                                    <div type="button" onclick="openModalAmount(13)" class="blur-shadow p-4 shadow-showcase text-center">
                                        <img src="https://muafb.net/assets/storage/images/bank/DHZ.png" width="200px" height="100px">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
