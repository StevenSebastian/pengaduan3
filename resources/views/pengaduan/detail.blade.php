@extends ('admin.layouts.master')

@section ('content')
<div class="container">
    @if(Session::has('message'))
    <div class="alert alert-success">
        {{Session::get('message')}}</div>
    @endif
    <div class="card o-hidden border-0 shadow-lg my-5">
        <div class="card-body p-0">

            <div class="card">
                <div class="card-header"><b>Detail Pengaduan</b></div>

                <div class="card-body">
                    <div class="form-group">
                        Nama Pelapor :
                        <b>{{$pengaduan->user->name}}</b><br>
                        Nik : <b>{{$pengaduan->user->nik}}</b><br>
                        Tanggal Pengaduan : <b>{{$pengaduan->tgl_pengaduan}}</b><br>
                        Status : <b>@if ($pengaduan->status == '0')
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
                            @endif</b><br>
                        Isi pengaduan : <b>{{$pengaduan->isi_laporan}}</b><br>
                        Foto : <br><img src="{{asset('image')}}/{{$pengaduan->foto}}" width="50%">
                    </div>

                    <div class="form-group">
                        Tanggapan :
                        @if(empty($pengaduan->tanggapan->tanggapan))
                        <b>Belum ada Tanggapan</b>
                        @else
                        <b>{{ $pengaduan->tanggapan->tanggapan }}</b>
                        @endif

                        @if(Auth::user()->role != 0)
                        @if(empty($pengaduan->tanggapan->tanggapan))
                        <div class="form-group">
                            <a href="{{route('tanggapan.show',[$pengaduan->id])}}">
                                <button class="btn btn-primary">Beri Tanggapan</button>
                            </a>

                        @else
                        <div class="form-group">
                            <a href="{{route('tanggapan.edit',[$pengaduan->tanggapan->id])}}">
                                <button class="btn btn-primary">Update Tanggapan</button>
                            </a>
                        </div>
                        @endif
                        @endif
                    </div>

                    <!-- @if(Auth::user()->role !== 0)
                        //Jika role tidak sama dengan 0, tampil tombol tanggapan
                    @endif -->


                    <!-- <div class="form-group">
                        <a href="{{route('tanggapan.show', [$pengaduan->id])}}"><button class="btn btn-primary">Beri
                                Tanggapan</i></button</a> 
                            </div>  -->
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
