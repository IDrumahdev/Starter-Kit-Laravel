@push('customCss')
<link rel="stylesheet" href="{{ asset('assets/system/css/dataTables.bootstrap5.min.css') }}">
<link rel="stylesheet" href="{{ asset('assets/system/css/toastify.css') }}">
<link rel="stylesheet" href="{{ asset('assets/system/css//custome/default.css') }}">
@endpush

@extends('layouts.app')

@section('content')
<div class="page-heading">
    <div class="card-body">
        <div class="row">
            <div class="col-12 col-md-4 order-md-1 order-last">
                <a href="" class="btn icon icon-left btn-primary btn-sm me-1 mb-1"><i class="fas fa-plus-circle"></i> Create</a>
            </div>

            <div class="col-12 col-md-4 order-md-1 order-first">
                <h3>Data Permissions</h3>
            </div>
            <div class="col-12 col-md-4 order-md-2 order-last">
                <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">Authorization</li>
                        <li class="breadcrumb-item active" aria-current="page">Data Permissions</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
    
    <section class="section">
        <div class="card">
            <div class="card-body">
                <table class="table table-hover table-striped" id="tablePermissions">
                    <thead class="table-dark">
                        <tr>
                            <th class="text-left" width="20px">No.</th>
                            <th class="text-left" width="350px">Permission Name</th>
                            <th class="text-left" width="200px">Module Name</th>
                            <th class="text-left" width="200px">Guard Type</th>
                            <th class="text-left" width="200px">Created Time</th>
                            <th class="text-left" width="20px">Edit</th>
                        </tr>
                    </thead>
                </table>
            </div>
        </div>
    </section>
</div>
@stop
@push('customJs')
<script src="{{ asset('assets/system/js/jquery.min.js') }}"></script>
<script src="{{ asset('assets/system/js/datatables.min.js') }}"></script>
@include('master.auth.permission.table.permission')
@endpush

@push('Alert')
<script src="{{ asset('assets/system/js/toastify.js') }}"></script>
@if(Session::has('message'))
    @include('layouts.part._notif')
@endif
@endpush