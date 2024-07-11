@extends('layouts.master')
@section('css')
@endsection
@section('page-header')
				<!-- breadcrumb -->
				<div class="breadcrumb-header justify-content-between">
					<div class="my-auto">
						<div class="d-flex">
							<h4 class="content-title mb-0 my-auto">تحديث محزن</h4>
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
        @if ($errors->has('CategoryName'))
            <div class="alert alert-danger">
                {{"حدث خطا اثناء تحديث المخزن" }}
            </div>
        @endif
				<!-- row -->
				<div class="row">
                    <div class="col-lg-12 col-xl-12 col-md-12 col-sm-12">
                        <div class="card  box-shadow-0">
                            <div class="card-header">
                                <h4 class="card-title mb-1">تحديث المخزن</h4>
                            </div>
                            <div class="card-body pt-0">
                                <form action="{{ route('Stock.update', $stock_Data->id) }}" method="POST">
                                    @csrf
                                    @method('PUT') <!-- This specifies the PUT method for the form -->
                                    <div class="form-group">
                                        <label class="form-text pt-1">رقم المخزن</label>
                                        <input disabled name="id" type="text" class="form-control" value="{{ old('id', $stock_Data->id) }}">
                                    </div>
                                    <div class="form-group">
                                        <label class="form-text pt-1">اســم المخزن</label>
                                        <input name="stockName" type="text" class="form-control" value="{{ old('stockName', $stock_Data->name) }}">
                                        @if ($errors->has('stockName'))
                                            <span class="text-danger">{{ $errors->first('stockName') }}</span>
                                        @endif
                                    </div>
                                    <div class="form-group mb-0 mt-3 justify-content-end">
                                        <button type="submit" class="btn btn-primary">تحديث</button>
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
