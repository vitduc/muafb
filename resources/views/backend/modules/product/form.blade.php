@extends('backend.layouts.master')
@section('title', 'Thêm sản phẩm')
@section('Content')
<div class="col-md-12 col-lg-10">
    <br>
    <h4 class="mb-3">Thêm sản phẩm</h4>

    <form class="needs-validation" action="{{route('post.product')}}" method="POST">
        @csrf
        <div class="row g-3">
            <div class="col-md-6">
                <label class="form-label">Danh mục</label>
                <select class="form-select" name="id_category" required="">
                    <option value="">--Chọn--</option>
                    @foreach ($categories as $category)
                    <option value="{{$category->id}}">{{$category->name}}</option>
                    @endforeach
                </select>
            </div>
            <div class="col-md-6">
                <label for="zip" class="form-label">Tên SP</label>
                <input type="text" class="form-control" name="name" required="">
            </div>
            <div class="col-md-4">
                <label for="zip" class="form-label">Quốc gia</label>
                <input type="text" class="form-control" name="country" required="">
            </div>
            <div class="col-md-4">
                <label for="zip" class="form-label">Giá</label>
                <input type="number" class="form-control" name="price" required="">
            </div>
            <div class="col-md-4">
                <label for="zip" class="form-label">Số lượng</label>
                <input type="number" class="form-control" name="available" required="" min="1">
            </div>
            <div class="form-group">
                <label for="">Nội dung</label>
                <textarea name="content" class="form-control ckeditor" cols="5" rows="5" style="visibility: hidden; display: none;"></textarea>
            </div>
            <div class="form-group">
                <label for="">Mô tả</label>
                <textarea name="description" class="form-control ckeditor" cols="5" rows="5" style="visibility: hidden; display: none;"></textarea>
            </div>
        </div>
        <hr class="my-4">
        <button class="w-12 btn btn-primary btn-lg" type="submit">Thực hiện</button>
    </form>
</div>
@endsection
