@extends('layouts.master')
@section('css')
@endsection
@section('page-header')
<!-- breadcrumb -->
<div class="breadcrumb-header justify-content-between">
    <div class="my-auto">
        <div class="d-flex">
            <h4 class="content-title mb-0 my-auto">اضافة فئة</h4>
        </div>
    </div>
</div>
<!-- breadcrumb -->
@endsection
@section('content')
@if (session('success'))
<div class="alert alert-success">
    {{ session('success') }}
</div>
@endif
@if ($errors->any())
<div class="alert alert-danger">
    {{ "حدث خطأ أثناء إضافة المنتج" }}
</div>
@endif
<!-- row -->
<div class="row">
    <div class="col-lg-12 col-xl-12 col-md-12 col-sm-12">
        <div class="card  box-shadow-0">
            <div class="card-header">
                <h4 class="card-title mb-1">اضافة منتج جديد</h4>
            </div>
            <div class="card-body pt-0">
                <form class="form-horizontal" method="post" action="{{route("Product.store")}}">
                    @csrf
                    <div class="form-group">
                        <label class="form-text pt-1" for="inputName">اســم المنتج</label>
                        <input name="ProductName" type="text" class="form-control" id="inputName" placeholder="أدخــل الاســم هنــا باللغــة العربيــه" value="{{ old('ProductName') }}">
                        @error('ProductName')
                        <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label class="form-text pt-1" for="CategoryID">اختار الفئة</label>
                        <select name="CategoryID" class="form-control">
                            <option value="">...</option>
                            @foreach ($all_cat as $category)
                            <option value="{{ $category->id }}" {{ old('CategoryID') == $category->id ? 'selected' : '' }}>{{ $category->name }}</option>
                            @endforeach
                        </select>
                        @error('CategoryID')
                        <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="row form-group">
                        <div class="col">
                            <label class="form-text pt-1" for="Stockid">اختار المخزن</label>
                            <select id="Stockid" name="Stock_ID" class="form-control">
                                <option value="">...</option>
                                @foreach ($all_stocks as $stock)
                                <option value="{{ $stock->id }}" {{ old('Stock_ID') == $stock->id ? 'selected' : '' }}>{{ $stock->name }}</option>
                                @endforeach
                            </select>
                            @error('Stock_ID')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col">
                            <label for="base" class="form-text pt-1">كمية المخزن</label>
                            <input id="base" name="Base_quantity" type="number" min="0" class="form-control" value="{{ old('Base_quantity') }}">
                            @error('Base_quantity')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col">
                            <label for="buy_price">سعر الشراء</label>
                            <input name="buy_price" id="buy_price" type="number" min="0" class="form-control" value="{{ old('buy_price') }}">
                            @error('buy_price')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col">
                            <label for="sell_price">سعر البيع</label>
                            <input id="sell_price" name="sell_price" type="number" min="0" class="form-control" value="{{ old('sell_price') }}">
                            @error('sell_price')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group mb-0 mt-3 justify-content-end">
                        <div>
                            <button type="submit" class="btn btn-primary">حفظ</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- row closed -->
@endsection
@section('js')
@endsection
