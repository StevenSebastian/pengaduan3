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
                        <label for="name">Date</label>
                            <input type="date" name="tanggal" class="form-control @error('tanggal') is-invalid @enderror">

                            @error('tanggal')
                            <span class="invalid-feedback" role="alert">

                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror   

                        <label for="nik">nik</label>
                            <input type="number" name="nik" class="form-control @error('nik') is-invalid @enderror">

                            @error('nik')
                            <span class="invalid-feedback" role="alert">

                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror   
                            
                        <label for="isi_laporan">Laporan</label>
                            <input type="text" name="isi_laporan" class="form-control @error('isi_laporan') is-invalid @enderror">

                            @error('isi_laporan')
                            <span class="invalid-feedback" role="alert">

                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror   
                            
                        <label for="foto">Foto</label>
                            <input type="file" name="foto" class="form-control @error('foto') is-invalid @enderror">

                            @error('foto')
                            <span class="invalid-feedback" role="alert">

                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror

                        <label for="status">Status</label>
                        <select name="status" class="form-control @error('status') is-invalid @enderror">
                            <option value="">Pilih Status</option>
                            @foreach(App\Models\Pengaduan::all() as $status)
                            <option value="{{$status->id}}">{{$status->name}}</option>
                            @endforeach

                            @error('role_id')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </select>


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
