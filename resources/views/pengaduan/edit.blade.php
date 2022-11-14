@extends('admin.layouts.master')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">

            @if(Session::has('message'))
    <div class="alert alert-success">
    {{Session::get('message')}}</div>
    @endif
            <form action="{{route('pengaduan.update',[$pengaduan->id])}}" method="post" enctype="multipart/form-data">
            @csrf
{{method_field('PUT')}}
            <div class="card">
            <div class="card-header">Tambah Pengaduan</div>

            <div class="card-body">
                        <div class="form-group">
                            <label for="tgl_pengaduan">Tanggal Pengaduan</label>
                            <input type="date" name="tgl_pengaduan" class="form-control" value="{{$pengaduan->tgl_pengaduan}}">
                        </div>
                        <div class="form-group">
                            <label for="nik">Nik</label>
                            <input type="text" name="nik" class="form-control" value="{{$pengaduan->nik}}">
                        </div>

                        <input type="hidden" name="user_id" value="{{Auth::user()->id}}">

                        <div class="form-group">
                            <label for="isi_laporan">Isi Laporan</label>
                            <input type="text" name="isi_laporan" class="form-control" value="{{$pengaduan->isi_laporan}}">
                        </div>
                        <div class="form-group">
                            <label for="foto">Foto</label>
                            <input type="file" name="foto" class="form-control" value="{{$pengaduan->foto}}" >
                        </div>
                        <div class="form-group">
                            <label for="status">Status</label>
                            <input type="text" name="status" class="form-control" value="{{$pengaduan->status}}">
                        </div>
                        <div class="form-group">
                    <button class="btn btn-outline-primary">Update</button>
                   </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
