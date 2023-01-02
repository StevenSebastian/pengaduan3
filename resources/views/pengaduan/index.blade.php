@extends('admin.layouts.master')

@section('content')
<div class="container">

    <div class="row justify-content-center">
        <div class="col-md-10">

            @if(Session::has('message'))
            <div class="alert alert-success">
                {{Session::get('message')}}</div>
            @endif
        </div>
    </div>
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">List Pengaduan</div>

                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th scope="col">No</th>
                                    <th scope="col">User</th>
                                    <th scope="col">Tanggal Pengaduan</th>
                                    <!-- <th scope="col">Nik</th> -->
                                    <th scope="col">Isi Laporan</th>
                                    <th scope="col">Foto</th>
                                    <th scope="col">Status</th>
                                    <th scope="col">Edit</th>
                                    <th scope="col">Delete</th>
                                    <th scope="col">View</th>
                                </tr>
                            </thead>

                        

                            <!-- <tfoot>
                                <tr>
                                    <th scope="col">No</th>
                                    <th scope="col">User</th>
                                    <th scope="col">Tanggal Pengaduan</th>
                                    <th scope="col">Nik</th>
                                    <th scope="col">Isi Laporan</th>
                                    <th scope="col">Foto</th>
                                    <th scope="col">Status</th>
                                    <th scope="col">Edit</th>
                                    <th scope="col">Delete</th>
                                    <th scope="col">View</th>
                                </tr>
                            </tfoot> -->
                            <tbody>
                                @if(count($pengaduans)>0)
                                @foreach($pengaduans as $key=>$pengaduan)
                                <tr>
                                    <th scope="row">{{$key+1}}</th>
                                    <td>{{$pengaduan->user->name}}</td>
                                    <td>{{$pengaduan->tgl_pengaduan}}</td>
                                    <!-- <td>{{$pengaduan->user_id}}</td> -->
                                    <td>{{$pengaduan->isi_laporan}}</td>
                                    <td><img src="{{asset('image')}}/{{$pengaduan->foto}}" width="100"></td>

                                    <td>@if ($pengaduan->status == '0')
                                        <span class="px-3 bg-gradient-danger text-white">
                                            {{$pengaduan->status}}
                                        </span>
                                        @elseif ($pengaduan->status == 'Proses')
                                        <span class="px-3 bg-gradient-warning text-white">
                                            {{ $pengaduan->status}}
                                        </span>
                                        @else
                                        <span class="px-3 bg-gradient-success text-white">
                                            {{$pengaduan->status}}
                                        </span>
                                        @endif

                                    <td>
                                    @if(Auth::user()->role == 0)
                                        <a href="{{route('pengaduan.show',[$pengaduan->id])}}"><button
                                                class="btn btn-outline-success" aria-hidden="true"
                                                style="font-size:20px"><i class="fa fa-eye"></i></button></a>
                                    @else
                                    <a href="{{route('pengaduan.edit',[$pengaduan->id])}}"><button
                                                class="btn btn-outline-success" aria-hidden="true"
                                                style="font-size:25px"><i class="fa fa-edit"></i></button></a>
                                    </td>

                                    <td>
                                        <!-- Button trigger modal -->
                                        <button type="button" class="btn btn-danger" aria-hidden="true"
                                            style="font-size:25px" data-toggle="modal"
                                            data-target="#exampleModal{{$pengaduan->id}}">
                                            <i class="fa fa-trash"></i>
                                        </button>
                                        <!-- Modal -->
                                        <div class="modal fade" id="exampleModal{{$pengaduan->id}}" tabindex="-1"
                                            aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <form action="{{route('pengaduan.destroy',[$pengaduan->id])}}"
                                                    method="post">
                                                    @csrf
                                                    {{method_field('DELETE')}}
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="exampleModalLabel">DELETE</h5>
                                                            <button type="button" class="close" data-dismiss="modal"
                                                                aria-label="Close">

                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>
                                                        <div class="modal-body">
                                                            Apakah Anda Yakin ?
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary"
                                                                data-dismiss="modal">Close</button>

                                                            <button type="submit"
                                                                class="btn btn-outline-danger">Delete</button>
                                                        </div>
                                                    </div>
                            
                                                </form>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <a href="{{route('pengaduan.show',[$pengaduan->id])}}"><button
                                                class="btn btn-outline-danger" aria-hidden="true"
                                                style="font-size:25px"><i class="fa fa-street-view"></i></button></a>
                                    </td>
                                    @endif
                                </tr>
                                @endforeach
                                @else
                                <td>Tidak</td>
                                <td>ada</td>
                                <td>pengaduan</td>
                                <td>yang</td>
                                <td>dapat</td>
                                <td>ditampilkan.</td>
                                <!-- <td>Tidak ada pengaduan yang dapat ditampilkan.</td> -->
                                @endif
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
