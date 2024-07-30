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
        @if ($errors->has('CategoryName'))
            <div class="alert alert-danger">
                {{ "حدث خطا اثناء تعديل الفئة" }}
            </div>
        @endif
				<!-- row -->
				<div class="row">
                    <div class="col-lg-12 col-xl-12 col-md-12 col-sm-12">
                        <div class="card  box-shadow-0">
                            <div class="card-header">
                                <h4 class="card-title mb-1">اضافة فئة جديدة للاصناف</h4>
                            </div>
                            <div class="card-body pt-0">
                                <form action="{{ route('Category.update', $Category_Data->id) }}" method="POST">
                                    @csrf
                                    @method('PUT') <!-- This specifies the PUT method for the form -->
                                    <div class="form-group">
                                        <label class="form-text pt-1">اســم الفـئـــة</label>
                                        <input disabled name="id" type="text" class="form-control" value="{{ old('id', $Category_Data->id) }}">
                                    </div>
                                    <div class="form-group">
                                        <label class="form-text pt-1">اســم الفـئـــة</label>
                                        <input name="CategoryName" type="text" class="form-control" value="{{ old('CategoryName', $Category_Data->name) }}">
                                        @if ($errors->has('CategoryName'))
                                            <span class="text-danger">{{ $errors->first('CategoryName') }}</span>
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
