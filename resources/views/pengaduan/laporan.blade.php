@extends('admin.layouts.master')

@section('content')
<div class="container">
    <div class="form-group">
        <a href="{{url('/laporan/cetak')}}"><button class="btn btn-primary">
                Export To PDF
            </button></a>
    </div>

    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">Laporan</div>

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
                                </tr>
                            </thead>

                            <tfoot>
                                <tr>
                                <th scope="col">No</th>
                                    <th scope="col">User</th>
                                    <th scope="col">Tanggal Pengaduan</th>
                                    <!-- <th scope="col">Nik</th> -->
                                    <th scope="col">Isi Laporan</th>
                                    <th scope="col">Foto</th>
                                    <th scope="col">Status</th>
                                </tr>
                            </tfoot>
                            <tbody>
                                @if(count($pengaduans)>0)
                                @foreach($pengaduans as $key=>$pengaduan)
                                <tr>
                                    <th scope="row">{{$key+1}}</th>
                                    <td>{{$pengaduan->user->name}}</td>
                                    <td>{{$pengaduan->tgl_pengaduan}}</td>
                                    <td>{{$pengaduan->isi_laporan}}</td>
                                    <!-- <td>{{$pengaduan->user_id}}</td> -->
                                    <td><a href="{{asset('image')}}/{{$pengaduan->foto}}" target="_blank">
                                            <img src="{{asset('image')}}/{{$pengaduan->foto}}" width="100"></a></td>

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
                                    </td>
                                </tr>
                                @endforeach
                                @else
                                <td>Tidak ada pengaduan yang dapat ditampilkan.</td>
                                @endif
                            </tbody>
                        </table>

                    </div>
                </div>
            </div>
        </div>
        @endsection
