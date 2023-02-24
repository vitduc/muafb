@extends('backend.layouts.master')
@section('title', 'Dashboard')
@section('Content')
<div class="container px-4 py-5" id="featured-3">
    <h2 class="pb-2 border-bottom">Quản lý chung</h2>
    <div class="row g-4 py-5 row-cols-1 row-cols-lg-3">
        <div class="feature col">
            <div class="feature-icon bg-primary bg-gradient">
                <svg class="bi" width="1em" height="1em">
                    <use xlink:href="#collection" /></svg>
            </div>
            <h2>Quản lý tài nguyên <span style="color:red;font-size:30px">({{ $product->count() }})</span></h2>
            <p>Paragraph of text beneath the heading to explain the heading. We'll add onto it with another sentence and probably just keep going until we run out of words.</p>
            <a href="{{route('admin.product')}}" class="icon-link">
                Xem chi tiết
                <svg class="bi" width="1em" height="1em">
                    <use xlink:href="#chevron-right" /></svg>
            </a>
        </div>
        <div class="feature col">
            <div class="feature-icon bg-primary bg-gradient">
                <svg class="bi" width="1em" height="1em">
                    <use xlink:href="#people-circle" /></svg>
            </div>
            <h2>Khách hàng<span style="color:red;font-size:30px">({{ $users->count() }})</span></h2>
            <p>Paragraph of text beneath the heading to explain the heading. We'll add onto it with another sentence and probably just keep going until we run out of words.</p>
            <a href="{{route('admin.users')}}" class="icon-link">
                Xem chi tiết
                <svg class="bi" width="1em" height="1em">
                    <use xlink:href="#chevron-right" /></svg>
            </a>
        </div>
        <div class="feature col">
            <div class="feature-icon bg-primary bg-gradient">
                <svg class="bi" width="1em" height="1em">
                    <use xlink:href="#toggles2" /></svg>
            </div>
            <h2>Liên hệ</h2>
            <p>Paragraph of text beneath the heading to explain the heading. We'll add onto it with another sentence and probably just keep going until we run out of words.</p>
            <a href="#" class="icon-link">
                Xem chi tiết
                <svg class="bi" width="1em" height="1em">
                    <use xlink:href="#chevron-right" /></svg>
            </a>
        </div>
    </div>
</div>
@endsection