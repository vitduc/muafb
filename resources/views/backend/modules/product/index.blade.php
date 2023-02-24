@extends('backend.layouts.master')
@section('title', 'Danh sách sản phẩm')
@section('Content')
<br class="my-4">
<h2>Danh sách sản phẩm</h2>
<br class="my-4">
<div class="table-responsive">
    <a href="{{ route('create.product')}}" class="btn btn-success" style="margin-bottom: 20px">Thêm sản phẩm</a>
    @include('_alert')
    <table class="table table-striped table-sm">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Danh mục</th>
                <th scope="col">Tên</th>
                <th scope="col">Quốc gia</th>
                <th scope="col">Số lượng</th>
                <th scope="col">Giá</th>
                <th scope="col">Nội dung</th>
                <th scope="col">Mô tả</th>
                <th scope="col">Thao tác</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($data as $item)
            <tr>
                <td>{{$item->id}}</td>
                <td>{{$item->id_category}}</td>
                <td>{{$item->name}}</td>
                <td>{{$item->country}}</td>
                <td>{{$item->available}}</td>
                <td>{{number_format($item->price)}}</td>
                <td><a href="{{route('edit.product', ['id' => $item->id])}}">Xem</a></td>
                <td>{!!$item->description!!}</td>
                <td>
                    <a href="{{Route('delete.product', $item->id)}}" class="btn btn-danger btn-delete">Xóa</a>
                </td>
                <td></td>
            </tr>
            @endforeach
        </tbody>
    </table>
    {{ $data->links() }}
</div>
@endsection
@section('modal')
<form action="" method="POST" id="form-delete">
    @csrf
    @method("DELETE")
</form>
@endsection

@section('scripts')
<script>
    $('.btn-delete').click(function(ev) {
        ev.preventDefault();
        var _herf = $(this).attr('href');
        // submit form delete với link(href)
        $('form#form-delete').attr('action', _herf);
        if (confirm('Bạn có muốn xóa sản phẩm này không?')) {
            $('form#form-delete').submit();
        }
    })
</script>
@endsection
