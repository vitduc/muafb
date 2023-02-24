@extends('frontend.layouts.master')
@section('title', 'Invoices')
@section('Content')
<div style="padding-top:90px">
    <div class="content-page">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="alert bg-white alert-warning" role="alert">
                        <div class="iq-alert-icon">
                            <i class="ri-alert-line"></i>
                        </div>
                        <div class="iq-alert-text">Mỗi hoá đơn chỉ tồn tại trong 6 tiếng tính từ thời gian tạo, vui lòng thực hiện thanh toán sau khi tạo hoá đơn.</div>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header d-flex justify-content-between">
                            <div class="header-title">
                                <h4 class="card-title">Invoices</h4>
                            </div>
                        </div>
                        <div class="card-body p-0">
                            <div class="table-responsive">
                                <div id="DataTables_Table_0_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <table class="table data-table table-striped mb-0 dataTable no-footer" id="DataTables_Table_0" role="grid" aria-describedby="DataTables_Table_0_info">
                                                <thead class="table-color-heading">
                                                    <tr role="row">
                                                        <th width="5%" class="sorting sorting_asc" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-sort="ascending" aria-label="#: activate to sort column descending" style="width: 25.75px;">#</th>
                                                        <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="TransId: activate to sort column ascending" style="width: 118.625px;">TransId</th>
                                                        <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Payment Method: activate to sort column ascending" style="width: 216.719px;">Payment Method</th>
                                                        <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Amount: activate to sort column ascending" style="width: 166.656px;">Amount</th>
                                                        <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Pay: activate to sort column ascending" style="width: 166.656px;">Pay</th>
                                                        <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Status: activate to sort column ascending" style="width: 101.047px;">Status</th>
                                                        <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Time: activate to sort column ascending" style="width: 234.578px;">Time</th>
                                                        <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Action: activate to sort column ascending" style="width: 132.969px;">Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>



                                                    <tr class="odd">
                                                        <td class="sorting_1">0</td>
                                                        <td><a href="https://muafb.net/client/payment/MPFUN"><i class="fas fa-file-alt"></i>
                                                                MPFUN</a></td>
                                                        <td><b style="font-size:15px;">ACB</b></td>
                                                        <td><b style="color: red;">111.111.111đ</b></td>
                                                        <td><b style="color: green;">111.111.111đ</b></td>
                                                        <td>
                                                            <p class="mb-0 text-warning font-weight-bold d-flex justify-content-start align-items-center">Pending</p>
                                                        </td>
                                                        <td>2023-02-25 11:52:31</td>
                                                        <td>
                                                            <a class="" data-toggle="tooltip" data-placement="top" title="" data-original-title="Invoice details" href="https://muafb.net/client/payment/MPFUN">
                                                                <svg xmlns="http://www.w3.org/2000/svg" class="text-secondary mx-4" width="20" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z">
                                                                    </path>
                                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z">
                                                                    </path>
                                                                </svg>
                                                            </a>
                                                        </td>
                                                    </tr>
                                                    <tr class="even">
                                                        <td class="sorting_1">1</td>
                                                        <td><a href="https://muafb.net/client/payment/SPUTF"><i class="fas fa-file-alt"></i>
                                                                SPUTF</a></td>
                                                        <td><b style="font-size:15px;">ACB</b></td>
                                                        <td><b style="color: red;">111.111.111đ</b></td>
                                                        <td><b style="color: green;">111.111.111đ</b></td>
                                                        <td>
                                                            <p class="mb-0 text-warning font-weight-bold d-flex justify-content-start align-items-center">Pending</p>
                                                        </td>
                                                        <td>2023-02-25 11:14:43</td>
                                                        <td>
                                                            <a class="" data-toggle="tooltip" data-placement="top" title="" data-original-title="Invoice details" href="https://muafb.net/client/payment/SPUTF">
                                                                <svg xmlns="http://www.w3.org/2000/svg" class="text-secondary mx-4" width="20" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z">
                                                                    </path>
                                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z">
                                                                    </path>
                                                                </svg>
                                                            </a>
                                                        </td>
                                                    </tr>
                                                    <tr class="odd">
                                                        <td class="sorting_1">2</td>
                                                        <td><a href="https://muafb.net/client/payment/ZCF7Y"><i class="fas fa-file-alt"></i>
                                                                ZCF7Y</a></td>
                                                        <td><b style="font-size:15px;">ACB</b></td>
                                                        <td><b style="color: red;">200.000đ</b></td>
                                                        <td><b style="color: green;">200.000đ</b></td>
                                                        <td>
                                                            <p class="mb-0 text-warning font-weight-bold d-flex justify-content-start align-items-center">Pending</p>
                                                        </td>
                                                        <td>2023-02-25 11:09:13</td>
                                                        <td>
                                                            <a class="" data-toggle="tooltip" data-placement="top" title="" data-original-title="Invoice details" href="https://muafb.net/client/payment/ZCF7Y">
                                                                <svg xmlns="http://www.w3.org/2000/svg" class="text-secondary mx-4" width="20" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z">
                                                                    </path>
                                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z">
                                                                    </path>
                                                                </svg>
                                                            </a>
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
        </div>
    </div>
</div>
@endsection
