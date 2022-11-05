@extends('admin.layouts.master')

@section('content')
<div class="container">
    <div class="card shadow mb-4 my-5">
        <div class="card-header py-3">
            <h6 class="m-font-weight-bold text-primary">List Permission</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama Role</th>
                            <th>Edit</th>
                            <th>Delete</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>No</th>
                            <th>Nama Role</th>
                            <th>Edit</th>
                            <th>Delete</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        @if(count($permissions) >0)
                        @foreach($permissions as $key=>$permission)
                        <tr>
                            <th scope="row">{{$key+1}}</th> <td>{{$permission->role->name}}</td>
                            <td>
                                <a href="{{route('permission.edit', [$permission->id])}}"><button    
                                        class="btn btn-outline-success">Edit</button></a>
                            </td>
                            <td>
                                <!-- Button trigger modal --> <button type="button" class="btn btn-danger"
                                    data-toggle="modal" data-target="#exampleModal{{$permission->id}}"> Delete </button>
                                <!-- Modal -->
                                <div class="modal fade" id="exampleModal{{$permission->id}}" tabindex="-1"
                                    aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <form action="{{route('permission.destroy', [$permission->id])}}" method="post">
                                            @csrf
                                            {{method_field('DELETE') }} <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel">DELETE</h5> <button
                                                        type="button" class="close" data-dismiss="modal"
                                                        aria-label="Close"> <span aria-hidden="true">&times; </span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    Apakah Anda Yakin ? </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary"
                                                        data-dismiss="modal">Close</button> <button type="submit"
                                                        class="btn btn-outline-danger">Delete</ button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </td>
                        </tr> 
                        @endforeach 
                        @else 
                        <td>
                            Tidak ada permission yang dapat ditampilkan.

                        </td>
                        @endif 
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div> @endsection
