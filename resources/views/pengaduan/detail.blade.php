@extends('admin.layouts.master')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-4">
            <div class="card">
                <div class="card-header">Pengaduan</div>
                <center>
                    <img src="{{asset('image')}}/{{$pengaduan->foto}}" class="img-responsibe" width="70%">
                </center>
                <div class="card-body">
                </div>
            </div>
        </div>
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Detail pengaduan</div>
                <div class="card-body">
                    @if (session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                    @endif
                    <p>Nama : <b>{{$pengaduan->user->name}} </b> </p>
                    <p>NIK : <b>{{$pengaduan->user->nik}} </b> </p>
                    <p>Tanggal : <b>{{$pengaduan->tgl_pengaduan}} </b> </p>
                    <p>Isi Laporan : <b>{{$pengaduan->isi_laporan}}</b> </p>
                    <p> Status:

                        @if ($pengaduan->status == '0')
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


                    </p>
                    <p> Tanggapan :
                        @if(empty($pengaduan->tanggapan->tanggapan))
                        <b> Belum ada Tanggapan </b>
                        @else
                        <b>{{ $pengaduan->tanggapan->tanggapan}}</b>
                        @endif
                    </p>
                    <br>
                    <br>
                    @if(empty($pengaduan->tanggapan->tanggapan))
                    <div class="form-group">
                        <a href="{{route('tanggapan.show', [$pengaduan->id])}}">
                            <button class="btn btn-outline-success">Beri Tanggapan</button></a>
                    </div>
                    @else
                    <div class="form-group">
                        <a href="{{route('tanggapan.edit', [$pengaduan->tanggapan->id])}}">
                            <button class="btn btn-primary">Update Tanggapan</button></a>
                    </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
