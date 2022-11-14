@extends('admin.layouts.master')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">

            @if(Session::has('message'))
            <div class="alert alert-success">
                {{Session::get('message')}}</div>
            @endif
            <form action="{{route('pengaduan.store')}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="card">
                    <div class="card-header">Tambah Pengaduan</div>

                <div class="card-body">
                    <div class="form-group">
                            <label for="name">Nama</label>
                            <input type="text" name="name" class="form-control" value="{{Auth::user()->name}}" readonly>
                        </div>
                        
                        <div class="form-group">
                            <label for="nik">Nik</label>
                            <input type="text" name="nik" class="form-control" value="{{Auth::user()->nik}}" readonly>
                        </div>     

                        <div class="form-group">
                            <label for="tgl_pengaduan">Tanggal Pengaduan</label>
                            <input type="date" name="tgl_pengaduan" class="form-control">
                        </div>


                        <input type="hidden" name="user_id" value="{{Auth::user()->id}}">

                        <div class="form-group">
                            <label for="isi_laporan">Isi Laporan</label>
                            <input type="text" name="isi_laporan" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="foto">Foto</label>
                            <input type="file" name="foto" class="form-control">
                        </div>
                        <!-- <div class="form-group">
                            <label for="status">Status</label>
                            <input type="text" name="status" class="form-control">
                        </div> -->

                        <!-- <div class="form-group">
                        <label for="browser">Choose your browser from the list:</label>
                        <select name="status" class="form-control @error('status') is-invalid @enderror">                        <datalist id="browsers">
                        <option value="">Pilih Status</option>
                            @foreach(App\Models\Pengaduan::all() as $pengaduan)
                            <option value="{{$pengaduan->id}}">{{$pengaduan->status}}</option>
                            @endforeach

                            @error('pengaduan_id')
                            <span class="invalid-feedback" pengaduan="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </select>
                        </div> -->

                          <!-- <div class="form-group">
                            <label for="status">Status</label>
                            <input type="text" name="status" class="form-control">
                        </div> -->

                        <!-- <div class="form-group">
                        <label for="browser">Choose your browser from the list:</label>
                        <input type="text" name="status" class="form-control @error('status') is-invalid @enderror">
                        <select type="text" name="status" class="form-control @error('status') is-invalid @enderror">                    
                        <option value="">Pilih Status</option>
                           
                            <option value="">proses</option>
  
                            <option value="">
    <option value="Firefox">
    
                        </select>
                        </div> -->
                        <div class="form-group">
                            <button class="btn btn-outline-primary">Tambah</button>
                        </div>
                    </div>
            </form>
        </div>
    </div>
</div>
</div>
@endsection