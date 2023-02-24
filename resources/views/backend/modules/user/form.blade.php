@extends('backend.layouts.master')
@section('title', 'Nạp tiền')
@section('Content')
<div class="col-md-12 col-lg-10">
    <h4 class="mb-3">Nạp tiền</h4>

    <form class="needs-validation" action="{{route('post.recharger')}}" method="POST">
        @csrf
        <div class="row g-3">
            <div class="col-sm-6">
                <label class="form-label">Tên</label>
                <input type="text" class="form-control" value="{{$data->name}}">
                <input type="hidden" class="form-control" name="id_user" value="{{$data->id}}">
            </div>

            <div class="col-sm-6">
                <label class="form-label">Email</label>
                <input type="text" class="form-control" value="{{$data->email}}">
            </div>
            <div class="col-md-6">
                <label class="form-label">Phương thức thanh toán</label>
                <select class="form-select" name="method" required="">
                    <option value="">--Chọn--</option>
                    <option value="banking">Banking</option>
                    <option value="master">Master</option>
                    <option value="visa">Visa</option>
                </select>
            </div>

            <div class="col-md-6">
                <label for="zip" class="form-label">Số tiền</label>
                <input type="text" class="form-control" name="money" required="">
            </div>
        </div>

        <hr class="my-4">
        <button class="w-12 btn btn-primary btn-lg" type="submit">Thực hiện</button>
    </form>
</div>
@endsection
