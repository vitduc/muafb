@extends('backend.layouts.master')
@section('title', 'Tạo thông báo')
@section('Content')

<h2>Thông báo trang web</h2>
<form class="needs-validation" action="{{route('post.notification')}}" method="POST">
    @csrf
    <div class="row g-3" style="margin: 20px 0">
        <div class="col-md-6">
            <label for="zip" class="form-label">Tên Thông báo</label>
            <input type="text" class="form-control" name="name" required="" value="{{$data->name}}">
            <input type="hidden" class="form-control" name="id" value="{{$data->id}}"> 
        </div>
        <div class="col-md-3">
            <label class="form-label">Trạng thái</label>
            <select class="form-select" name="status" required="">
                <option value="1" {{$data->status == 1 ? 'selected' : ''}}>Bật</option>
                <option value="0" {{$data->status == 0 ? 'selected' : ''}}>Tắt</option>
            </select>
        </div>
        <div class="form-group">
            <label for="">Nội dung</label>
            <textarea name="content" class="form-control ckeditor" cols="5" rows="5" style="visibility: hidden; display: none;">{{$data->content}}</textarea>
        </div>
    </div>
    <button class="w-12 btn btn-primary btn-lg" type="submit">Update thông báo</button>
</form>

@endsection

