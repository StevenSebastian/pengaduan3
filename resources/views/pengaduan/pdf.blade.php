<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laporan</title>
    <!-- CSS only -->
    <link="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqo46MgnOM8zW1RWuH61DGLwZJEK2Kadq2F9CUG65" crossorigin="anonymous">
</head>
<body>
    <div class="title text-center mb-5">
        <h2>Laporan Layanan Pengaduan Masyarakat</h2>
        <h5>Kota Jakarta Barat</h5>
    </div>

    <table class="table table-bordered">
        <thead>
            <tr>
                <th scope="col">No</th>
                <th scope="col">User</th>
                <th scope="col">Tanggal Pengaduan</th>
                <th scope="col">Isi Laporan</th>
                <th scope="col">Status</th>
            </tr>
        </thead>
        <tbody>
            @foreach($pengaduans as $key=>$pengaduan)
            <tr>
                <th scope="row">{{$key+1}}</th>
                <td>{{$pengaduan->user->name}}</td>
                <td>{{$pengaduan->tgl_pengaduan}}</td>
                <td>{{$pengaduan->isi_laporan}}</td>
                <td>{{$pengaduan->status}}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>