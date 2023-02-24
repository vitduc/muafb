@extends('backend.layouts.master')
@section('title', 'Khách hàng')
@section('Content')
<br class="my-4">
<h2>Danh sách khách hàng</h2>
<br class="my-4">
<div class="table-responsive">
    @include('_alert')
    <table class="table table-striped table-sm">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Tên</th>
                <th scope="col">Email</th>
                <th scope="col">Tiền</th>
                <th scope="col">Thao tác</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($data as $item)
            <tr>
                <td>{{$item->id}}</td>
                <td>{{$item->name}}</td>
                <td>{{$item->email}}</td>
                <td>{{number_format($item->total_money??0)}}</td>
                <td><a href="{{route('admin.recharger', ['id' => $item->id])}}" class="btn btn-primary">Nạp tiền</a></td>
            </tr>
            @endforeach
        </tbody>
    </table>
    {{ $data->links() }}
</div>
@endsection