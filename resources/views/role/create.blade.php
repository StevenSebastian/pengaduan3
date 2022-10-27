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
                <form action="{{route('role.store')}}" method="post">
                @csrf
                <div class="card-header">Tambah Role</div>

                <div class="card-body">
                    <div class="form-group">
                        <label for="name">Name</label>
                            <input type="text" name="name" class="form-control">
                        <label for="desc">Deskripsi</label>
                            <input type="text" name="deskripsi" class="form-control">
                   <br>
                            <div class="form-group">
                                <button class="btn btn-outline-primary">Submit</button>
                            </div>
                   
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
