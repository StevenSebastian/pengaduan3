@extends('admin.layouts.master')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
        @if(Session::has('message'))
<div class="alert alert-success">
{{Session::get('message')}}
</div>
@endif
            <div class="card">
                <div class="card-header">All Role</div>

                <div class="card-body">
                
                <table class="table">
                    <thead class="table-dark">
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Name</th>
                            <th scope="col">Deskripsi</th>
                            <th scope="col">Edit</th>
                            <th scope="col">Delete</th>
                        </tr>
                    </thead>
                    <tbody>
                    @if(count($role)>0)
                    @foreach($role as $key=>$role)
                        <tr>
                        <th scope="row">{{$key+1}}</th>
                        <td>{{$role->name}}</td>
                        <td>{{$role->deskripsi}}</td>
                        <td>
                        <a href="{{route('role.edit', [$role->id])}}"><button class="btn btn-outline-success">Edit</button></a>
                        </td>
                        <td>
                        <a href=""><form action="{{route('role.destroy',[$role->id])}}" method="post">
                        @csrf
                        {{method_field('DELETE')}}
                        <button class="btn btn-outline-danger">Delete</button></a>
                        </td>
                        </tr>
                        @endforeach
                        @else
                        <td>Tidak ada role yang dapat ditampilkan.</td>
                        @endif
                        </tr>
                    </tbody>
                </table>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
