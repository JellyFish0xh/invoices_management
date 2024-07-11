@extends('layouts.master')
@section('css')
@endsection
@section('page-header')
				<!-- breadcrumb -->
				<div class="breadcrumb-header justify-content-between">
					<div class="my-auto">
						<div class="d-flex">
							<h4 class="content-title mb-0 my-auto"> تحديث عميل</h4>
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
        @if ($errors->has('supplierName'))
            <div class="alert alert-danger">
                {{ "حدث خطا اثناء تحديث العميل" }}
            </div>
        @endif
        @if ($errors->has('contactDetail'))
            <div class="alert alert-danger">
                {{ "حدث خطا اثناء تحديث تفاصيل التوصيل" }}
            </div>
        @endif
				<!-- row -->
				<div class="row">
                    <div class="col-lg-12 col-xl-12 col-md-12 col-sm-12">
                        <div class="card  box-shadow-0">
                            <div class="card-header">
                                <h4 class="card-title mb-1">تحديث عميل</h4>
                            </div>
                            <div class="card-body pt-0">
                                <form action="{{ route('Customer.update', $supplier_Data->id) }}" method="POST">
                                    @csrf
                                    @method('PUT') <!-- This specifies the PUT method for the form -->
                                    <div class="form-group">
                                        <label class="form-text pt-1">رقم العميل</label>
                                        <input disabled name="id" type="text" class="form-control" value="{{ old('id', $supplier_Data->id) }}">
                                    </div>
                                    <div class="form-group">
                                        <label class="form-text pt-1">اســم العميل</label>
                                        <input name="supplierName" type="text" class="form-control" value="{{ old('supplierName', $supplier_Data->name) }}">
                                        @if ($errors->has('supplierName'))
                                            <span class="text-danger">{{ $errors->first('supplierName') }}</span>
                                        @endif
                                    </div>
                                    <div class="form-group">
                                        <label class="form-text pt-1">تفاصيل التوصيل</label>
                                        <input name="contactDetail" type="text" class="form-control" value="{{ old('contactDetail', $supplier_Data->contact_details) }}">
                                        @if ($errors->has('contactDetail'))
                                            <span class="text-danger">{{ $errors->first('contactDetail') }}</span>
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
