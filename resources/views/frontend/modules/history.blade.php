@extends('frontend.layouts.master')
@section('title', 'Home')
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
                            <p>Tất cả các đơn hàng sẽ được xóa khỏi hệ thống sau 30 ngày kể từ ngày mua để tránh bị bung mất tài khoản. Các bạn vui lòng tải dữ liệu và lưu lại cẩn thận khi mua hàng xong</p>

                            <p>Ae mua acc về change pass + logout thiết bị + đổi pass hotmail + xóa mail getnada nếu có .Chúng tớ sẽ không chịu trách nhiệm nếu các bạn không Change nếu xảy ra mất tài sản .</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 text-left">
                    <div class="mb-3">
                        <a href="https://muafb.net/client/recharge" type="button" class="btn btn-danger btn-sm"><i class="fas fa-arrow-left mr-1"></i>Quay Lại</a>
                    </div>
                </div>
                <div class="col-lg-6 text-right">
                    <div class="mb-3">
                        <button class="btn btn-primary btn-sm btn-icon-left m-b-10" data-toggle="modal" data-target="#modal-default" type="button"><i class="fas fa-cloud-download-alt mr-1"></i>Tải Về File Backup VIA</button>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header d-flex justify-content-between">
                            <div class="header-title">
                                <h4 class="card-title">Lịch Sử Mua Hàng</h4>
                            </div>
                        </div>
                        <div class="card-body p-0">
                            <div class="table-responsive">
                                <div id="DataTables_Table_0_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">
                                    <div class="row">
                                        <div class="col-sm-12 col-md-6">
                                            <div class="dataTables_length" id="DataTables_Table_0_length"><label>Show <select name="DataTables_Table_0_length" aria-controls="DataTables_Table_0" class="custom-select custom-select-sm form-control form-control-sm">
                                                        <option value="10">10</option>
                                                        <option value="25">25</option>
                                                        <option value="50">50</option>
                                                        <option value="100">100</option>
                                                    </select> entries</label></div>
                                        </div>
                                        <div class="col-sm-12 col-md-6">
                                            <div id="DataTables_Table_0_filter" class="dataTables_filter"><label>Search:<input type="search" class="form-control form-control-sm" placeholder="" aria-controls="DataTables_Table_0"></label></div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <table class="table data-table table-hover mb-0 dataTable no-footer" id="DataTables_Table_0" role="grid" aria-describedby="DataTables_Table_0_info">
                                                <thead class="table-color-heading">
                                                    <tr role="row">
                                                        <th width="5%" class="sorting sorting_asc" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-sort="ascending" aria-label="#: activate to sort column descending" style="width: 25.75px;">#</th>
                                                        <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Mã giao dịch: activate to sort column ascending" style="width: 236.063px;">Mã giao dịch</th>
                                                        <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Sản phẩm: activate to sort column ascending" style="width: 195.609px;">Sản phẩm</th>
                                                        <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Số lượng: activate to sort column ascending" style="width: 180.75px;">Số lượng</th>
                                                        <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Thanh toán: activate to sort column ascending" style="width: 214.156px;">Thanh toán</th>
                                                        <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Thời gian: activate to sort column ascending" style="width: 186.766px;">Thời gian</th>
                                                        <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Thao tác: activate to sort column ascending" style="width: 177.906px;">Thao tác</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr class="odd">
                                                        <td valign="top" colspan="7" class="dataTables_empty">No data available in table</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-12 col-md-5">
                                            <div class="dataTables_info" id="DataTables_Table_0_info" role="status" aria-live="polite">Showing 0 to 0 of 0 entries</div>
                                        </div>
                                        <div class="col-sm-12 col-md-7">
                                            <div class="dataTables_paginate paging_simple_numbers" id="DataTables_Table_0_paginate">
                                                <ul class="pagination">
                                                    <li class="paginate_button page-item previous disabled" id="DataTables_Table_0_previous"><a href="#" aria-controls="DataTables_Table_0" data-dt-idx="0" tabindex="0" class="page-link">Previous</a></li>
                                                    <li class="paginate_button page-item next disabled" id="DataTables_Table_0_next"><a href="#" aria-controls="DataTables_Table_0" data-dt-idx="1" tabindex="0" class="page-link">Next</a></li>
                                                </ul>
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
    </div>

    <div class="modal fade" id="modal-default">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Tải Về File Backup VIA</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <form action="" method="POST" enctype="multipart/form-data">
                    <div class="modal-body">
                        <div class="form-group">
                            <label>UID VIA</label>
                            <input type="text" id="uid_via" class="form-control" placeholder="Nhập UID VIA cần tải về file backup">
                        </div>
                    </div>
                    <div class="modal-footer justify-content-between">
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Đóng</button>
                        <button type="button" onclick="downloadBackup()" class="btn btn-primary">Tải Về</button>
                    </div>
                </form>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>

</div>
@endsection
