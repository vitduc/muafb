@extends('backend.layouts.master')
@section('title', 'Tạo thông báo')
@section('Content')
<h2>Tạo thông báo trang web</h2>
@include('_alert')
<form class="needs-validation" action="{{route('post.notification')}}" method="POST">
    @csrf
    <div class="row g-3" style="margin: 20px 0">
        <div class="col-md-6">
            <label for="zip" class="form-label">Tên Thông báo</label>
            <input type="text" class="form-control" name="name" required="">
        </div>
        <div class="col-md-3">
            <label class="form-label">Trạng thái</label>
            <select class="form-select" name="status" required="">
                <option value="1">Bật</option>
                <option value="0">Tắt</option>

            </select>
        </div>
        <div class="form-group">
            <label for="">Vui lòng nhập</label>
            <textarea name="content" class="form-control ckeditor" cols="5" rows="5" style="visibility: hidden; display: none;"></textarea>
        </div>
    </div>
    <button class="w-12 btn btn-primary btn-lg" type="submit">Thêm thông báo</button>
</form>
<br class="my-4">
<h2>Danh sách danh mục</h2>
<hr class="my-4">
<div class="table-responsive">
    <table class="table table-striped table-sm">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Tên</th>
                <th scope="col">Trạng thái</th>
                <th scope="col">Nội dung</th>
                <th scope="col">Thao tác</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($data as $item)
            <tr>
                <td>{{$item->id}}</td>
                <td>{{$item->name}}</td>
                <td>
                    @if ($item->status == 1)
                        Bật
                    @else
                        Tắt
                    @endif
                </td>
                <td><a href="{{Route('edit.notification', $item->id)}}">Xem</a></td>
                <td width="200px">
                    <a href="{{Route('delete.notification', $item->id)}}" class="btn btn-danger btn-delete">Xóa</a>
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
        if (confirm('Bạn có muốn xóa thông báo này không?')) {
            $('form#form-delete').submit();
        }

    })

</script>
@endsection
