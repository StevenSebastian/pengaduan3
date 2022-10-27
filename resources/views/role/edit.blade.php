@extends('admin.layouts.master')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                @if(Session::has('message'))
                <div class="alert alert-success">
                    {{Session::get('message')}}
                </div>
                @endif
                <form action="{{route('role.update',[$role->id])}}" method="post">
                @csrf
                {{method_field('PUT')}}
                <div class="card">
                <div class="card-header">Update Role</div>

                <div class="card-body">
                    <div class="form-group">
                        <label for="name">Name</label>
                            <input type="text" name="name" class="form-control" value="{{$role->name}}">
                        <label for="desc">Deskripsi</label>
                            <input type="text" name="deskripsi" class="form-control" value="{{$role->deskripsi}}">
                   <br>
                            <div class="form-group">
                                <button class="btn btn-outline-primary">Update</button>
                            </div>
                   
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
