@extends('backend.layouts.master')
@section('title', 'Danh sách danh mục')
@section('Content')
<h2>Thêm danh mục</h2>
<form class="needs-validation" action="{{route('post.category')}}" method="POST">
    @csrf
    <div class="row g-3">
        <div class="col-md-4">
            <label for="zip" class="form-label">Tên danh mục</label>
            <input type="text" class="form-control" name="category" required="">
        </div>
    </div>
    <br class="my-4">
    <button class="w-12 btn btn-primary btn-lg" type="submit">Thực hiện</button>
</form>
<br class="my-4">
<h2>Danh sách danh mục</h2>
<hr class="my-4">
<div class="table-responsive">
    @include('_alert')
    <table class="table table-striped table-sm">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Tên</th>
                <th scope="col">Thao tác</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($data as $item)
            <tr>
                <td>{{$item->id}}</td>
                <td>{{$item->name}}</td>
                <td width="200px">
                    <a href="{{Route('delete.category', $item->id)}}" class="btn btn-danger btn-delete">Xóa</a>
                </td>
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
        if (confirm('Bạn có muốn xóa bài viết này không?')) {
            $('form#form-delete').submit();
        }

    })

</script>
@endsection
