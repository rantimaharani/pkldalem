
@extends('layouts.admin')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Halaman peminjam</div>
                <br>
                    <center><a href="{{ route('peminjam.create') }}" class="btn btn-primary">Tambah</a></center>
                <br>
                    <div class="table-responsive">
                        <table class="table">
                            <tr>
                                <th>No</th>
                                <th>Nama peminjam</th>
                                <th>Alamat</th>
                                <th>No Telepon</th>
                                <th>Foto</th>
                                <th clospan="3" style="text-align: center;">Aksi</th>
                            </tr>
                         @php $no =1; @endphp
                         @foreach($peminjam as $data)
                            <tr>
                                <td>{{ $no++ }}</td>
                                <td>{{ $data->peminjam_nama }}</td>
                                <td>{{ $data->peminjam_alamat }}</td>
                                <td>{{ $data->peminjam_telp }}</td>
                                <td><img src="{{ asset('assets/img/peminjam/'.$data->foto) }}" alt="" height="200px" width="300px"></td>
                                <td><a href="{{ route('peminjam.edit', $data->id) }}" class="btn btn-warning">Edit</a></td>
                                <td><a href="{{ route('peminjam.show', $data->id) }}" class="btn btn-success">Detail Data</a></td>
                                <td><form action="{{ route('peminjam.destroy', $data->id) }}" method="post">
                                    @csrf
                                    <input type="hidden" name="_method" value="DELETE">
                                    <button class="btn btn -sm btn-danger" type="submit">Hapus Data</button>
                                </form>
                                </td>
                            </tr>
                        @endforeach
                </table>
            </div>
        </div>
    </div>
</div>
@endsection