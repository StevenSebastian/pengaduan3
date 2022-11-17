@extends('admin.layouts.master')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Detail Pengaduan</div>
                <div class="card-body">
                <div class="table-responsive">
                    
                    <p>
                        Nomor Pengaduan     :{{$pengaduan->id}}
                    </p>
                    <p>
                        Nama             :{{$pengaduan->user->name}}
                    </p>
                    <p>
                        NIK             :{{$pengaduan->user->nik}}
                    </p>
                    <p>
                        Tangggal Pengaduan  :{{$pengaduan->tgl_pengaduan}}
                    </p>
                    <p>
                        Isi Laporan         :{{$pengaduan->isi_laporan}}
                    </p>
                    <!-- #class="lead" -->
                    <p>
                        Status              :{{$pengaduan->status}}
                    </p>
                    <img src="{{asset('image')}}/{{$pengaduan->foto}}" class="img-responsibe" width="335">
                    
                    <!-- <div class="card-header">Tanggapan Pengaduan</div>
<br> -->
<br><br>
                    <div class="form-group">
                        <a href="{{ route('tanggapan.show',[$pengaduan->id])}}"></a>
                        <button class="btn btn-outline-warning">Beri Tanggapan</button>

                    </div>
                                    
                </div>
                    </div>
                    </div>
            </div>
        </div>
                </div>
@endsection
