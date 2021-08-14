@extends('admin.layouts.master')

{{-- set page title --}}
@section('title', 'Create Product')

{{-- set breadcrumbName --}}
@section('breadcrumbName', 'Product Management')

{{-- set breadcrumbMenu --}}
@section('breadcrumbMenu', 'Create Product')

{{-- import file css (private) --}}
@push('css')
    <link rel="stylesheet" href="/admin/css/product/product-create.css">
@endpush

@section('content')
<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item active" aria-current="page">List Products</li>
        <li class="breadcrumb-item active" aria-current="page">Create Products</li>
    </ol>
</nav>
    <h4>Create Product</h4>
    
    @include('errors.error')
    
    <form action="{{ route('admin.product.store') }}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="form-group mb-5">
            <label for=""> Tên  sản phẩm</label>
            <input type="text"  name="name" placeholder=" Enter Product name" value="{{ old('name') }}" class="form-control" required="required">
            @error('name')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group mb-5">
            <label for="">Mô tả sản phẩm</label>
            <textarea  name="description" rows="5" class="form-control" required="required">{{ old('description') }}</textarea>
            @error('description')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group mb-5">
            <label for=""> Hình ảnh</label>
            <input type="file"  name="image" placeholder=" Enter Product Image" class="form-control" required="required">
            @error('image')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group mb-5">
            <label for=""> Giá</label>
            <input type="text"  name="price" placeholder=" Enter Product price" value="{{ old('price') }}" class="form-control" required="required">
            @error('price')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
`
        <div class="form-group mb-5">
            <label> Tình trạng sản phẩm</label>
            <input type="text"  name="status" placeholder=" Enter Product status" value="{{ old('status') }}" class="form-control" required="required">
            @error('status')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror 
        </div>
        <div class="form-group mb-5">
            <label for=""> Số lượng</label>
            <input   type="text"  name="quantity" placeholder=" Enter Product quantity" value="{{ old('quantity') }}" class="form-control" required="required">
            @error('quantity')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        
        <div class="form-group mb-5">
            <label for="">Thong tin sản phẩm</label>
            <textarea  name="content" rows="5" class="form-control" required="required">{{ old('price') }}</textarea>
            @error('price')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group mb-5">
            <label for="">Chi tiết hình ảnh</label>
            <input type="file"  name="url[]" multiple placeholder=" Enter Product url" class="form-control" required="required">
            @error('url')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group mb-5">
            <label for="">Phân loại sản phẩm</label>
            <select  name="category_id" class="form-control" required="required">
                @if(!empty($categories))
                    @foreach ($categories as $categoryId => $categoryName)
                        <option value="{{ $categoryId }}" {{ old('category_id') == $categoryId ? 'selected' : ''  }}>{{ $categoryName }}</option>
                    @endforeach
                @endif
            </select>
            @error('category_id')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            {{-- <a href="{{ route('admin.products.index') }}" class="btn btn-secondary">List Post</a> --}}
            <button type="submit" class="btn btn-primary">Create</button>
        </div>
    </form>
@endsection