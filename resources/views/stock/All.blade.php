@extends('layouts.master')
@section('css')
@endsection
@section('page-header')
    <!-- breadcrumb -->
    <div class="breadcrumb-header justify-content-between">
        <div class="my-auto">
            <div class="d-flex">
                <h4 class="content-title mb-0 my-auto">كل المخازن</h4>
            </div>
        </div>
    </div>
    <!-- breadcrumb -->
@endsection
@section('content')
    <!-- row opened -->
    <div class="row row-sm">
        <div class="col-xl-12">
            @if (session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif
            <div class="card">
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table text-md" id="example1">
                            <thead>
                            <tr>
                                <th class="wd-15p border-bottom-0">ID</th>
                                <th class="wd-15p border-bottom-0">المخزن</th>
                                <th class="wd-20p border-bottom-0">تاريخ الاضافة</th>
                                <th class="wd-30p border-bottom-0">العمليات</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($all_stock as $stock)
                                <tr>
                                    <td>{{ $stock->id }}</td>
                                    <td>{{ $stock->name }}</td>
                                    <td>{{ $stock->created_at->format('Y-m-d') }}</td>
                                    <td>
                                        <a href="{{ route('Stock.edit', $stock->id) }}" class="btn btn-sm btn-warning"><i class="fas fa-edit"></i></a>
                                        <form action="{{ route('Stock.destroy', $stock->id) }}" method="POST" style="display:inline;">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-sm btn-danger"><i class="fas fa-trash-alt"></i></button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div class="d-flex justify-content-center">
                        <div class="row">
                            <div class="dataTables_paginate paging_simple_numbers">
                                {!! $all_stock->links('pagination::bootstrap-4') !!}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--/div-->
    </div>
    <!-- /row -->
@endsection
@section('js')
@endsection