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
                {{ "حدث خطا اثناء اضافة الفئة" }}
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
                                <form class="form-horizontal" method="post" action="{{route("Category.store")}}">
                                    @csrf
                                    <div class="form-group">
                                        <label class="form-text pt-1" for="inputName">اســم الفـئـــة</label>
                                        <input name=" CategoryName" type="text" class="form-control" id="inputName" placeholder="أدخــل الاســم هنــا باللغــة العربيــه">

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
