@extends('layouts.mainlayout')

@section('title', 'permission.index')

@section('content')
    <div class="container mt-5 pt-5  ">
        <div class="row">
            <div class="col-md-6 col-12">
                Permissions
            </div>
        </div>
        <div class="card px-3">
            <div class="row">
                <div class="col-12">
                    Permission
                    <button type="button" class="btn btn-primary float-end" data-bs-toggle="modal"
                        data-bs-target="#exampleModal">ADD</button>
                </div>
            </div>
        </div>

    </div>
@endsection

@include('permission.create')
